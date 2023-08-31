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
define( 'DB_NAME', 'cyai' );

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
define( 'AUTH_KEY',         'Lhaheo9e]_J&a@H!2oZ5p&f+:~!}I7byU}} E_`m]`U}$7XRF+Lyaj;T%+NsjJ2(' );
define( 'SECURE_AUTH_KEY',  'W9hZgR?]Bo=ik$j(U%0qmGZX7n<P)}McER @XAEXd;*A Q.5iXD>:]ZCcp8oz,}L' );
define( 'LOGGED_IN_KEY',    'XQS<dACKxS9 gpV+a6A{$;*Ld*R/2$1ZcsP>K]4vg?uF[>Iy%qE0R]g5 >yQhs]Q' );
define( 'NONCE_KEY',        'C.#1YQ03D10eOyP}7]<n-_,n.%yY^6_{jG2Of3p HmiH/w_[w^mR)V_WwO#HU9J^' );
define( 'AUTH_SALT',        '(f+y`n= <^2wzK^-vc+m&>AFO+M=HQqoz{B6>|HX9@bZ&a5_Sdg_d/f_vHYy0e6m' );
define( 'SECURE_AUTH_SALT', '!FP}{jhyc#OFZ{E@y*Pbr]PwJs65i8c=< H#jhB_m!R3w%_+)$`)GEG$?i&.?tZ<' );
define( 'LOGGED_IN_SALT',   '1B@G0ie1awu6~e@Ec?;Mydbew6,-1No3An}!lST^yG/FP`:OHZ/G_E8(GD]|ixeT' );
define( 'NONCE_SALT',       'sK,EswKrnoe.rsF~9#H^MmHvL!lZ#0}n9{RuX$/#~Z6zicCc0O:=)Soh4~7fR|{ ' );

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
