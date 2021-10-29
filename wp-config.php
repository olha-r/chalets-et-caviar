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

define( 'DB_NAME', "u105956065_cn8jI" );


/** MySQL database username */

define( 'DB_USER', "u105956065_RYN6u" );


/** MySQL database password */

define( 'DB_PASSWORD', "vP+1z4Y7z^d#" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '8.5*3n+I,J>91bP&IG!r&8@CanqN}8Il[AEmy;% c[F)$6}V`ZiY:iv7i)7>o`5l' );

define( 'SECURE_AUTH_KEY',  'Sq|FS2jpc;/:ryW<Fw)^I3Q>&I=&^l%*7Xa~!&UK~e*|VBIF[F$hAzIh=TN0<27O' );

define( 'LOGGED_IN_KEY',    '{xX?[qZB1rML;LK<{$[,ZpwC{_d7_s$OC%E-WO7[PIXDcY.%Pz|eHOb2iZ]z9>HD' );

define( 'NONCE_KEY',        'r[;i4GM_k=}e>MVYNpQZBAjik2P`bRnz>W4BV5&zpA5 In(*x0W{L9czwlsw$h+Y' );

define( 'AUTH_SALT',        '!d*2L47wiP6 Q_7PDgSbZ2G#:yzXEBato-EsbH9#J~5X.J@<%>@m/,oyHiDteh c' );

define( 'SECURE_AUTH_SALT', 'PyJu7BA).E(=t9~ZqM@[/3yD4-v_AXI~3{<`p4XE[.ahYi_g}A6ocfAgxv-K#OWQ' );

define( 'LOGGED_IN_SALT',   't ^O[D#&aJO9~_HrX.xW.a6A4&.>ozy%ZSsLpzaOhuj66bI(G^f0(d}0Y`^}m[#k' );

define( 'NONCE_SALT',       'a_T{uo`c:%13ttgu7Wi_/ze8K833_t,%v)]y6HPGt?(i#r-f[_Ah(7v0f5`)SZzu' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'chalets_';


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

