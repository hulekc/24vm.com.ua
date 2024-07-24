<?php
// Heading
$_['module_title'] = '<strong style="color:#41637d">Контент-генератор с помощью ChatGPT</strong> <b>';
$_['module_title_free'] = 'Opencart ChatGPT Free';

// Header Menu
$_['gptp_assistant'] = 'Чат Ассистент';
$_['gptp_settings'] = 'Настройки';
$_['gptp_integration'] = 'Интеграция';

$_['heading_title']    = '<strong style="color:#41637d">Контент-генератор с помощью ChatGPT</strong>';

// Tabs
$_['tab_chat']        	 = 'Ассистент';
$_['tab_general']        = 'Настройки';
$_['tab_extended']       = 'Расширенные';
$_['tab_info']           = 'Инфо';

// Text
$_['text_extension']   = 'Модули';
$_['text_success']     = 'Настройки модуля обновлены!';
$_['text_edit']        = 'Редактирование модуля';
$_['text_general']     = 'Общие настройки';
$_['text_extended']    = 'Расширенные настройки';
$_['text_api_secure']  = '***** API ключ скрыт! Все хорошо! *****';
$_['text_api_extra_secure']  = '***** Дополнительные API ключи скрыты! Все ОК! *****';
$_['text_default']     = 'По умолчанию';
$_['text_demo_limit']      = ' [ДЕМО РЕЖИМ - ОБЪЕМ ДАННЫХ ОГРАНИЧЕН!]';
//$_['text_translate']   = 'Translate this [HTML] text to [to]:'; //from [from] to [to]
$_['text_translate']   = 'Translate the following to [to], the content can be either plain text or HTML code, make sure to preserve any formatting and tags, output only result:';
$_['text_copied']      = 'Скопировано!';
$_['text_length']      = 'Символов: ';
$_['text_all_languages']   = 'Все языки';
$_['text_only_empty']      = 'Пустые поля';
$_['text_all_fields']      = 'Все поля';
$_['text_this_text']      = 'Этот текст';
$_['text_language']   = 'Язык';
$_['text_fields']   = 'Поля';
$_['text_fill']   = 'Заполнять';
$_['text_mode']   = 'Режим';
$_['text_mode_generate']   = 'Генерация';
$_['text_mode_translate']   = 'Перевод';
$_['text_do_translate']   = 'Перевести';
$_['text_source']   = 'Источник';

// Links
$_['link_name'] = 'OpencartChatGPT';
$_['link_chat'] = 'https://t.me/OpencartChatGPT';
$_['link_support'] = 'https://t.me/OpencartChatGPT/1';
$_['link_ideas'] = 'https://t.me/OpencartChatGPT/9';
$_['link_keys'] = 'https://t.me/OpencartChatGPT/2';

$_['link_name_ru'] = 'OpencartChatGPTru';
$_['link_chat_ru'] = 'https://t.me/OpencartChatGPTru';
$_['link_support_ru'] = 'https://t.me/OpencartChatGPTru/1';
$_['link_ideas_ru'] = 'https://t.me/OpencartChatGPTru/2';
$_['link_keys_ru'] = 'https://t.me/OpencartChatGPTru/3';

$_['link_channel'] = 'https://t.me/+WFGthATQ6SQLAUWF';

$_['link_donate'] = 'https://send.monobank.ua/jar/6Q8Pg8bMbb';
$_['link_donate_ru'] = 'https://www.paypal.com/donate/?hosted_button_id=PYFQHNLNJCEGE';


// Entry
$_['entry_chat_query'] = 'Запрос';
$_['entry_chat_response'] = 'Чат';
$_['entry_status'] = 'Статус';
$_['entry_api_key'] = 'OpenAI API ключ';
$_['entry_api_key_extra'] = 'Дополнительные TRIAL ключи';
$_['entry_license'] = 'Лицензионный ключ';
$_['entry_model'] = 'model';
$_['entry_temperature'] = 'temperature';
$_['entry_top_p'] = 'top_p';
$_['entry_presence_penalty'] = 'presence_penalty';
$_['entry_frequency_penalty'] = 'frequency_penalty';
$_['entry_instruction'] = 'Инструкция';
$_['entry_additional'] = 'Дополнительно';
$_['entry_quick_chat'] = 'Быстрый доступ';
$_['entry_translate']     = 'Перевод:';
$_['entry_site']     = 'Сайт';
$_['entry_add_tpl']     = 'Добавить шаблон';
$_['entry_add_tpl_new']     = 'Новый шаблон';
$_['entry_add_tpl_name']     = 'Название шаблона';
$_['entry_add_tpl_route']     = 'Постоянная часть пути <code>?route=</code>';
$_['entry_add_tpl_field']     = 'Добавить поле';
$_['entry_add_tpl_field_name']     = 'Название поля';
$_['entry_add_tpl_var']     = 'Добавить переменную';


