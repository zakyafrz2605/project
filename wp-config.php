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
define( 'DB_NAME', 'afrizal' );

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
define( 'AUTH_KEY',         'p<+nd1[ZZ!|{:B$xUftH$wo/uQi!pWq^Y8zSMw;/!6[B3*8,AS.e0>rrST9Qp[&=' );
define( 'SECURE_AUTH_KEY',  'cN]Rd$5GvDSe.@wk+Zz*`l2!4={8q(>!qnj~t,lH2xP~^-nUg$0;^Q0=kCI3wIS4' );
define( 'LOGGED_IN_KEY',    ':ArsBMSy]nai=?b#7`lctyJJ51hw4jc=a6wTxhQuft~fm:*m3G}IF-K5)E]jw=YN' );
define( 'NONCE_KEY',        'd/;6>1!GQgnME.%2S[Mg]Fu`!M3d}DHI=Y:w{{WEwyTl$|;p-n|LV,]}{m#<WG|T' );
define( 'AUTH_SALT',        '^C]`|;%FvZUdIG+.?#&4l Da(BoQw)Mh~i3>7jpl7t*R^,6/g7bhQjt)wl:/t DU' );
define( 'SECURE_AUTH_SALT', 'HBrc_<LUeH+:BP<Yw9r&sZktU9Qg-= z<YRgycAls]zJ0L_Gf@y_POqN0l2$FF|h' );
define( 'LOGGED_IN_SALT',   '<FMSa~rion?n*bW2U)mO$:8K !cuT+PEzbUQ}AB~T.]tb21ft_mf+V@TcB0a9@.U' );
define( 'NONCE_SALT',       'OY.$IgZ/tHhLj%h+]M ]C63`d(7LvX-)yg?3Lcg5e=J/d_)@gp0I2((Dw5_kPv.^' );

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
