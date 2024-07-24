<?php
class ModelSaleOrderpro extends Model
{
    public function getCopyOrder($order_id)
    {
        $new_order_id = 0;
        if ($this->checkLicense()) {
            $order_info = $this->getOrder($order_id);
            if ($order_info) {
                $custom_field = "";
                $payment_custom_field = "";
                $shipping_custom_field = "";
                if (isset($order_info["custom_field"])) {
                    $custom_field = json_encode($order_info["custom_field"]);
                }
                if (isset($order_info["payment_custom_field"])) {
                    $payment_custom_field = json_encode($order_info["payment_custom_field"]);
                }
                if (isset($order_info["shipping_custom_field"])) {
                    $shipping_custom_field = json_encode($order_info["shipping_custom_field"]);
                }
                $invoice_no = $this->getInvoiceNo();
                $this->load->model("localisation/currency");
                if (!empty($order_info["currency_code"])) {
                    $currency_info = $this->model_localisation_currency->getCurrencyByCode($order_info["currency_code"]);
                } else {
                    $currency_info = $this->model_localisation_currency->getCurrencyByCode($this->config->get("config_currency"));
                }
                $currency_id = !empty($currency_info["currency_id"]) ? $currency_info["currency_id"] : 0;
                $currency_code = !empty($currency_info["code"]) ? $currency_info["code"] : $this->config->get("config_currency");
                $currency_value = !empty($currency_info["value"]) ? $currency_info["value"] : 1;
                $date_added = date("Y-m-d H:i:s", time());
                $date_modified = date("Y-m-d H:i:s", time());
                $osql = "INSERT INTO `" . DB_PREFIX . "order` SET shipping_address_format = '" . $this->db->escape($order_info["shipping_address_format"]) . "', payment_address_format = '" . $this->db->escape($order_info["payment_address_format"]) . "',";
                $osql .= " invoice_prefix = '" . $this->db->escape($order_info["invoice_prefix"]) . "', \n\t\t\t\t\tinvoice_no = '" . $this->db->escape($invoice_no) . "', \n\t\t\t\t\tstore_id = '" . (int) $order_info["store_id"] . "', \n\t\t\t\t\tstore_name = '" . $this->db->escape($order_info["store_name"]) . "', \n\t\t\t\t\tstore_url = '" . $this->db->escape($order_info["store_url"]) . "', \n\t\t\t\t\tcustomer_id = '" . (int) $order_info["customer_id"] . "', \n\t\t\t\t\tcustomer_group_id = '" . (int) $order_info["customer_group_id"] . "', \n\t\t\t\t\tfirstname = '" . $this->db->escape($order_info["firstname"]) . "', \n\t\t\t\t\tlastname = '" . $this->db->escape($order_info["lastname"]) . "', \n\t\t\t\t\temail = '" . $this->db->escape($order_info["email"]) . "', \n\t\t\t\t\ttelephone = '" . $this->db->escape($order_info["telephone"]) . "', \n\t\t\t\t\tfax = '" . $this->db->escape($order_info["fax"]) . "', \n\t\t\t\t\tcustom_field = '" . $this->db->escape($custom_field) . "', \n\t\t\t\t\tshipping_firstname = '" . $this->db->escape($order_info["shipping_firstname"]) . "', \n\t\t\t\t\tshipping_lastname = '" . $this->db->escape($order_info["shipping_lastname"]) . "', \n\t\t\t\t\tshipping_company = '" . $this->db->escape($order_info["shipping_company"]) . "', \n\t\t\t\t\tshipping_address_1 = '" . $this->db->escape($order_info["shipping_address_1"]) . "', \n\t\t\t\t\tshipping_address_2 = '" . $this->db->escape($order_info["shipping_address_2"]) . "', \n\t\t\t\t\tshipping_city = '" . $this->db->escape($order_info["shipping_city"]) . "', \n\t\t\t\t\tshipping_postcode = '" . $this->db->escape($order_info["shipping_postcode"]) . "', \n\t\t\t\t\tshipping_country = '" . $this->db->escape($order_info["shipping_country"]) . "', \n\t\t\t\t\tshipping_country_id = '" . (int) $order_info["shipping_country_id"] . "', \n\t\t\t\t\tshipping_zone = '" . $this->db->escape($order_info["shipping_zone"]) . "', \n\t\t\t\t\tshipping_zone_id = '" . (int) $order_info["shipping_zone_id"] . "', \n\t\t\t\t\tshipping_custom_field = '" . $this->db->escape($shipping_custom_field) . "', \n\t\t\t\t\tshipping_method = '" . $this->db->escape($order_info["shipping_method"]) . "', \n\t\t\t\t\tshipping_code = '" . $this->db->escape($order_info["shipping_code"]) . "', \n\t\t\t\t\tpayment_firstname = '" . $this->db->escape($order_info["payment_firstname"]) . "', \n\t\t\t\t\tpayment_lastname = '" . $this->db->escape($order_info["payment_lastname"]) . "', \n\t\t\t\t\tpayment_company = '" . $this->db->escape($order_info["payment_company"]) . "', \n\t\t\t\t\tpayment_address_1 = '" . $this->db->escape($order_info["payment_address_1"]) . "', \n\t\t\t\t\tpayment_address_2 = '" . $this->db->escape($order_info["payment_address_2"]) . "', \n\t\t\t\t\tpayment_city = '" . $this->db->escape($order_info["payment_city"]) . "', \n\t\t\t\t\tpayment_postcode = '" . $this->db->escape($order_info["payment_postcode"]) . "', \n\t\t\t\t\tpayment_country = '" . $this->db->escape($order_info["payment_country"]) . "', \n\t\t\t\t\tpayment_country_id = '" . (int) $order_info["payment_country_id"] . "', \n\t\t\t\t\tpayment_zone = '" . $this->db->escape($order_info["payment_zone"]) . "', \n\t\t\t\t\tpayment_zone_id = '" . (int) $order_info["payment_zone_id"] . "', \n\t\t\t\t\tpayment_custom_field = '" . $this->db->escape($payment_custom_field) . "', \n\t\t\t\t\tpayment_method = '" . $this->db->escape($order_info["payment_method"]) . "', \n\t\t\t\t\tpayment_code = '" . $this->db->escape($order_info["payment_code"]) . "', \n\t\t\t\t\tcomment = '" . $this->db->escape($order_info["comment"]) . "', \n\t\t\t\t\torder_status_id = '" . (int) $this->config->get("config_order_status_id") . "', \n\t\t\t\t\taffiliate_id  = '" . (int) $order_info["affiliate_id"] . "', \n\t\t\t\t\tcommission  = '" . (double) $order_info["commission"] . "', \n\t\t\t\t\tlanguage_id = '" . (int) $order_info["language_id"] . "', \n\t\t\t\t\tcurrency_id = '" . (int) $currency_id . "', \n\t\t\t\t\tcurrency_code = '" . $this->db->escape($currency_code) . "', \n\t\t\t\t\tcurrency_value = '" . (double) $currency_value . "', \n\t\t\t\t\tdate_added = '" . $this->db->escape($date_added) . "', \n\t\t\t\t\tdate_modified = '" . $this->db->escape($date_modified) . "'";
                $this->db->query($osql);
                $new_order_id = $this->db->getLastId();
            }
        }
        return $new_order_id;
    }
    public function addProductsToOrder($order_id, $data)
    {
        $status = false;
        if ($this->checkLicense()) {
            $opfields = array();
            $opquery = $this->db->query("DESCRIBE " . DB_PREFIX . "order_product");
            foreach ($opquery->rows as $result) {
                $opfields[$result["Field"]] = array("field" => $result["Field"], "type" => $result["Type"]);
            }
            $oofields = array();
            $ooquery = $this->db->query("DESCRIBE " . DB_PREFIX . "order_option");
            foreach ($ooquery->rows as $result) {
                $oofields[$result["Field"]] = array("field" => $result["Field"], "type" => $result["Type"]);
            }
            $order_info = $this->getOrder($order_id);
            if (in_array($order_info["order_status_id"], array_merge($this->config->get("config_processing_status"), $this->config->get("config_complete_status")))) {
                $restock = true;
            } else {
                $restock = false;
            }
            foreach ($data as $old_order_id => $order_data) {
                foreach ($order_data as $order_product_id => $order_product) {
                    $data_product = array();
                    foreach ($opfields as $key => $value) {
                        if (stripos($value["type"], "int") !== false || stripos($value["type"], "dec") !== false) {
                            $data_product["i"][$key] = $order_product["product"][$value["field"]];
                        } else {
                            $data_product["s"][$key] = $order_product["product"][$value["field"]];
                        }
                    }
                    if ($data_product) {
                        $column_ignore = array("order_id", "order_product_id", "order_option_id");
                        $opsql = "";
                        foreach ($data_product["i"] as $key => $value) {
                            if (!in_array($key, $column_ignore)) {
                                $opsql .= ", `" . $key . "` = '" . (double) $value . "'";
                            }
                        }
                        foreach ($data_product["s"] as $key => $value) {
                            if (!in_array($key, $column_ignore)) {
                                $opsql .= ", `" . $key . "` = '" . $this->db->escape($value) . "'";
                            }
                        }
                        $sql = "INSERT INTO " . DB_PREFIX . "order_product SET order_id = '" . (int) $order_id . "'";
                        $sql .= $opsql;
                        $this->db->query($sql);
                        $new_order_product_id = $this->db->getLastId();
                        if ($order_product["options"]) {
                            foreach ($order_product["options"] as $options) {
                                $data_options = array();
                                foreach ($oofields as $key => $value) {
                                    if (stripos($value["type"], "int") !== false || stripos($value["type"], "dec") !== false) {
                                        $data_options["i"][$key] = $options[$value["field"]];
                                    } else {
                                        $data_options["s"][$key] = $options[$value["field"]];
                                    }
                                }
                                if ($data_options) {
                                    $oosql = "";
                                    foreach ($data_options["i"] as $key => $value) {
                                        if (!in_array($key, $column_ignore)) {
                                            $oosql .= ", `" . $key . "` = '" . (double) $value . "'";
                                        }
                                    }
                                    foreach ($data_options["s"] as $key => $value) {
                                        if (!in_array($key, $column_ignore)) {
                                            $oosql .= ", `" . $key . "` = '" . $this->db->escape($value) . "'";
                                        }
                                    }
                                    $sql = "INSERT INTO " . DB_PREFIX . "order_option SET order_id = '" . (int) $order_id . "', order_product_id = '" . (int) $new_order_product_id . "'";
                                    $sql .= $oosql;
                                    $this->db->query($sql);
                                    if ($restock && !empty($options["product_option_value_id"])) {
                                        $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity - " . (double) $order_product["product"]["quantity"] . ") WHERE product_option_value_id = '" . (int) $options["product_option_value_id"] . "' AND subtract = '1'");
                                    }
                                }
                            }
                        }
                        if ($restock) {
                            $this->db->query("UPDATE `" . DB_PREFIX . "product` SET quantity = (quantity - " . (double) $order_product["product"]["quantity"] . ") WHERE product_id = '" . (int) $order_product["product"]["product_id"] . "' AND subtract = '1'");
                        }
                    }
                }
            }
            if ($restock) {
                $this->cache->delete("product");
            }
            $status = true;
        }
        return $status;
    }
    public function editOrder($data)
    {
        $order_id = 0;
        if ($this->checkLicense()) {
            $this->load->language("sale/orderpro");
            if (!empty($data["clone"])) {
                $data["order_status_id"] = 0;
            }
            $old_products = json_decode(urldecode($data["old_products"]), true);
            if (in_array($data["order_status_id"], array_merge($this->config->get("config_processing_status"), $this->config->get("config_complete_status")))) {
                if (0 < count($old_products)) {
                    foreach ($old_products as $old_product) {
                        if (!isset($old_product["order_option"])) {
                            $old_product["order_option"] = array();
                        }
                        $this->addToStock($old_product["product_id"], $old_product["quantity"], $old_product["order_option"]);
                    }
                }
                if (isset($data["order_product"])) {
                    foreach ($data["order_product"] as $order_product) {
                        if (!isset($order_product["option"])) {
                            $order_product["option"] = array();
                        }
                        $this->substractFromStock($order_product["product_id"], $order_product["quantity"], $order_product["option"]);
                    }
                }
            }
            $this->load->model("setting/store");
            $store_info = $this->model_setting_store->getStore($data["store_id"]);
            if ($store_info) {
                $store_name = $store_info["name"];
                $store_url = $store_info["url"];
            } else {
                $store_name = $this->config->get("config_name");
                $store_url = $this->config->get("config_secure") ? HTTPS_CATALOG : HTTP_CATALOG;
            }
            $invoice_prefix = $this->config->get("config_invoice_prefix");
            $this->load->model("localisation/country");
            $this->load->model("localisation/zone");
            $country_info = $this->model_localisation_country->getCountry($data["shipping_country_id"]);
            if ($country_info) {
                $shipping_country = $country_info["name"];
                $shipping_address_format = $country_info["address_format"];
            } else {
                $shipping_country = "";
                $shipping_address_format = "{firstname} {lastname}" . "\n" . "{company}" . "\n" . "{address_1}" . "\n" . "{address_2}" . "\n" . "{city} {postcode}" . "\n" . "{zone}" . "\n" . "{country}";
            }
            $zone_info = $this->model_localisation_zone->getZone($data["shipping_zone_id"]);
            if ($zone_info) {
                $shipping_zone = $zone_info["name"];
            } else {
                $shipping_zone = "";
            }
            $paycountry_info = $this->model_localisation_country->getCountry($data["payment_country_id"]);
            if ($paycountry_info) {
                $payment_country = $paycountry_info["name"];
                $payment_address_format = $paycountry_info["address_format"];
            } else {
                $payment_country = "";
                $payment_address_format = "{firstname} {lastname}" . "\n" . "{company}" . "\n" . "{address_1}" . "\n" . "{address_2}" . "\n" . "{city} {postcode}" . "\n" . "{zone}" . "\n" . "{country}";
            }
            if (!$payment_country && $shipping_country) {
                $payment_country = $shipping_country;
            }
            if (!$data["payment_country_id"] && $data["shipping_country_id"]) {
                $data["payment_country_id"] = $data["shipping_country_id"];
            }
            $payzone_info = $this->model_localisation_zone->getZone($data["payment_zone_id"]);
            if ($payzone_info) {
                $payment_zone = $payzone_info["name"];
            } else {
                $payment_zone = "";
            }
            if (!$payment_zone && $shipping_zone) {
                $payment_zone = $shipping_zone;
            }
            if (!$data["payment_zone_id"] && $data["shipping_zone_id"]) {
                $data["payment_zone_id"] = $data["shipping_zone_id"];
            }
            $this->load->model("localisation/currency");
            if (isset($data["currency_code"])) {
                if (!empty($order_info) && $order_info["currency_code"] == $data["currency_code"]) {
                    $currency_id = $order_info["currency_id"];
                    $currency_code = $order_info["currency_code"];
                    $currency_value = $order_info["currency_value"];
                } else {
                    $currency_info = $this->model_localisation_currency->getCurrencyByCode($data["currency_code"]);
                    $currency_id = $currency_info["currency_id"];
                    $currency_code = $currency_info["code"];
                    $currency_value = $currency_info["value"];
                }
            } else {
                if ($currency_info = $this->model_localisation_currency->getCurrencyByCode($this->config->get("config_currency"))) {
                    $currency_id = $currency_info["currency_id"];
                    $currency_code = $currency_info["code"];
                    $currency_value = $currency_info["value"];
                } else {
                    $currency_id = 0;
                    $currency_code = $this->config->get("config_currency");
                    $currency_value = 1;
                }
            }
            $language_id = $this->config->get("config_language_id");
            $languages = $this->getLanguages();
            foreach ($languages as $lang) {
                if ($lang["code"] == $data["language"]) {
                    $language_id = $lang["language_id"];
                }
            }
            if ($language_id) {
                $this->load->model("setting/setting");
                $langdata = $this->model_setting_setting->getSettingValue("config_langdata", $data["store_id"]);
                if ($langdata) {
                    $store_infos = json_decode($langdata, true);
                    if (!empty($store_infos[$language_id]["name"])) {
                        $store_name = $store_infos[$language_id]["name"];
                    }
                }
            }
            if (!empty($data["clone"])) {
                $keep_order_id = false;
                $data["date_added"] = date("Y-m-d H:i:s", time());
                $clone = true;
            } else {
                if (!empty($data["order_id"])) {
                    $keep_order_id = $data["order_id"];
                    $this->db->query("DELETE FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int) $data["order_id"] . "'");
                    $this->db->query("DELETE FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int) $data["order_id"] . "'");
                    $this->db->query("DELETE FROM " . DB_PREFIX . "order_total WHERE order_id = '" . (int) $data["order_id"] . "'");
                } else {
                    $keep_order_id = false;
                }
                $clone = false;
            }
            if (!empty($data["date_added"])) {
                $data["date_added"] = $data["date_added"];
            } else {
                $data["date_added"] = date("Y-m-d H:i:s", time());
            }
            $data["date_modified"] = date("Y-m-d H:i:s", time());
            if (isset($data["affiliate_id"])) {
                $affiliate_id = $data["affiliate_id"];
            } else {
                $affiliate_id = 0;
            }
            if (isset($data["commission"])) {
                $commission = $data["commission"];
            } else {
                $commission = 0;
            }
            if (isset($data["payment_code"])) {
                $payment_code = $data["payment_code"];
            } else {
                $payment_code = "";
            }
            if (isset($data["payment_method"])) {
                $payment_method = $data["payment_method"];
            } else {
                $payment_method = "";
            }
            if (isset($data["shipping_code"])) {
                $shipping_code = $data["shipping_code"];
            } else {
                $shipping_code = "";
            }
            if (isset($data["shipping_method"])) {
                $shipping_method = $data["shipping_method"];
            } else {
                $shipping_method = "";
            }
            if (!empty($data["order_total"])) {
                foreach ($data["order_total"] as $ototal) {
                    if ($ototal["code"] == "shipping") {
                        $shipping_method = $ototal["title"];
                    }
                }
            }
            $custom_field = "";
            $payment_custom_field = "";
            $shipping_custom_field = "";
            if (isset($data["custom_field"])) {
                $custom_field = json_encode($data["custom_field"]);
            }
            if (isset($data["payment_custom_field"])) {
                $payment_custom_field = json_encode($data["payment_custom_field"]);
            }
            if (isset($data["shipping_custom_field"])) {
                $shipping_custom_field = json_encode($data["shipping_custom_field"]);
            }
            if ($keep_order_id) {
                $osql = "UPDATE `" . DB_PREFIX . "order` SET";
            } else {
                $osql = "INSERT INTO `" . DB_PREFIX . "order` SET shipping_address_format = '" . $this->db->escape($shipping_address_format) . "', payment_address_format = '" . $this->db->escape($payment_address_format) . "',";
            }
            $osql .= " invoice_prefix = '" . $this->db->escape($invoice_prefix) . "', \n\t\t\t\t\tinvoice_no = '" . $this->db->escape($data["invoice_no"]) . "', \n\t\t\t\t\tstore_id = '" . (int) $data["store_id"] . "', \n\t\t\t\t\tstore_name = '" . $this->db->escape($store_name) . "', \n\t\t\t\t\tstore_url = '" . $this->db->escape($store_url) . "', \n\t\t\t\t\tcustomer_id = '" . (int) $data["customer_id"] . "', \n\t\t\t\t\tcustomer_group_id = '" . (int) $data["customer_group_id"] . "', \n\t\t\t\t\tfirstname = '" . $this->db->escape($data["firstname"]) . "', \n\t\t\t\t\tlastname = '" . $this->db->escape($data["lastname"]) . "', \n\t\t\t\t\temail = '" . $this->db->escape($data["email"]) . "', \n\t\t\t\t\ttelephone = '" . $this->db->escape($data["telephone"]) . "', \n\t\t\t\t\tfax = '" . $this->db->escape($data["fax"]) . "', \n\t\t\t\t\tcustom_field = '" . $this->db->escape($custom_field) . "', \n\t\t\t\t\tshipping_firstname = '" . $this->db->escape($data["shipping_firstname"]) . "', \n\t\t\t\t\tshipping_lastname = '" . $this->db->escape($data["shipping_lastname"]) . "', \n\t\t\t\t\tshipping_company = '" . $this->db->escape($data["shipping_company"]) . "', \n\t\t\t\t\tshipping_address_1 = '" . $this->db->escape($data["shipping_address_1"]) . "', \n\t\t\t\t\tshipping_address_2 = '" . $this->db->escape($data["shipping_address_2"]) . "', \n\t\t\t\t\tshipping_city = '" . $this->db->escape($data["shipping_city"]) . "', \n\t\t\t\t\tshipping_postcode = '" . $this->db->escape($data["shipping_postcode"]) . "', \n\t\t\t\t\tshipping_country = '" . $this->db->escape($shipping_country) . "', \n\t\t\t\t\tshipping_country_id = '" . (int) $data["shipping_country_id"] . "', \n\t\t\t\t\tshipping_zone = '" . $this->db->escape($shipping_zone) . "', \n\t\t\t\t\tshipping_zone_id = '" . (int) $data["shipping_zone_id"] . "', \n\t\t\t\t\tshipping_custom_field = '" . $this->db->escape($shipping_custom_field) . "', \n\t\t\t\t\tshipping_method = '" . $this->db->escape($shipping_method) . "', \n\t\t\t\t\tshipping_code = '" . $this->db->escape($shipping_code) . "', \n\t\t\t\t\tpayment_firstname = '" . $this->db->escape($data["payment_firstname"]) . "', \n\t\t\t\t\tpayment_lastname = '" . $this->db->escape($data["payment_lastname"]) . "', \n\t\t\t\t\tpayment_company = '" . $this->db->escape($data["payment_company"]) . "', \n\t\t\t\t\tpayment_address_1 = '" . $this->db->escape($data["payment_address_1"]) . "', \n\t\t\t\t\tpayment_address_2 = '" . $this->db->escape($data["payment_address_2"]) . "', \n\t\t\t\t\tpayment_city = '" . $this->db->escape($data["payment_city"]) . "', \n\t\t\t\t\tpayment_postcode = '" . $this->db->escape($data["payment_postcode"]) . "', \n\t\t\t\t\tpayment_country = '" . $this->db->escape($payment_country) . "', \n\t\t\t\t\tpayment_country_id = '" . (int) $data["payment_country_id"] . "', \n\t\t\t\t\tpayment_zone = '" . $this->db->escape($payment_zone) . "', \n\t\t\t\t\tpayment_zone_id = '" . (int) $data["payment_zone_id"] . "', \n\t\t\t\t\tpayment_custom_field = '" . $this->db->escape($payment_custom_field) . "', \n\t\t\t\t\tpayment_method = '" . $this->db->escape($payment_method) . "', \n\t\t\t\t\tpayment_code = '" . $this->db->escape($payment_code) . "', \n\t\t\t\t\tcomment = '" . $this->db->escape($data["comment"]) . "', \n\t\t\t\t\torder_status_id = '" . (int) $data["order_status_id"] . "', \n\t\t\t\t\taffiliate_id  = '" . (int) $affiliate_id . "', \n\t\t\t\t\tcommission  = '" . (double) $commission . "', \n\t\t\t\t\tlanguage_id = '" . (int) $language_id . "', \n\t\t\t\t\tcurrency_id = '" . (int) $currency_id . "', \n\t\t\t\t\tcurrency_code = '" . $this->db->escape($currency_code) . "', \n\t\t\t\t\tcurrency_value = '" . (double) $currency_value . "', \n\t\t\t\t\tdate_added = '" . $this->db->escape($data["date_added"]) . "', \n\t\t\t\t\tdate_modified = '" . $this->db->escape($data["date_modified"]) . "'";
            if ($keep_order_id) {
                $osql .= " WHERE order_id = '" . (int) $keep_order_id . "'";
            }
            $this->db->query($osql);
            if ($keep_order_id) {
                $order_id = $keep_order_id;
            } else {
                $order_id = $this->db->getLastId();
                $this->db->query("UPDATE " . DB_PREFIX . "customer_transaction SET order_id = '" . (int) $order_id . "' WHERE order_id = '" . (int) $data["temp_order_id"] . "'");
                if (in_array($data["order_status_id"], array_merge($this->config->get("config_processing_status"), $this->config->get("config_complete_status")))) {
                    $this->db->query("UPDATE " . DB_PREFIX . "coupon_history SET order_id = '" . (int) $order_id . "' WHERE order_id = '" . (int) $data["temp_order_id"] . "'");
                    $this->db->query("UPDATE " . DB_PREFIX . "voucher_history SET order_id = '" . (int) $order_id . "' WHERE order_id = '" . (int) $data["temp_order_id"] . "'");
                    $this->db->query("UPDATE " . DB_PREFIX . "customer_reward SET order_id = '" . (int) $order_id . "', description = '" . $this->db->escape($this->language->get("text_order_id") . $order_id) . "' WHERE order_id = '" . (int) $data["temp_order_id"] . "'");
                } else {
                    $this->db->query("DELETE FROM " . DB_PREFIX . "coupon_history WHERE order_id = '" . (int) $data["temp_order_id"] . "'");
                    $this->db->query("DELETE FROM " . DB_PREFIX . "voucher_history WHERE order_id = '" . (int) $data["temp_order_id"] . "'");
                    $this->db->query("DELETE FROM " . DB_PREFIX . "customer_reward WHERE order_id = '" . (int) $data["temp_order_id"] . "' AND points < 0");
                }
            }
            if (!empty($data["order_product"])) {
                $this->load->model("catalog/product");
                foreach ($data["order_product"] as $order_product) {
                    if (0 < $order_product["product_id"] && 0 < $order_product["quantity"]) {
                        $psql = "INSERT INTO " . DB_PREFIX . "order_product SET";
                        if (!empty($order_product["order_product_id"]) && !$clone) {
                            $psql .= " order_product_id = '" . (int) $order_product["order_product_id"] . "',";
                        }
                        $psql .= " order_id = '" . (int) $order_id . "', product_id = '" . (int) $order_product["product_id"] . "', name = '" . $this->db->escape($order_product["name"]) . "', model = '" . $this->db->escape($order_product["model"]) . "', sku = '" . $this->db->escape($order_product["sku"]) . "', upc = '" . $this->db->escape($order_product["upc"]) . "', ean = '" . $this->db->escape($order_product["ean"]) . "', jan = '" . $this->db->escape($order_product["jan"]) . "', isbn = '" . $this->db->escape($order_product["isbn"]) . "', mpn = '" . $this->db->escape($order_product["mpn"]) . "', location = '" . $this->db->escape($order_product["location"]) . "', weight = '" . $this->db->escape($order_product["weight"]) . "', quantity = '" . (double) $order_product["quantity"] . "', price = '" . (double) $order_product["price"] . "', discount_amount = '" . (double) $order_product["discount_amount"] . "', discount_type = '" . $this->db->escape($order_product["discount_type"]) . "', total = '" . (double) $order_product["total"] . "', tax = '" . (double) $order_product["tax"] . "', reward = '" . (double) $order_product["reward"] . "'";
                        $this->db->query($psql);
                        if (!empty($order_product["order_product_id"]) && !$clone) {
                            $order_product_id = $order_product["order_product_id"];
                        } else {
                            $order_product_id = $this->db->getLastId();
                        }
                        $all_options = $this->model_catalog_product->getProductOptions($order_product["product_id"]);
                        if (isset($order_product["option"])) {
                            foreach ($order_product["option"] as $product_option_id => $order_option) {
                                $values = array();
                                $value = $type = $name = "";
                                foreach ($all_options as $this_option) {
                                    if ($this_option["product_option_id"] == $product_option_id) {
                                        $name = $this_option["name"];
                                        $type = $this_option["type"];
                                        if (isset($this_option["product_option_value"]) && !empty($this_option["product_option_value"])) {
                                            foreach ($this_option["product_option_value"] as $this_option_value) {
                                                if ($type != "checkbox" && $this_option_value["product_option_value_id"] == $order_option) {
                                                    $value = $this_option_value["name"];
                                                } else {
                                                    if ($type == "checkbox" && in_array($this_option_value["product_option_value_id"], $order_option)) {
                                                        $values[] = array("value" => $this_option_value["name"], "product_option_value_id" => $this_option_value["product_option_value_id"]);
                                                    }
                                                }
                                            }
                                        } else {
                                            $value = $order_option;
                                            $order_option = "0";
                                        }
                                        if (count($values) < 1 && empty($value)) {
                                            continue 2;
                                        }
                                        break;
                                    }
                                }
                                if ($type != "checkbox") {
                                    $this->db->query("INSERT INTO " . DB_PREFIX . "order_option SET order_id = '" . (int) $order_id . "', order_product_id = '" . (int) $order_product_id . "', product_option_id = '" . (int) $product_option_id . "', product_option_value_id = '" . (int) $order_option . "', name = '" . $this->db->escape($name) . "', `value` = '" . $this->db->escape($value) . "', `type` = '" . $this->db->escape($type) . "'");
                                } else {
                                    foreach ($values as $option_value) {
                                        $this->db->query("INSERT INTO " . DB_PREFIX . "order_option SET order_id = '" . (int) $order_id . "', order_product_id = '" . (int) $order_product_id . "', product_option_id = '" . (int) $product_option_id . "', product_option_value_id = '" . (int) $option_value["product_option_value_id"] . "', name = '" . $this->db->escape($name) . "', `value` = '" . $this->db->escape($option_value["value"]) . "', `type` = '" . $this->db->escape($type) . "'");
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $total = 0;
            if (!empty($data["order_total"])) {
                foreach ($data["order_total"] as $order_total) {
                    $this->db->query("INSERT INTO " . DB_PREFIX . "order_total SET order_id = '" . (int) $order_id . "', code = '" . $this->db->escape($order_total["code"]) . "', title = '" . $this->db->escape($order_total["title"]) . "', `value` = '" . (double) $order_total["value"] . "', sort_order = '" . (int) $order_total["sort_order"] . "'");
                    if ($order_total["code"] != "discount") {
                        $total += $order_total["value"];
                    }
                    if ($order_total["code"] == "total") {
                        $total_set = (double) $order_total["value"];
                    }
                }
                if (isset($total_set)) {
                    $total = $total_set;
                }
                $this->db->query("UPDATE `" . DB_PREFIX . "order` SET total = '" . (double) $total . "' WHERE order_id = '" . (int) $order_id . "'");
            }
            if ($clone) {
                if (!empty($data["order_id"])) {
                    $comment = $this->language->get("text_order_clone") . $data["order_id"];
                } else {
                    $comment = "";
                }
                $hdata = array("order_status_id" => $this->config->get("config_order_status_id"), "notify" => "0", "notify_admin" => "0", "comment" => $comment, "order_clone" => "1");
                $this->load->model("sale/orderproh");
                $this->model_sale_orderproh->addOrderHistory($order_id, $hdata);
            }
            if (!$keep_order_id && !$clone) {
                $hdata = array("order_status_id" => $data["order_status_id"], "notify" => "0", "notify_admin" => "0", "comment" => "", "order_new" => "1", "neworder_notify" => $this->config->get("orderpro_neworder_notify") ? 1 : 0, "neworder_notify_admin" => $this->config->get("orderpro_neworder_notify_admin") ? 1 : 0);
                $this->load->model("sale/orderproh");
                $this->model_sale_orderproh->addOrderHistory($order_id, $hdata);
            }
        }
        return $order_id;
    }
    public function addToStock($product_id = 0, $quantity = 0, $product_options = array())
    {
        $this->db->query("UPDATE `" . DB_PREFIX . "product` SET quantity = (quantity + " . (double) $quantity . ") WHERE product_id = '" . (int) $product_id . "' AND subtract = '1'");
        foreach ($product_options as $options) {
            foreach ($options as $option) {
                $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity + " . (double) $quantity . ") WHERE product_option_value_id = '" . (int) $option["product_option_value_id"] . "' AND subtract = '1'");
            }
        }
    }
    public function substractFromStock($product_id = 0, $quantity = 0, $product_options = array())
    {
        $this->db->query("UPDATE `" . DB_PREFIX . "product` SET quantity = (quantity - " . (double) $quantity . ") WHERE product_id = '" . (int) $product_id . "' AND subtract = '1'");
        foreach ($product_options as $product_option_value) {
            if (is_array($product_option_value)) {
                foreach ($product_option_value as $product_option_value_id) {
                    $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity - " . (double) $quantity . ") WHERE product_option_value_id = '" . (int) $product_option_value_id . "' AND subtract = '1'");
                }
            } else {
                $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity - " . (double) $quantity . ") WHERE product_option_value_id = '" . (int) $product_option_value . "' AND subtract = '1'");
            }
        }
    }
    public function addToStockOrderId($order_id)
    {
        $product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int) $order_id . "'");
        foreach ($product_query->rows as $product) {
            $this->db->query("UPDATE `" . DB_PREFIX . "product` SET quantity = (quantity + " . (double) $product["quantity"] . ") WHERE product_id = '" . (int) $product["product_id"] . "' AND subtract = '1'");
            $option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int) $order_id . "' AND order_product_id = '" . (int) $product["order_product_id"] . "'");
            foreach ($option_query->rows as $option) {
                $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity + " . (double) $product["quantity"] . ") WHERE product_option_value_id = '" . (int) $option["product_option_value_id"] . "' AND subtract = '1'");
            }
        }
    }
    public function substractFromStockOrderId($order_id)
    {
        $product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int) $order_id . "'");
        foreach ($product_query->rows as $product) {
            $this->db->query("UPDATE `" . DB_PREFIX . "product` SET quantity = (quantity - " . (double) $product["quantity"] . ") WHERE product_id = '" . (int) $product["product_id"] . "' AND subtract = '1'");
            $option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int) $order_id . "' AND order_product_id = '" . (int) $product["order_product_id"] . "'");
            foreach ($option_query->rows as $option) {
                $this->db->query("UPDATE " . DB_PREFIX . "product_option_value SET quantity = (quantity - " . (double) $product["quantity"] . ") WHERE product_option_value_id = '" . (int) $option["product_option_value_id"] . "' AND subtract = '1'");
            }
        }
    }
    public function clearOrder($temp_order_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "customer_reward WHERE order_id = '" . (int) $temp_order_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "coupon_history WHERE order_id = '" . (int) $temp_order_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "voucher_history WHERE order_id = '" . (int) $temp_order_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "order_history WHERE order_id = '" . (int) $temp_order_id . "'");
    }
    public function deleteOrder($order_id)
    {
        if ($this->checkLicense()) {
            $order_status = $this->db->query("SELECT order_status_id FROM `" . DB_PREFIX . "order` WHERE order_id = '" . (int) $order_id . "'");
            if ($order_status->num_rows && in_array($order_status->row["order_status_id"], array_merge($this->config->get("config_processing_status"), $this->config->get("config_complete_status")))) {
                $this->addToStockOrderId($order_id);
            }
            $this->db->query("DELETE FROM `" . DB_PREFIX . "order` WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "order_voucher WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "order_total WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "order_history WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "customer_transaction WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "customer_reward WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "coupon_history WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "voucher_history WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("UPDATE " . DB_PREFIX . "voucher SET status = '0' WHERE order_id = '" . (int) $order_id . "'");
            $this->db->query("DELETE `or`, ort FROM `" . DB_PREFIX . "order_recurring` `or`, `" . DB_PREFIX . "order_recurring_transaction` `ort` WHERE order_id = '" . (int) $order_id . "' AND ort.order_recurring_id = `or`.order_recurring_id");
        }
    }
    public function getOrder($order_id)
    {
        $order_query = $this->db->query("SELECT *, (SELECT CONCAT(c.firstname, ' ', c.lastname) FROM " . DB_PREFIX . "customer c WHERE c.customer_id = o.customer_id) AS customer, (SELECT os.name FROM " . DB_PREFIX . "order_status os WHERE os.order_status_id = o.order_status_id AND os.language_id = o.language_id) AS order_status FROM `" . DB_PREFIX . "order` o WHERE o.order_id = '" . (int) $order_id . "'");
        if ($order_query->num_rows) {
            $reward = 0;
            $order_product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int) $order_id . "'");
            foreach ($order_product_query->rows as $product) {
                $reward += $product["reward"];
            }
            $country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int) $order_query->row["payment_country_id"] . "'");
            if ($country_query->num_rows) {
                $payment_iso_code_2 = $country_query->row["iso_code_2"];
                $payment_iso_code_3 = $country_query->row["iso_code_3"];
            } else {
                $payment_iso_code_2 = "";
                $payment_iso_code_3 = "";
            }
            $zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int) $order_query->row["payment_zone_id"] . "'");
            if ($zone_query->num_rows) {
                $payment_zone_code = $zone_query->row["code"];
            } else {
                $payment_zone_code = "";
            }
            $country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int) $order_query->row["shipping_country_id"] . "'");
            if ($country_query->num_rows) {
                $shipping_iso_code_2 = $country_query->row["iso_code_2"];
                $shipping_iso_code_3 = $country_query->row["iso_code_3"];
            } else {
                $shipping_iso_code_2 = "";
                $shipping_iso_code_3 = "";
            }
            $zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int) $order_query->row["shipping_zone_id"] . "'");
            if ($zone_query->num_rows) {
                $shipping_zone_code = $zone_query->row["code"];
            } else {
                $shipping_zone_code = "";
            }
            if ($order_query->row["affiliate_id"]) {
                $affiliate_id = $order_query->row["affiliate_id"];
            } else {
                $affiliate_id = 0;
            }
            $this->load->model("customer/customer");
            $affiliate_info = $this->model_customer_customer->getAffiliate($affiliate_id);
            if ($affiliate_info) {
                $affiliate_firstname = $affiliate_info["firstname"];
                $affiliate_lastname = $affiliate_info["lastname"];
            } else {
                $affiliate_firstname = "";
                $affiliate_lastname = "";
            }
            $this->load->model("localisation/language");
            $language_info = $this->model_localisation_language->getLanguage($order_query->row["language_id"]);
            if ($language_info) {
                $language_code = $language_info["code"];
                $language_directory = $language_info["code"];
            } else {
                $language_code = "en-gb";
                $language_directory = "en-gb";
            }
            $custom_field = json_decode($order_query->row["custom_field"], true);
            $payment_custom_field = json_decode($order_query->row["payment_custom_field"], true);
            $shipping_custom_field = json_decode($order_query->row["shipping_custom_field"], true);
            return array("order_id" => $order_query->row["order_id"], "invoice_no" => $order_query->row["invoice_no"], "invoice_prefix" => $order_query->row["invoice_prefix"], "store_id" => $order_query->row["store_id"], "store_name" => $order_query->row["store_name"], "store_url" => $order_query->row["store_url"], "customer_id" => $order_query->row["customer_id"], "customer" => $order_query->row["customer"], "customer_group_id" => $order_query->row["customer_group_id"], "firstname" => $order_query->row["firstname"], "lastname" => $order_query->row["lastname"], "telephone" => $order_query->row["telephone"], "fax" => $order_query->row["fax"], "email" => $order_query->row["email"], "custom_field" => $custom_field, "payment_firstname" => $order_query->row["payment_firstname"], "payment_lastname" => $order_query->row["payment_lastname"], "payment_company" => $order_query->row["payment_company"], "payment_address_1" => $order_query->row["payment_address_1"], "payment_address_2" => $order_query->row["payment_address_2"], "payment_postcode" => $order_query->row["payment_postcode"], "payment_city" => $order_query->row["payment_city"], "payment_zone_id" => $order_query->row["payment_zone_id"], "payment_zone" => $order_query->row["payment_zone"], "payment_zone_code" => $payment_zone_code, "payment_country_id" => $order_query->row["payment_country_id"], "payment_country" => $order_query->row["payment_country"], "payment_iso_code_2" => $payment_iso_code_2, "payment_iso_code_3" => $payment_iso_code_3, "payment_address_format" => $order_query->row["payment_address_format"], "payment_custom_field" => $payment_custom_field, "payment_method" => $order_query->row["payment_method"], "payment_code" => $order_query->row["payment_code"], "shipping_firstname" => $order_query->row["shipping_firstname"], "shipping_lastname" => $order_query->row["shipping_lastname"], "shipping_company" => $order_query->row["shipping_company"], "shipping_address_1" => $order_query->row["shipping_address_1"], "shipping_address_2" => $order_query->row["shipping_address_2"], "shipping_postcode" => $order_query->row["shipping_postcode"], "shipping_city" => $order_query->row["shipping_city"], "shipping_zone_id" => $order_query->row["shipping_zone_id"], "shipping_zone" => $order_query->row["shipping_zone"], "shipping_zone_code" => $shipping_zone_code, "shipping_country_id" => $order_query->row["shipping_country_id"], "shipping_country" => $order_query->row["shipping_country"], "shipping_iso_code_2" => $shipping_iso_code_2, "shipping_iso_code_3" => $shipping_iso_code_3, "shipping_address_format" => $order_query->row["shipping_address_format"], "shipping_custom_field" => $shipping_custom_field, "shipping_method" => $order_query->row["shipping_method"], "shipping_code" => $order_query->row["shipping_code"], "comment" => $order_query->row["comment"], "total" => $order_query->row["total"], "reward" => $reward, "order_status_id" => $order_query->row["order_status_id"], "order_status" => $order_query->row["order_status"], "affiliate_id" => $order_query->row["affiliate_id"], "affiliate_firstname" => $affiliate_firstname, "affiliate_lastname" => $affiliate_lastname, "commission" => $order_query->row["commission"], "marketing_id" => $order_query->row["marketing_id"], "tracking" => $order_query->row["tracking"], "language_id" => $order_query->row["language_id"], "language_code" => $language_code, "language_directory" => $language_directory, "currency_id" => $order_query->row["currency_id"], "currency_code" => $order_query->row["currency_code"], "currency_value" => $order_query->row["currency_value"], "ip" => $order_query->row["ip"], "forwarded_ip" => $order_query->row["forwarded_ip"], "user_agent" => $order_query->row["user_agent"], "accept_language" => $order_query->row["accept_language"], "date_added" => $order_query->row["date_added"], "date_modified" => $order_query->row["date_modified"]);
        } else {
            return false;
        }
    }
    public function getOrders($data = array())
    {
        $sql = "SELECT *, CONCAT(o.firstname, ' ', o.lastname) AS customer, (SELECT os.name FROM " . DB_PREFIX . "order_status os WHERE os.order_status_id = o.order_status_id AND os.language_id = '" . (int) $this->config->get("config_language_id") . "') AS status FROM `" . DB_PREFIX . "order` o WHERE 1";
        if (isset($data["filter_order_status_id"]) && !is_null($data["filter_order_status_id"])) {
            $sql .= " AND o.order_status_id = '" . (int) $data["filter_order_status_id"] . "'";
        }
        if (!empty($data["filter_order_id"])) {
            $sql .= " AND o.order_id = '" . (int) $data["filter_order_id"] . "'";
        }
        if (!empty($data["filter_customer"])) {
            $sql .= " AND CONCAT(o.firstname, ' ', o.lastname) LIKE '%" . $this->db->escape($data["filter_customer"]) . "%'";
        }
        if (!empty($data["filter_customer_id"])) {
            $sql .= " AND o.customer_id = '" . (int) $data["filter_customer_id"] . "'";
        }
        if (!empty($data["filter_lastname"])) {
            $sql .= " AND (o.lastname = '" . $this->db->escape($data["filter_lastname"]) . "' OR o.payment_lastname = '" . $this->db->escape($data["filter_lastname"]) . "' OR o.shipping_lastname = '" . $this->db->escape($data["filter_lastname"]) . "')";
        }
        if (!empty($data["filter_company"])) {
            $sql .= " AND (o.payment_company = '" . $this->db->escape($data["filter_company"]) . "' OR o.shipping_company = '" . $this->db->escape($data["filter_company"]) . "')";
        }
        if (!empty($data["filter_email"])) {
            $sql .= " AND o.email = '" . $this->db->escape($data["filter_email"]) . "'";
        }
        if (!empty($data["filter_telephone"])) {
            $sql .= " AND o.telephone = '" . $this->db->escape($data["filter_telephone"]) . "'";
        }
        if (!empty($data["filter_fax"])) {
            $sql .= " AND o.fax = '" . $this->db->escape($data["filter_fax"]) . "'";
        }
        if (!empty($data["filter_date_added"])) {
            $sql .= " AND DATE(o.date_added) = DATE('" . $this->db->escape($data["filter_date_added"]) . "')";
        }
        if (!empty($data["filter_date_modified"])) {
            $sql .= " AND DATE(o.date_modified) = DATE('" . $this->db->escape($data["filter_date_modified"]) . "')";
        }
        if (!empty($data["filter_total"])) {
            $sql .= " AND o.total = '" . (double) $data["filter_total"] . "'";
        }
        $sort_data = array("o.order_id", "customer", "status", "o.date_added", "o.date_modified", "o.total");
        if (isset($data["sort"]) && in_array($data["sort"], $sort_data)) {
            $sql .= " ORDER BY " . $data["sort"];
        } else {
            $sql .= " ORDER BY o.order_id";
        }
        if (isset($data["order"]) && $data["order"] == "DESC") {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }
        if (isset($data["start"]) || isset($data["limit"])) {
            if ($data["start"] < 0) {
                $data["start"] = 0;
            }
            if ($data["limit"] < 1) {
                $data["limit"] = 20;
            }
            $sql .= " LIMIT " . (int) $data["start"] . "," . (int) $data["limit"];
        }
        $query = $this->db->query($sql);
        return $query->rows;
    }
    public function getTotalOrders($data = array(), $order_id = 0)
    {
        $sql = "SELECT COUNT(*) AS totals FROM `" . DB_PREFIX . "order` o WHERE 1";
        if (!empty($order_id)) {
            $sql .= " AND o.order_id <> '" . (int) $order_id . "'";
        }
        if (isset($data["filter_order_status_id"]) && !is_null($data["filter_order_status_id"])) {
            $sql .= " AND o.order_status_id = '" . (int) $data["filter_order_status_id"] . "'";
        }
        if (!empty($data["filter_order_id"])) {
            $sql .= " AND o.order_id = '" . (int) $data["filter_order_id"] . "'";
        }
        if (!empty($data["filter_customer"])) {
            $sql .= " AND CONCAT(o.firstname, ' ', o.lastname) LIKE '%" . $this->db->escape($data["filter_customer"]) . "%'";
        }
        if (!empty($data["filter_customer_id"])) {
            $sql .= " AND o.customer_id = '" . (int) $data["filter_customer_id"] . "'";
        }
        if (!empty($data["filter_lastname"])) {
            $sql .= " AND (o.lastname = '" . $this->db->escape($data["filter_lastname"]) . "' OR o.payment_lastname = '" . $this->db->escape($data["filter_lastname"]) . "' OR o.shipping_lastname = '" . $this->db->escape($data["filter_lastname"]) . "')";
        }
        if (!empty($data["filter_company"])) {
            $sql .= " AND (o.payment_company = '" . $this->db->escape($data["filter_company"]) . "' OR o.shipping_company = '" . $this->db->escape($data["filter_company"]) . "')";
        }
        if (!empty($data["filter_email"])) {
            $sql .= " AND o.email = '" . $this->db->escape($data["filter_email"]) . "'";
        }
        if (!empty($data["filter_telephone"])) {
            $sql .= " AND o.telephone = '" . $this->db->escape($data["filter_telephone"]) . "'";
        }
        if (!empty($data["filter_fax"])) {
            $sql .= " AND o.fax = '" . $this->db->escape($data["filter_fax"]) . "'";
        }
        if (!empty($data["filter_date_added"])) {
            $sql .= " AND DATE(o.date_added) = DATE('" . $this->db->escape($data["filter_date_added"]) . "')";
        }
        if (!empty($data["filter_date_modified"])) {
            $sql .= " AND DATE(o.date_modified) = DATE('" . $this->db->escape($data["filter_date_modified"]) . "')";
        }
        if (!empty($data["filter_total"])) {
            $sql .= " AND o.total = '" . (double) $data["filter_total"] . "'";
        }
        $query = $this->db->query($sql);
        return $query->row["totals"];
    }
    public function getOrderProducts($order_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int) $order_id . "' ORDER BY order_product_id");
        return $query->rows;
    }
    public function getOrderOption($order_id, $order_option_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int) $order_id . "' AND order_option_id = '" . (int) $order_option_id . "'");
        return $query->row;
    }
    public function getOrderOptions($order_id, $order_product_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int) $order_id . "' AND order_product_id = '" . (int) $order_product_id . "'");
        return $query->rows;
    }
    public function getOrderTotals($order_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_total WHERE order_id = '" . (int) $order_id . "' ORDER BY sort_order");
        return $query->rows;
    }
    public function createInvoiceNo($order_id)
    {
        $order_info = $this->getOrder($order_id);
        if ($order_info && !$order_info["invoice_no"]) {
            $query = $this->db->query("SELECT MAX(invoice_no) AS invoice_no FROM `" . DB_PREFIX . "order` WHERE invoice_prefix = '" . $this->db->escape($order_info["invoice_prefix"]) . "'");
            if ($query->row["invoice_no"]) {
                $invoice_no = $query->row["invoice_no"] + 1;
            } else {
                $invoice_no = 1;
            }
            $this->db->query("UPDATE `" . DB_PREFIX . "order` SET invoice_no = '" . (int) $invoice_no . "', invoice_prefix = '" . $this->db->escape($order_info["invoice_prefix"]) . "' WHERE order_id = '" . (int) $order_id . "'");
            return $order_info["invoice_prefix"] . $invoice_no;
        }
        return false;
    }
    public function getInvoiceNo()
    {
        $invoice_no = 1;
        $query = $this->db->query("SELECT MAX(invoice_no) AS invoice_no FROM `" . DB_PREFIX . "order` WHERE invoice_prefix = '" . $this->db->escape($this->config->get("config_invoice_prefix")) . "'");
        if ($query->row["invoice_no"]) {
            $invoice_no = $query->row["invoice_no"] + 1;
        }
        return $invoice_no;
    }
    public function couponAutocomplete($data = array())
    {
        if ($data) {
            $sql = "SELECT * FROM " . DB_PREFIX . "coupon WHERE status = '1'";
            if (!empty($data["filter_name"])) {
                $sql .= " AND (LCASE(name) LIKE '%" . $this->db->escape(utf8_strtolower($data["filter_name"])) . "%'";
                $sql .= " OR LCASE(code) LIKE '" . $this->db->escape(utf8_strtolower($data["filter_name"])) . "%')";
            }
            $sql .= " ORDER BY `name` LIMIT 0,10";
            $query = $this->db->query($sql);
            return $query->rows;
        }
        return array();
    }
    public function getCouponByOrderId($order_id = 0)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "coupon_history WHERE order_id = '" . (int) $order_id . "' LIMIT 1");
        return $query->row;
    }
    public function getCodeCouponById($coupon_id)
    {
        $query = $this->db->query("SELECT `code` FROM `" . DB_PREFIX . "coupon` WHERE coupon_id = '" . (int) $coupon_id . "'");
        if ($query->num_rows) {
            return $query->row["code"];
        }
        return false;
    }
    public function getCouponByCode($code)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "coupon` WHERE code = '" . $this->db->escape($code) . "'");
        return $query->row;
    }
    public function setCouponToOrder($order_id, $data)
    {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "coupon_history` SET coupon_id = '" . (int) $data["coupon_id"] . "', order_id = '" . (int) $order_id . "', customer_id = '" . (int) $data["customer_id"] . "', amount = '" . (double) $data["value"] . "', date_added = NOW()");
    }
    public function deleteOrderCoupon($order_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "coupon_history` WHERE order_id = '" . (int) $order_id . "'");
    }
    public function voucherAutocomplete($data = array())
    {
        if ($data) {
            $sql = "SELECT * FROM " . DB_PREFIX . "voucher WHERE status = '1'";
            if (!empty($data["filter_name"])) {
                $sql .= " AND (LCASE(message) LIKE '%" . $this->db->escape(utf8_strtolower($data["filter_name"])) . "%'";
                $sql .= " OR LCASE(code) LIKE '" . $this->db->escape(utf8_strtolower($data["filter_name"])) . "%')";
            }
            $sql .= " ORDER BY `code` LIMIT 0,10";
            $query = $this->db->query($sql);
            return $query->rows;
        }
        return array();
    }
    public function getVoucherByOrderId($order_id = "0")
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "voucher_history WHERE order_id = '" . (int) $order_id . "' LIMIT 1");
        return $query->row;
    }
    public function getCodeVoucherById($voucher_id)
    {
        $query = $this->db->query("SELECT `code` FROM " . DB_PREFIX . "voucher WHERE voucher_id = '" . (int) $voucher_id . "'");
        if ($query->num_rows) {
            return $query->row["code"];
        }
        return false;
    }
    public function getOrderVouchers($order_id)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_voucher WHERE order_id = '" . (int) $order_id . "'");
        return $query->rows;
    }
    public function getOrderVoucherByVoucherId($voucher_id)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_voucher` WHERE voucher_id = '" . (int) $voucher_id . "'");
        return $query->row;
    }
    public function getVoucherByCode($code)
    {
        $this->db->query("SELECT * FROM `" . DB_PREFIX . "voucher` WHERE code = '" . $this->db->escape($code) . "'");
        return $query->row;
    }
    public function setVoucherToOrder($order_id, $data)
    {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "voucher_history` SET voucher_id = '" . (int) $data["voucher_id"] . "', order_id = '" . (int) $order_id . "', customer_id = '" . (int) $data["customer_id"] . "', amount = '" . (double) $data["value"] . "', date_added = NOW()");
    }
    public function deleteOrderVoucher($order_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "voucher_history` WHERE order_id = '" . (int) $order_id . "'");
    }
    public function setCustomerPassword($length = 6)
    {
        $password = "";
        $possible = "23456789bdfhjrsvwzBDFGJLNRSVWZ";
        $maxlength = utf8_strlen($possible);
        if ($maxlength < $length) {
            $length = $maxlength;
        }
        $i = 0;
        $i = 0;
        while ($i < $length) {
            $char = substr($possible, mt_rand(0, $maxlength - 1), 1);
            if (!strstr($password, $char)) {
                $password .= $char;
                $i++;
            }
        }
        return $password;
    }
    public function setGroup($group = 0, $customer_id = 0)
    {
        if ($customer_id && $group) {
            $this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = '" . (int) $group . "' WHERE customer_id = '" . (int) $customer_id . "'");
        }
    }
    public function getTransactionsByOrderid($customer_id, $order_id = 0)
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_transaction WHERE customer_id = '" . (int) $customer_id . "' AND order_id = '" . (int) $order_id . "' ORDER BY date_added DESC");
        return $query->rows;
    }
    public function addCustomerToOrder($customer_id, $order_id)
    {
        $this->db->query("UPDATE `" . DB_PREFIX . "order` SET `customer_id` = '" . (int) $customer_id . "' WHERE `order_id` = '" . (int) $order_id . "'");
    }
    public function getCustomerGroups($data = array())
    {
        $sql = "SELECT * FROM " . DB_PREFIX . "customer_group cg LEFT JOIN " . DB_PREFIX . "customer_group_description cgd ON (cg.customer_group_id = cgd.customer_group_id) WHERE cgd.language_id = '" . (int) $this->config->get("config_language_id") . "' ORDER BY cgd.name ASC";
        $query = $this->db->query($sql);
        return $query->rows;
    }
    public function getCustomer($customer_id)
    {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int) $customer_id . "'");
        return $query->row;
    }
    public function getCustomerByEmail($email)
    {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "customer WHERE LCASE(email) = '" . $this->db->escape(utf8_strtolower($email)) . "'");
        return $query->row;
    }
    public function getCustomers($data = array())
    {
        $sql = "SELECT *, CONCAT(c.firstname, ' ', c.lastname) AS name, cgd.name AS customer_group FROM " . DB_PREFIX . "customer c LEFT JOIN " . DB_PREFIX . "customer_group_description cgd ON (c.customer_group_id = cgd.customer_group_id) WHERE cgd.language_id = '" . (int) $this->config->get("config_language_id") . "'";
        if (!empty($data["filter_name"]) && !empty($data["filter_email"])) {
            $sql .= " AND (LCASE(CONCAT(c.firstname, ' ', c.lastname)) LIKE '%" . $this->db->escape(utf8_strtolower($data["filter_name"])) . "%'";
            $sql .= " OR LCASE(c.email) LIKE '%" . $this->db->escape(utf8_strtolower($data["filter_email"])) . "%')";
        }
        if (isset($data["filter_status"]) && !empty($data["filter_status"])) {
            $sql .= " AND c.status = '" . (int) $data["filter_status"] . "'";
        }
        $sql .= " ORDER BY name ASC LIMIT 0,10";
        $query = $this->db->query($sql);
        return $query->rows;
    }
    public function getRewardTotal($customer_id)
    {
        $query = $this->db->query("SELECT SUM(points) AS total FROM " . DB_PREFIX . "customer_reward WHERE customer_id = '" . (int) $customer_id . "'");
        return $query->row["total"];
    }
    public function getUsedRewardsByOrderId($order_id)
    {
        $query = $this->db->query("SELECT SUM(points) AS total FROM " . DB_PREFIX . "customer_reward WHERE order_id = '" . (int) $order_id . "' AND points < '0'");
        return $query->row["total"];
    }
    public function getReceivedRewardsByOrderId($order_id)
    {
        $query = $this->db->query("SELECT SUM(points) AS total FROM " . DB_PREFIX . "customer_reward WHERE order_id = '" . (int) $order_id . "' AND points > '0'");
        return $query->row["total"];
    }
    public function deleteOrderRewardReceived($order_id)
    {
        $this->db->query("DELETE FROM " . DB_PREFIX . "customer_reward WHERE order_id = '" . (int) $order_id . "' AND points > '0'");
    }
    public function setRewardUsedToOrder($order_id, $data)
    {
        $this->db->query("INSERT INTO " . DB_PREFIX . "customer_reward SET customer_id = '" . (int) $data["customer_id"] . "', order_id = '" . (int) $order_id . "', points = '" . (double) (0 - $data["points"]) . "', description = '" . $this->db->escape($data["description"]) . "', date_added = NOW()");
    }
    public function deleteOrderRewardUsed($order_id)
    {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "customer_reward` WHERE order_id = '" . (int) $order_id . "' AND points < '0'");
    }
    public function getProductImage($product_id)
    {
        $query = $this->db->query("SELECT `image` FROM `" . DB_PREFIX . "product` WHERE `product_id` = '" . (int) $product_id . "'");
        if ($query->num_rows) {
            return $query->row["image"];
        }
        return false;
    }
    public function getLanguages()
    {
        $language_data = array();
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "language ORDER BY sort_order, name");
        foreach ($query->rows as $result) {
            $language_data[$result["code"]] = array("language_id" => $result["language_id"], "name" => $result["name"], "code" => $result["code"], "locale" => $result["locale"], "image" => $result["image"], "directory" => $result["directory"], "sort_order" => $result["sort_order"], "status" => $result["status"]);
        }
        return $language_data;
    }
    public function getCountries()
    {
        $country_data = $this->cache->get("country.status");
        if (!$country_data) {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "country WHERE status = '1' ORDER BY name ASC");
            $country_data = $query->rows;
            $this->cache->set("country.status", $country_data);
        }
        return $country_data;
    }
    public function getWeightUnit($language_id)
    {
        $unit = "";
        $weight_class_id = $this->config->get("config_weight_class_id");
        if ($weight_class_id) {
            $query = $this->db->query("SELECT `unit` FROM " . DB_PREFIX . "weight_class_description WHERE weight_class_id = '" . (int) $weight_class_id . "' AND language_id = '" . (int) $language_id . "'");
            if ($query->num_rows) {
                $unit = $query->row["unit"];
            }
        }
        return $unit;
    }
    public function installOrderpro()
    {
        $fields = array();
        $oquery = $this->db->query("DESCRIBE `" . DB_PREFIX . "order_product`");
        foreach ($oquery->rows as $result) {
            $fields[] = $result["Field"];
        }
        if (!in_array("sku", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `sku` VARCHAR(64) NOT NULL AFTER `model`");
        }
        if (!in_array("upc", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `upc` VARCHAR(64) NOT NULL AFTER `sku`");
        }
        if (!in_array("ean", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `ean` VARCHAR(64) NOT NULL AFTER `upc`");
        }
        if (!in_array("jan", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `jan` VARCHAR(64) NOT NULL AFTER `ean`");
        }
        if (!in_array("isbn", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `isbn` VARCHAR(64) NOT NULL AFTER `jan`");
        }
        if (!in_array("mpn", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `mpn` VARCHAR(64) NOT NULL AFTER `isbn`");
        }
        if (!in_array("location", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `location` VARCHAR(128) NOT NULL AFTER `mpn`");
        }
        if (!in_array("weight", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `weight` DECIMAL(15,2) NOT NULL DEFAULT '0.00' AFTER `location`");
        }
        if (!in_array("discount_type", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `discount_type` VARCHAR(1) NOT NULL AFTER `price`");
        }
        if (!in_array("discount_amount", $fields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `discount_amount` DECIMAL(15,4) NOT NULL DEFAULT '0.0000' AFTER `price`");
        }
        $cfields = array();
        $cquery = $this->db->query("DESCRIBE `" . DB_PREFIX . "cart`");
        foreach ($cquery->rows as $cresult) {
            $cfields[] = $cresult["Field"];
        }
        if (!in_array("price", $cfields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "cart` ADD `price` DECIMAL(15,4) DEFAULT NULL AFTER `quantity`");
        }
        if (!in_array("product_row", $cfields)) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "cart` ADD `product_row` VARCHAR(5) NOT NULL AFTER `quantity`");
        }
        $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '0' AND `code` = 'orderpro' AND `key` = 'orderpro_install_done'");
        if (!$this->config->get("orderpro_license")) {
            $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `store_id` = '0' AND `code` = 'orderpro'");
            $conf_arr = array("show_pid", "show_image", "show_model", "show_realqty", "show_nowprice", "show_discount", "invoice_type", "merge_orders", "clone_orders", "neworder_notify", "neworder_notify_admin", "show_similar", "invoice_image", "invoice_model", "neworder_image", "neworder_model");
            foreach ($conf_arr as $conf) {
                $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '0', `code` = 'orderpro', `key` = 'orderpro_" . $conf . "', `value` = '1', `serialized` = '0'");
            }
            $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '0', `code` = 'orderpro', `key` = 'orderpro_decimal_place', `value` = '2', `serialized` = '0'");
            $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '0', `code` = 'orderpro', `key` = 'orderpro_return_page', `value` = 'sale/order', `serialized` = '0'");
        }
        $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '0', `code` = 'orderpro', `key` = 'orderpro_install_done', `value` = '379', `serialized` = '0'");
    }
    public function checkLicense()
    {
        $lic = TRUE;
        $d = preg_replace("/^www\\./i", "", $_SERVER["HTTP_HOST"]);
        $d = $d . "o3rd3e7rp9r";
        $ln = md5($d);
        $l = $this->config->get("orderpro_license");
        if ($l) {
            if ($l == $ln) {
                $lic = true;
            } else {
                $le = strlen($l);
                $nn = "69" . str_replace("-", "", date("m-d", time()));
                $nd = 999376 - (int) $nn;
                $num1 = substr($l, 4, 1);
                $num2 = substr($l, 8, 1);
                $num3 = substr($l, 14, 1);
                $num4 = substr($l, 16, 1);
                $num5 = substr($l, 19, 1);
                $num6 = substr($l, 26, 1);
                $ld = $num1 . $num2 . $num3 . $num4 . $num5 . $num6;
                $da = (int) $ld - (int) $nd;
                if ($le == 33 && 9 < $da && $da < 21) {
                    $lic = true;
                }
            }
        }
        if (!$lic) {
            $lic = $this->getLicense();
        }
        return $lic;
    }
    private function getLicense()
    {
        $l = 0;
        $d = preg_replace("/^www\\./i", "", $_SERVER["HTTP_HOST"]);
        $u = "http://opencart-group.ru/index.php?route=feed/getlic";
        $p = array("modul" => "orderpro", "domen" => $d, "version_op" => "3.0.2", "version_md" => "3.7.9");
        $rs = file_get_contents($u, false, stream_context_create(array("http" => array("method" => "POST", "header" => "Content-type: application/x-www-form-urlencoded", "content" => http_build_query($p)))));
        if ($rs) {
            $r = explode(",", $rs);
            if (!empty($r[1]) && $r[0] == $d && md5($d . "o3rd3e7rp9r") == $r[1]) {
                $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `code` = 'orderpro' AND `key` = 'orderpro_license'");
                $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` SET `store_id` = '0', `code` = 'orderpro', `key` = 'orderpro_license', `value` = '" . $this->db->escape($r[1]) . "', `serialized` = '0'");
                $l = 1;
            }
        }
        return $l;
    }
}

?>