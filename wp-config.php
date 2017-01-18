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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ',CuL*D6.}ZSBdN[O_w#1&c?$bj8Se,1sDG%n!eMAX7muqD+Nqa^Ghb]eo37JM4@(');
define('SECURE_AUTH_KEY',  'PsKRGL{<WvoP25*zrc@.;c(e_dJ^G-<U9Atks;tV!drEbob7li,]JFz&biJ9#?pi');
define('LOGGED_IN_KEY',    'cdMM7yn)9L-#ZWfFdm!BK77T]*|,Php!Y+vLhqpxs#F~od=X0owa@?3S{WRk?n8G');
define('NONCE_KEY',        '6A8X}BzSZw53*&r(4z(/w($6:OLoT`lvZ% c @TSFq$*D5iHf+}K^w)|7Cph(4M)');
define('AUTH_SALT',        'po~?yi_[P4Jn|W<gNL($|f kLh7)#E2^CGt9r/vl4UInJQq7N@QCcmk}ZXJXxqOh');
define('SECURE_AUTH_SALT', 'Zp*y1l=ng{DNYS#-&355LsfKNn:vP*TXb4}=1H/>2VSfj]3eFSB}x~k^E[@Zv|pN');
define('LOGGED_IN_SALT',   'sjq}~S7TZ|h8~8-Ne/gF^AJNR$:Q2+eAJ6}/j0mNd6k]@:t-xUYK;5|~ o0~[kg}');
define('NONCE_SALT',       'd4DV=b-z{?v6P|*e&Os:]e^Y.U,IJeU9>wW[|.>j:jzFL#-ZtZ5T}cb].UpJ%#)K');

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
