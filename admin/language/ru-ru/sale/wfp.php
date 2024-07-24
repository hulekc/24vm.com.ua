<?php
// Heading
$_['heading_title']                           = 'Транзакции WayForPay';

$_['date_format_short']                       = 'd.m.Y H:i';

// Text
$_['text_list']                         	  = 'Список транзакций WayForPay';
$_['text_list_status_approved']               = '<span style="color:green;">Успешный</span>';
$_['text_list_status_inprocessing']           = '<span style="color:green;">В процессе</span>';
$_['text_list_status_refunded']               = '<span style="color:red;">Деньги возвращены</span>';
$_['text_list_status_declined']               = '<span style="color:red;">Неудачная оплата</span>';
$_['text_list_status_waitingauthcomplete']    = '<span style="color:orange;">Ожидание</span>';
$_['text_list_status_expired']                = '<span style="color:red;">Истекло время</span>';
$_['text_list_status_voided']                 = '<span style="color:orange;">Аннулировано или возвращено</span>';
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
$_['text_info_currency']                   	  = 'Валюта';
$_['text_info_paytype']                   	  = 'Банк';
$_['text_info_sender_phone']                  = 'Телефон клиента';
$_['text_info_email']                  		  = 'Email клиента';
$_['text_info_create_date']                   = 'Дата создания';
$_['text_info_end_date']                   	  = 'Дата закрытия';
$_['text_settle_success']                     = 'Платеж успешно принят!';
$_['text_settle_error']                       = 'Ошибка. Платеж не принят! Причина: %s';
$_['text_refund_success']          			  = 'Деньги успешно возвращены клиенту.';
$_['text_refund_error']          			  = 'Ошибка возврата: %s';
$_['text_invoice_error']          			  = 'Ошибка генерации инвойса: %s';
$_['text_invoice_success']          		  = 'Инвойс успешно сгенерирован! Ссылка: %s';
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

// Column
$_['column_order_id']                         = 'Заказ №';
$_['column_pay_id']                           = 'ID платежа WayForPay'; 
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
$_['entry_transaction']                       = 'Номер платежа WayForPay';
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
$_['entry_name']               	  			  = 'Имя клиента';
$_['entry_email']               	  		  = 'Email клиента';
$_['entry_language']               	  		  = 'Язык';
$_['entry_last_name']               	  	  = 'Фамилия клиента';
$_['entry_telephone']               	  	  = 'Телефон клиента';
$_['entry_currency']               	  	  	  = 'Валюта';
$_['entry_chanel_notify']               	  = 'Канал оповещения';

// Error
$_['error_warning']                           = 'Внимание: Внимательно проверьте форму на наличие ошибок!';
$_['error_permission']                        = 'Внимание: У вас нет прав для изменения заказов!';
$_['error_action']                            = 'Внимание: Действие не может быть завершено!';
$_['error_filetype']			              = 'Недопустимый тип файла!';
$_['error_first_name']			              = 'Укажите имя клиента!';
$_['error_last_name']			              = 'Укажите фамилию клиента!';
$_['error_email']			              	  = 'Укажите Email клиента!';
$_['error_telephone']			              = 'Проверьте телефон клиента!';
$_['error_total']			              	  = 'Сумма заказа не может быть равной нулю!';
