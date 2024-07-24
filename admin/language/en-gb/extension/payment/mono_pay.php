<?php

// Heading
$_['heading_title']					= '<strong style="color:#41637d">DEV-OPENCART.COM —</strong> <b>MonoPay - подключения эквайринга Monobank</b> <a href="https://dev-opencart.com" target="_blank" title="Dev-opencart.com - Модули и шаблоны для Opencart"><img style="margin-left:15px;height:35px;margin-top:10px;margin-bottom:10px;" src="https://dev-opencart.com/logob.svg" alt="Dev-opencart.com - Модули и шаблоны для Opencart"/></a>';

// Text
$_['text_payment']					= 'Payment';
$_['text_success']					= 'Settings successfully changed!';
$_['text_edit']                     = 'Editing';
$_['text_hold']                     = 'Hold money in the account: the money is frozen by the bank in the buyer\'s account until you accept the payment.';
$_['text_debit']                    = 'Direct payment: money is immediately credited to you';
$_['text_license']          		= 'To obtain a license, contact me by Email or write a personal message at the site where the module was purchased. My contacts: <a href="mailto:#@gmail.com">#@gmail.com</a>';
$_['text_key_success']    			= 'Module successfully activated! Reloading the page...'; 
$_['text_success_log']    			= 'Log cleared successfully!'; 

// Entry
$_['entry_token']					= 'Token';
$_['entry_key']	 					= 'License key';
$_['entry_total']					= 'Bottom line';
$_['entry_total_max']				= 'Upper bound';
$_['entry_order_status']			= 'Order status after proceeding to payment';
$_['entry_geo_zone']				= 'Geographic area';
$_['entry_status']					= 'Status';
$_['entry_sort_order']				= 'Sorting order';
$_['entry_type_payment']			= 'Withdrawal type';
$_['entry_status_referrer']			= 'Change order status when proceeding to payment';
$_['entry_order_success_status']	= 'Status of a successfully paid order';
$_['entry_order_failure_status']	= 'Status of unpaid order';
$_['entry_order_return_status']		= 'Refund status';
$_['entry_status_log']				= 'Enable logging';
$_['entry_name']					= 'Payment method name';
$_['entry_currency_pay']			= 'Currency';
$_['entry_validity_time']			= 'Invoice "lifetime"';

//Tab
$_['tab_general']	 				= 'General';  
$_['tab_info']	 					= 'Information';  
$_['tab_added']	 					= 'Additionally';   
$_['tab_log']	 					= 'Logs'; 

//Button  
$_['button_apply']	 				= 'Apply';   

// Help
$_['help_total']					= 'Minimum order amount. Below this amount, the method will not be available.';
$_['help_total_max']				= 'Maximum order amount. Above this amount, the method will not be available.';
$_['help_token']					= 'Your token received from Monobank. You can use a test or working token.';
$_['help_order_status']				= 'Whether to record the status at the time of transition to payment. If disabled, then until the moment of successful or unsuccessful payment, the order will be in error.';
$_['help_type']						= 'Selecting the type of withdrawal of funds from the buyer. Direct debit - funds are debited immediately after the order is placed by the client. Hold - funds are frozen on the client\'s account, debiting occurs after the confirmation of the seller. Attention! The funds hold lasts 9 days, after which the money will be returned to the client!';
$_['help_currency_pay']				= 'Currency in which the payment page will be generated';
$_['help_validity_time']			= 'Time in seconds during which the buyer can pay the invoice, maximum 24 hours (86400 sec)';

// Error
$_['error_permission']				= 'You do not have enough rights to make changes!';
$_['error_key']						= 'Check if you entered the license key correctly!';
$_['error_token']					= 'Specify a token!';
$_['error_validity_time']			= 'Invoice lifetime can be from 60 to 86400 seconds!';