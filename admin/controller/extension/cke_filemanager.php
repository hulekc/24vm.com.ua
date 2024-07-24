<?php
class ControllerExtensionCKEFileManager extends Controller {
    private $token = '';

    public function __construct($registry) {
        parent::__construct($registry);

        $this->token = isset($this->session->data['user_token']) ? 'user_token='.$this->session->data['user_token'] : 'token='.$this->session->data['token'];
    }
    public function index() {
        $data = array();
        $data = array_merge($data,$this->load->language('extension/cke_filemanager'));

        // Save current directory
        if (!isset($this->request->get['directory'])) {
            if (!isset($this->request->get['parent'])) { //New call Filemanager
                $this->request->get['directory'] = isset($this->request->cookie['file_manager']['directory']) ? $this->request->cookie['file_manager']['directory'] : '';
                $this->request->get['page'] = isset($this->request->cookie['file_manager']['page']) ? $this->request->cookie['file_manager']['page'] : 1;
            } else { // Trying to go back to the root directory, delete cookies
                setcookie('file_manager[directory]', '', time() - 3600, '/', $this->request->server['HTTP_HOST']);
                setcookie('file_manager[page]', '', time() - 3600, '/', $this->request->server['HTTP_HOST']);
            }
        } else {
            setcookie('file_manager[directory]', $this->request->get['directory'], time() + 60 * 60 * 24 * 30, '/', $this->request->server['HTTP_HOST']);
            setcookie('file_manager[page]', isset($this->request->get['page']) ? $this->request->get['page'] : 1, time() + 60 * 60 * 24 * 30, '/', $this->request->server['HTTP_HOST']);
        }

        // Find which protocol to use to pass the full image link back
        if ($this->request->server['HTTPS']) {
            $server = HTTPS_CATALOG;
        } else {
            $server = HTTP_CATALOG;
        }

        if (isset($this->request->get['filter_name'])) {
                $filter_name = rtrim(str_replace(array('*', '/', '\\'), '', $this->request->get['filter_name']), '/');
        } else {
            $filter_name = '';
        }

        // Make sure we have the correct directory
        if (isset($this->request->get['directory'])) {
            $directory = rtrim(DIR_IMAGE . 'catalog/' . str_replace('*', '', $this->request->get['directory']), '/');
        } else {
            $directory = DIR_IMAGE . 'catalog';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['target'])) {
            $url .= '&target=' . $this->request->get['target'];
        }

        if (isset($this->request->get['cke'])) {
            $url .= '&cke=' . $this->request->get['cke'];
        }

        if (isset($this->request->get['thumb'])) {
            $url .= '&thumb=' . $this->request->get['thumb'];
        }

        $data['breadcrumbs'] = array();

        $breadcrumbs_level = explode('/',str_replace(DIR_IMAGE, '', $directory));

        $directory_path = '';

        foreach ($breadcrumbs_level as $level) {
            if ($level == 'catalog') {
                $data['breadcrumbs'][] = array(
                    'text' => $level,
                    'href' => 'index.php?route=extension/cke_filemanager&parent=parent&'.$this->token.$url
                );
            } else {
                $directory_path .= $level.'/';

                $data['breadcrumbs'][] = array(
                    'text' => $level,
                    'href' => 'index.php?route=extension/cke_filemanager&'.$this->token.'&directory='.urlencode(trim($directory_path,'/')).$url
                );
            }
        }

        $directories = array();
        $files       = array();

        $data['images'] = array();

        $this->load->model('tool/image');

