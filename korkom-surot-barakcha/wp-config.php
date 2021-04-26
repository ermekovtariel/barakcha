<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'korkom-surot-barakcha' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'physcom93' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c(PnkJGYHh,PR-wX<}>3J9#?/J^ }i5&p2fdP~1B3>tHefMhZ1aMNhZBt{xk,q`a' );
define( 'SECURE_AUTH_KEY',  'XMbeP4sh) $oO^RIYE+P{Kh-k!VVOqRQ}lNGBnKNeatH+!Or*HY&$e%Nt+~$-htw' );
define( 'LOGGED_IN_KEY',    '$}@HoNN$3$SY]m7vGH1%^p^IH3l~:#2gBcV25^m#dIc5+-xuDq{!J_;t00Lj[D|Y' );
define( 'NONCE_KEY',        '2U 79t9s{Fb${psMp-+W[^!k1FGC{y-+H(B,X:{q!; :[4n9wn!i#|0>a=#{eC t' );
define( 'AUTH_SALT',        't,:avZEM[aiGJ(Oti*r|j#aJ)cDIjk}-Qw/$oxfMLN~[fggl/x3gGa%}N#)/&tA6' );
define( 'SECURE_AUTH_SALT', '4:t0M[!1&y/p`w%>&8rK&myP=3?E*FVF?[9iB54Y@u4LmLt^TDYeku)y{I4*V~hr' );
define( 'LOGGED_IN_SALT',   'xcrEW}]3*P:CY3*Km7MEIOv~)J?ANe-;&r6-`wRQo?f5h!&QoVjq|(%^NP/]A5p2' );
define( 'NONCE_SALT',       '{b2-UaGK<[^C+~MIaEVf{(!0f]}B+#-vg{,GFwX-$ 42!84$/6#mU|JmkTNi&,JA' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
