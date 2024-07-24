<?php
// Heading
$_['heading_title']                           = 'MonoPay transactions';

$_['date_format_short']                       = 'd.m.Y H:i';

// Text
$_['text_list']                         	  = 'List of MonoPay transactions';
$_['text_list_status_success']                = '<span style="color:green;">Successful</span>';
$_['text_list_status_processing']             = '<span style="color:green;">In Progress</span>';
$_['text_list_status_hold']             	  = '<span style="color:green;">Money is frozen (Hold)</span>';
$_['text_list_status_refunded']               = '<span style="color:red;">Money returned</span>';
$_['text_list_status_failure']                = '<span style="color:red;">Payment Failed</span>';
$_['text_list_status_created']    			  = '<span style="color:orange;">Invoice created</span>';
$_['text_list_status_expired']                = '<span style="color:red;">Time out</span>';
$_['text_list_status_reversed']               = '<span style="color:orange;">Money returned</span>';
$_['text_data_apis_load']                 	  = 'Data received successfully!';
$_['text_no_data_apis']                 	  = 'No data found for the specified parameters!';
$_['text_info_transaction']                   = 'Transaction Information';
$_['text_info_payment_id']                    = 'Payment ID';
$_['text_order_id']                    		  = 'Order number';
$_['text_empty']                    		  = 'No payment details...';
$_['text_view_order']                    	  = 'Go to order';
$_['text_apply_pay']                    	  = 'Accept payment';
$_['text_cancel_pay']                    	  = 'Return money';
$_['text_write_off']                    	  = 'Write off:';
$_['text_info_order_id']                   	  = 'Shop order number';
$_['text_info_status']                   	  = 'Payment status';
$_['text_info_amount']                   	  = 'Sum';
$_['text_info_final_amount']                  = 'Written off in total';
$_['text_info_currency']                   	  = 'Currency';
$_['text_info_paytype']                   	  = 'Bank';
$_['text_info_sender_phone']                  = 'Customer phone';
$_['text_info_email']                  		  = 'Client Email';
$_['text_info_create_date']                   = 'Date of creation';
$_['text_info_end_date']                   	  = 'Last modified date';
$_['text_settle_success']                     = 'Payment successfully accepted!';
$_['text_settle_error']                       = 'Error. Payment not accepted! Reason: %s';
$_['text_refund_success']          			  = 'The money was successfully returned to the client.';
$_['text_refund_error']          			  = 'Return error: %s';
$_['text_invoice_error']          			  = 'Invoice generation error: %s';
$_['text_invoice_delete_error']          	  = 'Error deleting invoice: %s';
$_['text_invoice_success']          		  = 'Invoice successfully generated! Link: %s';
$_['text_order_description']          		  = 'Payment for order #%s';
$_['text_invoice_delete_error']          	  = 'No such invoice found!';
$_['text_invoice_delete_success']          	  = 'Invoice deleted successfully!';
$_['text_product_none']          	  		  = 'Add products, no products added.';
$_['text_notify_all']          	  		  	  = 'All channels';
$_['text_notify_bot']          	  		  	  = 'Sending by bot';
$_['text_notify_email']          	  		  = 'Sending to Email';
$_['text_notify_sms']          	  		  	  = 'Sending SMS';
$_['text_product_heading']          	  	  = 'Goods'; 
$_['text_info_invoice_order']          	  	  = 'Invoice generation for order: No.'; 
$_['text_total']          	  	  			  = 'Sum: '; 
$_['text_settle_error_empty']          	  	  = 'No data available for this period!'; 

// Column
$_['column_order_id']                         = 'Order No.';
$_['column_pay_id']                           = 'MonoPay payment ID'; 
$_['column_status']                           = 'Payment status';
$_['column_total']                            = 'Amount of payment';
$_['column_date_added']                       = 'Transaction creation date';
$_['column_date_modified']                    = 'Transaction closing date';
$_['column_action']                    		  = 'Action';

//Button
$_['button_seend']                    		  = 'Send';
$_['button_remove']                    		  = 'Delete';
$_['button_view_pay']	     	 			  = 'View payment details';
$_['button_load_list']	     	 			  = 'Get a list of transactions';

// Entry
$_['entry_amount']                            = 'Sum';
$_['entry_transaction']                       = 'MonoPay payment number';
$_['entry_order_status']                      = 'Order status';
$_['entry_currency']           				  = 'Currency';
$_['entry_order_id']                          = 'Order No.';
$_['entry_total']                             = 'Total';
$_['entry_date_added']                        = 'Transaction creation date';
$_['entry_date_modified']                     = 'Transaction closing date';
$_['last_load_data']                     	  = 'The last loaded data is displayed <b>%s to %s</b>';
$_['entry_product_name']                      = 'Product Name';
$_['entry_product_description']               = 'Product description';
$_['entry_product_quantity']               	  = 'Quantity';
$_['entry_product_price']               	  = 'Price, for 1 piece';
$_['entry_currency']               	  	  	  = 'Currency';
$_['entry_validity_time']               	  = 'Invoice "lifetime"';

$_['help_validity_time']               	  	  = 'Time in seconds during which the buyer can pay the invoice, maximum 24 hours (86400 sec)';

// Error
$_['error_warning']                           = 'Attention: Carefully check the form for errors!';
$_['error_permission']                        = 'Attention: You do not have rights to change orders!';
$_['error_action']                            = 'Attention: The action cannot be completed!';
$_['error_filetype']			              = 'Invalid file type!';
$_['error_total']			              	  = 'The order amount cannot be equal to zero!';
$_['error_validity_time']			          = 'Invoice lifetime can be from 5600 to 86400!';
