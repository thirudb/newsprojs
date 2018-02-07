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
define('DB_NAME', 'new_pro1');

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
define('AUTH_KEY',         '84AbRaqgY9DH,|i^;g<>u,0:UGX&vr66 =jNtfN0%binZbfbJ=Mv|Z*KJCzBo;Lg');
define('SECURE_AUTH_KEY',  'jO`3.[kQzMEc7wDZA(y0Nc3qS8E~ QQ@)kLr~tBPjx#H?h~|s%O.zc$7|a&n_s&N');
define('LOGGED_IN_KEY',    'd-4.hID!eEZD1GrcW+:{%PRdZ}OgtUP%-^V!+IdCHIveXxyl*].0)5*!gfKRs&Qa');
define('NONCE_KEY',        '>T#y#&& ,5P-XM$`(Fx;K7Gb6cbd5Y49N0/~r??D6B4J#Zd~&W[axbGkE,<_aFZ6');
define('AUTH_SALT',        'gX(%i*OF@&zZ4ArmY[YjH!tZ,x_<|DGtSSR*F0`nv59)r)7V0z|(2QMKx)s,,,1~');
define('SECURE_AUTH_SALT', 'm}AukLX[^162oL-FBC9U]*R5>Z&|^V7UgIf{~4a;~#`,oob?tm2Z/_!)U_@kKqge');
define('LOGGED_IN_SALT',   'u3QfIOoWeQr&618YdSLs/%|y#!)lW$t}0|7,*wl]EEL0#7f|U}Wr617NV $y,c?8');
define('NONCE_SALT',       'mHmn=D%TUE[DY4xwng[g!,Ijx^5giLJw@[lWM,,hW5]>9^7 Xa@(4%(g8roRJ,M!');

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
