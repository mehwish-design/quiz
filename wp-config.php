<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quiz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '((ml9G0D]BUe<sM};(4iyN&>HvAE!jXPA|]momN9.-5#Swk,qCW^_wL!@|GwmT<y' );
define( 'SECURE_AUTH_KEY',  'a;vBW`(]V~EkxxPD&mMuk<n%shi;N>4<!$xU5s#Az|S%#6F/kOpiMR#U&Q+gP|%(' );
define( 'LOGGED_IN_KEY',    '!KHd_wl,{uNu0qeFCvz[H`chk^6D$hl#a^7iT&YYS=,)Gt`R[MzTp7u1d8n3WTAT' );
define( 'NONCE_KEY',        '!@x8qeXZ$kVdK-sO3^;~M$0.;7g0^u?&v}F: ~(6eMg_F>$Pwl9KdaSUVZbi1RR2' );
define( 'AUTH_SALT',        'u]xs-@|T=+.QPX*bL:&3QaTIKyX*HZ_5e,rhz7]g(xM_uggq Gx4v)bk#%vR&Z.8' );
define( 'SECURE_AUTH_SALT', 'XE-L1Pvu]&Bp_w-S^*]P.+cdNYV,T e}m5eD7-d<6+8a)*?!I6fKu:N7=i9tLX5M' );
define( 'LOGGED_IN_SALT',   '2B[ntv/=J7 XU7{w)F })<X3kqx6Ll%w9kF0B=kKL~0cp&(oSS2+:.5W#i=ZILYf' );
define( 'NONCE_SALT',       'kkmk0/Z#YvxT^:O> =t<s4~08OT[@DF!M>$hC!*yUNaK*iPb%!J6}2Ny&k,{pIT;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
