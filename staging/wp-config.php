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
define( 'DB_NAME', 'saudiela_db' );

/** Database username */
define( 'DB_USER', 'saudiela_ae_user' );

/** Database password */
define( 'DB_PASSWORD', 'saudielaf@321$' );

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
define( 'AUTH_KEY',         '^uuJ0%@;}MJP9enx5zB1,t5lK^2I+vl6c7=7qQ3RHqVh_8)@OY,nrj}=}3WlQD=[' );
define( 'SECURE_AUTH_KEY',  'I/UAg81|[4m.7_&6m8i4Ov!R2%S,}K}-9Ev7]#>e[*q!UCK`x(O.UuP|hSA<;2(.' );
define( 'LOGGED_IN_KEY',    'pZ~Q>-zK(wUg4TW?]SJ{2KvMw`,1nJO+skyvNK~$<,;aM>(YEAPYI[/$;s6}-Yl^' );
define( 'NONCE_KEY',        'X#+(&c~QSN_4OP*ufn^yuL9:IR0nqf>]0HJonp<BaRQW+.?`Jr(kep:pHrx6[+O{' );
define( 'AUTH_SALT',        'R1qiO]2W-p4R?ndCkC424+p9W-R53K6F=oK,h/qZy,/!{l@,wU5SSjRUu-cn8F f' );
define( 'SECURE_AUTH_SALT', 'D.?HIf5bd=MyMFEpbBzJieI/S`.n;i-5|-Gbf0&23fCTyV$`Xab^?C=Uma>]?__(' );
define( 'LOGGED_IN_SALT',   '}Ltg8@2k~;[[yT:} rJGT3lUl`2#MF%TtY&5f <~}YzNG`}_2cx?&N:FiNc{LhWA' );
define( 'NONCE_SALT',       '9]=hEp$-Vtn^Zas/K_J~2c.*#;pjVAQTHaXKN`X>9uF9@ESXdQ&nimO-)tAn}T(r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'se_';

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
