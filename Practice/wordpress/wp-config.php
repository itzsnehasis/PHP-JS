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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'vUSGVh~861QuJ6i2ra!]OCo}ypc)4h)>U R;+-8<Ez_je{PqLyt<Y?+EtSuwFaUC' );
define( 'SECURE_AUTH_KEY',  '4=D@%~DK0N}VbFI]|aH3-Wr7rxb;Bw@.a:x_WuFGR,8dR|&x:bwQ=AIOQNx12^K!' );
define( 'LOGGED_IN_KEY',    '++BwXF!KBON$ hC#7T%mE&[/>bA{}]w_eu)+TDWn{{6#NbR!tK?rIL*B.l6RA15{' );
define( 'NONCE_KEY',        ']lT@peb_d+^>?EZG`gb[SA{Jl;1h<N-o_sk2n;%cr{Qgv%({Nk)[6B?a!/Oqa`W@' );
define( 'AUTH_SALT',        '9_!S(0L*9PzY5!&U3uo%7w8.!tID4NQ<-_r^sYwvEt?zH7fi*#<iH {3`/{q*ktG' );
define( 'SECURE_AUTH_SALT', ')fy[$A7pzy+SX@)b;O-,SYz8O xwt[K-dCP<grp!Z gh#;-#Gx?$On]39[ >*?4f' );
define( 'LOGGED_IN_SALT',   'Pa(>7gVNrR .;hUPXrG*cCHrW6|=Eb||G2}KaC{)vG6x=C=$4_py<Dxcw`9ud9xo' );
define( 'NONCE_SALT',       'jnrlm$!$,4@q|zlQ@SWvSAj*_b[$NOidYO?-<2AclbH?h_2BU7A5Q!n(-7thHHlX' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
