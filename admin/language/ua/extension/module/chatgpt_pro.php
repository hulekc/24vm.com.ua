<?php
// Heading
$_['module_title'] = '<strong style="color:#41637d">Контент-генератор за допомогою ChatGPT</strong> <b>';
$_['module_title_free'] = 'Opencart ChatGPT Free';

// Header Menu
$_['gptp_assistant'] = 'Чат Асистент';
$_['gptp_settings'] = 'Налаштування';
$_['gptp_integration'] = 'Інтеграція';

$_['heading_title']    = '<strong style="color:#41637d">Контент-генератор за допомогою ChatGPT</strong>';

// Tabs
$_['tab_chat'] = 'Асистент';
$_['tab_general'] = 'Налаштування';
$_['tab_extended'] = 'Розширені';
$_['tab_info'] = 'Інформація';
// Text
$_['text_extension'] = 'Розширення';
$_['text_success'] = 'Налаштування модуля успішно оновлені!';
$_['text_edit'] = 'Редагувати модуль';
$_['text_general'] = 'Загальні налаштування';
$_['text_extended'] = 'Розширені налаштування';
$_['text_api_secure'] = '***** Ключ API приховано! Все гаразд! *****';
$_['text_api_extra_secure']  = '***** Додаткові API ключі приховані! Все ОК! *****';
$_['text_default'] = 'За замовчуванням';
$_['text_demo_limit']      = ' [ДЕМО РЕЖИМ - ОБСЯГ ДАНИХ ОБМЕЖЕНО!]';
//$_['text_translate']   = 'Translate this [HTML] text to [to]:'; //from [from] to [to]
$_['text_translate']   = 'Translate the following to [to], the content can be either plain text or HTML code, make sure to preserve any formatting and tags, output only result:';
$_['text_copied'] = 'Скопійовано!';
$_['text_length']      = 'Символів: ';
$_['text_all_languages']   = 'Всі мови';
$_['text_only_empty']      = 'Порожні поля';
$_['text_all_fields']      = 'Усі поля';
$_['text_this_text']      = 'Цей текст';
$_['text_language']   = 'Мова';
$_['text_fields']   = 'Поля';
$_['text_fill']   = 'Заповняти';
$_['text_mode']   = 'Режим';
$_['text_mode_generate']   = 'Генерація';
$_['text_mode_translate']   = 'Переклад';
$_['text_do_translate']   = 'Перекласти';
$_['text_source']   = 'Джерело';

// Links
$_['link_name'] = 'OpencartChatGPT';
$_['link_chat'] = 'https://t.me/OpencartChatGPT';
$_['link_support'] = 'https://t.me/OpencartChatGPT/1';
$_['link_ideas'] = 'https://t.me/OpencartChatGPT/2';
$_['link_keys'] = 'https://t.me/OpencartChatGPT/3';

$_['link_name_ru'] = 'OpencartChatGPTru';
$_['link_chat_ru'] = 'https://t.me/OpencartChatGPTru';
$_['link_support_ru'] = 'https://t.me/OpencartChatGPTru/1';
$_['link_ideas_ru'] = 'https://t.me/OpencartChatGPTru/2';
$_['link_keys_ru'] = 'https://t.me/OpencartChatGPTru/3';

$_['link_channel'] = 'https://t.me/+WFGthATQ6SQLAUWF';

$_['link_donate'] = 'https://send.monobank.ua/jar/6Q8Pg8bMbb';
$_['link_donate_ru'] = 'https://www.paypal.com/donate/?hosted_button_id=PYFQHNLNJCEGE';



// Entry
$_['entry_chat_query'] = 'Запит';
$_['entry_chat_response'] = 'Чат';
$_['entry_status'] = 'Статус';
$_['entry_api_key'] = 'Ключ OpenAI API';
$_['entry_api_key_extra'] = 'Додаткові TRIAL ключі';
$_['entry_license'] = 'Ліцензійний ключ';
$_['entry_model'] = 'модель';
$_['entry_temperature'] = 'температура';
$_['entry_top_p'] = 'top_p';
$_['entry_presence_penalty'] = 'presence_penalty';
$_['entry_frequency_penalty'] = 'frequency_penalty';
$_['entry_instruction'] = 'Інструкція';
$_['entry_additional'] = 'Додатково';
$_['entry_quick_chat'] = 'Швидкий чат';
$_['entry_translate'] = 'Переклад: ';
$_['entry_site'] = 'Веб-сайт';
$_['entry_add_tpl']     = 'Додати шаблон';
$_['entry_add_tpl_new']     = 'Новый шаблон';
$_['entry_add_tpl_name']     = 'Назва шаблону';
$_['entry_add_tpl_route']     = 'Постійна частина маршруту <code>?route=</code>';
$_['entry_add_tpl_field']     = 'Додати поле';
$_['entry_add_tpl_field_name']     = 'Назва поля';
$_['entry_add_tpl_var']     = 'Додати змінну';