        if (substr(str_replace('\\', '/', realpath($directory) . '/' . $filter_name), 0, strlen(DIR_IMAGE . 'catalog')) == str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
            // Get directories
            $directories = glob($directory . '/' . $filter_name . '*', GLOB_ONLYDIR);

            if (!$directories) {
                $directories = array();
            }

            if ($this->config->get('module_ckeditor_allowed_files') && isset($this->request->get['cke']) && ($this->request->get['cke'] == 'info:txtUrl' || $this->request->get['cke'] == 'info:url')) {
                $allowed = array();

                $extension_allowed = preg_replace('~\r?\n~', ",", $this->config->get('config_file_ext_allowed'));

                $files = glob($directory . '/' . $filter_name . '*.{'.$extension_allowed.'}', GLOB_BRACE);
            } else {
                // Get files
                $files = glob($directory . '/' . $filter_name . '*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);

            }

            $files = array_unique($files);

            if (!$files) {
                $files = array();
            }
        }

        // Используем сортировку в порядке, привычном человеку
        natsort($files);

        // Merge directories and files
        $images = array_merge($directories, $files);

        // Get total number of files and directories
        $image_total = count($images);

        // Split the array based on current page number and max number of items per page of 10
        $images = array_splice($images, ($page - 1) * 16, 16);

        foreach ($images as $image) {
            $name = str_split(basename($image), 14);

            if (is_dir($image)) {
                $url = '';

                if (isset($this->request->get['target'])) {
                    $url .= '&target=' . $this->request->get['target'];
                }

                if (isset($this->request->get['cke'])) {
                    $url .= '&cke=' . $this->request->get['cke'];
                }

                if (isset($this->request->get['thumb'])) {
                    $url .= '&thumb=' . $this->request->get['thumb'];
                }

                $data['images'][] = array(
                    'thumb' => '',
                    'name'  => implode(' ', $name),
                    'type'  => 'directory',
                    'path'  => utf8_substr($image, utf8_strlen(DIR_IMAGE)),
                    'href'  => $this->url->link('extension/cke_filemanager', $this->token . '&directory=' . urlencode(utf8_substr($image, utf8_strlen(DIR_IMAGE . 'catalog/'))) . $url, true)
                );

            } elseif (is_file($image) && !in_array(substr(strrchr($image, '.'), 1), array('jpg','jpeg','png','gif','svg','JPG','JPEG','PNG','GIF','SVG'))) {
                $data['images'][] = array(
                    'thumb' => 'view/image/file_icon.png',
                    'name'  => implode(' ', $name),
                    'type'  => 'image',
                    'path'  => utf8_substr($image, utf8_strlen(DIR_IMAGE)),
                    'href'  => $server . 'image/' . utf8_substr($image, utf8_strlen(DIR_IMAGE))
                );

            } elseif (is_file($image)) {
                $data['images'][] = array(
                    'thumb' => $this->model_tool_image->resize(utf8_substr($image, utf8_strlen(DIR_IMAGE)), 100, 100),
                    'name'  => implode(' ', $name),
                    'type'  => 'image',
                    'path'  => utf8_substr($image, utf8_strlen(DIR_IMAGE)),
                    'href'  => $server . 'image/' . utf8_substr($image, utf8_strlen(DIR_IMAGE))
                );
            }
        }

        $data['token'] = $this->token;

        if (isset($this->request->get['directory'])) {
            $data['directory'] = urlencode($this->request->get['directory']);
        } else {
            $data['directory'] = '';
        }

        if (isset($this->request->get['filter_name'])) {
            $data['filter_name'] = $this->request->get['filter_name'];
        } else {
            $data['filter_name'] = '';
        }

        // Return the target ID for the file manager to set the value
        if (isset($this->request->get['target'])) {
            $data['target'] = $this->request->get['target'];
        } else {
            $data['target'] = '';
        }

        // CKEditor
        if (isset($this->request->get['cke'])) {
          $data['cke'] = $this->request->get['cke'];
        } else {
          $data['cke'] = '';
        }


        // Return the thumbnail for the file manager to show a thumbnail
        if (isset($this->request->get['thumb'])) {
            $data['thumb'] = $this->request->get['thumb'];
        } else {
            $data['thumb'] = '';
        }

        // Parent
        $url = '';

        $url = '&parent=parent';

        if (isset($this->request->get['directory'])) {
            $pos = strrpos($this->request->get['directory'], '/');

            if ($pos) {
                $url .= '&directory=' . urlencode(substr($this->request->get['directory'], 0, $pos));
            }
        }

        if (isset($this->request->get['target'])) {
            $url .= '&target=' . $this->request->get['target'];
        }

        if (isset($this->request->get['cke'])) {
            $url .= '&cke=' . $this->request->get['cke'];
        }


        if (isset($this->request->get['thumb'])) {
            $url .= '&thumb=' . $this->request->get['thumb'];
        }

        $data['parent'] = $this->url->link('extension/cke_filemanager', $this->token . $url, true);

        // Refresh
        $url = '';

        if (isset($this->request->get['directory'])) {
            $url .= '&directory=' . urlencode($this->request->get['directory']);
        }

        if (isset($this->request->get['target'])) {
            $url .= '&target=' . $this->request->get['target'];
        }

        if (isset($this->request->get['cke'])) {
            $url .= '&cke=' . $this->request->get['cke'];
        }


        if (isset($this->request->get['thumb'])) {
            $url .= '&thumb=' . $this->request->get['thumb'];
        }

        $data['refresh'] = $this->url->link('extension/cke_filemanager', $this->token . $url, true);

        $url = '';

        if (isset($this->request->get['directory'])) {
            $url .= '&directory=' . urlencode(html_entity_decode($this->request->get['directory'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_name'])) {
            $url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['target'])) {
            $url .= '&target=' . $this->request->get['target'];
        }

        if (isset($this->request->get['cke'])) {
            $url .= '&cke=' . $this->request->get['cke'];
        }


        if (isset($this->request->get['thumb'])) {
            $url .= '&thumb=' . $this->request->get['thumb'];
        }

        $pagination        = new Pagination();
        $pagination->total = $image_total;
        $pagination->page  = $page;
        $pagination->limit = 16;
        $pagination->url   = $this->url->link('extension/cke_filemanager', $this->token . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        if (version_compare(VERSION, '3', '>=')) {
          $this->config->set('template_engine', 'template');
          $this->response->setOutput($this->load->view('extension/cke_filemanager', $data));
        } else {
          $this->response->setOutput($this->load->view('extension/cke_filemanager.tpl', $data));
        }
    }

    public function upload() {
        $this->load->language('extension/cke_filemanager');

        $json = array();

        // Check user has permission
        if (!$this->user->hasPermission('modify', 'extension/cke_filemanager')) {
            $json['error'] = $this->language->get('error_permission');
        }

        // Make sure we have the correct directory
        if (isset($this->request->get['directory'])) {
            $directory = rtrim(DIR_IMAGE . 'catalog/' . $this->request->get['directory'], '/');
        } else {
            $directory = DIR_IMAGE . 'catalog';
        }

        // Check its a directory
        if (!is_dir($directory) || substr(str_replace('\\', '/', realpath($directory)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
            $json['error'] = $this->language->get('error_directory');
        }

        if (!$json) {
            // Check if multiple files are uploaded or just one
            $files = array();

            if (!empty($this->request->files['file']['name']) && is_array($this->request->files['file']['name'])) {
                foreach (array_keys($this->request->files['file']['name']) as $key) {
                    $files[] = array(
                        'name'     => $this->request->files['file']['name'][$key],
                        'type'     => $this->request->files['file']['type'][$key],
                        'tmp_name' => $this->request->files['file']['tmp_name'][$key],
                        'error'    => $this->request->files['file']['error'][$key],
                        'size'     => $this->request->files['file']['size'][$key]
                    );
                }
            }

            foreach ($files as $file) {
                if (is_file($file['tmp_name'])) {
                    // Sanitize the filename

                    $filename = basename($this->wm_translit(html_entity_decode($file['name'], ENT_QUOTES, 'UTF-8')));


                    // Validate the filename length
                    if ((utf8_strlen($filename) < 3) || (utf8_strlen($filename) > 255)) {
                        $json['error'] = $this->language->get('error_filename');
                    }

                    // Allowed file extension types
                    $allowed = array(
                        'jpg',
                        'jpeg',
                        'gif',
                        'png'
                    );


                    if ($this->config->get('module_ckeditor_allowed_files')) {
                        // Allowed file extension types
                        $allowed = array();

                        $extension_allowed = preg_replace('~\r?\n~', "\n", $this->config->get('config_file_ext_allowed'));

                        $filetypes = explode("\n", $extension_allowed);

                        foreach ($filetypes as $filetype) {
                            $allowed[] = trim($filetype);
                        }
                    }

                    if (!in_array(utf8_strtolower(utf8_substr(strrchr($filename, '.'), 1)), $allowed)) {
                        $json['error'] = $this->language->get('error_filetype');
                    }

                    // Allowed file mime types
                    $allowed = array(
                        'image/jpeg',
                        'image/pjpeg',
                        'image/png',
                        'image/x-png',
                        'image/gif'
                    );


                    if ($this->config->get('module_ckeditor_allowed_files')) {
                        // Allowed file mime types
                        $allowed = array();

                        $mime_allowed = preg_replace('~\r?\n~', "\n", $this->config->get('config_file_mime_allowed'));

                        $filetypes = explode("\n", $mime_allowed);

                        foreach ($filetypes as $filetype) {
                            $allowed[] = trim($filetype);
                        }
                    }

                    if (!in_array($file['type'], $allowed)) {
                        $json['error'] = $this->language->get('error_filetype');
                    }

                    // Return any upload error
                    if ($file['error'] != UPLOAD_ERR_OK) {
                        $json['error'] = $this->language->get('error_upload_' . $file['error']);
                    }
                } else {
                    $json['error'] = $this->language->get('error_upload');
                }

                if (!$json) {
                    move_uploaded_file($file['tmp_name'], $directory . '/' . $filename);
                }
            }
        }

        if (!$json) {
            $json['success'] = $this->language->get('text_uploaded');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function folder() {
        $this->load->language('extension/cke_filemanager');

        $json = array();

        // Check user has permission
        if (!$this->user->hasPermission('modify', 'extension/cke_filemanager')) {
            $json['error'] = $this->language->get('error_permission');
        }

        // Make sure we have the correct directory
        if (isset($this->request->get['directory'])) {
            $directory = rtrim(DIR_IMAGE . 'catalog/' . $this->request->get['directory'], '/');
        } else {
            $directory = DIR_IMAGE . 'catalog';
        }

        // Check its a directory
        if (!is_dir($directory) || substr(str_replace('\\', '/', realpath($directory)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
            $json['error'] = $this->language->get('error_directory');
        }

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {

            //Translit Folder Name
            $this->request->post['folder'] = $this->wm_translit($this->request->post['folder']);

            // Sanitize the folder name
            $folder = basename(html_entity_decode($this->request->post['folder'], ENT_QUOTES, 'UTF-8'));

            // Validate the filename length
            if ((utf8_strlen($folder) < 3) || (utf8_strlen($folder) > 128)) {
                $json['error'] = $this->language->get('error_folder');
            }

            // Check if directory already exists or not
            if (is_dir($directory . '/' . $folder)) {
                $json['error'] = $this->language->get('error_exists');
            }
        }

        if (!isset($json['error'])) {
            mkdir($directory . '/' . $folder, 0777);
            chmod($directory . '/' . $folder, 0777);

            @touch($directory . '/' . $folder . '/' . 'index.html');

            $json['success'] = $this->language->get('text_directory');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete() {
        $this->load->language('extension/cke_filemanager');

        $json = array();

        // Check user has permission
        if (!$this->user->hasPermission('modify', 'extension/cke_filemanager')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (isset($this->request->post['path'])) {
            $paths = $this->request->post['path'];
        } else {
            $paths = array();
        }

        // Loop through each path to run validations
        foreach ($paths as $path) {
            // Check path exsists
            if ($path == DIR_IMAGE . 'catalog' || substr(str_replace('\\', '/', realpath(DIR_IMAGE . $path)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
                $json['error'] = $this->language->get('error_delete');

                break;
            }
        }

        if (!$json) {
            // Loop through each path
            foreach ($paths as $path) {
                $path = rtrim(DIR_IMAGE . $path, '/');

                // If path is just a file delete it
                if (is_file($path)) {
                    unlink($path);

                // If path is a directory beging deleting each file and sub folder
                } elseif (is_dir($path)) {
                    $files = array();

                    // Make path into an array
                    $path = array($path);

                    // While the path array is still populated keep looping through
                    while (count($path) != 0) {
                        $next = array_shift($path);

                        foreach (glob($next) as $file) {
                            // If directory add to path array
                            if (is_dir($file)) {
                                $path[] = $file . '/*';
                            }

                            // Add the file to the files to be deleted array
                            $files[] = $file;
                        }
                    }

                    // Reverse sort the file array
                    rsort($files);

                    foreach ($files as $file) {
                        // If file just delete
                        if (is_file($file)) {
                            unlink($file);

                        // If directory use the remove directory function
                        } elseif (is_dir($file)) {
                            rmdir($file);
                        }
                    }
                }
            }

            $json['success'] = $this->language->get('text_delete');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function autocomplete() {
        $json = array();

        if (isset($this->request->get['filter_name'])) {
          $this->load->model('catalog/product');
          $this->load->model('tool/image');

          if (isset($this->request->get['filter_name'])) {
              $filter_name = $this->request->get['filter_name'];
          } else {
              $filter_name = '';
          }

          $data = array(
            'filter_name'  => $filter_name,
            'start'        => 0,
            'limit'        => 15
          );

          $results = $this->model_catalog_product->getProducts($data);

          foreach ($results as $result) {
            if (!empty($result['image'])) {
              $path = $this->model_tool_image->resize($result['image'],100, 100);

              if ($path === FALSE) {
                $image = $this->getPreloadImg();
              } else {
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $image = 'data:image/' . $type . ';base64,' . base64_encode($data);
              }
            } else {
                $image = $this->getPreloadImg();
            }

            if ($this->config->get('config_review_status')) {
                $rating = $result['rating'];
            } else {
                $rating = false;
            }

            if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
              if ($result['price'] > 0 ) {
                  $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')));
              } else {
                  $price = '';
              }
            } else {
                $price = false;
            }


            if ((float)$result['special']) {
                $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')));
            } else {
                $special = false;
            }

            $json[] = array(
              'product_id' => $result['product_id'],
              'thumb'      => $image,
              'name'       => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
              'model'      => strip_tags(html_entity_decode($result['model'], ENT_QUOTES, 'UTF-8')),
              'desc'       => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, 45) . '..',
              'price'      => $price,
              'special'    => $special,
              'href'       => html_entity_decode($this->url->link('product/product', 'product_id=' . $result['product_id']), ENT_QUOTES, 'UTF-8'),
            );
          }
        }

        $this->response->setOutput(json_encode($json));
      }

    protected function wm_translit($text) {
        $rus = array("а","А","б","Б","в","В","г","Г","д","Д","е","Е","ё","Ё","є","Є","ж", "Ж",  "з","З","и","И","і","І","ї","Ї","й","Й","к","К","л","Л","м","М","н","Н","о","О","п","П","р","Р", "с","С","т","Т","у","У","ф","Ф","х","Х","ц","Ц","ч", "Ч", "ш", "Ш", "щ",  "Щ", "ъ","Ъ", "ы","Ы","ь","Ь","э","Э","ю", "Ю", "я","Я",'/',' ');
        $eng = array("a","A","b","B","v","V","g","G","d","D","e","E","e","E","e","E", "zh","ZH","z","Z","i","I","i","I","yi","YI","j","J","k","K","l","L","m","M","n","N","o","O", "p","P","r","R","s","S","t","T","u","U","f","F","h","H","c","C","ch","CH", "sh","SH","sch","SCH","", "", "y","Y","","","e","E","ju","JU","ja","JA",'','');
        $text = strtolower(str_replace($rus,$eng,$text));
        $disallow_symbols = array(
          ' '  => '-',
          '\\' => '-',
          '/'  => '-',
           ':' => '-',
           '*' => '',
          '?'  => '',
          ','  => '',
          '"'  => '',
          '\'' => '',
          '<'  => '',
          '>'  => '',
          '|'  => ''
        );
        return trim(strip_tags(str_replace(array_keys($disallow_symbols), array_values($disallow_symbols), trim(html_entity_decode($text, ENT_QUOTES, 'UTF-8')))), '-');
    }   
}