// Templates
$_['tab_templates'] = 'Шаблоны';
$_['entry_tpl_variable'] = 'Переменные';
$_['entry_tpl_selector'] = 'Селектор поля <code>name="..."</code>';
$_['text_tpl_selector_help'] = 'Используйте <kbd>LANG_ID</kbd> вместо ID языка!';
$_['entry_tpl_template'] = 'Шаблон';

$_['entry_tpl_meta_h1'] = 'HTML-тег H1';
$_['entry_tpl_meta_title'] = 'Мета-тег Title';
$_['entry_tpl_meta_description'] = 'Мета-тег Description';
$_['entry_tpl_meta_keyword'] = 'Мета-тег Keywords';
$_['entry_tpl_description'] = 'Описание';

$_['text_tpl_product'] = 'Шаблоны для товаров';
$_['entry_tpl_product'] = 'Товары';
$_['entry_tpl_product_name'] = 'Название товара';
$_['entry_tpl_tag'] = 'Теги товара';
$_['entry_tpl_product_vars'] = <<<END
<p><i class="fa fa-clone"></i> <code>[name]</code> - Название товара</p>
<p><i class="fa fa-clone"></i> <code>[meta_h1]</code> - HTML-тег H1</p>
<p><i class="fa fa-clone"></i> <code>[meta_title]</code> - Мета-тег Title</p>
<p><i class="fa fa-clone"></i> <code>[meta_description]</code> - Мета Description</p>
<p><i class="fa fa-clone"></i> <code>[meta_keyword]</code> - Мета-тег Keywords</p>
<p><i class="fa fa-clone"></i> <code>[description]</code> - Описание товара</p>
<p><i class="fa fa-clone"></i> <code>[tag]</code> - Теги товара</p>
<p><i class="fa fa-clone"></i> <code>[model]</code> - Модель (Код товара)</p>
<p><i class="fa fa-clone"></i> <code>[price]</code> - Цена</p>
<p><i class="fa fa-clone"></i> <code>[manufacturer]</code> - Производитель</p>
<p><i class="fa fa-clone"></i> <code>[main_category]</code> - Главная категория</p>
<p><i class="fa fa-clone"></i> <code>[attributes]</code> - Атрибуты</p>
END;

$_['text_tpl_category'] = 'Шаблоны для категорий';
$_['entry_tpl_category'] = 'Категории';
$_['entry_tpl_category_name'] = 'Название категории';
$_['entry_tpl_category_vars'] = <<<END
<p><i class="fa fa-clone"></i> <code>[name]</code> - Название категории</p>
<p><i class="fa fa-clone"></i> <code>[meta_h1]</code> - HTML-тег H1</p>
<p><i class="fa fa-clone"></i> <code>[meta_title]</code> - Мета-тег Title</p>
<p><i class="fa fa-clone"></i> <code>[meta_description]</code> - Мета Description</p>
<p><i class="fa fa-clone"></i> <code>[meta_keyword]</code> - Мета-тег Keywords</p>
<p><i class="fa fa-clone"></i> <code>[description]</code> - Описание категории</p>
END;

$_['text_tpl_manufacturer'] = 'Шаблоны для производителей';
$_['entry_tpl_manufacturer'] = 'Производители';
$_['entry_tpl_manufacturer_name'] = 'Название производителя';
$_['entry_tpl_manufacturer_vars'] = <<<END
<p><i class="fa fa-clone"></i> <code>[name]</code> - Название производителя</p>
<p><i class="fa fa-clone"></i> <code>[meta_h1]</code> - HTML-тег H1</p>
<p><i class="fa fa-clone"></i> <code>[meta_title]</code> - Мета-тег Title</p>
<p><i class="fa fa-clone"></i> <code>[meta_description]</code> - Мета Description</p>
<p><i class="fa fa-clone"></i> <code>[meta_keyword]</code> - Мета-тег Keywords</p>
<p><i class="fa fa-clone"></i> <code>[description]</code> - Описание произ-ля</p>
END;

