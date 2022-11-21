<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Final' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GnhE}kfKJy&mkAwtI5=m~F|:PZvhsJ`-qNm9FnZMr&qOZ!+/$++8j!OM7PUl_rog' );
define( 'SECURE_AUTH_KEY',  'mI @,akzgmiqW(T4L(3-`Y%0Y:<|ej`2NmHF>V0I6ES4@q&Ij(Eb`WOU%F:f:u{!' );
define( 'LOGGED_IN_KEY',    ',y}=K=jB+=nkRYlfE7.E&]x%#OIlrObT=FWM&!CT1J!IS.iN$aRDSylF[JY8|RqQ' );
define( 'NONCE_KEY',        '[qweN!;~@NRmTO)~ C#0yPLoy,bzf$`)5&Yz)4o<,kMX:B`{#:x*,55 X~j~f0mr' );
define( 'AUTH_SALT',        '|EgRq,Qg&y`$aE_:JM;Xk#6>JIxy_N6!)J7Q_>c4&!FABko;bB>kB,Z.{P3LPKjU' );
define( 'SECURE_AUTH_SALT', '*V8t|TRS8mlj)S=0v_lbBEW#LL6[ekEDsVB]e//V$>0Y8=rIiAR3S,?;gnn&&`dh' );
define( 'LOGGED_IN_SALT',   '{52|0 ^Wzy%4Ps}FDI_!Sw@(Fw$SN{YE0Rv2Y_Y.CfK/o8kw!&q8VHsG7$=(9Ihw' );
define( 'NONCE_SALT',       'kD7?0tR8=$pE?|DY]PPrtlUOuD]`g#F>5$YOczhTvq:*?IFdMAi[Eegw/5yjR~.&' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
