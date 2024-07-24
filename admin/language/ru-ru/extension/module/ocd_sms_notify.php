<?php
$_['lang'] = 'ru-RU';
// Heading
$_['heading_title'] = '<strong style="color:#41637d">DEV-OPENCART.COM —</strong> <b>СМС (SMS) уведомления 1.4.9</b> <a href="https://dev-opencart.com" target="_blank" title="Dev-opencart.com - Модули и шаблоны для Opencart"><img style="margin-left:15px;height:35px;margin-top:10px;margin-bottom:10px;" src="https://dev-opencart.com/logob.svg" alt="Dev-opencart.com - Модули и шаблоны для Opencart"/></a>';
$_['heading_main_title'] = 'СМС (SMS) уведомления 1.4.9';

// Text
$_['text_extension'] = 'Модули';
$_['text_success'] = 'Настройки модуля обновлены!';
$_['text_success_sms'] = 'Смс успешно отправлено!';
$_['text_success_log'] = 'Лог очищен!';
$_['text_sms_form'] = 'Произвольное смс сообщение';
$_['text_edit'] = 'Редактирование модуля';
$_['text_length'] = 'Длинна сообщения <b class="lenght">0</b> символов';
$_['text_phone_placeholder'] = '+38(012)1234567';

//Tabs
$_['tab_sms'] = 'Произвольное смс';
$_['tab_tags'] = 'Переменные';
$_['tab_template'] = 'Шаблоны смс';
$_['tab_viber_setting'] = 'Настройки Viber';
$_['tab_viber_template'] = 'Шаблоны уведомлений';
$_['tab_template_customer'] = 'Шаблоны смс покупателя';
$_['tab_setting'] = 'Настройки уведомлений';
$_['tab_gate_setting'] = 'Настройки шлюза';
$_['tab_log'] = 'Логи шлюза';
$_['tab_support'] = 'Служба поддержки';

// Entry
$_['entry_template'] = 'Шаблон сообщения </br>';
$_['entry_sms_template'] = 'Заготовки для смс при просмотре заказа';
$_['entry_order_status'] = 'Смс для статусов:';
$_['entry_admin_alert'] = 'Отправить смс админу';
$_['entry_client_alert'] = 'Отправить смс покупателю';
$_['entry_order_alert'] = 'Смс при смене статуса заказа';
$_['entry_reviews'] = 'Смс для новых отзывов';
$_['entry_customer_group'] = 'Смс для групп покупателей';
$_['entry_payment_alert'] = 'Смс для способов оплаты';
$_['entry_force'] = 'Форсировать отправку смс';
$_['entry_translit'] = 'Транслит текста смс';

$_['entry_sms_gatename'] = 'SMS шлюз:';
$_['entry_sms_from'] = 'Отправитель';
$_['entry_sms_to'] = 'Номер телефона администратора';
$_['entry_sms_copy'] = 'Дополнительные номера';
$_['entry_sms_gate_username'] = 'Логин на SMS шлюз (или api_id)';
$_['entry_sms_gate_password'] = 'Пароль на SMS шлюз';
$_['entry_sms_log'] = 'Включить логи';

$_['entry_client_phone'] = 'Номер телефона:';
$_['entry_client_sms'] = 'Текст сообщения:';
$_['entry_admin_template'] = 'Шаблон смс администратору (новый заказ)';
$_['entry_client_template'] = 'Шаблон смс покупателю (новый заказ)';
$_['entry_reviews_template'] = 'Шаблон сообщений для новых отзывов';
$_['entry_order_status_template'] = 'Шаблон сообщений для статусов заказ';
$_['entry_payment_template'] = 'Шаблон сообщений для способов оплаты';

$_['entry_viber_sender'] = 'Имя отправителя Viber:';
$_['entry_viber_alert'] = 'Отправить Viber сообщения:';
$_['entry_viber_ttl'] = 'Время жизни Viber сообщения (сек = 3600):';
$_['entry_viber_caption'] = 'Надпись на кнопке Viber сообщения:';
$_['entry_viber_image'] = 'Изображение в Viber сообщения:';
$_['entry_viber_url'] = 'Ссылка на кнопке:';
$_['entry_width'] = 'Ширины изображения:';
$_['entry_height'] = 'Высота изображения:';

