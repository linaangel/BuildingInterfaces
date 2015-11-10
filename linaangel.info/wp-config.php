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
define('DB_NAME', 'linaangel.info');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '7521ch3rr1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')x53N.h^Du|[B~_a0|UR3MC0lupRk{aK$LDJ@[}yrvC+yWj<43^@!0+zb{0*H~jf');
define('SECURE_AUTH_KEY',  ';#[~*|xF.x|B-iqJ*|nfUMUncU*T5K+&+5?6LrPMd?lNZh7qc$!3p{ -c|*DsUK6');
define('LOGGED_IN_KEY',    'a:&AEA/+F%8,V-+*9A=,lgQ&bF9bvmx*+-O@_}tA$j@yljXG+<}Xp.-CC@=Gr-Oa');
define('NONCE_KEY',        '@X{R$L% -XIa%!#njfrP_NgaNA5BK`-}*@Cr{8M]-em-g-5eR}[-$27(fByt>.hW');
define('AUTH_SALT',        '52=jvi>LVe8FV.-S~k!5c*LSM2+Q=j)rXiNjTNybPyfN9U$n}SkcBf<e.jx=FkwC');
define('SECURE_AUTH_SALT', '(om*0oS[w~-DcI(-x,GY[5-8J|#L[c7@X3vsvb&lpZkLi5@NU5X aQ-bo-/.L=`.');
define('LOGGED_IN_SALT',   '+:BfdbAlvG0W)!Zk{oxFo ]ia-rQE$vU7A4=z{:f| 9rtO&eu9HD6o@Vf/De^T}x');
define('NONCE_SALT',       '~WS,ELG+v|sn]08TN[P3,YiQ+LWd=F%fgM--fD.az6oFTNNAxjE-tN;h+oca_6B+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
