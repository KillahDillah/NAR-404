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
define('DB_NAME', 'wpsc_nar');

/** MySQL database username */
define('DB_USER', 'nar');

/** MySQL database password */
define('DB_PASSWORD', 'RoJnNKpizBIMqyB5FOdD');

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
define('AUTH_KEY',         '/ #-&.S#D ?h22N$B4vHA)?MQoF[3L9Xnq|o;^y7J|@Pz{UVA7Y{<%~T_:-;U.(8');
define('SECURE_AUTH_KEY',  'J+_Aa9eAK YqrNAw Ka#J8d@-x9|+.4Kjs(]n?S,./Q+p}?+t=unx-C-/}Hj`1Na');
define('LOGGED_IN_KEY',    'caz%OX$x? ieb^97f|=0zs]:|)/0(QTWb=O47V*somKa%_^1c!fe{C?G(7h?Hq_?');
define('NONCE_KEY',        '?Xe;wRY{~5 _cwVb>G-J2u|I3`X_@Ry8PW[&V$E=&7xCl4[AvL0LKd@!?>TEu54.');
define('AUTH_SALT',        'b>cL80>8d95RHw%6vFMVqZThV(Ns[|(.R}aGAT5?H6!l}fb>$I[m:OV+KD$F=xvM');
define('SECURE_AUTH_SALT', 'Kh(YU1Z(0+2|fAA|jTv 7dtd+rTPb:D_A|7N>GC2t:,O^A>79*TP(Fu%8TNi#sh~');
define('LOGGED_IN_SALT',   'P1+-4xzh|l~@a.Be_|GyLIT|sU7lCv-63qar4.qYA[|%Xr&m=kv!Zw!T]G>9i@Gk');
define('NONCE_SALT',       '^1AmU->Vf.1D2;J{3 HAo}yW#nUS^UQ>76 ]YZ9_,UbLo]2X{YlkB|AlAj52yq}K');

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


# Disables all core updates:
define( 'WP_AUTO_UPDATE_CORE', false );

