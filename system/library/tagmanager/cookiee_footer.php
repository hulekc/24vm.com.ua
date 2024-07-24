<?php
/* v:10.7 19-JAN-2024*/

$ver = substr(VERSION,0,1);

if ($ver == '4') {
	$b_img = HTTP_SERVER . 'extension/tagmanager/catalog/view/javascript/tagmanager/cookie.png';
} else {
	$b_img = 'catalog/view/javascript/tagmanager/cookie.png';
}	

if (isset($tagmanager['cookie_badge']) && $tagmanager['cookie_badge']=='1') {
	$tmanalytics .= "<div onclick=\" $('body').gdprcookie(options, 'reinit');\" class=\"cookie_button\"><img src=\"" . $b_img . "\" alt=\"Cookies Settings\"></div>";
}
$tmanalytics .= '<script type="text/javascript" nitro-exclude="">';
$tmanalytics .= "window.onload = function() {
				 $('body').gdprcookie(options);
				 if ($.fn.gdprcookie.preference('analytics') === true) { 
					gtag('consent', 'update', {'analytics_storage': 'granted'});
					var cc_analytics=1;";
if ($tagmanager['pixel'] && isset($tagmanager['pixelcode']) && !empty($tagmanager['pixelcode'])) {
$tmanalytics .= "whenAvailable('fbq', function(t) {fbq('consent', 'grant');});";			
}						
$tmanalytics .= "	}
				if ($.fn.gdprcookie.preference('marketing') === true) {
					gtag('consent', 'update', {'ad_storage': 'granted'});var cc_marketing=1;
				} 
				$('#cookieconsent').on('click', function(){
					$('body').gdprcookie(options, 'reinit');
				});
				console.log('cookie fired');}";
$tmanalytics .= '</script>';
?>