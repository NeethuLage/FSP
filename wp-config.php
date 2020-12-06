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
define( 'DB_NAME', 'myfsp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'W5y3QjE!s`QkM{<v*ZAG%8d}g7V=iH{&{al.LBri!S({dTz,l (B^#v#74-_9e&%' );
define( 'SECURE_AUTH_KEY',  '0tzz.xjA}>cpp9*n~XxxB]`Lv%2^;jhG.1{cv#h!&Xqt.*%@i2BZ0ZPaoCjR`V6V' );
define( 'LOGGED_IN_KEY',    'd+Mz={[@k8ZDd0s2Cd^^!!jv-w)+4JqkF!KW/DgO-4ajzta[G7tc^JD%S7@%S3ke' );
define( 'NONCE_KEY',        '<}QY |JsJC+DFtiQCpSv~=2|Rt]_K|0#anj/` W23Oj< Tj.P1R(f7}yYU_cU8NY' );
define( 'AUTH_SALT',        'M^6#brtD^t* ,>,#sAWxGiZ4Rt[tjz&RxH|!K`r={w<!zROe~DZ,AjN)=|>!,A)W' );
define( 'SECURE_AUTH_SALT', '`{$q-tYdBz4*s+nMp`w?@Rs:P5#_fvj|7}15$Mv>Cv5JIR,n+Y/1Ax;e4_V_Me%W' );
define( 'LOGGED_IN_SALT',   'n*|oAyHQ6H)pK()U(%WkcbuPnv2kZ;V{f>Fmc>sJ/toHT]y Vw7H%E3dj% Z=@`}' );
define( 'NONCE_SALT',       'lb[Mz)`N$e;emEaM2x20KKOv6j+FDgC=KyI29X8CR9+<C_dl<7zfM8K/h7SS/bLL' );

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
