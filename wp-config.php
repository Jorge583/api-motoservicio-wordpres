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
define( 'AUTH_KEY',          'es,bUg;?_!a $c7jjxE9fo[?wWcMHF}sO-g$nZ^}s <cJ?63i+Ag|/_PS6/:<`gn' );
define( 'SECURE_AUTH_KEY',   '|oDc].9EK+Ht`=2whcdy{hm>4$gsc.xQ(5{!74DI%3vWc+2Sa0Gdn=-rx2>Fl`IM' );
define( 'LOGGED_IN_KEY',     ';|]SCOmN]e-ga n=ha68+Ls5j4l@<CV/LM2,GhDQsvsViYy!Sn=PRQD*>yyW6|sz' );
define( 'NONCE_KEY',         '}.yR<$9])`MK9 ,*0t!N[,tCM1;%ORAGhn~<QpR7P1uXjlVeZ|Mf!Js+Rsg]i/ks' );
define( 'AUTH_SALT',         '$ :lfb1q3z;0{?.dr[HjGF+6i.=gQmFS#oG=MtdlL5g#R_Oi/i6Bb9g{3yf(_ms}' );
define( 'SECURE_AUTH_SALT',  '!CjKI:k<L:dbI,d;=,+t(i^#.,TP;w;# H$1Sy_Y]&N|Eb9Vc&pw*;PzQ>1q$~G%' );
define( 'LOGGED_IN_SALT',    'eVR1K/S}NUu!{;-[Mn+Bb9XA>/2V^S1m(&#:f|xCx>O#3(W5P@G]_Gycl~Hx!8`f' );
define( 'NONCE_SALT',        '[tP$j*~?C1]p1O@+RpcZnf(de`}pFJ5Nsp52_>QLpKPETT O:04rD1P YFiIz;[$' );
define( 'WP_CACHE_KEY_SALT', ';XWw8%3|TuKRGF[]PaA}TCvm8isfI7%!>!QQ+!4ctO^bJsp(h*}HoC3I7+!?+k=J' );


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
