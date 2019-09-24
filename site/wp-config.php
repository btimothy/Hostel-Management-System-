<?php
define('WP_CACHE', true);
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
define('DB_NAME', 'stmaryhosteldb');

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
define('AUTH_KEY',         'U,G-g,31)o0SSTS[{OQGl/Rg&NABQ`L^]LCilvG5;C)C E;.7?*D`&j~^%`F3i&_');
define('SECURE_AUTH_KEY',  'dcG +s<f.xT zXj=5^dn!_nfnNaf<SvXAiPs/~_Nf /2Kjn^tDl3hXJ<_5}(C0<A');
define('LOGGED_IN_KEY',    'O5?DS*}`>?.*=_q>*SN]L^tbX7@9Ct[iIpsiwW]g=Vw*r2X3C/C{Im}9,Y_ME4eF');
define('NONCE_KEY',        '!wm[hT;(>A$>|Wx,&E^1H3KIfi` 4Rnx(fNBL=E2sKFnT2}C8lQDkX>93 OSLSxl');
define('AUTH_SALT',        '??613Shal_?:,mEa+Lf5u9KVP7Rblm#rx4Cp4497RsjUQF+lFq]=A2W-1[$2}AgZ');
define('SECURE_AUTH_SALT', 'xT5qh(;|)o4N@n:4o6VS~Z?|vJfC%|}) SuXBcZdD.?ug2RHk5s=Zw1M9!4V~THb');
define('LOGGED_IN_SALT',   'c#f?=Yr+qUy(HVXSx[KVE-sJW! E#@NZvFCdVp$985f}VF+PYM!W<MJ#EH{Pa#It');
define('NONCE_SALT',       'bclhlyxTmnEprW]+8eF4Uv<coiHLPI<]eIUj`ww.|ivHc h%$KQ4u(M.CKmHiI*g');

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
