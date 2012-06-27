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
define('DB_NAME', 'huuhoangbk_hn');

/** MySQL database username */
define('DB_USER', 'huuhoangbk_hn');

/** MySQL database password */
define('DB_PASSWORD', 'vG6ea0s4');

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
define('AUTH_KEY',         'C=MrFC-kAA1yN[7tfy0o/XW-tDkm{!)Tk!h?O~)Fh^:oP507tX^Y7}H3H8S.jx::');
define('SECURE_AUTH_KEY',  '3R`vn8(3m*#Rkz6(]a6x1;vG_4(fby7T(V$N[p072[bvY9hj45PME-c::Rj}OLo1');
define('LOGGED_IN_KEY',    '$2>081U?w`DAJ-S&j>g6hvI:A3J/dTsLBoE|a)}e[U2-UC(c;SA6L0U0+&R&uzYc');
define('NONCE_KEY',        'nV*$Y2:9eyT+sj:0$0cee(Jcboc@#:r#Wy[PTx4DH<C7xyIe3Qf9R$:{{>L*N80b');
define('AUTH_SALT',        '6q9v,6b+bW]xx_;TP/yiW0onl#yM%90WF|P 5^cj~@:2V$,+(3cD8!ZG2mzkMi=N');
define('SECURE_AUTH_SALT', 'Wc20b9*p!$Hk&p40WC%smrPuIMcxmy+[`gQ:6IrB}XT.g3Dxxxf3V${:wvq]^rU,');
define('LOGGED_IN_SALT',   'Xli.+Y`D_,wc!^eicN>7D*^I rPoK^)>!h`hE1t-y)(FR-y. L~NXK8jG7h{aPKH');
define('NONCE_SALT',       '_?cGrfz-$Q4+4?YGo=g:NP&29_df_GF1}fu})os@j]zVu)lT8wAlss)lDu}Mc9XX');

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
