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
define('DB_NAME', 'bekti');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         'Z4&F56yC/E)x<ohS>u2vb*,~-E??h~.-uC:Di%3i|vq)LV4J-L|/J|xThRP@^1rn');
define('SECURE_AUTH_KEY',  'l:g.N ;rS(Q|T[NDs6i.iQPf%ftgXTEFwEv5q1Jsl`2kBl0T5/!-|ncJCpO>^mh7');
define('LOGGED_IN_KEY',    'RV:+!kA5#Cq[{E2UE8?9vZg$fyI0>}@E=KQpAZ;[jd.+tD-w#oKNoQun9nlG FJY');
define('NONCE_KEY',        'NzJn<v jPN.ZG7-lfF:?#l.yi7^M CTXJkOmQHhP0GkKM*9|OK.Gy#rPjO0,IO{i');
define('AUTH_SALT',        'fVu;.w>W4h}eS=+s+r>,*7@U[Gkf>`>~4K&{Sp[YnEYJGh3>wn4b{106xXxImA8f');
define('SECURE_AUTH_SALT', '%OmFlSE-5xw9=X[-B|3Qt|q_IDhM-&C??M#=k!hzL#eL#o9b$qI[rb>9R@aW)TZb');
define('LOGGED_IN_SALT',   'S$7+*s?h&-~0~tXG~#iVQi#ckjeJ9<N~z|U1u^sYv-t%_b_eZt+1vs?jWLlxsam:');
define('NONCE_SALT',       'N`)iD}yYy{-t4#X9~6,{FM=1j+-8)@0?HI>.xq&+4uz,l5.nbvppA<N*;L,|x4`n');

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
