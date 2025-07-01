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
define( 'AUTH_KEY',          'o1!6#Q|i]wFX (l`7Dd=VE2XR,J>1X&d9)w5VKEe[)!5FX[5 Dp#d-PnoeR6:#@Q' );
define( 'SECURE_AUTH_KEY',   'D^WWxoDdXWBUT*.-3p@5b8yycuoO%VVoUrG%*$`c8%+4&aNx|]-3Ek/z*d{l5,r|' );
define( 'LOGGED_IN_KEY',     'ghZwJ <d:2Vf@&zijDwSN)V]JG1?UZOQGGMvSuKw xR0Y$hN!PX4^85u<nMH7=p ' );
define( 'NONCE_KEY',         '5}Wl,lH?f99N5}!VOi$;6{>#Ih|0>F?)P6}Bc@Cl0^Pp*:2:^VqVPG)kmc%42q0+' );
define( 'AUTH_SALT',         '+Z$bm?ae(u!:)~`rtB~w160?;Gk4^g21VI&WwOG%DfuongA/l*>vx5z:!U&Da4|k' );
define( 'SECURE_AUTH_SALT',  'L,nBBqq`Yf7Bs-6%XToa*^1BrB!_h$CmK<udo;l%mrM!;YHKn*jA-+^{@h3hDy8*' );
define( 'LOGGED_IN_SALT',    '9D~%FJ=M|>8%?6~BPZ!%)e(RM#Y!TA#iqY.buY?!n#`l150Ai`u.#//`7I$n=Dxq' );
define( 'NONCE_SALT',        '2@=`,c;q2Gp#awVc@h-wN~zdl/I:#hX4 &:cs5l58U.Q2j/lS2g:cB6KcD}YUbw+' );
define( 'WP_CACHE_KEY_SALT', '6&yvD9m[LSXc8Cmf0)IO^D)Zp#%Aj.yESp:ZX}iu ):L,!TV{F.Jt*Z8R-6)eil:' );


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
