<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'imbibe_bigdog');

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
define('AUTH_KEY',         'VHj%2d&c.Z|4OVg:o_yz~k>@npGFKjwvmaj`?F9:pgf.vcs{+7R3UPV`(q.C0yfN');
define('SECURE_AUTH_KEY',  'c`=~nv{+JV_os$+_<N<RR_DXkhMuj}w%Bl*<dh=-cnw{X43<]s{64v >#,N&D;Kw');
define('LOGGED_IN_KEY',    '(g|6*M+?`tIl}~ C;vu>?z~h7p>co|{Jz>/|-tXG2+gTT~SWF8b>*chQV!J?09~x');
define('NONCE_KEY',        '+*+:V(}MOfTb0uz0h7DJ-IGs+#(YI|:}%O|jO}+~.9QdbV!C>QU_OA&ft4(=cfow');
define('AUTH_SALT',        'x>!cyz|u4|/jDp+b2x}ZFnufA<l&-xgG^y=c#c#<V;j[5u,e}#%i,q@:r]S,H> *');
define('SECURE_AUTH_SALT', 'OB9d&{!WW+Nb/`ve%VnVG:Zbmct0P*nzB$x^2e]5F:|^OLg3a$Vv140&LQm&-A7-');
define('LOGGED_IN_SALT',   'V|8Ejo(QlEy$/Ja1;y)U}0C$#lxY0A;aC[.WahV/hZ4`K.5#R808r(HfEQf(gyQs');
define('NONCE_SALT',       'KrkeH6e#}OOuda:S-Y5of>cRf_3]eb-(V&xf(i=hfr!O_>e0_;T?teFiAL84S0 7');

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
