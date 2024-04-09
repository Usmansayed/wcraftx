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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wcraftx' );

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
define( 'AUTH_KEY',         'v9icx1i`3=,Hg5Sr.Omy^V?#RA.|jQL<5+f+3K9<D.%g6k3x`3n#m1An>UhhNvEK' );
define( 'SECURE_AUTH_KEY',  ',GQ8zdpD[8zj_q#v7e_dj9Api.bTQ;Z/0oL]pF3lRPU6YNVv#c:<71.:8n#.RbUU' );
define( 'LOGGED_IN_KEY',    'j&^T%7yG/EnAySZ+8J:!<He[zQ*C50M&@z3aTXN)/z@Ho1ts4s L29Vu0bYAl5L;' );
define( 'NONCE_KEY',        '~9=GcUjRH]^-GN%4ruz!Qw>HA!wiFyu9ImZK8*$^s)ZA8}f35M5v^L815H}+UWN`' );
define( 'AUTH_SALT',        'e-GL/EctKti(-Z5*g`R7ML09h_=Zkw{kYU#PtIcIA`m?9WM&e&%NXf]3TA_|{IR9' );
define( 'SECURE_AUTH_SALT', '6^F$MZj#?>Fk;:4$WGi$P4D:Vg#9OXrP #wMq:@4HE6*(tK8M~s@sqBcs7UxyVNm' );
define( 'LOGGED_IN_SALT',   'MS.G<udYGB[g$)yNkE5f^jkR(_qyL)2uHp[5j1ipgO,v`$_qC4$:[Arh7pn1)G42' );
define( 'NONCE_SALT',       'S*8}U<Jo$wOhBABc<rm1<G`HtK]`(yTaULR}i83S)Gwl03MZ.OKmty<Z!eAbq+aW' );

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
