<?php
class ControllerCheckoutRecalculate extends Controller
{
    public function index()
    {
        if ($this->request->server["REQUEST_METHOD"] == "POST" && isset($this->request->get["user_token"]) && $this->request->get["user_token"] == $this->session->data["user_token"]) {
            $json = array();
            $this->load->language("checkout/recalculate");
            if ($this->checkCalcLicense()) {
                unset($this->session->data["api_id"]);
                unset($this->session->data["run_orderpro"]);
                unset($this->session->data["order_date"]);
                unset($this->session->data["shipping_address"]);
                unset($this->session->data["shipping_method"]);
                unset($this->session->data["shipping_methods"]);
                unset($this->session->data["payment_address"]);
                unset($this->session->data["payment_method"]);
                unset($this->session->data["payment_methods"]);
                unset($this->session->data["coupon"]);
                unset($this->session->data["reward"]);
                unset($this->session->data["voucher"]);
                unset($this->session->data["vouchers"]);
                unset($this->session->data["language"]);
                $this->customer->logout();
                $run_orderpro = mt_rand(111111111, 999999999);
                $this->session->data["run_orderpro"] = $run_orderpro;
                $this->session->data["api_id"] = $run_orderpro;
                $this->load->model("checkout/recalculate");
                $this->load->model("setting/setting");
                $settings = $this->model_setting_setting->getSetting("config", $this->request->post["store_id"]);
                foreach ($settings as $key => $value) {
                    $this->config->set($key, $value);
                }
                $this->config->set("config_store_id", $this->request->post["store_id"]);
                $this->config->set("config_error_display", 0);
                $lang_code = "en-gb";
                $language_id = 1;
                $this->session->data["language"] = $this->request->post["language"];
                $this->load->model("localisation/language");
                $this->cache->delete("language");
                $languages = $this->model_localisation_language->getLanguages();
                foreach ($languages as $lang) {
                    if ($lang["code"] == $this->request->post["language"]) {
                        $lang_code = $lang["code"];
                        $language_id = $lang["language_id"];
                    }
                }
                $this->config->set("config_language_id", $language_id);
                $this->config->set("config_language", $lang_code);
                $language = new Language($lang_code);
                $language->load($lang_code);
                $this->registry->set("language", $language);
                $language->load("checkout/recalculate");
                if ($this->request->post["customer_id"]) {
                    $this->load->model("account/customer");
                    $customer_info = $this->model_account_customer->getCustomer($this->request->post["customer_id"]);
                    if ($customer_info) {
                        $this->customer->login($customer_info["email"], "", true);
                    }
                }
                $this->config->set("config_customer_group_id", $this->request->post["customer_group_id"]);
                $decimal_place = $this->config->get("orderpro_decimal_place") != "" ? $this->config->get("orderpro_decimal_place") : 2;
                $this->cart->clear();
                $this->session->data["currency"] = $this->request->post["currency_code"];
                $order_id = (int) $this->request->get["order_id"];
                $order_info = $this->getOrderInfo($order_id);
                if (!empty($order_info)) {
                    $this->session->data["order_date"] = $order_info["date_added"];
                }
                if (!empty($order_info) && $order_info["currency_code"] == $this->request->post["currency_code"]) {
                    $currency_code = $order_info["currency_code"];
                    $currency_value = $order_info["currency_value"];
                } else {
                    $this->load->model("localisation/currency");
                    $currency_info = $this->model_localisation_currency->getCurrencyByCode($this->request->post["currency_code"]);
                    $currency_code = $currency_info["code"];
                    $currency_value = $currency_info["value"];
                }
                $json["del_product_rows"] = array();
                $product_keys = array();
                $product_rows = array();
                $product_discounts = array();
                $disabled_products = array();
                $recurring_id = 0;
                if (isset($this->request->post["order_product"])) {
                    foreach ($this->request->post["order_product"] as $product_key => $order_product) {
                        $order_product["quantity"] = str_replace(",", ".", $order_product["quantity"]);
                        $order_product["quantity"] = (double) $order_product["quantity"];
                        if (0 < $order_product["product_id"] && 0 < $order_product["quantity"]) {
                            if ($order_product["status"] != "1") {
                                $this->db->query("UPDATE `" . DB_PREFIX . "product` SET `status` = '1' WHERE `product_id` = '" . (int) $order_product["product_id"] . "'");
                                $disabled_products[] = array("product_id" => $order_product["product_id"], "status" => $order_product["status"]);
                            }
                            if (!isset($order_product["option"])) {
                                $order_product["option"] = array();
                            }
                            if ($order_product["price"] != "") {
                                $order_product["price"] = str_replace(",", ".", $order_product["price"]);
                                $op_price = number_format((double) $order_product["price"], $decimal_place, ".", "");
                            } else {
                                $op_price = "";
                            }
                            $product_ident = $order_product["product_id"] . md5(serialize($order_product["option"])) . $op_price;
                            if (!in_array($product_ident, $product_keys)) {
                                $product_keys[] = $product_ident;
                                $order_product["discount_amount"] = str_replace(",", ".", $order_product["discount_amount"]);
                                $product_discounts[$product_key] = array("amount" => (double) $order_product["discount_amount"], "type" => $order_product["discount_type"]);
                                $product_rows[$product_key] = $product_key;
                            } else {
                                $json["del_product_rows"][] = $product_key;
                            }
                            if ($op_price == "") {
                                $this->model_checkout_recalculate->cartAdd($order_product["product_id"], $order_product["quantity"], $order_product["option"], $recurring_id, $product_key);
                            } else {
                                $this->model_checkout_recalculate->cartAdd($order_product["product_id"], $order_product["quantity"], $order_product["option"], $recurring_id, $product_key, $op_price);
                            }
                        } else {
                            $json["del_product_rows"][] = $product_key;
                        }
                    }
                }
                $s_country_id = !empty($this->request->post["shipping_country_id"]) ? $this->request->post["shipping_country_id"] : $this->config->get("config_country_id");
                $s_zone_id = !empty($this->request->post["shipping_zone_id"]) ? $this->request->post["shipping_zone_id"] : $this->config->get("config_zone_id");
                $p_country_id = !empty($this->request->post["payment_country_id"]) ? $this->request->post["payment_country_id"] : $this->config->get("config_country_id");
                $p_zone_id = !empty($this->request->post["payment_zone_id"]) ? $this->request->post["payment_zone_id"] : $this->config->get("config_zone_id");
                if ($this->cart->hasShipping()) {
                    $this->tax->setShippingAddress($s_country_id, $s_zone_id);
                } else {
                    $this->tax->setShippingAddress($this->config->get("config_country_id"), $this->config->get("config_zone_id"));
                }
                $this->tax->setPaymentAddress($p_country_id, $p_zone_id);
                $this->tax->setStoreAddress($this->config->get("config_country_id"), $this->config->get("config_zone_id"));
                $this->load->model("setting/extension");
                $this->load->model("localisation/country");
                $this->load->model("localisation/zone");
                $shipping_methods = array();
                if ($this->cart->hasShipping()) {
                    $s_country_info = $this->model_localisation_country->getCountry($s_country_id);
                    $s_country = !empty($s_country_info) ? $s_country_info["name"] : "";
                    $s_iso_code_2 = !empty($s_country_info) ? $s_country_info["iso_code_2"] : "";
                    $s_iso_code_3 = !empty($s_country_info) ? $s_country_info["iso_code_3"] : "";
                    $s_address_format = !empty($s_country_info) ? $s_country_info["address_format"] : "";
                    $s_zone_info = $this->model_localisation_zone->getZone($s_zone_id);
                    $s_zone = !empty($s_zone_info) ? $s_zone_info["name"] : "";
                    $s_code = !empty($s_zone_info) ? $s_zone_info["code"] : "";
                    $shipping_address = array("firstname" => $this->request->post["shipping_firstname"], "lastname" => $this->request->post["shipping_lastname"], "company" => $this->request->post["shipping_company"], "address_1" => $this->request->post["shipping_address_1"], "address_2" => $this->request->post["shipping_address_2"], "postcode" => $this->request->post["shipping_postcode"], "city" => $this->request->post["shipping_city"], "zone_id" => $s_zone_id, "zone" => $s_zone, "zone_code" => $s_code, "country_id" => $s_country_id, "country" => $s_country, "iso_code_2" => $s_iso_code_2, "iso_code_3" => $s_iso_code_3, "address_format" => $s_address_format, "custom_field" => isset($this->request->post["shipping_custom_field"]) ? $this->request->post["shipping_custom_field"] : array());
                    $this->session->data["shipping_address"] = $shipping_address;
                    $ship_methods = $this->model_setting_extension->getExtensions("shipping");
                    foreach ($ship_methods as $ship_method) {
                        if ($this->config->get("shipping_" . $ship_method["code"] . "_status")) {
                            $this->load->model("extension/shipping/" . $ship_method["code"]);
                            $squote = $this->{"model_extension_shipping_" . $ship_method["code"]}->getQuote($this->session->data["shipping_address"]);
                            if ($squote) {
                                $shipping_methods[$ship_method["code"]] = array("title" => $this->clearStr($squote["title"]), "quote" => $this->clearStr($squote["quote"]), "sort_order" => $squote["sort_order"], "error" => $this->clearStr($squote["error"]));
                            }
                        }
                    }
                    $shipping_methods = $this->model_checkout_recalculate->getDopShipping($shipping_methods, $this->session->data["shipping_address"]);
                    if ($shipping_methods) {
                        $sort_order = array();
                        foreach ($shipping_methods as $key => $value) {
                            $sort_order[$key] = $value["sort_order"];
                        }
                        array_multisort($sort_order, SORT_ASC, $shipping_methods);
                        $this->session->data["shipping_methods"] = $shipping_methods;
                    }
                    if ($this->request->post["shipping_code"]) {
                        $shipp_code = explode(".", $this->request->post["shipping_code"]);
                        if (!isset($shipp_code[0]) || !isset($shipp_code[1]) || !isset($this->session->data["shipping_methods"][$shipp_code[0]]["quote"][$shipp_code[1]])) {
                            if (!isset($this->request->post["shipping"]) || $this->request->post["shipping"] != "1") {
                                $json["warning"]["shipping"] = $language->get("error_shipping_getquote");
                            }
                        } else {
                            $this->session->data["shipping_method"] = $this->session->data["shipping_methods"][$shipp_code[0]]["quote"][$shipp_code[1]];
                        }
                    }
                } else {
                    unset($this->session->data["guest"]["shipping"]);
                    unset($this->session->data["shipping_address"]);
                    unset($this->session->data["shipping_address_id"]);
                    unset($this->session->data["shipping_method"]);
                    unset($this->session->data["shipping_methods"]);
                }
                $json["order_product"] = array();
                $taxes = array();
                $fixtaxes = array();
                $discount_cart = 0;
                $reward_cart = 0;
                $weight_cart = 0;
                $items_cart = 0;
                $sub_total = 0;
                foreach ($this->cart->getProducts() as $product) {
                    if (!isset($product_discounts[$product["product_row"]]["type"]) || !$product_discounts[$product["product_row"]]["type"]) {
                        $product_discounts[$product["product_row"]]["type"] = "P";
                    }
                    if (isset($product_discounts[$product["product_row"]]["amount"]) && 0 < $product_discounts[$product["product_row"]]["amount"]) {
                        $discount_amount = $product_discounts[$product["product_row"]]["amount"];
                        if ($product_discounts[$product["product_row"]]["type"] == "P") {
                            $discount_size = $product["total"] / 100 * $product_discounts[$product["product_row"]]["amount"];
                            $product_total = $product["total"] - $discount_size;
                            $text_discount = $product_discounts[$product["product_row"]]["amount"] . "% ( -" . $this->currency->format($discount_size, $currency_code, $currency_value) . " )";
                        }
                        if ($product_discounts[$product["product_row"]]["type"] == "S") {
                            $discount_amount = number_format((double) $product_discounts[$product["product_row"]]["amount"], $decimal_place, ".", "");
                            $discount_size = $discount_amount * $product["quantity"];
                            $product_total = $product["total"] - $discount_size;
                            $text_discount = " ( -" . $this->currency->format($discount_size, $currency_code, $currency_value) . " )";
                        }
                    } else {
                        $product_total = $product["total"];
                        $discount_amount = 0;
                        $discount_size = 0;
                        $text_discount = "";
                    }
                    if ($product["tax_class_id"]) {
                        $tax_rates = $this->tax->getRates($product_total, $product["tax_class_id"]);
                        foreach ($tax_rates as $tax_rate) {
                            if ($tax_rate["type"] == "F") {
                                $tax_amount = $tax_rate["amount"] * $product["quantity"];
                                if (!in_array($tax_rate["tax_rate_id"], $fixtaxes)) {
                                    $fixtaxes[] = $tax_rate["tax_rate_id"];
                                }
                            } else {
                                $tax_amount = $tax_rate["amount"];
                            }
                            if (!isset($taxes[$tax_rate["tax_rate_id"]])) {
                                $taxes[$tax_rate["tax_rate_id"]] = $tax_amount;
                            } else {
                                $taxes[$tax_rate["tax_rate_id"]] += $tax_amount;
                            }
                        }
                    }
                    $pweight = $this->weight->convert($product["weight"], $product["weight_class_id"], $this->config->get("config_weight_class_id"));
                    $weight_cart += $pweight;
                    $reward_cart += $product["reward"];
                    $items_cart += $product["quantity"];
                    $discount_cart += $discount_size;
                    $json["order_product"][$product_rows[$product["product_row"]]] = array("name" => $this->clearStr($product["name"]), "quantity" => $product["quantity"], "price" => number_format((double) $product["price"], $decimal_place, ".", ""), "total" => number_format((double) $product_total, $decimal_place, ".", ""), "tax" => $this->tax->getTax($product_total, $product["tax_class_id"]), "reward" => $product["reward"], "weight" => $pweight, "damount" => $discount_amount, "dtext" => $this->clearStr($text_discount));
                    $sub_total += $product_total;
                }
                $json["reward_cart"] = $reward_cart;
                $json["weight_cart"] = $weight_cart;
                $json["items_cart"] = $items_cart;
                $json["total_cart"] = number_format((double) $sub_total, $decimal_place, ".", "");
                $json["discount_cart"] = number_format((double) $discount_cart, $decimal_place, ".", "");
                $this->session->data["payment_method"]["code"] = $this->request->post["payment_code"];
                $this->session->data["payment_method"]["title"] = $this->request->post["payment_method"];
                $this->db->query("DELETE FROM `" . DB_PREFIX . "coupon_history` WHERE `order_id` = '" . $order_id . "'");
                $this->db->query("DELETE FROM `" . DB_PREFIX . "voucher_history` WHERE order_id = '" . $order_id . "'");
                if (!empty($this->request->post["coupon_code"])) {
                    $this->load->model("extension/total/coupon");
                    $coupon_info = $this->model_extension_total_coupon->getCoupon($this->request->post["coupon_code"]);
                    if ($coupon_info) {
                        $coupon_id = $coupon_info["coupon_id"];
                        $this->session->data["coupon"] = $this->request->post["coupon_code"];
                    } else {
                        $coupon_id = false;
                        $json["warning"]["coupon"] = $language->get("error_coupon_use");
                    }
                } else {
                    $coupon_id = false;
                }
                if (!empty($this->request->post["voucher_code"])) {
                    $this->load->model("extension/total/voucher");
                    $voucher_info = $this->model_extension_total_voucher->getVoucher($this->request->post["voucher_code"]);
                    if ($voucher_info) {
                        $voucher_id = $voucher_info["voucher_id"];
                        $this->session->data["voucher"] = $this->request->post["voucher_code"];
                    } else {
                        $voucher_id = false;
                        $json["warning"]["voucher"] = $language->get("error_voucher_use");
                    }
                } else {
                    $voucher_id = false;
                }
                $this->db->query("DELETE FROM `" . DB_PREFIX . "customer_reward` WHERE `order_id` = '" . (int) $order_id . "' AND `points` < '0'");
                if (!empty($this->request->post["reward_use"])) {
                    $reward_use = abs(str_replace(",", ".", $this->request->post["reward_use"]));
                    $customer_rewards = $this->customer->getRewardPoints();
                    $order_recived_reward = $this->db->query("SELECT SUM(points) AS total FROM `" . DB_PREFIX . "customer_reward` WHERE order_id = '" . (int) $order_id . "' AND points > '0'");
                    if ($order_recived_reward->num_rows) {
                        $customer_rewards = $customer_rewards - abs($order_recived_reward->row["total"]);
                    }
                    if ($customer_rewards < $reward_use) {
                        $json["warning"]["warning_reward"] = sprintf($language->get("error_reward_usemax"), $customer_rewards);
                        $json["warning_reward"] = $customer_rewards;
                        $reward_use = $customer_rewards;
                    }
                    $this->session->data["reward"] = (double) $reward_use;
                } else {
                    $reward_use = false;
                }
                $total = 0;
                $correct_total = 0;
                $tax_class_id = "";
                $discount = 0;
                $discount_sort_order = 2;
                $correct_tax = array();
                $order_totals = array();
                if (isset($this->request->post["order_total"])) {
                    foreach ($this->request->post["order_total"] as $val) {
                        $total_split = explode(",", $val["code"]);
                        if (1 < count($total_split)) {
                            $val["code"] = $total_split[0];
                        }
                        if ($val["code"] == "discount") {
                            $val["value"] = str_replace(",", ".", $val["value"]);
                            $val["value"] = 0 < $val["value"] ? $val["value"] : 0;
                            $discount += $val["value"];
                            $order_totals[] = array("code" => "discount", "discount" => "1", "title" => $val["title"], "value" => $val["value"], "sort_order" => $discount_sort_order);
                        }
                        if ($val["code"] == "correct") {
                            $val["value"] = str_replace(",", ".", $val["value"]);
                            $val["value"] = (double) $val["value"];
                            if (isset($val["tax_class_id"])) {
                                $tax_class_id = $val["tax_class_id"];
                            } else {
                                $tax_class_id = !empty($total_split[1]) ? $total_split[1] : 0;
                            }
                            if (!empty($tax_class_id)) {
                                $correct_tax = $this->tax->getRates($val["value"], $tax_class_id);
                                foreach ($correct_tax as $tax_rate) {
                                    if ($tax_rate["type"] != "F") {
                                        if (!isset($taxes[$tax_rate["tax_rate_id"]])) {
                                            $taxes[$tax_rate["tax_rate_id"]] = $tax_rate["amount"];
                                        } else {
                                            $taxes[$tax_rate["tax_rate_id"]] += $tax_rate["amount"];
                                        }
                                    }
                                }
                                $total += $val["value"];
                            } else {
                                $correct_total += $val["value"];
                            }
                            if ($this->config->get("total_tax_sort_order")) {
                                if (!empty($tax_class_id)) {
                                    $correct_sort_order = $this->config->get("total_tax_sort_order") - 1;
                                } else {
                                    $correct_sort_order = $this->config->get("total_tax_sort_order") + 1;
                                }
                            } else {
                                $correct_sort_order = $this->config->get("total_total_sort_order") - 1;
                            }
                            $order_totals[] = array("code" => "correct," . $tax_class_id, "correct" => "1", "title" => $val["title"], "value" => $val["value"], "sort_order" => $correct_sort_order);
                        }
                    }
                }
                $totals = $this->model_setting_extension->getExtensions("total");
                if ($totals) {
                    $sort_order = array();
                    foreach ($totals as $key => $value) {
                        $sort_order[$key] = $this->config->get("total_" . $value["code"] . "_sort_order");
                    }
                    array_multisort($sort_order, SORT_ASC, $totals);
                }
                foreach ($totals as $result) {
                    if ($this->config->get("total_" . $result["code"] . "_status")) {
                        if (!empty($discount) && $discount_sort_order < $this->config->get("total_" . $result["code"] . "_sort_order")) {
                            $sub = $total;
                            if (!empty($sub)) {
                                $divider = $sub / 100;
                                $multiplier = $discount / $divider;
                                $total = $sub - $discount;
                                foreach ($taxes as $key => $tax) {
                                    if (!in_array($key, $fixtaxes)) {
                                        $taxes[$key] -= $tax / 100 * $multiplier;
                                    }
                                }
                            }
                            $discount = 0;
                        }
                        $this->load->model("extension/total/" . $result["code"]);
                        if ($result["code"] == "total") {
                            $total += $correct_total;
                        }
                        $total_data = array("totals" => $order_totals, "taxes" => $taxes, "total" => $total);
                        if (!empty($this->request->post[$result["code"]])) {
                            foreach ($this->request->post["order_total"] as $val) {
                                if ($val["code"] == $result["code"]) {
                                    $order_totals[] = $val;
                                    $total += $val["value"];
                                    if ($result["code"] == "shipping") {
                                        $this->session->data["shipping_method"]["cost"] = $val["value"];
                                        if (!empty($this->session->data["shipping_method"]["tax_class_id"])) {
                                            $tax_rates = $this->tax->getRates($this->session->data["shipping_method"]["cost"], $this->session->data["shipping_method"]["tax_class_id"]);
                                            foreach ($tax_rates as $tax_rate) {
                                                if (!isset($total_data["taxes"][$tax_rate["tax_rate_id"]])) {
                                                    $total_data["taxes"][$tax_rate["tax_rate_id"]] = $tax_rate["amount"];
                                                } else {
                                                    $total_data["taxes"][$tax_rate["tax_rate_id"]] += $tax_rate["amount"];
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        } else {
                            if ($result["code"] == "sub_total") {
                                $language->load("extension/total/sub_total");
                                if ($this->config->get("total_sub_total_sort_order")) {
                                    $sub_total_sort_order = $this->config->get("total_sub_total_sort_order");
                                } else {
                                    if ($this->config->get("sub_total_sort_order")) {
                                        $sub_total_sort_order = $this->config->get("sub_total_sort_order");
                                    } else {
                                        $sub_total_sort_order = 1;
                                    }
                                }
                                $order_totals[] = array("code" => "sub_total", "title" => $language->get("text_sub_total"), "value" => $sub_total, "sort_order" => $sub_total_sort_order);
                                $total += $sub_total;
                            } else {
                                $this->{"model_extension_total_" . $result["code"]}->getTotal($total_data);
                            }
                        }
                    }
                }
                if ($order_totals) {
                    $sort_order = array();
                    if (in_array($this->request->post["order_status_id"], array_merge($this->config->get("config_processing_status"), $this->config->get("config_complete_status")))) {
                        $rewrite = true;
                    } else {
                        $rewrite = false;
                    }
                    foreach ($order_totals as $key => $value) {
                        $sort_order[$key] = $value["sort_order"];
                        if ($rewrite) {
                            if ($value["code"] == "coupon" && $coupon_id) {
                                $this->db->query("INSERT INTO `" . DB_PREFIX . "coupon_history` SET coupon_id = '" . (int) $coupon_id . "', order_id = '" . (int) $order_id . "', customer_id = '" . (int) $this->request->post["customer_id"] . "', `amount` = '" . (double) $value["value"] . "', date_added = NOW()");
                            }
                            if ($value["code"] == "voucher" && $voucher_id) {
                                $this->db->query("INSERT INTO `" . DB_PREFIX . "voucher_history` SET voucher_id = '" . (int) $voucher_id . "', order_id = '" . (int) $order_id . "', `amount` = '" . (double) $value["value"] . "', date_added = NOW()");
                            }
                            if ($value["code"] == "reward" && (double) $reward_use) {
                                $this->db->query("INSERT INTO `" . DB_PREFIX . "customer_reward` SET customer_id = '" . (int) $this->request->post["customer_id"] . "', order_id = '" . (int) $order_id . "', description = '" . $this->db->escape($language->get("text_rorder_id") . $order_id) . "', points = '" . (double) (0 - $reward_use) . "', date_added = NOW()");
                            }
                        }
                    }
                    array_multisort($sort_order, SORT_ASC, $order_totals);
                }
                $json["order_total"] = array();
                $pre_totals = $this->model_checkout_recalculate->getDopTotals($order_totals);
                if ($pre_totals) {
                    $sort_order = array();
                    foreach ($pre_totals as $key => $pre_total) {
                        $sort_order[$key] = $pre_total["sort_order"];
                        $total_text = $this->currency->format((double) $pre_total["value"], $currency_code, $currency_value);
                        $total_value = $this->clearStr((double) $pre_total["value"]);
                        $json["order_total"][] = array("code" => $pre_total["code"], "correct" => isset($pre_total["correct"]) ? 1 : 0, "discount" => isset($pre_total["discount"]) ? 1 : 0, "title" => $this->clearStr($pre_total["title"]), "text" => $this->clearStr($total_text), "value" => number_format($total_value, $decimal_place, ".", ""), "sort_order" => $pre_total["sort_order"]);
                    }
                    array_multisort($sort_order, SORT_ASC, $json["order_total"]);
                }
                $payment_methods = array();
                $p_country_info = $this->model_localisation_country->getCountry($p_country_id);
                $p_country = !empty($p_country_info) ? $p_country_info["name"] : "";
                $p_iso_code_2 = !empty($p_country_info) ? $p_country_info["iso_code_2"] : "";
                $p_iso_code_3 = !empty($p_country_info) ? $p_country_info["iso_code_3"] : "";
                $p_address_format = !empty($p_country_info) ? $p_country_info["address_format"] : "";
                $p_zone_info = $this->model_localisation_zone->getZone($p_zone_id);
                $p_zone = !empty($p_zone_info) ? $p_zone_info["name"] : "";
                $p_code = !empty($p_zone_info) ? $p_zone_info["code"] : "";
                if (isset($this->request->post["payment_custom_field"])) {
                    $payment_custom_field = $this->request->post["payment_custom_field"];
                } else {
                    if (isset($this->request->post["shipping_custom_field"])) {
                        $payment_custom_field = $this->request->post["shipping_custom_field"];
                    } else {
                        $payment_custom_field = array();
                    }
                }
                $payment_address = array("firstname" => $this->request->post["payment_firstname"], "lastname" => $this->request->post["payment_lastname"], "company" => $this->request->post["payment_company"], "address_1" => $this->request->post["payment_address_1"], "address_2" => $this->request->post["payment_address_2"], "postcode" => $this->request->post["payment_postcode"], "city" => $this->request->post["payment_city"], "zone_id" => $p_zone_id, "zone" => $p_zone, "zone_code" => $p_code, "country_id" => $p_country_id, "country" => $p_country, "iso_code_2" => $p_iso_code_2, "iso_code_3" => $p_iso_code_3, "address_format" => $p_address_format, "custom_field" => $payment_custom_field);
                $this->session->data["payment_address"] = $payment_address;
                $pay_methods = $this->model_setting_extension->getExtensions("payment");
                foreach ($pay_methods as $pay_method) {
                    if ($this->config->get("payment_" . $pay_method["code"] . "_status")) {
                        $this->load->model("extension/payment/" . $pay_method["code"]);
                        $pquote = $this->{"model_extension_payment_" . $pay_method["code"]}->getMethod($this->session->data["payment_address"], $total);
                        if ($pquote) {
                            if (isset($pquote["quote"])) {
                                foreach ($pquote["quote"] as $val) {
                                    $payment_methods[$val["code"]] = $this->clearStr($val);
                                }
                            } else {
                                if (isset($pquote["methods"])) {
                                    foreach ($pquote["methods"] as $val) {
                                        $payment_methods[$val["code"]] = $this->clearStr($val);
                                    }
                                } else {
                                    $payment_methods[$pay_method["code"]] = $this->clearStr($pquote);
                                }
                            }
                        }
                    }
                }
                $payment_methods = $this->model_checkout_recalculate->getDopPayment($payment_methods, $this->session->data["payment_address"]);
                if ($payment_methods) {
                    $sort_order = array();
                    foreach ($payment_methods as $key => $value) {
                        $sort_order[$key] = $value["sort_order"];
                    }
                    array_multisort($sort_order, SORT_ASC, $payment_methods);
                    $this->session->data["payment_methods"] = $payment_methods;
                }
                if ($this->request->post["payment_code"]) {
                    if (!isset($this->session->data["payment_methods"][$this->request->post["payment_code"]])) {
                        $json["warning"]["payment"] = $language->get("error_payment_getmetod");
                    } else {
                        $this->session->data["payment_method"] = $this->session->data["payment_methods"][$this->request->post["payment_code"]];
                    }
                }
                $json["commission"] = array();
                if (!empty($this->request->post["affiliate_id"])) {
                    $this->load->model("account/customer");
                    $affiliate_info = $this->model_account_customer->getAffiliate($this->request->post["affiliate_id"]);
                    if ($affiliate_info && $this->request->post["affiliate"] == $affiliate_info["firstname"] . " " . $affiliate_info["lastname"]) {
                        $json["commission"]["value"] = $sub_total / 100 * $affiliate_info["commission"];
                        $commission_text = $this->currency->format($json["commission"]["value"], $currency_code, $currency_value);
                        $json["commission"]["text"] = $this->clearStr($commission_text);
                    }
                }
                foreach ($disabled_products as $disabled_product) {
                    $this->db->query("UPDATE `" . DB_PREFIX . "product` SET `status` = '" . (int) $disabled_product["status"] . "' WHERE `product_id` = '" . (int) $disabled_product["product_id"] . "'");
                }
                $this->cart->clear();
                $this->customer->logout();
                unset($this->session->data["shipping_address"]);
                unset($this->session->data["shipping_method"]);
                unset($this->session->data["shipping_methods"]);
                unset($this->session->data["payment_address"]);
                unset($this->session->data["payment_method"]);
                unset($this->session->data["payment_methods"]);
                unset($this->session->data["coupon"]);
                unset($this->session->data["reward"]);
                unset($this->session->data["voucher"]);
                unset($this->session->data["vouchers"]);
                unset($this->session->data["language"]);
                unset($this->session->data["run_orderpro"]);
                unset($this->session->data["api_id"]);
                unset($this->session->data["order_date"]);
            } else {
                $json["error"]["warning"] = $this->language->get("error_license") . " " . $this->language->get("error_recalculate");
            }
            $this->response->addHeader("Content-Type: application/json");
            $this->response->setOutput(json_encode($json));
        }
    }
    public function controlReward()
    {
        if ($this->request->server["REQUEST_METHOD"] == "POST" && isset($this->request->get["user_token"]) && $this->request->get["user_token"] == $this->session->data["user_token"]) {
            $data = array();
            $this->load->model("checkout/recalculate");
            $data["order_product"] = isset($this->request->post["order_product"]) ? $this->request->post["order_product"] : array();
            $data["customer_group_id"] = $this->request->get["customer_group_id"];
            $data["customer_id"] = $this->request->get["customer_id"];
            $data["order_id"] = isset($this->request->get["order_id"]) ? $this->request->get["order_id"] : 0;
            $json = $this->model_checkout_recalculate->getReward($data);
            $this->response->addHeader("Content-Type: application/json");
            $this->response->setOutput(json_encode($json));
        }
    }
    public function getMethods()
    {
        if ($this->request->server["REQUEST_METHOD"] == "POST" && isset($this->request->get["user_token"]) && $this->request->get["user_token"] == $this->session->data["user_token"]) {
            $json = array();
            $this->load->language("checkout/recalculate");
            unset($this->session->data["api_id"]);
            unset($this->session->data["run_orderpro"]);
            unset($this->session->data["shipping_address"]);
            unset($this->session->data["shipping_method"]);
            unset($this->session->data["shipping_methods"]);
            unset($this->session->data["payment_address"]);
            unset($this->session->data["payment_method"]);
            unset($this->session->data["payment_methods"]);
            unset($this->session->data["coupon"]);
            unset($this->session->data["reward"]);
            unset($this->session->data["voucher"]);
            unset($this->session->data["vouchers"]);
            unset($this->session->data["language"]);
            $this->customer->logout();
            $run_orderpro = mt_rand(111111111, 999999999);
            $this->session->data["run_orderpro"] = $run_orderpro;
            $this->session->data["api_id"] = $run_orderpro;
            $this->load->model("checkout/recalculate");
            $this->load->model("setting/setting");
            $settings = $this->model_setting_setting->getSetting("config", $this->request->post["store_id"]);
            foreach ($settings as $key => $value) {
                $this->config->set($key, $value);
            }
            $this->config->set("config_store_id", $this->request->post["store_id"]);
            $this->config->set("config_error_display", 0);
            $lang_code = "en-gb";
            $lang_dir = DIR_LANGUAGE . "en-gb/";
            $language_id = 1;
            $this->session->data["language"] = $this->request->post["language"];
            $this->load->model("localisation/language");
            $this->cache->delete("language");
            $languages = $this->model_localisation_language->getLanguages();
            foreach ($languages as $lang) {
                if ($lang["code"] == $this->request->post["language"]) {
                    $lang_code = $lang["code"];
                    $lang_dir = DIR_LANGUAGE . $lang["code"] . "/";
                    $language_id = $lang["language_id"];
                }
            }
            $this->config->set("config_language_id", $language_id);
            $this->config->set("config_language", $lang_code);
            $language = new Language($lang_code);
            $language->load($lang_code);
            $this->registry->set("language", $language);
            $language->load("checkout/recalculate");
            if ($this->request->post["customer_id"]) {
                $this->load->model("account/customer");
                $customer_info = $this->model_account_customer->getCustomer($this->request->post["customer_id"]);
                if ($customer_info) {
                    $this->customer->login($customer_info["email"], "", true);
                }
            }
            $this->config->set("config_customer_group_id", $this->request->post["customer_group_id"]);
            $decimal_place = $this->config->get("orderpro_decimal_place") != "" ? $this->config->get("orderpro_decimal_place") : 2;
            $this->cart->clear();
            $this->session->data["currency"] = $this->request->post["currency_code"];
            $disabled_products = array();
            $recurring_id = 0;
            if (isset($this->request->post["order_product"])) {
                foreach ($this->request->post["order_product"] as $product_key => $order_product) {
                    $order_product["quantity"] = str_replace(",", ".", $order_product["quantity"]);
                    $order_product["quantity"] = (double) $order_product["quantity"];
                    if (0 < $order_product["product_id"] && 0 < $order_product["quantity"]) {
                        if ($order_product["status"] != "1") {
                            $this->db->query("UPDATE `" . DB_PREFIX . "product` SET `status` = '1' WHERE `product_id` = '" . (int) $order_product["product_id"] . "'");
                            $disabled_products[] = array("product_id" => $order_product["product_id"], "status" => $order_product["status"]);
                        }
                        if (!isset($order_product["option"])) {
                            $order_product["option"] = array();
                        }
                        if ($order_product["price"] != "") {
                            $order_product["price"] = str_replace(",", ".", $order_product["price"]);
                            $op_price = number_format((double) $order_product["price"], $decimal_place, ".", "");
                        } else {
                            $op_price = "";
                        }
                        if ($op_price == "") {
                            $this->model_checkout_recalculate->cartAdd($order_product["product_id"], $order_product["quantity"], $order_product["option"], $recurring_id, $product_key);
                        } else {
                            $this->model_checkout_recalculate->cartAdd($order_product["product_id"], $order_product["quantity"], $order_product["option"], $recurring_id, $product_key, $op_price);
                        }
                    }
                }
            }
            $s_country_id = !empty($this->request->post["shipping_country_id"]) ? $this->request->post["shipping_country_id"] : $this->config->get("config_country_id");
            $s_zone_id = !empty($this->request->post["shipping_zone_id"]) ? $this->request->post["shipping_zone_id"] : $this->config->get("config_zone_id");
            $p_country_id = !empty($this->request->post["payment_country_id"]) ? $this->request->post["payment_country_id"] : $this->config->get("config_country_id");
            $p_zone_id = !empty($this->request->post["payment_zone_id"]) ? $this->request->post["payment_zone_id"] : $this->config->get("config_zone_id");
            if ($this->cart->hasShipping()) {
                $this->tax->setShippingAddress($s_country_id, $s_zone_id);
            } else {
                $this->tax->setShippingAddress($this->config->get("config_country_id"), $this->config->get("config_zone_id"));
            }
            $this->tax->setPaymentAddress($p_country_id, $p_zone_id);
            $this->tax->setStoreAddress($this->config->get("config_country_id"), $this->config->get("config_zone_id"));
            $this->load->model("setting/extension");
            $this->load->model("localisation/country");
            $this->load->model("localisation/zone");
            $shipping_methods = array();
            $s_country_info = $this->model_localisation_country->getCountry($s_country_id);
            $s_country = !empty($s_country_info) ? $s_country_info["name"] : "";
            $s_iso_code_2 = !empty($s_country_info) ? $s_country_info["iso_code_2"] : "";
            $s_iso_code_3 = !empty($s_country_info) ? $s_country_info["iso_code_3"] : "";
            $s_address_format = !empty($s_country_info) ? $s_country_info["address_format"] : "";
            $s_zone_info = $this->model_localisation_zone->getZone($s_zone_id);
            $s_zone = !empty($s_zone_info) ? $s_zone_info["name"] : "";
            $s_code = !empty($s_zone_info) ? $s_zone_info["code"] : "";
            $shipping_address = array("firstname" => $this->request->post["shipping_firstname"], "lastname" => $this->request->post["shipping_lastname"], "company" => $this->request->post["shipping_company"], "address_1" => $this->request->post["shipping_address_1"], "address_2" => $this->request->post["shipping_address_2"], "postcode" => $this->request->post["shipping_postcode"], "city" => $this->request->post["shipping_city"], "zone_id" => $s_zone_id, "zone" => $s_zone, "zone_code" => $s_code, "country_id" => $s_country_id, "country" => $s_country, "iso_code_2" => $s_iso_code_2, "iso_code_3" => $s_iso_code_3, "address_format" => $s_address_format, "custom_field" => isset($this->request->post["shipping_custom_field"]) ? $this->request->post["shipping_custom_field"] : array());
            $this->session->data["shipping_address"] = $shipping_address;
            $ship_methods = $this->model_setting_extension->getExtensions("shipping");
            foreach ($ship_methods as $ship_method) {
                if ($this->config->get("shipping_" . $ship_method["code"] . "_status")) {
                    $this->load->model("extension/shipping/" . $ship_method["code"]);
                    $squote = $this->{"model_extension_shipping_" . $ship_method["code"]}->getQuote($this->session->data["shipping_address"]);
                    if ($squote) {
                        $shipping_methods[$ship_method["code"]] = array("title" => $this->clearStr($squote["title"]), "quote" => $this->clearStr($squote["quote"]), "sort_order" => $squote["sort_order"], "error" => $this->clearStr($squote["error"]));
                    }
                }
            }
            $shipping_methods = $this->model_checkout_recalculate->getDopShipping($shipping_methods, $this->session->data["shipping_address"]);
            if ($shipping_methods) {
                $sort_order = array();
                foreach ($shipping_methods as $key => $value) {
                    $sort_order[$key] = $value["sort_order"];
                }
                array_multisort($sort_order, SORT_ASC, $shipping_methods);
                $this->session->data["shipping_methods"] = $shipping_methods;
            }
            if ($this->request->post["shipping_code"]) {
                $shipp_code = explode(".", $this->request->post["shipping_code"]);
                if (!isset($shipp_code[0]) || !isset($shipp_code[1]) || !isset($this->session->data["shipping_methods"][$shipp_code[0]]["quote"][$shipp_code[1]])) {
                    $json["warning"]["shipping_method"] = $language->get("error_shipping_getquote");
                } else {
                    $this->session->data["shipping_method"] = $this->session->data["shipping_methods"][$shipp_code[0]]["quote"][$shipp_code[1]];
                }
            }
            $dop_methods = array();
            $so = 20;
            foreach ($ship_methods as $dop_method) {
                $ship_quote = array();
                if ($this->config->get("shipping_" . $dop_method["code"] . "_status") && !array_key_exists($dop_method["code"], $shipping_methods)) {
                    $ship_langfile = $lang_dir . "extension/shipping/" . $dop_method["code"] . ".php";
                    if (file_exists($ship_langfile)) {
                        require $ship_langfile;
                        if (isset($_["text_title"])) {
                            if (isset($_["text_description"])) {
                                $qtitle = $_["text_description"];
                                unset($_["text_description"]);
                            } else {
                                $qtitle = $_["text_title"];
                            }
                            $ship_quote[$dop_method["code"]] = array("code" => $dop_method["code"] . "." . $dop_method["code"], "title" => $this->clearStr($qtitle));
                            $dop_methods[$dop_method["code"]] = array("title" => $this->clearStr($_["text_title"]), "quote" => $ship_quote, "sort_order" => $so, "error" => $this->clearStr($language->get("error_method_available")));
                            unset($_["text_title"]);
                        }
                    }
                }
                $so++;
            }
            $all_shipping = $shipping_methods + $dop_methods;
            $json["shipping_method"] = $all_shipping;
            $order_totals = array();
            $total = 0;
            $sub_total = $this->cart->getSubTotal();
            $taxes = $this->cart->getTaxes();
            $total_data = array("totals" => $order_totals, "taxes" => $taxes, "total" => $total);
            $totals = $this->model_setting_extension->getExtensions("total");
            if ($totals) {
                $sort_order = array();
                foreach ($totals as $key => $value) {
                    $sort_order[$key] = $this->config->get("total_" . $value["code"] . "_sort_order");
                }
                array_multisort($sort_order, SORT_ASC, $totals);
            }
            foreach ($totals as $result) {
                if ($this->config->get("total_" . $result["code"] . "_status")) {
                    $this->load->model("extension/total/" . $result["code"]);
                    if (!empty($this->request->post[$result["code"]])) {
                        foreach ($this->request->post["order_total"] as $val) {
                            if ($val["code"] == $result["code"]) {
                                $order_totals[] = $val;
                                $total += $val["value"];
                                if ($result["code"] == "shipping") {
                                    $this->session->data["shipping_method"]["cost"] = $val["value"];
                                    if (!empty($this->session->data["shipping_method"]["tax_class_id"])) {
                                        $tax_rates = $this->tax->getRates($this->session->data["shipping_method"]["cost"], $this->session->data["shipping_method"]["tax_class_id"]);
                                        foreach ($tax_rates as $tax_rate) {
                                            if (!isset($total_data["taxes"][$tax_rate["tax_rate_id"]])) {
                                                $total_data["taxes"][$tax_rate["tax_rate_id"]] = $tax_rate["amount"];
                                            } else {
                                                $total_data["taxes"][$tax_rate["tax_rate_id"]] += $tax_rate["amount"];
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    } else {
                        if ($result["code"] == "sub_total") {
                            $language->load("extension/total/sub_total");
                            if ($this->config->get("total_sub_total_sort_order")) {
                                $sub_total_sort_order = $this->config->get("total_sub_total_sort_order");
                            } else {
                                if ($this->config->get("sub_total_sort_order")) {
                                    $sub_total_sort_order = $this->config->get("sub_total_sort_order");
                                } else {
                                    $sub_total_sort_order = 1;
                                }
                            }
                            $order_totals[] = array("code" => "sub_total", "title" => $language->get("text_sub_total"), "value" => $sub_total, "sort_order" => $sub_total_sort_order);
                            $total += $sub_total;
                        } else {
                            $this->{"model_extension_total_" . $result["code"]}->getTotal($total_data);
                        }
                    }
                }
            }
            $payment_methods = array();
            $p_country_info = $this->model_localisation_country->getCountry($p_country_id);
            $p_country = !empty($p_country_info) ? $p_country_info["name"] : "";
            $p_iso_code_2 = !empty($p_country_info) ? $p_country_info["iso_code_2"] : "";
            $p_iso_code_3 = !empty($p_country_info) ? $p_country_info["iso_code_3"] : "";
            $p_address_format = !empty($p_country_info) ? $p_country_info["address_format"] : "";
            $p_zone_info = $this->model_localisation_zone->getZone($p_zone_id);
            $p_zone = !empty($p_zone_info) ? $p_zone_info["name"] : "";
            $p_code = !empty($p_zone_info) ? $p_zone_info["code"] : "";
            if (isset($this->request->post["payment_custom_field"])) {
                $payment_custom_field = $this->request->post["payment_custom_field"];
            } else {
                if (isset($this->request->post["shipping_custom_field"])) {
                    $payment_custom_field = $this->request->post["shipping_custom_field"];
                } else {
                    $payment_custom_field = array();
                }
            }
            $payment_address = array("firstname" => $this->request->post["payment_firstname"], "lastname" => $this->request->post["payment_lastname"], "company" => $this->request->post["payment_company"], "address_1" => $this->request->post["payment_address_1"], "address_2" => $this->request->post["payment_address_2"], "postcode" => $this->request->post["payment_postcode"], "city" => $this->request->post["payment_city"], "zone_id" => $p_zone_id, "zone" => $p_zone, "zone_code" => $p_code, "country_id" => $p_country_id, "country" => $p_country, "iso_code_2" => $p_iso_code_2, "iso_code_3" => $p_iso_code_3, "address_format" => $p_address_format, "custom_field" => $payment_custom_field);
            $this->session->data["payment_address"] = $payment_address;
            $pay_methods = $this->model_setting_extension->getExtensions("payment");
            foreach ($pay_methods as $pay_method) {
                if ($this->config->get("payment_" . $pay_method["code"] . "_status")) {
                    $this->load->model("extension/payment/" . $pay_method["code"]);
                    $pquote = $this->{"model_extension_payment_" . $pay_method["code"]}->getMethod($this->session->data["payment_address"], $total);
                    if ($pquote) {
                        if (isset($pquote["quote"])) {
                            foreach ($pquote["quote"] as $val) {
                                $payment_methods[$val["code"]] = $this->clearStr($val);
                            }
                        } else {
                            if (isset($pquote["methods"])) {
                                foreach ($pquote["methods"] as $val) {
                                    $payment_methods[$val["code"]] = $this->clearStr($val);
                                }
                            } else {
                                $payment_methods[$pay_method["code"]] = $this->clearStr($pquote);
                            }
                        }
                    }
                }
            }
            $payment_methods = $this->model_checkout_recalculate->getDopPayment($payment_methods, $this->session->data["payment_address"]);
            if ($payment_methods) {
                $sort_order = array();
                foreach ($payment_methods as $key => $value) {
                    $sort_order[$key] = $value["sort_order"];
                }
                array_multisort($sort_order, SORT_ASC, $payment_methods);
                $this->session->data["payment_methods"] = $payment_methods;
            }
            if ($this->request->post["payment_code"]) {
                if (!isset($this->session->data["payment_methods"][$this->request->post["payment_code"]])) {
                    $json["warning"]["payment_method"] = $language->get("error_payment_getmetod");
                } else {
                    $this->session->data["payment_method"] = $this->session->data["payment_methods"][$this->request->post["payment_code"]];
                }
            }
            $dop_paymethods = array();
            $so = 20;
            foreach ($pay_methods as $dop_paymethod) {
                $pay_quote = array();
                if ($this->config->get("payment_" . $dop_paymethod["code"] . "_status") && !array_key_exists($dop_paymethod["code"], $payment_methods)) {
                    $pay_langfile = $lang_dir . "extension/payment/" . $dop_paymethod["code"] . ".php";
                    if (file_exists($pay_langfile)) {
                        require $pay_langfile;
                        if (isset($_["text_title"])) {
                            $dop_paymethods[$dop_paymethod["code"]] = array("code" => $dop_paymethod["code"], "title" => $this->clearStr($_["text_title"]), "terms" => "", "sort_order" => $so, "error" => $this->clearStr($language->get("error_method_available")));
                            unset($_["text_title"]);
                        }
                    }
                }
                $so++;
            }
            $all_payments = $payment_methods + $dop_paymethods;
            $json["payment_method"] = $all_payments;
            foreach ($disabled_products as $disabled_product) {
                $this->db->query("UPDATE `" . DB_PREFIX . "product` SET `status` = '" . (int) $disabled_product["status"] . "' WHERE `product_id` = '" . (int) $disabled_product["product_id"] . "'");
            }
            $this->cart->clear();
            $this->customer->logout();
            unset($this->session->data["shipping_address"]);
            unset($this->session->data["shipping_method"]);
            unset($this->session->data["shipping_methods"]);
            unset($this->session->data["payment_address"]);
            unset($this->session->data["payment_method"]);
            unset($this->session->data["payment_methods"]);
            unset($this->session->data["coupon"]);
            unset($this->session->data["reward"]);
            unset($this->session->data["voucher"]);
            unset($this->session->data["vouchers"]);
            unset($this->session->data["language"]);
            unset($this->session->data["run_orderpro"]);
            unset($this->session->data["api_id"]);
            $this->response->addHeader("Content-Type: application/json");
            $this->response->setOutput(json_encode($json));
        }
    }
    private function checkCalcLicense()
    {
        $lic = true;
        return $lic;
    }
    private function getOrderInfo($order_id = 0)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order` WHERE order_id = '" . (int) $order_id . "'");
        return $query->row;
    }
    public function clearArr(&$value, $key)
    {
        $value = $this->clearStr($value);
    }
    public function clearStr($str)
    {
        if (is_array($str)) {
            array_walk($str, array("ControllerCheckoutRecalculate", "clearArr"));
        } else {
            $str = html_entity_decode($str, ENT_QUOTES, "UTF-8");
            $str = preg_replace("/<\\s*script[^>]*>.*?<\\s*\\/\\s*script\\s*>/is", " ", $str);
            $str = preg_replace("/<\\s*style[^>]*>.*?<\\s*\\/\\s*style\\s*>/is", " ", $str);
            $str = preg_replace("/<\\s*select[^>]*>.*?<\\s*\\/\\s*select\\s*>/is", " ", $str);
            $str = strip_tags($str);
            $str = preg_replace("/(<([^>]+)>)/U", " ", $str);
            $str = preg_replace("/\\s\\s+/", " ", $str);
        }
        return $str;
    }
}

?>