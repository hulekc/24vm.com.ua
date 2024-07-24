<?php
/* v:10.7 19-JAN-2024*/
$tmanalytics .= "<script type=\"text/javascript\" nitro-exclude=\"\">
defer(function () {
    if ($.getcookiepreference('marketing') === true) {
          $.getScript( \"https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=" . $tagmanager['klaviyo_code'] . "\", function( data, textStatus, jqxhr ) {
			console.log('klaviyo loaded');
		});
    }
 });
" . "\n" . "</script>";
?>