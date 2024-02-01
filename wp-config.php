<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'post' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[we/=kWP7gm+wY}x5YkVVBbe/Gvy/yR;&It`7JXqbG|K7[a}ws84C/*|R5v2 -Mf' );
define( 'SECURE_AUTH_KEY',  'u&*gLhuCD![H%cq1I*1$sIa3)9&2m{R5r]c6u??R) _,v1DId0T^C1Jw !Qh7WIb' );
define( 'LOGGED_IN_KEY',    '=Gjv}[%FZ3R3]o$hYMTm$]-4sLq8+B`{FC-DdptsGFl8[7,,U}=0Ndc% 7jk9<BU' );
define( 'NONCE_KEY',        'WG5j#30m}n>1$NfF6[*;P0tD$)[4jEJ866=8$DcT[=2*I`^/%vEJH!rU3;?AStPw' );
define( 'AUTH_SALT',        '/^Hc_8.~2.*t9fD/![pId]LET/I #qb?RMm`=;U0ZT;hp1O:Zu&}i_Uv1^~Y.BaK' );
define( 'SECURE_AUTH_SALT', 'mo(&l0RpPo*3qj&}P];7:KnU:Bsu7c(I3q&aWSuO!K PZC%]L8c=%BtNoOCy@HyJ' );
define( 'LOGGED_IN_SALT',   '[olmbrA%W+ZuL{*^n(>FI*]7T@0]1JZ+J/U^q}]%S#KGdPa=vGY^M#VCo&!U9$J3' );
define( 'NONCE_SALT',       'Q7q]^|MCybCTw58on)-hY^YG..~1X&<AQ7y2,au6INbT%mpIICPp?4Kn`D||STMm' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
