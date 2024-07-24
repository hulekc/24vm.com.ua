<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">

<?php 
	$icq_h = '36px';
	$icq_max_h = '150px';
?>
<script>
var icq_h = '<?php echo $icq_h; ?>';
var icq_max_h = '<?php echo $icq_max_h; ?>';
var text_copied = '<?php echo $text_copied; ?>';

<?php if (!empty($cgp_settings)) { ?>
	<?php echo $cgp_settings; ?>
<?php } ?>
</script>

<style>
#content {padding-bottom: 0 !important;}
#content input::placeholder, #content textarea::placeholder {color: #ccc;}
.nm {margin: 0 !important;}
.np {padding: 0 !important;}
.npt {padding-top: 0 !important;}
.relative {position: relative;}
.disabled {cursor: not-allowed; opacity: 0.65;}
code, kbd {padding: 1px 5px; font-size: 100%; display: inline-block;}
.form-control {color: #222;padding: 5px 13px;}
.panel-body {padding-top: 10px;}
.page-header {margin-bottom: 0;}
h1 img {width: 32px !important;height: 32px !important;}
h1 b {font-size: 30px !important;}
#tab-extended .form-group label {font-family: monospace;}
#form-chatgpt-pro {opacity:0; transition:opacity 500ms;}
#tab-chat {margin-top: -30px;clear: both;}
#chat {height: 300px; overflow: auto; padding: 0 0 30px; color: #222; font-size: 14px; background: #f9f9f9; border: 1px solid #ddd; border-top: 2px solid #bfbfbf;}
.chat-query {position: relative; margin-top: <?php echo $icq_h; ?>;}
#input-chat-query {padding: 7px 13px; padding-right: 70px; resize: none; overflow: auto; max-height: <?php echo $icq_max_h; ?>; height: <?php echo $icq_h; ?>; position: absolute; bottom: 0; font-size: 13px;}
#input-chat-query::-webkit-scrollbar {width: 7px;}
#input-chat-query::-webkit-scrollbar-track {background: #f1f1f1;} 
#input-chat-query::-webkit-scrollbar-thumb {background: #888;}
#input-chat-query::-webkit-scrollbar-thumb:hover {background: #555;}
#chat-send, #chat-stop {position: absolute; bottom: 6px; right: 12px;}
#chat-stop {background-color: #fadbdb;color: darkred;}
.chat-message {min-height: 30px; padding: 10px; border-top: 1px solid #ddd; box-sizing: content-box;}
.chat-message:first-child {border-top: none;}
.chat-message > img {float: left;}
.chat-message .content {margin-left: 50px;margin-right: 30px;}
.chat-message .fa-refresh {cursor: pointer;}
.chat-message .done {user-select: none;}
.chat-message .fa.fa-cog {color: grey;}
.chat-message.user {background: #fff;}
.chat-message.user .content {white-space: pre-wrap;}
.chat-message.assistant {}
.flag {display: inline-block; height: 24px; width: 32px; vertical-align: text-bottom; background: rgb(255,213,0); background: linear-gradient(0deg, rgba(255,213,0,1) 50%, rgba(0,91,187,1) 50%); position: absolute; bottom: 6px;}
#tab-content .tab-pane a {font-weight: bold;}
footer {display: none;}
.hypnoblock .donut_btn {line-height: 20px; font-size: 15px; color: #777; font-weight: bold; margin-top: 10px;}
.hypnoblock .donut_btn img {height: 20px; display: inline; line-height: 20px; vertical-align: text-bottom;}
#tab-templates {padding-bottom: 200px;}
#tab-templates .nav-tabs {margin-bottom: 10px;}
#tab-templates .control-label {margin-bottom: 5px;}
#tab-templates textarea {width: 100% !important; height: 60px;}
#tab-templates .tpl-list .fa-minus-circle {position: absolute; line-height: inherit; top: 50%; right: 10px; transform: translate(-50%, -50%); cursor: pointer;}
.tpl-accordion .fa-minus-circle {line-height: initial; margin-right: 10px; cursor: pointer;}
.tpl-accordion .panel-title {text-decoration: underline;}
.variable-info .fa-clone {cursor: pointer;}
.variable-info .fa-minus-circle {cursor: pointer; margin-right: 5px;}
.var-edit {position: absolute; top: 50%; right: 15px; transform: translate(0, -50%);}
@media (max-width: 767px) {
	h1 svg {width: 26px !important; height: 26px !important;}
	h1 b {font-size: 20px !important;}
	#form-chatgpt-pro .nav-tabs a {padding: 8px 8px;}
}
</style>

  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-chatgpt-pro" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-chatgpt-pro" class="form-horizontal" autocomplete="off">

          <ul class="nav nav-tabs">
            <li class="<?php echo ($license ? 'active' : ''); ?>"><a href="#tab-chat" data-toggle="tab"><?php echo $tab_chat; ?></a></li>
            <li class=""><a href="#tab-general" data-toggle="tab"><?php echo $tab_general; ?></a></li>
            <li class=""><a href="#tab-extended" data-toggle="tab"><?php echo $tab_extended; ?></a></li>
            <li class=""><a href="#tab-templates" data-toggle="tab"><?php echo $tab_templates; ?></a></li>
            <li class="<?php echo ($license ? '' : 'active'); ?>"><a href="#tab-info" data-toggle="tab"><?php echo $tab_info; ?></a></li>
          </ul>


     <div class="tab-content">

			<!-------- TAB CHAT -------->
      <div class="tab-pane <?php echo ($license ? 'active' : ''); ?>" id="tab-chat">
         <div class="form-group">
          <label class="col-sm-2 control-label hidden-xs"><?php echo $entry_chat_response; ?></label>
          <div class="col-sm-10 col-lg-8">
          	<div id="chat"></div>
          </div>
          <div class="donate_block"><?php echo $help_donate; ?></div>
         </div>
         <div class="form-group">
          <label class="col-sm-2 control-label hidden-xs" for="input-chat-query"><?php echo $entry_chat_query; ?></label>
          <div class="col-sm-10 col-lg-8">
           <div class="chat-query">
            <textarea name="chat_query" rows="1" id="input-chat-query" class="form-control" autofocus></textarea><!--autofocus-->
            <button id="chat-send">Enter</button>
            <button id="chat-stop" class="hidden">Stop</button>
           </div>
           <?php echo $help_enter_shift; ?>
          </div>
         </div>
      </div><!--tab-chat-->


      <div class="tab-pane" id="tab-general">
       <fieldset>
        <legend><?php echo $text_general; ?></legend>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
				<div class="col-sm-10">
				 <select name="chatgpt_pro_status" id="input-status" class="form-control">
				  <?php if ($chatgpt_pro_status) { ?>
				  <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
				  <option value="0"><?php echo $text_disabled; ?></option>
				  <?php } else { ?>
				  <option value="1"><?php echo $text_enabled; ?></option>
				  <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
				  <?php } ?>
				 </select>
				</div>
			</div>

	        <div class="form-group <?php echo ($license ? 'hidden' : ''); ?>">
	         <label class="col-sm-2 control-label" for="input-license"><span data-toggle="tooltip" title="<?php echo $help_license; ?>"><?php echo $entry_license; ?></span></label>
	         <div class="col-sm-10">
	          <input type="text" name="chatgpt_pro_license" value="<?php echo $chatgpt_pro_license; ?>" placeholder="<?php echo $entry_license; ?>" id="input-license" class="form-control" />
	          <?php echo $help_license_info; ?>
	         </div>
	        </div>

	        <div class="form-group">
	         <label class="col-sm-2 control-label" for="input-api_key"><span data-toggle="tooltip" title="<?php echo $help_api_key; ?>"><?php echo $entry_api_key; ?></span></label>
	         <div class="col-sm-10">
	          <input type="text" name="chatgpt_pro_api_key" value="<?php echo $chatgpt_pro_api_key; ?>" placeholder="<?php echo (is_null($chatgpt_pro_api_key) ? $entry_api_key : $text_api_secure); ?>" id="input-api_key" class="form-control" />
	          <?php echo $help_api_key_info; ?>
	         </div>
	        </div>
	        <div class="form-group">
	         <label class="col-sm-2 control-label" for="input-api_key_extra"><span data-toggle="tooltip" title="<?php echo $help_api_key_extra; ?>"><?php echo $entry_api_key_extra; ?></span></label>
	         <div class="col-sm-10">
	          <textarea id="input-api_key_extra" name="chatgpt_pro_api_key_extra" rows="3" placeholder="<?php echo (is_null($chatgpt_pro_api_key_extra) ? $entry_api_key_extra : $text_api_extra_secure); ?>" class="form-control"><?php echo $chatgpt_pro_api_key_extra; ?></textarea>
	          <?php echo $help_api_key_extra_info; ?>
	         </div>
	        </div>

	        <div class="form-group hidden">
	         <label class="col-sm-2 control-label" for="input-quick_chat"><span data-toggle="tooltip" title="<?php echo $help_quick_chat; ?>"><?php echo $entry_quick_chat; ?></span></label>
	         <div class="col-sm-10">
				 <select name="chatgpt_pro_quick_chat" id="input-quick_chat" class="form-control">
				  <?php if ($chatgpt_pro_quick_chat) { ?>
				  	<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
				  	<option value="0"><?php echo $text_disabled; ?></option>
				  <?php } else { ?>
				  	<option value="1"><?php echo $text_enabled; ?></option>
				  	<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
				  <?php } ?>
				 </select>
	         </div>
	        </div>

       </fieldset>
      </div><!--tab-general-->


      <div class="tab-pane" id="tab-extended">
      
      <?php if ($free) { ?>
      <div class="modal-content"><div class="modal-header"><h4 class="modal-title">Free Demonstration</h4></div><div class="modal-body text-danger"><p>Этот функционал доступен в версии:</p><h4><b>Opencart ChatGPT Pro</b></h4></div></div><br>
      <?php } ?>

       <fieldset>
        <legend><?php echo $text_extended; ?></legend>

        <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
          <?php echo $help_extended_info; ?>
         </div>
        </div>

        <div class="form-group">
         <label class="col-sm-2 control-label" for="input-model"><?php echo $entry_model; ?></label>
         <div class="col-sm-10">
          <select name="chatgpt_pro_params[model]" id="input-model" class="form-control">
			<?php foreach ($gpt_models as $gpt_model) { ?>
			  <?php if ($gpt_model == $chatgpt_pro_model) { ?>
			    <option value="<?php echo $gpt_model; ?>" selected="selected"><?php echo $gpt_model; ?></option>
			  <?php } else { ?>
			    <option value="<?php echo $gpt_model; ?>"><?php echo $gpt_model; ?></option>
			  <?php } ?>
			<?php } ?>
          </select>
          <?php echo $help_model_info; ?>
         </div>
        </div>

        <div class="form-group">
         <label class="col-sm-2 control-label" for="input-temperature"><?php echo $entry_temperature; ?></label>
         <div class="col-sm-10">
          <input type="text" name="chatgpt_pro_params[temperature]" value="<?php echo $chatgpt_pro_temperature; ?>" placeholder="<?php echo $text_default; ?>: 1" id="input-temperature" class="form-control" />
          <?php echo $help_temperature_info; ?>
         </div>
        </div>

        <div class="form-group">
         <label class="col-sm-2 control-label" for="input-top_p"><?php echo $entry_top_p; ?></label>
         <div class="col-sm-10">
          <input type="text" name="chatgpt_pro_params[top_p]" value="<?php echo $chatgpt_pro_top_p; ?>" placeholder="<?php echo $text_default; ?>: 1" id="input-top_p" class="form-control" />
          <?php echo $help_top_p_info; ?>
         </div>
        </div>

        <div class="form-group">
         <label class="col-sm-2 control-label" for="input-presence_penalty"><?php echo $entry_presence_penalty; ?></label>
         <div class="col-sm-10">
          <input type="text" name="chatgpt_pro_params[presence_penalty]" value="<?php echo $chatgpt_pro_presence_penalty; ?>" placeholder="<?php echo $text_default; ?>: 0" id="input-presence_penalty" class="form-control" />
          <?php echo $help_presence_penalty_info; ?>
         </div>
        </div>

        <div class="form-group">
         <label class="col-sm-2 control-label" for="input-frequency_penalty"><?php echo $entry_frequency_penalty; ?></label>
         <div class="col-sm-10">
          <input type="text" name="chatgpt_pro_params[frequency_penalty]" value="<?php echo $chatgpt_pro_frequency_penalty; ?>" placeholder="<?php echo $text_default; ?>: 0" id="input-frequency_penalty" class="form-control" />
          <?php echo $help_frequency_penalty_info; ?>
         </div>
        </div>

       </fieldset>
      </div><!--tab-extended-->


      <div class="tab-pane" id="tab-templates">
      
      <?php if ($free) { ?>
      <div class="modal-content"><div class="modal-header"><h4 class="modal-title">Free Demonstration</h4></div><div class="modal-body text-danger"><p>Этот функционал доступен в версии:</p><h4><b>Opencart ChatGPT Pro</b></h4></div></div><br>
      <?php } ?>

       <fieldset>

<nav class="navbar navbar-default hidden-md hidden-lg">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-tabs" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand"><?php echo $entry_tpl_product; ?></span>
    </div>

    <div class="collapse navbar-collapse" id="mobile-tabs">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#tab_tpl_product" data-toggle="tab"><?php echo $entry_tpl_product; ?></a></li>
        <li><a href="#tab_tpl_category" data-toggle="tab"><?php echo $entry_tpl_category; ?></a></li>
        <?php if ($db_man_descr) { ?>
        <li><a href="#tab_tpl_manufacturer" data-toggle="tab"><?php echo $entry_tpl_manufacturer; ?></a></li>
        <?php } ?>
        <?php if ($ocfilter_seo_pages) { ?>
        <li><a href="#tab_tpl_ocfilter" data-toggle="tab"><?php echo $entry_tpl_ocfilter; ?></a></li>
        <?php } ?>
        <hr class="tpl-li-new">
		<?php $tpl_row = 0; ?>
        <?php foreach ($chatgpt_pro_customtpl as $customtpl) { ?>
        <li><a href="#tab_tpl_<?php echo $tpl_row; ?>" data-toggle="tab"><?php echo $customtpl['name']; ?><i class="fa fa-minus-circle pull-right"></i></a></li>
        <?php $tpl_row++; ?>
        <?php } ?>
        <hr class="tpl-li-new-end">
        <li class="text-center"><span onclick="addTpl();" class="btn btn-default btn-sm"><?php echo $entry_add_tpl; ?></span></li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
    <div class="col-md-2 hidden-xs hidden-sm">
      <ul class="nav nav-pills nav-stacked tpl-list">
        <li class="active"><a href="#tab_tpl_product" data-toggle="tab"><?php echo $entry_tpl_product; ?></a></li>
        <li><a href="#tab_tpl_category" data-toggle="tab"><?php echo $entry_tpl_category; ?></a></li>
        <?php if ($db_man_descr) { ?>
        <li><a href="#tab_tpl_manufacturer" data-toggle="tab"><?php echo $entry_tpl_manufacturer; ?></a></li>
        <?php } ?>
        <?php if ($ocfilter_seo_pages) { ?>
        <li><a href="#tab_tpl_ocfilter" data-toggle="tab"><?php echo $entry_tpl_ocfilter; ?></a></li>
        <?php } ?>
        <hr class="tpl-li-new">
		<?php $tpl_row = 0; ?>
        <?php foreach ($chatgpt_pro_customtpl as $customtpl) { ?>
        <li><a href="#tab_tpl_<?php echo $tpl_row; ?>" data-toggle="tab"><?php echo $customtpl['name']; ?><i class="fa fa-minus-circle pull-right"></i></a></li>
        <?php $tpl_row++; ?>
        <?php } ?>
        <hr class="tpl-li-new-end">
        <li class="text-center"><span onclick="addTpl();" class="btn btn-default btn-sm"><?php echo $entry_add_tpl; ?></span></li>
      </ul>
    </div>
    <div class="col-md-10">
      <div id="tab_tpl_templates" class="tab-content row">
		<?php $tpl_row = 0; ?>
		<?php $tpl_field_row = 0; ?>
		
		
        <div class="tab_tpl tab-pane col-md-12 active" id="tab_tpl_product">
        	<div class="row">
        		<div class="col-md-8 template-data">
<!-- PRODUCT TEMPLATE -->
<span class="btn btn-default btn-sm pull-right tpl-edit"><i class="fa fa-pencil"></i></span>
<h3 class="tpl-name"><?php echo $text_tpl_product; ?></h3>

<input type="hidden" name="chatgpt_pro_tpl[product][route]" value="catalog/product">

<input type="hidden" name="chatgpt_pro_tpl[product][var][manufacturer][selector][]" value="manufacturer">
<input type="hidden" name="chatgpt_pro_tpl[product][var][manufacturer][selector][]" value="manufacturer_id">

<input type="hidden" name="chatgpt_pro_tpl[product][var][name][selector]" value="product_description[LANG_ID][name]">
<?php if ($db_product_meta_h1) { ?>
<input type="hidden" name="chatgpt_pro_tpl[product][var][meta_h1][selector]" value="product_description[LANG_ID][meta_h1]">
<?php } ?>
<input type="hidden" name="chatgpt_pro_tpl[product][var][meta_title][selector]" value="product_description[LANG_ID][meta_title]">
<input type="hidden" name="chatgpt_pro_tpl[product][var][meta_description][selector]" value="product_description[LANG_ID][meta_description]">
<input type="hidden" name="chatgpt_pro_tpl[product][var][meta_keyword][selector]" value="product_description[LANG_ID][meta_keyword]">
<input type="hidden" name="chatgpt_pro_tpl[product][var][description][selector]" value="product_description[LANG_ID][description]">
<input type="hidden" name="chatgpt_pro_tpl[product][var][tag][selector]" value="product_description[LANG_ID][tag]">
<input type="hidden" name="chatgpt_pro_tpl[product][var][model][selector]" value="model">
<input type="hidden" name="chatgpt_pro_tpl[product][var][price][selector]" value="price">
<?php if ($db_main_category) { ?>
<input type="hidden" name="chatgpt_pro_tpl[product][var][main_category][selector]" value="main_category_id">
<?php } ?>
<input type="hidden" name="chatgpt_pro_tpl[product][var][attributes]" value="product">

<?php $custom_var = false; ?>
<?php if (!empty($chatgpt_pro_tpl['product']['var'])) { ?>
<?php foreach ($chatgpt_pro_tpl['product']['var'] as $key => $var) { ?>
	<?php if (!empty($var['title'])) { ?>
		<?php $custom_var = true; ?>
		<input class="custom_var" type="hidden" name="chatgpt_pro_tpl[product][var][<?php echo $key; ?>][title]" value="<?php echo $var['title']; ?>">
		<input class="custom_var" type="hidden" name="chatgpt_pro_tpl[product][var][<?php echo $key; ?>][selector]" value="<?php echo $var['selector']; ?>">
	<?php } ?>
<?php } ?>
<?php } ?>

<div class="panel-group tpl-accordion" id="accordion_tpl_product" role="tablist">

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[product][field][name][switch]" <?php echo !empty($chatgpt_pro_tpl['product']['field']['name']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#product_name" aria-expanded="true"><?php echo $entry_tpl_product_name; ?></a>
      </h4>
    </div>
    <div id="product_name" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['product']['field']['name']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[product][field][name][selector]" value="product_description[LANG_ID][name]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[product][field][name][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['product']['field']['name']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['product']['field']['name']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

<?php if ($db_product_meta_h1) { ?>
  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[product][field][meta_h1][switch]" <?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_h1']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#product_meta_h1" aria-expanded="true"><?php echo $entry_tpl_meta_h1; ?></a>
      </h4>
    </div>
    <div id="product_meta_h1" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_h1']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[product][field][meta_h1][selector]" value="product_description[LANG_ID][meta_h1]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[product][field][meta_h1][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_h1']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['product']['field']['meta_h1']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->
<?php } ?>

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[product][field][meta_title][switch]" <?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_title']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#product_meta_title" aria-expanded="true"><?php echo $entry_tpl_meta_title; ?></a>
      </h4>
    </div>
    <div id="product_meta_title" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_title']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[product][field][meta_title][selector]" value="product_description[LANG_ID][meta_title]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[product][field][meta_title][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_title']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['product']['field']['meta_title']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[product][field][meta_description][switch]" <?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_description']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#product_meta_description" aria-expanded="true"><?php echo $entry_tpl_meta_description; ?></a>
      </h4>
    </div>
    <div id="product_meta_description" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_description']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[product][field][meta_description][selector]" value="product_description[LANG_ID][meta_description]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[product][field][meta_description][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_description']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['product']['field']['meta_description']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[product][field][description][switch]" <?php echo !empty($chatgpt_pro_tpl['product']['field']['description']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#product_description" aria-expanded="true"><?php echo $entry_tpl_description; ?></a>
      </h4>
    </div>
    <div id="product_description" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['product']['field']['description']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[product][field][description][selector]" value="product_description[LANG_ID][description]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[product][field][description][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['product']['field']['description']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['product']['field']['description']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[product][field][meta_keyword][switch]" <?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_keyword']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#product_meta_keyword" aria-expanded="true"><?php echo $entry_tpl_meta_keyword; ?></a>
      </h4>
    </div>
    <div id="product_meta_keyword" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_keyword']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[product][field][meta_keyword][selector]" value="product_description[LANG_ID][meta_keyword]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[product][field][meta_keyword][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['product']['field']['meta_keyword']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['product']['field']['meta_keyword']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[product][field][tag][switch]" <?php echo !empty($chatgpt_pro_tpl['product']['field']['tag']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#product_tag" aria-expanded="true"><?php echo $entry_tpl_tag; ?></a>
      </h4>
    </div>
    <div id="product_tag" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['product']['field']['tag']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[product][field][tag][selector]" value="product_description[LANG_ID][tag]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[product][field][tag][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['product']['field']['tag']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['product']['field']['tag']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->
  
  
  <?php if (!empty($chatgpt_pro_tpl['product']['field'])) { ?>
  <?php foreach ($chatgpt_pro_tpl['product']['field'] as $key => $field) { ?>
	  <?php if (is_numeric($key)) { ?>
	  <!-- TPL BLOCK -->
	  <div class="panel panel-default">
	  	<input type="hidden" name="chatgpt_pro_tpl[product][field][<?php echo $tpl_field_row; ?>][name]" value="<?php echo $field['name']; ?>">
	    <div class="panel-heading" role="tab">
	    	<i class="fa fa-lg fa-minus-circle pull-left text-danger hidden"></i>
			<div class="checkbox checbox-switch switch-success pull-right np">
			    <label><input type="checkbox" name="chatgpt_pro_tpl[product][field][<?php echo $tpl_field_row; ?>][switch]" <?php echo !empty($field['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
			    </label>
			</div>
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" href="#product_<?php echo $tpl_field_row; ?>" aria-expanded="true"><?php echo $field['name']; ?></a>
	      </h4>
	    </div>
	    <div id="product_<?php echo $tpl_field_row; ?>" class="panel-collapse collapse <?php echo !empty($field['switch']) ? 'in' : ''; ?>" role="tabpanel">
	      <div class="panel-body">
	      	<div class="form-control-static npt">
	      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
	          <input type="text" name="chatgpt_pro_tpl[product][field][<?php echo $tpl_field_row; ?>][selector]" value="<?php echo $field['selector'] ? $field['selector'] : ''; ?>" placeholder="product_description[LANG_ID][new_field]" class="form-control">
	        </div>
	        
			<?php if (strpos($field['selector'], 'LANG_ID') !== false) { ?>
			    <ul class="nav nav-tabs" id="language">
			      <?php foreach ($languages as $language) { ?>
			        <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
			      <?php } ?>
			    </ul>
			    <label class="control-label"><?php echo $entry_tpl_template; ?></label>
			    <div class="tab-content">
			      <?php foreach ($languages as $language) { ?>
			        <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
				        <div class="form-group nm np">
				          <textarea name="chatgpt_pro_tpl[product][field][<?php echo $tpl_field_row; ?>][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($field['tpl'][$language['language_id']]) ? $field['tpl'][$language['language_id']] : ''; ?></textarea>
				        </div>
			        </div>
			      <?php } ?>
			    </div>
			<?php } else { ?>
			    <label class="control-label"><?php echo $entry_tpl_template; ?></label>
			    <textarea name="chatgpt_pro_tpl[product][field][<?php echo $tpl_field_row; ?>][tpl]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo (!empty($field['tpl']) && !is_array($field['tpl'])) ? $field['tpl'] : ''; ?></textarea>
			<?php } ?>
	      </div>
	    </div>
	  </div><!-- TPL BLOCK END -->
	  <?php $tpl_field_row++; ?>
	  <?php } ?>
  <?php } ?>
  <?php } ?>

</div>
<span onclick="addTplField('product');" class="btn btn-default btn-sm"><?php echo $entry_add_tpl_field; ?></span>
<!-- PRODUCT TEMPLATE END -->
	            </div><!--/template-data-->
	            
        		<div class="col-md-4 variable-info">
					<div class="panel panel-default">
					  <div class="panel-heading relative">
					  	<b><?php echo $entry_tpl_variable; ?></b>
					  	<?php if ($custom_var) { ?>
					  		<span class="btn btn-default btn-sm var-edit"><i class="fa fa-pencil"></i></span>
					  	<?php } ?>
					  </div>
					  <div class="panel-body">
					    <?php echo $entry_tpl_product_vars; ?>
					    <?php if (!empty($chatgpt_pro_tpl['product']['var'])) { ?>
					    <?php foreach ($chatgpt_pro_tpl['product']['var'] as $key => $var) { ?>
						    <?php if (!empty($var['title'])) { ?>
						    	<p><i class="fa fa-minus-circle text-danger hidden"></i> <i class="fa fa-clone"></i> <code>[<?php echo $key; ?>]</code> - <?php echo $var['title']; ?></p>
						    <?php } ?>
					    <?php } ?>
					    <?php } ?>
					  </div>
					</div>
					<span onclick="addTplVar(event, 'product');" class="btn btn-default btn-sm"><?php echo $entry_add_tpl_var; ?></span>
	            </div><!--/variable-info-->
            </div>
        </div><!--/tab_tpl_product-->
        
        <!----------------------------------------------------------->
        
        <div class="tab_tpl tab-pane col-md-12" id="tab_tpl_category">
        	<div class="row">
        		<div class="col-md-8 template-data">
<!-- CATEGORY TEMPLATE -->
<span class="btn btn-default btn-sm pull-right tpl-edit"><i class="fa fa-pencil"></i></span>
<h3 class="tpl-name"><?php echo $text_tpl_category; ?></h3>

<input type="hidden" name="chatgpt_pro_tpl[category][route]" value="catalog/category">

<input type="hidden" name="chatgpt_pro_tpl[category][var][name][selector]" value="category_description[LANG_ID][name]">
<input type="hidden" name="chatgpt_pro_tpl[category][var][meta_h1][selector]" value="category_description[LANG_ID][meta_h1]">
<input type="hidden" name="chatgpt_pro_tpl[category][var][meta_title][selector]" value="category_description[LANG_ID][meta_title]">
<input type="hidden" name="chatgpt_pro_tpl[category][var][meta_description][selector]" value="category_description[LANG_ID][meta_description]">
<input type="hidden" name="chatgpt_pro_tpl[category][var][meta_keyword][selector]" value="category_description[LANG_ID][meta_keyword]">
<input type="hidden" name="chatgpt_pro_tpl[category][var][description][selector]" value="category_description[LANG_ID][description]">

<?php $custom_var = false; ?>
<?php if (!empty($chatgpt_pro_tpl['category']['var'])) { ?>
<?php foreach ($chatgpt_pro_tpl['category']['var'] as $key => $var) { ?>
	<?php if (!empty($var['title'])) { ?>
		<?php $custom_var = true; ?>
		<input class="custom_var" type="hidden" name="chatgpt_pro_tpl[category][var][<?php echo $key; ?>][title]" value="<?php echo $var['title']; ?>">
		<input class="custom_var" type="hidden" name="chatgpt_pro_tpl[category][var][<?php echo $key; ?>][selector]" value="<?php echo $var['selector']; ?>">
	<?php } ?>
<?php } ?>
<?php } ?>

<div class="panel-group tpl-accordion" id="accordion_tpl_category" role="tablist">

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[category][field][name][switch]" <?php echo !empty($chatgpt_pro_tpl['category']['field']['name']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#category_name" aria-expanded="true"><?php echo $entry_tpl_category_name; ?></a>
      </h4>
    </div>
    <div id="category_name" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['category']['field']['name']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[category][field][name][selector]" value="category_description[LANG_ID][name]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[category][field][name][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['category']['field']['name']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['category']['field']['name']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[category][field][meta_h1][switch]" <?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_h1']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#category_meta_h1" aria-expanded="true"><?php echo $entry_tpl_meta_h1; ?></a>
      </h4>
    </div>
    <div id="category_meta_h1" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_h1']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[category][field][meta_h1][selector]" value="category_description[LANG_ID][meta_h1]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[category][field][meta_h1][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_h1']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['category']['field']['meta_h1']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[category][field][meta_title][switch]" <?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_title']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#category_meta_title" aria-expanded="true"><?php echo $entry_tpl_meta_title; ?></a>
      </h4>
    </div>
    <div id="category_meta_title" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_title']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[category][field][meta_title][selector]" value="category_description[LANG_ID][meta_title]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[category][field][meta_title][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_title']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['category']['field']['meta_title']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[category][field][meta_description][switch]" <?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_description']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#category_meta_description" aria-expanded="true"><?php echo $entry_tpl_meta_description; ?></a>
      </h4>
    </div>
    <div id="category_meta_description" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_description']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[category][field][meta_description][selector]" value="category_description[LANG_ID][meta_description]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[category][field][meta_description][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_description']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['category']['field']['meta_description']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[category][field][description][switch]" <?php echo !empty($chatgpt_pro_tpl['category']['field']['description']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#category_description" aria-expanded="true"><?php echo $entry_tpl_description; ?></a>
      </h4>
    </div>
    <div id="category_description" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['category']['field']['description']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[category][field][description][selector]" value="category_description[LANG_ID][description]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[category][field][description][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['category']['field']['description']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['category']['field']['description']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[category][field][meta_keyword][switch]" <?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_keyword']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#category_meta_keyword" aria-expanded="true"><?php echo $entry_tpl_meta_keyword; ?></a>
      </h4>
    </div>
    <div id="category_meta_keyword" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_keyword']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[category][field][meta_keyword][selector]" value="category_description[LANG_ID][meta_keyword]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[category][field][meta_keyword][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['category']['field']['meta_keyword']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['category']['field']['meta_keyword']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->
  
  
  <?php if (!empty($chatgpt_pro_tpl['category']['field'])) { ?>
  <?php foreach ($chatgpt_pro_tpl['category']['field'] as $key => $field) { ?>
	  <?php if (is_numeric($key)) { ?>
	  <!-- TPL BLOCK -->
	  <div class="panel panel-default">
	  	<input type="hidden" name="chatgpt_pro_tpl[category][field][<?php echo $tpl_field_row; ?>][name]" value="<?php echo $field['name']; ?>">
	    <div class="panel-heading" role="tab">
	    	<i class="fa fa-lg fa-minus-circle pull-left text-danger hidden"></i>
			<div class="checkbox checbox-switch switch-success pull-right np">
			    <label><input type="checkbox" name="chatgpt_pro_tpl[category][field][<?php echo $tpl_field_row; ?>][switch]" <?php echo !empty($field['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
			    </label>
			</div>
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" href="#category_<?php echo $tpl_field_row; ?>" aria-expanded="true"><?php echo $field['name']; ?></a>
	      </h4>
	    </div>
	    <div id="category_<?php echo $tpl_field_row; ?>" class="panel-collapse collapse <?php echo !empty($field['switch']) ? 'in' : ''; ?>" role="tabpanel">
	      <div class="panel-body">
	      	<div class="form-control-static npt">
	      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
	          <input type="text" name="chatgpt_pro_tpl[category][field][<?php echo $tpl_field_row; ?>][selector]" value="<?php echo $field['selector'] ? $field['selector'] : ''; ?>" placeholder="category_description[LANG_ID][new_field]" class="form-control">
	        </div>
	        
			<?php if (strpos($field['selector'], 'LANG_ID') !== false) { ?>
			    <ul class="nav nav-tabs" id="language">
			      <?php foreach ($languages as $language) { ?>
			        <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
			      <?php } ?>
			    </ul>
			    <label class="control-label"><?php echo $entry_tpl_template; ?></label>
			    <div class="tab-content">
			      <?php foreach ($languages as $language) { ?>
			        <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
				        <div class="form-group nm np">
				          <textarea name="chatgpt_pro_tpl[category][field][<?php echo $tpl_field_row; ?>][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($field['tpl'][$language['language_id']]) ? $field['tpl'][$language['language_id']] : ''; ?></textarea>
				        </div>
			        </div>
			      <?php } ?>
			    </div>
			<?php } else { ?>
			    <label class="control-label"><?php echo $entry_tpl_template; ?></label>
			    <textarea name="chatgpt_pro_tpl[category][field][<?php echo $tpl_field_row; ?>][tpl]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo (!empty($field['tpl']) && !is_array($field['tpl'])) ? $field['tpl'] : ''; ?></textarea>
			<?php } ?>
	      </div>
	    </div>
	  </div><!-- TPL BLOCK END -->
	  <?php $tpl_field_row++; ?>
	  <?php } ?>
  <?php } ?>
  <?php } ?>

</div>
<span onclick="addTplField('category');" class="btn btn-default btn-sm"><?php echo $entry_add_tpl_field; ?></span>
<!-- CATEGORY TEMPLATE END -->
	            </div><!--/template-data-->
	            
        		<div class="col-md-4 variable-info">
					<div class="panel panel-default">
					  <div class="panel-heading relative">
					  	<b><?php echo $entry_tpl_variable; ?></b>
					  	<?php if ($custom_var) { ?>
					  		<span class="btn btn-default btn-sm var-edit"><i class="fa fa-pencil"></i></span>
					  	<?php } ?>
					  </div>
					  <div class="panel-body">
					    <?php echo $entry_tpl_category_vars; ?>
					    <?php if (!empty($chatgpt_pro_tpl['category']['var'])) { ?>
					    <?php foreach ($chatgpt_pro_tpl['category']['var'] as $key => $var) { ?>
						    <?php if (!empty($var['title'])) { ?>
						    	<p><i class="fa fa-minus-circle text-danger hidden"></i> <i class="fa fa-clone"></i> <code>[<?php echo $key; ?>]</code> - <?php echo $var['title']; ?></p>
						    <?php } ?>
					    <?php } ?>
					    <?php } ?>
					  </div>
					</div>
					<span onclick="addTplVar(event, 'category');" class="btn btn-default btn-sm"><?php echo $entry_add_tpl_var; ?></span>
	            </div><!--/variable-info-->
            </div>
        </div><!--/tab_tpl_category-->
        
        <!--------------------------------------------------------------->

<?php if ($db_man_descr) { ?>
        <div class="tab_tpl tab-pane col-md-12" id="tab_tpl_manufacturer">
        	<div class="row">
        		<div class="col-md-8 template-data">
<!-- MANUFACTURER TEMPLATE -->
<span class="btn btn-default btn-sm pull-right tpl-edit"><i class="fa fa-pencil"></i></span>
<h3 class="tpl-name"><?php echo $text_tpl_manufacturer; ?></h3>

<input type="hidden" name="chatgpt_pro_tpl[manufacturer][route]" value="catalog/manufacturer">

<?php if ($db_lang_brand_name) { ?>
<input type="hidden" name="chatgpt_pro_tpl[manufacturer][var][name][selector]" value="manufacturer_description[LANG_ID][name]">
<?php } else { ?>
<input type="hidden" name="chatgpt_pro_tpl[manufacturer][var][name][selector]" value="name">
<?php } ?>

<input type="hidden" name="chatgpt_pro_tpl[manufacturer][var][meta_h1][selector]" value="manufacturer_description[LANG_ID][meta_h1]">
<input type="hidden" name="chatgpt_pro_tpl[manufacturer][var][meta_title][selector]" value="manufacturer_description[LANG_ID][meta_title]">
<input type="hidden" name="chatgpt_pro_tpl[manufacturer][var][meta_description][selector]" value="manufacturer_description[LANG_ID][meta_description]">
<input type="hidden" name="chatgpt_pro_tpl[manufacturer][var][meta_keyword][selector]" value="manufacturer_description[LANG_ID][meta_keyword]">
<input type="hidden" name="chatgpt_pro_tpl[manufacturer][var][description][selector]" value="manufacturer_description[LANG_ID][description]">

<?php $custom_var = false; ?>
<?php if (!empty($chatgpt_pro_tpl['manufacturer']['var'])) { ?>
<?php foreach ($chatgpt_pro_tpl['manufacturer']['var'] as $key => $var) { ?>
	<?php if (!empty($var['title'])) { ?>
		<?php $custom_var = true; ?>
		<input class="custom_var" type="hidden" name="chatgpt_pro_tpl[manufacturer][var][<?php echo $key; ?>][title]" value="<?php echo $var['title']; ?>">
		<input class="custom_var" type="hidden" name="chatgpt_pro_tpl[manufacturer][var][<?php echo $key; ?>][selector]" value="<?php echo $var['selector']; ?>">
	<?php } ?>
<?php } ?>
<?php } ?>

<div class="panel-group tpl-accordion" id="accordion_tpl_manufacturer" role="tablist">

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[manufacturer][field][name][switch]" <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['name']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#manufacturer_name" aria-expanded="true"><?php echo $entry_tpl_manufacturer_name; ?></a>
      </h4>
    </div>
    <div id="manufacturer_name" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['name']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">

<?php if ($db_lang_brand_name) { ?>
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[manufacturer][field][name][selector]" value="manufacturer_description[LANG_ID][name]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[manufacturer][field][name][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['name']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['manufacturer']['field']['name']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
<?php } else { ?>
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[manufacturer][field][name][selector]" value="name" class="form-control">
        </div>
	    <label class="control-label"><?php echo $entry_tpl_template; ?></label>
	    <textarea name="chatgpt_pro_tpl[manufacturer][field][name][tpl]" rows="2" placeholder="<?php echo $entry_tpl_template; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['name']['tpl']) ? $chatgpt_pro_tpl['manufacturer']['field']['name']['tpl'] : ''; ?></textarea>
<?php } ?>

      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[manufacturer][field][meta_h1][switch]" <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_h1']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#manufacturer_meta_h1" aria-expanded="true"><?php echo $entry_tpl_meta_h1; ?></a>
      </h4>
    </div>
    <div id="manufacturer_meta_h1" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_h1']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[manufacturer][field][meta_h1][selector]" value="manufacturer_description[LANG_ID][meta_h1]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[manufacturer][field][meta_h1][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_h1']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['manufacturer']['field']['meta_h1']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[manufacturer][field][meta_title][switch]" <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_title']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#manufacturer_meta_title" aria-expanded="true"><?php echo $entry_tpl_meta_title; ?></a>
      </h4>
    </div>
    <div id="manufacturer_meta_title" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_title']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[manufacturer][field][meta_title][selector]" value="manufacturer_description[LANG_ID][meta_title]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[manufacturer][field][meta_title][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_title']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['manufacturer']['field']['meta_title']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[manufacturer][field][meta_description][switch]" <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_description']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#manufacturer_meta_description" aria-expanded="true"><?php echo $entry_tpl_meta_description; ?></a>
      </h4>
    </div>
    <div id="manufacturer_meta_description" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_description']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[manufacturer][field][meta_description][selector]" value="manufacturer_description[LANG_ID][meta_description]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[manufacturer][field][meta_description][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_description']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['manufacturer']['field']['meta_description']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[manufacturer][field][description][switch]" <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['description']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#manufacturer_description" aria-expanded="true"><?php echo $entry_tpl_description; ?></a>
      </h4>
    </div>
    <div id="manufacturer_description" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['description']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[manufacturer][field][description][selector]" value="manufacturer_description[LANG_ID][description]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[manufacturer][field][description][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['description']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['manufacturer']['field']['description']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[manufacturer][field][meta_keyword][switch]" <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_keyword']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#manufacturer_meta_keyword" aria-expanded="true"><?php echo $entry_tpl_meta_keyword; ?></a>
      </h4>
    </div>
    <div id="manufacturer_meta_keyword" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_keyword']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[manufacturer][field][meta_keyword][selector]" value="manufacturer_description[LANG_ID][meta_keyword]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[manufacturer][field][meta_keyword][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['manufacturer']['field']['meta_keyword']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['manufacturer']['field']['meta_keyword']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->
  
  
  <?php if (!empty($chatgpt_pro_tpl['manufacturer']['field'])) { ?>
  <?php foreach ($chatgpt_pro_tpl['manufacturer']['field'] as $key => $field) { ?>
	  <?php if (is_numeric($key)) { ?>
	  <!-- TPL BLOCK -->
	  <div class="panel panel-default">
	  	<input type="hidden" name="chatgpt_pro_tpl[manufacturer][field][<?php echo $tpl_field_row; ?>][name]" value="<?php echo $field['name']; ?>">
	    <div class="panel-heading" role="tab">
	    	<i class="fa fa-lg fa-minus-circle pull-left text-danger hidden"></i>
			<div class="checkbox checbox-switch switch-success pull-right np">
			    <label><input type="checkbox" name="chatgpt_pro_tpl[manufacturer][field][<?php echo $tpl_field_row; ?>][switch]" <?php echo !empty($field['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
			    </label>
			</div>
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" href="#manufacturer_<?php echo $tpl_field_row; ?>" aria-expanded="true"><?php echo $field['name']; ?></a>
	      </h4>
	    </div>
	    <div id="manufacturer_<?php echo $tpl_field_row; ?>" class="panel-collapse collapse <?php echo !empty($field['switch']) ? 'in' : ''; ?>" role="tabpanel">
	      <div class="panel-body">
	      	<div class="form-control-static npt">
	      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
	          <input type="text" name="chatgpt_pro_tpl[manufacturer][field][<?php echo $tpl_field_row; ?>][selector]" value="<?php echo $field['selector'] ? $field['selector'] : ''; ?>" placeholder="manufacturer_description[LANG_ID][new_field]" class="form-control">
	        </div>
	        
			<?php if (strpos($field['selector'], 'LANG_ID') !== false) { ?>
			    <ul class="nav nav-tabs" id="language">
			      <?php foreach ($languages as $language) { ?>
			        <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
			      <?php } ?>
			    </ul>
			    <label class="control-label"><?php echo $entry_tpl_template; ?></label>
			    <div class="tab-content">
			      <?php foreach ($languages as $language) { ?>
			        <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
				        <div class="form-group nm np">
				          <textarea name="chatgpt_pro_tpl[manufacturer][field][<?php echo $tpl_field_row; ?>][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($field['tpl'][$language['language_id']]) ? $field['tpl'][$language['language_id']] : ''; ?></textarea>
				        </div>
			        </div>
			      <?php } ?>
			    </div>
			<?php } else { ?>
			    <label class="control-label"><?php echo $entry_tpl_template; ?></label>
			    <textarea name="chatgpt_pro_tpl[manufacturer][field][<?php echo $tpl_field_row; ?>][tpl]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo (!empty($field['tpl']) && !is_array($field['tpl'])) ? $field['tpl'] : ''; ?></textarea>
			<?php } ?>
	      </div>
	    </div>
	  </div><!-- TPL BLOCK END -->
	  <?php $tpl_field_row++; ?>
	  <?php } ?>
  <?php } ?>
  <?php } ?>
  

</div>
<span onclick="addTplField('manufacturer');" class="btn btn-default btn-sm"><?php echo $entry_add_tpl_field; ?></span>
<!-- MANUFACTURER TEMPLATE END -->
	            </div><!--/template-data-->
	            
        		<div class="col-md-4 variable-info">
					<div class="panel panel-default">
					  <div class="panel-heading relative">
					  	<b><?php echo $entry_tpl_variable; ?></b>
					  	<?php if ($custom_var) { ?>
					  		<span class="btn btn-default btn-sm var-edit"><i class="fa fa-pencil"></i></span>
					  	<?php } ?>
					  </div>
					  <div class="panel-body">
					    <?php echo $entry_tpl_manufacturer_vars; ?>
					    <?php if (!empty($chatgpt_pro_tpl['manufacturer']['var'])) { ?>
					    <?php foreach ($chatgpt_pro_tpl['manufacturer']['var'] as $key => $var) { ?>
						    <?php if (!empty($var['title'])) { ?>
						    	<p><i class="fa fa-minus-circle text-danger hidden"></i> <i class="fa fa-clone"></i> <code>[<?php echo $key; ?>]</code> - <?php echo $var['title']; ?></p>
						    <?php } ?>
					    <?php } ?>
					    <?php } ?>
					  </div>
					</div>
					<span onclick="addTplVar(event, 'manufacturer');" class="btn btn-default btn-sm"><?php echo $entry_add_tpl_var; ?></span>
	            </div><!--/variable-info-->
            </div>
        </div><!--/tab_tpl_manufacturer-->
<?php } ?>
        
        <!----------------------------------------------------------->
        
<?php if ($ocfilter_seo_pages) { ?>
        <div class="tab_tpl tab-pane col-md-12" id="tab_tpl_ocfilter">
        	<div class="row">
        		<div class="col-md-8 template-data">
<!-- OCFILTER TEMPLATE -->
<h3 class="tpl-name"><?php echo $text_tpl_ocfilter; ?></h3>

<input type="hidden" name="chatgpt_pro_tpl[ocfilter][route]" value="extension/module/ocfilter/page">

<input type="hidden" name="chatgpt_pro_tpl[ocfilter][var][name][selector]" value="page_description[LANG_ID][name]">
<input type="hidden" name="chatgpt_pro_tpl[ocfilter][var][heading_title][selector]" value="page_description[LANG_ID][heading_title]">
<input type="hidden" name="chatgpt_pro_tpl[ocfilter][var][meta_title][selector]" value="page_description[LANG_ID][meta_title]">
<input type="hidden" name="chatgpt_pro_tpl[ocfilter][var][description_top][selector]" value="page_description[LANG_ID][description_top]">
<input type="hidden" name="chatgpt_pro_tpl[ocfilter][var][description_bottom][selector]" value="page_description[LANG_ID][description_bottom]">
<input type="hidden" name="chatgpt_pro_tpl[ocfilter][var][meta_description][selector]" value="page_description[LANG_ID][meta_description]">
<input type="hidden" name="chatgpt_pro_tpl[ocfilter][var][meta_keyword][selector]" value="page_description[LANG_ID][meta_keyword]">

<div class="panel-group tpl-accordion" id="accordion_tpl_ocfilter" role="tablist">

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[ocfilter][field][name][switch]" <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['name']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#ocfilter_name" aria-expanded="true"><?php echo $entry_tpl_ocfilter_name; ?></a>
      </h4>
    </div>
    <div id="ocfilter_name" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['name']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[ocfilter][field][name][selector]" value="page_description[LANG_ID][name]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[ocfilter][field][name][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['name']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['ocfilter']['field']['name']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[ocfilter][field][heading_title][switch]" <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['heading_title']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#ocfilter_heading_title" aria-expanded="true"><?php echo $entry_tpl_ocfilter_heading_title; ?></a>
      </h4>
    </div>
    <div id="ocfilter_heading_title" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['heading_title']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[ocfilter][field][heading_title][selector]" value="page_description[LANG_ID][heading_title]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[ocfilter][field][heading_title][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['heading_title']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['ocfilter']['field']['heading_title']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[ocfilter][field][meta_title][switch]" <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['meta_title']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#ocfilter_meta_title" aria-expanded="true"><?php echo $entry_tpl_meta_title; ?></a>
      </h4>
    </div>
    <div id="ocfilter_meta_title" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['meta_title']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[ocfilter][field][meta_title][selector]" value="page_description[LANG_ID][meta_title]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[ocfilter][field][meta_title][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['meta_title']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['ocfilter']['field']['meta_title']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[ocfilter][field][description_top][switch]" <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['description_top']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#ocfilter_description_top" aria-expanded="true"><?php echo $entry_tpl_ocfilter_description_top; ?></a>
      </h4>
    </div>
    <div id="ocfilter_description_top" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['description_top']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[ocfilter][field][description_top][selector]" value="page_description[LANG_ID][description_top]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[ocfilter][field][description_top][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['description_top']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['ocfilter']['field']['description_top']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[ocfilter][field][description_bottom][switch]" <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['description_bottom']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#ocfilter_description_bottom" aria-expanded="true"><?php echo $entry_tpl_ocfilter_description_bottom; ?></a>
      </h4>
    </div>
    <div id="ocfilter_description_bottom" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['description_bottom']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[ocfilter][field][description_bottom][selector]" value="page_description[LANG_ID][description_bottom]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[ocfilter][field][description_bottom][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['description_bottom']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['ocfilter']['field']['description_bottom']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[ocfilter][field][meta_description][switch]" <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['meta_description']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#ocfilter_meta_description" aria-expanded="true"><?php echo $entry_tpl_meta_description; ?></a>
      </h4>
    </div>
    <div id="ocfilter_meta_description" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['meta_description']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[ocfilter][field][meta_description][selector]" value="page_description[LANG_ID][meta_description]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[ocfilter][field][meta_description][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['meta_description']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['ocfilter']['field']['meta_description']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-muted hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_tpl[ocfilter][field][meta_keyword][switch]" <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['meta_keyword']['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#ocfilter_meta_keyword" aria-expanded="true"><?php echo $entry_tpl_meta_keyword; ?></a>
      </h4>
    </div>
    <div id="ocfilter_meta_keyword" class="panel-collapse collapse <?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['meta_keyword']['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt hidden">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_tpl[ocfilter][field][meta_keyword][selector]" value="page_description[LANG_ID][meta_keyword]" class="form-control">
        </div>
        <ul class="nav nav-tabs" id="language">
          <?php foreach ($languages as $language) { ?>
            <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
          <?php } ?>
        </ul>
        <label class="control-label"><?php echo $entry_tpl_template; ?></label>
        <div class="tab-content">
          <?php foreach ($languages as $language) { ?>
            <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
		        <div class="form-group nm np">
		          <textarea name="chatgpt_pro_tpl[ocfilter][field][meta_keyword][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($chatgpt_pro_tpl['ocfilter']['field']['meta_keyword']['tpl'][$language['language_id']]) ? $chatgpt_pro_tpl['ocfilter']['field']['meta_keyword']['tpl'][$language['language_id']] : ''; ?></textarea>
		        </div>
            </div>
	      <?php } ?>
        </div>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->

</div>
<!-- CATEGORY TEMPLATE END -->
	            </div><!--/template-data-->
	            
        		<div class="col-md-4 variable-info">
					<div class="panel panel-default">
					  <div class="panel-heading relative">
					  	<b><?php echo $entry_tpl_variable; ?></b>
					  </div>
					  <div class="panel-body">
					    <?php echo $entry_tpl_ocfilter_vars; ?>
					    <?php if (!empty($chatgpt_pro_tpl['ocfilter']['var'])) { ?>
					    <?php foreach ($chatgpt_pro_tpl['ocfilter']['var'] as $key => $var) { ?>
						    <?php if (!empty($var['title'])) { ?>
						    	<p><i class="fa fa-minus-circle text-danger hidden"></i> <i class="fa fa-clone"></i> <code>[<?php echo $key; ?>]</code> - <?php echo $var['title']; ?></p>
						    <?php } ?>
					    <?php } ?>
					    <?php } ?>
					  </div>
					</div>
	            </div><!--/variable-info-->
            </div>
        </div><!--/tab_tpl_ocfilter-->
<?php } ?>
        
        <!--------------------------------------------------------------->

        

        <?php foreach ($chatgpt_pro_customtpl as $customtpl) { ?>
        <div class="tab_tpl tab-pane col-md-12" id="tab_tpl_<?php echo $tpl_row; ?>">
        	<div class="row">
        		<div class="col-md-8 template-data">
<!-- CUSTOM TEMPLATE -->
<span class="btn btn-default btn-sm pull-right tpl-edit"><i class="fa fa-pencil"></i></span>
<h3 class="tpl-name"><?php echo $customtpl['name']; ?></h3>

<div class="form-control-static npt tpl-edit-data hidden">
	<label class="control-label npt"><?php echo $entry_add_tpl_name; ?></label>
	<input type="text" name="chatgpt_pro_customtpl[<?php echo $tpl_row; ?>][name]" value="<?php echo $customtpl['name']; ?>" class="form-control">
</div>
<div class="form-control-static npt tpl-edit-data hidden">
	<label class="control-label npt"><?php echo $entry_add_tpl_route; ?></label>
	<input type="text" name="chatgpt_pro_customtpl[<?php echo $tpl_row; ?>][route]" value="<?php echo $customtpl['route']; ?>" class="form-control">
</div>

<?php foreach ($customtpl['var'] as $key => $var) { ?>
<input class="custom_var" type="hidden" name="chatgpt_pro_customtpl[<?php echo $tpl_row; ?>][var][<?php echo $key; ?>][title]" value="<?php echo $var['title']; ?>">
<input class="custom_var" type="hidden" name="chatgpt_pro_customtpl[<?php echo $tpl_row; ?>][var][<?php echo $key; ?>][selector]" value="<?php echo $var['selector']; ?>">
<?php } ?>

<div class="panel-group tpl-accordion" id="accordion_tpl_<?php echo $tpl_row; ?>" role="tablist">
<?php foreach ($customtpl['field'] as $field) { ?>
  <!-- TPL BLOCK -->
  <div class="panel panel-default">
    <input type="hidden" name="chatgpt_pro_customtpl[<?php echo $tpl_row; ?>][field][<?php echo $tpl_field_row; ?>][name]" value="<?php echo $field['name']; ?>">
    <div class="panel-heading" role="tab">
    	<i class="fa fa-lg fa-minus-circle pull-left text-danger hidden"></i>
		<div class="checkbox checbox-switch switch-success pull-right np">
		    <label><input type="checkbox" name="chatgpt_pro_customtpl[<?php echo $tpl_row; ?>][field][<?php echo $tpl_field_row; ?>][switch]" <?php echo !empty($field['switch']) ? 'checked="checked"' : ''; ?> /><span></span>
		    </label>
		</div>
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" href="#tpl-field-<?php echo $tpl_row; ?>-<?php echo $tpl_field_row; ?>" aria-expanded="true"><?php echo $field['name']; ?></a>
      </h4>
    </div>
    <div id="tpl-field-<?php echo $tpl_row; ?>-<?php echo $tpl_field_row; ?>" class="panel-collapse collapse <?php echo !empty($field['switch']) ? 'in' : ''; ?>" role="tabpanel">
      <div class="panel-body">
      	<div class="form-control-static npt">
      	  <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label> <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>
          <input type="text" name="chatgpt_pro_customtpl[<?php echo $tpl_row; ?>][field][<?php echo $tpl_field_row; ?>][selector]" value="<?php echo $field['selector'] ? $field['selector'] : ''; ?>" placeholder="product_description[LANG_ID][meta_title]" class="form-control" />
        </div>
        
		<?php if (strpos($field['selector'], 'LANG_ID') !== false) { ?>
		    <ul class="nav nav-tabs" id="language">
		      <?php foreach ($languages as $language) { ?>
		        <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>"/> <?php echo $language['name']; ?></a></li>
		      <?php } ?>
		    </ul>
		    <label class="control-label"><?php echo $entry_tpl_template; ?></label>
		    <div class="tab-content">
		      <?php foreach ($languages as $language) { ?>
		        <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
			        <div class="form-group nm np">
			          <textarea name="chatgpt_pro_customtpl[<?php echo $tpl_row; ?>][field][<?php echo $tpl_field_row; ?>][tpl][<?php echo $language['language_id']; ?>]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo !empty($field['tpl'][$language['language_id']]) ? $field['tpl'][$language['language_id']] : ''; ?></textarea>
			        </div>
		        </div>
		      <?php } ?>
		    </div>
		<?php } else { ?>
		    <label class="control-label"><?php echo $entry_tpl_template; ?></label>
		    <textarea name="chatgpt_pro_customtpl[<?php echo $tpl_row; ?>][field][<?php echo $tpl_field_row; ?>][tpl]" rows="2" placeholder="<?php echo $language['name']; ?>" class="form-control"><?php echo (!empty($field['tpl']) && !is_array($field['tpl'])) ? $field['tpl'] : ''; ?></textarea>
		<?php } ?>
      </div>
    </div>
  </div><!-- TPL BLOCK END -->
<?php $tpl_field_row++; ?>
<?php } ?>
</div>
<span onclick="addTplField(<?php echo $tpl_row; ?>, 'custom');" class="btn btn-default btn-sm"><?php echo $entry_add_tpl_field; ?></span>
<!-- CUSTOM TEMPLATE END -->
	            </div><!--/template-data-->
	            
        		<div class="col-md-4 variable-info">
					<div class="panel panel-default">
					  <div class="panel-heading relative">
					  	<b><?php echo $entry_tpl_variable; ?></b>
					  	<span class="btn btn-default btn-sm var-edit"><i class="fa fa-pencil"></i></span>
					  </div>
					  <div class="panel-body">
					  <?php foreach ($customtpl['var'] as $key => $var) { ?>
					  	<p><i class="fa fa-minus-circle text-danger hidden"></i> <i class="fa fa-clone"></i> <code>[<?php echo $key; ?>]</code> - <?php echo $var['title']; ?></p>
					  <?php } ?>
					  </div>
					</div>
					<span onclick="addTplVar(event, '<?php echo $tpl_row; ?>', 'custom');" class="btn btn-default btn-sm"><?php echo $entry_add_tpl_var; ?></span>
	            </div><!--/variable-info-->
            </div>
        </div><!--/tab_tpl_custom-->
        <?php $tpl_row++; ?>
        <?php } ?>
<!----------------------------------------------------------------------------->




      </div>
    </div>
</div>
       </fieldset>
      </div><!--tab-templates-->


      <div class="tab-pane <?php echo ($license ? '' : 'active'); ?>" id="tab-info">
       <fieldset>

        <div class="form-group">
         <label class="col-sm-2 control-label"><?php echo $entry_instruction; ?></label>
         <div class="col-sm-10 form-control-static">
         	<?php echo $help_instruction_info; ?>
         </div>
        </div>

        <div class="form-group">
         <label class="col-sm-2 control-label"><?php echo $entry_additional; ?></label>
         <div class="col-sm-10 form-control-static">
         	<?php echo $help_additional_info; ?>
         </div>
        </div>

       </fieldset>
      </div><!--tab-info-->
     </div><!--tab-content-->

    </form>
   </div>
  </div>
 </div>
</div>



<script type="text/javascript">
var tpl_row = <?php echo $tpl_row; ?>;
function addTpl() {
	html = '';
	html += '<li><a href="#tab_tpl_' + tpl_row + '" data-toggle="tab" aria-expanded="false"><?php echo $entry_add_tpl_new; ?><i class="fa fa-minus-circle pull-right"></i></a></li>';
	$('.tpl-li-new-end').before(html);
	
	html = '';
	html += '<div class="tab_tpl tab-pane col-md-12" id="tab_tpl_' + tpl_row + '">';
	html += '  <div class="row">';
	
	html += '    <div class="col-md-8 template-data">';
	html += '      <h3 class="tpl-name"><?php echo $entry_add_tpl_name; ?></h3>';
	html += '      <input type="text" name="chatgpt_pro_customtpl[' + tpl_row + '][name]" placeholder="<?php echo $entry_tpl_product; ?>" class="form-control" />';
	html += '      <label class="control-label"><?php echo $entry_add_tpl_route; ?></label>';
	html += '      <input type="text" name="chatgpt_pro_customtpl[' + tpl_row + '][route]" placeholder="catalog/product" class="form-control" style="margin-bottom: 10px!important" />';
	html += '      <div class="panel-group tpl-accordion" id="accordion_tpl_' + tpl_row + '" role="tablist">';
	html += '      </div>';
	html += '      <span onclick="addTplField(' + tpl_row + ', \'custom\');" class="btn btn-default btn-sm"><?php echo $entry_add_tpl_field; ?></span>';
	html += '    </div><!--/template-data-->';
	
	html += '    <div class="col-md-4 variable-info">';
	html += '      <div class="panel panel-default">';
	html += '        <div class="panel-heading relative"><b><?php echo $entry_instruction; ?></b></div>';
	html += '        <div class="panel-body"></div>';
	html += '      </div>';
	html += '    </div><!--/variable-info-->';
	
	html += '  </div>';
	html += '</div>';
	
	$('#tab_tpl_templates').append(html);
	$('a[href="#tab_tpl_' + tpl_row + '"]').tab('show');
	
	tpl_row++;
}

var tpl_field_row = <?php echo $tpl_field_row; ?>;
function addTplField(tpl_row, custom) {
	let type = (custom) ? 'chatgpt_pro_customtpl' : 'chatgpt_pro_tpl';
	html = '';
	html += '<div class="panel panel-default">';
	html += '<input type="hidden" name="'+ type +'[' + tpl_row + '][field][' + tpl_field_row + '][switch]" value="1" />';
	html += '  <div class="panel-heading">';
	html += '    <i class="fa fa-lg fa-minus-circle pull-left text-danger"></i>';
	html += '    <label class="control-label npt"><?php echo $entry_add_tpl_field_name; ?></label>';
	html += '    <input type="text" name="'+ type +'[' + tpl_row + '][field][' + tpl_field_row + '][name]" placeholder="<?php echo $entry_tpl_meta_title; ?>" class="form-control" />';
	html += '  </div>';
	html += '  <div class="panel-body">';
	html += '    <div class="form-control-static np">';
	html += '      <label class="control-label npt"><?php echo $entry_tpl_selector; ?></label>';
	html += '      <span class="pull-right"><?php echo $text_tpl_selector_help; ?></span>';
	html += '      <input type="text" name="'+ type +'[' + tpl_row + '][field][' + tpl_field_row + '][selector]" placeholder="product_description[LANG_ID][meta_title]" class="form-control" />';
	html += '    </div>';
	html += '  </div>';
	html += '</div>';
	
	$('#accordion_tpl_' + tpl_row).append(html);
	
	tpl_field_row++;
}


function addTplVar(e, row, custom = null) {
	$('#varTplName').text('');
	$('#addVarModal input').val('');
	$('#addVarModal div').removeClass('has-error');
	
	let type = (custom) ? 'chatgpt_pro_customtpl' : 'chatgpt_pro_tpl';
	let tpl = $(e.target).closest('.tab_tpl');
	let tpl_id = $(tpl).attr('id');
	let tpl_name = $(tpl).find('.tpl-name').text();
	
	$('#varTplType').val(type);
	$('#varTplId').val(tpl_id);
	$('#varTplRow').val(row);
	$('#varTplName').text(tpl_name);
	
	$('#addVarModal').modal('show');
}
</script>

<div id="addVarModal" class="modal fade" tabindex="-1" role="dialog">
  <input id="varTplType" type="hidden" name="tpl_type">
  <input id="varTplId" type="hidden" name="tpl_id">
  <input id="varTplRow" type="hidden" name="tpl_row">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Добавить переменную (<b id="varTplName"></b>)</h4>
      </div>
      <div class="modal-body">
      	<p>Поддерживаются переменные для полей <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code> и <code>&lt;select&gt;</code>.<br>Поддержка полей других типов будет доступна в следующих обновлениях.</p><br>
		<div class="form-control-static">
			<label>Селектор поля <code>name="..."</code></label> <span class="pull-right">Используйте <kbd>LANG_ID</kbd> вместо ID языка!</span>
			<input type="text" name="tpl_var_selector" placeholder="product_description[LANG_ID][meta_title]" class="form-control">
        </div>
		<div class="form-control-static">
			<label>Имя переменной</label> <span class="pull-right">Только латиница, цифры и знак подчеркивания <kbd>_</kbd></span>
			<input type="text" name="tpl_var_name" class="form-control" placeholder="[meta_title]">
			
		</div>
		<div class="form-control-static">
			<label>Короткое название переменной</label>
			<input type="text" name="tpl_var_title" class="form-control" placeholder="Мета-тег Title">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="tplVarSave" type="button" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
$(function(){
	//$('a[href="#tab-templates"]').trigger('click'); // TMP
});
</script>

<script src="view/javascript/chatgpt_pro/module.js?<?php echo $time; ?>" type="text/javascript">
</script>



<?php echo $footer; ?>