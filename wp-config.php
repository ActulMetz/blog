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
define( 'DB_NAME', 'BDD' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~/#-O!5{jl>TtH(%WOA|P:lV^H/(%}MsX3iAI<<?@l!QuISHr?!dN|_1RqIPA1Z-' );
define( 'SECURE_AUTH_KEY',  'NYW4z}&Z9t_?92VAj5 c6l9)ge[Vqh!LcoB#^fm]VA!}ju.TbBb`*&@PBj2ZeLsR' );
define( 'LOGGED_IN_KEY',    'Ly_Dbuvt:f[7{f<T|2>?z0?zw&Au*v5Y-ZGaY3VJ Gcf]>v6+06Nn:BwZD(psecW' );
define( 'NONCE_KEY',        'n2FZ=x1OX!Mf:w(wdlgK-&9RW;H8o`XNQb?gtsan%9$,KS[NFgBCv]y;N^~W~Lkd' );
define( 'AUTH_SALT',        '(C_REU%qwPt&_4T;6k?u9??)B!@VF~,5ge(AHEgaW:WPu/rb,k&`<PrhS^YX|,!J' );
define( 'SECURE_AUTH_SALT', 'vi4/aJxLZ7=.ia*Yx1mc1,OR0-6OIntZ)r1SE{G&07[LtS#<e/O&|)-,~X@nz=r^' );
define( 'LOGGED_IN_SALT',   '=:o,x4lecl7w^Vw)FZ#5|#o2Rx3%[I!duqo}?V-bub=bx)wwEwD]-N>E>$2pJ^.z' );
define( 'NONCE_SALT',       'w53hI!DnoZV5xUfz5 (hqA`=8/(lsb~(DwHu?.aD:q0B@2as%qd6G/32[Vy?7S^~' );

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
