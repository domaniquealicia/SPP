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
define('DB_NAME', 'sexpositiveportland');

/** MySQL database username */
define('DB_USER', 'sexyuser');

/** MySQL database password */
define('DB_PASSWORD', 'S3xP0s1t1v3P0rtl4nd');

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
define('AUTH_KEY',         '/?fRzsvu|/a4.H*H2;YID$osjs7k{%sP+bCazQeI 9F-Co}G@rG}>j|w3cld`bo*');
define('SECURE_AUTH_KEY',  'M]EHIeT2r/`?e!}HQ?aARj#^x{[@vXz2P PI8uz)@__N9Eo5{6Z$C&ds?6eliYKp');
define('LOGGED_IN_KEY',    '}ciUna@@DNmu>{3h3aFg(S>qbv^!}#W_T-*GKu~?EAx0|Nq1JCw3zAtL;Ezt[eva');
define('NONCE_KEY',        '#Gpn3G;>ku#aPjB-L]h<0D09?@EqdzRs1U+M!&`|{~d8A|P`Zo5qEt@#-u<C]ZCz');
define('AUTH_SALT',        'BDi %yB.eBug|U,wDK&t :lUIZMw5gfL)-z6MB6O^3Iwu U28?=:|KrXP{L^zyp(');
define('SECURE_AUTH_SALT', 'F6TTi?c^HNE|;TE@^knD3O!*/B|qt34{JyM7j9_XExP7,8{rQ_&3s;-hg(XhsB*J');
define('LOGGED_IN_SALT',   '|.-Ns|YyeysltD&kk|5}G^+}W6Jz(Sw/FrB75T hYnmk*0`{#KngEjp+v7:1u9b[');
define('NONCE_SALT',       '-%o@?^@qmUl[n(OQ`?}-*#.h$3E._}4S5Sh#4sy>Tv1Qy-&eF0SO.gDp?@8ETNbt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
