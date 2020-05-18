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
define( 'DB_NAME', 'tradefur_blog_2020' );

/** MySQL database username */
define( 'DB_USER', 'johnreyes' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AM7wOpj1k6LFxi' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'ZZ<vw?^/:Gld nK&rO!n/y02pj0oyhrvLa^~yXN:X/txCvk{uBIw o}.P>%B<[Za' );
define( 'SECURE_AUTH_KEY',  'v-+Vgsd5S*4p]BvH~hU*qWJ^ZU`A!BofU@zE8u~OVe66M}zcPKbh2M@#|,}CO<q(' );
define( 'LOGGED_IN_KEY',    '!p^EW5qWoPiHW*mF@=zz5:*GovKB~~d4YHJ`MJ>[+(%c3K=/^s9ud&*l6ink~D%*' );
define( 'NONCE_KEY',        'oC:<vk7V?Yzj{hi}nEM])vK!JWhkBS[CEhy5nqjj~m!ndsglX|B+& A.IJ)t)9 L' );
define( 'AUTH_SALT',        ';T$@^wQY<xjmN;zs /$95[p[^M^hjuxq#6 9p(OpT?v7mU#WW&293~E~KfZx [/#' );
define( 'SECURE_AUTH_SALT', 'dq2XscR}9]L`>J)x-cGioWHBdF$1!gRg7f7a[u5OR9v;/QOJ9[8#cluAN]#S9|P>' );
define( 'LOGGED_IN_SALT',   '_;.Wsrl;Bf)i?aorUS^fno-=g*8E+xDH:e@7a({b`BBEA6;PRp,L|.]ITx$0UB.o' );
define( 'NONCE_SALT',       '9+S9yp?CLV6G77l<t..{6H).-][H;N1U1K]}Z2g%(5ef7_&<R~HdcEz3}v_.+$lC' );

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
