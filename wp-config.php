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
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'rZtnbU148K@*Rek.VB}xS):PBm-1%~S7je8Vx043;zjdCi+t40DNJM)`foD!q/H%' );
define( 'SECURE_AUTH_KEY',  'XIe?*@[<,@E _pNy@tzDKU}4<bEw_4`G[3#o6@%+MCq>_7!Z>V**w>/lp?Fxd},=' );
define( 'LOGGED_IN_KEY',    '1yt$@F+1-^~GEb%P4{YM$P5*;6p <r$y%wan-WFdQX?829+:5JVT:_7237<weRfQ' );
define( 'NONCE_KEY',        'BRX{EgfD=V{}$:4}Je9Ixa5|7fqNPN_6nOFxg_kHx(h;gu^pkLoy2TF7&=&/!c*Z' );
define( 'AUTH_SALT',        ')CY_zjC{:K/Ha^phj8@~|`Vv*CLkK}(7k)AVH4DUKL.2/WNhW<<tn*pDlJbzk$4F' );
define( 'SECURE_AUTH_SALT', 'LIDqMV%FdL{~y)kpb0iDu,?-G:$48SxwI13mWFqPCZd$D_oOYv?@L?/I|7lN^{_8' );
define( 'LOGGED_IN_SALT',   ']z|Z{)~)2/NV,dGxWiqB)k4ybhKJ5dIsF/]2`8:pE-,vhSt+Az)_y1bi[}`@,]5c' );
define( 'NONCE_SALT',       'J)8O{*]k;5=E5`Pl-hl%j-2[D7@d`CWI84zl&(TO %{7q]MYWsH9}Ld_~vKrt~Im' );

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
