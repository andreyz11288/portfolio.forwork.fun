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
define('DB_NAME', 'andreyz11288_wordpress_9');

/** MySQL database username */
define('DB_USER',       'wordpress_04');

/** MySQL database password */
define('DB_PASSWORD',       'r6O!R0t1Uz');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',       'MC1xKpqDk9F10F*h0LLyGN7CtUBLKejsibam3NAFu51msrSs)PR3GkIcAW8HCA80');
define('SECURE_AUTH_KEY',       'xh4EZKoHD2HiMMjsS1b1MgSO^vlxJsc%yA%uKYIkkb9tuA#vk%1MvbT@E(fbvTIs');
define('LOGGED_IN_KEY',       '&mCvPSqFqqH^xldJzChmcKXT@tsP8)4cRBpKOf#33F2LJ%aq!K5zgo69YKTL0PbZ');
define('NONCE_KEY',       ')0mm5B*ZJfrRFkc#T0Qh5yacyN09mO3ZqmxG9iYuXqSfzO#SLbcKqxo)Eo@x1JOF');
define('AUTH_SALT',       'pG8XC2*AwBInlEpTFfXs8fh*#Ek*ibmdOPhn^uRd8Qggw5Lynp9OPOQcU9gq)0EK');
define('SECURE_AUTH_SALT',       'a0WxY3lYN)6ERPvM%re71npaxXP&*CnOR5H^@4GdDh3ggsyC7)7j%dlOsdgy&ThP');
define('LOGGED_IN_SALT',       '&D2k8tUxL#IqMeWCENq03uUqDmkoRZ6g^b(nYJkYvJh)zqo@c@13Xi!x4pjgVvI7');
define('NONCE_SALT',       ')5SgYmLbJnY#ODX3Gg0KiNY@0&x2&6O))JEtDwFWQFUl3qh1YyKwq1chSC#%FSP9');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
