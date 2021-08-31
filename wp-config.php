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
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'svyatol8_hostel' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'svyatol8_hostel' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '5e%lqb%A' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'zVrN^FEr>%H) k+S;9OZ%/Ym@*-j|G!t6(q$`#)jTg%eX7%+BDPAfGT,Z$x%Hi/z' );
define( 'SECURE_AUTH_KEY',  'B`RMr=m1r8;$Ifv{&*@@JepVnNEqAY2+]ZN~}LckJgtn{qh(vG`Th={ZQ8+=Um8?' );
define( 'LOGGED_IN_KEY',    '4i}F)D8yG}Nnl(i` G:qN.7mguF6Aaxj2uYa8&~Fb,[ZZJD_Tm9M`W`kD_(&+|+1' );
define( 'NONCE_KEY',        'Q 0NbKNEZj%JB9QA}nHo,3=LtzDa1=.^N|Rfy,p-=LTydy%]%0)LaEHq_$I`W-2<' );
define( 'AUTH_SALT',        ': ]D8Avik+FeZts2>|V>VA?uPXe*FF;y2wK./.3np4JX?:zoL?IQC *OvoO%tVWy' );
define( 'SECURE_AUTH_SALT', 'kmy&of.hfd`D]{,4zMt/s/.=2nNW6f.s@wmm?$4*A}``lR$> &CV4EQO*vnJJ0cQ' );
define( 'LOGGED_IN_SALT',   '!Ed`]Z#5CvzV,4p5cl1q>9k5G{4NS}/5o|>a$mcA+n-|LM%#27?.uF%>KI;NVi|]' );
define( 'NONCE_SALT',       ',:@IuWw-kNBoG{u0tiR{F|-c4fk;wnS>_JHuh9`YGS.|QJ_UA]W?[Q1{VX_L?CeP' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'hh_';

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
