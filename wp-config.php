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
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shag' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y$v&[|MD;t]al,h.OuFG4`H+t)XkV-THZH)Y(NcaPEatmIXA+*/-p[G^6k&)}%F.' );
define( 'SECURE_AUTH_KEY',  'Yn&m)y)nKz/#pG9c!U;zqKl~UmqiJmNPmybo.{1=J{;rdYGZ?#%$4.^9J57~Hy;~' );
define( 'LOGGED_IN_KEY',    'HY&U![V%NaP>Fu(j{|fs%&r5xLHnZ!z4bIy<g)S1x09/CUrW6g@_x>]N]PqQ$6(k' );
define( 'NONCE_KEY',        '`S E1tj*M||S%UIj.A.ABc7JyeGM115zK,,!;w;9MV1keN*G|]<[o+y^U{hsy7Lo' );
define( 'AUTH_SALT',        '_S4./szO:kc//:-<FGaXy4Y{vPTXd+EF)T?_6`^NnKiX^b.G[Vzn9c_>J4CPnNNS' );
define( 'SECURE_AUTH_SALT', 'Nk^.2(A5cZ1Y_WWr??iY,oDI|M-z.iPmX)?6R+lY[s?l9Sl6BK+E]D6PcHS]!#!3' );
define( 'LOGGED_IN_SALT',   'rHv:n {4iA9MbM`yyY>U<ND:WV6xGMx5)G?C#<6V+Z/@,90`}|ToOk~z-@mbvFkL' );
define( 'NONCE_SALT',       '?z!7n<5k@4{F5ug}f?kwiTLwROL^XRdF|@[ZDzgu2.%5QZYU-%J,-9+_wOEz^[0{' );

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
