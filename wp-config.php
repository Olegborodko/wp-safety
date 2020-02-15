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
define( 'DB_NAME', 'safety' );

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
define( 'AUTH_KEY',         '4}/ ;dy2/Qn_Na<Y8:pD1XSs8Of{plnF7iN5hC[k*5U {thj;/g^hZi R&orf3I%' );
define( 'SECURE_AUTH_KEY',  '$_Ntd_8-A>BD/HH0Rk`bK2#3[u#+@#dVYO!aUN$(,*7)y&>@nlsE`v>C5J:La|aF' );
define( 'LOGGED_IN_KEY',    'B/wr)d[+US>+&lyMe<}Ik8%Uj*bi&N@}bmva,P`0/~7!XG|~Ash):47;G/F;km|Q' );
define( 'NONCE_KEY',        'Vh .-&myq8puc9~$R8Erzy]9gM:Zu>!j_~:7nIie%IHC$Z0 #pV C8Q{-Y>DSFfn' );
define( 'AUTH_SALT',        '0^DU7PTB:[jckxL-SC^Bsr8j~?X?|EbJ]N%dB;rgGhWD.np/fLVGTS:&p6;<wh,2' );
define( 'SECURE_AUTH_SALT', 'C2b4v>M+jSE)~qQ4d<HluS0(F62bg~?/S<R(.I]SZgr5^.z-~$?EF<uM=6&BG2oI' );
define( 'LOGGED_IN_SALT',   'otjr[1u/YW@T38R/f1KNDdb)+Qs(c#Krtyl+b 325>*O[1@4#cBr`58/W|^_uP}x' );
define( 'NONCE_SALT',       '4-J(C*iq]lYlXd1{a9.z|S]/UIvVX0-YWNDK{p5(4#0xlSG/]].q#MxbFD Rkz7h' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
