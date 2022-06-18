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
define( 'DB_NAME', 'gym' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '@n$9}du}zs*TW9IW^<ddUjcMc74`P=T!uRIWWG;ZG44[%o43b*x2_j? mFWotXO[' );
define( 'SECURE_AUTH_KEY',  '8dE[0cu8HO9<UWbqDj>rkJtcf?.rK-;M9S}:V:NM:O)(mEZ$Id^Dt1zT4&GJr//Z' );
define( 'LOGGED_IN_KEY',    '8[0S@z-.T6#jkPs`x/fmR,Vl)H>UIF7kQNhR{deut0}AHo#KY`U}ka#RPL.[*AMZ' );
define( 'NONCE_KEY',        'MnF(:fu$k,@:Up<:Lt*b$cG5;R>YBgi8:n{%r7!4MwmGHzgXwp2>Uv+<BGSf([3E' );
define( 'AUTH_SALT',        'V28GiJ_}{y6fR6RD:Ql}&roRoAN1t Fo;z$YZ2[O[0JbR7A)d>&: 0l9 4Ls[@>F' );
define( 'SECURE_AUTH_SALT', 'e&<E`fo }2r(3LDb;l1t0>eN_.n>4{iVFWWqKVBS#9<<GR>JcK5Q<$}1KGcrBLe+' );
define( 'LOGGED_IN_SALT',   '^,P;F?Z^yk0rxv|$]`rDJ.)c1pt~VJ9bP{FViO*3-[8_bU~n31YQ$>RxS:[7SK*T' );
define( 'NONCE_SALT',       'JMh(S/I)5k}-Mi8*0}w7SK-=L&{a#m@!a=MZ06WC``LHyDzbZiXEUITA/Zzn6d~L' );

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