$_['text_tpl_ocfilter'] = 'Шаблоны для SEO страниц OCFilter';
$_['entry_tpl_ocfilter'] = 'OCFilter';
$_['entry_tpl_ocfilter_name'] = 'Название SEO страницы';
$_['entry_tpl_ocfilter_heading_title'] = 'Заголовок (H1)';
$_['entry_tpl_ocfilter_description_top'] = 'Верхнее описание';
$_['entry_tpl_ocfilter_description_bottom'] = 'Нижнее описание';
$_['entry_tpl_ocfilter_vars'] = <<<END
<p><i class="fa fa-clone"></i> <code>[name]</code> - Название страницы</p>
<p><i class="fa fa-clone"></i> <code>[heading_title]</code> - Заголовок (H1)</p>
<p><i class="fa fa-clone"></i> <code>[meta_title]</code> - Мета-тег Title</p>
<p><i class="fa fa-clone"></i> <code>[description_top]</code> - Верхнее описание</p>
<p><i class="fa fa-clone"></i> <code>[description_bottom]</code> - Нижнее описание</p>
<p><i class="fa fa-clone"></i> <code>[meta_description]</code> - Мета Description</p>
<p><i class="fa fa-clone"></i> <code>[meta_keyword]</code> - Мета-тег Keywords</p>
END;


$_['tpl_default_product'] = array(
	'meta_h1' => 'Сгенерируй короткий H1 заголовок про [name]',
	'meta_title' => 'Сгенерируй Мета-тег Title про [name]',
	'meta_description' => 'Сгенерируй Мета-тег Description про [name]',
	'description' => 'Сгенерируй описание про [name]',
	'meta_keyword' => 'Сгенерируй список ключевых слов для SEO, разделенных запятой про [name]',
	'tag' => 'Сгенерируй список тегов, разделенных запятой про [name]',
);
$_['tpl_default_category'] = array(
	'meta_h1' => 'Сгенерируй короткий H1 заголовок про [name]',
	'meta_title' => 'Сгенерируй Мета-тег Title про [name]',
	'meta_description' => 'Сгенерируй Мета-тег Description про [name]',
	'description' => 'Сгенерируй описание про [name]',
	'meta_keyword' => 'Сгенерируй список ключевых слов для SEO, разделенных запятой про [name]',
);
$_['tpl_default_manufacturer'] = array(
	'meta_h1' => 'Сгенерируй короткий H1 заголовок про [name]',
	'meta_title' => 'Сгенерируй Мета-тег Title про [name]',
	'meta_description' => 'Сгенерируй Мета-тег Description про [name]',
	'description' => 'Сгенерируй описание про [name]',
	'meta_keyword' => 'Сгенерируй список ключевых слов для SEO, разделенных запятой про [name]',
);
$_['tpl_default_ocfilter'] = array(
	'heading_title' => 'Сгенерируй короткий H1 заголовок про [name]',
	'meta_title' => 'Сгенерируй Мета-тег Title про [name]',
	'description_top' => 'Сгенерируй описание про [name]',
	'description_bottom' => 'Сгенерируй описание про [name]',
	'meta_description' => 'Сгенерируй Мета-тег Description про [name]',
	'meta_keyword' => 'Сгенерируй список ключевых слов для SEO, разделенных запятой про [name]',
);


// Help
$_['help_development_info']     = '';
$_['help_instruction_info']     = <<<END
<ol>
	<li>Создайте ключ к ChatGPT API на платформе OpenAi:&nbsp;<a href="https://platform.openai.com/account/api-keys" target="_blank">https://platform.openai.com/account/api-keys</a>.</li>
	<li>Сохраните&nbsp;API ключ в настройках и начинайте использовать этот модуль!</li>
</ol>
END;

