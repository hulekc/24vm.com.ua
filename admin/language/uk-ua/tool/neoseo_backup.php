<?php
// Heading
$_['heading_title']  = '<strong style="color:#41637d">DEV-OPENCART.COM —</strong> Резервні копії <a href="https://dev-opencart.com" target="_blank" title="Dev-opencart.com - Модули и шаблоны для Opencart"><img style="margin-left:15px;height:35px;margin-top:10px;margin-bottom:10px;" src="https://dev-opencart.com/logob.svg" alt="Dev-opencart.com - Модули и шаблоны для Opencart"/></a>';

// Column
$_['column_id']  = '№';
$_['column_name']  = 'Копія';
$_['column_action']  = 'Дії';

// Button
$_['button_close']  = 'Закрити';
$_['button_backup']  = 'Створити копію';
$_['button_download'] = 'Скачати копію';
$_['button_restore']  = 'Відновити базу';
$_['button_delete']  = 'Видалити копію';

// Text
$_['text_neoseo_backup']  = 'Резервні копії';
$_['text_backup_format']  = 'Копія від %s';
$_['text_confirm_restore'] = "Увага!!!\\r\\n\\r\\nУ випадку жорстких обмежень вашого хостингу, відновлення з резервної копії може не встигнути відпрацювати. В цьому випадку доведеться здійснювати відновлення вручну через phpMyAdmin чи інший інструмент роботи з БД.\\r\\n\\r\\nЯкщо ви твердо впевнені, що хостинг не підведе - натисніть ОК";
$_['text_confirm_delete'] = "Увага!!!\\r\\n\\r\\nРезервних копій не буває забагато! Дуже часто після видалення резервної копії потрібні як раз ті дані, що в ній зберігалися. Ми не рекомендуємо видаляти копії вручну\\r\\n\\r\\nЯкщо ви твердо впевнені в тому, що вам потрібно видалити копію - натисніть ОК";
$_['text_success_restore'] = "Відновлення бази даних успішно виконано";
$_['text_error_restore'] = "Відновлення бази даних виконано з помилкою";
$_['text_success_delete'] = "Видалення резервної копії успішно завершено";
$_['text_error_delete'] = "Видалення резервної копії виконано з помилкою";
$_['text_success_backup'] = "Створення резервної копиії успішно завершено!";
$_['text_error_backup'] = "Створення резервної копії виконано з помилкою";
$_['text_error_auth'] = 'Помилка авторизації, будь ласка перевірте настройки.';

$_['text_subject']  = 'Резервне копіювання для {domain} - {status}!';
$_['text_report']  = '<p>Резервне копіювання завершено зі статусом "{status}"!</p><ul><li>База даних - "{status_sql}", {size_sql}MB за {time_sql} сек</li><li>Каталог - "{status_zip}", {size_zip}MB за {time_zip} сек</li><li>Аплоад - "{status_upload}", {time_upload} сек, швидкість {speed_upload}mBs</li></ul><p>Загальний час виконанння - {time} секунд!</p>';

$_['text_success']  = 'успішно';
$_['text_skipped']  = 'пропущено';
$_['text_failed']   = 'помилка';
$_['text_denied']   = 'доступ заборонений';