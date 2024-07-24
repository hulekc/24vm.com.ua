<?php
class ControllerExtensionModuleLdevSmartVideoWidget extends Controller {

    private $extensionPath = 'extension/extension';
    private $shopModulePath = '';
    private $path = 'extension/module/ldev_smart_video_widget';
    private $setPref = '';
    private $output = [];


    public function __construct($registry)
    {
        parent::__construct($registry);
        $this->ldev_smart_video_widget = new LdevSmartVideoWidget($registry);
        $this->version = $this->ldev_smart_video_widget->oc_version();

        if($this->version < 23){
            $this->path = 'module/ldev_smart_video_widget';
            $this->shopModulePath = 'module';
        }elseif($this->version == 23){
            $this->shopModulePath = 'extension/module';
        }else{
            $this->extensionPath = 'marketplace/extension';
            $this->setPref = 'module_';
            $this->shopModulePath = 'extension/module';
        }

        if($this->version <= 23){
            $this->tempExt = '.tpl';
        }else{
            $this->tempExt = '';
        }


    }

	public function index($setting) {

        static $module = 0;

        $language_id = (int)$this->config->get('config_language_id');

        $this->load->language($this->path);
        $this->load->model('tool/image');

        $this->checkSetting($setting);


        /*pages rule*/
        $route = isset($this->request->get['route']) ? $this->request->get['route'] : 'common/home';

        switch ($route){
            case 'product/product' :
                if($this->module_products){
                    if(!in_array($this->request->get['product_id'], $this->module_products)){
                        return '';
                    }
                }
                break;
            case 'product/category' :
                if($this->module_categories){
                    $path = explode('_', $this->request->get['path']);
                    $cat_id = (int)end($path);
                    if(!in_array($cat_id, $this->module_categories)){
                        return '';
                    }
                }
                break;

            case 'product/manufacturer/info' :
                if($this->module_manufacturers){
                    if(!in_array($this->request->get['manufacturer_id'], $this->module_manufacturers)){
                        return '';
                    }
                }
                break;

            case 'information/information' :
                if($this->module_informations){
                    if(!in_array($this->request->get['information_id'], $this->module_informations)){
                        return '';
                    }
                }
                break;
        }
        /*end pages rule*/


        if($this->video){
            if(filter_var($this->video, FILTER_VALIDATE_URL)){
                $this->output['video'] = $this->video;
            }else{
                if ($this->request->server['HTTPS']) {
                    $this->output['video'] = $this->config->get('config_ssl') . 'image/' . $this->video;
                }else {
                    $this->output['video'] = $this->config->get('config_url') . 'image/' . $this->video;
                }
            }
        }else{
            $this->output['video'] = '';
        }


        $this->output['video_small_width'] = $this->video_small_width;
        $this->output['video_small_height'] = $this->video_small_height;
        $this->output['video_big_width'] = $this->video_big_width;
        $this->output['video_big_height'] = $this->video_big_height;
        $this->output['restart_on_expanse'] = $this->restart_on_expanse;
        $this->output['video_controls'] = $this->video_controls;
        $this->output['widget_position'] = str_replace(['_'], '-', $this->widget_position);
        $this->output['btn_1_text'] = isset($this->btn_1_text[$language_id]) ? $this->btn_1_text[$language_id] : '';
        $this->output['btn_1_href'] = isset($this->btn_1_href[$language_id]) ? $this->btn_1_href[$language_id] : '';
        $this->output['btn_2_text'] = isset($this->btn_2_text[$language_id]) ? $this->btn_2_text[$language_id] : '';
        $this->output['btn_2_href'] = isset($this->btn_2_href[$language_id]) ? $this->btn_2_href[$language_id] : '';
        $this->output['btn_size'] = $this->btn_size;
        $this->output['btn_style'] = $this->btn_style;
        $this->output['btn_over'] = $this->btn_over;
        $this->output['show_mobile'] = $this->show_mobile;
        $this->output['autostart'] = $this->autostart;
        $this->output['loop'] = $this->loop;
        $this->output['image_click'] = $this->image_click;
        $this->output['image_link'] = $this->image_link;
        $this->output['custom_css'] = $this->custom_css;
        $this->output['custom_js'] = $this->custom_js;
        $this->output['btn_close'] = $this->btn_close;
        $this->output['btn_close_action'] = $this->btn_close_action;
        $this->output['description'] = isset($this->description[$language_id]) ? (html_entity_decode($this->description[$language_id], ENT_QUOTES, 'UTF-8')) : '';
        $this->output['delay'] = $this->delay;
        $this->output['on_exiting'] = $this->on_exiting;



        if($this->image){
            $this->output['image'] = $this->model_tool_image->resize($this->image, $this->image_small_width, $this->image_small_height);
        }else{
            $this->output['image'] = '';
        }

        if($this->image){
            $this->output['thumb'] = $this->model_tool_image->resize($this->image, $this->image_big_width, $this->image_big_height);
        }else{
            $this->output['thumb'] = '';
        }




        if($this->period){
            if(!$this->period_duration){
                $this->period_duration = 3600*24*365;
            }
            if(!isset($_COOKIE['ldev_smart_video_widget-'.$module]) || $_COOKIE['ldev_smart_video_widget-'.$module] != $this->period_duration){
                setcookie('ldev_smart_video_widget-'.$module, $this->period_duration, time()+(int)$this->period_duration,'/');
            }else{
                return '';
            }

        }else{
            setcookie('ldev_smart_video_widget-'.$module, $this->period_duration, time()-3600*24*365,'/');
        }



        $this->document->addStyle('catalog/view/theme/default/stylesheet/ldev_smart_video_widget.css', 'stylesheet');
        $this->document->addScript('catalog/view/javascript/ldev_smart_video_widget/ldev_smart_video_widget.js');




        $this->output['module'] = $module++;

        if($this->version < 22){
            return $this->load->view('default/template/'.$this->path.$this->tempExt, $this->output);
        }else{
            return $this->load->view($this->path.$this->tempExt, $this->output);
        }
	}


    private function checkSetting($setting){
        foreach ($this->ldev_smart_video_widget->getFields() as $set => $def_val){
            $this->{$set} = isset($setting[$set]) ? $setting[$set] : '' ;
        }
    }


}