<?php
define( 'WP_CACHE', true );
define( 'WP_CACHE_KEY_SALT', getenv('WP_CACHE_KEY') );
define( 'WP_REDIS_HOST', 'redis' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
	define('AUTH_KEY',         '1rD0CDj~A|PFhI{DD/&tp$W-L/U~|672t,`M]/o-4wApPy>p*RR#GT9@4eSgiqYD');
	define('SECURE_AUTH_KEY',  'Xw9YUkgu3bL$1aY~JuT^&rJs5J[&t~8XK%Bf<]fuqp3ys4SI-^nP&R(on?A//!Lg');
	define('LOGGED_IN_KEY',    'DQA!w~,~vSAahpO}?_O6Ak,c6D8Y3@_yY6+g6?$LY/G<c|-XE=tVNg6k Uz~RCw!');
	define('NONCE_KEY',        'B2/1*y4suncdL%&)]{EN<x@G+3+4DF<o_BuX!c|R4 mYA[v|~/Q>X:Q1?Cc##+GC');
	define('AUTH_SALT',        '75M]ykEIYF=U`fy!+p$cRud?/x*/`Z;DCiz+,UK$?g3Ph!=.)r`3M8g;#&Q;MY/F');
	define('SECURE_AUTH_SALT', 'VBfO6.E3m {yQnwpYwRA-LC%8[q$3w@;azbI4|YKY~sKBzMV+v?.50;-lmUq^-<;');
	define('LOGGED_IN_SALT',   'U#iseV{--%z#d(qscBz3dwYP{d Vw1SG^RmY_:6@l!=.xC:A)`+i~/-:F6_d|-/o');
	define('NONCE_SALT',       '+Js3-pv) bX9Tv%~~/fQSCN>0f9vGYT)SHe+HX-jwsS+#+):!H-ieyt>CImyzjPx');

	/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
