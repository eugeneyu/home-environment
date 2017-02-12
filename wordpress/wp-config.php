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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
#define('AUTH_KEY',         'put your unique phrase here');
#define('SECURE_AUTH_KEY',  'put your unique phrase here');
#define('LOGGED_IN_KEY',    'put your unique phrase here');
#define('NONCE_KEY',        'put your unique phrase here');
#define('AUTH_SALT',        'put your unique phrase here');
#define('SECURE_AUTH_SALT', 'put your unique phrase here');
#define('LOGGED_IN_SALT',   'put your unique phrase here');
#define('NONCE_SALT',       'put your unique phrase here');

define('AUTH_KEY',         '~e8-FAPQI/>AYQ|e+b?a;VmL-XoMIkou1tlpku`.=X&kmS#r+xbi)*a>X.z01V>g');
define('SECURE_AUTH_KEY',  '?O|)ev]bdQ,IBC77uUgdS_5X)^_IY-|nul9L0^}|8+oz6?caJWD=a,-F[Nixp)pU');
define('LOGGED_IN_KEY',    'W.9&[/ucoi6[l}$Vk|3-l#oJP)T@[@Zk?-0Pgt9nq.4;UtR8cr+:GeVHgszDM:j(');
define('NONCE_KEY',        'yL1c-jaDf$Jr$7?|:YzXlZ!?Z2Z[PV+#@9Gn%4w;{`(~]LM57byAuue,} 2eX d>');
define('AUTH_SALT',        'd8nf]fV>P6mmeaP`0Dv#9)(@LKz$cgX*MnjqkX~FF7.#?+CyR0sn%Zs/Jdock3g>');
define('SECURE_AUTH_SALT', 'NWaD$Oh~K[obUkoSV+Y*+dq*Zv?Yx|i)YGl)6fH&~{b-JGM@nT2s=0rto(9oY$L/');
define('LOGGED_IN_SALT',   'z6R ,k)fYpW`m`pr$(?0L<^h,z`0x8(6Od4/.)Aee8W+B,EJZ>;l3su[i:?/+KQ`');
define('NONCE_SALT',       'nl7wss&Gs:; G UO4|mICsz5E-_kN-=eC|LP,!$&~psv/flsI=(*^)Mp|n@9sn*/');

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

define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');


define('FORCE_SSL_ADMIN', true);
define('FORCE_SSL_LOGIN', true);
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
  $_SERVER['HTTPS']='on';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
