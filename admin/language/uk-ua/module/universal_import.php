<?php
// Heading
$_['heading_title'] = '<strong style="color:#41637d"></strong> Universal Import/Export Pro>';

// Text
$_['text_module'] = 'Модулі';
$_['text_browse'] = 'Відкрити';
$_['text_continue'] = 'Наступний крок';
$_['text_add_column'] = 'Додати колонку';
$_['text_remove_column'] = 'Видалити колонку';

$_['text_success'] = 'Виконано: Зміни налаштувань збережені!';
$_['text_store_select'] = 'Магазин:';
$_['text_import'] = 'Імпорт';
$_['text_type_product'] = 'Товар';
$_['text_type_product_update'] = 'Швидке оновлення товарів';
$_['text_type_category'] = 'Категорія';
$_['text_type_information'] = 'Інформація';
$_['text_type_manufacturer'] = 'Виробник';
$_['text_type_customer'] = 'Клент';
$_['text_ignore'] = '';
$_['text_column'] = 'колонка';
$_['text_next_step'] = 'Перевірити та продовжити';
$_['text_start_process'] = 'Почати процес імпорту';
$_['text_pausing_process'] = 'Зупинка, будь ласка, дочекайтеся завершення змін...';
$_['text_resume_process'] = 'Продовжити процес';
$_['text_start_simu_process'] = 'Почати повну симуляцію';
$_['text_pause_process'] = 'Іздійснюється імпортування - Натисніть для паузи';
$_['text_pause_simu_process'] = 'Симуляція в процесі - Натисніть для паузи';
$_['text_previous_step'] = 'Попередній крок';
$_['text_data_preview'] = 'Перев’ю даних';
$_['text_row'] = 'Рядок';

$_['text_action_update'] = 'Оновити - перезаписати';
$_['text_action_soft_update'] = 'Оновити - зберегти';
$_['text_action_insert'] = 'Вставити';
$_['text_action_skip'] = 'Пропустити';
$_['text_action_delete'] = 'Видалити';
$_['text_action_overwrite'] = 'Перезаписати';
$_['text_action_rename'] = 'Переназвати';
$_['text_img_action_keep'] = 'Залишити зображення';
$_['text_img_action_rename'] = 'Перейменувати нове зображення';
$_['text_img_action_overwrite'] = 'Перезаписати новим зображенням';

// Tabs
$_['text_tab_0'] = 'Імпорт';

$_['text_import_step1'] = '<b>Крок 1</b> - Вибір файлу';
$_['text_import_step2'] = '<b>Крок 2</b> - Налаштування імпорту';
$_['text_import_step3'] = '<b>Крок 3</b> - Відповідність стовпців';
$_['text_import_step4'] = '<b>Крок 4</b> - Перевірка даних';
$_['text_import_step5'] = '<b>Крок 5</b> - Почати процес';

// Profile manager
$_['text_profile_dir_not_writable'] = 'Папка з профілем налаштувань не має доступу до запису, переконайтеся, що у вас є дозволи на запис у папки (і підпапки):';
$_['text_profile_name'] = 'Ім’я профілю';
$_['text_new_profile'] = '- Зберегти як новий профіль-';
$_['text_save_profile'] = 'Зберегти профіль';
$_['text_delete_profile'] = 'Видалити профіль';
$_['text_save_profile_i'] = 'Збережіть ваш поточний набір на випадок використання в подальших імпортуваннях.<br/>Ви можете вибрати профіль налаштувань, що існує, щоб змінити його або створити новий.';
$_['text_profile_saved'] = 'Ваш профіль успішно збережено';

// Step 1
$_['entry_name'] = 'Ім’я';
$_['entry_demo_file'] = 'Завантажити демо файл';
$_['entry_demo_file_i'] = 'Використовуйте завантажені файли для перевірки можливостей модуля. Якщо ви бажаєте завантажити свій власний - залиште це поле порожнім і завантажте файл у попередньому полі.';
$_['entry_type'] = 'Тип імпорту';
$_['entry_type_i'] = 'Який тип даних ви збираєтеся імпортувати?';
$_['entry_profile'] = 'Профіль налаштувань';
$_['text_select_profile'] = 'Виберіть параметри профілю';
$_['entry_profile_i'] = 'Профіль містить усі налаштування, які можна вказати в кроках 2 і 3. Ви можете зберегти новий профіль або зміни на кроці 4.';
$_['entry_file'] = 'Вибрати файл';
$_['entry_file_i'] = 'Вставте файл сюди.<br/>Підтримується необмежений розмір файлу.<br/>Підтримувані типи файлів: CSV, XML, XLS, XLSX, ODS';
$_['text_dropzone'] = 'Перетягніть файл сюди або натисніть для завантаження через провідник';
$_['text_file_loaded'] = 'Файл завантажений:';
$_['text_file_error'] = 'Помилка:';

