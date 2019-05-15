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
define( 'DB_NAME', 'testing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */https:
define( 'DB_PASSWORD', 'infotech' );

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
define( 'AUTH_KEY',         'tkf.dr2WNz}Z$JJ1Z0in_cAII1ILK}YH1J!N:_nRoQ75y#;>z3]rf~@kHdq5F^M$' );
define( 'SECURE_AUTH_KEY',  '%]S0ckN.@z$!G7tE4/QC8~}.G~p;_xaWBz_G%GR<P:^ye|L8dPS>HtI4#*I_Xc7D' );
define( 'LOGGED_IN_KEY',    '_<1 PDQlJ:7;Rt4+b`~SH!zCww8|RXHOTc_S_Z5h]%4Q9q<s<6#wvC?4C$%#l}%E' );
define( 'NONCE_KEY',        '#p8<eC>s6Q/_lj5 |#8PZ#zix^n`[`wjYSEQYLRZ:} 1hh=3b=U^4#r~:qTx<4FT' );
define( 'AUTH_SALT',        '7y/!T0pvm6KU$VO1Qb@-?hs5Q<!|&HS7:#s8$kAE:nDNnTN`W!6:}wuj$X :_#?e' );
define( 'SECURE_AUTH_SALT', '}BA,oE)m/o=w`gc@oH--jjdPZiYpv;W~>[6?`AC$S)u;J&:#{;v&_o+`y?yazEP{' );
define( 'LOGGED_IN_SALT',   ']Q%3~Y8WHngGC4.Cg>;/,Ns&Y:&0-sjMSbXEg[/)kM./):{dnaU~<Q@q*p(v$K<w' );
define( 'NONCE_SALT',       '%y|!}<~P?^a_5yc{+Cw4f949bx^*^jBMlHwgf;5K(7fZP$M%cfZgME!Dk7= H40;' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
