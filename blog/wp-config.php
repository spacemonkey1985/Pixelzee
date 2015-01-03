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
define('DB_NAME', 'pixelzee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'punkrock');

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
define('AUTH_KEY',         '9jdom!Q2G,{E!dAz[8Z_EOZA/#);W|80Cx=;kJVyF/^WGwr__-gI7&]psw4)WAYO');
define('SECURE_AUTH_KEY',  'Ck&6!|h6$(dKYf>]M6y]Ca4?@HWUrvqZk5aDZDctlv_Ds59B.5,RT2V`@5||(PZy');
define('LOGGED_IN_KEY',    'Tyr(t^Rh$tnwyFhRJA{b1Cf^4ZeVf-Tpu5DfqkomR8{K`;fx+Jf+>F_YA,O/Y?JP');
define('NONCE_KEY',        'Q8cfh{/*egs~K*.]?-{u2&5ATx]8E(o.n{UXbBrBp+AbDOY$er^EuUg:<0neg-Ug');
define('AUTH_SALT',        'i7*XDE:x=44OM$h2AR@=4F0w9R_xKbB>y8.@AQLe$=[BP:k28swt9FH NyHLxrR&');
define('SECURE_AUTH_SALT', '|f>`u*yM]+DW-@TcDi56Yq?@oV<Q12Q4`AWWn7t!@XQB]1|-;Te1Vac>ioR>LMj0');
define('LOGGED_IN_SALT',   'Xp:H?d$q K[,uLTS$Mkc4*N}ptiBU8j!lCGy{].59FsS2t=CwF?GX3uEh<cooF=a');
define('NONCE_SALT',       'O@,R@CW5r++&V4QK=2Ag~LmBJ24)S3?+&Wi=Q@Dz_o5k#E#N9(#Uoa!e2r[~b{fx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pz_blog_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