// Шаблони
$_['tab_templates'] = 'Шаблони';
$_['entry_tpl_variable'] = 'Змінні';
$_['entry_tpl_selector'] = 'Селектор поля <code>name="..."</code>';
$_['text_tpl_selector_help'] = 'Використовуйте <kbd>LANG_ID</kbd> замість ID мови!';
$_['entry_tpl_template'] = 'Шаблон';

$_['entry_tpl_meta_h1'] = 'HTML-тег H1';
$_['entry_tpl_meta_title'] = 'Мета-тег Title';
$_['entry_tpl_meta_description'] = 'Мета-тег Description';
$_['entry_tpl_meta_keyword'] = 'Мета-тег Keywords';
$_['entry_tpl_description'] = 'Опис';

$_['text_tpl_product'] = 'Шаблони для товарів';
$_['entry_tpl_product'] = 'Товари';
$_['entry_tpl_product_name'] = 'Назва товару';
$_['entry_tpl_tag'] = 'Теги товару';
$_['entry_tpl_product_vars'] = <<<END
<p><i class="fa fa-clone"></i> <code>[name]</code> - Назва товару</p>
<p><i class="fa fa-clone"></i> <code>[meta_h1]</code> - HTML-тег H1</p>
<p><i class="fa fa-clone"></i> <code>[meta_title]</code> - Мета-тег Title</p>
<p><i class="fa fa-clone"></i> <code>[meta_description]</code> - Мета Description</p>
<p><i class="fa fa-clone"></i> <code>[meta_keyword]</code> - Мета-тег Keywords</p>
<p><i class="fa fa-clone"></i> <code>[description]</code> - Опис товару</p>
<p><i class="fa fa-clone"></i> <code>[tag]</code> - Теги товару</p>
<p><i class="fa fa-clone"></i> <code>[model]</code> - Модель (Код товару)</p>
<p><i class="fa fa-clone"></i> <code>[price]</code> - Ціна</p>
<p><i class="fa fa-clone"></i> <code>[manufacturer]</code> - Виробник</p>
<p><i class="fa fa-clone"></i> <code>[main_category]</code> - Головна категорія</p>
<p><i class="fa fa-clone"></i> <code>[attributes]</code> - Атрибути</p>
END;

$_['text_tpl_category'] = 'Шаблони для категорій';
$_['entry_tpl_category'] = 'Категорії';
$_['entry_tpl_category_name'] = 'Назва категорії';
$_['entry_tpl_category_vars'] = <<<END
<p><i class="fa fa-clone"></i> <code>[name]</code> - Назва категорії</p>
<p><i class="fa fa-clone"></i> <code>[meta_h1]</code> - HTML-тег H1</p>
<p><i class="fa fa-clone"></i> <code>[meta_title]</code> - Мета-тег Title</p>
<p><i class="fa fa-clone"></i> <code>[meta_description]</code> - Мета Description</p>
<p><i class="fa fa-clone"></i> <code>[meta_keyword]</code> - Мета-тег Keywords</p>
<p><i class="fa fa-clone"></i> <code>[description]</code> - Опис категорії</p>
END;

$_['text_tpl_manufacturer'] = 'Шаблони для виробників';
$_['entry_tpl_manufacturer'] = 'Виробники';
$_['entry_tpl_manufacturer_name'] = 'Назва виробника';
$_['entry_tpl_manufacturer_vars'] = <<<END
<p><i class="fa fa-clone"></i> <code>[name]</code> - Назва виробника</p>
<p><i class="fa fa-clone"></i> <code>[meta_h1]</code> - HTML-тег H1</p>
<p><i class="fa fa-clone"></i> <code>[meta_title]</code> - Мета-тег Title</p>
<p><i class="fa fa-clone"></i> <code>[meta_description]</code> - Мета Description</p>
<p><i class="fa fa-clone"></i> <code>[meta_keyword]</code> - Мета-тег Keywords</p>
<p><i class="fa fa-clone"></i> <code>[description]</code> - Опис виробника</p>
END;

