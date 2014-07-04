<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'teatro');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WjX[q<g@6+)Q~bby1UASza]|lXQ~mxUH=/u7G-|6-u.A`_1<mCa)+d}2sTY&<jtq');
define('SECURE_AUTH_KEY',  'S[=c$U8|0H+]z[Twt^|,&N&Q9g>d5_tiB49%6=xb$}x39Oe23O{7ViB|(~I|*1=G');
define('LOGGED_IN_KEY',    'K:t|?N6c.^HWB/+|s/,{p*~lZyT--K1f.Z^1?*($Shl~*a.,v [`/Jm8F*eBx-1J');
define('NONCE_KEY',        'UF[Cr`ydU*k]++;Cg*bT/y}o7w-GRZ+Evt7v#;-D9=94uG(r3[k&Uf2D|du?;dtR');
define('AUTH_SALT',        '{o{86!3Ru*y:gb0 F[-@z/*QB/~];K9{|+w_E<FRz[)0RDL3^3E>R.To6w$~]+IU');
define('SECURE_AUTH_SALT', 'SF+>%Ik/jVviv~WP?t;|x+Guuc]).8 F^%A@8`mWRX8&fIr1&TDtl}Q2C]GLLMHO');
define('LOGGED_IN_SALT',   'x:Y#J_N:dA0})=FKrVd86k]wh$bltj]n``}STOh:k+&mg/-?LD50ZR|$OKC4+,Q@');
define('NONCE_SALT',       'S5fUk|>pQ<X#%eBh)?FH|}RVYh{>wrm40G3oZBA~7Tb_%m(k_;7{d{=A$95ONRR5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
