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
define( 'DB_NAME', 'renova-home' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'H}{%$&zfgaeYZrRaM!bBhBMNjLe+q759qw;[,-M,XX}*3)3(G(2,O,V3S@Snsz]~' );
define( 'SECURE_AUTH_KEY',  '_GqfDYVOyZOFlz^lnla|>=+ddh=+UYW7n61,I& #4>hriJ[NX$W`ENwtHTrxt3&H' );
define( 'LOGGED_IN_KEY',    'Tp~/b^!fPEC|&LA$xUo4&4$o-g%^w,y]Kd58)%W=Iy0v)QbZl j|`}g{-e(c&*7Z' );
define( 'NONCE_KEY',        '`&N44p?*;J4$U.IaG@}cc*oZv.>/R#{oN%# lmL@?5XW,SMI*gWerBRD-iy6:noM' );
define( 'AUTH_SALT',        '=E$kJoPVZ,V1SsaL_G_}/h)MS5&(NXC== hV~%bN,r[6[zC5f/q/o8sfr<| :I@c' );
define( 'SECURE_AUTH_SALT', '[#/uq:tx|g0EE4(RXiu3>ckv#;2jdCYU/39vHL#mB|o: V3[NcPmxxUVYh1D~tRY' );
define( 'LOGGED_IN_SALT',   '7Kh.[[K7jtW8hf{k,}WN;(]].Y7oJ:Xv`QH8r1@4^14<s p1bnI,bsFR?zPMzVI2' );
define( 'NONCE_SALT',       'Z1TpCT3hzykL@r^qd%gJ]3Xs4 VkJiB1uCz3wUWc83oT(y;<ntUGFE0<dLO]80zu' );

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
