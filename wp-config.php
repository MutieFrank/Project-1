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
define( 'DB_NAME', 'Project-1' );

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
define( 'AUTH_KEY',         'yN0BVb/i5sb~|%wsW`PN(7+~#o 1DLO,$zEO).Z;sl,*pg?(@KS2!@v=fLkB0@YO' );
define( 'SECURE_AUTH_KEY',  'U#[7Y)F%0X[KcYNTa$C2iC&O~>M{)^R2xe)h7wEMv27V]g&|^@`jraJ:p9NuL2zx' );
define( 'LOGGED_IN_KEY',    ',zLeU;k?<)Q<avTOn}=F>fGZ!f8n1^QSjklqAv:Z)a#2cZ~/=>z?|2@Zl:P|W8O)' );
define( 'NONCE_KEY',        'B?wpge$3}33T~4QcKD>iGp8j02aI<X{0~kqP^4Z6v*;lc=Yf+o 2YVui,{Y {OW?' );
define( 'AUTH_SALT',        '~uaS/FR>?[OUoSDTn3gaVmO<Rul!_s1EE/3%UG:9=z!yMx&yYhxh.OrxU}SW>@1)' );
define( 'SECURE_AUTH_SALT', 'Zab:g0,(29qOo6Eh4l%nxBGil=KAJYnLuF2K3qsWr}ZVP6E2=I?]Qu)wopM44UB)' );
define( 'LOGGED_IN_SALT',   ' w!GRWE.$$?/-ys*7ILJVC<dk/@*qp5;Deib$0gU4z1~se|zL?t{@H,z]+`}s1#t' );
define( 'NONCE_SALT',       'M*d4L1GZ9Y~eW5X0m6a21ybSV>m,4jq q{]8mCeC2nd=hxj&__V~209bAzb[Zi^9' );

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