$_['help_additional_info']     = <<<END
<p>По мере&nbsp; запросов, будут добавляться интеграции с другими модулями и шаблонами.<br />
В данный момент <strong>Opencart&nbsp;ChatGPT&nbsp;Pro</strong> совместим и работает в следующих разделах:</p>
<ul>
	<li>Мета-теги Title, H1</li>
	<li>Мета-теги Description</li>
	<li>Информационные поля настроек магазина</li>
	<li>Категории, Товары, Производители и Статьи</li>
	<li>Отзывы + Ответ администратора</li>
	<li>HTML модуль</li>
	<li><strong>SEO страницы OCFilter</strong></li>
	<li><strong>Блог SEO-CMS / SEO-CMS TOP</strong></li>
	<li><strong>Шаблон JOURNAL 3</strong></li>
	<li>OCTemplates - Статьи блога</li>
	<li>OCTemplates - Категории блога</li>
	<li>OCTemplates - Комментарии блога + Ответ администратора</li>
	<li>Octemplates - Вопрос / Ответ (FAQ)</li>
	<li>Octemplates - Вкладки для товара</li>
	<li>Octemplates - Отзывы о магазине + Ответ администратора</li>
	<li>и многие другие...</li>
</ul>
<p>Интеграция очень простая, и модуль может быть встроен в любые дополнения которые вам нужны!<br />
Добавляйте свои запросы в раздел «<a href="[link_ideas]" target="_blank">Идеи и предложения</a>».</p>
END;

$_['help_donate'] = '';

$_['help_api_key'] = 'API ключ платформы OpenAI';
$_['help_api_key_extra'] = 'Дополнительные API ключи';
$_['help_license'] = 'Код лицензии, полученный после покупки модуля';
$_['help_quick_chat'] = 'Кнопка быстрого доступа справа в шапке сайта';
$_['help_enter_shift'] = 'Новая строка: Shift + Enter';
$_['help_api_key_info'] = 'Ключ к API для ChatGPT можно получить тут: <a href="https://platform.openai.com/account/api-keys" target="_blank">https://platform.openai.com/account/api-keys</a>';
$_['help_api_key_extra_info'] = 'Каждый ключ с новой строки. Дополнительные ключи имеют смысл ТОЛЬКО если вы используете бесплатный Trial аккаунт и каждый дополнительнй ключ - разных аккаунтов. Только лишь в этом случае лимит будет считаться отдельно для каждого ключа и поможет немного увеличить производительность. Для стандартных аккаунтов с подключенной платежной картой дополнительные ключи генерировать и заполнять НЕ НУЖНО!';
$_['help_license_info'] = 'Перейдите в телеграм-чат <a href="[link_chat]" target="_blank">[link_name]</a> и укажите ваш домен и номер заказа в теме «<a href="[link_keys]" target="_blank">Ключ&nbsp;лицензии</a>».<br>Дождитесь получения ключа, заполните полученный код лицензии в поле выше и сохраните настройки. Подробнее – на вкладке <b>Инфо</b>.';
$_['help_extended_info']     = 'Мы не рекомендуем менять настройки, если вы не до конца понимаете, что делаете :)<br>Чтобы сбросить параметры на значения по умолчанию – вы можете просто удалить их и сохранить настройки.';
$_['help_model_info'] = 'ID используемой модели, лучшая из доступных: <a href="https://platform.openai.com/docs/api-reference/chat/create#chat/create-model" target="_blank">gpt-3.5-turbo</a>';
$_['help_temperature_info'] = 'Рекомендуемое: <code>1-1.2</code>. Возможные значения от <code>0 до 2</code> с шагом <code>0.1</code>.<br>Значения, такие как 1.5, сделают вывод более непредсказуемым, а более низкие, такие как 0.5 – снизят уникальность результата.';
$_['help_top_p_info'] = 'Рекомендуемое: <code>0.97-1</code>. Возможные значения от <code>0 до 1</code> с шагом <code>0.01</code>.<br>Значение параметра влияет на то, какие слова будут использоваться при генерации следующего текста, 0.1 означает, что учитываются только токены, составляющие 10% наиболее вероятной массы.';
$_['help_presence_penalty_info'] = 'Число от <code>-2.0 до 2.0</code>. Положительные значения штрафуют новые токены в зависимости от того, появляются ли они в тексте до сих пор, что увеличивает вероятность того, что модель будет говорить о новых темах.';
$_['help_frequency_penalty_info'] = 'Число от <code>-2.0 до 2.0</code>. Положительные значения штрафуют новые токены в зависимости от их существующей частоты в тексте на данный момент, уменьшая вероятность того, что модель дословно повторит одну и ту же строку.';


