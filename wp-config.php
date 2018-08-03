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
define('DB_NAME', 'captraint');

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
define('AUTH_KEY',         '5? fN@:mf0,qPyCm,V*nE_ >vwf0/J<.;@g2c+i@8#5i6kE@h-9_U.;4aZX.rY.Q');
define('SECURE_AUTH_KEY',  'g)6t?f!c V81@5Z;+Gbb=}tDrk`J;795+TK#v;V*8KWfC5D}I&DR?qq~ :8TvXJ7');
define('LOGGED_IN_KEY',    'Z=0c;U~ti}@}j!+qciSde/SGcP,8rR+E=i>@I$RgSvWyvXk%uugvnq/ENLVxkPI7');
define('NONCE_KEY',        ';[e}O:2`*YhAz4C0_|>cL+i3EE3sL*)+E{Hvbb$XSQ9aA`?*_[Z[*RY<W9@9:{OS');
define('AUTH_SALT',        'i5Et b^/W 6C(PD8)Nv~y+%qS>u)eyZ)iTSa2CzL!m~8!7H0nbQJ9cb>BA(FRij3');
define('SECURE_AUTH_SALT', 'c}MGh,?PXLNtT;$c)1=wrbT1_N?kVQNgH!E5!OhTuI2,8}mkc8H2&92nEC,+S*3H');
define('LOGGED_IN_SALT',   'TTJUX|-TBTt<1.n4)=2s(SFd$w#=H neoh^o}12:c%,*&?EtwA/a0(<X|E-4D3[#');
define('NONCE_SALT',       'Ge3N8{Xmlv>T!ZY.{vlXM61lo=XoS7*ugGtg6{MfQFBEfj:{9f[j}LS+|Opx1<T4');

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
