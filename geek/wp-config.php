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
define( 'DB_NAME', 'geek' );

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
define( 'AUTH_KEY',         'IVQ|UGix;hY$2|c.NTg1/3pTRk{p}.cRPLN+eC4Ep2do6X?~9P&e> InbeDrn1,k' );
define( 'SECURE_AUTH_KEY',  'H(0G -m3:Uyq@bW#KHieX|# ok6hHHDUNwoNgCa[<[wk0!v9).gB(T>e<N9-iSWP' );
define( 'LOGGED_IN_KEY',    '|10^UEe//~4fYh;DZPx)To;pp`BB&wFWdMDOU<f.7&,veo r012x9<8nCOpi[97r' );
define( 'NONCE_KEY',        'WPAV~Dd~bP[b(/)7yrFJ#C5}93w*<!1u@7Z oJQLuO&7sB?e!u.?H_ec>8GS]XUn' );
define( 'AUTH_SALT',        '59]EI<=XW,j?jTQ7iY~5=[H*#|X2gek[_|`RAQa=kUJNoH)RQ@=>*.Xkwp.auI5k' );
define( 'SECURE_AUTH_SALT', '<?^-[Z}XfCj)AX/hKm2|KEN*AQ8<n992]Z(c;xlJQIHf(5iv:O{*h%ZAWg!2CGzd' );
define( 'LOGGED_IN_SALT',   '(-|,U:s`I8rHm7I]Kh^rC3NC?S!nMr1X@YsMS$=Q&)bPr]b}w`WmdF}hV7b9W-C;' );
define( 'NONCE_SALT',       '*QfY&k]f`Pp%Kpzsb*%`?-?%U/{W^{r tdL_+IAU33DfiC=_JJ|t-!d<fWKS5s<H' );

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
