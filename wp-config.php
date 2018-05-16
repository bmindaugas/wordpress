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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'WorkShop');

/** MySQL database username */
define('DB_USER', 'Auto');

/** MySQL database password */
define('DB_PASSWORD', 'LabaiSlaptas123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-.&]2/I( KkXMn&704|G2sW6aG~w#^iiiRGa/ZB_uX&M]Cg8WCs)#nNic)VLDhED');
define('SECURE_AUTH_KEY',  '}a4>E:1%g9B[#yiNsQs-QTik=y Qu6`N}[GhpbnT/2+?}p*K)}w*4JzG*p=!bfST');
define('LOGGED_IN_KEY',    'wRiKG&T]@`SFmD}]X/G66q,-}zKYB}RI!VHu7C{/%pdLv0{Q+VNjQkyQ1Uk;5csN');
define('NONCE_KEY',        'e=LyTTt{OQm[ua0R8hTOMQ^HVYTztH6N(p%1%u/^;}L>!S cC8:%[I=etiV*._)S');
define('AUTH_SALT',        'sY^w#)#UBz3{Ucht_fTdg1R )>^- b0jautw}~9gu!796<&)4iP*dS[GqW>ky!-[');
define('SECURE_AUTH_SALT', 'c,A!W>[&+mhh48[ dVM,#zrPN-A)}RAi~GXOI[+S<Pz[)?DCvW+A|di!Nfc,Z*sm');
define('LOGGED_IN_SALT',   '~R^9=wmFJCWIEIM$~6u$.4yZ+*V^>vxaf:n6W#jM|nuEjH=]5pr~DEVcC!YRTKm;');
define('NONCE_SALT',       'D??tI1|QRGk,#EyVRkndUz7;:]>J$pa7,fGD3d@V{UCS{PL[wn}S!_D8=_;2O8hg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
