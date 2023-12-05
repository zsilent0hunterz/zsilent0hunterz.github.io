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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'YbmaM(<X>H,Rp0zk_NGp0UswcS2>QwFWFhqcKrl1!2;=Qa<<f.fEHZNTXrKSy-a;' );
define( 'SECURE_AUTH_KEY',   'Tu,y`M=vUS06Q*tx)9jfVx%davpVMDET0yF<M30O/]#UqD`M6&Ri1wtXR02#t[h}' );
define( 'LOGGED_IN_KEY',     'RmS1MY]Vi=iB,PQa[22F*,hzK} ,rG$gNz5EhzwuA38P~sI]?14W,Kz*Q-B~{5n~' );
define( 'NONCE_KEY',         '2sqsbpj{X}L4`Ht5z/7gYZi-!-.Ym3buo*.,!I|(Yy. |rKoM<Eg=zY&i:6d,0T_' );
define( 'AUTH_SALT',         'yWzJ?l|Rxq3%r!9{q=+k#nb]4bvm*bssH43yhfJcp5Ewe2!|NYkJ)%{E3S8dEHl(' );
define( 'SECURE_AUTH_SALT',  'QPB;2( P$}q@mqiOBlpXo2Cul!sygg4Q;jyptP~[**|(CgY-idk5ES[5(!wa?R#H' );
define( 'LOGGED_IN_SALT',    '$vG$5WIvBWRD(mcV8IC+@V@oHDu[bclsjQt]3 DmR`U{hzZS`GV]Uy9>456O(-Aq' );
define( 'NONCE_SALT',        'N!KFeV3Zv!6ge~!uVH)?.zT{@ zxCkX%w?DMdJ{xhA5}]Vc~(6OwG:_Jsd10BOa8' );
define( 'WP_CACHE_KEY_SALT', '+aPmpL!_s};DLfhwC6Z7Y/+*-yp1l]sWN_?56RTIe}5j7K<UunIeqT0Wr0p>za~N' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
