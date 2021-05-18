<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         ':^y]X]H -q9w$Q+&=O~7Vpn{^0L?Zi 0t &SQFcP15FY+;|y2%-c*@/0&_@^qtRG');
	define('SECURE_AUTH_KEY',  '-Y*@&c4QJ#CDm_-9|<g5[^=N?-DlGYYOljNdAgkwIJF=_Z#K 1EqZuJ8b59/%>vV');
	define('LOGGED_IN_KEY',    'm{N9xcKeq/36W!696uMK>qYP+.9r=^b0sdY-[}/~>38cfww%YIKkr;+*c!*T]q@%');
	define('NONCE_KEY',        ' PMS(n|?|+{_`1+Y$oW/cARQ#n2(I|8XJSN2-<pB<v4#}CxAmxixV2&:6ghQQh 5');
	define('AUTH_SALT',        '8?mh{SsHib?&[Mp,#IF-CvAh Z+!MvC7KE-:Cl1b4(_0)+~@p`$#1Dho|Z)JcTxv');
	define('SECURE_AUTH_SALT', 'wHf9L_T-BWq6*(NV-=<0:,]CmA=d7A-]uN,0Z 03UIlAiE2sCIpU[h0VWdslsL)Q');
	define('LOGGED_IN_SALT',   '[MTtj:d-~hLQ+[8EJhF*OW[`m-6(%lC+M8p&.p+g<z>Q3B=W.^T@9@6c16 187Sa');
	define('NONCE_SALT',       '0U8s[/WG.$Nv;2/-nzf3@YQsA%q6q):__N9-|)0a9ENY^TZUG_HHX3%o>hw#K`b&');

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
