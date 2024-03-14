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
define( 'DB_NAME', 'claseplugins' );

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
define( 'AUTH_KEY',         '~N?xor3u2xu+97w,1/:io{IPWzCSa<O(Wpotk@omL,io%IvL5-P 1SmEg;pK4DAH' );
define( 'SECURE_AUTH_KEY',  '_}qmUJ0%z#SARu%z9v5P>*U7!:mB[~,mv.dfNePb4yH}c}LOW*a6Dcx?_9` 5CZF' );
define( 'LOGGED_IN_KEY',    '#DqaPBdX&M$.DG8e#h@N27$rzZD|,qk 1J!ovb7+wzdHNK3UMZPsECAb?;lxN|=h' );
define( 'NONCE_KEY',        ':!W^3*J;2a3F`|AxDi4HFhXU_=MhSC_2t-noXliTe|N+7g*,j9w;>T[]kY48|Ejv' );
define( 'AUTH_SALT',        '!44p^6N:(=^L&~Pk/l ]3X!Zo}h.0GjZ)x=2C%cCY1LNzHp&3+-Tv$~=4tIh>5A-' );
define( 'SECURE_AUTH_SALT', '<cT9z_6AbBvZ#2-!.x#y#++Iv17qwi<8ra6OF1NkV%|GP<:][U@X*Ho+O6]uN>)a' );
define( 'LOGGED_IN_SALT',   '8mafY4g&)P*mwr~uM4jxcy7X|0uP6`uq`k)j1} }47={ khL:@|#hcki(!NS@TU[' );
define( 'NONCE_SALT',       'A.>zzrxMV`~6w3V_Ac$>|uJ0`MIcTJ3*)^4>XhUJ^#p`:K2V<<s5>ir5=E!|8KLb' );

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
