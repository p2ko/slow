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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'slowlife' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'matsumoto' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zRi:TqN;1ZhCb;)H5i2&rxr4Cf8`|$?9l^iR:?`m8kpgtid5kOUVH:Ggg=eW5zXr' );
define( 'SECURE_AUTH_KEY',  '@]R){D_oy-&$R&{6N;J6[eddHu)O!TIT(Gnz+hh:,~FM,?YnK?+$*3!g $&z&eah' );
define( 'LOGGED_IN_KEY',    '_lEKfgI~nvzCDW&/O!;WptEeUyb/Db84^ uK~Nl3D1t$IA6V45jJ;+7hT *MX2}(' );
define( 'NONCE_KEY',        'Wr*8l4[XGO(qIYEz+qlr(hjJskeBsL/Bz[=NGD46!|`DpLoZ9ur5oSDkUWD$)l/M' );
define( 'AUTH_SALT',        '&(EZ5GS3RpkIc)gqH$weoA]=liep-O@Mt=QgbAIglRPtms-3WKa|5W,MR$xV.(EQ' );
define( 'SECURE_AUTH_SALT', '^:)&-5Pm+%K#=^>2a:.ru97[xl=V9+|e.5mQB<61 lH[5r0KH4Uc|~lv)E7-Su@ ' );
define( 'LOGGED_IN_SALT',   '?|&L,/`o)lp@?,&)dOD~u{O5L-a~&n2Qb`^?MxhkyH~+^gX,I}|%Vs/ %S+8FPoP' );
define( 'NONCE_SALT',       '|#(1&kXlz*7Sm,!-c5%~}Z9Oo`ACM~-8,`pTt,vik5h}EJq#H2#) Z/VXr_*P<}1' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
