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
define( 'DB_NAME', 'Petrosina' );

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
define( 'AUTH_KEY',         'S+nNZU%p6_enHLW!~qYF2Z<53/f#-}c.0,wu&&+Mm^d_YBqo))f?{z?16)ub4)Ap' );
define( 'SECURE_AUTH_KEY',  '_(f#i5u@VFT-cHLON#[<Y|o2G;88K6`pPS*,2M]DARRn<zKDrWjeXx%M1:~tA<[!' );
define( 'LOGGED_IN_KEY',    'JH/=nYu.7=]N}@R<EbU>y/zEh!k|*,-gvRrsBr8^8~?T[v1xq=Gjr3CUJKQlDfU9' );
define( 'NONCE_KEY',        'U,B8k?1#kNRVss<^*U$XY}kmwzL5yTG!hL[/=ry4|W{m5D^E`-][6~=Bqp7wUgU&' );
define( 'AUTH_SALT',        'u`!H<hi@[[p[MrL$zD<jm`<JC{fn_l;z})52JW`6m_4446&vxV0Hw?SZ?PA!@S5H' );
define( 'SECURE_AUTH_SALT', 'v$~do7MyqALPUYudxmo=JoA7Y000R10Xk~m :mJM4*(W$t.(mwt|FaFT:}B;BK)u' );
define( 'LOGGED_IN_SALT',   'c51P43H(>G45E];B,o8e=h):l746&V$VZS]!YWu2#jp[Y|b3Ht/Pl[Vk?2{#x0L.' );
define( 'NONCE_SALT',       '[E^@oV,X*xinr=2NeX^zUBC g5p0_Ytew.ekCr`6l D=NdzQIX=+9pDzA&(^}WLS' );

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