$_['text_tpl_ocfilter'] = 'Шаблони для SEO сторінок OCFilter';
$_['entry_tpl_ocfilter'] = 'OCFilter';
$_['entry_tpl_ocfilter_name'] = 'Назва SEO сторінки';
$_['entry_tpl_ocfilter_heading_title'] = 'Заголовок (H1)';
$_['entry_tpl_ocfilter_description_top'] = 'Верхній опис';
$_['entry_tpl_ocfilter_description_bottom'] = 'Нижній опис';
$_['entry_tpl_ocfilter_vars'] = <<<END
<p><i class="fa fa-clone"></i> <code>[name]</code> - Назва сторінки</p>
<p><i class="fa fa-clone"></i> <code>[heading_title]</code> - Заголовок (H1)</p>
<p><i class="fa fa-clone"></i> <code>[meta_title]</code> - Мета-тег Title</p>
<p><i class="fa fa-clone"></i> <code>[description_top]</code> - Верхній опис</p>
<p><i class="fa fa-clone"></i> <code>[description_bottom]</code> - Нижній опис</p>
<p><i class="fa fa-clone"></i> <code>[meta_description]</code> - Мета Description</p>
<p><i class="fa fa-clone"></i> <code>[meta_keyword]</code> - Мета-тег Keywords</p>
END;


$_['tpl_default_product'] = array(
	'meta_h1' => 'Згенеруй короткий H1 заголовок про [name]',
	'meta_title' => 'Згенеруй Мета-тег Title про [name]',
	'meta_description' => 'Згенеруй Мета-тег Description про [name]',
	'description' => 'Згенеруй опис про [name]',
	'meta_keyword' => 'Згенеруй список ключових слів для SEO, розділених комою про [name]',
	'tag' => 'Згенеруй список тегів, розділених комою про [name]',
);
$_['tpl_default_category'] = array(
	'meta_h1' => 'Згенеруй короткий H1 заголовок про [name]',
	'meta_title' => 'Згенеруй Мета-тег Title про [name]',
	'meta_description' => 'Згенеруй Мета-тег Description про [name]',
	'description' => 'Згенеруй опис про [name]',
	'meta_keyword' => 'Згенеруй список ключових слів для SEO, розділених комою про [name]',
);
$_['tpl_default_manufacturer'] = array(
	'meta_h1' => 'Згенеруй короткий H1 заголовок про [name]',
	'meta_title' => 'Згенеруй Мета-тег Title про [name]',
	'meta_description' => 'Згенеруй Мета-тег Description про [name]',
	'description' => 'Згенеруй опис про [name]',
	'meta_keyword' => 'Згенеруй список ключових слів для SEO, розділених комою про [name]',
);
$_['tpl_default_ocfilter'] = array(
	'heading_title' => 'Згенеруй короткий H1 заголовок про [name]',
	'meta_title' => 'Згенеруй Мета-тег Title про [name]',
	'description_top' => 'Згенеруй опис про [name]',
	'description_bottom' => 'Згенеруй опис про [name]',
	'meta_description' => 'Згенеруй Мета-тег Description про [name]',
	'meta_keyword' => 'Згенеруй список ключових слів для SEO, розділених комою про [name]',
);


// Допомога
$_['help_development_info'] = '';
$_['help_instruction_info'] = <<<END
<ol>
<li>Створіть ключ до ChatGPT API на платформі OpenAi: <a href="https://platform.openai.com/account/api-keys" target="_blank">https://platform.openai.com/account/api-keys</a>.</li>
<li>Збережіть API ключ в налаштуваннях та починайте використовувати цей модуль!</li>
</ol>
END;

