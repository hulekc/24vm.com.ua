<?php
$_['lang'] = 'Uk-ua';
// Heading
$_['heading_title'] = '<strong style="color:#41637d">SMS (СМС) повідомлення</strong>';
$_['heading_main_title'] = 'SMS (СМС) повідомлення';

// Text
$_['text_extension'] = 'Модулі';
$_['text_success'] = 'Налаштування модуля оновлено!';
$_['text_success_sms'] = 'Смс успішно надіслано!';
$_['text_success_log'] = 'Лог очищений!';
$_['text_sms_form'] = 'Довільне смс повідомлення';
$_['text_edit'] = 'Редагування модуля';
$_['text_length'] = 'Довжина повідомлення <b class="lenght">0</b> символів';
$_['text_phone_placeholder'] = '+38(097)1234567';

// Tabs
$_['tab_sms'] = 'Довільне смс';
$_['tab_tags'] = 'Змінні';
$_['tab_template'] = 'Шаблони смс';
$_['tab_viber_setting'] = 'Налаштування Viber';
$_['tab_viber_template'] = 'Шаблони повідомлень';
$_['tab_template_customer'] = 'Шаблони смс покупця';
$_['tab_setting'] = 'Налаштування повідомлень';
$_['tab_gate_setting'] = 'Налаштування шлюзу';
$_['tab_log'] = 'Логи шлюзу';
$_['tab_support'] = 'Служба підтримки';

// Entry
$_['entry_template'] = 'Шаблон повідомлення</br>';
$_['entry_sms_template'] = 'Заготівлі для смс під час перегляду замовлення';
$_['entry_order_status'] = 'Смс для статусів:';
$_['entry_admin_alert'] = 'Надіслати смс адміну';
$_['entry_client_alert'] = 'Надіслати смс покупцю';
$_['entry_order_alert'] = 'Смс при зміні статусу замовлення';
$_['entry_reviews'] = 'Смс для нових відгуків';
$_['entry_customer_group'] = 'Смс для груп покупців';
$_['entry_payment_alert'] = 'Смс для способів оплати';
$_['entry_force'] = 'Форсувати надсилання смс';
$_['entry_translit'] = 'Трансліт тексту смс';

$_['entry_sms_gatename'] = 'SMS шлюз:';
$_['entry_sms_from'] = 'Відправник';
$_['entry_sms_to'] = 'Номер телефону адміністратора';
$_['entry_sms_copy'] = 'Додаткові номери';
$_['entry_sms_gate_username'] = 'Логін на SMS шлюз (або api_id)';
$_['entry_sms_gate_password'] = 'Пароль на SMS шлюз';
$_['entry_sms_log'] = 'Включити логі';

$_['entry_client_phone'] = 'Номер телефону:';
$_['entry_client_sms'] = 'Текст повідомлення:';
$_['entry_admin_template'] = 'Шаблон смс адміністратору (нове замовлення)';
$_['entry_client_template'] = 'Шаблон смс покупцю (нове замовлення)';
$_['entry_reviews_template'] = 'Шаблон повідомлень для нових відгуків';
$_['entry_order_status_template'] = 'Шаблон повідомлень для статусів замовлення';
$_['entry_payment_template'] = 'Шаблон повідомлень для способів оплати';

$_['entry_viber_sender'] = 'Ім’я відправника Viber:';
$_['entry_viber_alert'] = 'Надіслати Viber повідомлення:';
$_['entry_viber_ttl'] = 'Час життя Viber повідомлення (сек = 3600):';
$_['entry_viber_caption'] = 'Напис на кнопці Viber повідомлення:';
$_['entry_viber_image'] = 'Зображення у Viber повідомлення:';
$_['entry_viber_url'] = 'Посилання на кнопку:';
$_['entry_width'] = 'Ширини зображення:';
$_['entry_height'] = 'Висота зображення:';

