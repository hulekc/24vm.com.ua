<?php class ControllerExtensionAnalyticsTagManager extends Controller
{
    const Adc6251 = "30750";
    const D6cf0c1 = "analytics_";
    const ff55e87 = "tagmanager";
    private $token;
    private $catalog_url;
    private $error = [];
    public function __construct($a7ef5bf)
    {
        goto Dee1753;
        Dee1753:
        parent::__construct($a7ef5bf);
        goto Ee251e0;
        Ee251e0:
        $this->catalog = $this->request->server["HTTPS"]
            ? HTTPS_CATALOG
            : HTTP_CATALOG;
        goto Bbe20b8;
        Bbe20b8:
        $this->token = isset($this->session->data["user_token"])
            ? "user_token=" . $this->session->data["user_token"]
            : "token=" . $this->session->data["token"];
        goto D46b6e1;
        D46b6e1:
    }
    public function index()
    {
        goto Fb17593;
        fd8e9b4:
        $eb26d62 = new Pagination();
        goto ab7e499;
        ed033fa:
        goto Bdffb14;
        goto b826bdf;
        a34b328:
        if (isset($this->session->data["success"])) {
            goto cea4c0a;
        }
        goto Fef885e;
        cca9712:
        if (
            !(
                $this->check_array($B4da6db["stores"]) &&
                count($B4da6db["stores"]) > 0
            )
        ) {
            goto B607428;
        }
        goto a5e2d99;
        c53b6d9:
        if (!($dce6528 == "2.3")) {
            goto a13af14;
        }
        goto f758a9e;
        Fcb2154:
        $Dac8bb1["clear"] = $this->url->link(
            $A856a54 . "/clear",
            $this->token . "&store_id=" . $d3c6001,
            true
        );
        goto F2ab5e1;
        aa5bafe:
        goto Cd7b1b1;
        goto Caed375;
        E5ed530:
        if (!isset($this->request->get["page"])) {
            goto a6cdf59;
        }
        goto e46c2dc;
        db37e71:
        d907ecc:
        goto a630d7d;
        ab7e499:
        $eb26d62->total = $Da332c7;
        goto f4be4e5;
        F1120a6:
        curl_setopt($f818113, CURLOPT_TIMEOUT, 30);
        goto e1e259b;
        Bcff44d:
        $Dac8bb1["footer"] = $this->load->controller("common/footer");
        goto ee1d284;
        dda2bdf:
        bfae656:
        goto ff8d9e0;
        Fbf3749:
        $B4da6db[
            "transactions"
        ] = $this->model_extension_module_tagmanager->getTransactions(
            $bb235f1,
            $d3c6001
        );
        goto E788172;
        F28f4ae:
        $B4da6db["tagmanager"] = isset($F56b5c1[$db09cef . "tagmanager_data"])
            ? $F56b5c1[$db09cef . "tagmanager_data"]
            : false;
        goto F6cb40c;
        ff60e0f:
        c426315:
        goto C3b4caa;
        F2ab5e1:
        $Dac8bb1["user_token"] = $this->token;
        goto ebad9f5;
        d39ec8f:
        Be52a4a:
        goto febb628;
        B044dc7:
        $B4da6db = array_merge($B4da6db, $ea8db39);
        goto D19b98d;
        B3d99b3:
        curl_setopt($f818113, CURLOPT_RETURNTRANSFER, true);
        goto D439d13;
        e741e93:
        $Dac8bb1["breadcrumbs"][] = [
            "text" => $this->language->get("text_home"),
            "href" => $this->url->link("common/dashboard", $this->token, true),
        ];
        goto Cab629a;
        a9b002f:
        if (!isset($ea9c496["order_id"])) {
            goto f5a6953;
        }
        goto Aeebfcb;
        f095a7c:
        C2ea6cf:
        goto f9cbaa7;
        B62770e:
        D76d20e:
        goto a8fa977;
        f32a200:
        $B4da6db["send_url"] =
            $this->catalog . "index.php?route=" . $A856a54 . "/sendorder";
        goto A7202b7;
        b43ef2e:
        B607428:
        goto F3abbd8;
        dea5fe5:
        goto da8e07c;
        goto E5a6633;
        C7aba4f:
        curl_setopt($f818113, CURLOPT_CONNECTTIMEOUT, 30);
        goto Fe89679;
        Ab73340:
        if (isset($this->request->post["datas"])) {
            goto f6eb1d7;
        }
        goto Bca2586;
        B9e16e7:
        echo "Request Error:" . curl_error($b5d237d);
        goto C607e57;
        Ad6a109:
        E8b43aa:
        goto e5bfce6;
        ee1d284:
        if (isset($E4b928e) && $E4b928e == "3") {
            goto D1d2eee;
        }
        goto a5956cb;
        b360b92:
        if (
            ($A240542["licence"] != 'lovedevopencart' || $A240542["domain"] != $A7dd299)
        ) {
            goto Ee4cab0;
        }
        goto D1d3b93;
        D1d3b93:
        $this->model_setting_setting->editSetting(
            "module_mod_google",
            $D2791be,
            $f1b1057
        );
        goto ec1c02e;
        Ea55cee:
        if (isset($E4b928e) && $E4b928e == "3") {
            goto Be52a4a;
        }
        goto cb34a05;
        f20a5d9:
        $this->response->setOutput(
            $this->load->view("extension/analytics/tmlicence", $Dac8bb1)
        );
        goto A6b58aa;
        f01023d:
        if ($Fafc625 >= 5242880) {
            goto d589106;
        }
        goto A805b31;
        Ff91762:
        foreach ($B4da6db["languages"] as &$dcd0253) {
            goto e3ec247;
            a3cc1b7:
            goto Db85cb3;
            goto D763260;
            C5d0a62:
            Db08570:
            goto A568e18;
            C318623:
            $dcd0253["image"] =
                "language/" .
                $dcd0253["code"] .
                "/" .
                $dcd0253["code"] .
                ".png";
            goto e68215d;
            e68215d:
            Db85cb3:
            goto C5d0a62;
            D763260:
            Dee76bb:
            goto C318623;
            e3ec247:
            if (version_compare(VERSION, "2.2", ">=")) {
                goto Dee76bb;
            }
            goto Dea816f;
            Dea816f:
            $dcd0253["image"] = "view/image/flags/" . $dcd0253["image"];
            goto a3cc1b7;
            A568e18:
        }
        goto A020a79;
        B55c10a:
        $Dac8bb1["breadcrumbs"][] = [
            "text" => $this->language->get("heading_title"),
            "href" => $this->url->link(
                $A856a54,
                $this->token . "&store_id=" . $d3c6001,
                true
            ),
        ];
        goto Cf9aa39;
        B1f776f:
        $this->response->redirect(
            $this->url->link(
                $A856a54,
                $this->token . "&store_id=" . $d3c6001,
                true
            )
        );
        goto E7a0e54;
        Bd604d6:
        $Dac8bb1["column_left"] = $this->load->controller("common/column_left");
        goto Ee2b9aa;
        D8b985d:
        $this->load->model("localisation/language");
        goto d8b085b;
        ca1714b:
        $B4da6db["tagmanager"]["vs"] = base64_encode($Cbbb1c5);
        goto B2b7d31;
        cf8c4dd:
        cf78c31:
        goto bf51dc7;
        C29fd0e:
        goto Dd38ab2;
        goto db37e71;
        d67a8ea:
        $Dac8bb1["breadcrumbs"][] = [
            "text" => $this->language->get("heading_title"),
            "href" => $this->url->link(
                $A856a54,
                $this->token . "&store_id=" . $d3c6001,
                true
            ),
        ];
        goto F51ab37;
        Fbbb234:
        $Dac8bb1["breadcrumbs"] = [];
        goto e741e93;
        Cab629a:
        $Dac8bb1["breadcrumbs"][] = [
            "text" => $this->language->get("text_extension"),
            "href" => $this->url->link(
                $C793ce7,
                $this->token . "&type=analytics",
                true
            ),
        ];
        goto d67a8ea;
        Ae0c3f8:
        $B4da6db["error_warning"] = $this->error["warning"];
        goto c537805;
        E788172:
        $Da332c7 = $this->model_extension_module_tagmanager->getTotalTransactions(
            $bb235f1,
            $d3c6001
        );
        goto F39ea7f;
        D439d13:
        curl_setopt($f818113, CURLOPT_CONNECTTIMEOUT, 30);
        goto F1120a6;
        Ea69c09:
        $Dac8bb1["header"] = $this->load->controller("common/header");
        goto Bd604d6;
        f9cbaa7:
        efb87fd:
        goto fd6ee1a;
        E770dad:
        goto E8b43aa;
        goto cf14822;
        d5faf21:
        $Ee24077 = (int) $this->request->get["page"];
        goto D657204;
        Fb17593:
        $this->load->model("setting/setting");
        goto b1ed5de;
        cf845f0:
        $this->load->language("extension/analytics/tagmanager");
        goto fc141ec;
        D19b98d:
        if (!empty($B4da6db["tagmanager"]["route_checkout"])) {
            goto ddf0d0c;
        }
        goto dcb1848;
        d4bebff:
        $this->model_setting_setting->editSetting(
            "module_mod_google",
            $D2791be,
            $f1b1057
        );
        goto b8ef01d;
        b9b3ac8:
        $Ed45da1 = $A240542["ep"];
        goto e2083ce;
        E49e785:
        if (isset($this->request->get["page"])) {
            goto c02c5cb;
        }
        goto da3236d;
        ec941ed:
        $B4da6db[
            "tagmanager_settings"
        ] = $this->model_extension_module_tagmanager->getTagmanger();
        goto c5e8185;
        cb34a05:
        $this->response->setOutput(
            $this->load->view("extension/analytics/tmlicence", $Dac8bb1)
        );
        goto Fc31d58;
        a7e8fa9:
        $e399a5e = true;
        goto Ab73340;
        ab0ea43:
        $ea8db39 = $this->model_extension_module_tagmanager->getConfig();
        goto B044dc7;
        B8075cb:
        a13af14:
        goto fca1d4d;
        d33dadc:
        if (!($Fafc625 / 1024 > 1)) {
            goto d907ecc;
        }
        goto Bbbf6a0;
        Fef885e:
        $Dac8bb1["success"] = "";
        goto F1584f2;
        b8ef01d:
        $e399a5e = false;
        goto E5817bb;
        F2da8f0:
        if ($E4b928e == "3") {
            goto B0eeaa1;
        }
        goto Fa1c5f3;
        f59b2fa:
        $B4da6db["page"] = $Ee24077;
        goto c4417df;
        ee49eab:
        $E4b928e = substr(VERSION, 0, 1);
        goto fd17e33;
        Ac566c1:
        $A856a54 = "extension/analytics/tagmanager";
        goto e38e26d;
        Cbbaba1:
        $D2791be = [
            "domain" => $A7dd299,
            "extension" => "30750",
            "id" => $ef3ca76,
        ];
        goto c2131e2;
        a6a9bb6:
        $Afb8353 = curl_errno($f818113);
        goto b8c7cb2;
        Cf81176:
        $eb26d62->limit = $df3ca78;
        goto bcf7e40;
        d5a5995:
        b0c59dc:
        goto Ea69c09;
        E5a6633:
        efee805:
        goto fc4b995;
        F6cb40c:
        if (
            !(
                !isset($B4da6db["tagmanager"]["code"]) ||
                empty($B4da6db["tagmanager"]["code"])
            )
        ) {
            goto ecd135b;
        }
        goto D38b6cd;
        E5817bb:
        $B4da6db["error"] = $D9c08df["message"];
        goto C9c43df;
        E6fc1f1:
        if ($E4b928e == "3") {
            goto Ecf830b;
        }
        goto Fc852ab;
        F35224a:
        $Dac8bb1["breadcrumbs"][] = [
            "text" => $this->language->get("text_extension"),
            "href" => $this->url->link(
                $C793ce7,
                $this->token . "&type=analytics",
                true
            ),
        ];
        goto B55c10a;
        ce893f5:
        B4fe08e:
        goto b5ff06d;
        bece41e:
        fc05a04:
        goto a2f1008;
        D8b24ba:
        $B4da6db["error"] = $D9c08df["message"];
        goto bdf08d6;
        f4be4e5:
        $eb26d62->page = $Ee24077;
        goto Cf81176;
        Bf95272:
        $df3ca78 = 20;
        goto a609afe;
        fd6ee1a:
        if (isset($this->error["warning"])) {
            goto E3b6ac6;
        }
        goto c259905;
        Be58eb8:
        $E4b928e = substr(VERSION, 0, 1);
        goto dc99df9;
        a609afe:
        C4a97ab:
        goto A0d8fa8;
        e5fbd66:
        cea4c0a:
        goto feff183;
        ce9df47:
        if (!(isset($ea9c496) && !empty($ea9c496))) {
            goto F6ae77a;
        }
        goto c0ce813;
        d41c4d7:
        c17f3c3:
        goto F689c98;
        c4417df:
        $Fd129c2 = "";
        goto fd8e9b4;
        cffcce3:
        goto f5c69b6;
        goto fb20486;
        Dab2761:
        $D9c08df = json_decode($D9c08df, true);
        goto Ab08c58;
        e36cdb5:
        $A7dd299 = $this->request->server["SERVER_NAME"];
        goto Aaeab86;
        B41658a:
        B36fecf:
        goto C789315;
        f18bdaa:
        $B4da6db["log"] = "";
        goto e0887b4;
        B2c004a:
        b67db43:
        goto A46d499;
        C789315:
        $this->cache->delete("tagmanager");
        goto Db64873;
        b5c313f:
        if ($E4b928e == "2") {
            goto Baf6312;
        }
        goto d93b568;
        db99924:
        a5f2bdf:
        goto B9e16e7;
        dcb1848:
        $B4da6db["tagmanager"]["route_checkout"] = $ea8db39["alt_checkout"];
        goto Cf485af;
        ca14e0e:
        $B4da6db["tagmanager_status"] = isset(
            $F56b5c1[$db09cef . "tagmanager_status"]
        )
            ? $F56b5c1[$db09cef . "tagmanager_status"]
            : false;
        goto F28f4ae;
        fdaaa76:
        $D9c08df = curl_exec($f818113);
        goto a796695;
        d690e1e:
        f5a6953:
        goto ec33ba7;
        c2131e2:
        $B4da6db["error"] = false;
        goto ba724b1;
        D2aa72b:
        $f818113 = curl_init();
        goto ddf3158;
        a9a53d4:
        E19d231:
        goto Dcbb314;
        A0cfb3a:
        $A839701 = [
            "order_id" => 0,
            "email" => "",
            "licence" => "lovedevopencart",
            "status" => "",
            "domain" => "",
            "ep" => "",
        ];
        goto Baf0962;
        e2083ce:
        $D772553 = 'lovedevopencart';
        goto D2aa72b;
        F37ad82:
        $B4da6db["PREFIX"] = $db09cef;
        goto cd5b710;
        c18c36b:
        $Dac8bb1["breadcrumbs"] = [];
        goto f0a1f3f;
        ec33ba7:
        $A240542 = [
            "order_id" => 0,
            "email" => "",
            "licence" => "lovedevopencart",
            "status" => "",
            "domain" => "",
            "ep" => "",
        ];
        goto D9bdae5;
        A46d499:
        $this->response->redirect(
            $this->url->link($C793ce7, $this->token . "&type=analytics", true)
        );
        goto f095a7c;
        cf14822:
        D1d2eee:
        goto e739259;
        Ae178a5:
        $Dac8bb1["column_left"] = $this->load->controller("common/column_left");
        goto Bcff44d;
        Dfc2d6f:
        eaddb9e:
        goto F05ad6e;
        fa550dd:
        $B4da6db["image_url"] = "view/javascript/tagmanager/img/";
        goto Ac566c1;
        E0dd33c:
        $B4da6db[
            "currencies"
        ] = $this->model_localisation_currency->getCurrencies();
        goto f32a200;
        Aeebfcb:
        $A240542 = [
            "order_id" => base64_decode($ea9c496["order_id"]),
            "licence" => $ea9c496["licence"],
            "domain" => base64_decode($ea9c496["domain"]),
            "email" => base64_decode($ea9c496["email"]),
            "ep" => base64_decode($ea9c496["ep"]),
        ];
        goto A5b8a99;
        c50ca1c:
        $dce6528 = substr(VERSION, 0, 3);
        goto F2da8f0;
        dd92545:
        $Dac8bb1["header"] = $this->load->controller("common/header");
        goto Ae178a5;
        d8b085b:
        $this->load->model("setting/store");
        goto ee49eab;
        a5956cb:
        $this->response->setOutput(
            $this->load->view("extension/analytics/tagmanager", $Dac8bb1)
        );
        goto E770dad;
        ba724b1:
        $f818113 = curl_init();
        goto a1c4b8e;
        Aa98950:
        $Dac8bb1["template"] = self::ff55e87;
        goto F3e9665;
        C44fd3e:
        $this->document->addStyle(
            "view/javascript/tagmanager/tagmanager-new.css"
        );
        goto db2e2e4;
        a2f1008:
        $Fd129c2 = "";
        goto E5ed530;
        fca1d4d:
        if ($E4b928e == "3") {
            goto D76d20e;
        }
        goto b5c313f;
        D8e4f32:
        $Dac8bb1 = array_merge($Dac8bb1, $b9c147e);
        goto c18c36b;
        c537805:
        f5c69b6:
        goto b9a85d8;
        ffe3b4a:
        c02c5cb:
        goto d5faf21;
        a8fa977:
        $this->load->language("extension/analytics/tagmanager");
        goto Abce231;
        D3f9205:
        F6ae77a:
        goto a9b002f;
        A7e5053:
        $Dac8bb1 = array_merge($Dac8bb1, $B4da6db);
        goto Ea55cee;
        a12fb9a:
        b406ddb:
        goto F35b2d5;
        Fad9be7:
        $this->response->redirect(
            $this->url->link(
                $A856a54,
                $this->token . "&store_id=" . $d3c6001,
                true
            )
        );
        goto B2c004a;
        a6728f0:
        $ffff072 = VERSION;
        goto Fb3d535;
        b4b6976:
        unset($this->session->data["success"]);
        goto a9a53d4;
        C5043c1:
        $e50a3f3 = ["B", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"];
        goto C766f33;
        E7a0e54:
        cb93e00:
        goto Bdf5d16;
        c909f2f:
        if (!(isset($D9c08df["message"]) && $D9c08df["message"] != "valid")) {
            goto B09d95e;
        }
        goto d4bebff;
        Fb3d535:
        $B4da6db = [];
        goto A8697de;
        fd17e33:
        $d3c6001 = 0;
        goto F699be5;
        E7225be:
        $this->model_setting_setting->editSetting(
            $db09cef . "tagmanager",
            $F56b5c1,
            $d3c6001
        );
        goto B41658a;
        Bdf5d16:
        if (!(isset($D9c08df["message"]) && $D9c08df["message"] != "valid")) {
            goto cf78c31;
        }
        goto E5adf8e;
        c6d8e24:
        $B4da6db[
            "tagmanager"
        ] = $this->model_extension_module_tagmanager->GetTagmanagerVariables(
            $B4da6db["tagmanager"],
            $d3c6001
        );
        goto c71b341;
        A2c5706:
        $Dac8bb1["clear"] = $this->url->link(
            $A856a54 . "/clear",
            $this->token . "&store_id=" . $d3c6001,
            true
        );
        goto e03c7cd;
        f558d07:
        $B4da6db["tagmanager"] = $B70b51f;
        goto Dfc2d6f;
        c773c8b:
        $B4da6db["tagmanager"] = $B70b51f;
        goto Ca95fdf;
        C27710c:
        if (!($b1e34d5 == "1")) {
            goto b67db43;
        }
        goto Fad9be7;
        D38b6cd:
        $B70b51f = $this->model_extension_module_tagmanager->upgrade();
        goto D68568c;
        f584dba:
        d589106:
        goto C5043c1;
        B2b7d31:
        fe10014:
        goto F37ad82;
        db2e2e4:
        $this->document->addStyle(
            "view/javascript/tagmanager/css/bootstrap-colorpicker.min.css"
        );
        goto a0470bf;
        e03c7cd:
        $Dac8bb1["cancel"] = $this->url->link(
            $C793ce7,
            $this->token . "&type=analytics",
            true
        );
        goto fb86822;
        De51033:
        if (!empty($B4da6db["tagmanager"]["route_confirm"])) {
            goto C2256c5;
        }
        goto Ab2ba04;
        Caed375:
        D42322b:
        goto F5eb3ce;
        C3b4caa:
        goto B12f06c;
        goto B9140ef;
        fc141ec:
        $this->document->setTitle($this->language->get("heading_title"));
        goto Ff4b4e1;
        b1c91ee:
        $db09cef = self::D6cf0c1;
        goto Ec858b4;
        Cf485af:
        ddf0d0c:
        goto D03b3ab;
        c0ce813:
        $ea9c496 = json_decode($ea9c496, true);
        goto D3f9205;
        F0c5f41:
        $B4da6db["currencies"] = [];
        goto E0dd33c;
        Ee2b9aa:
        $Dac8bb1["footer"] = $this->load->controller("common/footer");
        goto B4ef943;
        A5b8a99:
        goto e5049a6;
        goto d690e1e;
        ed059da:
        $ef3ca76 = $this->request->post["datas"];
        goto Cbbaba1;
        a796695:
        curl_close($f818113);
        goto fd115ce;
        bdf08d6:
        Ee4cab0:
        goto ff60e0f;
        fb20486:
        E3b6ac6:
        goto Ae0c3f8;
        Ff4b4e1:
        $b9c147e = $this->model_extension_module_tagmanager->getlang();
        goto D8e4f32;
        F3e9665:
        $Dac8bb1["ver"] = "2x";
        goto cf845f0;
        Ed76c48:
        curl_setopt($f818113, CURLOPT_POST, true);
        goto e44a03c;
        Cdf0d74:
        goto c17f3c3;
        goto f584dba;
        e38e26d:
        $C793ce7 = "marketplace/extension";
        goto c53b6d9;
        cce65de:
        $B4da6db["tagmanager"] = $B70b51f;
        goto dda2bdf;
        e44a03c:
        curl_setopt($f818113, CURLOPT_POSTFIELDS, http_build_query($D2791be));
        goto B78833c;
        cd5b710:
        $this->load->model("localisation/currency");
        goto Ff91762;
        B4dcf6a:
        $B4da6db["tagmanager"]["route_success"] = $ea8db39["alt_success"];
        goto a16cc04;
        A4be4f7:
        $Dac8bb1["licencedomain"] = $A7dd299;
        goto a7e8fa9;
        df96636:
        $e399a5e = false;
        goto cf8c4dd;
        a9fc493:
        $Aacd0f6 = curl_exec($b5d237d);
        goto B85373b;
        D1c1f7f:
        goto B4fe08e;
        goto d5a5995;
        C687c9c:
        curl_setopt(
            $b5d237d,
            CURLOPT_URL,
            "https://1licence.aits.xyz/curl.html"
        );
        goto B8277a7;
        e0887b4:
        $ade2414 = DIR_LOGS . "tagmanager.log";
        goto a4a7a6b;
        b469cf0:
        $B4da6db["pagination"] = $eb26d62->render();
        goto ea55cc2;
        b07b14d:
        $Dac8bb1["curl"] = $Aacd0f6;
        goto a6e140b;
        e46c2dc:
        $Fd129c2 .= "&page=" . $this->request->get["page"];
        goto C34b0a0;
        a5e2d99:
        $B4da6db["stores"][] = ["store_id" => 0, "name" => "default"];
        goto b43ef2e;
        Ab08c58:
        if (!($Afb8353 != "6")) {
            goto c426315;
        }
        goto A0cfb3a;
        Da69cbe:
        if (!($df3ca78 < 1)) {
            goto C4a97ab;
        }
        goto Bf95272;
        Cc33cb3:
        goto b406ddb;
        goto C09f5c7;
        F05ad6e:
        if (
            !(
                !isset($B4da6db["tagmanager"]["code"]) &&
                !isset($B4da6db["tagmanager"]["customer_data"]) &&
                !isset($B4da6db["tagmanager"]["admin"])
            )
        ) {
            goto bfae656;
        }
        goto cce65de;
        febb628:
        $this->config->set("template_engine", "template");
        goto f20a5d9;
        B8277a7:
        curl_setopt($b5d237d, CURLOPT_RETURNTRANSFER, true);
        goto a9fc493;
        Deb4c81:
        $d3c6001 = $this->request->get["store_id"];
        goto aa5bafe;
        ea55cc2:
        $B4da6db["results"] = sprintf(
            $this->language->get("text_pagination"),
            $Da332c7 ? ($Ee24077 - 1) * $df3ca78 + 1 : 0,
            ($Ee24077 - 1) * $df3ca78 > $Da332c7 - $df3ca78
                ? $Da332c7
                : ($Ee24077 - 1) * $df3ca78 + $df3ca78,
            $Da332c7,
            ceil($Da332c7 / $df3ca78)
        );
        goto E044f39;
        ecabbcc:
        $this->model_setting_setting->editSetting(
            "module_mod_google",
            $D2791be,
            $f1b1057
        );
        goto B1f776f;
        a630d7d:
        $B4da6db["error_warning"] = sprintf(
            $this->language->get("error_warning"),
            basename($ade2414),
            round(substr($Fafc625, 0, strpos($Fafc625, ".") + 4), 2) .
                $e50a3f3[$a59e207]
        );
        goto d41c4d7;
        F35b2d5:
        $Dac8bb1["error"] = "";
        goto cd36adc;
        c71b341:
        if (
            !(
                !isset($B4da6db["tagmanager"]["vs"]) ||
                empty($B4da6db["tagmanager"]["vs"])
            )
        ) {
            goto fe10014;
        }
        goto D508c21;
        ad54481:
        $b1e34d5 = isset($this->request->post["apply"])
            ? $this->request->post["apply"]
            : 0;
        goto cd4ba4a;
        feff183:
        $Dac8bb1["success"] = $this->session->data["success"];
        goto b4b6976;
        Ab64999:
        $Dac8bb1["module"] = self::Adc6251;
        goto E373815;
        b826bdf:
        Ecf830b:
        goto b1c91ee;
        f46cb51:
        if (!$e399a5e) {
            goto b0c59dc;
        }
        goto c4d3b95;
        F5eb3ce:
        $d3c6001 = 0;
        goto d0dee2b;
        Ae0f73b:
        $D2791be = ["module_mod_google" => $ea9c496];
        goto ecabbcc;
        A7202b7:
        $B4da6db["refund_url"] =
            $this->catalog . "index.php?route=" . $A856a54 . "/refund";
        goto ec941ed;
        E044f39:
        $B4da6db["button_apply"] = "Apply";
        goto F0c5f41;
        F39ea7f:
        $B4da6db["order_total"] = $Da332c7;
        goto f59b2fa;
        B69fc08:
        D142238:
        goto Faa6ff6;
        b1ed5de:
        $this->load->model("extension/module/tagmanager");
        goto D8b985d;
        F689c98:
        A7e8e8f:
        goto b9ee5a1;
        bf51dc7:
        B12f06c:
        goto f46cb51;
        da3236d:
        $Ee24077 = 1;
        goto F4b0bb6;
        Bbbf6a0:
        $Fafc625 = $Fafc625 / 1024;
        goto Bf9e41a;
        D32724d:
        $C793ce7 = "extension/extension";
        goto B8075cb;
        f0a1f3f:
        $Dac8bb1["breadcrumbs"][] = [
            "text" => $this->language->get("text_home"),
            "href" => $this->url->link("common/dashboard", $this->token, true),
        ];
        goto F35224a;
        Eb674b7:
        C2256c5:
        goto a562b49;
        cd4ba4a:
        if (!($E4b928e == "3" || $dce6528 == "2.3")) {
            goto C2ea6cf;
        }
        goto C27710c;
        Acbf23a:
        Dd38ab2:
        goto d33dadc;
        B1cecf7:
        if (!isset($this->request->post)) {
            goto B36fecf;
        }
        goto D33bc84;
        a0470bf:
        $this->document->addScript(
            "view/javascript/tagmanager/js/bootstrap-colorpicker.min.js"
        );
        goto ab0ea43;
        Ba5b2cf:
        $F56b5c1 = $this->model_setting_setting->getSetting(
            $db09cef . "tagmanager",
            $d3c6001
        );
        goto ca14e0e;
        F76e448:
        curl_setopt($f818113, CURLOPT_RETURNTRANSFER, true);
        goto C7aba4f;
        F699be5:
        $dce6528 = substr(VERSION, 0, 3);
        goto a6728f0;
        a4a7a6b:
        if (!file_exists($ade2414)) {
            goto A7e8e8f;
        }
        goto C62c59c;
        E373815:
        $Dac8bb1["template"] = self::ff55e87;
        goto Fbbb234;
        db8602a:
        $B4da6db["error_primary"] = "";
        goto dea5fe5;
        B78833c:
        $D9c08df = curl_exec($f818113);
        goto a6a9bb6;
        ddf3158:
        curl_setopt(
            $f818113,
            CURLOPT_URL,
            "https://1licence.aits.xyz/verify.php"
        );
        goto F76e448;
        c5e8185:
        $B4da6db["catalog"] = $this->catalog;
        goto C44fd3e;
        D68568c:
        if (!(isset($B70b51f["code"]) && !empty($B70b51f["code"]))) {
            goto ac3741e;
        }
        goto c773c8b;
        D9bdae5:
        e5049a6:
        goto a8e5984;
        Baf0962:
        $D2791be = ["module_mod_google" => $A839701];
        goto c909f2f;
        D657204:
        $B4da6db["show_order"] = true;
        goto bece41e;
        fd115ce:
        $D9c08df = json_decode($D9c08df, true);
        goto f5dee99;
        e5bfce6:
        return;
        goto C192682;
        E5adf8e:
        $B4da6db["error"] = $D9c08df["message"];
        goto df96636;
        Faa6ff6:
        $f1b1057 = 0;
        goto Be58eb8;
        D07dca3:
        $Dac8bb1["cancel"] = $this->url->link(
            $C793ce7,
            $this->token . "&type=analytics",
            true
        );
        goto Fcb2154;
        Fc852ab:
        $db09cef = "";
        goto ed033fa;
        Ae8a8c3:
        $Dac8bb1["domain"] = $A7dd299;
        goto A4be4f7;
        C5fdff9:
        $Dac8bb1["module"] = self::Adc6251;
        goto Aa98950;
        D46c001:
        da8e07c:
        goto a34b328;
        d93b568:
        goto D142238;
        goto B62770e;
        Ca95fdf:
        ac3741e:
        goto E5fcbf5;
        d0dee2b:
        Cd7b1b1:
        goto df03885;
        F1584f2:
        goto E19d231;
        goto e5fbd66;
        D03b3ab:
        if (!empty($B4da6db["tagmanager"]["route_success"])) {
            goto a0fc600;
        }
        goto B4dcf6a;
        b8c7cb2:
        curl_close($f818113);
        goto Dab2761;
        D33bc84:
        $F56b5c1 = [
            $db09cef . "tagmanager_status" => $this->request->post[
                $db09cef . "tagmanager_status"
            ],
            $db09cef . "tagmanager_data" => $this->request->post,
        ];
        goto E7225be;
        B85373b:
        if (curl_errno($b5d237d)) {
            goto a5f2bdf;
        }
        goto b07b14d;
        dc99df9:
        $db09cef = "";
        goto c50ca1c;
        Dcbb314:
        $B4da6db[
            "languages"
        ] = $this->model_localisation_language->getLanguages();
        goto Ba5b2cf;
        ab6d4b4:
        Baf6312:
        goto C5fdff9;
        B4ef943:
        $b5d237d = curl_init();
        goto C687c9c;
        Fe89679:
        curl_setopt($f818113, CURLOPT_TIMEOUT, 30);
        goto Ed76c48;
        F3abbd8:
        $B4da6db["store_id"] = $d3c6001;
        goto E6fc1f1;
        D936140:
        return;
        goto ce893f5;
        B9140ef:
        f6eb1d7:
        goto ed059da;
        F4b0bb6:
        goto fc05a04;
        goto ffe3b4a;
        ec1c02e:
        $e399a5e = false;
        goto D8b24ba;
        e1e259b:
        curl_setopt($f818113, CURLOPT_POST, true);
        goto Ce803f6;
        F5ac3cc:
        curl_close($b5d237d);
        goto A7e5053;
        e739259:
        $this->config->set("template_engine", "template");
        goto F3c7724;
        Cf9aa39:
        $Dac8bb1["action"] = $this->url->link(
            $A856a54,
            $this->token . "&store_id=" . $d3c6001,
            true
        );
        goto A2c5706;
        Bf9e41a:
        $a59e207++;
        goto C29fd0e;
        A8697de:
        if (!isset($this->request->get["store_id"])) {
            goto D42322b;
        }
        goto Deb4c81;
        C48db95:
        $b1e34d5 = 0;
        goto ad54481;
        fc4b995:
        $B4da6db["error_primary"] = $this->error["primary"];
        goto D46c001;
        A6b58aa:
        Da62c0a:
        goto D936140;
        A0d8fa8:
        $bb235f1 = ["start" => ($Ee24077 - 1) * $df3ca78, "limit" => $df3ca78];
        goto Fbf3749;
        Db64873:
        $this->session->data["success"] = $this->language->get("text_success");
        goto C48db95;
        Ec858b4:
        Bdffb14:
        goto fa550dd;
        F51ab37:
        $Dac8bb1["action"] = $this->url->link(
            $A856a54,
            $this->token . "&store_id=" . $d3c6001,
            true
        );
        goto D07dca3;
        a1c4b8e:
        curl_setopt(
            $f818113,
            CURLOPT_URL,
            "https://1licence.aits.xyz/verify.php"
        );
        goto B3d99b3;
        f85a91d:
        $df3ca78 = (int) $this->config->get("config_limit_admin");
        goto Da69cbe;
        C766f33:
        $a59e207 = 0;
        goto Acbf23a;
        E5fcbf5:
        if (!(isset($B70b51f["primary"]) && !empty($B70b51f["primary"]))) {
            goto eaddb9e;
        }
        goto f558d07;
        a16cc04:
        a0fc600:
        goto De51033;
        C607e57:
        Fabac0c:
        goto F5ac3cc;
        cd36adc:
        $Dac8bb1["error_tm"] = "";
        goto e36cdb5;
        b9ee5a1:
        $B4da6db["show_order"] = false;
        goto E49e785;
        Bca2586:
        $ea9c496 = $this->getSettingValue("module_mod_google", $f1b1057);
        goto ce9df47;
        A020a79:
        af6b1dc:
        goto f18bdaa;
        c4d3b95:
        $Dac8bb1 = array_merge($Dac8bb1, $A240542);
        goto D1c1f7f;
        f5dee99:
        if (!(isset($D9c08df["message"]) && $D9c08df["message"] == "valid")) {
            goto cb93e00;
        }
        goto dc55b3d;
        F3c7724:
        $this->response->setOutput(
            $this->load->view(
                "extension/analytics/" . $Dac8bb1["template"],
                $Dac8bb1
            )
        );
        goto Ad6a109;
        a6e140b:
        goto Fabac0c;
        goto db99924;
        C34b0a0:
        a6cdf59:
        goto f85a91d;
        Ab2ba04:
        $B4da6db["tagmanager"]["route_confirm"] = $ea8db39["alt_confirm"];
        goto Eb674b7;
        fb86822:
        $Dac8bb1["token"] = $this->token;
        goto B69fc08;
        a8e5984:
        $D2791be = [
            "domain" => $A240542["domain"],
            "extension" => "30750",
            "id" => $A240542["licence"],
        ];
        goto b9b3ac8;
        E6d75a5:
        $db09cef = "analytics_";
        goto a12fb9a;
        bcf7e40:
        $eb26d62->url = $this->url->link(
            $A856a54,
            $this->token . $Fd129c2 . "&page={page}",
            true
        );
        goto b469cf0;
        Fa1c5f3:
        $db09cef = "";
        goto Cc33cb3;
        b5ff06d:
        if (
            !(
                $this->request->server["REQUEST_METHOD"] == "POST" &&
                $this->validate()
            )
        ) {
            goto efb87fd;
        }
        goto B1cecf7;
        c259905:
        $B4da6db["error_warning"] = "";
        goto cffcce3;
        Abce231:
        $this->document->setTitle($this->language->get("heading_title"));
        goto Ab64999;
        Ce803f6:
        curl_setopt($f818113, CURLOPT_POSTFIELDS, http_build_query($D2791be));
        goto fdaaa76;
        Fc31d58:
        goto Da62c0a;
        goto d39ec8f;
        ebad9f5:
        goto D142238;
        goto ab6d4b4;
        C9c43df:
        B09d95e:
        goto b360b92;
        C62c59c:
        $Fafc625 = filesize($ade2414);
        goto f01023d;
        ff8d9e0:
        ecd135b:
        goto c6d8e24;
        D508c21:
        $Cbbb1c5 = $this->model_extension_module_tagmanager->getNewURL();
        goto ca1714b;
        A805b31:
        $B4da6db["log"] = file_get_contents(
            $ade2414,
            FILE_USE_INCLUDE_PATH,
            null
        );
        goto Cdf0d74;
        a562b49:
        $Dac8bb1 = array_merge($Dac8bb1, $B4da6db);
        goto dd92545;
        f758a9e:
        $A856a54 = "extension/analytics/tagmanager";
        goto D32724d;
        df03885:
        $B4da6db["stores"] = $this->model_setting_store->getStores();
        goto cca9712;
        C09f5c7:
        B0eeaa1:
        goto E6d75a5;
        Aaeab86:
        $A7dd299 = $this->gtmf($A7dd299);
        goto Ae8a8c3;
        dc55b3d:
        $ea9c496 = [
            "order_id" => isset($D9c08df["order_id"])
                ? $D9c08df["order_id"]
                : 0,
            "email" => isset($D9c08df["email"]) ? $D9c08df["email"] : "",
            "licence" => isset($D9c08df["licence"]) ? $D9c08df["licence"] : "",
            "status" => isset($D9c08df["status"]) ? $D9c08df["status"] : "",
            "domain" => isset($D9c08df["domain"]) ? $D9c08df["domain"] : "",
            "ep" => isset($D9c08df["ep"]) ? $D9c08df["ep"] : "",
        ];
        goto Ae0f73b;
        b9a85d8:
        if (isset($this->error["primary"])) {
            goto efee805;
        }
        goto db8602a;
        C192682:
    }
    public function clear()
    {
        goto D9efd6c;
        df935cf:
        fclose($a3c4770);
        goto D08b90f;
        be9c5e5:
        Aa1753a:
        goto Dbe8b18;
        a1eae82:
        $a3c4770 = fopen($ade2414, "w+");
        goto df935cf;
        f0497a5:
        if ($dce6528 == "2.0") {
            goto f3ff47f;
        }
        goto cb1d444;
        b2131e8:
        $dce6528 = substr(VERSION, 0, 3);
        goto a1eae82;
        B8d0ae7:
        e026c16:
        goto f453833;
        be46b91:
        $this->response->redirect(
            $this->url->link(
                "analytics/tagmanager",
                $this->token . "&store_id=" . $d3c6001,
                "SSL"
            )
        );
        goto dd8cb11;
        e8f82fc:
        f7be4f9:
        goto be46b91;
        e6367c3:
        E2c0d77:
        goto Ca9f8e2;
        D9efd6c:
        $ade2414 = DIR_LOGS . "tagmanager.log";
        goto e510bea;
        E95c6ec:
        goto e026c16;
        goto e6367c3;
        e510bea:
        $E4b928e = substr(VERSION, 0, 1);
        goto b8a7dc8;
        f30244b:
        $this->redirect(
            $this->url->link(
                "module/tagmanager",
                $this->token . "&store_id=" . $d3c6001,
                "SSL"
            )
        );
        goto F4068a5;
        F4068a5:
        a2b7791:
        goto Ffc35b2;
        cb1d444:
        $this->response->redirect(
            $this->url->link(
                "extension/analytics/tagmanager",
                $this->token . "&store_id=" . $d3c6001,
                "SSL"
            )
        );
        goto a866add;
        Ffc35b2:
        goto e026c16;
        goto be9c5e5;
        F083467:
        f3ff47f:
        goto f30244b;
        Fa4ac3d:
        if ($E4b928e == "3") {
            goto Aa1753a;
        }
        goto a54ad76;
        a54ad76:
        if ($E4b928e == "1") {
            goto E2c0d77;
        }
        goto Afa5b69;
        dd8cb11:
        goto a2b7791;
        goto F083467;
        b8a7dc8:
        $d3c6001 = 0;
        goto b2131e8;
        Afa5b69:
        if ($dce6528 == "2.1" || $dce6528 == "2.2") {
            goto f7be4f9;
        }
        goto f0497a5;
        Ca9f8e2:
        $this->redirect(
            $this->url->link("module/tagmanager", $this->token, "SSL")
        );
        goto B8d0ae7;
        Dbe8b18:
        $this->response->redirect(
            $this->url->link(
                "extension/analytics/tagmanager",
                $this->token . "&store_id=" . $d3c6001,
                true
            )
        );
        goto E95c6ec;
        D08b90f:
        $this->session->data["success"] = "Log cleared";
        goto Fa4ac3d;
        a866add:
        goto a2b7791;
        goto e8f82fc;
        f453833:
    }
    function gtmf($Dac8bb1, $da19aa8 = false)
    {
        goto B60de7e;
        Ce4cd7b:
        $Ec17c53 = count($A1b491d);
        goto ff857f5;
        f38e20e:
        goto D819a72;
        goto Eafd7ed;
        C3766ec:
        if (count($Dbcd9e6) === 1) {
            goto d3d03b3;
        }
        goto Aef1961;
        F43c090:
        D73be18:
        goto C1df660;
        adacf67:
        $b077457 = array_shift($A1b491d);
        goto cf0a9cd;
        ad9e8e4:
        if (!filter_var($A7dd299, FILTER_VALIDATE_IP)) {
            goto b44cf27;
        }
        goto cb1e526;
        C51427f:
        $b077457 = array_shift($A1b491d);
        goto E3d5406;
        e16e85f:
        if (
            !(
                strpos(join(".", $A1b491d), ".") === false &&
                in_array($A1b491d[0], ["localhost", "test", "invalid"]) ===
                    false
            )
        ) {
            goto Dd84e14;
        }
        goto b61273b;
        Aef1961:
        $a59e207 = count($Dbcd9e6);
        goto B0bf645;
        B0bf645:
        d9680fa:
        goto e867dd8;
        ff857f5:
        $Dbcd9e6 = explode(".", $Ec17c53 === 4 ? $A1b491d[3] : $A1b491d[2]);
        goto f1547ad;
        d2a86d4:
        goto D819a72;
        goto F9e1a6f;
        d79d89f:
        goto daccd93;
        goto F43c090;
        ee6899f:
        D819a72:
        goto ea372de;
        C1d7253:
        c46213f:
        goto A24f3d5;
        b87becb:
        $Bb57414 = $this->model_extension_module_tagmanager->getTLD();
        goto c6646e7;
        F9e1a6f:
        c1e27c6:
        goto d0f5fa9;
        e8263fa:
        a2a8220:
        goto fb8e60e;
        ebecc68:
        c7ca169:
        goto ba2afc4;
        Eafd7ed:
        d3d03b3:
        goto C51427f;
        F7f2eff:
        b44cf27:
        goto cb96c11;
        f1547ad:
        if (count($Dbcd9e6) === 2) {
            goto c1e27c6;
        }
        goto C3766ec;
        b6865ab:
        if (count($A1b491d) > 2) {
            goto d97b5c2;
        }
        goto C6bdd84;
        ef5fb59:
        daccd93:
        goto ee6899f;
        b61273b:
        array_unshift($A1b491d, $aeb69e8);
        goto Dd5058c;
        f989553:
        array_shift($A1b491d);
        goto A64ec34;
        B857a51:
        d97b5c2:
        goto Ce4cd7b;
        cb1e526:
        return $A7dd299;
        goto F7f2eff;
        ba8cb0b:
        goto d9680fa;
        goto c41b42d;
        e867dd8:
        if (!($a59e207 > 1)) {
            goto Cfdd559;
        }
        goto B5c19ab;
        C6bdd84:
        if (count($A1b491d) === 2) {
            goto c46213f;
        }
        goto b99e7a4;
        cb96c11:
        $A1b491d = array_slice(
            array_filter(explode(".", $A7dd299, 4), function ($e186fc6) {
                return $e186fc6 !== "www" &&
                    $e186fc6 !== "dev" &&
                    $e186fc6 !== "test" &&
                    $e186fc6 !== "demo";
            }),
            0
        );
        goto b6865ab;
        A64ec34:
        f9830b2:
        goto d79d89f;
        cf0a9cd:
        A53fa26:
        goto f38e20e;
        b99e7a4:
        goto a2a8220;
        goto B857a51;
        Dd5058c:
        Dd84e14:
        goto e8263fa;
        fb8e60e:
        return join(".", $A1b491d);
        goto a32c661;
        A24f3d5:
        $aeb69e8 = array_shift($A1b491d);
        goto e16e85f;
        ea372de:
        goto a2a8220;
        goto C1d7253;
        c41b42d:
        Cfdd559:
        goto d2a86d4;
        f1e80c7:
        if (!($Ec17c53 === 4)) {
            goto A53fa26;
        }
        goto adacf67;
        B60de7e:
        $this->load->model("extension/module/tagmanager");
        goto A75675f;
        c6646e7:
        if (
            !(count($A1b491d) > 2 && in_array($Dbcd9e6[0], $Bb57414) !== false)
        ) {
            goto f9830b2;
        }
        goto f989553;
        ba2afc4:
        $a59e207--;
        goto ba8cb0b;
        C1df660:
        array_unshift($A1b491d, $b077457);
        goto ef5fb59;
        d0f5fa9:
        $b077457 = array_shift($A1b491d);
        goto f1e80c7;
        A75675f:
        $a02ac5a = $A7dd299 = strtolower($Dac8bb1);
        goto ad9e8e4;
        B5c19ab:
        $b077457 = array_shift($A1b491d);
        goto ebecc68;
        E3d5406:
        if (strlen($Dbcd9e6[0]) === 2 && $Ec17c53 === 3) {
            goto D73be18;
        }
        goto b87becb;
        a32c661:
    }
    protected function validate()
    {
        goto c6f780a;
        D50afe5:
        $A32ada6 = "analytics/tagmanager";
        goto df356a5;
        B3a62df:
        $d3c6001 = 0;
        goto Eb80f1f;
        D9e4a4b:
        $A32ada6 = "extension/analytics/tagmanager";
        goto e0c16b6;
        de1d344:
        $A32ada6 = "extension/analytics/tagmanager";
        goto D9e490e;
        Ab9731a:
        if (!($dce6528 == "2.1" || $dce6528 == "2.2")) {
            goto A101cc7;
        }
        goto D50afe5;
        e0c16b6:
        D605879:
        goto f340b6d;
        df356a5:
        A101cc7:
        goto b02acb4;
        F165189:
        E5adb51:
        goto Ab9731a;
        f340b6d:
        if ($this->user->hasPermission("modify", $A32ada6)) {
            goto A0485c9;
        }
        goto Ecfbba8;
        c6f780a:
        $E4b928e = substr(VERSION, 0, 1);
        goto Cce31b5;
        B284248:
        A0485c9:
        goto aaaf4b4;
        Ecfbba8:
        $this->error["warning"] = $this->language->get("error_permission");
        goto B284248;
        b02acb4:
        if (!($dce6528 == "2.3")) {
            goto D605879;
        }
        goto D9e4a4b;
        Cce31b5:
        $db09cef = "";
        goto B3a62df;
        aaaf4b4:
        return !$this->error;
        goto Dc472a2;
        caf002e:
        $A32ada6 = "module/tagmanager";
        goto F165189;
        D9e490e:
        if (!($E4b928e == "1" || $E4b928e == "2")) {
            goto E5adb51;
        }
        goto caf002e;
        Eb80f1f:
        $dce6528 = substr(VERSION, 0, 3);
        goto de1d344;
        Dc472a2:
    }
    public function install()
    {
        $this->updateDatabase();
    }
    public function uninstall()
    {
        $this->db->query(
            "DROP TABLE IF EXISTS `" . DB_PREFIX . "analytics_tracking`"
        );
    }
    private function updateDatabase()
    {
        $this->db->query(
            "CREATE TABLE IF NOT EXISTS `" .
                DB_PREFIX .
                "analytics_tracking` (\xd\xa           `id` int(11) NOT NULL AUTO_INCREMENT,
           `order_id` int(11) DEFAULT NULL,\xd\xa           `cid` varchar(128) DEFAULT NULL,
\xa\x9\x9   `uid` varchar(64) DEFAULT NULL,\xd\xa\x9	   `ip` varchar(64) DEFAULT NULL,\xd\xa	\x9   `geoid` varchar(64) DEFAULT NULL,
	\x9   `sr` varchar(64) DEFAULT NULL,
\x9	   `vp` varchar(64) DEFAULT NULL,
\x9\x9   `ul` varchar(64) DEFAULT NULL,
		   `dr` varchar(250) DEFAULT NULL,\xd\xa           `hit` tinyint(1) NOT NULL DEFAULT '0',\xd
	\x9   `tid` varchar(24) DEFAULT NULL,	
	\x9   `user_agent` varchar(250) DEFAULT NULL,
\xa\x9	   `currency_code` varchar(11) DEFAULT NULL,
\x9	   `currency_id` int(11) DEFAULT NULL,
\xa             PRIMARY KEY (`id`)\xd\xa            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;"
        );
    }
    private function columnExistsInTable($ecadf8c, $Ca88c48)
    {
        goto Efee57e;
        d502078:
        Ce14483:
        goto c69a5c4;
        E3e70ec:
        foreach ($Ae58aaa->rows as $D9303ce) {
            goto a0171a2;
            a0171a2:
            if (!($D9303ce["Field"] == $Ca88c48)) {
                goto c3fd618;
            }
            goto F353666;
            E448269:
            c3fd618:
            goto b75b29c;
            b75b29c:
            D7d54a5:
            goto D3f2c2b;
            F353666:
            return true;
            goto E448269;
            D3f2c2b:
        }
        goto d502078;
        c69a5c4:
        return false;
        goto a5911b5;
        Efee57e:
        $Ae58aaa = $this->db->query("DESC `" . DB_PREFIX . $ecadf8c . "`;");
        goto E3e70ec;
        a5911b5:
    }
    private function getSettingValue($b849d10, $d3c6001 = 0)
    {
        goto bd79385;
        bd79385:
        $Ae58aaa = $this->db->query(
            "SELECT value FROM " .
                DB_PREFIX .
                "setting WHERE store_id = '" .
                (int) $d3c6001 .
                "' AND `key` = '" .
                $this->db->escape($b849d10) .
                "'"
        );
        goto ecbb69d;
        a8953d9:
        a4a08fe:
        goto b651df5;
        d9dce81:
        return null;
        goto e99f7b9;
        ecbb69d:
        if ($Ae58aaa->num_rows) {
            goto B37dcb3;
        }
        goto d9dce81;
        e2cc4fb:
        B37dcb3:
        goto A8581e3;
        A8581e3:
        return $Ae58aaa->row["value"];
        goto a8953d9;
        e99f7b9:
        goto a4a08fe;
        goto e2cc4fb;
        b651df5:
    }
    private function URLredirect($Fd129c2, $Dc77725 = 302)
    {
        header(
            "Location: " .
                str_replace(
                    [
                        "&amp;",
                        "
",
                        "\xd",
                    ],
                    ["&", "", ""],
                    $Fd129c2
                ),
            true,
            $Dc77725
        );
        exit();
    }
    public function check_array($d60af34)
    {
        return is_array($d60af34) ||
            $d60af34 instanceof \Countable ||
            $d60af34 instanceof \SimpleXMLElement ||
            $d60af34 instanceof \ResourceBundle;
    }
}
?>