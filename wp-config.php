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
define('RELOCATE',true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'inspiration');

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
define('AUTH_KEY',         '3JZ[XT[9Ujz??$8mD.>D|Y#mEJL+#(*T7a]Pc_}-|0I&W)Z/?BACL8gNQDrWTjLa');
define('SECURE_AUTH_KEY',  'JrW*jb::6?LDT~tZx-d 4Cl18:L6]_KZ&mX(-u|M,YTiGTn1d^&K;GQloF;@F&Wf');
define('LOGGED_IN_KEY',    'p-l/f|%yBn-Mg#cGO7;qnWT6l;J&<~A,7enhYk^|Z* vsjcYobct7Z`)?6:<]lAg');
define('NONCE_KEY',        '-9PL+G0/e&U.}F^f^*9SI)|@6>8Vg K~pQH0ogIdN.|^=mLe][ir}]uG9 Lc4Nl*');
define('AUTH_SALT',        'c%Wt<^)1sY_SvR(8=*uOu:_,P`eH;A5D}l(z>w3,}76{0i.(<Z=qW79C*u3zTg)4');
define('SECURE_AUTH_SALT', 'Ztnw<I%?sT%(7!c4G+{gS.wWAwj/pxGfxOjhw4|mCcJVyZ`6`Gi%QaOB|Sdg*1Ni');
define('LOGGED_IN_SALT',   'P;g9VU1/OC*th|4WFrZ|kFp=ao$d8@(yl|/-621-p<%[t(fk](~?*}o=ES>HOVc`');
define('NONCE_SALT',       'Hm^$+-y8Dy>;iNoW- rBzMHfQu{[Oo*(D`CaJQPH(X]oN&@$)1mFhJqh]u{^ig14');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_if_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('DISALLOW_FILE_EDIT', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