// Step 2
$_['text_common_settings'] = 'Загальні налаштування';
$_['entry_xml_node'] = 'Вузол елемента XML';
$_['entry_xml_node_i'] = 'Встановіть вузол xml для кожного елемента у вашому файлі, наприклад <product> або <item> (встановіть значення без дужок). Система спробує визначити його автоматично, просто змініть його, якщо значення неправильне';
$_['entry_csv_separator'] = 'розділювач полів CSV';
$_['entry_multiple_separator'] = 'Розділювач кількох значень';
$_['entry_multiple_separator_i'] = 'Якщо поле містить кілька значень, вкажіть символ, що їх розділяє.';
$_['entry_csv_header'] = 'Перший рядок це шапка';
$_['entry_item_identifier'] = 'Унікальний ідентифікатор товару';
$_['entry_item_identifier_i'] = 'Унікальне значення за яким будуть оновлюватися вже додані товари до бази.';
$_['entry_item_exists'] = 'Дії з існуючими товарами';
$_['entry_item_exists_i'] = 'Перезаписати: всі дані будуть заново перезаписані, інформація в порожніх полях на кроці 3 буде видалена (це стандартний метод opencart, що включає всі модифікації, що вносяться) - Оновити: будуть оновлені тільки ті поля, які ви вкажіть в крок 3, інформація не вказана в полях кроку 3 буде збережена.';
$_['entry_item_not_exists'] = 'Нові позиції прайсу';
$_['text_image_settings'] = 'Налаштування зображення';
$_['entry_image_download'] = 'Завантажити зображення';
$_['entry_image_download_i'] = 'Якщо зображення потрібно завантажити із зовнішнього сайту - зазначте повний url, якщо воно зберігається в каталозі вашого сайту - використовуйте формат /image/catalog/your-image-name.jpg';
$_['entry_image_exists'] = 'Існуюче зображення';
$_['entry_image_exists_i'] = 'Що робити, якщо зображення з таким ім’ям вже існує?';
$_['entry_image_location'] = 'Розташування зображення';
$_['entry_image_location_i'] = 'У разі завантаження зображень з інших сайтів, вкажіть шлях до них у каталозі вашого сайту (напр: products/). Цей параметр не використовується для призначення файлів вашого каталогу.';
$_['entry_image_keep_path'] = 'Копіювати шлях url';
$_['entry_image_keep_path_i'] = 'Дотримуватися тієї ж структури папок що і на сайті донорі. Наприклад, anyshop.com/dir/subdir/image.jpg зображення буде збережено в dir/subdir/image.jpg вашого сайту.';
$_['text_category_settings'] = 'Налаштування категорії';
$_['entry_category_create'] = 'Створити, якщо не існує';
$_['text_manufacturer_settings'] = 'Налаштування виробника';
$_['entry_manufacturer_create'] = 'Створити, якщо не існує';