$_['help_additional_info'] = <<<END
<p>По мірі запитів, будуть додаватися інтеграції з іншими модулями та шаблонами.<br />
На даний момент <strong>Opencart ChatGPT Pro</strong> сумісний та працює в наступних розділах:</p>
<ul>
<li>Мета-теги Title, H1</li>
<li>Мета-теги Description</li>
<li>Інформаційні поля налаштувань магазину</li>
<li>Категорії, Товари, Виробники та Статті</li>
<li>Відгуки + Відповідь адміністратора</li>
<li>HTML модуль</li>
<li><strong>SEO сторінки OCFilter</strong></li>
<li><strong>Блог SEO-CMS / SEO-CMS TOP</strong></li>
<li><strong>Шаблон JOURNAL 3</strong></li>
<li>OCTemplates - Статті блогу</li>
<li>OCTemplates - Категорії блогу</li>
<li>OCTemplates - Коментарі блогу + Відповідь адміністратора</li>
<li>Octemplates - Питання / Відповідь (FAQ)</li>
<li>Octemplates - Вкладки для товару</li>
<li>Octemplates - Відгуки про магазин + Відповідь адміністратора</li>
<li>та багато інших, яких я не згадав...</li>
</ul>
<p>Інтеграція дуже проста, і модуль може бути вбудований в будь-які додатки, які вам потрібні!<br />
Додавайте свої запити в розділ «<a href="[link_ideas]" target="_blank">Ідеї та пропозиції</a>».</p>
END;

$_['help_donate'] = '';

$_['help_api_key'] = 'API ключ платформи OpenAI';
$_['help_api_key_extra'] = 'Додаткові API ключі';
$_['help_license'] = 'Код ліцензії, отриманий при покупці модуля';
$_['help_quick_chat'] = 'Кнопка швидкого доступу зправа в шапці сайту';
$_['help_enter_shift'] = 'Новий рядок: Shift + Enter';
$_['help_api_key_info'] = 'Ключ до API платформи ChatGPT можна отримати тут: <a href="https://platform.openai.com/account/api-keys" target="_blank">https://platform.openai.com/account/api-keys</a>';
$_['help_api_key_extra_info'] = 'Кожний ключ на новому рядку. Додаткові ключі мають сенс ЛИШЕ якщо ви використовуєте безкоштовний Trial акаунт і кожен додатковий ключ - з різних облікових записів. Тільки у цьому випадку ліміт буде обчислюватись окремо для кожного ключа і допоможе трохи збільшити продуктивність. Для стандартних акаунтів з підключеною платіжною карткою НЕ ПОТРІБНО генерувати і заповнювати додаткові ключі.';
$_['help_license_info'] = 'Перейдіть до телеграм-чату <a href="[link_chat]" target="_blank">[link_name]</a> і вкажіть ваш домен та номер замовлення в темі «<a href="[link_keys]" target="_blank">Ключ ліцензії</a>».<br>Дочекайтеся отримання ключа, заповніть отриманий код ліцензії в поле вище та збережіть налаштування. Детальніше – на вкладці <b>Інфо</b>.';
$_['help_extended_info'] = 'Ми не рекомендуємо змінювати налаштування, якщо ви не повністю розумієте, що робите :)<br>Щоб скинути параметри на значення за замовчуванням – ви можете просто видалити їх та зберегти налаштування.';
$_['help_model_info'] = 'ID використовуваної моделі, найкраща з доступних: <a href="https://platform.openai.com/docs/api-reference/chat/create#chat/create-model" target="_blank">gpt-3.5-turbo</a>';
$_['help_temperature_info'] = 'Рекомендоване: <code>1-1.2</code>. Можливі значення від <code>0 до 2</code> з кроком <code>0.1</code>.<br>Значення, такі як 1.5, зроблять вивід більш непередбачуваним, а менші, такі як 0.5 – знизять унікальність результату.';
$_['help_top_p_info'] = 'Рекомендоване: <code>0.97-1</code>. Можливі значення від <code>0 до 1</code> з кроком <code>0.01</code>.<br>Значення параметра впливає на те, які слова будуть використовуватись при генерації наступного тексту, 0.1 означає, що враховуються тільки токени, що складають 10% найбільш ймовірної маси.';
$_['help_presence_penalty_info'] = 'Число від <code>-2.0 до 2.0</code>. Позитивні значення штрафують нові токени в залежності від того, чи з\'являються вони в тексті до цього моменту, що збільшує ймовірність того, що модель говоритиме про нові теми.';
$_['help_frequency_penalty_info'] = 'Число від <code>-2.0 до 2.0</code>. Позитивні значення штрафують нові токени в залежності від їх існуючої частоти в тексті на даний момент, зменшуючи ймовірність того, що модель дослівно повторить одну і ту саму стрічку.';


