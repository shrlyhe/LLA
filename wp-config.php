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
define('DB_NAME', 'llaDBif4wx');

/** MySQL database username */
define('DB_USER', 'llaDBif4wx');

/** MySQL database password */
define('DB_PASSWORD', '6qk3QqC3Tq');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ':+DDa]]HxxPim6IX.*bum*LfXm6Eq^${bqn$MEU^3}Fr^z}YnjF7N@}>7kzv,U');
define('SECURE_AUTH_KEY',  'o59;]e++PPm9At]]qqAXX{{I+<bXuTT<<AuuIjj77U>>cvYY00N@@Urs4RV>[Gz0k');
define('LOGGED_IN_KEY',    'w~dWl151Ht_+~;etlp5LHWa#926m+*x#WmTi;DAP+*;<Am+iyIPTbXyy<Tjbq7QIX');
define('NONCE_KEY',        'nJFc00k^,UYvJ8|00oo|ZNkCCw::hKKh55p#_ZlxKL~12llLii66Lt.+6ixm+HXb');
define('AUTH_SALT',        '^B,7vNV0Cwo@GVNo4K8O|~[Vlo~KVOd[:Dp-t:aldtKDS-]_Dp+tLaSe]LDT+];am');
define('SECURE_AUTH_SALT', 'S;~ee9a6H.*a{bumMfXb{7Q$^$brnr7QI>B>B^@}Mgr7QJN@}8oroNgZc}8N@!z');
define('LOGGED_IN_SALT',   'M$Bu$Xfy},>UjgvBQJ>7}r!z}YoVk0F8R@}8kzw|GVNd[C4Kw|1dwp~KOGW_1:Dp~');
define('NONCE_SALT',       'zzR!}o[ksRZ4C@5K1Gs|1dwp~9OHa#5Ht_~;Oeap5HW_6;Detm*LXm6LEHu.*bm$');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
