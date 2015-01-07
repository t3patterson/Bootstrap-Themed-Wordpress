<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bootstrap_to_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'u`nC.(yY-d1.07R)5pn|Z%%##@s|{25x{OvP,8-shbp&I[qU?9$<uH+BCKh|v)v|');
define('SECURE_AUTH_KEY',  'uj4~t?]P2e^[vUdc//!4f#VW}NZ2i_@}q+VC(nywB;731-!guHrc[pzL0%#^vCj{');
define('LOGGED_IN_KEY',    '-a0>G(j)f$2&I1?{ZMpuoS{.3?+P#X]7Md)fX=|zGILK>+t8^!]3mX|{yRjc[NSx');
define('NONCE_KEY',        'j{p&X ^(1k53NI~6y(YJrkPb=|q%-]6>m(O;~*L&:+(BHuh#mylbm_ %YGsC>U#z');
define('AUTH_SALT',        '/%;8ae+SXTEh,^tK4:/4Z-YeTxH;NP!0*2dxhxX~zFn.Jm)sE3G1JHFQN/4{QIw;');
define('SECURE_AUTH_SALT', 'x-?C{|~+Z+[ScwH >W!XrZU# ~yDbDVsFF+@7Jh<Id@jlHaZ-P4bt4RFwXZ3p% n');
define('LOGGED_IN_SALT',   '+j;qR,ZUvRnm-IgE5Aji_,P|P5CIN3kp+<{PAw=.,FmGN=xp|S)|mh!IlppeF~.g');
define('NONCE_SALT',       '~C3e|z55A|8FJ kw|Q+{KPkp$L=VIRSGj:J9UfdDlI&In||p8CdJ-9$m)`QCGapb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