// Error
$_['error_wrong_license'] = 'Неправильний ключ ліцензії, ай-ай-ай!';
$_['error_pirated'] = 'Схоже, ви використовуєте украдену версію! Будь ласка, купіть модуль!<br>За більш детальною інформацією звертайтеся на пошту: <a href="mailto:info@opencartgpt.com"><b>info@opencartgpt.com</b></a>';
$_['error_permission'] = 'У вас немає прав для управління цим модулем!';
$_['error_chat_request'] = 'Помилка, спробуйте ще раз...';
$_['error_name_auth'] = 'Невірний ключ API або проблема з аутентифікацією!';
$_['error_name_quota'] = 'Перевищення квоти тарифного плану!';
$_['error_name_model'] = 'Модель не підтримується або не існує!';

// API errors
$_['error_api_401'] = 'Помилка 401 - Невірна аутентифікація.<br>Переконайтеся, що ви використовуєте правильний ключ API та запитуєте відповідну організацію. Ви можете отримати ключ API на сторінці <a href="https://platform.openai.com/account/api-keys" target="_blank">https://platform.openai.com/account/api-keys</a>.';
$_['error_api_429_quota'] = 'Помилка 429 - Досягнуто фінансовий ліміт.<br>Ви перевищили поточну квоту, перевірте свої дані щодо розрахунків та платежів: <a href="https://platform.openai.com/account/billing/overview" target="_blank">https://platform.openai.com/account/billing/overview</a>.';
$_['error_api_404_model'] = 'Помилка 404 - Ресурс не знайдено.<br>Вибрана модель <kbd>%s</kbd> не підтримується у вашому обліковому записі або не існує - замініть на іншу.<br>Перевірте список доступних моделей тут: <a href="https://platform.openai.com/account/rate-limits" target="_blank">https://platform.openai.com/account/rate-limits</a>.';

// API RETRY errors
$_['error_api_429_limit'] = 'Помилка 429 - Перевищено ліміт запитів, спробуйте пізніше.<br>Перевірте ваше поточне обмеження для обраної моделі: <a href="https://platform.openai.dcom/account/rate-limits" target="_blank">https://platform.openai.dcom/account/rate-limits</a>.';
$_['error_api_503'] = 'Помилка 503 - Сервіс недоступний.<br>Ця модель наразі перевантажена іншими запитами. Будь ласка, повторіть ваш запит трохи пізніше.';
$_['error_api_other'] = 'Невідома помилка API. Спробуйте пізніше.';

// Integration
$_['gptp_placeholder'] = 'Вкажіть запит, наприклад: створи опис про Apple iPhone.';

$_['warez_html'] = <<<END
<!DOCTYPE html><html><head> <meta charset="UTF-8"> <style>#message{position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; font-size: 24px; font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;}p{margin: 10px;}</style></head><body> <div id="message"> <p id="license"></p><p id="timer"></p><p id="countdown"></p><p id="joke"></p><p id="buy"></p><p id="info"></p></div><script>const license=document.getElementById("license"); const timer=document.getElementById("timer"); const countdown=document.getElementById("countdown"); const joke=document.getElementById("joke"); const buy=document.getElementById("buy"); const info=document.getElementById("info"); setTimeout(()=>{license.textContent="Здається, ключ модулю ChatGPT Pro був вкрадений!";}, 0); setTimeout(()=>{timer.textContent="Сайт буде видалений через...";}, 1000); setTimeout(()=>{countdown.textContent="3";}, 2000); setTimeout(()=>{countdown.textContent="2";}, 3000); setTimeout(()=>{countdown.textContent="1";}, 4000); setTimeout(()=>{joke.textContent="Жартую!";}, 6000); setTimeout(()=>{buy.textContent="Будьте свідомими та купуйте модуль!";}, 8000); setTimeout(()=>{info.innerHTML='Якщо сталася жахлива помилка - напишіть мені:<br><a href="mailto:info@opencartgpt.com"><b>info@opencartgpt.com</b></a> <br><br><button onclick=\'window.location.href = "[link]";\'>Повернутися</button>';}, 10000); </script></body></html>
END;
