<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'i(gh@z/=2uepTq@?T^}@[!QDA:>JA$EBd;_KRWLF>2U[D:`o/Q@ho2Rd@#IE_xr<' );
define( 'SECURE_AUTH_KEY',  ']#3%+Z$]VXo)>H>#P?*OI>NF~#8IR2ys8A88S>H`@]D-)be;,@R4g./o[&{dv6C4' );
define( 'LOGGED_IN_KEY',    '*eQ0STT9|qwLasA3UL!3K?|V=0|;P_QynD;C{F} _bby5y|]1Xot?fHOztD/I?1:' );
define( 'NONCE_KEY',        ':gB;GlKi,NT}-e2:4^wPx!hAcp(-z? xdTi#dGI/5gSYY.8OuXB~=$CtVVia~>W?' );
define( 'AUTH_SALT',        '6v@D~E~BxStis4q>~<#g95=_/oSDQ3e3#jJ9T~g>r)A0!YI1O;+I{x`5/%L9?Q(3' );
define( 'SECURE_AUTH_SALT', 'f;Bol7Xp^py<l#Fzv3E6?t=xD3joK[j]ziLgrmhCY2ZiSi0`Rs<djbXt/cBsol&R' );
define( 'LOGGED_IN_SALT',   ':)E<qJ)!-A|-k+~GnQ>M}RQLcowhw]{%j!i|G#0 KI=qA)iW8^1+JJ=PaCd3loH3' );
define( 'NONCE_SALT',       'L,>wSFh*+St.O&a2K`fh~D1efb1x=;3`w+AQ6ibb@f&#6|:&K;7V4>IAV3XNTW|e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
