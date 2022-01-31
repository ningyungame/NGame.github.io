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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '`roGX(G5!?+5_0$IUH4AKy?R<pMAS0:RfC_]57;DCWWcSaA^!&z_7{bnum9Cwp=.' );
define( 'SECURE_AUTH_KEY',  'W^#LA ^leE.gQ|9-)7cb4j1DI7t#u!x0]C/<1]lC*aL@nAa JFxFS+XatS!XO_+>' );
define( 'LOGGED_IN_KEY',    'jfD*NLEG:>og[bOv$W~l)j5J*Sn-Y&{`Mb}IT2c{#{pqQw>eKow7~A3*F+#<&YnA' );
define( 'NONCE_KEY',        '`TLHSX%VA{5iU+6CrJN7!Xdv$nW,#wW(F9}{5/[W,6mZ(,KLV:]$diE;#puc@)rl' );
define( 'AUTH_SALT',        'bo;hl@=B9T!_g7h>VgYF/W~Ib1}+lMNZWA@ua3K_1(o,LFmV86rH5!*KI;}$sr-!' );
define( 'SECURE_AUTH_SALT', 'BJ`JT~6jO6x~64cS%EV52%25eBe[RW;tc+z.6M)47}`8NrPg*2dI;OPw2hGdl)+]' );
define( 'LOGGED_IN_SALT',   '%__$y}lB#YlMlf{d$#B`A$^0+Oc4`C-D>BXMeu!`aZZR!BG?6ojt3TWXm]sqwvq0' );
define( 'NONCE_SALT',       '^-[;|3]Vv347AKyk#uPYUFcv_N`51SA]kaE>.,i$B plz32eX^I9~m<@~L8(D pd' );

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
