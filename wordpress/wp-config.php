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
define('DB_NAME', 'news-portal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'U-}7]:PgVI@mE}M:Q;a^no#xo-6`-(kZb6;`fVn{lCq`5Sp;]>q{F#5rv?=Yefn[');
define('SECURE_AUTH_KEY',  's-[Tk#-Q<F=H~]kwGjC-]AEZ-C=KW/{q_ K{J$Uqz)UTct4;UcO}~MMVUKs(sBxx');
define('LOGGED_IN_KEY',    'd?Dh7^,ZRQp&4biOek6C-d5$k??)MK!=Lq24dGK<3NFCOepDG{$=W@;[zSU6ml<t');
define('NONCE_KEY',        '7^xt@22qsLk~nCtMXwCHB<B}aD_-<-g&PO@G+^YQV1oH^;vX!ddtJM~bNPpC~w?j');
define('AUTH_SALT',        '!EGQ !!6&Pd%YI@>S)*|OH3]zw3V]jUtkSGm[Wu+u|z0v5)JtxU_2(C)iiP+xm<g');
define('SECURE_AUTH_SALT', 'E!`q$X95J)chVu[cWP|vSh_x{$J(TM9kqA{/~{XH~)bY9X5?Os_+m)gk%h 9G^sq');
define('LOGGED_IN_SALT',   '-J9f^l]p4m2,m OA|S*f,kr RERjOt&qURm->EwhRk#ZsMlQB;dN& Jdwq!Ju>/J');
define('NONCE_SALT',       'ghlRol>Lo^;9EB-r[PTLVuSw7YgAz>A~u2]$+S/t?0zaoAvZm({M*e,%+{J[A;U^');

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
