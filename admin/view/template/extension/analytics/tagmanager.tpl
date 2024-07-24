<?php echo $header; ?>
<?php echo $column_left; ?> 
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <?php if (isset($stores) && $stores) { ?>
        			<div class="stores" style="">
        				<?php echo $text_store; ?>
        				<select name="store_id" id="store_id" onchange="location='<?php echo str_replace("'", "\\'",$change_store); ?>'+'&store_id='+$(this).val()">
        					<?php foreach ($stores as $key => $value) { ?>
        						<option value="<?php echo $value['store_id'] ?>" <?php echo $store_id == $value['store_id'] ? 'selected="selected"' : '' ?>><?php echo $value['name'] ?></option>
        					<?php } ?>
        				</select>
        			</div>
        		<?php } ?>
                <button type="submit" form="form-tagmanager" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <button type="submit" name ="apply" value="1" form="form-tagmanager" data-toggle="tooltip" title="<?php echo $button_apply; ?>" class="btn btn-success"><i class="fa fa-check"></i></button>
                <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
            </div>
            <h1><img style="vertical-align:top;padding-right:4px;" src="view/javascript/tagmanager/img/icon.png"/><?php echo $heading_title; ?></h1>
            <ul class="breadcrumb">
                <?php foreach ($breadcrumbs as $breadcrumb) { ?>
                <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <?php if ($success) { ?>
        <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <?php if ($error_warning) { ?>
        <div class="alert alert-danger">
            <i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>

        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-tagmanager" class="form-horizontal">
		<div class="col-sm-12">
        	<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gtm-tab-container">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 gtm-tab-menu">
                      <div class="list-group">
                        <a href="#" class="list-group-item active text-center"><img src="<?php echo $image_url;?>settings2.png" alt="settings"/><br/>Settings</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>google-ga4.png" alt="Google GA4"/><br/>Google GA4</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>google-ads.png" alt="Google Ads"/><br/>Google Ads</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>facebook.png" alt="facebook"/><br/>Facebook</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>snapchat.png" alt="snapchat"/><br/>Snapchat</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>tiktok.png" alt="tiktok"/><br/>Tiktok</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>twitter.png" alt="twitter"/><br/>Twitter</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>pinterest.png" alt="pintrest"/><br/>Pinterest</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>skroutz.png" alt="skroutz"/><br/>Skroutz</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>luckyorange.png" alt="luckyorange"/><br/>Lucky Orange</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>glami.png" alt="glami"/><br/>Glami</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>klaviyo.png" alt="klaviyo"/><br/>Klaviyo</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>yandex.png" alt="yandex"/><br/>Yandex</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>bing.png" alt="bing"/><br/>Bing</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>matomo.png" alt="matomo"/><br/>Matomo</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>optimize.png" alt="optimize"/><br/>Google Optimize</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>remarketing.png" alt="reviews"/><br/>Google Review</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>admitad.png" alt="admitad"/><br/>AdmitAd</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>sendinblue.png" alt="sendinblue"/><br/>SendinBlue</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>linkwise.png" alt="linkwise"/><br/>Linkwise</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>2perfomant.png" alt="2perfomant"/><br/>2Performant</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>cj.png" alt="CJ Affiliate"/><br/>CJ Affiliate</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>da.png" alt="DA Affiliate"/><br/>Data Audience</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>clarity.png" alt="clarity"/><br/>Clarity</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>paypal.png" alt="paypal"/><br/>Paypal</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>hotjar.png" alt="hotjar"/><br/>Hotjar</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>chat.png" alt="chat"/><br/>Live Chats</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>cookies.png" alt="cookies"/><br/>Cookie Consent</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>orders.png" alt="orders"/><br/>Order Analytics</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>logs.png" alt="log"/><br/>Logs</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>settings.png" alt="settings"/><br/>Advance Settings</a>
                        <a href="#" class="list-group-item text-center"><img src="<?php echo $image_url;?>aits.png" alt="about"/><br/>About</a>
                      </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 gtm-tab">
                        <!-- Tab1 Settings -->
                        <div id="gtm-setrings" class="gtm-tab-content <?php if (!$show_order){ ?>active<?php }?>">
                            <h2>Settings</h2>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-status"><?php echo $entry_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch">
                                        <input type="checkbox" id="input-status" name="<?php echo $PREFIX;?>tagmanager_status" <?php if ($tagmanager_status) { echo 'checked'; }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                         	<div class="form-group">
                                <label class="col-sm-4 control-label" for="input-code"><?php echo $entry_primary; ?></label>
                                <div class="col-sm-8">
                                    <input type="text" id="input-code" name="code" placeholder="<?php echo $entry_primary; ?>" class="form-control" value="<?php echo $tagmanager['code'];?>" />
                                    <div class="form-text"><?php echo $help_container;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-pagecache"><?php echo $entry_pagecache; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="input-pagecache" name="pagecache" <?php if (isset($tagmanager['pagecache']) && $tagmanager['pagecache']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_pagecache;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-ajax"><?php echo $entry_ajax; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="input-ajax" name="ajax" <?php if (isset($tagmanager['ajax']) && $tagmanager['ajax']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_ajax;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-cache"><?php echo $entry_cache; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="input-cache" name="cache" <?php if ($tagmanager['cache']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_cache;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-userdata"><?php echo $entry_customer_data; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="input-userdata" name="customer_data" <?php if ($tagmanager['customer_data']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_customer_data;?></div>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_tax_override"><?php echo $entry_tax_override; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="tagmanager_tax_override" name="tax_override" <?php if ($tagmanager['tax_override']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_tax_override;?></div>
                                </div>
                            </div>
                            <div id="tax" style="display:<?php if (! $tagmanager['tax_override']) { echo 'none'; }?>">
								<div class="form-group">
									<label class="col-sm-4 control-label" for="input-tax_override_value"><?php echo $entry_tax_override_value;?></label>
									<div class="col-sm-8">
										<input type="text" id="input-tax_override_value" name="tax_override_value" placeholder="<?php echo $entry_tax_override_value;?>" class="form-control" value="<?php echo $tagmanager['tax_override_value'];?>"/>
										<div class="form-text"><?php echo $help_tax_override_value;?></div>
                                    </div>
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-debug"><?php echo $entry_debug; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="input-debug" name="debug" <?php if ($tagmanager['debug']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_debug;?></div>
                                </div>
                            </div>    
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-debugapi"><?php echo $entry_debug_api; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="input-debugapi" name="debug_api" <?php if ($tagmanager['debug_api']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_debug_api;?></div>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-customj"><?php echo $entry_customcode;?></label>
                                <div class="col-sm-8">
                                    <textarea id="input-customj" rows="10" cols="70%" style="width:100%" name="customcode"><?php if (!empty($tagmanager['customcode'])) { echo $tagmanager['customcode']; }?></textarea>
                                    <div class="form-text"><?php echo $help_customcode;?></div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab2 GA4-->
                        <div id="gtm-google-ga4" class="gtm-tab-content">
                            <h2>Google Analytics GA4</h2>
                            <div id="tm_GA4" class="form-group">
		    					<label class="col-sm-4 control-label" for="tagmanager_ga4_status"><?php echo $entry_ga4_status;?></label>
								<div class="col-sm-8">
									<label class="switch">
										<input type="checkbox" id="tagmanager_ga4_status" name="ga4_status" <?php if ($tagmanager['ga4_status']) { echo 'checked';} ?>>
										<span class="slider round"></span>
									</label>
								</div>
							</div>
							<div id="ga4" style="display:<?php if (!$tagmanager['ga4_status']) { echo 'none'; }?>">
								<div class="form-group">
									<label class="col-sm-4 control-label" for="input-mid"><?php echo $entry_ga4_mid;?></label>
									<div class="col-sm-8">
										<input type="text" id="input-mid" name="ga4_mid" placeholder="<?php echo $entry_ga4_mid;?>" class="form-control" value="<?php echo $tagmanager['ga4_mid'];?>"/>
									    <div class="form-text"><?php echo $help_ga4_id;?></div>
									</div>
								</div>	
								<div class="form-group">
									<label class="col-sm-4 control-label" for="input-api"><?php echo $entry_ga4_api;?></label>
									<div class="col-sm-8">
										<input type="text" id="input-api" name="ga4_api" placeholder="<?php echo $entry_ga4_api;?>" class="form-control" value="<?php echo $tagmanager['ga4_api'];?>"/>
									    <div class="form-text"><?php echo $help_ga4_api;?></div>
									</div>
								</div>
							</div>
                        </div>
                        <!-- Tab3 Ads-->
                        <div id="gtm-google-ads" class="gtm-tab-content">
                            <h2>Google Ads</h2>
                            <div id="tm_ADWORDS" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_adword"><?php echo $entry_adword; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_adword" type="checkbox" name="adword" <?php if ($tagmanager['adword']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_aw;?></div>
                                </div>
                            </div>
                            <div id="conversion" style="display:<?php if (!$tagmanager['adword']) { echo 'none'; }?>">
                                <div id="conversion_id" class="form-group">
                                    <label class="col-sm-4 control-label" for="input-cid"><?php echo $entry_conversion_id; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-cid" name="conversion_id" placeholder="<?php echo $entry_conversion_id; ?>" class="form-control" value="<?php echo $tagmanager['conversion_id'];?>" />
                                        <div class="form-text"><?php echo $help_conversion_id;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-clabel"><?php echo $entry_conversion_label; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-clabel" name="conversion_label" placeholder="<?php echo $entry_conversion_label; ?>" class="form-control" value="<?php echo $tagmanager['conversion_label'];?>" />
                                        <div class="form-text"><?php echo $help_conversion_label;?></div>
                                    </div>
                                </div>
                                <div id="tm_ADWORDADD_EC" class="form-group">
        					    	<label class="col-sm-4 control-label" for="tagmanager_aw_ec"><?php echo $entry_adword_ec;?></label>
        							<div class="col-sm-8">
        								<label class="switch">
        									<input type="checkbox" id="tagmanager_aw_ec" name="adword_ec" <?php if ($tagmanager['adword_ec']) { echo 'checked'; }?>>
        									<span class="slider round"></span>
        								</label>
        								<div class="form-text"><?php echo $help_aw_ec;?></div>
        							</div>
        						</div>
        						<div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-aw-shipping"><?php echo $entry_shipping_exclude; ?></label>
                                    <div class="col-sm-8">
                                        <label class="switch"><input type="checkbox" id="input-aw-shipping" name="aw_shipping_exclude" <?php if (isset($tagmanager['aw_shipping_exclude']) && $tagmanager['aw_shipping_exclude']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                        <div class="form-text"><?php echo $help_shipping_exclude;?></div>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-aw-tax"><?php echo $entry_tax_exclude; ?></label>
                                    <div class="col-sm-8">
                                        <label class="switch"><input type="checkbox" id="input-aw-tax" name="aw_tax_exclude" <?php if (isset($tagmanager['aw_tax_exclude']) && $tagmanager['aw_tax_exclude']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                        <div class="form-text"><?php echo $help_tax_exclude;?></div>
                                    </div>
                                </div>
                                <div id="tm_ADWORDADD" class="form-group">
        					    	<label class="col-sm-4 control-label" for="tagmanager_aw_optional"><?php echo $entry_aw_optional;?></label>
        							<div class="col-sm-8">
        								<label class="switch">
        									<input type="checkbox" id="tagmanager_aw_optional" name="aw_optional" <?php if ($tagmanager['aw_optional']) { echo 'checked'; }?>>
        									<span class="slider round"></span>
        								</label>
        								<div class="form-text"><?php echo $help_aw_optional;?></div>
        							</div>
        						</div>
        						<div id="aw_optional" style="display:<?php if (!$tagmanager['aw_optional']) { echo 'none'; }?>">
    								<div class="form-group">
    									<label class="col-sm-4 control-label" for="input-aw_merchant"><?php echo $entry_aw_merchant_id;?></label>
    									<div class="col-sm-8">
    										<input type="text" id="input-aw_merchant" name="aw_merchant_id" placeholder="<?php echo $entry_aw_merchant_id;?>" class="form-control" value="<?php echo $tagmanager['aw_merchant_id'];?>"/>
    									    <div class="form-text"><?php echo $help_aw_merchant;?></div>
    									</div>
    								</div>
    								<div class="form-group">
    									<label class="col-sm-4 control-label" for="input-aw_country"><?php echo $entry_aw_feed_country;?></label>
    									<div class="col-sm-2">
    										<input type="text" id="input-aw_country" name="aw_feed_country" placeholder="eg: US, UK, GR" class="form-control" value="<?php echo $tagmanager['aw_feed_country'];?>"/>
    									    <div class="form-text"><?php echo $help_aw_country;?></div>
    									</div>
    										<label class="col-sm-3 control-label" for="input-aw_language"><?php echo $entry_aw_feed_language;?></label>
    									<div class="col-sm-3">
    										<input type="text" id="input-aw_language" name="aw_feed_language" placeholder="eg: EN, FR, GR" class="form-control" value="<?php echo $tagmanager['aw_feed_language'];?>"/>
    									    <div class="form-text"><?php echo $help_aw_language;?></div>
    									</div>
    								</div>
    							</div>
        						<div id="tm_ADWORD2" class="form-group">
            				    	<label class="col-sm-4 control-label" for="tagmanager_adword2"><?php echo $entry_adword2; ?></label>
            						<div class="col-sm-8">
            							<label class="switch">
            								<input type="checkbox" id="tagmanager_adword2" name="adword2" <?php if ($tagmanager['adword2']) { echo 'checked'; }?>>
            								<span class="slider round"></span>
            							</label>
            						<div class="form-text"><?php echo $help_aw_secondary;?></div>
        						</div>
        					</div>
        					    <div id="conversion2" style="display:<?php if (!$tagmanager['adword2']) { echo 'none'; }?>">
    							    <div class="form-group">
        								<label class="col-sm-4 control-label" for="input-cid2"><?php echo $entry_conversion_id2; ?></label>
        								<div class="col-sm-8">
        								    <input type="text" id="input-cid2" name="conversion_id2" placeholder="<?php echo $entry_conversion_id2; ?>" class="form-control" value="<?php echo $tagmanager['conversion_id2'];?>"/>
        								    <div class="form-text"><?php echo $help_conversion_id;?></div>
        								</div>
        							</div>
    							    <div class="form-group">
        								<label class="col-sm-4 control-label" for="input-clabel2"><?php echo $entry_conversion_label2; ?></label>
        								<div class="col-sm-8">
        									<input type="text" id="input-clabel2" name="conversion_label2" placeholder="<?php echo $entry_conversion_label2; ?>" class="form-control" value="<?php echo $tagmanager['conversion_label2'];?>"/>
        								    <div class="form-text"><?php echo $help_conversion_label;?></div>
        								</div>
        							</div>
    							    <div class="form-group">
        								<label class="col-sm-4 control-label" for="input-tagmanager_conversion_route2"><?php echo $entry_conversion_route2;?></label>
        								<div class="col-sm-3">
        									<select name="conversion_route2" id="input-tagmanager_conversion_route2" class="form-control">
        							    	<?php
                                             foreach ($page_routes as $result) { ?>
                                             <?php if ($result==$tagmanager['conversion_route2']) { ?>
                                                <option value="<?php echo $result; ?>" selected="selected"><?php echo $result; ?></option>
                                                <?php } else { ?>
                                                <option value="<?php echo $result; ?>"><?php echo $result; ?></option>
                                                <?php } ?>
                                                <?php } ?>
        						      		</select>
        						      		<div class="form-text"><?php echo $help_aw_route;?></div>
    						      	</div>
    						      	<div class="col-sm-5">
    						      		<label class="col-sm-6 control-label" for="input-cvalue2"><?php echo $entry_conversion_value2;?></label>
    									<div class="col-sm-6">
    										<input type="text" id="input-cvalue2" name="conversion_value2" placeholder="<?php echo $entry_conversion_value2;?>" class="form-control" value="<?php echo $tagmanager['conversion_value2'];?>"/>
    									    <div class="form-text"><?php echo $help_conversion_value2;?></div>
    									</div>
    								</div>
    					      	</div>
    						    </div>
                            </div>
                            <div id="tm_REMARKITING" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_remarketing"><?php echo $entry_remarketing; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_remarketing" type="checkbox" name="remarketing" <?php if ($tagmanager['remarketing']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_remarketing;?></div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab4 Pixel-->
                        <div id="gtm-facebookpixel" class="gtm-tab-content">
                            <h2>Facebook Pixel</h2>
                                <div id="tm_PIXEL" class="form-group">
                                    <label class="col-sm-4 control-label" for="tagmanager_pixel"><?php echo $entry_pixel; ?></label>
                                    <div class="col-sm-8">
                                        <label class="switch"><input id="tagmanager_pixel" type="checkbox" name="pixel" <?php if ($tagmanager['pixel']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div id="pixel" style="display:<?php if (!$tagmanager['pixel']) { echo 'none'; }?>">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="input-pixelcode"><?php echo $entry_pixelcode; ?></label>
                                        <div class="col-sm-8">
                                            <input type="text" id="input-pixelcode" name="pixelcode" placeholder="<?php echo $entry_pixelcode; ?>" class="form-control" value="<?php echo $tagmanager['pixelcode'];?>" />
                                            <div class="form-text"><?php echo $help_pixel_id;?></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="tagmanager_fb_api"><?php echo $entry_fb_api; ?></label>
                                        <div class="col-sm-8">
                                            <label class="switch"><input id="tagmanager_fb_api" type="checkbox" name="fb_api" <?php if ($tagmanager['fb_api']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                        </div>
                                    </div>
                                    <div id="fbapi" style="display:<?php if (!$tagmanager['fb_api']) { echo 'none'; }?>">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-fb_token"><?php echo $entry_fb_token; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-fb_token" name="fb_token" placeholder="<?php echo $entry_fb_token; ?>" class="form-control" value="<?php echo $tagmanager['fb_token'];?>" />
                                                <div class="form-text"><?php echo $help_pixel_token;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-pixel_test_code"><?php echo $entry_pixel_test_code; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-pixel_test_code" name="pixel_test_code" placeholder="<?php echo $entry_pixel_test_code; ?>" class="form-control" value="<?php echo $tagmanager['pixel_test_code'];?>" />
                                                <div class="form-text"><?php echo $help_pixel_test_code;?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="input-fb_catalog_id"><?php echo $entry_fb_catalog_id; ?></label>
                                        <div class="col-sm-8">
                                            <input type="text" id="input-fb_catalog_id" name="fb_catalog_id" placeholder="<?php echo $entry_fb_catalog_id; ?>" class="form-control" value="<?php echo $tagmanager['fb_catalog_id'];?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="input-fb-shipping"><?php echo $entry_shipping_exclude; ?></label>
                                        <div class="col-sm-8">
                                            <label class="switch"><input id="input-fb-shipping" type="checkbox" name="fb_shipping_exclude" <?php if (isset($tagmanager['fb_shipping_exclude']) && $tagmanager['fb_shipping_exclude']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                            <div class="form-text"><?php echo $help_shipping_exclude;?></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="input-fb-tax"><?php echo $entry_tax_exclude; ?></label>
                                        <div class="col-sm-8">
                                            <label class="switch"><input type="checkbox" id="input-fb-tax" name="fb_tax_exclude" <?php if (isset($tagmanager['fb_tax_exclude']) && $tagmanager['fb_tax_exclude']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                            <div class="form-text"><?php echo $help_tax_exclude;?></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="tagmanager_alt_currency"><?php echo $entry_alt_currency_status; ?></label>
                                        <div class="col-sm-8">
                                            <label class="switch"><input id="tagmanager_alt_currency" type="checkbox" name="alt_currency_status" <?php if ($tagmanager['alt_currency_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                        </div>
                                    </div>
                                    <div id="altcurrency" style="display:<?php if (!$tagmanager['alt_currency_status']) { echo 'none'; }?>" class="form-group">
                                        <label class="col-sm-4 control-label" for="input-alt-curr"><?php echo $entry_alt_currency; ?></label>
                                        <div class="col-sm-8">
                                            <select name="alt_currency" id="input-alt-curr" class="form-control">
                                                <?php foreach ($currencies as $curr) { ?>
                                                <option value="<?php echo $curr['code']; ?>" <?php echo ($tagmanager['alt_currency']==$curr['code'] ? 'selected="selected"' : '');?>><?php echo $curr['title'];?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="form-text"><?php echo $help_ac;?></div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Tab5 Snapchat-->
                        <div id="gtm-snappixel" class="gtm-tab-content">
                            <h2>Snap Pixel</h2>
                            <div id="tm_SNAP" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_snap_pixel_status"><?php echo $entry_snap_pixel_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_snap_pixel_status" type="checkbox" name="snap_pixel_status" <?php if ($tagmanager['snap_pixel_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="snapchat" style="display:<?php if (!$tagmanager['snap_pixel_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-snap_pixelid"><?php echo $entry_snap_pixel_id; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-snap_pixelid" name="snap_pixel_id" placeholder="<?php echo $entry_snap_pixel_id; ?>" class="form-control" value="<?php echo $tagmanager['snap_pixel_id'];?>" />
                                        <div class="form-text"><?php echo $help_snap_id;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab6 Tiktok-->
                        <div id="gtm-tiktok" class="gtm-tab-content">
                            <h2>Tiktok Pixel</h2>
                            <div id="tm_TIKTOK" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_tiktok"><?php echo $entry_tiktok_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_tiktok" type="checkbox" name="tiktok_status" <?php if ($tagmanager['tiktok_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="tiktok" class="section-sub" style="display:<?php if (!$tagmanager['tiktok_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-tiktok-code"><?php echo $entry_tiktok_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-tiktok-code" name="tiktok_code" placeholder="<?php echo $entry_tiktok_code; ?>" class="form-control" value="<?php echo $tagmanager['tiktok_code'];?>" />
                                        <div class="form-text"><?php echo $help_tiktok_id;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab7 Twitter-->
                        <div id="gtm-twitter" class="gtm-tab-content">
                            <h2>Twitter Analytics</h2>
                            <div id="tm_TWITER" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_twitter_status"><?php echo $entry_twitter_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_twitter_status" type="checkbox" name="twitter_status" <?php if ($tagmanager['twitter_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="twitter" class="section-sub" style="display:<?php if (!$tagmanager['twitter_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-twitterid"><?php echo $entry_twitter_tag; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-twitterid" name="twitter_tag" placeholder="<?php echo $entry_twitter_tag; ?>" class="form-control" value="<?php echo $tagmanager['twitter_tag'];?>" />
                                        <div class="form-text"><?php echo $help_twitter_id;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-twitterid"><?php echo $entry_twitter_purchase; ?></label>    
                                    <div class="col-sm-8">
                                        <input type="text" id="input-twitter_purchase" name="twitter_purchase" placeholder="<?php echo $entry_twitter_purchase; ?>" class="form-control" value="<?php echo $tagmanager['twitter_purchase'];?>" />
                                        <div class="form-text"><?php echo $help_twitter_purchase;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-twitter_payment"><?php echo $entry_twitter_payment; ?></label>    
                                    <div class="col-sm-8">
                                        <input type="text" id="input-twitter_payment" name="twitter_payment" placeholder="<?php echo $entry_twitter_payment; ?>" class="form-control" value="<?php echo $tagmanager['twitter_payment'];?>" />
                                        <div class="form-text"><?php echo $help_twitter_payment;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-twitter_checkout"><?php echo $entry_twitter_checkout; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-twitter_checkout" name="twitter_checkout" placeholder="<?php echo $entry_twitter_checkout; ?>" class="form-control" value="<?php echo $tagmanager['twitter_checkout'];?>" />
                                        <div class="form-text"><?php echo $help_twitter_checkout;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-twitter_addcart"><?php echo $entry_twitter_addcart; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-twitter_addcart" name="twitter_addcart" placeholder="<?php echo $entry_twitter_addcart; ?>" class="form-control" value="<?php echo $tagmanager['twitter_addcart'];?>" />
                                        <div class="form-text"><?php echo $help_twitter_addcart;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-twitter_addwishlist"><?php echo $entry_twitter_addwishlist; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-twitter_addwishlist" name="twitter_addwishlist" placeholder="<?php echo $entry_twitter_addwishlist; ?>" class="form-control" value="<?php echo $tagmanager['twitter_addwishlist'];?>" />
                                        <div class="form-text"><?php echo $help_twitter_addwishlist;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-twitter_viewcontent"><?php echo $entry_twitter_viewcontent; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-twitter_viewcontent" name="twitter_viewcontent" placeholder="<?php echo $entry_twitter_viewcontent; ?>" class="form-control" value="<?php echo $tagmanager['twitter_viewcontent'];?>" />
                                        <div class="form-text"><?php echo $help_twitter_viewcontent;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-twitter_search"><?php echo $entry_twitter_search; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-twitter_search" name="twitter_search" placeholder="<?php echo $entry_twitter_search; ?>" class="form-control" value="<?php echo $tagmanager['twitter_search'];?>" />
                                        <div class="form-text"><?php echo $help_twitter_search;?></div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-twitter_pageview"><?php echo $entry_twitter_pageview; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-twitter_pageview" name="twitter_pageview" placeholder="<?php echo $entry_twitter_pageview; ?>" class="form-control" value="<?php echo $tagmanager['twitter_pageview'];?>" />
                                        <div class="form-text"><?php echo $help_twitter_pageview;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab8 Pinterest-->
                        <div id="gtm-pinterest" class="gtm-tab-content">
                            <h2>Pinterest</h2>
                            <div id="tm_PINTEREST" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_pinterest_status"><?php echo $entry_pinterest_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_pinterest_status" type="checkbox" name="pinterest_status" <?php if ($tagmanager['pinterest_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="pinterest" class="section-sub"  style="display:<?php if (!$tagmanager['pinterest_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-pinterestid"><?php echo $entry_pinterest_tag; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-pinterestid" name="pinterest_tag" placeholder="<?php echo $entry_pinterest_tag; ?>" class="form-control" value="<?php echo $tagmanager['pinterest_tag'];?>" />
                                        <div class="form-text"><?php echo $help_pinterest_id;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab9 Skroutz-->
                        <div id="gtm-skroutz" class="gtm-tab-content">
                            <h2>Skroutz</h2>
                            <div id="tm_SKROUTZ" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_skroutz_status"><?php echo $entry_skroutz_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_skroutz_status" type="checkbox" name="skroutz_status" <?php if ($tagmanager['skroutz_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="skroutz" class="section-sub"  style="display:<?php if (!$tagmanager['skroutz_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-skroutz_siteid"><?php echo $entry_skroutz_siteid; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-skroutz_siteid" name="skroutz_siteid" placeholder="<?php echo $entry_skroutz_siteid; ?>" class="form-control" value="<?php echo $tagmanager['skroutz_siteid'];?>" />
                                        <div class="form-text"><?php echo $help_skroutz_id;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab10 Luckyorange -->
                        <div id="gtm-luckyorange" class="gtm-tab-content">
                            <h2>Lucky Orange</h2>
                            <div id="tm_LUCKYORANGE" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_luckyorange_status"><?php echo $entry_luckyorange_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_luckyorange_status" type="checkbox" name="luckyorange_status" <?php if ($tagmanager['luckyorange_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="luckyorange" class="section-sub"  style="display:<?php if (!$tagmanager['luckyorange_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-luckyorange_siteid"><?php echo $entry_luckyorange_siteid; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-luckyorange_siteid" name="luckyorange_siteid" placeholder="<?php echo $entry_luckyorange_siteid; ?>" class="form-control" value="<?php echo $tagmanager['luckyorange_siteid'];?>" />
                                        <div class="form-text"><?php echo $help_luckyorange_id;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab11 Glami -->
                        <div id="gtm-glami" class="gtm-tab-content">
                            <h2>Glami Pixel</h2>
                            <div id="tm_GLAMI" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_glami_status"><?php echo $entry_glami_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_glami_status" type="checkbox" name="glami_status" <?php if ($tagmanager['glami_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="glami" class="section-sub"  style="display:<?php if (!$tagmanager['glami_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-glami_code"><?php echo $entry_glami_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-glami_code" name="glami_code" placeholder="<?php echo $entry_glami_code; ?>" class="form-control" value="<?php echo $tagmanager['glami_code'];?>" />
                                        <div class="form-text"><?php echo $help_glami_id;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab12 Klaviyo -->
                        <div id="gtm-klaviyo" class="gtm-tab-content">
                            <h2>Klaviyo</h2>
                            <div id="tm_klaviyo" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_klaviyo_status"><?php echo $entry_klaviyo_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_klaviyo_status" type="checkbox" name="klaviyo_status" <?php if ($tagmanager['klaviyo_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="klaviyo" class="section-sub"  style="display:<?php if (!$tagmanager['klaviyo_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-klaviyo_code"><?php echo $entry_klaviyo_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-klaviyo_code" name="klaviyo_code" placeholder="<?php echo $entry_klaviyo_code; ?>" class="form-control" value="<?php echo $tagmanager['klaviyo_code'];?>" />
                                        <div class="form-text"><?php echo $help_klaviyo_id;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab13 Yandex -->
                        <div id="gtm-yandex" class="gtm-tab-content">
                            <h2>Yandex</h2>
                            <div id="tm_YANDEX" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_yandex_status"><?php echo $entry_yandex_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_yandex_status" type="checkbox" name="yandex_status" <?php if ($tagmanager['yandex_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="yandex" class="section-sub"  style="display:<?php if (!$tagmanager['yandex_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-yandex_code"><?php echo $entry_yandex_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-yandex_code" name="yandex_code" placeholder="<?php echo $entry_yandex_code; ?>" class="form-control" value="<?php echo $tagmanager['yandex_code'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab14 Bing -->
                        <div id="gtm-bing" class="gtm-tab-content">
                            <h2>Bing</h2>
                            <div id="tm_BING" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_bing_status"><?php echo $entry_bing_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_bing_status" type="checkbox" name="bing_status" <?php if ($tagmanager['bing_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="bing" class="section-sub"  style="display:<?php if (!$tagmanager['bing_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-bing_uetid"><?php echo $entry_bing_uetid; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-bing_uetid" name="bing_uetid" placeholder="<?php echo $entry_bing_uetid; ?>" class="form-control" value="<?php echo $tagmanager['bing_uetid'];?>" />
                                        <div class="form-text"><?php echo $help_bing_id;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab14-A Matomo -->
                        <div id="gtm-matomo" class="gtm-tab-content">
                            <h2>Matomo</h2>
                            <div id="tm_MATOMO" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_matomo_status"><?php echo $entry_matomo_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_matomo_status" type="checkbox" name="matomo_status" <?php if ($tagmanager['matomo_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="matomo" class="section-sub"  style="display:<?php if (!$tagmanager['matomo_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-matomo_code"><?php echo $entry_matomo_code; ?></label>
                                    <div class="col-sm-8">
                                        <textarea id="input-matomo_code" rows="10" cols="70%" style="width:100%" name="matomo_code"><?php if (!empty($tagmanager['matomo_code'])) { echo $tagmanager['matomo_code']; }?></textarea>
                                        <div class="form-text"><?php echo $help_matomo_code;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab15 Optimize -->
                        <div id="gtm-optimize" class="gtm-tab-content">
                            <h2>Google Optimize</h2>
                            <div id="tm_OPTIMIZE" class="form-group">
                                <label class="col-sm-4 control-label" for="optimize"><?php echo $entry_google_optimize_status; ?></span></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="optimize" type="checkbox" name="google_optimize_status" <?php if ($tagmanager['google_optimize_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="optimizeid" style="display:<?php if (!$tagmanager['google_optimize_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-goptimize"><?php echo $entry_google_optimize; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-goptimize" name="google_optimize" placeholder="<?php echo $entry_google_optimize; ?>" class="form-control" value="<?php echo $tagmanager['google_optimize'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab16 Review -->
                        <div id="gtm-review" class="gtm-tab-content">
                            <h2>Google Review</h2>
                            <div id="tm_REVIEW" class="form-group">
                                <label class="col-sm-4 control-label" for="greview"><?php echo $entry_greview; ?></span></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="greview" type="checkbox" name="greview" <?php if ($tagmanager['greview']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="greviewid" style="display:<?php if (!$tagmanager['greview']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-merchant_id"><?php echo $entry_merchant_id; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-merchant_id" name="merchant_id" placeholder="<?php echo $entry_merchant_id; ?>" class="form-control" value="<?php echo $tagmanager['merchant_id'];?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="greview_badge"><?php echo $entry_greview_badge; ?></span></label>
                                    <div class="col-sm-8">
                                        <label class="switch"><input id="greview_badge" type="checkbox" name="greview_badge" <?php if ($tagmanager['greview_badge']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab17 Admit Ad -->
                        <div id="gtm-admitad" class="gtm-tab-content">
                            <h2>AdmitAd</h2>
                            <div id="tm_ADMITAD" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_admitad"><?php echo $entry_admitad_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_admitad" type="checkbox" name="admitad_status" <?php if ($tagmanager['admitad_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="admitad" style="display:<?php if (!$tagmanager['admitad_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-admitad_code"><?php echo $entry_admitad_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-admitad_code" name="admitad_code" placeholder="<?php echo $entry_admitad_code; ?>" class="form-control" value="<?php echo $tagmanager['admitad_code'];?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-admitad_category"><?php echo $entry_admitad_category; ?></label>
                                    <div class="col-sm-8"><?php if ($tagmanager['admitad_category'] == '') { $tagmanager['admitad_category'] =1; }?>
                                        <input type="text" id="input-admitad_category" name="admitad_category" placeholder="<?php echo $entry_admitad_category; ?>" class="form-control" value="<?php echo $tagmanager['admitad_category'];?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-admitad_additional_type"><?php echo $entry_admitad_additional_type; ?></label>
                                    <div class="col-sm-8"><?php if ($tagmanager['admitad_additional_type'] == '') { $tagmanager['admitad_additional_type'] ='sale'; }?>
                                        <input type="text" id="input-admitad_additional_type" name="admitad_additional_type" placeholder="<?php echo $entry_admitad_additional_type; ?>" class="form-control" value="<?php echo $tagmanager['admitad_additional_type'];?>"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-admitad_invoice_broker"><?php echo $entry_admitad_invoice_broker; ?></label>
                                    <div class="col-sm-8"><?php if ($tagmanager['admitad_invoice_broker'] == '') { $tagmanager['admitad_invoice_broker'] ='adm'; }?>
                                        <input type="text" id="input-admitad_invoice_broker" name="admitad_invoice_broker" placeholder="<?php echo $entry_admitad_invoice_broker; ?>" class="form-control" value="<?php echo $tagmanager['admitad_invoice_broker'];?>"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-admitad_invoice_category"><?php echo $entry_admitad_invoice_category; ?></label>
                                    <div class="col-sm-8"><?php if ($tagmanager['admitad_invoice_category'] == '') { $tagmanager['admitad_invoice_category'] =1; }?>
                                        <input type="text" id="input-admitad_invoice_category" name="admitad_invoice_category" placeholder="<?php echo $entry_admitad_invoice_category; ?>" class="form-control" value="<?php echo $tagmanager['admitad_invoice_category'];?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                            		<label class="col-sm-4 control-label" for="tagmanager_retag"><?php echo $entry_admitad_retag_status; ?></label>
                            		<div class="col-sm-8">
                                		<label class="switch"><input id="tagmanager_retag" type="checkbox" name="admitad_retag_status" <?php if ($tagmanager['admitad_retag_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                            		</div>
                               	</div>
                               	<div id="retag" style="display:<?php if (!$tagmanager['admitad_retag_status']) { echo 'none'; }?>">
                            		<div class="form-group">
                                		<label class="col-sm-4 control-label" for="input-admitad_retag_code1"><?php echo $entry_admitad_retag_code1; ?></label>
                                		<div class="col-sm-8">
                                    		<input type="text" id="input-admitad_retag_code1" name="admitad_retag_code1" placeholder="<?php echo $entry_admitad_retag_code1; ?>" class="form-control" value="<?php echo $tagmanager['admitad_retag_code1'];?>" />
                                		</div>
                           	 		</div>
                           	 		<div class="form-group">
                                		<label class="col-sm-4 control-label" for="input-admitad_retag_code2"><?php echo $entry_admitad_retag_code2; ?></label>
                                		<div class="col-sm-8">
                                    		<input type="text" id="input-admitad_retag_code2" name="admitad_retag_code2" placeholder="<?php echo $entry_admitad_retag_code2; ?>" class="form-control" value="<?php echo $tagmanager['admitad_retag_code2'];?>" />
                                		</div>
                           	 		</div>
                           	 		<div class="form-group">
                                		<label class="col-sm-4 control-label" for="input-admitad_retag_code3"><?php echo $entry_admitad_retag_code3; ?></label>
                                		<div class="col-sm-8">
                                    		<input type="text" id="input-admitad_retag_code3" name="admitad_retag_code3" placeholder="<?php echo $entry_admitad_retag_code3; ?>" class="form-control" value="<?php echo $tagmanager['admitad_retag_code3'];?>" />
                                		</div>
                           	 		</div>
                           	 		<div class="form-group">
                                		<label class="col-sm-4 control-label" for="input-admitad_retag_code4"><?php echo $entry_admitad_retag_code4; ?></label>
                                		<div class="col-sm-8">
                                    		<input type="text" id="input-admitad_retag_code4" name="admitad_retag_code4" placeholder="<?php echo $entry_admitad_retag_code4; ?>" class="form-control" value="<?php echo $tagmanager['admitad_retag_code4'];?>" />
                                		</div>
                           	 		</div>
                           	 		<div class="form-group">
                                		<label class="col-sm-4 control-label" for="input-admitad_retag_code5"><?php echo $entry_admitad_retag_code5; ?></label>
                                		<div class="col-sm-8">
                                    		<input type="text" id="input-admitad_retag_code5" name="admitad_retag_code5" placeholder="<?php echo $entry_admitad_retag_code5; ?>" class="form-control" value="<?php echo $tagmanager['admitad_retag_code5'];?>" />
                                		</div>
                           	 		</div>
                           		</div>
                            </div>
                        </div>
                        <!-- Tab18 Sendinblue -->
                        <div id="gtm-sendinblue" class="gtm-tab-content">
                            <h2>SendinBlue</h2>
                            <div id="tm_SENDINBLUE" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_sendinblue_status"><?php echo $entry_sendinblue_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_sendinblue_status" type="checkbox" name="sendinblue_status" <?php if ($tagmanager['sendinblue_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="sendinblue" style="display:<?php if (!$tagmanager['sendinblue_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-sendinblue_code"><?php echo $entry_sendinblue_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-sendinblue_code" name="sendinblue_code" placeholder="<?php echo $entry_sendinblue_code; ?>" class="form-control" value="<?php echo $tagmanager['sendinblue_code'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab19 Linkwise -->
                        <div id="gtm-linkwise" class="gtm-tab-content">
                            <h2>Linkwise</h2>
                            <div id="tm_LINKWISE" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_linkwise_status"><?php echo $entry_linkwise_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_linkwise_status" type="checkbox" name="linkwise_status" <?php if ($tagmanager['linkwise_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="linkwise" style="display:<?php if (!$tagmanager['linkwise_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-linkwise_code"><?php echo $entry_linkwise_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-linkwise_code" name="linkwise_code" placeholder="<?php echo $entry_linkwise_code; ?>" class="form-control" value="<?php echo $tagmanager['linkwise_code'];?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-linkwise_decimal"><?php echo $entry_linkwise_decimal; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-linkwise_decimal" name="linkwise_decimal" placeholder="<?php echo $entry_linkwise_decimal; ?>" class="form-control" value="<?php echo $tagmanager['linkwise_decimal'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab20 2Performant -->
                        <div id="gtm-2perfomant" class="gtm-tab-content">
                            <h2>2Performant</h2>
                            <div id="tm_2PERFORMANT" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_performant"><?php echo $entry_performant_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_performant" type="checkbox" name="performant_status" <?php if ($tagmanager['performant_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="performant" style="display:<?php if (!$tagmanager['performant_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-performant_code"><?php echo $entry_performant_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-performant_code" name="performant_code" placeholder="<?php echo $entry_performant_code; ?>" class="form-control" value="<?php echo $tagmanager['performant_code'];?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-performant_confirm"><?php echo $entry_performant_confirm; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-performant_confirm" name="performant_confirm" placeholder="<?php echo $entry_performant_confirm; ?>" class="form-control" value="<?php echo $tagmanager['performant_confirm'];?>" />
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="tagmanager_performant_currency"><?php echo $entry_alt_currency_status; ?></label>
                                    <div class="col-sm-8">
                                        <label class="switch"><input id="tagmanager_performant_currency" type="checkbox" name="performant_currency_status" <?php if ($tagmanager['performant_currency_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div id="performantcurrency" style="display:<?php if (!$tagmanager['performant_currency_status']) { echo 'none'; }?>">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="input-performant_currency"><?php echo $entry_alt_currency; ?></label>
                                        <div class="col-sm-8">
                                            <select name="performant_currency" id="input-performant_currency" class="form-control">
                                                <?php foreach ($currencies as $curr) { ?>
                                                <option value="<?php echo $curr['code']; ?>" <?php echo ($tagmanager['performant_currency']==$curr['code'] ? 'selected="selected"' : '');?>><?php echo $curr['title'];?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="form-text"><?php echo $help_ac;?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab20-1 CJ -->
                        <div id="gtm-da" class="gtm-tab-content">
                            <h2>CJ.COM Affiliate</h2>
                            <div id="tm_CJ" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_cj"><?php echo $entry_cj_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_cj" type="checkbox" name="cj_status" <?php if ($tagmanager['cj_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="cj" style="display:<?php if (!$tagmanager['cj_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-cj_code"><?php echo $entry_cj_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-cj_code" name="cj_code" placeholder="<?php echo $entry_cj_code; ?>" class="form-control" value="<?php echo $tagmanager['cj_code'];?>" />
                                        <div class="form-text"><?php echo $help_cj_code;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-cj_actionid"><?php echo $entry_cj_actionid; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-cj_actionid" name="cj_actionid" placeholder="<?php echo $entry_cj_actionid; ?>" class="form-control" value="<?php echo $tagmanager['cj_actionid'];?>" />
                                        <div class="form-text"><?php echo $help_cj_actionid;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="tagmanager_cj_currency"><?php echo $entry_cj_currency; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-cj_currency" name="cj_currency" placeholder="<?php echo $entry_cj_currency; ?>" class="form-control" value="<?php echo $tagmanager['cj_currency'];?>" />
                                        <div class="form-text"><?php echo $help_cj_currency;?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="tagmanager_cj_currency_value"><?php echo $entry_cj_currency_value; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-cj_currency_value" name="cj_currency_value" placeholder="<?php echo $entry_cj_currency_value; ?>" class="form-control" value="<?php echo $tagmanager['cj_currency_value'];?>" />
                                        <div class="form-text"><?php echo $help_cj_currency_value;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab20-2 DA -->
                        <div id="gtm-da" class="gtm-tab-content">
                            <h2>Data Audience</h2>
                            <div id="tm_DA" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_da"><?php echo $entry_da_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_da" type="checkbox" name="da_status" <?php if ($tagmanager['da_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="da" style="display:<?php if (!$tagmanager['da_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-da_code"><?php echo $entry_da_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-da_code" name="da_code" placeholder="<?php echo $entry_da_code; ?>" class="form-control" value="<?php echo $tagmanager['da_code'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab21 Clarity -->
                        <div id="gtm-clarity" class="gtm-tab-content">
                            <h2>Clarity</h2>
                            <div id="tm_CLARITY" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_clarity_status"><?php echo $entry_clarity_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_clarity_status" type="checkbox" name="clarity_status" <?php if ($tagmanager['clarity_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="clarity" style="display:<?php if (!$tagmanager['clarity_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-clarity_siteid"><?php echo $entry_clarity_siteid; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-clarity_siteid" name="clarity_id" placeholder="<?php echo $entry_clarity_siteid; ?>" class="form-control" value="<?php echo $tagmanager['clarity_id'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab22 Paypal -->
                        <div id="gtm-paypal" class="gtm-tab-content">
                            <h2>Paypal</h2>
                            <div id="tm_PAYPAL" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_paypal_status"><?php echo $entry_paypal_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_paypal_status" type="checkbox" name="paypal_status" <?php if ($tagmanager['paypal_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="paypal" style="display:<?php if (!$tagmanager['paypal_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-paypalid"><?php echo $entry_paypal_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-paypalid" name="paypal_code" placeholder="<?php echo $entry_paypal_code; ?>" class="form-control" value="<?php echo $tagmanager['paypal_code'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab23 Hotjar -->
                        <div id="gtm-hotjar" class="gtm-tab-content">
                            <h2>Hotjar</h2>
                            <div id="tm_HOTJAR" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_hotjar_status"><?php echo $entry_hotjar_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_hotjar_status" type="checkbox" name="hotjar_status" <?php if ($tagmanager['hotjar_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="hotjar" style="display:<?php if (!$tagmanager['hotjar_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-hotjar_siteid"><?php echo $entry_hotjar_siteid; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-hotjar_siteid" name="hotjar_siteid" placeholder="<?php echo $entry_hotjar_siteid; ?>" class="form-control" value="<?php echo $tagmanager['hotjar_siteid'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab24 Chats -->
                        <div id="gtm-chats" class="gtm-tab-content">
                            <h2>Live Chat Widgets</h2>
                            <div id="tm_ZENCHAT" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_zenchat_status"><?php echo $entry_zenchat_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_zenchat_status" type="checkbox" name="zenchat_status" <?php if ($tagmanager['zenchat_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="zenchat" style="display:<?php if (!$tagmanager['zenchat_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-zenchat_code"><?php echo $entry_zenchat_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-zenchat_code" name="zenchat_code" placeholder="<?php echo $entry_zenchat_code; ?>" class="form-control" value="<?php echo $tagmanager['zenchat_code'];?>" />
                                    </div>
                                </div>
                            </div>
                            <div id="tm_ZOPIMCHAT" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_zopimchat_status"><?php echo $entry_zopimchat_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_zopimchat_status" type="checkbox" name="zopimchat_status" <?php if ($tagmanager['zopimchat_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="zopimchat" style="display:<?php if (!$tagmanager['zopimchat_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-zopimchat_code"><?php echo $entry_zopimchat_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-zopimchat_code" name="zopimchat_code" placeholder="<?php echo $entry_zopimchat_code; ?>" class="form-control" value="<?php echo $tagmanager['zopimchat_code'];?>" />
                                    </div>
                                </div>
                            </div>
                            <div id="tm_FRESHCHAT" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_freshchat"><?php echo $entry_freshchat_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_freshchat" type="checkbox" name="freshchat_status" <?php if ($tagmanager['freshchat_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="freshchat" style="display:<?php if (!$tagmanager['freshchat_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-freshchat_code"><?php echo $entry_freshchat_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-freshchat_code" name="freshchat_code" placeholder="<?php echo $entry_freshchat_code; ?>" class="form-control" value="<?php echo $tagmanager['freshchat_code'];?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-freshchat_host"><?php echo $entry_freshchat_host; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-freshchat_host" name="freshchat_host" placeholder="<?php echo $entry_freshchat_host; ?>" class="form-control" value="<?php echo $tagmanager['freshchat_host'];?>" />
                                    </div>
                                </div>
                            </div>
                            <div id="tm_HUBSPOT" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_hubspot_status"><?php echo $entry_hubspot_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_hubspot_status" type="checkbox" name="hubspot_status" <?php if ($tagmanager['hubspot_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="hubspot" style="display:<?php if (!$tagmanager['hubspot_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-hubspot_code"><?php echo $entry_hubspot_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-hubspot_code" name="hubspot_code" placeholder="<?php echo $entry_hubspot_code; ?>" class="form-control" value="<?php echo $tagmanager['hubspot_code'];?>" />
                                    </div>
                                </div>
                            </div>
                            <div id="tm_SMARTSUPP" class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_smartsupp_status"><?php echo $entry_smartsupp_status; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_smartsupp_status" type="checkbox" name="smartsupp_status" <?php if ($tagmanager['smartsupp_status']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="smartsupp" style="display:<?php if (!$tagmanager['smartsupp_status']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-smartsupp_code"><?php echo $entry_smartsupp_code; ?></label>
                                    <div class="col-sm-8">
                                        <input type="text" id="input-smartsupp_code" name="smartsupp_code" placeholder="<?php echo $entry_smartsupp_code; ?>" class="form-control" value="<?php echo $tagmanager['smartsupp_code'];?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab25 Cookies -->
                        <div id="gtm-cookie" class="gtm-tab-content">
                            <h2>Cookie Consent</h2>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_cookie"><?php echo $entry_eu_cookie; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input id="tagmanager_cookie" type="checkbox" name="eu_cookie" <?php if ($tagmanager['eu_cookie']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                </div>
                            </div>
                            <div id="cookie" style="display:<?php if (!$tagmanager['eu_cookie']) { echo 'none'; }?>">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="tagmanager_eu_cookie_enforce"><?php echo $entry_eu_cookie_enforce; ?></label>
                                    <div class="col-sm-8">
                                        <label class="switch"><input id="tagmanager_eu_cookie_enforce" type="checkbox" name="eu_cookie_enforce" <?php if ($tagmanager['eu_cookie_enforce']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                        <div class="form-text"><?php echo $help_cenforce;?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-cookie_position"><?php echo $entry_cookie_position; ?></label>
                                    <div class="col-sm-8">
                                        <select name="cookie_position" id="input-cookie_position" class="form-control">
                                            <?php
                                            foreach ($cookie_positions as $cposition) { ?>
                                            <?php if ($cposition==$tagmanager['cookie_position']) { ?>
                                            <option value="<?php echo $cposition; ?>" selected="selected"><?php echo $cposition; ?></option>
                                            <?php } else { ?>
                                            <option value="<?php echo $cposition; ?>"><?php echo $cposition; ?></option>
                                            <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-cookie_position-mobile"><?php echo $entry_cookie_position_mobile; ?></label>
                                    <div class="col-sm-8">
                                        <select name="cookie_position_mobile" id="input-cookie_position-mobile" class="form-control">
                                            <?php
                                            foreach ($cookie_positions as $cposition) { ?>
                                            <?php if (isset($tagmanager['cookie_position_mobile']) && $cposition==$tagmanager['cookie_position_mobile']) { ?>
                                            <option value="<?php echo $cposition; ?>" selected="selected"><?php echo $cposition; ?></option>
                                            <?php } else { ?>
                                            <option value="<?php echo $cposition; ?>"><?php echo $cposition; ?></option>
                                            <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-bg_popup"><?php echo $entry_cookie_bg_popup; ?></label>
                                    <div class="col-sm-8">
                                        <div id="color1" data-format="alias" class="input-group colorpicker-component">
                                            <input type="text" id="input-bg_popup" name="cookie_bg_popup" placeholder="<?php echo $entry_cookie_bg_popup; ?>" class="form-control" value="<?php echo $tagmanager['cookie_bg_popup'];?>" />
                                            <span class="input-group-addon"><i></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-text_popup"><?php echo $entry_cookie_text_popup; ?></label>
                                    <div class="col-sm-8">
                                        <div id="color2" data-format="alias" class="input-group colorpicker-component">
                                            <input type="text" id="input-text_popup" name="cookie_text_popup" placeholder="<?php echo $entry_cookie_text_popup; ?>" class="form-control" value="<?php echo $tagmanager['cookie_text_popup'];?>" />
                                            <span class="input-group-addon"><i></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-bg_button"><?php echo $entry_cookie_bg_button; ?></label>
                                    <div class="col-sm-8">
                                        <div id="color3" data-format="alias" class="input-group colorpicker-component">
                                            <input type="text" id="input-bg_button" name="cookie_bg_button" placeholder="<?php echo $entry_cookie_bg_button; ?>" class="form-control" value="<?php echo $tagmanager['cookie_bg_button'];?>" />
                                            <span class="input-group-addon"><i></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-text_button"><?php echo $entry_cookie_text_button; ?></label>
                                    <div class="col-sm-8">
                                        <div id="color4" data-format="alias" class="input-group colorpicker-component">
                                            <input type="text" id="input-text_button" name="cookie_text_button" placeholder="<?php echo $entry_cookie_text_button; ?>" class="form-control" value="<?php echo $tagmanager['cookie_text_button'];?>" />
                                            <span class="input-group-addon"><i></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="input-cookie_heading_color"><?php echo $entry_cookie_heading_color; ?></label>
                                    <div class="col-sm-8">
                                        <div id="color5" data-format="alias" class="input-group colorpicker-component">
                                            <input type="text" id="input-cookie_heading_color" name="cookie_heading_color" placeholder="<?php echo $entry_cookie_heading_color; ?>" class="form-control" value="<?php echo $tagmanager['cookie_heading_color'];?>" />
                                            <span class="input-group-addon"><i></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                	<label class="col-sm-4 control-label" for="input-gdpr_customcode"><?php echo $entry_customcode;?></label>
                                	<div class="col-sm-8">
                                    	<textarea id="input-gdpr_customcode" rows="10" cols="70%" style="width:100%" name="gdpr_customcode"><?php if (isset($tagmanager['gdpr_customcode'])) { echo $tagmanager['gdpr_customcode']; }?></textarea>
                                	    <div class="form-text"><?php echo $help_customcodecookie;?></div>
                                	</div>
                            	</div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="tagmanager_badge"><?php echo $entry_cookie_badge; ?></label>
                                    <div class="col-sm-8">
                                        <label class="switch"><input id="tagmanager_badge" type="checkbox" name="cookie_badge" <?php if ($tagmanager['cookie_badge']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    </div>
                                </div>
                                <div id="badge" style="display:<?php if (!$tagmanager['cookie_badge']) { echo 'none'; }?>">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="input-cookie_badge_position"><?php echo $entry_cookie_badge_position; ?></label>
                                        <div class="col-sm-8">
                                            <select name="cookie_badge_position" id="input-cookie_badge_position" class="form-control">
                                                <?php
                                                foreach ($badge_positions as $cposition) { ?>
                                                <?php if ($cposition==$tagmanager['cookie_badge_position']) { ?>
                                                <option value="<?php echo $cposition; ?>" selected="selected"><?php echo $cposition; ?></option>
                                                <?php } else { ?>
                                                <option value="<?php echo $cposition; ?>"><?php echo $cposition; ?></option>
                                                <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="input-cookie_badge_color"><?php echo $entry_cookie_badge_color; ?></label>
                                        <div class="col-sm-8">
                                            <div id="color6" data-format="alias" class="input-group colorpicker-component">
                                                <input type="text" id="input-cookie_badge_color" name="cookie_badge_color" placeholder="<?php echo $entry_cookie_badge_color; ?>" class="form-control" value="<?php echo $tagmanager['cookie_badge_color'];?>" />
                                                <span class="input-group-addon"><i></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <ul class="nav nav-tabs">
					            <?php 
					                $active=true; 
					                $li_text = '';
					                foreach ($languages as $language) { 
					                    if ($active) {
					                        $li_text = ' class="active"';
					                        $active = false;
					                    } else {
					                        $li_text = '';
					                    }
					                ?>
						            <li <?php echo $li_text;?>><a href="#tab-language-<?php echo  $language['code']; ?>" data-toggle="tab"><img src="<?php echo $language['image']; ?>" alt="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
				                    <?php } ?>
			                	</ul>
			                	<div class="tab-content">
				            	    <?php $active=false; foreach ($languages as $language) { ?>
                                    <?php 
                                        if (!isset($tagmanager['cookie_title_'.$language['language_id']]) || empty($tagmanager['cookie_title_'.$language['language_id']])) {
                                            $tagmanager['cookie_title_'.$language['language_id']] = $text_cookie_title;
                                        }
                                        if (!isset($tagmanager['cookie_text_'.$language['language_id']]) || empty($tagmanager['cookie_text_'.$language['language_id']])) {
                                            $tagmanager['cookie_text_'.$language['language_id']] = $text_cookie_text;
                                        }
                                        if (!isset($tagmanager['cookie_text2_'.$language['language_id']]) || empty($tagmanager['cookie_text2_'.$language['language_id']])) {
                                            $tagmanager['cookie_text2_'.$language['language_id']] = $text_cookie_text2;
                                        }
                                        if (!isset($tagmanager['cookie_button1_'.$language['language_id']]) || empty($tagmanager['cookie_button1_'.$language['language_id']])) {
                                            $tagmanager['cookie_button1_'.$language['language_id']] = $text_cookie_button1;
                                        }
                                        if (!isset($tagmanager['cookie_button2_'.$language['language_id']]) || empty($tagmanager['cookie_button2_'.$language['language_id']])) {
                                            $tagmanager['cookie_button2_'.$language['language_id']] = $text_cookie_button2;
                                        }
                                        if (!isset($tagmanager['cookie_button3_'.$language['language_id']]) || empty($tagmanager['cookie_button3_'.$language['language_id']])) {
                                            $tagmanager['cookie_button3_'.$language['language_id']] = $text_cookie_button3;
                                        }
                                        if (!isset($tagmanager['cookie_link_'.$language['language_id']]) || empty($tagmanager['cookie_link_'.$language['language_id']])) {
                                            $tagmanager['cookie_link_'.$language['language_id']] = $text_cookie_link;
                                        }
                                        if (!isset($tagmanager['cookie_url_'.$language['language_id']]) || empty($tagmanager['cookie_url_'.$language['language_id']])) {
                                            $tagmanager['cookie_url_'.$language['language_id']] = $text_cookie_url;
                                        }
                                        if (!isset($tagmanager['cookie_essential_title_'.$language['language_id']]) || empty($tagmanager['cookie_essential_title_'.$language['language_id']])) {
                                            $tagmanager['cookie_essential_title_'.$language['language_id']] = $text_cookie_essential_title;
                                        }
                                        if (!isset($tagmanager['cookie_essential_'.$language['language_id']]) || empty($tagmanager['cookie_essential_'.$language['language_id']])) {
                                            $tagmanager['cookie_essential_'.$language['language_id']] = $text_cookie_essential;
                                        }
                                        if (!isset($tagmanager['cookie_analytics_'.$language['language_id']]) || empty($tagmanager['cookie_analytics_'.$language['language_id']])) {
                                            $tagmanager['cookie_analytics_'.$language['language_id']] = $text_cookie_analytics;
                                        }
                                        if (!isset($tagmanager['cookie_analytics_title_'.$language['language_id']]) || empty($tagmanager['cookie_analytics_title_'.$language['language_id']])) {
                                            $tagmanager['cookie_analytics_title_'.$language['language_id']] = $text_cookie_analytics_title;
                                        }
                                        if (!isset($tagmanager['cookie_marketing_'.$language['language_id']]) || empty($tagmanager['cookie_marketing_'.$language['language_id']])) {
                                            $tagmanager['cookie_marketing_'.$language['language_id']] = $text_cookie_marketing;
                                        }
                                        if (!isset($tagmanager['cookie_marketing_title_'.$language['language_id']]) || empty($tagmanager['cookie_marketing_title_'.$language['language_id']])) {
                                            $tagmanager['cookie_marketing_title_'.$language['language_id']] = $text_cookie_marketing_title;
                                        }
                                        ?>
						            <div id="tab-language-<?php echo $language['code']; ?>" class="tab-pane<?php if(!$active) {echo ' active'; $active=true;} ?>">
							            <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_title_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_title; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_title_<?php echo $language['language_id']; ?>" name="cookie_title_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_title; ?>" class="form-control" value="<?php echo $tagmanager['cookie_title_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_ctitle;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_text_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_text; ?></label>
                                            <div class="col-sm-8">
                                                <textarea id="input-cookie_text_<?php echo $language['language_id']; ?>" rows="4" cols="70%" style="width:100%" name="cookie_text_<?php echo $language['language_id']; ?>"><?php echo $tagmanager['cookie_text_'.$language['language_id']]; ?></textarea>
                                                <div class="form-text"><?php echo $help_ctext2;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_text2_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_text2; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_text2_<?php echo $language['language_id']; ?>" name="cookie_text2_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_text2; ?>" class="form-control" value="<?php echo $tagmanager['cookie_text2_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_ctext;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_url_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_url; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_url_<?php echo $language['language_id']; ?>" name="cookie_url_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_url; ?>" class="form-control" value="<?php echo $tagmanager['cookie_url_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_clinktext;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_link; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-_<?php echo $language['language_id']; ?>" name="cookie_link_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_link; ?>" class="form-control" value="<?php echo $tagmanager['cookie_link_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_clink;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_button1_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_button1; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_button1_<?php echo $language['language_id']; ?>" name="cookie_button1_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_button1; ?>" class="form-control" value="<?php echo $tagmanager['cookie_button1_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_cookie_button1;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_button2_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_button2; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_button2_<?php echo $language['language_id']; ?>" name="cookie_button2_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_button2; ?>" class="form-control" value="<?php echo $tagmanager['cookie_button2_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_cookie_button2;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_button3_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_button3; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_button3_<?php echo $language['language_id']; ?>" name="cookie_button3_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_button3; ?>" class="form-control" value="<?php echo $tagmanager['cookie_button3_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_cookie_button3;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_essential_title_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_essential_title; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_essential_title_<?php echo $language['language_id']; ?>" name="cookie_essential_title_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_essential_title; ?>" class="form-control" value="<?php echo $tagmanager['cookie_essential_title_'.$language['language_id']];?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_essential_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_essential; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_essential_<?php echo $language['language_id']; ?>" name="cookie_essential_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_essential; ?>" class="form-control" value="<?php echo $tagmanager['cookie_essential_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_cookie_essential;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-4 control-label" for="input-cookie_analytics_title_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_analytics_title; ?></label>
                                        <div class="col-sm-8">
                                            <input type="text" id="input-cookie_analytics_title_<?php echo $language['language_id']; ?>" name="cookie_analytics_title_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_analytics_title; ?>" class="form-control" value="<?php echo $tagmanager['cookie_analytics_title_'.$language['language_id']];?>" />
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_analytics_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_analytics; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_analytics_<?php echo $language['language_id']; ?>" name="cookie_analytics_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_analytics; ?>" class="form-control" value="<?php echo $tagmanager['cookie_analytics_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_cookie_analytics;?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_marketing_title_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_marketing_title; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_marketing_title_<?php echo $language['language_id']; ?>" name="cookie_marketing_title_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_marketing_title; ?>" class="form-control" value="<?php echo $tagmanager['cookie_marketing_title_'.$language['language_id']];?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="input-cookie_marketing_<?php echo $language['language_id']; ?>"><?php echo $entry_cookie_marketing; ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" id="input-cookie_marketing_<?php echo $language['language_id']; ?>" name="cookie_marketing_<?php echo $language['language_id']; ?>" placeholder="<?php echo $entry_cookie_marketing; ?>" class="form-control" value="<?php echo $tagmanager['cookie_marketing_'.$language['language_id']];?>" />
                                                <div class="form-text"><?php echo $help_cookie_marketing;?></div>
                                            </div>
                                        </div>
						            </div>
						            <?php }?>
						        </div>
                            </div>
                        </div>
                        <!-- Tab26 Orders -->
                        <div id="gtm-orders" class="gtm-tab-content <?php if ($show_order){ ?>active<?php }?>">
                            <h2>Order Analytics Report</h2>
                            <div class="table-responsive col-sm-12" style="padding-top:20px">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                        <td class="text-left"><?php echo $column_date;?></td>
                                            <td class="text-left"><?php echo $column_oid;?></td>
                                            <td class="text-left"><?php echo $column_payment;?></td>
                                            <td class="text-left"><?php echo $column_payment_code;?></td>
                                            <td class="text-left"><?php echo $column_status;?></td>
                                            <td class="text-center"><?php echo $column_action;?></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($transactions)){?>
                                        <?php foreach ($transactions as $trans){?>
                                        <tr>
                                        <td class="text-left"><?php echo date((isset($short_date) ? $short_date : 'd/m/Y'), strtotime($trans['date_added']));?></td>
                                            <td class="text-left"><?php echo $trans['order_id'];?></td>
                                            <td class="text-left" width="250"><?php echo $trans['payment_method'];?></td>
                                            <td class="text-left" width="100"><?php echo $trans['payment_code'];?></td>
                                            <td class="text-left">
                                                <?php if ($trans['hit']=="0"){ ?><span style="color:red">Not Sent to Analytics</span><?php }?>
                                                <?php if ($trans['hit']=="1"){ ?>Sent to Analytics<?php }?>
                                                <?php if ($trans['hit']=="2"){ ?>Refund Sent to Analytics<?php }?>
                                            </td>
                                            <td class="text-center">
                                                <div id="div-send-<?php echo $trans['id'];?>" data-loading-text="loading" onclick="hitorder(<?php echo $trans['order_id'];?>,<?php echo $trans['id'];?>);" class="btn btn-primary" <?php echo ($trans['hit'] !='0' ? 'disabled' : '');?>
                                                    ><i class="fa fa-plus-circle"></i> <?php echo $button_send;?>
                                                </div>
                                                <div id="div-refund-<?php echo $trans['id'];?>" data-loading-text="loading" onclick="refundorder(<?php echo $trans['order_id'];?>,<?php echo $trans['id'];?>);" class="btn btn-primary" <?php echo ($trans['hit'] !='1' ? 'disabled' : '');?>
                                                    ><i class="fa fa-plus-circle"></i><?php echo $button_refund;?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php }?>
                                        <?php } else {?>
                                        <tr>
                                            <td class="text-center" colspan="6">No Results</td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <div class="row" style="margin-top:15px">
                                <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
                                <div class="col-sm-6 text-right"><?php echo $results;?></div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab27 -->
                        <div id="gtm-log" class="gtm-tab-content">
                            <h2>Log</h2>
                            <div class="table-responsive col-sm-12">
                                <textarea id="tmlog" wrap="off" rows="20" readonly class="form-control"><?php echo $log;?></textarea>
                            </div>
                             <div class="pull-right" style="padding-top:10px;padding-right:10px">
                                <a onclick="confirm('This will clear all the log data!') ? location.href='<?php echo $clear;?>' : false;" data-toggle="tooltip" title="Clear Log" class="btn btn-danger"><i class="fa fa-eraser"></i> Clear logs</a>
                            </div>
                        </div>
                        <!-- Tab28 -->
                        <div id="gtm-advance" class="gtm-tab-content">
                            <h2>Advance Settings</h2>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="tagmanager_server"><?php echo $entry_server; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="tagmanager_server" name="server" <?php if ($tagmanager['server']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_server;?></div>
                                </div>
                            </div>
                            <div id="server" style="display:<?php if (! $tagmanager['server']) { echo 'none'; }?>" class="form-group">
								<label class="col-sm-4 control-label" for="input-server-url"><?php echo $entry_server_url;?></label>
								<div class="col-sm-8">
									<input type="text" id="input-server-url" name="server_url" placeholder="<?php echo $entry_server_url;?>" class="form-control" value="<?php echo $tagmanager['server_url'];?>"/>
								    <div class="form-text"><?php echo $help_server_url;?></div>
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-admin"><?php echo $entry_admin; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="input-admin" name="admin" <?php if ($tagmanager['admin']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_admin;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-debug_order"><?php echo $entry_debug_order; ?></label>
                                <div class="col-sm-8">
                                    <label class="switch"><input type="checkbox" id="input-debug_order" name="debug_order" <?php if ($tagmanager['debug_order']) { echo 'checked'; }?>><span class="slider round"></span></label>
                                    <div class="form-text"><?php echo $help_debug_order;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-ptitle"><?php echo $entry_ptitle; ?></label>
                                <div class="col-sm-8">
                                    <select name="ptitle" id="input-ptitle" class="form-control">
                                        <?php
                                        foreach ($product_title as $ptitle) { ?>
                                        <?php if ($ptitle == $tagmanager['ptitle']) { ?>
                                        <option value="<?php echo $ptitle; ?>" selected="selected"><?php echo $ptitle; ?></option>
                                        <?php } else { ?>
                                        <option value="<?php echo $ptitle; ?>"><?php echo $ptitle; ?></option>
                                        <?php } ?>
                                        <?php } ?>
                                    </select>
                                    <div class="form-text"><?php echo $help_ptitle;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-product"><?php echo $entry_product; ?></label>
                                <div class="col-sm-8">
                                    <select name="pmap" id="input-product" class="form-control">
                                        <?php
                                        foreach ($product_map as $value) { ?>
                                        <?php if ($value == $tagmanager['pmap']) { ?>
                                        <option value="<?php echo $value; ?>" selected="selected"><?php echo $value; ?></option>
                                        <?php } else { ?>
                                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php } ?>
                                        <?php } ?>
                                    </select>
                                    <div class="form-text"><?php echo $help_product;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-idprefix"><?php echo $entry_id_prefix; ?></label>
                                <div class="col-sm-8">
                                    <input type="text" id="input-idprefix" name="id_prefix" placeholder="<?php echo $entry_id_prefix; ?>" class="form-control" value="<?php echo $tagmanager['id_prefix'];?>" />
                                    <div class="form-text"><?php echo $help_id_prefix;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-idsuffix"><?php echo $entry_id_suffix; ?></label>
                                <div class="col-sm-8">
                                    <input type="text" id="input-idsuffix" name="id_suffix" placeholder="<?php echo $entry_id_suffix; ?>" class="form-control" value="<?php echo $tagmanager['id_suffix'];?>" />
                                    <div class="form-text"><?php echo $help_id_suffix;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-route-checkout"><?php echo $entry_route_checkout;?></label>
                                 <div class="col-sm-8">
                                    <textarea rows="4" cols="70%" style="width:100%" id="input-route-checkout" name="route_checkout"><?php if (!empty($tagmanager['route_checkout'])) { echo $tagmanager['route_checkout']; }?></textarea>
                                    <div class="form-text"><?php echo $help_route;?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="input-route-success"><?php echo $entry_route_success;?></label>
                                <div class="col-sm-8">
                                    <textarea rows="4" cols="70%" style="width:100%" id="input-route-success" name="route_success"><?php if (!empty($tagmanager['route_success'])) { echo $tagmanager['route_success']; }?></textarea>
                                    <div class="form-text"><?php echo $help_route;?></div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab29 -->
                        <div id="gtm-about" class="gtm-tab-content">
                            <h2>Tag Manager Version <?php echo $text_version;?></h2>
                            <div class="row">
                                <div class="about-content">
                                    <?php echo $about_us_text;?>
                                    <table width="500" class="tmtable">
                                    <tbody>
                                        <tr>
                                            <td style="width:250px">Developed by</td>
                                            <td>AITS</td>
                                        </tr>
                                        <tr>
                                            <td>Website</td>
                                            <td>https://aits.pk</td>
                                        </tr>
                                        <tr>
                                            <td>Licenced Order</td>
                                            <td><?php echo (isset($order_id) ? $order_id : 'pirated');?></td>
                                        </tr>
                                        <tr>
                                            <td>Licenced email</td>
                                            <td><?php echo (isset($email) ? $email : ' ');?></td>
                                        </tr>
                                        <tr>
                                            <td>Licenced domain</td>
                                            <td><?php echo (isset($domain) ? $domain : ' ');?></td>
                                        </tr>
                                    </tbody>
                                </table> 
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="mp" value="1">
        <input type="hidden" name="route_confirm" value="<?php echo $tagmanager['route_confirm'];?>">
        <input type="hidden" name="vs" value="<?php echo (isset($tagmanager['vs']) ? $tagmanager['vs'] : '');?>">
        </form>
    </div>
</div>
<script>
       $('form').submit(function () {
    $(this).find('input[type="checkbox"]').each( function () {
        var checkbox = $(this);
        if( checkbox.is(':checked')) {
            checkbox.attr('value','1');
        } else {
            checkbox.after().append(checkbox.clone().attr({type:'hidden', value:0}));
            checkbox.prop('disabled', true);
        }
    })
});
</script>
<script>
$(function () {
$("#tagmanager_ua_status").click(function () {if ($(this).is(":checked")) {$("#ua").show();} else {$("#ua").hide();}});
$("#tagmanager_server").click(function () {if ($(this).is(":checked")) {$("#server").show();} else {$("#server").hide();}});
$("#tagmanager_tax_override").click(function () {if ($(this).is(":checked")) {$("#tax").show();} else {$("#tax").hide();}});
$("#tagmanager_ga4_status").click(function () {if ($(this).is(":checked")) {$("#ga4").show();} else {$("#ga4").hide();}});
$("#tagmanager_dimensions").click(function () {if ($(this).is(":checked")) {$("#dimensions").show();} else {$("#dimensions").hide();}});
$("#tagmanager_adword").click(function () {if ($(this).is(":checked")) {$("#conversion").show();} else {$("#conversion").hide();}});
$("#tagmanager_adword2").click(function () {if ($(this).is(":checked")) {$("#conversion2").show();} else {$("#conversion2").hide();}});
$("#tagmanager_aw_optional").click(function () {if ($(this).is(":checked")) {$("#aw_optional").show();} else {$("#aw_optional").hide();}});
$("#optimize").click(function () {if ($(this).is(":checked")) {$("#optimizeid").show();} else {$("#optimizeid").hide();}});
$("#greview").click(function () {if ($(this).is(":checked")) {$("#greviewid").show();} else {$("#greviewid").hide();}});
$("#tagmanager_pixel").click(function () {if ($(this).is(":checked")) {$("#pixel").show();} else {$("#pixel").hide();}});
$("#tagmanager_fb_api").click(function () {if ($(this).is(":checked")) {$("#fbapi").show();} else {$("#fbapi").hide();}});   
$("#tagmanager_alt_currency").click(function () {if ($(this).is(":checked")) {$("#altcurrency").show();} else {$("#altcurrency").hide();}});
$("#tagmanager_hotjar_status").click(function () {if ($(this).is(":checked")) {$("#hotjar").show();} else {$("#hotjar").hide();}});
$("#tagmanager_luckyorange_status").click(function () {if ($(this).is(":checked")) {$("#luckyorange").show();} else {$("#luckyorange").hide();}});   
$("#tagmanager_clarity_status").click(function () {if ($(this).is(":checked")) {$("#clarity").show();} else {$("#clarity").hide();}});    
$("#tagmanager_snap_pixel_status").click(function () {if ($(this).is(":checked")) {$("#snapchat").show();} else {$("#snapchat").hide();}});
$("#tagmanager_pinterest_status").click(function () {if ($(this).is(":checked")) {$("#pinterest").show();} else {$("#pinterest").hide();}});
$("#tagmanager_paypal_status").click(function () {if ($(this).is(":checked")) {$("#paypal").show();} else {$("#paypal").hide();}});  
$("#tagmanager_twitter_status").click(function () {if ($(this).is(":checked")) {$("#twitter").show();} else {$("#twitter").hide();}});      
$("#tagmanager_skroutz_status").click(function () {if ($(this).is(":checked")) {$("#skroutz").show();} else {$("#skroutz").hide();}});
$("#tagmanager_skroutz_manual_tax").click(function () {if ($(this).is(":checked")) {$("#skroutztax").show();} else {$("#skroutztax").hide();}});    
$("#tagmanager_glami_status").click(function () {if ($(this).is(":checked")) {$("#glami").show();} else {$("#glami").hide();}});	
$("#tagmanager_tiktok").click(function () {if ($(this).is(":checked")) {$("#tiktok").show();} else {$("#tiktok").hide();}});	     
$("#tagmanager_yandex_status").click(function () {if ($(this).is(":checked")) {$("#yandex").show();} else {$("#yandex").hide();}});
$("#tagmanager_zenchat_status").click(function () {if ($(this).is(":checked")) {$("#zenchat").show();} else {$("#zenchat").hide();}});
$("#tagmanager_hubspot_status").click(function () {if ($(this).is(":checked")) {$("#hubspot").show();} else {$("#hubspot").hide();}});
$("#tagmanager_smartsupp_status").click(function () {if ($(this).is(":checked")) {$("#smartsupp").show();} else {$("#smartsupp").hide();}});
$("#tagmanager_zopimchat_status").click(function () {if ($(this).is(":checked")) {$("#zopimchat").show();} else {$("#zopimchat").hide();}});
$("#tagmanager_freshchat").click(function () {if ($(this).is(":checked")) {$("#freshchat").show();} else {$("#freshchat").hide();}});
$("#tagmanager_bing_status").click(function () {if ($(this).is(":checked")) {$("#bing").show();} else {$("#bing").hide();}});
$("#tagmanager_matomo_status").click(function () {if ($(this).is(":checked")) {$("#matomo").show();} else {$("#matomo").hide();}});
$("#tagmanager_cookie").click(function () {if ($(this).is(":checked")) {$("#cookie").show();} else {$("#cookie").hide();}});
$("#tagmanager_amp").click(function () {if ($(this).is(":checked")) {$("#amp").show();} else {$("#amp").hide();}});
$("#tagmanager_admitad").click(function () {if ($(this).is(":checked")) {$("#admitad").show();} else {$("#admitad").hide();}});
$("#tagmanager_retag").click(function () {if ($(this).is(":checked")) {$("#retag").show();} else {$("#retag").hide();}});
$("#tagmanager_performant").click(function () {if ($(this).is(":checked")) {$("#performant").show();} else {$("#performant").hide();}});
$("#tagmanager_cj").click(function () {if ($(this).is(":checked")) {$("#cj").show();} else {$("#cj").hide();}});    
$("#tagmanager_da").click(function () {if ($(this).is(":checked")) {$("#da").show();} else {$("#da").hide();}});
$("#tagmanager_performant_tax").click(function () {if ($(this).is(":checked")) {$("#performanttax").show();} else {$("#performanttax").hide();}});  
$("#tagmanager_performant_currency").click(function () {if ($(this).is(":checked")) {$("#performantcurrency").show();} else {$("#performantcurrency").hide();}});    
$("#tagmanager_affgateway_status").click(function () {if ($(this).is(":checked")) {$("#affgateway").show();} else {$("#affgateway").hide();}});
$("#tagmanager_sendinblue_status").click(function () {if ($(this).is(":checked")) {$("#sendinblue").show();} else {$("#sendinblue").hide();}});
$("#tagmanager_linkwise_status").click(function () {if ($(this).is(":checked")) {$("#linkwise").show();} else {$("#linkwise").hide();}});
$("#tagmanager_badge").click(function () {if ($(this).is(":checked")) {$("#badge").show();} else {$("#badge").hide();}});
$("#tagmanager_klaviyo_status").click(function () {if ($(this).is(":checked")) {$("#klaviyo").show();} else {$("#klaviyo").hide();}});
    });
</script>    
<script>    
    $(function () {
        $('#color1').colorpicker({color: '<?php echo (!empty($tagmanager['cookie_bg_popup']) ? $tagmanager['cookie_bg_popup'] :'#3B3646');?>',
            colorSelectors: {'black': '#000000','white': '#ffffff','red': '#FF0000','default': '#777777','primary': '#337ab7','success': '#5cb85c','info': '#5bc0de','warning': '#f0ad4e','danger': '#d9534f'            },customClass: 'colorpicker-2x',sliders: {saturation: {maxLeft:200,maxTop: 200},hue: {maxTop: 200},alpha: {maxTop: 200}}
        });
        $('#color2').colorpicker({color: '<?php echo (!empty($tagmanager['cookie_text_popup']) ? $tagmanager['cookie_text_popup'] :'#ffffff');?>',
            colorSelectors: {'black': '#000000','white': '#ffffff','red': '#FF0000','default': '#777777','primary': '#337ab7','success': '#5cb85c','info': '#5bc0de','warning': '#f0ad4e','danger': '#d9534f'            },customClass: 'colorpicker-2x',sliders: {saturation: {maxLeft:200,maxTop: 200},hue: {maxTop: 200},alpha: {maxTop: 200}}
        });
        $('#color3').colorpicker({color: '<?php echo (!empty($tagmanager['cookie_bg_button']) ? $tagmanager['cookie_bg_button'] : '#EE4B5A');?>',
            colorSelectors: {'black': '#000000','white': '#ffffff','red': '#FF0000','default': '#777777','primary': '#337ab7','success': '#5cb85c','info': '#5bc0de','warning': '#f0ad4e','danger': '#d9534f'            },customClass: 'colorpicker-2x',sliders: {saturation: {maxLeft:200,maxTop: 200},hue: {maxTop: 200},alpha: {maxTop: 200}}
        });
        $('#color4').colorpicker({color: '<?php echo (!empty($tagmanager['cookie_text_button']) ? $tagmanager['cookie_text_button'] : '#ffffff');?>',
            colorSelectors: {'black': '#000000','white': '#ffffff','red': '#FF0000','default': '#777777','primary': '#337ab7','success': '#5cb85c','info': '#5bc0de','warning': '#f0ad4e','danger': '#d9534f'            },customClass: 'colorpicker-2x',sliders: {saturation: {maxLeft:200,maxTop: 200},hue: {maxTop: 200},alpha: {maxTop: 200}}
        });
        $('#color5').colorpicker({color: '<?php echo (!empty($tagmanager['cookie_heading_color']) ? $tagmanager['cookie_heading_color'] : '#EE4B5A');?>',
            colorSelectors: {'black': '#000000','white': '#ffffff','red': '#FF0000','default': '#777777','primary': '#337ab7','success': '#5cb85c','info': '#5bc0de','warning': '#f0ad4e','danger': '#d9534f'            },customClass: 'colorpicker-2x',sliders: {saturation: {maxLeft:200,maxTop: 200},hue: {maxTop: 200},alpha: {maxTop: 200}}
        });
        $('#color6').colorpicker({color: '<?php echo (!empty($tagmanager['cookie_badge_color']) ? $tagmanager['cookie_badge_color'] : '#3B3646');?>',
            colorSelectors: {'black': '#000000','white': '#ffffff','red': '#FF0000','default': '#777777','primary': '#337ab7','success': '#5cb85c','info': '#5bc0de','warning': '#f0ad4e','danger': '#d9534f'            },customClass: 'colorpicker-2x',sliders: {saturation: {maxLeft:200,maxTop: 200},hue: {maxTop: 200},alpha: {maxTop: 200}}
        });
    });
</script>
<script>
    function hitorder(orderid,id) {
    		$.ajax({
			url: '<?php echo $send_url;?>&oid=' + orderid + '&v=<?php echo $tagmanager['vs'];?>',
			type: 'get',
			dataType: 'json',
			beforeSend: function() {
				$("#div-send-" + id).prop('disabled',true);
			},
			complete: function() {
				
				
			},
			success: function(result) {
				if (!result['error']) {
					$('#content > .container-fluid').prepend('<div id="tmalert" class="alert alert-success alert-dismissible "><i class="fa fa-check-circle"></i><span style="padding-left:10px">' + result['message'] + '</span></div>');
					$("#div-send-"+id).attr('disabled','disabled');
				} else {
					$('#content > .container-fluid').prepend('<div id="tmalert" class="alert alert-warning alert-dismissible "><i class="fa fa-check-circle"></i><span style="padding-left:10px">' + result['message'] + '</span></div>');
				}
				var timer;
				timer = setTimeout(function () {
            		$('#tmalert').hide(500);
        		}, 3000);
			},
			
		});
	}
	function refundorder(orderid,id) {
		$.ajax({
			url: '<?php echo $refund_url;?>&oid=' + orderid + '&v=<?php echo $tagmanager['vs'];?>&order_status_id=7',
			type: 'get',
			dataType: 'json',
			
			beforeSend: function() {
				$("#div-refund-" + id).prop('disabled',true);
			},
			success: function(result) {
				if (!result['error']) {
					$('#content > .container-fluid').prepend('<div id="tmalert" class="alert alert-success alert-dismissible "><i class="fa fa-check-circle"></i><span style="padding-left:10px">' + result['message'] + '</span></div>');
					$("#div-refund-"+id).attr('disabled','disabled');
				} else {
					$('#content > .container-fluid').prepend('<div id="tmalert" class="alert alert-warning alert-dismissible "><i class="fa fa-check-circle"></i><span style="padding-left:10px">' + result['message'] + '</span></div>');
				}
				var timer;
				timer = setTimeout(function () {
            		$('#tmalert').hide(500);
        		}, 3000);
			},
			complete: function(result) {

			},
		});
	}
	$(function() {
    $("div.gtm-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.gtm-tab>div.gtm-tab-content").removeClass("active");
        $("div.gtm-tab>div.gtm-tab-content").eq(index).addClass("active");
        document.body.scrollTop = 0; 
        document.documentElement.scrollTop = 0; 
    });
});
</script>
<?php echo $footer; ?>