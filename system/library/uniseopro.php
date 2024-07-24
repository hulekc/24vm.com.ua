<?php
class UniSeoPro {
	private $cache_data = null;
	private $ajax = false;
	private $use_cache = true;
	private $language_code = array();
	private $language_id = array();

	private $use_lang_prefix = 1;
	private $lang_prefix = array(
		1=>'',
		2=>'en'
	);
	
	private $config;
	private $request;
	private $registry;
	private $response;
	private $url;
	private $session;
	private $db;
	
	

	public function __construct($registry) {
		$this->registry = $registry;
		$this->config   = $registry->get('config');
		$this->request  = $registry->get('request');
		$this->session  = $registry->get('session');
		$this->response = $registry->get('response');
		$this->url      = $registry->get('url');
		$this->db       = $registry->get('db');
		$this->cache    = $registry->get('cache');

		$this->checkGetParam();
		
		if ($this->config->get('config_seo_url') && $this->config->get('module_uni_seo_pro_status')) {


			$this->use_lang_prefix = $this->config->get('module_uni_seo_pro_use_lang_prefix');
			
			$this->ajax = (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
			$query = $this->db->query("SELECT language_id, code FROM " . DB_PREFIX . "language WHERE status = '1'");
			$uni_seo_pro_lang_prefix = is_array($this->config->get('module_uni_seo_pro_lang_prefix'))?$this->config->get('module_uni_seo_pro_lang_prefix'):array();
			foreach ($query->rows as $result) {
				$this->language_id[$result['code']] = $result['language_id']?$result['language_id']:$this->config->get('config_language_id');
				$this->language_code[$result['language_id']] = $result['code'];
				if ($this->use_lang_prefix) {
					if (isset($uni_seo_pro_lang_prefix[$result['language_id']])) {
						$this->lang_prefix[$result['language_id']] = $uni_seo_pro_lang_prefix[$result['language_id']];
					} else {
						$this->lang_prefix[$result['language_id']] = $result['code'];
					}
				}
			}
			if ($this->use_cache) {
				$cache_key = 'seo_pro.'. $this->config->get('config_store_id');
				$this->cache_data = $this->cache->get($cache_key);
				if (!$this->cache_data) {
					$sql_language = '';
					if ($this->use_lang_prefix) {
						$sql_language = ' AND language_id = ' . (int)$this->config->get('module_uni_seo_pro_use_lang_prefix_main');
					}
					$query = $this->db->query("SELECT `keyword`, `query`, `seopath`, `language_id` FROM " . DB_PREFIX . "seo_url WHERE store_id = '" . $this->config->get('config_store_id') . "'" . $sql_language);
					$this->cache_data = array();
					foreach ($query->rows as $row) {

						$language_id = $row['language_id']?$row['language_id']:$this->config->get('config_language_id');
	
						if (isset($this->cache_data['keywords'][$language_id][$row['keyword']])){
							continue;
						}

						$this->cache_data['keywords'][$row['keyword']] = array(
							'language_id' => $language_id,
							'query'       => $row['query'],
						);


						$this->cache_data['queries'][$row['query']][$language_id] = $row['keyword'];

						if ($row['seopath'])
							$this->cache_data['seopath'][$row['query']] = $row['seopath'];
					}
					$this->cache->set($cache_key, $this->cache_data);
				}
			}
		}
	}

	public function prepareRoute() {

		if (!$this->config->get('config_seo_url') && !$this->config->get('module_uni_seo_pro_status')) return;

		$prefix = '';
		
		$old_get = $this->request->get;
		if (!isset($this->request->get['_route_'])) {
			$this->validate();
		} else {
		
			$uni_seo_pro_postfix = trim($this->config->get('module_uni_seo_pro_postfix'));
			if ($uni_seo_pro_postfix) {
				$this->request->get['_route_'] = str_replace('.' . $uni_seo_pro_postfix , '', $this->request->get['_route_']);
			}
			$route_ = $route = $this->request->get['_route_'];

			$parts = explode('/', trim($route, '/'));



			$rows = array();

			if ($this->use_lang_prefix && in_array($parts[0],$this->lang_prefix)) {
				$this->lang_prefix_detect = array_shift($parts);
			} else {
				$this->lang_prefix_detect = false;
			}

			if ($this->config->get('module_uni_seo_pro_prefix_product')) {
				$uni_seo_pro_prefix_product = trim($this->config->get('module_uni_seo_pro_prefix_product'));
				if (isset($parts[0]) && $parts[0] == $uni_seo_pro_prefix_product) {
					array_shift($parts);
					$prefix = 'product/product';
				}
			}
//uni-blog			
			if ($this->config->get('module_uni_seo_pro_prefix_blogarticle')) {
				$uni_seo_pro_prefix_blogarticle = trim($this->config->get('module_uni_seo_pro_prefix_blogarticle'));
				if (isset($parts[0]) && $parts[0] == $uni_seo_pro_prefix_blogarticle) {
					array_shift($parts);
					$prefix = 'blog/article';
				}
			}
			
			if ($this->config->get('module_uni_seo_pro_prefix_blogcategory') && !$prefix) {
				$uni_seo_pro_prefix_blogcategory = trim($this->config->get('module_uni_seo_pro_prefix_blogcategory'));
				if (isset($parts[0]) && $parts[0] == $uni_seo_pro_prefix_blogcategory) {
					array_shift($parts);
					$prefix = 'blog/category';
				}
			}		
//uni-blog end	
			if ($this->config->get('module_uni_seo_pro_prefix_category') && !$prefix) {
				$uni_seo_pro_prefix_category = trim($this->config->get('module_uni_seo_pro_prefix_category'));
				if (isset($parts[0]) && $parts[0] == $uni_seo_pro_prefix_category) {
					array_shift($parts);
					$prefix = 'product/category';
				}
			}

			if ($this->config->get('module_uni_seo_pro_prefix_brand') && !$prefix) {
				$uni_seo_pro_prefix_brand = trim($this->config->get('module_uni_seo_pro_prefix_brand'));
				if (isset($parts[0]) && $parts[0] == $uni_seo_pro_prefix_brand) {
					array_shift($parts);
					$prefix = 'product/manufacturer/info';
				}
			}

			if ($this->config->get('module_uni_seo_pro_seo_page')) {
				$may_be_page = end($parts);
				if (strpos($may_be_page,'page-') !==false) {
					$pages = explode('-',$may_be_page);
					if (!empty($pages[1])) {
						if ((int)$pages[1] > 0) {
							$this->request->get['page'] = (int)$pages[1];
							array_pop($parts);
						}
					}
				}
			}

			foreach ($parts as $keyword) {
				$result = $this->getQuery($keyword);
				
				if ($result && strpos($result['query']['query'],'=') !==false) {
					$rows[] = array(
						'keyword' => $keyword,
						'query' => $result['query']
					);
				}
			}



			if (count($rows) == sizeof($parts)) {

				$language_id = $this->language_id[$this->session->data['language']];
				$lang_code = $old_lang_code = $this->session->data['language'];
				
				$queries = array();
				$i=0;
				foreach ($rows as $row) {
           if (isset($row['query']) && $row['query']) {
					if ($i == 0) {
						$lang_code = $this->language_code[$row['query']['language_id']];
						$language_id = $this->language_id[$lang_code];
					}
					if ($lang_code == $this->language_code[$row['query']['language_id']]) {
						$queries[$row['keyword']] = $row['query']['query'];
					} else {
						$this->request->get['route'] = 'error/not_found';
						break;
					};
					$i++;
}
				}

				if ($lang_code != $old_lang_code || $this->lang_prefix_detect) {
//					if ($this->lang_prefix_detect) {
						$language_id = array_search($this->lang_prefix_detect, $this->lang_prefix);
						$lang_code = $this->language_code[$language_id];
//					}
					
					$this->initLanguage($lang_code,  $language_id);
				}

				reset($parts);

				foreach ($parts as $part) {
					if(!isset($queries[$part])) return $parts;
					$url = explode('=', $queries[$part], 2);
					if ($url[0] == 'category_id') {
						if (!isset($this->request->get['path'])) {
							$this->request->get['path'] = $url[1];
						} else {
							$this->request->get['path'] .= '_' . $url[1];
						}
//uni-blog						
					} elseif ($url[0] == 'blog_category_id') {
						if (!isset($this->request->get['blogpath'])) {
							$this->request->get['blogpath'] = $url[1];
						} else {
							$this->request->get['blogpath'] .= '_' . $url[1];
						}	
//uni-blog end						
					} elseif (count($url) > 1) {
						$this->request->get[$url[0]] = $url[1];
					}
				}

				if (isset($this->request->get['product_id'])) {
					$this->request->get['route'] = 'product/product';
					if (!isset($this->request->get['path'])) {
						$path = $this->getPathByProduct($this->request->get['product_id']);
						if ($path) $this->request->get['path'] = $path;
					}
//uni-blog				
				} elseif(isset($this->request->get['article_id'])) {
					$this->request->get['route'] = 'blog/article';
					if (!isset($this->request->get['blogpath'])) {
						$blogpath = $this->getPathByArticle($this->request->get['article_id']);
						if ($blogpath) $this->request->get['blogpath'] = $blogpath;
					}	
				} elseif (isset($this->request->get['blogpath'])) {
					if ($this->config->get('module_uni_seo_pro_short_url')) {
						$blog_category = explode('_', $this->request->get['blogpath']);
						$blog_category = end($blog_category);
						$this->request->get['blogpath'] = $this->getPathByBlogCategory($blog_category);
					}
					$this->request->get['route'] = 'blog/category';	
//uni-blog end					
				} elseif (isset($this->request->get['path'])) {
					if ($this->config->get('module_uni_seo_pro_short_url')) {
						$category = explode('_', $this->request->get['path']);
						$category = end($category);
						$this->request->get['path'] = $this->getPathByCategory($category);
					}
					$this->request->get['route'] = 'product/category';
				} elseif (isset($this->request->get['manufacturer_id'])) {
					$this->request->get['route'] = 'product/manufacturer/info';
				} elseif (isset($this->request->get['information_id'])) {
					$this->request->get['route'] = 'information/information';
				} else {
					if (isset($parts[0]) && isset($queries[$parts[0]]) && !strpos($queries[$parts[0]],'=')) {
						$this->request->get['route'] = $queries[$parts[0]];
					} else {
						if ($prefix) {
							$this->request->get['route'] = 'error/not_found';
						}
					}
				}
			}

			if (isset($this->request->get['route'])) {
				$this->validate();
				return array();
			}
			$this->request->get = $old_get;
			return $parts;
		}
	}

	public function rewrite(&$data) {
		if (!$this->config->get('config_seo_url') && !$this->config->get('module_uni_seo_pro_status')) return;
		$prefix = '';
		$seo_url = '';
		$is_product = false;
		$route = $data['route'];
		switch ($route) {
			case 'product/product':
				if (isset($data['product_id'])) {
					$is_product = true;
					$tmp = $data;
					$data = array();
					if ($this->config->get('module_uni_seo_pro_include_path')) {
						$data['path'] = $this->getPathByProduct($tmp['product_id']);
						if (!$data['path']) unset($data['path']);
					} else {
						unset ($data['path']);
					}
					$data['product_id'] = $tmp['product_id'];
					
                   if ($this->config->get('module_uni_seo_pro_allow_utm')) {
	                $seo_pro_utm = preg_replace('~\r?\n~', "\n", $this->config->get('module_uni_seo_pro_utm'));
					$uni_seo_pro_utm = explode("\n", $seo_pro_utm);

				 /*   $uni_seo_pro_utm = array(
						'tracking',
						// Compatibility with "OCJ Merchandising Reports" module.
						// Save and pass-thru module specific GET parameters.
						'uri', 'list_type',
						// Compatibility with Google Analytics
						'gclid', 'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content',
						'type', 'source', 'block', 'position', 'keyword',
						// Compatibility with Yandex Metrics, Yandex Market
						'yclid', 'ymclid', 'openstat', 'frommarket',
						'openstat_service', 'openstat_campaign', 'openstat_ad', 'openstat_source',
						// Compatibility with Themeforest Rgen templates (popup with product preview)
						'urltype'
						);	*/
					//var_dump( $uni_seo_pro_utm );
					foreach ($uni_seo_pro_utm as $utm) {
						if (isset($tmp[$utm])) {
							$data[$utm] = $tmp[$utm];
						}
					}
					}
					$prefix = trim($this->config->get('module_uni_seo_pro_prefix_product'));
				}
				break;
//uni-blog				
				case 'blog/article':
				if (isset($data['article_id'])) {
					$is_product = true;
					$tmp = $data;
					$data = array();
					if ($this->config->get('module_uni_seo_pro_include_path')) {
						$data['blogpath'] = $this->getPathByArticle($tmp['article_id']);
						if (!$data['blogpath']) unset($data['blogpath']);
					} else {
						unset ($data['blogpath']);
					}
					$data['article_id'] = $tmp['article_id'];
				if ($this->config->get('module_uni_seo_pro_allow_utm')) {
	                $seo_pro_utm = preg_replace('~\r?\n~', "\n", $this->config->get('module_uni_seo_pro_utm'));
					$uni_seo_pro_utm = explode("\n", $seo_pro_utm);
					foreach ($uni_seo_pro_utm as $utm) {
						if (isset($tmp[$utm])) {
							$data[$utm] = $tmp[$utm];
						}
					}
					}
					$prefix = trim($this->config->get('module_uni_seo_pro_prefix_blogarticle'));
				}
				break; 
//uni-blog end
			case 'product/manufacturer/info':
				$prefix = $this->config->get('module_uni_seo_pro_prefix_brand');
				break;

			case 'product/category':
				if (isset($data['path'])) {
					$category = explode('_', $data['path']);
					$category = end($category);
					$data['path'] = $this->getPathByCategory($category);
					
					if (!$data['path']) {unset($data['path']) ;return; }

					if ($this->config->get('module_uni_seo_pro_short_url')) {	
						$dpath = explode('_',$data['path']);
						$data['path'] = end($dpath);
					}
					$prefix = $this->config->get('module_uni_seo_pro_prefix_category');
				}
				break;
//uni-blog				
			case 'blog/category':
				if (isset($data['blogpath'])) {
					$blog_category = explode('_', $data['blogpath']);
					$blog_category = end($blog_category);
					$data['blogpath'] = $this->getPathByBlogCategory($blog_category);
					
					if (!$data['blogpath']) {unset($data['blogpath']) ;return; }

					if ($this->config->get('module_uni_seo_pro_short_url')) {	
						$dpath = explode('_',$data['blogpath']);
						$data['blogpath'] = end($dpath);
					}
					$prefix = $this->config->get('module_uni_seo_pro_prefix_blogcategory');
				}
				break;	
//uni-blog end
			default:
				break;
		}


		$queries = array();
if(!in_array($route, array('product/search'))) {
		foreach($data as $key => $value) {
			switch($key) {
				case 'product_id':
					if ($is_product) {
						$queries[] = $key . '=' . $value;
						unset($data[$key]);
						$postfix = 1;
					}
					break;
//uni-blog					
				case 'article_id':
					if ($is_product) {
						$queries[] = $key . '=' . $value;
						unset($data[$key]);
						$postfix = 1;
					}
					break;	
//uni-blog end					
				case 'information_id':
					if ($route == 'information/information') {
						$queries[] = $key . '=' . $value;
						unset($data[$key]);
						$postfix = 1;
					}
					break;
				case 'manufacturer_id':
				case 'category_id':
					$queries[] = $key . '=' . $value;
					unset($data[$key]);
					$postfix = 1;
				    break;
//uni-blog					
				case 'blog_category_id':
					$queries[] = $key . '=' . $value;
					unset($data[$key]);
					$postfix = 1;
					break;
				case 'blogpath':
					$blog_categories = explode('_', $value);
					foreach($blog_categories as $blog_category) {
						$queries[] = 'blog_category_id=' . $blog_category;
					}
				    unset($data[$key]);
				    break;	
//uni-blog end
				case 'path':
					$categories = explode('_', $value);
					foreach($categories as $category) {
						$queries[] = 'category_id=' . $category;
					}
					unset($data[$key]);
					break;

				default:
					break;
			}
		}
}
		if(empty($queries)) {
			$queries[] = $route;
		}

		$rows = array();

		foreach($queries as $query) {
			$result = $this->getKeyword($query);

			if ($result) {
				$rows[] = array('query' => $query, 'keyword' => $result['keyword']);
				unset($data['route']);
			}
		}

		if(count($rows) == count($queries)) {
			$aliases = array();
			foreach($rows as $row) {
				$aliases[$row['query']] = $row['keyword'];
			}
			
			foreach($queries as $query) {
				$seo_url .= '/' . rawurlencode($aliases[$query]);
			}
		}

		unset($data['_route_']);
		if ($seo_url == '') return $seo_url;

		$seo_url = trim($prefix, '/') . $seo_url;
		$seo_url = trim($seo_url, '/');

		if (isset($postfix)) {
			$uni_seo_pro_postfix = trim($this->config->get('module_uni_seo_pro_postfix'));
			if ($uni_seo_pro_postfix) {
				$seo_url .= '.' . $uni_seo_pro_postfix;
			} else {
				if 	($this->config->get('module_uni_seo_pro_postfix_slash_product')) {
					$seo_url .= '/';
				}
			}
		} else {
			if 	($this->config->get('module_uni_seo_pro_postfix_slash')) {
				$seo_url .= $seo_url?'/':'';
			}
		}
		
		return  '/' . self::getLangPrefix()  . $seo_url;
	}

	public function getLink($link) {
		$url_info = parse_url(str_replace('&amp;', '&', $link));
		$lang_prefix = trim(self::getLangPrefix(),'/');
		if ($lang_prefix) $lang_prefix = '/' . $lang_prefix;
		return 		$url_info['scheme'] . '://'
				. 	$url_info['host']
				. 	(isset($url_info['port']) ? ':' . $url_info['port'] : '')
				. 	$lang_prefix
				.	$url_info['path']
				.   (isset($url_info['query'])? '?' . $url_info['query'] : '');

	}
	
	private function getLangPrefix() {
		$lang_prefix = '';
		if ($this->use_lang_prefix) {
			$this->lang_prefix_detect = $this->lang_prefix[$this->config->get('config_language_id')];
			if ($this->lang_prefix_detect) {
				$lang_prefix = $this->lang_prefix_detect . '/';
			}
		}
		return $lang_prefix;
	}


	public function getPage($url, &$data) {

		if ($this->config->get('module_uni_seo_pro_seo_page')) {
			if (isset($data['page'])) {
				if ($data['page'] && $data['page'] != '{page}' && (int)$data['page'] != 1  ) {

					$url = rtrim($url,'/') . '/page-' . $data['page'];
				}
				unset($data['page']);
			}
		}
		return $url;
	}
	private function getPathByProduct($product_id) {
		$product_id = (int)$product_id;

		if ($product_id < 1) return false;
		
		$query_ = 'product_id=' . $product_id;

		if (isset($this->cache_data['seopath'][$query_]) && $this->cache_data['seopath'][$query_])
			return $this->cache_data['seopath'][$query_];

		$query = $this->db->query("	SELECT category_id FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "' ORDER BY main_category DESC LIMIT 1");
		if ($query->num_rows) {
			$path_product_id = $this->getPathByCategory($query->row['category_id']);
		} else {
			return false;
		}

		if ($path_product_id) {
			$query = $this->db->query("UPDATE " . DB_PREFIX . "seo_url SET seopath = '" . $this->db->escape($path_product_id) . "'	WHERE query = 'product_id=" .(int)$product_id . "'");
		}

		$this->cache_data['seopath'][$query_] = $path_product_id;

		return $path_product_id;
	}
//uni-blog
   private function getPathByArticle($article_id) {
		$article_id = (int)$article_id;
		if ($article_id < 1) return false;
		$query_ = 'article_id=' . $article_id;

		if (isset($this->cache_data['seopath'][$query_]) && $this->cache_data['seopath'][$query_]) 
			return $this->cache_data['seopath'][$query_];

		$query = $this->db->query("	SELECT blog_category_id FROM " . DB_PREFIX . "uni_article_to_blog_category WHERE article_id = '" . (int)$article_id . "' ORDER BY main_blog_category DESC LIMIT 1");
		if ($query->num_rows) {
			$path_article_id = $this->getPathByBlogCategory($query->row['blog_category_id']);
		} else {
			return false;
		}

		if ($path_article_id) {
			$query = $this->db->query("UPDATE " . DB_PREFIX . "seo_url SET seopath = '" . $this->db->escape($path_article_id) . "'	WHERE query = 'article_id=" .(int)$article_id . "'");
		}
		$this->cache_data['seopath'][$query_] = $path_article_id;

		return $path_article_id;
	}
//uni-blog end
	private function getPathByCategory($category_id) {
		$category_id = (int)$category_id;

		if ($category_id < 1) return false;

		$query_ = 'category_id=' . $category_id;
		if (isset($this->cache_data['seopath'][$query_]) && $this->cache_data['seopath'][$query_])
			return $this->cache_data['seopath'][$query_];
		$sql = "SELECT GROUP_CONCAT(c1.category_id ORDER BY level SEPARATOR '_') path
		FROM " . DB_PREFIX . "category_path cp
		LEFT JOIN " . DB_PREFIX . "category c1 ON (cp.path_id = c1.category_id)
		WHERE cp.category_id = " . (int)$category_id . "
		GROUP BY cp.category_id";
		$query = $this->db->query($sql);

		$path_category_id = (isset($query->row['path']) && $query->row['path']) ? $query->row['path'] : false;
		if ($path_category_id) {
			$query = $this->db->query("
			UPDATE " . DB_PREFIX . "seo_url
			SET seopath = '" . $this->db->escape($path_category_id) . "'
			WHERE query = 'category_id=" . (int)$category_id . "'");
		}
		$this->cache_data['seopath'][$query_] = $path_category_id;
		
		return $path_category_id;
	}
//uni-blog
   private function getPathByBlogCategory($blog_category_id) {
		$blog_category_id = (int)$blog_category_id;
		if ($blog_category_id < 1) return false;
		$query_ = 'blog_category_id=' . $blog_category_id;
		if (isset($this->cache_data['seopath'][$query_]) && $this->cache_data['seopath'][$query_]) 
			return $this->cache_data['seopath'][$query_];
		$sql = "SELECT GROUP_CONCAT(c1.blog_category_id ORDER BY level SEPARATOR '_') blogpath 
		FROM " . DB_PREFIX . "uni_blog_category_path cp 
		LEFT JOIN " . DB_PREFIX . "uni_blog_category c1 ON (cp.path_id = c1.blog_category_id) 
		WHERE cp.blog_category_id = " . (int)$blog_category_id . " 
		GROUP BY cp.blog_category_id";			
		$query = $this->db->query($sql);

		$path_blog_category_id = (isset($query->row['blogpath']) && $query->row['blogpath']) ? $query->row['blogpath'] : false;
		if ($path_blog_category_id) {
			$query = $this->db->query("
			UPDATE " . DB_PREFIX . "seo_url 
			SET seopath = '" . $this->db->escape($path_blog_category_id) . "' 
			WHERE query = 'blog_category_id=" . (int)$blog_category_id . "'");
		}
		$this->cache_data['seopath'][$query_] = $path_blog_category_id;
		
		return $path_blog_category_id;
	}
//uni-blog end
	public function validate() {

		if ($this->ajax) {
			return;
		}
		if (php_sapi_name() == 'cli') {
			return;
		}

		if (isset($this->request->get['route']) && $this->request->get['route'] == 'error/not_found') {
			return;
		}

		if (ltrim($this->request->server['REQUEST_URI'], '/') == 'sitemap.xml') {
			$this->request->get['route'] = 'extension/feed/google_sitemap_fast';
			return;
		}

		if(empty($this->request->get['route'])) {
			$this->request->get['route'] = 'common/home';
		}

		if ($this->request->get['route'] == 'product/search' && isset($this->request->get['search'])) {
			return;
		}

		if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
			$config_ssl = substr($this->config->get('config_ssl'), 0, $this->strpos_offset('/', $this->config->get('config_ssl'), 3) + 1);
			$url = str_replace('&amp;', '&', $config_ssl . ltrim($this->request->server['REQUEST_URI'], '/'));
			$seo = str_replace('&amp;', '&', $this->url->link($this->request->get['route'], $this->getQueryString(array('route','_route_')), true));
		} else {
			$config_url = substr($this->config->get('config_url'), 0, $this->strpos_offset('/', $this->config->get('config_url'), 3) + 1);
			$url = str_replace('&amp;', '&', $config_url . ltrim($this->request->server['REQUEST_URI'], '/'));
			$seo = str_replace('&amp;', '&', $this->url->link($this->request->get['route'], $this->getQueryString(array('route','_route_')), false));
		}

		if (rawurldecode($url) != rawurldecode($seo)) {
//		var_dump(rawurldecode($url), rawurldecode($seo));
//		exit;
		
			$this->response->redirect($seo,302);
		}
	}

	private function strpos_offset($needle, $haystack, $occurrence) {
		// explode the haystack
		$arr = explode($needle, $haystack);
		// check the needle is not out of bounds
		switch($occurrence) {
			case $occurrence == 0:
				return false;
			case $occurrence > max(array_keys($arr)):
				return false;
			default:
				return strlen(implode($needle, array_slice($arr, 0, $occurrence)));
		}
	}

	private function getQueryString($exclude = array()) {
		if (!is_array($exclude)) {
			$exclude = array();
			}
		return html_entity_decode(urldecode(http_build_query(array_diff_key($this->request->get, array_flip($exclude)))));
	}

	private function getQuery($keyword) {
		if ($this->use_cache) {
			if (isset($this->cache_data['keywords'][$keyword])) {
				return	array(
					'keyword' => $keyword,
					'query'   => $this->cache_data['keywords'][$keyword]
				);
			}
		} else {
			$sql = "SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($keyword) . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'";
			$result = $this->db->query($sql);
			if ($result->num_rows) {
				return	array(
					'keyword' => $keyword, 
					'query'   => array(
						'query'=>$result->row['query'],
						'language_id'=>$result->row['language_id']
					)
				);
			}
		}
		return false;
	}

	private function initLanguage($lang_code, $language_id) {
		$this->session->data['language'] = $lang_code;
		$this->config->set('config_language_id', $language_id);
	
		$language = new Language($lang_code);
		$language->load($lang_code);
		$this->registry->set('language', $language);
	}

	private function getKeyword($query) {
		if ($this->use_lang_prefix) {
			$language_id = $this->config->get('module_uni_seo_pro_use_lang_prefix_main');
		} else {
			$language_id = $this->language_id[$this->session->data['language']];
		}
		
		
		if (isset($this->cache_data['queries'][$query][$language_id])) {
			return array('query' => $query, 'keyword' => $this->cache_data['queries'][$query][$language_id]);
		} else {
			$sql = "SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = '" . $this->db->escape($query) . "'
			AND language_id = '" . (int)$language_id . "'
			AND store_id = '" . (int)$this->config->get('config_store_id') . "'";
			$result = $this->db->query($sql);
			if ($result->num_rows) {
				$res = array('query' => $query, 'keyword'=>$result->row['keyword']);
				$this->cache_data['queries'][$query][$language_id] = $result->row['keyword'];
				$this->cache_data['seopath'][$query] = $result->row['seopath'];
				return $res;
			}
		}
		return false;
	}
	private function checkGetParam() {
		$get_id = array(
			'product_id' => array(
				'type' => 'int',
				'check' => 0
			),
			'article_id' => array(
				'type' => 'int',
				'check' => 0
			),
			'manufacturer_id' => array(
				'type' => 'int',
				'check' => 0
			),
			'information_id' =>  array(
				'type' => 'int',
				'check' => 0
			),
			'limit' => array(
				'type' => 'int',
				'check' => 0
			),
			'page' => array(
				'type' => 'int',
				'check' => 0
			),
			'path' =>  array(
				'type' => 'path',
				'check' => 0
			),
			'blogpath' =>  array(
				'type' => 'blogpath',
				'check' => 0
			),
			
		);
		foreach ($this->request->get as $get_key => $value) {
			if (array_key_exists($get_key,$get_id)) {
				if ($get_id[$get_key]['type'] == 'int') {
					if ((int)$value > $get_id[$get_key]['check']) {
						$this->request->get[$get_key] = (int)$value;
					} else {
						unset($this->request->get[$get_key]);
					}
				} elseif ($get_id[$get_key]['type'] == 'path') {
					$pathes = explode('_',$value);
					$path = array();
					foreach ($pathes as $value)
						if ((int)$value > $get_id[$get_key]['check']) {
							$path[] = (int)$value;
					} else {
						unset($this->request->get[$get_key]);
						break;
					}
					$this->request->get[$get_key] = implode('_',$path);
//uni-blog					
				} elseif ($get_id[$get_key]['type'] == 'blogpath') {
					$pathes = explode('_',$value);
					$blogpath = array();
					foreach ($pathes as $value)
						if ((int)$value > $get_id[$get_key]['check']) {
							$blogpath[] = (int)$value;
					} else {
						unset($this->request->get[$get_key]);
						break;
					}
					$this->request->get[$get_key] = implode('_',$blogpath);	
//uni-blog end				
				}
			}
		}
	}

}