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
define('DB_NAME', 'bakov');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}yXWX:wo]+Kf*CAM&VN{w+V(oEwimBL7Er`NJ4#Bzi^Z63=wx;fnm(Y]S}N;u2Es');
define('SECURE_AUTH_KEY',  '#w:A}3F;QRKT-w=w>d4oY$Jh0r+_LNIg&.XG/,l[|<xzWh =4IJQo$Ru;!9Iv&31');
define('LOGGED_IN_KEY',    ')Pgf3rl_;;ig^mRLVK~AnBJu,8H?IWh[lXgYy5Hf$;2IB`dl+!cQ?5g/y4y|irl3');
define('NONCE_KEY',        'BNendm.p:pc5w)lV6?X9W:)|mWVG.q#Jjkj^Vm{UN*>(XC^9Me~[lHJW>8c&lb9n');
define('AUTH_SALT',        '*3WnYGP&j?l!{/pX=aaj#&_x;PU|ARo{zwyy<bp8/_5x4pZ$+yQ!^Cj.6R1Fu(S/');
define('SECURE_AUTH_SALT', '2qLcP<vhgjLUE39X0XkyeC;G&&u9p8Ld_V3(ydLyE1ws5oq])5dtXMm2Z^L0x]D1');
define('LOGGED_IN_SALT',   'l[W9g7U~0(v)Z<C>:yA|Z*xLApJrNz}hY{QS[:!E@U=fS4|bH:Nd$o<_gKZEh} w');
define('NONCE_SALT',       '+{gFJ%Dl($-3.<*BxKl.3H/A!3c=*^&BA<tbgfNiln:PMOR0-  (P%|Uf`#Ls^I7');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
