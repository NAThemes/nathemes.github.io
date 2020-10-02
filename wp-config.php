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
define( 'DB_NAME', 'mary' );

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
define( 'AUTH_KEY',         'IsYn^^4Vffvfp4%l%|Rs{_(kGH^^<YRhDbYsIWn)Q+&RGS)y79z{Y_-&~;WtnDlx' );
define( 'SECURE_AUTH_KEY',  'wD?P4aCuQHc(0}88xGuitL4N~}DPQiK5.ch2[b(CXWs|?|~+%<,ItU(jty^N:|@O' );
define( 'LOGGED_IN_KEY',    'Y|sLBRhr_g$4j [$0AX2=W|r~t.itOtMA>{S%oAc#ue.lnvSK5EabRG]Qu/xG^AL' );
define( 'NONCE_KEY',        'W0.`|nbmMio;Y)cxmM-Es<92KavxSB1C]x:R+W<nT<1c6~v`W[Z#9,`5R5sXvUF|' );
define( 'AUTH_SALT',        'q2J9kI]:jl=}Ggm]a$DS6c>Zq:)wBx`*=lsItC*,J3$~2fv}Ed*``p[58,lL;_|(' );
define( 'SECURE_AUTH_SALT', ',Y#.64%#,T[6EkAg}]4@q;$VNuBXG%2+1:GA#[H6$Z4)1lfKjoq:@Ff~1Ayjc$NY' );
define( 'LOGGED_IN_SALT',   'r8wvY$/((.[KG.+!5;+o[;YDPe;iDO+ec{61_xNUeG}r>D(5x@q>w+(S+Ko^<.GR' );
define( 'NONCE_SALT',       '~*fqO0bhuTo3oisxcQ[qy5@jM+}1I^LBWk =,0tzU=|Zi5|h=t`wMt,-BM;cmSP^' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'mry_';

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
