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
define( 'DB_NAME', 'state' );

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
define( 'AUTH_KEY',         'I{`36V{_r,6bsqM~uyGJj5{!1x}bOalbSsasc;N-!Q7~<z+V86;n5-@]ufGv^c; ' );
define( 'SECURE_AUTH_KEY',  'KoXX}it[T naL(r]Qs>mGlvDEIk$og0bQ%fE:|@q3,H9q!GCkE{zR$bO^eT>W1t~' );
define( 'LOGGED_IN_KEY',    '6NZ;3C)53feueUqBR1:)3@IMtT_b{Svx$.f)i+NKXxqX2Q6=g5@dRy.Q4*y`H@1S' );
define( 'NONCE_KEY',        'QE$7FV6,~GB:Ft]D@DT&O8PdGgw<q6oW%R5m5k@mzMB[2~7D_%zDKq{Pe`1^+Flc' );
define( 'AUTH_SALT',        'tq}K,xAc%5yI[,(kMU3}Qg1.md@H*1n80U{L]L~aR$=!z&eo@@fMz?,.?pOxw&@x' );
define( 'SECURE_AUTH_SALT', '=RQlIb@:ei3N,S}umRceR!Wud}e<wyTrj01<Nu_?6zR@+q.QH&bkScj5ihLm|&I.' );
define( 'LOGGED_IN_SALT',   'vU_H-$+#~Mx#:ecEcxE`]#F?2D`K6&^hd0IQ>K@t$vd`/c1EnLWBpdp+TFoQ$~/;' );
define( 'NONCE_SALT',       '&).*j6Hwe05+nP,A^vS} )XzVW<ZB-i#t/zosZ^b=ng>|?vA~}V67+XT9,7XBHWK' );

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
