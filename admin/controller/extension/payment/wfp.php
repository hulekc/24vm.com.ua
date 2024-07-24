<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.2 & 7.3
 * @ Decoder version: 1.0.6
 * @ Release: 10/08/2022
 */

class ControllerExtensionPaymentWfp extends Controller
{
    private $error = [];
    public function index()
    {
        $this->load->language("extension/payment/wfp");
        $this->document->setTitle($this->language->get("heading_title"));
        $this->load->model("setting/setting");
        if ($this->request->server["REQUEST_METHOD"] == "POST" && $this->validate()) {
            $this->model_setting_setting->editSetting("payment_wfp", $this->request->post);
            $this->session->data["success"] = $this->language->get("text_success");
            if (isset($this->request->post["reload"])) {
                $this->response->redirect($this->url->link("extension/payment/wfp", "user_token=" . $this->session->data["user_token"], true));
            } else {
                $this->response->redirect($this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=payment", true));
            }
        }
        if (isset($this->error["warning"])) {
            $data["error_warning"] = $this->error["warning"];
        } else {
            $data["error_warning"] = "";
        }
        if (isset($this->error["merchant"])) {
            $data["error_merchant"] = $this->error["merchant"];
        } else {
            $data["error_merchant"] = "";
        }
        if (isset($this->error["secret_key"])) {
            $data["error_secret_key"] = $this->error["secret_key"];
        } else {
            $data["error_secret_key"] = "";
        }
        if (isset($this->error["type"])) {
            $data["error_type"] = $this->error["type"];
        } else {
            $data["error_type"] = "";
        }
        if (isset($this->error["key"])) {
            $data["error_key"] = $this->error["key"];
        } else {
            $data["error_key"] = "";
        }
        if (isset($this->session->data["success"])) {
            $data["success"] = $this->session->data["success"];
            unset($this->session->data["success"]);
        } else {
            $data["success"] = "";
        }
        $data["breadcrumbs"] = [];
        $data["breadcrumbs"][] = ["text" => $this->language->get("text_home"), "href" => $this->url->link("common/dashboard", "user_token=" . $this->session->data["user_token"], true)];
        $data["breadcrumbs"][] = ["text" => $this->language->get("text_extension"), "href" => $this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=payment", true)];
        $data["breadcrumbs"][] = ["text" => $this->language->get("heading_title"), "href" => $this->url->link("extension/payment/wfp", "user_token=" . $this->session->data["user_token"], true)];
        $data["action"] = $this->url->link("extension/payment/wfp", "user_token=" . $this->session->data["user_token"], true);
        $data["cancel"] = $this->url->link("marketplace/extension", "user_token=" . $this->session->data["user_token"] . "&type=payment", true);
        if (isset($this->request->post["payment_wfp_merchant_account"])) {
            $data["payment_wfp_merchant_account"] = $this->request->post["payment_wfp_merchant_account"];
        } else {
            $data["payment_wfp_merchant_account"] = $this->config->get("payment_wfp_merchant_account");
        }
        if (isset($this->request->post["payment_wfp_secret_key"])) {
            $data["payment_wfp_secret_key"] = $this->request->post["payment_wfp_secret_key"];
        } else {
            $data["payment_wfp_secret_key"] = $this->config->get("payment_wfp_secret_key");
        }
        if (isset($this->request->post["payment_wfp_type"])) {
            $data["payment_wfp_type"] = $this->request->post["payment_wfp_type"];
        } else {
            $data["payment_wfp_type"] = $this->config->get("payment_wfp_type");
        }
        if (isset($this->request->post["payment_wfp_total"])) {
            $data["payment_wfp_total"] = $this->request->post["payment_wfp_total"];
        } else {
            $data["payment_wfp_total"] = $this->config->get("payment_wfp_total");
        }
        if (isset($this->request->post["payment_wfp_order_status_id"])) {
            $data["payment_wfp_order_status_id"] = $this->request->post["payment_wfp_order_status_id"];
        } else {
            $data["payment_wfp_order_status_id"] = $this->config->get("payment_wfp_order_status_id");
        }
        if (isset($this->request->post["payment_wfp_order_success_status_id"])) {
            $data["payment_wfp_order_success_status_id"] = $this->request->post["payment_wfp_order_success_status_id"];
        } else {
            $data["payment_wfp_order_success_status_id"] = $this->config->get("payment_wfp_order_success_status_id");
        }
        if (isset($this->request->post["payment_wfp_order_return_status_id"])) {
            $data["payment_wfp_order_return_status_id"] = $this->request->post["payment_wfp_order_return_status_id"];
        } else {
            $data["payment_wfp_order_return_status_id"] = $this->config->get("payment_wfp_order_return_status_id");
        }
        if (isset($this->request->post["payment_wfp_order_failure_status_id"])) {
            $data["payment_wfp_order_failure_status_id"] = $this->request->post["payment_wfp_order_failure_status_id"];
        } else {
            $data["payment_wfp_order_failure_status_id"] = $this->config->get("payment_wfp_order_failure_status_id");
        }
        $this->load->model("localisation/order_status");
        $data["order_statuses"] = $this->model_localisation_order_status->getOrderStatuses();
        if (isset($this->request->post["payment_wfp_geo_zone_id"])) {
            $data["payment_wfp_geo_zone_id"] = $this->request->post["payment_wfp_geo_zone_id"];
        } else {
            $data["payment_wfp_geo_zone_id"] = $this->config->get("payment_wfp_geo_zone_id");
        }
        $this->load->model("localisation/geo_zone");
        $data["geo_zones"] = $this->model_localisation_geo_zone->getGeoZones();
        if (isset($this->request->post["payment_wfp_status"])) {
            $data["payment_wfp_status"] = $this->request->post["payment_wfp_status"];
        } else {
            $data["payment_wfp_status"] = $this->config->get("payment_wfp_status");
        }
        if (isset($this->request->post["payment_wfp_status_referrer"])) {
            $data["payment_wfp_status_referrer"] = $this->request->post["payment_wfp_status_referrer"];
        } else {
            $data["payment_wfp_status_referrer"] = $this->config->get("payment_wfp_status_referrer");
        }
        if (isset($this->request->post["payment_wfp_type_pay"])) {
            $data["payment_wfp_type_pay"] = $this->request->post["payment_wfp_type_pay"];
        } else {
            $data["payment_wfp_type_pay"] = $this->config->get("payment_wfp_type_pay");
        }
        if (isset($this->request->post["payment_wfp_mode"])) {
            $data["payment_wfp_mode"] = $this->request->post["payment_wfp_mode"];
        } else {
            $data["payment_wfp_mode"] = $this->config->get("payment_wfp_mode");
        }
        if (isset($this->request->post["payment_wfp_type_transaction"])) {
            $data["payment_wfp_type_transaction"] = $this->request->post["payment_wfp_type_transaction"];
        } else {
            $data["payment_wfp_type_transaction"] = $this->config->get("payment_wfp_type_transaction");
        }
        if (isset($this->request->post["payment_wfp_pay_lang"])) {
            $data["payment_wfp_pay_lang"] = $this->request->post["payment_wfp_pay_lang"];
        } else {
            $data["payment_wfp_pay_lang"] = $this->config->get("payment_wfp_pay_lang");
        }
        if (isset($this->request->post["payment_wfp_sort_order"])) {
            $data["payment_wfp_sort_order"] = $this->request->post["payment_wfp_sort_order"];
        } else {
            $data["payment_wfp_sort_order"] = $this->config->get("payment_wfp_sort_order");
        }
        if (isset($this->request->post["payment_wfp_status_log"])) {
            $data["payment_wfp_status_log"] = $this->request->post["payment_wfp_status_log"];
        } else {
            $data["payment_wfp_status_log"] = $this->config->get("payment_wfp_status_log");
        }
        if (isset($this->request->post["payment_wfp_pay_cur"])) {
            $data["payment_wfp_pay_cur"] = $this->request->post["payment_wfp_pay_cur"];
        } else {
            $data["payment_wfp_pay_cur"] = $this->config->get("payment_wfp_pay_cur");
        }
        if (isset($this->request->post["payment_wfp_key"])) {
            $data["payment_wfp_key"] = $this->request->post["payment_wfp_key"];
        } else {
            $data["payment_wfp_key"] = $this->config->get("payment_wfp_key");
        }
        if (isset($this->request->post["payment_wfp_description"])) {
            $data["payment_wfp_description"] = $this->request->post["payment_wfp_description"];
        } else {
            if ($this->config->get("payment_wfp_description")) {
                $data["payment_wfp_description"] = $this->config->get("payment_wfp_description");
            } else {
                $data["payment_wfp_description"] = [];
            }
        }
        $data["pay_langs"] = ["UA", "RU", "EN", "DE", "ES", "IT", "PL", "FR", "RO", "LV", "SK"];
        $data["pay_currency"] = ["UAH", "USD", "EUR"];
        $this->load->model("localisation/language");
        $data["languages"] = $this->model_localisation_language->getLanguages();
        $file = DIR_LOGS . "wfp.log";
        if (file_exists($file)) {
            $data["log"] = htmlentities(file_get_contents($file, FILE_USE_INCLUDE_PATH, NULL));
        } else {
            $data["log"] = "";
        }
        $data["clear_log"] = $this->url->link("extension/payment/wfp/clearlog", "user_token=" . $this->session->data["user_token"], true);
        $data["user_token"] = $this->session->data["user_token"];
        $data["header"] = $this->load->controller("common/header");
        $data["column_left"] = $this->load->controller("common/column_left");
        $data["footer"] = $this->load->controller("common/footer");
        $this->response->setOutput($this->load->view("extension/payment/wfp", $data));
    }
    public function clearlog()
    {
        $this->load->language("extension/payment/wfp");
        $handle = fopen(DIR_LOGS . "wfp.log", "w+");
        fclose($handle);
        $this->session->data["success"] = $this->language->get("text_success_log");
        $this->response->redirect($this->url->link("extension/payment/wfp", "user_token=" . $this->session->data["user_token"], true));
    }
    protected function validate()
    {
        if (isset($this->request->server["HTTPS"]) && ($this->request->server["HTTPS"] == "on" || $this->request->server["HTTPS"] == "1")) {
            $server = str_replace("www.", "", HTTPS_CATALOG);
        } else {
            $server = str_replace("www.", "", HTTP_CATALOG);
        }
        if (!$this->user->hasPermission("modify", "extension/payment/wfp")) {
            $this->error["warning"] = $this->language->get("error_permission");
        }
        if (!isset($this->request->post["payment_wfp_activate"]) && !$this->request->post["payment_wfp_merchant_account"]) {
            $this->error["merchant"] = $this->language->get("error_merchant");
        }
        if (!isset($this->request->post["payment_wfp_activate"]) && !$this->request->post["payment_wfp_secret_key"]) {
            $this->error["secret_key"] = $this->language->get("error_secret_key");
        }
        // if (!isset($this->request->post["payment_wfp_key"])) {
        //     $this->error["key"] = $this->language->get("error_key");
        // } else {
        //     if (isset($this->request->post["payment_wfp_key"])) {
        //         $match = "";
        //         $key = preg_match("#(?<=\\/\\/).+?(?=\\/)#", $server, $match);
        //         if (md5($match[0] . "enzo") != $this->request->post["payment_wfp_key"]) {
        //             $this->error["key"] = $this->language->get("error_key");
        //         }
        //     }
        // }
        return !$this->error;
    }
    public function activate()
    {
        $this->load->language("extension/feed/merchant_feed");
        if (isset($this->request->server["HTTPS"]) && ($this->request->server["HTTPS"] == "on" || $this->request->server["HTTPS"] == "1")) {
            $server = str_replace("www.", "", HTTPS_CATALOG);
        } else {
            $server = str_replace("www.", "", HTTP_CATALOG);
        }
        $json = [];
        if (isset($this->request->post["key"]) && !empty($this->request->post["key"])) {
            $match = "";
            $key = preg_match("#(?<=\\/\\/).+?(?=\\/)#", $server, $match);
            if (md5($match[0] . "enzo") != $this->request->post["key"]) {
                $json["error"] = $this->language->get("error_key");
            }
        } else {
            $json["error"] = $this->language->get("error_key");
        }
        if (!$json) {
            $json["success"] = $this->language->get("text_key_success");
        }
        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }
    public function install()
    {
        $this->load->model("extension/payment/wfp");
        $this->load->model("user/user_group");
        $this->model_user_user_group->addPermission($this->user->getGroupId(), "access", "sale/wfp");
        $this->model_user_user_group->addPermission($this->user->getGroupId(), "modify", "sale/wfp");
        $this->model_extension_payment_wfp->install();
    }
    public function uninstall()
    {
        $this->load->model("extension/payment/wfp");
        $this->model_extension_payment_wfp->uninstall();
    }
}

?>