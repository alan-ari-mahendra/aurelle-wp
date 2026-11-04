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
define( 'DB_NAME', 'aurelle' );

/** Database username */
define( 'DB_USER', 'wp' );

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
define( 'AUTH_KEY',          'GOH{CXGso&A5G}&0cjPh5Y*0|6b#{1NPO@ABy68]}UlisO Kuehw1$WR6keJ_GcV' );
define( 'SECURE_AUTH_KEY',   '>#0;4f?><{)}C0D}1wEGDObENKpm!A}H+,SV]NF_wII[L Jtk}|eHQubI|]4[NPA' );
define( 'LOGGED_IN_KEY',     'RJwK)1,PRCnIYw[Q6:H7b2JqE8*WZ>eE!yh^R:dS7gfP$.M})X| ~@3V3,QYL?XQ' );
define( 'NONCE_KEY',         'Q0R]zH[tp/*7Bl#ho`IUBW4Le$V4c&e&zO}Qj%V;iZ6uY*~p#4K!3[%wcMuXLCr+' );
define( 'AUTH_SALT',         'OZ]mC`XiTq3b1P=9KYfq=@147rJ7p]8zg!be2Q$X63ek#!]{#jqpz5;q~.i-tc0t' );
define( 'SECURE_AUTH_SALT',  'l53?$+ANkF(45!dr0]VyjtCC.%>6#:X8i`y;a_N$kJ&9{sN2JWnXuGXKXIJ],E0?' );
define( 'LOGGED_IN_SALT',    'g=S;FFW[JJhJR7.?[I5%*j.}qzBh(;2B_<$/LCdegY*nSqXIjmEw{)K2~b$rdJ0g' );
define( 'NONCE_SALT',        '^i~o^hJk?3hF#W0*~~8@ed^|bjU;cP^fur#Q=sIS$r9@h0#y^{K7]5*3 ;>]/4m~' );
define( 'WP_CACHE_KEY_SALT', 'uj{wbZ?6jNVLy(%.2r_)t`4sE6akEyh&EOcjz<H^vvRoiSw8*tyJhY `T#~r8ElM' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );
define( 'WP_ENVIRONMENT_TYPE', 'local' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
