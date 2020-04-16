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
define( 'DB_NAME', 'root32.info' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>=QZF]-}CQap~{v]`MSl*Vf|H%:Kzu<[}_5oQ5n2TSICK Vzz-og|@Pw)G1c/r*7' );
define( 'SECURE_AUTH_KEY',  'GtY=b]$xV/oG1U#`htX^G=+ UUuR7IT?m$^8jOz1%q2_q3ZxWpf*h9]Rhu}m:ar=' );
define( 'LOGGED_IN_KEY',    '7~BiSvc?4#JFs9*99+tzGlc&oG0omoK++s!>nY&D} psx4m/gb?exqV0])y~[y[q' );
define( 'NONCE_KEY',        'BJ;TO i^O.,!<bdP5p1~8RX}svsG,1mYY&96$ajI89YrAHrr6z0e*gM0Y}%::3w)' );
define( 'AUTH_SALT',        'P{/[NS/RBDHLly76:Ia8 jDKP1zaW9T/_k6p@Y}ITo8ZTVZtA{kam&2}+6$SnBKS' );
define( 'SECURE_AUTH_SALT', 'I^mM-aw>^<<6fuc[.l63+<8;1o`>uhg_;[<,ApRXsLogfKvx,,TWR-3+G6e:k^O>' );
define( 'LOGGED_IN_SALT',   '>6vEm%sOEK|hUUhl5+ >j-=&M9:b;N>-/vdtCmWwXTc7aK 4+6X#bJ?6rOSYwW6m' );
define( 'NONCE_SALT',       '(]rd8L|QUP;I+mwUUnAA<bios|v0Y8(qHtEz4irCGXZ#qVA2_0t{}*~XiO@dyH ;' );

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
