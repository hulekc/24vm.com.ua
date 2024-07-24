<?php
// Heading
$_['heading_title']                           = 'Транзакции MonoPay';

$_['date_format_short']                       = 'd.m.Y H:i';

// Text
$_['text_list']                         	  = 'Список транзакций MonoPay';
$_['text_list_status_success']                = '<span style="color:green;">Успешный</span>';
$_['text_list_status_processing']             = '<span style="color:green;">В процессе</span>';
$_['text_list_status_hold']             	  = '<span style="color:green;">Деньги заморожены (Hold)</span>';
$_['text_list_status_refunded']               = '<span style="color:red;">Деньги возвращены</span>';
$_['text_list_status_failure']                = '<span style="color:red;">Неудачная оплата</span>';
$_['text_list_status_created']    			  = '<span style="color:orange;">Создан инвойс</span>';
$_['text_list_status_expired']                = '<span style="color:red;">Истекло время</span>';
$_['text_list_status_reversed']               = '<span style="color:orange;">Деньги вовзращены</span>';
$_['text_data_apis_load']                 	  = 'Данные успешно получены!';
$_['text_no_data_apis']                 	  = 'По заданным параметрам данные не найдены!';
$_['text_info_transaction']                   = 'Информация о транзакции';
$_['text_info_payment_id']                    = 'ID платежа';
$_['text_order_id']                    		  = 'Номер заказа';
$_['text_empty']                    		  = 'Данные о платеже отсутствуют...';
$_['text_view_order']                    	  = 'Перейти к заказу';
$_['text_apply_pay']                    	  = 'Принять платеж';
$_['text_cancel_pay']                    	  = 'Вернуть деньги';
$_['text_write_off']                    	  = 'Списать:';
$_['text_info_order_id']                   	  = 'Номер заказа в магазине';
$_['text_info_status']                   	  = 'Статус платежа';
$_['text_info_amount']                   	  = 'Сумма';
$_['text_info_final_amount']                  = 'Списано по итогу';
$_['text_info_currency']                   	  = 'Валюта';
$_['text_info_paytype']                   	  = 'Банк';
$_['text_info_sender_phone']                  = 'Телефон клиента';
$_['text_info_email']                  		  = 'Email клиента';
$_['text_info_create_date']                   = 'Дата создания';
$_['text_info_end_date']                   	  = 'Дата последнего изменения';
$_['text_settle_success']                     = 'Платеж успешно принят!';
$_['text_settle_error']                       = 'Ошибка. Платеж не принят! Причина: %s';
$_['text_refund_success']          			  = 'Деньги успешно возвращены клиенту.';
$_['text_refund_error']          			  = 'Ошибка возврата: %s';
$_['text_invoice_error']          			  = 'Ошибка генерации инвойса: %s';
$_['text_invoice_delete_error']          	  = 'Ошибка удаления инвойса: %s';
$_['text_invoice_success']          		  = 'Инвойс успешно сгенерирован! Ссылка: %s';
$_['text_order_description']          		  = 'Оплата по заказу №%s';
$_['text_invoice_delete_error']          	  = 'Такой инвойс не найден!';
$_['text_invoice_delete_success']          	  = 'Инвойс успешно удален!';
$_['text_product_none']          	  		  = 'Добавьте товары, ни один товар не добавлен.';
$_['text_notify_all']          	  		  	  = 'Все каналы';
$_['text_notify_bot']          	  		  	  = 'Отправка ботом';
$_['text_notify_email']          	  		  = 'Отправка на Email';
$_['text_notify_sms']          	  		  	  = 'Отправка SMS';
$_['text_product_heading']          	  	  = 'Товары'; 
$_['text_info_invoice_order']          	  	  = 'Генерация инвойса для заказа: №'; 
$_['text_total']          	  	  			  = 'Сумма: '; 
$_['text_settle_error_empty']          	  	  = 'Данные за этот период отсутствуют!'; 

// Column
$_['column_order_id']                         = 'Заказ №';
$_['column_pay_id']                           = 'ID платежа MonoPay'; 
$_['column_status']                           = 'Статус платежа';
$_['column_total']                            = 'Сумма платежа';
$_['column_date_added']                       = 'Дата создания транзакции';
$_['column_date_modified']                    = 'Дата закрытия транзакции';
$_['column_action']                    		  = 'Действие';

//Button
$_['button_seend']                    		  = 'Отправить';
$_['button_remove']                    		  = 'Удалить';
$_['button_view_pay']	     	 			  = 'Смотреть детали платежа';
$_['button_load_list']	     	 			  = 'Получить список транзакций';

// Entry
$_['entry_amount']                            = 'Сумма';
$_['entry_transaction']                       = 'Номер платежа MonoPay';
$_['entry_order_status']                      = 'Статус заказа';
$_['entry_currency']           				  = 'Валюта';
$_['entry_order_id']                          = 'Заказ №';
$_['entry_total']                             = 'Итого';
$_['entry_date_added']                        = 'Дата создания транзакции';
$_['entry_date_modified']                     = 'Дата закрытия транзакции';
$_['last_load_data']                     	  = 'Отображаются последние загруженные данные <b>с %s по %s</b>';
$_['entry_product_name']                      = 'Название товара';
$_['entry_product_description']               = 'Описание товара';
$_['entry_product_quantity']               	  = 'Количество';
$_['entry_product_price']               	  = 'Цена, за 1шт';
$_['entry_currency']               	  	  	  = 'Валюта';
$_['entry_validity_time']               	  = 'Время "жизни" инвойса';

$_['help_validity_time']               	  	  = 'Время в секундах, на протяжении которого покупатель сможете оплатить инвойс, максимально 24 часа (86400 сек)';

// Error
$_['error_warning']                           = 'Внимание: Внимательно проверьте форму на наличие ошибок!';
$_['error_permission']                        = 'Внимание: У вас нет прав для изменения заказов!';
$_['error_action']                            = 'Внимание: Действие не может быть завершено!';
$_['error_filetype']			              = 'Недопустимый тип файла!';
$_['error_total']			              	  = 'Сумма заказа не может быть равной нулю!';
$_['error_validity_time']			          = 'Время жизни инвойса может быть от 5600 до 86400!';
