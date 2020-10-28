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

define( 'DB_NAME', 'blogtest' );


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

define( 'AUTH_KEY',         'Eaj5^d4{xFN1lB>><>U_,%V&nr?nc YUeE Yg}C.uZ8zeNuV}M V~,pSpMER7?n-' );

define( 'SECURE_AUTH_KEY',  ':nL(w9dsvr<J<W?*h^m71]BuFAfyfXZ<~(!6f*r27!=KN.u6a3%#(O Eb7A?@T>!' );

define( 'LOGGED_IN_KEY',    'M]<c;06LX2Ot,kq 4xTpDXQ/x@K0U}AU!z`R*:4Z<t?6{N9l pJ*{t*Y/,Z)a<d)' );

define( 'NONCE_KEY',        'r#Yh>$EO^|]i|%Z{^J7r& yR*3d#yi2{KI-`1_%g!:/hWLo3#`STL9&*avoI^HX:' );

define( 'AUTH_SALT',        'F`NTwF#428@%OnX=xI_;!iZPSp!Aeygui~idpT&6 S?>M:U({vp^X.gb_R&ZN{rj' );

define( 'SECURE_AUTH_SALT', 'X+o=Kc2bhW2xh%o3BIhiJs#>S00UtJd#qD<G]@,Zv>m.gvXh6P=p!<pgJ-v<kr7H' );

define( 'LOGGED_IN_SALT',   '#57,@cP*kZsq*Ro+wYJ#}*If+&o^^K62YCq`/OQR`J9wF]uwCS^H*a>>{Z)#FUhU' );

define( 'NONCE_SALT',       'Br-R!%_%vmE44IF| vNj(Db|=4Z_hF+8MtiJ*Z<#Z<Ww*kT?.^_[X_rDn%%^^bwq' );


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

define( 'WP_DEBUG', true );


define( 'WP_DEBUG_LOG', true );

define( 'SCRIPT_DEBUG', true );

define( 'SAVEQUERIES', true );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

