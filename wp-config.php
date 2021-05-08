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
define( 'DB_NAME', 'bytetutorials_db' );

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
define( 'AUTH_KEY',         '`eH0~{dO*BKg.>PBZcH&D;9Z <wL{l&OM@,n>| e9,17r!|K)NH-.#R8T@Y^DKP(' );
define( 'SECURE_AUTH_KEY',  'TY_7V+M%.%^~*0Nd$n1S^8|?*p|JIrKgXpf$nm%|y`j(2kk37_e?O*YS-;lz?Pr5' );
define( 'LOGGED_IN_KEY',    'bEk?--!5qv2dkr`F==Eqrm:._J/nDSGA/{meBe*<<_!n=gp_/*ni gc. Ad5T9rM' );
define( 'NONCE_KEY',        'M%ir/!fG$K10T#@^66(-M<m@fEe@OT)>.T:DS]DJj]c%O,7Ng?iSX~h@OIWTDjCU' );
define( 'AUTH_SALT',        ',PqN `Lud@s&n$4zBN<8/NdP6[.wo$&]L+v/gb+LTD1SuSZJc=(j:j6`aYkPUw)<' );
define( 'SECURE_AUTH_SALT', 'EY[twwT*:x!X&!1^cmW_#uWQ9vffZuTzfSb`zEl5ne7p.wTw)C@/+<Z@uOh5h^Gw' );
define( 'LOGGED_IN_SALT',   '7F9|DP]JH=U5jG2ZE9|jCc`(Z3Rn$2i2a[jxj:pW98 =juw34r9-2yKQ=$fSB(4P' );
define( 'NONCE_SALT',       'o^Uim|ML*/YG(VL:Oo{EMin$,59i:~l#^Hb`3ebO6^3/>t>g`:$T`#ZAB)67haV>' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
