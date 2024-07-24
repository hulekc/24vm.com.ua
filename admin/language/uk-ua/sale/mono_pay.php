<?php
// Heading
$_['heading_title']                           = 'Транзакції MonoPay';

$_['date_format_short']                       = 'd.m.Y H:i';

// Text
$_['text_list']                         	  = 'Список транзакцій MonoPay';
$_['text_list_status_success']                = '<span style="color:green;">Успішний</span>';
$_['text_list_status_processing']             = '<span style="color:green;">У процесі</span>';
$_['text_list_status_hold']             	  = '<span style="color:green;">Гроші заморожені (Hold)</span>';
$_['text_list_status_refunded']               = '<span style="color:red;">Гроші повернуто</span>';
$_['text_list_status_failure']                = '<span style="color:red;">Невдала оплата</span>';
$_['text_list_status_created']    			  = '<span style="color:orange;">Створено інвойс</span>';
$_['text_list_status_expired']                = '<span style="color:red;">Сплив час</span>';
$_['text_list_status_reversed']               = '<span style="color:orange;">Гроші перекручені</span>';
$_['text_data_apis_load']                 	  = 'Дані успішно отримані!';
$_['text_no_data_apis']                 	  = 'За заданими параметрами даних не знайдено!';
$_['text_info_transaction']                   = 'Інформація про транзакцію';
$_['text_info_payment_id']                    = 'ID платежу';
$_['text_order_id']                    		  = 'Номер замовлення';
$_['text_empty']                    		  = 'Дані щодо платежу відсутні.';
$_['text_view_order']                    	  = 'Перейти до замовлення';
$_['text_apply_pay']                    	  = 'Прийняти платіж';
$_['text_cancel_pay']                    	  = 'Повернути гроші';
$_['text_write_off']                    	  = 'Списати:';
$_['text_info_order_id']                   	  = 'Номер замовлення у магазині';
$_['text_info_status']                   	  = 'Статус платежу';
$_['text_info_amount']                   	  = 'Сума';
$_['text_info_final_amount']                  = 'Списано за підсумком';
$_['text_info_currency']                   	  = 'Валюта';
$_['text_info_paytype']                   	  = 'Банк';
$_['text_info_sender_phone']                  = 'Телефон клієнта';
$_['text_info_email']                  		  = 'Email клієнта';
$_['text_info_create_date']                   = 'Дата створення';
$_['text_info_end_date']                   	  = 'Дата останньої зміни';
$_['text_settle_success']                     = 'Платіж успішно прийнято!';
$_['text_settle_error']                       = 'Помилка. Платіж не прийнято! Причина: %s';
$_['text_refund_success']          			  = 'Гроші успішно повернуто клієнту.';
$_['text_refund_error']          			  = 'Помилка повернення: %s';
$_['text_invoice_error']          			  = 'Помилка генерації інвойсу: %s';
$_['text_invoice_delete_error']          	  = 'Помилка видалення інвойсу: %s';
$_['text_invoice_success']          		  = 'Інвойс успішно згенеровано! Посилання: %s';
$_['text_order_description']          		  = 'Оплата на замовлення №%s';
$_['text_invoice_delete_error']          	  = 'Такого інвойсу не знайдено!';
$_['text_invoice_delete_success']          	  = 'Інвойс успішно вилучено!';
$_['text_product_none']          	  		  = 'Додайте товари, жодного товару не додано.';
$_['text_notify_all']          	  		  	  = 'Усі канали';
$_['text_notify_bot']          	  		  	  = 'Надсилання ботом';
$_['text_notify_email']          	  		  = 'Надсилання на Email';
$_['text_notify_sms']          	  		  	  = 'Надсилання SMS';
$_['text_product_heading']          	  	  = 'Товари'; 
$_['text_info_invoice_order']          	  	  = 'Генерація інвойсу для замовлення: №'; 
$_['text_total']          	  	  			  = 'Сума: '; 
$_['text_settle_error_empty']          	  	  = 'Даних за цей період немає!'; 

// Column
$_['column_order_id']                         = 'Замовлення №';
$_['column_pay_id']                           = 'ID платежу MonoPay'; 
$_['column_status']                           = 'Статус платежу';
$_['column_total']                            = 'Сума платежу';
$_['column_date_added']                       = 'Дата створення транзакції';
$_['column_date_modified']                    = 'Дата закриття транзакції';
$_['column_action']                    		  = 'Дія';

//Button
$_['button_seend']                    		  = 'Відправити';
$_['button_remove']                    		  = 'Видалити';
$_['button_view_pay']	     	 			  = 'Дивитись деталі платежу';
$_['button_load_list']	     	 			  = 'Отримати список транзакцій';

// Entry
$_['entry_amount']                            = 'Сума';
$_['entry_transaction']                       = 'Номер платежу MonoPay';
$_['entry_order_status']                      = 'Статус замовлення';
$_['entry_currency']           				  = 'Валюта';
$_['entry_order_id']                          = 'Замовлення №';
$_['entry_total']                             = 'Разом';
$_['entry_date_added']                        = 'Дата створення транзакції';
$_['entry_date_modified']                     = 'Дата закриття транзакції';
$_['last_load_data']                     	  = 'Відображаються останні завантажені дані <b>з %s до %s</b>';
$_['entry_product_name']                      = 'Назва товару';
$_['entry_product_description']               = 'Опис товару';
$_['entry_product_quantity']               	  = 'Кількість';
$_['entry_product_price']               	  = 'Ціна, за 1шт';
$_['entry_currency']               	  	  	  = 'Валюта';
$_['entry_validity_time']               	  = 'Час "життя" інвойсу';

$_['help_validity_time']               	  	  = 'Час за секунди, протягом якого покупець зможете оплатити інвойс, максимально 24 години (86400 сек)';

// Error
$_['error_warning']                           = 'Увага: Уважно перевірте форму на наявність помилок!';
$_['error_permission']                        = 'Увага: У вас немає прав для зміни замовлень!';
$_['error_action']                            = 'Увага: Дія не може бути завершена!';
$_['error_filetype']			              = 'Неприпустимий тип файлу!';
$_['error_total']			              	  = 'Сума замовлення не може дорівнювати нулю!';
$_['error_validity_time']			          = 'Час життя інвойсу може бути від 5600 до 86 400!';
