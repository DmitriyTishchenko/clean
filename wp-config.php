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
define( 'DB_NAME', 'wp1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':aK6cX6n(^<6l:T|m]J]o[{szs(i!lo4W*io*lTu7xi{tOr#6547}psK`FG$aJM?' );
define( 'SECURE_AUTH_KEY',  'ZBB/+d^_zp8):#1h9iEgeE.uPY%3Yu8sk{=K4qMiq<h_Q8KAQC+.uYlCR&8H#%2w' );
define( 'LOGGED_IN_KEY',    'J#)6MQA_{gt!?H^pcW/<W3|Y!g{zJf`;^w+/;B!.1v2*?NAY8B.RV6pPkN<kW`nj' );
define( 'NONCE_KEY',        ';d`3S7]K[^35<R7w~Df8uHXRT^ai(^G|%k6q-2Q!8+&EVOt?i$wetA[}}q[T=Xa`' );
define( 'AUTH_SALT',        ',C#6~AeYnpaYEd3WsC~$(4 wKnQ(@|0tqxZXcNe(bxI~,hV[3c~#2+}nNewte<T|' );
define( 'SECURE_AUTH_SALT', '=Sv76 .}iY:Jx]Um>)l3[r9kiwkv<Qg^;&sH? x>cSCf1)oq>&id+w]R(Nccq{eR' );
define( 'LOGGED_IN_SALT',   '_El.S@7{A5}Z`@i^;~Ly{&j&W+$//tF%L<Z215D]/)a0hLopin:O$RbS(k|_tYP+' );
define( 'NONCE_SALT',       ' gA&AKn1vi&ls/AvVqYz>,Xu&j&@3Z5F47H)6!YaFt1aVgUse!<_SL/O?{?sn0(O' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
