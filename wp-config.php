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
define( 'DB_NAME', 'wordpress_practice' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '7wQ6@bqLpIsXx0HK8[r%D{{ws2NIw=Y6%{<&,37ZO$<Dv@J,@j0H?R?bhxunv0VH' );
define( 'SECURE_AUTH_KEY',  'da(j[um d05vso/)zpNQMS2}Q<|Qxctxvmy(1%cG<$.MB.mt/8j[~Mi$eWqBs%{c' );
define( 'LOGGED_IN_KEY',    '8.lk( ?m?kg&+OC:kY!V.z/7{OI-)=w8bMzT~Xmp^O[PM~Ug_/Zu9NK_9e8ruAz3' );
define( 'NONCE_KEY',        'E!s 3uz3{7YNBx59:CfoZ#SWhX0bux=vu!E)oEl^xjMJ0t p1#2*)%g_dvB,;y)/' );
define( 'AUTH_SALT',        'zTDjY*$p=V7.|S93JsKzdFdHm[cK]bCD,h%HwmIq4Y2Qw;>RJ={{42g:*Q@,Rf::' );
define( 'SECURE_AUTH_SALT', '37L#`Aq,MI-aV6Y.YH[[50eB6kbvz.DBoK`UwdT*6*Gm(ED<h=|&pm+$7-~S,-KS' );
define( 'LOGGED_IN_SALT',   'zGP=2J(Swxc-&t>P-Xfw&4(rqiCK`we@n9Nc17Kw8$susGFxj7Kw:W1h >&Ih2`n' );
define( 'NONCE_SALT',       'E4,X6datv7vONA7}YJsWi*9!6Q {_xG{[+mlHxyfiVPv~XXZso9pVFBNXT:Ka>-M' );

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
