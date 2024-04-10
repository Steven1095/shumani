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
define( 'DB_NAME', 'shumani' );

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
define( 'AUTH_KEY',         'Q-J)ASqT^RjFVM.,I1;J7Bt*k y (BPm=AkCT?`e-_^1Db/^BCv;l0IDC#m$^<AR' );
define( 'SECURE_AUTH_KEY',  'z O8S#66hAFR]132/*ODB(zLY<3 z<0K$}s<KKm7?h<M?ImeXiQWv#];W+zp@qaZ' );
define( 'LOGGED_IN_KEY',    '<YnZ/9z2wwcdI;!FWOjuuiOrM&FOMaB$8sds=ANPdU2j3)._`H(S3c VNc%.t+,5' );
define( 'NONCE_KEY',        '/]%fP&J8f(f>l!zCa@z0s/ldS>Tw[}UR^F4Q5~E@KW!?e+n,/R0m/lMJ%3.lW/a6' );
define( 'AUTH_SALT',        'hI((:7ZMvv1,[V*,BLw5YKKF!HS)mx2Mlru[:ArP}R5>peg8^Ad7Z},l#._B{+fi' );
define( 'SECURE_AUTH_SALT', '+<4Qd&.U>j*`v;s#;&#R=nGRT:iLEp}{Q1(Z}ld*_fD]MPfP=3URsF{w.8^bqUA+' );
define( 'LOGGED_IN_SALT',   '1MrgrBumZ`b.v4veL+FU:vK4_`4g-5o$M3u7GES0@T=t(?KowDBQ]T&eCb#|a*m=' );
define( 'NONCE_SALT',       'D;K;q0Ib$P&M?)!]cWcC@wZ,]NjU{tz|$+z!6fq!)46iMPzu@7x%thyM}s_m6W(<' );

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