// Step 3
$_['tab_extra'] = 'Власні поля';
$_['entry_extra'] = 'Власне поле';
$_['entry_extra_ml'] = 'Опис власного поля';
$_['placeholder_extra_col'] = 'Назва поля';
$_['info_extra_field_title'] = 'Власні поля';
$_['info_extra_field'] = 'Тут ви можете створювати власні поля, це корисно якщо ви використовуєте якісь модулі, що додають дані до ваших таблиць.<br/>Якщо ваше власне поле мультимовне, тоді воно знаходиться в описовій частині, в У такому разі вам варто використовувати Опис власного поля. Це може бути корисним для seo модуля, який додає наприклад SEO H1 та інші дані, дізнайтеся ім’я яке використовує даний модуль і вставте "meta_h1" або "seo_h1" у поле Ім’я, а в правому випадаючому меню виберіть колонку в імпортованому файлі з якого будуть використані дані.<br/><br/>Якщо в процесі імпорту ви отримаєте невизначені помилки індексування, це наслідок наявності великої кількості власних полів, створених сторонніми модулями. Тому ви повинні використовувати дану секцію щоб додати поля в процес імпорту, помилки будуть підказувати конкретні імена відсутніх у файлі полів які обов’язкові.';
$_['text_remove_extra_col'] = 'Видалити власне поле';
$_['text_add_extra_field'] = 'Додати нове власне поле';
$_['text_add_extra_field_ml'] = 'Додати новий опис для власного поля';
$_['tab_functions'] = 'Додаткові функції';
$_['text_add_function'] = 'Додати функцію';
$_['text_function_type'] = 'Тип';
$_['text_function_action'] = 'Дія';
$_['text_remove_function'] = 'Видалити функцію';
$_['tab_quick_update'] = 'Швидке оновлення';
$_['entry_product_id'] = 'ID продукту';
$_['entry_seo_h1'] = 'SEO H1';
$_['entry_seo_h2'] = 'SEO H2';
$_['entry_seo_h3'] = 'SEO H3';
$_['entry_img_title'] = 'title зображення';
$_['entry_img_alt'] = 'alt зображення';
$_['entry_separator'] = 'Розділювач';
$_['entry_subcat_separator'] = 'Розділювач підкатегорії';
$_['entry_subcat_separator_i'] = 'Наприклад кат1 > подкат1; кат2 > подкат2';
$_['entry_dimension_l'] = 'Довжина';
$_['entry_dimension_w'] = 'Ширина';
$_['entry_dimension_h'] = 'Висота';
$_['entry_category_id'] = 'ID Категорії';
$_['entry_information_id'] = 'ID Інформація';
$_['entry_manufacturer_id'] = 'ID Виробника';
$_['entry_custsomer_id'] = 'ID Клієнта';
$_['entry_email'] = 'Email';
$_['import_default_value'] = 'За замовчуванням';
$_['entry_default_i'] = 'Вставте сюди дефолтне закінчення для даного поля, якщо поле буде порожнім або не пов’язане з будь-якими показниками у файлі буде використано значення за промовчанням';
$_['help_field_category'] = 'Якщо кілька категорій перелічені в даному полі, використовуйте роздільник, наприклад: Категорія1 > Підкатегорія1 ; Категорія2 > Підкатегорія2';
$_['help_field_related_id'] = 'Використовуйте роздільник, щоб вставити кілька значень, значенням може бути ID товару або ідентифікатор встановлений у кроці 2';
$_['help_field_image'] = 'У разі використання роздільника між адресами зображень, перше буде призначено основним';
$_['help_field_product_image'] = 'Щоб завантажити кілька зображень, ви можете використовувати роздільник або натиснути Додати рядок, щоб вибрати стовпці для додаткових зображень у вашому файлі';
$_['help_field_product_option_'] = '';
$_['help_field_product_attribute'] = 'Може мати три різні формати - 1: <назва_групи_атрибутів>:<ім’я атрибута>:<значення> -2: <ім’я_атрибута>:<значення> - 3: <значення> (заголовок стовпця буде використовуватись як назва атрибута) - Група та атрибут створюються автоматично, якщо ще не створені. У разі 2 і 3, якщо атрибут не створений, він призначається в групу `Default`';
$_['help_field_product_special'] = 'Має бути у форматі типу: <номер_групи_клієнта>:<пріоритет>:<ціна>:<дата_початку>:<дата_закінчення> - або <ціна> (у цьому випадку ніякої кінцевої дати не буде встановлено) ';
$_['help_field_product_discount'] = 'Має бути у форматі: <номер_групи_клієнта>:<кількість>:<пріоритет>:<ціна>:<дата_початку>:<дата_закінчення>';
$_['help_field_product_id'] = 'Виберіть це, якщо хочете використовувати порядковий номер товару (product ID)';
$_['help_field_manufacturer_id'] = 'Використовуйте порядковий номер виробника або його назву';
$_['help_field_product_category'] = 'Використовуйте порядковий номер категорії або її ім’я';
$_['help_field_parent_id'] = 'Якщо більше дух рівнів, це поле повинно мати наступний формат роздільника підкатегорії: Категорія1 > Підкатегорія1 > Підкатегорія2';
$_['entry_salt'] = 'salt';
$_['help_field_password'] = '';
$_['help_field_salt'] = 'Сіль є додатковим захистом для пароля, це поле має бути встановлене, якщо імпортовані паролі вже зашифровані, якщо не встановлено, ваші користувачі не зможуть увійти до системи.';
$_['entry_pwd_hash'] = 'Шифрування';
$_['entry_pwd_hash_i'] = 'Якщо ваш пароль зашифрований, позначте відповідне значення тут і заповніть поле солі, яке потрібно клієнту для входу до системи.';
$_['text_pwd_clear'] = 'Очистити пароль';
$_['text_pwd_hash'] = 'Зашифрований пароль';

$_['xfn_delete_item'] = 'Видалити пункт';
$_['text_delete_if'] = 'Видалити якщо';
$_['text_value_is'] = 'Значення дорівнює';

// Step 4
$_['text_simu_summary'] = 'Сумарно симулювати (10 рядків):';
$_['text_full_simu_summary'] = 'Звіт повної симуляції:';
$_['entry_row_status'] = 'Дія з рядком';
$_['text_simu_inserted'] = 'Вставити';
$_['text_simu_updated'] = 'Оновити';
$_['text_simu_deleted'] = 'Видалити';
$_['text_simu_skipped'] = 'Пропустити';
$_['text_simu_error'] = 'Помилка';

