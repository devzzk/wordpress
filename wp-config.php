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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'A4Jc`]9fa,LP^lB4c_BnH_T=bc6ZuEQR|IC-V<%8elzA|%T22Q<MkZ?tt[F00ZF2' );
define( 'SECURE_AUTH_KEY',  'Tli)rnP^J(Tk8 u.N>VksP+=Rqt<mknc>tsV9.TJGp-S#L8sg4[#a;i#H-,cRkK9' );
define( 'LOGGED_IN_KEY',    '@yU[D,x)RQR_!74d6edWYWN>ig12>hcZCg7Y-DU>|JofcRcq.~$&8$8,V?m?yIP(' );
define( 'NONCE_KEY',        '.d-N6BBc@iyo$S6b?#7l1JM6z)}+`WbZcm95<-eB_:=8IK)FgUJyMy4oBgO>8Afz' );
define( 'AUTH_SALT',        '4CLe+Fk5(D8BvM0~<m_;g6v(T3{?`x]At[_D-E?lIsS52/*|nMoe_.!X>?#BAJ6a' );
define( 'SECURE_AUTH_SALT', 'a<H/hbG%2L;-R@P%}8crIUD*#!OF*5aaxRMa#ZM^Y(p-:w.Lyu_Y5(9*[drXhOP,' );
define( 'LOGGED_IN_SALT',   '%,eW~@svPJ-iyNHv.F:L]pa)Mua[P 55GZ~VA=?h8>~HSNtQoZB+6Pm/A0?#<~H!' );
define( 'NONCE_SALT',       '+]ZH>`qS2i?SWeOmP?Mb[jm`5h_?%AHf4%nq0CRwdyO?lK-{J0XO0(mN9>T3.*[c' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