//Order
$_['entry_sendsms'] = 'Отправить смс при смене статуса:';
$_['entry_sms_order_status'] = 'Статус заказа';
$_['entry_sms_message'] = 'Смс сообщение';

//Button
$_['button_send'] = 'Отправить смс';

$_['help_sms_payment'] = 'Если задан шаблон и включена отправка смс для <b>методов оплаты</b>, то шаблон Нового заказа для пользователя будет проигнорирован!';
$_['help_sms_from'] = 'Номер телефона или aлфавитно-цифровой отправитель';
$_['help_sms_copy'] = 'Введите номера через запятую (без пробелов) в международном формате +38(код оператора) или +7(код оператора) 1234567';
$_['help_phone'] = 'Введите телефон в международном формате +38(код оператора) или +7(код оператора) 1234567';
$_['help_force'] = 'Принудительно отправлять смс для автоматических рассылок';
$_['help_translit'] = 'Транслитерация текста, было - <b>Ваш заказ оформлен</b>, стало - <b>Vash zakaz oformlen</b>';
$_['help_order_status'] = 'Отправлять смс при смене статусов заказа';
$_['help_customer_group'] = 'Автоматическая отправка смс для выбранных групп покупателей. Если нет отмеченных, смс будет отправляется всем покупателям';
$_['help_payment_alert'] = 'Автоматическая отправка смс для выбранных способов оплаты после оформления заказа';
$_['help_product'] = 'Используйте осторожно, не допускайте ошибок! Пример: {% for product in products%} Товар:{{product.name}} Цена:{{product.price}}{% endfor %}';
$_['help_reviews'] = 'Разрешенные теги {{product.name}}, {{product.model}}, {{product.sku}}, {{product.date}}<br /> <b>Название товара сокращается до 50 символов</b>';

//Tags
$_['entry_tags'] = 'Список переменных';
$_['entry_tag_valiable'] = 'Переменная';
$_['entry_tag_description'] = 'Описание';
$_['tag_date'] = 'Дата';
$_['tag_current_date'] = 'Текущая дата';
$_['tag_time'] = 'Время';
$_['tag_store'] = 'Название магазина';
$_['tag_url'] = 'Ссылка магазина';
$_['tag_order_id'] = 'Номер заказа';
$_['tag_order_total'] = 'Сумма заказа';
$_['tag_order_total_noship'] = 'Сумма заказа без доставки';
$_['tag_order_phone'] = 'Телефон клиента';
$_['tag_order_comment'] = 'Комментарий';
$_['tag_order_status'] = 'Статус заказа';
$_['tag_payment_method'] = 'Способ оплаты';
$_['tag_payment_city'] = 'Город (оплаты)';
$_['tag_payment_address'] = 'Адрес (оплаты)';
$_['tag_shipping_cost'] = 'Стоимость доставки';
$_['tag_shipping_method'] = 'Способ доставки';
$_['tag_shipping_city'] = 'Город (доставка)';
$_['tag_shipping_address'] = 'Адрес (доставка)';
$_['tag_product_total'] = 'Всего товаров';
$_['tag_products'] = 'Массив товаров';
$_['tag_product_name'] = 'Название товара';
$_['tag_product_model'] = 'Модель товара';
$_['tag_product_sku'] = 'Код товаров';
$_['tag_product_price'] = 'Цена товара';
$_['tag_product_quantity'] = 'Количество товара';
$_['tag_firstname'] = 'Имя покупателя';
$_['tag_lastname'] = 'Фамилия покупателя';

// Error
$_['error_permission'] = 'У Вас нет прав для управления этим модулем!';
$_['error_sms_setting'] = 'Ошибка: Пожалуйста сперва задайте настройки смс шлюза!';
$_['error_sms'] = 'Ошибка: Смс не отправлено!';
$_['error_warning'] = 'Внимание: Файл логов %s занимает %s!';

// Support
$_['help_support'] = '';