// Step 5
$_['text_process_summary'] = 'Сумарний звіт';
$_['text_rows_csv'] = 'Усього рядків у csv';
$_['text_rows_process'] = 'Усього рядків до виконання';
$_['text_rows_insert'] = 'Усього рядків до вставки';
$_['text_rows_update'] = 'Усього рядків до оновлення';
$_['text_process_done'] = 'Статус процесу';
$_['text_rows_processed'] = 'Виконано';
$_['text_rows_inserted'] = 'Вставлено';
$_['text_rows_updated'] = 'Оновлено';
$_['text_rows_deleted'] = 'Видалено';
$_['text_rows_skipped'] = 'Пропущено';
$_['text_rows_error'] = 'Помилка';
$_['text_empty_line_skip'] = 'Порожній рядок';


$_['entry_color_scheme'] = 'Color scheme:<span class="help">Швидкий доступ до деяких колірних тем, змінюйте їх на вкладці дазайн</span>';
$_['entry_logo'] = 'Логотип:';
$_['entry_feed_title'] = 'Ім’я:';
$_['entry_cache_delay'] = 'Затримка кешування:<span class="help">Скільки часу відображати згенерований файл до повторної генерації ?</span>';
$_['entry_language'] = 'Мова:<span class="Допомога"></span>';
$_['entry_feed_url'] = 'Шлях до даних Url:<span class="help">Надайте цей url сервісу за призначенням</span>';

// File format
$_['text_format_csv'] = 'CSV';
$_['text_format_xml'] = 'XML';
$_['text_format_xls'] = 'XLS';
$_['text_format_xlsx'] = 'XLSX';
$_['text_format_ods'] = 'ODS';
$_['text_format_pdf'] = 'PDF';
$_['text_format_html'] = 'HTML';

// Export
$_['text_tab_1'] = 'Експорт';
$_['entry_export_type'] = 'Тип експорту';
$_['entry_export_type_i'] = 'Який тип інформації ви хочете експортувати?';
$_['entry_export_format'] = 'Формат експорту';
$_['entry_export_format_i'] = 'Виберіть формат експортованого файлу на виході';
$_['text_start_export'] = 'Створити файл експорту';
$_['export_all'] = '- Все -';

// Export filters
$_['export_filters'] = 'Фільтра';
$_['filter_language'] = 'Мова';
$_['filter_manufacturer'] = 'Виробник';
$_['filter_manufacturer_i'] = 'Ви можете вибрати кількох виробників, почніть вводити назву для швидкого пошуку потрібного виробника.';
$_['filter_category'] = 'Категорія';
$_['filter_category_i'] = 'Ви можете вибрати декілька категорій, почніть вводити назву для швидкого пошуку потрібної категорії';
$_['filter_store'] = 'Магазин';
$_['filter_limit'] = 'Ліміт';
$_['filter_limit_i'] = 'Обмеження за кількістю даних, що експортуються Почати: почати експорт з цього товару - Ліміт: скільки товарів експортувати';
$_['filter_limit_start'] = 'Почати';
$_['filter_limit_limit'] = 'Ліміт';

// Export options
$_['export_options'] = 'Опції';
$_['param_image_path'] = 'Режим шляху до зображення';
$_['param_image_path_i'] = 'Використовуйте повну url щоб отримати абсолютну адресу до вашого зображення - Стандартний шлях Opencart використовується тільки при експорті на тому ж сайті.';
$_['image_path_relative'] = 'Стандартний шлях Opencart';
$_['image_path_absolute'] = 'Повний url';

// Content editor
$_['text_tab_2'] = 'Опції';
$_['tab_option_1'] = 'Продуктивність';
$_['entry_batch_import'] = 'Імпортувати за раз';
$_['entry_batch_export'] = 'Експортувати за раз';
$_['batch_import_i'] = 'Виберіть кількість оброблюваних товарів за один запит, змінюйте ці налаштування з метою покращення параметрів імпорту/експорту.<br/>Висока кількість товарів за один запит може прискорити процес, але надто великі показники можуть призвести до збою через недоліки ресурсів вашого сервера.';

$_['text_tab_about'] = 'Про модуль';

// Entry
$_['entry_status'] = 'Статус:';

// Info
$_['info_title_default'] = 'Допомога';
$_['info_msg_default'] = 'Розділ допомоги для цієї теми не знайдено';

// Error
$_['error_permission'] = 'УВАГА: у вас немає прав доступу для зміни цього розширення!';
$_['error_permission_demo'] = 'Режим ДЕМО, збереження неможливо';