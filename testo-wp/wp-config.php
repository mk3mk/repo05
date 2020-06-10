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
define( 'DB_NAME', 'admin_testo' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin_testo' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin_testo' );

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
define( 'AUTH_KEY',         'O<K.%iAQYAa~,4kmzC[ghl#]3~;6C0@Ktm!aS^,|gV89,yFx{P/>@5x_!Z3rN.&{' );
define( 'SECURE_AUTH_KEY',  '87oo8FK1nn/&,@,J3a#z|wFS#G4%XFls9-LrK|k 10><G9}QDWx1ky5*hqW?;P+c' );
define( 'LOGGED_IN_KEY',    'K6OqM5-$}G>Z7Y2d`?A]i?s;-EvT>$(-8FgkK;X#<f)S0ufNL,TyablzsC8VD+uB' );
define( 'NONCE_KEY',        '`-^>|zc |&9 }1W5>:HSIrTlr;,l4zWV{8XmEzdjes7EegpMuBD4k*`2bwJ|++7|' );
define( 'AUTH_SALT',        'v>9<3#zRpJ1JQU}:8(HyGd:/wRf7(t9g!xv/Qz{gR5V>W<RGd~Yb(/CQy.`IGd(5' );
define( 'SECURE_AUTH_SALT', ']aY!Q#Xu9xa~A)<RL/A;Y5Xb9#PKD!*S?ty^lap:=s4UO~Ps<t@Dmie`AcSh-Fy,' );
define( 'LOGGED_IN_SALT',   'e;7*{v/o:~|+/B|>ej#g8Y[E-[Ty.<wt-You6ZGF_48f/D0}VyIY|G-c)-ZlXUGi' );
define( 'NONCE_SALT',       'w{. *,cbv8g$dTnM32/SD;;,4zg r_$BtFi{ ?M|#6:ywzLP_ZU}g[c(/}tE_K{,' );

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
