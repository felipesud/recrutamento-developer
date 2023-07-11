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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'felipe-recrutamento' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '100605' );

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
define( 'AUTH_KEY',         '9=/Ygc]~w[dvv<i%jK@Y[@ntn:;:;E7n<+MVkYxMMU.]:$`UWlxJy1$S+,0[Vnme' );
define( 'SECURE_AUTH_KEY',  'X4j-X*-7)&A55f PIC/Bwz+*~y^PY036ty!6P=E.?89u]&u^MoJf^{-kgYfbk){!' );
define( 'LOGGED_IN_KEY',    'Ut_`:4J%eud7U*1;f3X6e`,PXbAH(Wpk,I{GPz2g~Y#[Z(P{r&HO*!D~K$rss>e!' );
define( 'NONCE_KEY',        '12tc8yYMF:PKY3e@+i $dYRY5+y)<Te[|Hxv8]Jz1K@^2#ud%C3lH(xROp-hAgb]' );
define( 'AUTH_SALT',        'ldazv5#7x[.]Ldr&tIlYyP}y_$Q4{]:uBSDxXuM;fM6#}6}Z^g~_k177:`W<!v)x' );
define( 'SECURE_AUTH_SALT', '8Q]]$;=(-Y.+ZA(&90mLAQ[3dL!l!w(,@zl_kh#5L@@4!`m2m0@QI/0]i-fu=#@F' );
define( 'LOGGED_IN_SALT',   'shb1G-uy99Yi,NQSR7Sf@AONe|d+R5mYl4:km7#tgs%;3GL8uHXX~Ep=T)OupM,=' );
define( 'NONCE_SALT',       '8{|ngM|k:j!$9 YrgF!3nI,E40oRX!2HFM~,&dj(k5XNirxn~HyR~L8Mg_Vb9FI,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'egddy_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
