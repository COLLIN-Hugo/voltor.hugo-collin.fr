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
define( 'DB_NAME', 'voltor' );

/** Database username */
define( 'DB_USER', 'voltor' );

/** Database password */
define( 'DB_PASSWORD', 'voltor2024-2025' );

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
define( 'AUTH_KEY',         'RrubFlo`uW 8uSjp6CE`-L`UGDX0JJO5,fJSD&9u_V)@.MctIZx}N3tQKBa$W~&?' );
define( 'SECURE_AUTH_KEY',  'E9}-~CJ5Y@(8yq5m6b9EJNp4R~|_!94:kf&u|AL n(|gOR0 w0<s~D}Mh~/kY>{!' );
define( 'LOGGED_IN_KEY',    '(<c^#8c^V|%%i7}hUvG^xx~nk9Dm&+A7t_@@z~K!fcxCf%1ruj5H>lmJ3RwCyH9[' );
define( 'NONCE_KEY',        'Rhrc:bnbb@44X]| =FThD],/O52(*|,Qrmv=R*g8#4~,CPn.z8Bz|!Od?P@Cs0fi' );
define( 'AUTH_SALT',        'H$*|r$5FEJ(C{XR^Tg=abXh$l5YzX$0.CjID_[b,MlkYU?,Ug#ec`K55h<3{%Vi,' );
define( 'SECURE_AUTH_SALT', 'u^79c,DaZJIl+fJ6e}PQ#S5P}deua{{_Y#hpsk~iCqfU2)Wl6mEWZ`4NqOe Fb%,' );
define( 'LOGGED_IN_SALT',   '0(3tW,`:(ctjvJ2ah<fDXu7zg~c;D.vW)v!8|I,$D%lzgs(z9nT1K)ZpV?-M4@QS' );
define( 'NONCE_SALT',       '0$n;odvv :Iv1!rt/f7U:aMKf?5Dt1leer#D@?@QgZMfZ){{HS<im5zd!wjeUcXN' );

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
