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
define( 'DB_NAME', 'shortandsweet' );

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
define( 'AUTH_KEY',         '736J00E6-_}3yYQ[W[G1E{$,oTV26)#l3iU(2}-KNVu].^[v|d@qLn>qtu4P:SaU' );
define( 'SECURE_AUTH_KEY',  ']r@x:*3}>M?.hr;oHi{ba2)0?[o2f@leL>tov nGb;(uyDwH:XuUB94poF2$QY71' );
define( 'LOGGED_IN_KEY',    '+4ZF0/+fFp_T|$4NJodz`C#llo;cpFcREI)&,#5^7OY{1&I0- 7<v`9D[c}sb}^E' );
define( 'NONCE_KEY',        'v3e=2F=&$!VELT~#v/ZuW,i5k%T2|VU}3UZL#T|8WiYTH)Rg>O*DiFtsHrITX`UG' );
define( 'AUTH_SALT',        'ev:POc0k?=56mnY3&n?B$oh]<GC&(#%WU05^]Yizb&zM`@(q@H_:R|L]aSFdsu.Y' );
define( 'SECURE_AUTH_SALT', 'Eb{O!:md$U7%2~TPug5flx&aH*zBe%ySv)JbbR_lpf`X6z~yz?&4CH1<E${J7giD' );
define( 'LOGGED_IN_SALT',   'EvI1&XYU&J,bHxCF,7g*KeT|?I$a:f,NREyzk8PhTnc:&SR=k.Ic3%A2M(gKCAW5' );
define( 'NONCE_SALT',       'M8e2dt[|~zjLzS.]EwuXMW}Nu :Na{@J>wWS)m2G gP4rvQ#;-b;8M&($9y6+3G&' );

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
