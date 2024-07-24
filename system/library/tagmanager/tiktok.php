<?php
/* v:10.7 19-JAN-2024*/
$tmanalytics .= '!function (w, d, t) {
  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++
)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=i+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};';
$tmanalytics .= "ttq.load('" . $tagmanager['tiktok_code'] . "'); ttq.page(); }(window, document, 'ttq');" . "\n";
$ttq_id = [];
$ttq_id_status = false;

if (isset($tagmanager['external_id'])) {
    $ttq_id['external_id'] = $tagmanager['external_id'];
    $ttq_id_status = true;
}
if (isset($tagmanager['email'])) {
    $ttq_id['email'] = $tagmanager['em'];
    $ttq_id_status = true;
}
if (isset($tagmanager['phone'])) {
    $ttq_id['phone_number'] = $tagmanager['ph'];
    $ttq_id_status = true;
}

if ($ttq_id_status) {
	$tmanalytics .= "ttq.identify(" . json_encode($ttq_id) . ");";
}

$ttq_eventid =  $this->gtm->eventid();

if (isset($_data['tiktok'])) {
	switch ($page_type) {
				
		case "success":
		    $tmanalytics .= "ttq.track('CompletePayment'," .  json_encode($_data['tiktok']) . ",{'event_id': '" . $ttq_eventid . "'});". "\n";
		    break;
		
		case "product":
		    $tmanalytics .= "ttq.track('ViewContent'," .  json_encode($_data['tiktok']) . ",{'event_id': '" . $ttq_eventid . "'});". "\n";
		    break;
		
		case "listing":
		    if (isset($_data['tiktok']['query']) && !empty($_data['tiktok']['query'])) {
		        $tmanalytics .= "ttq.track('Search'," .  json_encode($_data['tiktok']) . ",{'event_id': '" . $ttq_eventid . "'});". "\n";
		    } else {
		        $tmanalytics .= "ttq.track('ViewContent'," .  json_encode($_data['tiktok']) . ",{'event_id': '" . $ttq_eventid . "'});". "\n";
		    }
		    break;
		
		case "checkout":
		    $tmanalytics .= "ttq.track('InitiateCheckout'," .  json_encode($_data['tiktok']) . ",{'event_id': '" . $ttq_eventid . "'});". "\n";
		    break;
		
		case "cart":
		    $tmanalytics .= "ttq.track('ViewContent'," .  json_encode($_data['tiktok']) . ",{'event_id': '" . $ttq_eventid . "'});". "\n";
		    break;
		
		case "confirm":
		    $tmanalytics .= "ttq.track('CompletePayment'," .  json_encode($_data['tiktok']) . ",{'event_id': '" . $ttq_eventid . "'});". "\n";
	        break;
	}
}