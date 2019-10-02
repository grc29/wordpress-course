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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<7mO$8;Le:*^DnyaVImmfF~5,V0Q5VggY^+PeHSt+Oyv|P(A4B,/$71tzY]GM[#I' );
define( 'SECURE_AUTH_KEY',  '0M:D2;2NEFXo`zVy78_qE|Zrc2y?Fj@,f_fj?tvhnf!shoH{>TSb-Vo~0>(O/ ^N' );
define( 'LOGGED_IN_KEY',    '`rEL%)bS~=m4>]%0_qF|=CQ({5DC9gTF_4wtolTK,wMrs-Lo%mSE<s[@ApaChJH!' );
define( 'NONCE_KEY',        '>F7%{Jq?HSe:.VE-7~=3/)h.zO*AwpmBc@hlx)#?m9?qzp2i5(u!]1kCyKmn^Lt^' );
define( 'AUTH_SALT',        '{m0oa_Ia~l7AhqDv!vkJ7m4vG~wt|jY`v?@Vl9&4c+R^s@5Ohy&t|-o5#u6B;CoL' );
define( 'SECURE_AUTH_SALT', '(~ld[>]S$!TS{wEZYW%f&=]<*qbu%c!BkU;ljD/(az@fGodhj_VZ%D~GjQ0bhjNb' );
define( 'LOGGED_IN_SALT',   'YE{x#M&}I/sDWdb41gF:a6|^vj9l_Q(e%=x2=3z{#*Y<&Zo[dsNt,0?[n:iug_]%' );
define( 'NONCE_SALT',       'Hn}g}?~_^;NFvPF /JLkQT+j+]}j*/4iY$vK1lObI2fQj#L`GAz[9g7#F{dzyW: ' );

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