//Order
$_['entry_sendsms'] = 'Надіслати смс при зміні статусу:';
$_['entry_sms_order_status'] = 'Статус замовлення';
$_['entry_sms_message'] = 'Смс повідомлення';

//Button
$_['button_send'] = 'Надіслати смс';

$_['help_sms_payment'] = 'Якщо встановлено шаблон і включено відправлення смс для <b>методів оплати</b>, то шаблон Нового замовлення для користувача буде проігнорований!';
$_['help_sms_from'] = 'Номер телефону або алфавітно-цифровий відправник';
$_['help_sms_copy'] = 'Введіть номери через кому (без пробілів) у міжнародному форматі +38(код оператора)';
$_['help_phone'] = 'Введіть номер телефону у міжнародному форматі +38(код оператора)';
$_['help_force'] = 'Примусово надсилати смс для автоматичних розсилок';
$_['help_translit'] = 'Транслітерація тексту, - <b>Ваше замовлення оформлено</b>, стало - <b>Vash zakaz oformlen</b>';
$_['help_order_status'] = 'Надсилати смс при зміні статусів замовлення';
$_['help_customer_group'] = 'Автоматичне відправлення смс для вибраних груп покупців. Якщо немає зазначених, смс буде надсилається всім покупцям';
$_['help_payment_alert'] = 'Автоматична відправка смс для вибраних способів оплати після оформлення замовлення';
$_['help_product'] = 'Використовуйте обережно, не допускайте помилок! Приклад: {% for product in products%} Товар:{{product.name}} Ціна:{{product.price}}{% endfor %}';
$_['help_reviews'] = 'Дозволені теги {{product.name}}, {{product.model}}, {{product.sku}}, {{product.date}}<br /> <b>Назва товару скорочується до 50 символів</b>';

// Tags
$_['entry_tags'] = 'Список змінних';
$_['entry_tag_valiable'] = 'Змінна';
$_['entry_tag_description'] = 'Опис';
$_['tag_date'] = 'Дата';
$_['tag_current_date'] = 'Поточна дата';
$_['tag_time'] = 'Час';
$_['tag_store'] = 'Назва магазину';
$_['tag_url'] = 'Посилання магазину';
$_['tag_order_id'] = 'Номер замовлення';
$_['tag_order_total'] = 'Сума замовлення';
$_['tag_order_total_noship'] = 'Сума замовлення без доставки';
$_['tag_order_phone'] = 'Телефон клієнта';
$_['tag_order_comment'] = 'Коментар';
$_['tag_order_status'] = 'Статус замовлення';
$_['tag_payment_method'] = 'Спосіб оплати';
$_['tag_payment_city'] = 'Місто (оплати)';
$_['tag_payment_address'] = 'Адреса (оплати)';
$_['tag_shipping_cost'] = 'Вартість доставки';
$_['tag_shipping_method'] = 'Спосіб доставки';
$_['tag_shipping_city'] = 'Місто (доставка)';
$_['tag_shipping_address'] = 'Адреса (доставка)';
$_['tag_product_total'] = 'Всього товарів';
$_['tag_products'] = 'Масив товарів';
$_['tag_product_name'] = 'Назва товару';
$_['tag_product_model'] = 'Модель товару';
$_['tag_product_sku'] = 'Код товарів';
$_['tag_product_price'] = 'Ціна товару';
$_['tag_product_quantity'] = 'Кількість товару';
$_['tag_firstname'] = 'Ім’я покупця';
$_['tag_lastname'] = 'Прізвище покупця';

// Error
$_['error_permission'] = 'У Вас немає прав для керування цим модулем!';
$_['error_sms_setting'] = 'Помилка: Будь ласка, спочатку задайте налаштування смс шлюзу!';
$_['error_sms'] = 'Помилка: Смс не надіслано!';
$_['error_warning'] = 'Увага: Файл логів %s займає %s!';

// Support
$_['help_support'] = '';