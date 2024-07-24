<?php

class LdevSmartVideoWidget
{
    public $setting = [];

    private $fields = [
        'name' => 'Модуль',
        'video' => '',
        'video_small_width' => 120,
        'video_small_height' => 165,
        'video_big_width' => 268,
        'video_big_height' => 490,
        'video_controls' => 0,
        'image' => '',
        'image_click' => 'popup',
        'image_link' => '',
        'image_small_width' => 120,
        'image_small_height' => 165,
        'image_big_width' => 268,
        'image_big_height' => 490,
        'widget_position' => 'left_bottom',
        'btn_1_text' => [],
        'btn_1_href' => [],
        'btn_2_text' => [],
        'btn_2_href' => [],
        'btn_size' => 'sm',
        'btn_style' => 'default',
        'btn_over' => 0,
        'description' => [],
        'btn_close' => 1,
        'btn_close_action' => 'remove',
        'show_mobile' => 1,
        'autostart' => 1,
        'loop' => 1,
        'period' => 0,
        'period_duration' => 0,
        'on_exiting' => 0,
        'delay' => 0,
        'restart_on_expanse' => 0,

        //
        'module_categories' => [],
        'module_manufacturers' => [],
        'module_products' => [],
        'module_informations' => [],
        //

        'custom_css' => '',
        'custom_js' => '',
    ];

    public $state = 0;
    public $for = '';
    public function getSettings($set = []){
        if(defined('HTTP_CATALOG')){
            $env = [preg_replace('/^w{3}\./','',parse_url(HTTP_CATALOG)['host']), 'ldev_smart_video_widget', explode('.',VERSION)[0].explode('.',VERSION)[1], ''.parse_url(HTTP_CATALOG)['host'],  true];
        }else{
            $env = [preg_replace('/^w{3}\./','',parse_url(HTTP_SERVER)['host']), 'ldev_smart_video_widget', explode('.',VERSION)[0].explode('.',VERSION)[1], ''.parse_url(HTTP_SERVER)['host'],  true];
        }
        return $env;
    }


    public function initModule(&$d,$p){
        $a=1;
        $a = !$this->getSettings() ? $this->state : $a;
        $b = 1;
        $b ? $i = $this->getSettings() : '';
        $b = '';
        $d['s'] = true;
        $a = $b;
        $ldev_smart_video_widget_ks = $module_ldev_smart_video_widget_ks = '';
        $res = true;
        $d['s'] = $b==$ldev_smart_video_widget_ks || $b==$module_ldev_smart_video_widget_ks;
        return $res;
    }


    public function oc_version(){
        $opencart_version = explode(".", VERSION);
        return $opencart_version[0].$opencart_version[1];
    }



    public function getKey(){
        if(defined('HTTP_CATALOG')){
            return md5(HTTP_CATALOG);
        }else{
            return md5(HTTP_SERVER);
        }
    }

    public function getFields(){
        return $this->fields;
    }


}