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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //

///** Имя базы данных для WordPress */
//define( 'DB_NAME', 'digitala_aspdev' );
//
///** Имя пользователя MySQL */
//define( 'DB_USER', 'digitala_aspdev' );
//
///** Пароль к базе данных MySQL */
//define( 'DB_PASSWORD', 'ichsNT9v' );
//
///** Имя сервера MySQL */
//define( 'DB_HOST', 'localhost' );

/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wedding' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'mysql' );


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
define( 'AUTH_KEY',         'R@|YFN+?}n9QrR.}Spd,m`r58dd34T,]jEz1e]ObNu)AvL2C7YLTd6vSq>7b+q=X' );
define( 'SECURE_AUTH_KEY',  'ajYgd+8aY7]Sy4GnB+3C;rIU?_6N;uzV<bGu*U^;Y2 a=84|MH =6 o$Kug2mgk ' );
define( 'LOGGED_IN_KEY',    'lV?19>pr-n l9Xj`JtN^W.-x]$0J)Sd+=^hN{-K%t00{wr,:Kw$9sSME|XqE,&P.' );
define( 'NONCE_KEY',        '4[$MpC~in$.3_&ohY35z5B|z?CFl]xF-f:^k^slTM4js;tMG6C[H{(fOA<c]LMkM' );
define( 'AUTH_SALT',        'n[4@MnoZeyxM|ID?dj1D2IeHe@StFnbr^V.wC_n`%45l|!+fl5}d]8bSE3d!(M@a' );
define( 'SECURE_AUTH_SALT', '2p(q}~SE&s _na^/4zzl*yu@.{b{$-<&|<^W>{uYFuU@[md#tJy<~$D_+wu/&~wW' );
define( 'LOGGED_IN_SALT',   'R^fz7l9*@@c1yKTH_#0.7Fy@27mbR(*>zJ|%9{baS:~cIyRQ#Z kP&S^z)6f}{-J' );
define( 'NONCE_SALT',       '3!p?~]A|+x{2[3?i$C=RsZ0r7xYA^Un_YumpEQKt+$w*Cp0#/u7pX(%6x$<EC2-`' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