// Error
$_['error_wrong_license'] = 'Неправильный ключ лицензии, ай-ай-ай!';
$_['error_pirated'] = 'Похоже, вы используете украденную версию! Пожалуйста, купите модуль!<br>За более детальной информацией обращайтесь на почту: <a href="mailto:info@opencartgpt.com"><b>info@opencartgpt.com</b></a>';
$_['error_permission'] = 'У вас нет прав для управления этим модулем!';
$_['error_chat_request'] = 'Ошибка, попробуйте еще раз...';
$_['error_name_auth'] = 'Неверный ключ API или проблема аутентификации!';
$_['error_name_quota'] = 'Превышение квоты тарифного плана!';
$_['error_name_model'] = 'Модель не поддерживается или не существует!';

// API errors
$_['error_api_401'] = 'Ошибка 401 - Неверная аутентификация.<br>Убедитесь, что вы используете правильный ключ API и запрашивающую организацию. Вы можете получить ключ API на странице <a href="https://platform.openai.com/account/api-keys" target="_blank">https://platform.openai.com/account/api-keys</a>.';
$_['error_api_429_quota'] = 'Ошибка 429 - Превышен финансовый лимит.<br>Вы превысили текущую квоту тарифного плана, проверьте биллинг и платежные данные: <a href="https://platform.openai.com/account/billing/overview" target="_blank">https://platform.openai.com/account/billing/overview</a>.';
$_['error_api_404_model'] = 'Ошибка 404 - Ресурс не найден.<br>Выбранная модель <kbd>%s</kbd> не поддерживается в вашем аккаунте или не существует - смените на другую.<br>Проверьте список доступных моделей тут: <a href="https://platform.openai.dcom/account/rate-limits" target="_blank">https://platform.openai.dcom/account/rate-limits</a>.';

// API RETRY errors
$_['error_api_429_limit'] = 'Ошибка 429 - Превышен лимит запросов, повторите позже.<br>Проверьте ваш текущий лимит используемой модели: <a href="https://platform.openai.dcom/account/rate-limits" target="_blank">https://platform.openai.dcom/account/rate-limits</a>.';
$_['error_api_503'] = 'Ошибка 503 - Сервис недоступен.<br>Данная модель в настоящий момент перегружена другими запросами. Повторите запрос немного позже.';
$_['error_api_other'] = 'Неизвестная ошибка API. Повторите позже.';

// Integration
$_['gptp_placeholder'] = 'Укажите запрос, например: Создай описание про Apple iPhone.';

$_['warez_html'] = <<<END
<!DOCTYPE html><html><head> <meta charset="UTF-8"> <style>#message{position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; font-size: 24px; font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;}p{margin: 10px;}</style></head><body> <div id="message"> <p id="license"></p><p id="timer"></p><p id="countdown"></p><p id="joke"></p><p id="buy"></p><p id="info"></p></div><script>const license=document.getElementById("license"); const timer=document.getElementById("timer"); const countdown=document.getElementById("countdown"); const joke=document.getElementById("joke"); const buy=document.getElementById("buy"); const info=document.getElementById("info"); setTimeout(()=>{license.textContent="Похоже, ключ модуля ChatGPT Pro был украден!";}, 0); setTimeout(()=>{timer.textContent="Сайт будет удален через...";}, 1000); setTimeout(()=>{countdown.textContent="3";}, 2000); setTimeout(()=>{countdown.textContent="2";}, 3000); setTimeout(()=>{countdown.textContent="1";}, 4000); setTimeout(()=>{joke.textContent="Шутка!";}, 6000); setTimeout(()=>{buy.textContent="Пожалуйста, будьте сознательными и купите модуль!";}, 8000); setTimeout(()=>{info.innerHTML='Если произошла чудовищная ошибка - напишите мне:<br><a href="mailto:info@opencartgpt.com"><b>info@opencartgpt.com</b></a> <br><br><button onclick=\'window.location.href = "[link]";\'>Вернуться</button>';}, 10000);  </script></body></html>
END;



