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
define( 'DB_NAME', 'bgoro_balykchy' );

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
define( 'AUTH_KEY',         '$TyA2d%i3rB}/ic^Fje}dg`RIj1Pt6~{-/B`Y/slNHr6W,~GO>?Lj;$)o GmM2J_' );
define( 'SECURE_AUTH_KEY',  'S%8r$EYC.ZmTu~zdXOZsxkBM8 1J8rE.ZItG!9U[TzKBzdf`__tFo;ig(m%K=$LJ' );
define( 'LOGGED_IN_KEY',    'upjw_^LZ*UwaPw1P1tAg88.vjr<ldyX+R1~!+E1MC/S>ED4eiiZeoD|d3% GZmn>' );
define( 'NONCE_KEY',        ',&P?xyo|)RsR!5@D;tiC_2^z6?.??`>zMW{X0-4:=rNvx?edseUpK)-C=2to?0=z' );
define( 'AUTH_SALT',        'DMRR$KcjlVwyd.*iE1!TtnW}U19j5C)8[mgl]U.z7t9X]|06I7+FL,E9*n9gLNE0' );
define( 'SECURE_AUTH_SALT', '%o#Wi.]qQzk+O:o d[o&Wl F?p@?taTgbMsZX0J*nhR8YH7dGM5i &}.*|40^}La' );
define( 'LOGGED_IN_SALT',   'z[j>EiSK6S?Fh g@T1wfLHW0uq_-eV:N-cP&UO7<`_7D$7+X0>c-n8,24#tYVeR.' );
define( 'NONCE_SALT',       'S[v8dPtz6!O*|%zks}yluQkEHeP 0bj4ls<c(BoN2ldD,`B!74$by#9fpbOQ.DdG' );

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
