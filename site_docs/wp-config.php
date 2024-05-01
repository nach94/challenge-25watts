<?php
define( 'WP_CACHE', true );
// Added by WP Rocket
/**
* The base configuration for WordPress
*
* The wp-config.php creation script uses this file during the installation.
* You don't have to use the web site, you can copy this file to "wp-config.php"
* and fill in the values.
*
* This file contains the following configurations:
*
* * Database settings
* * Secret keys
* * Database table prefix
* * Localized language
* * ABSPATH
*
* @link https://wordpress.org/support/article/editing-wp-config-php/
*
* @package WordPress
*/
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u562196247_dXtWy' );
/** Database username */
define( 'DB_USER', 'u562196247_7m98h' );
/** Database password */
define( 'DB_PASSWORD', '4pvXyx4lXY' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
* Authentication unique keys and salts.
*
* Change these to different unique phrases! You can generate these using
* the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
*
* You can change these at any point in time to invalidate all existing cookies.
* This will force all users to have to log in again.
*
* @since 2.6.0
*/
define( 'AUTH_KEY',          'I=-hCf+iMFFNHP$|c`6<v}`RKgQNn_UUI^rQu?c?Lby0{%:0v# 4F3>,5~/7n8pU' );
define( 'SECURE_AUTH_KEY',   'd:_K*Pj0[efDH %&+!e-f+*2d L qs}p9weW]:O)ZH,0@3XW{QEvrowv|/Dow)Cx' );
define( 'LOGGED_IN_KEY',     '#Bzw!/vpUXer*@#9QQ6@{sSO8Nc/t?*CG@)Qn(&!K#/b`7pgNK8b6g2qL.j@[O58' );
define( 'NONCE_KEY',         ':.[kn0#ng`XOFl_`E.,;qkC%f`$p:Oi;M;>X?)QO|B`P3-Dn&$:{-1`@g<={Lk`e' );
define( 'AUTH_SALT',         'HcKrKZj]g}R2;j>hTcLW$%0n!`YfGf?-EeQ$7c|Q/>j~#BB$^(98(pRN-)Na7vyU' );
define( 'SECURE_AUTH_SALT',  'kxO.Cku|JCjU>Q9ZEM|e<JHydHT[Pcy]$n^$or%+0Zh`h!Z$ia^3BZDmmI/x<.L4' );
define( 'LOGGED_IN_SALT',    '3j:k#aHQPQSx1U{;)Doeq$?gPeC$Oy%fz_f3_*tG~%pbx~.uCa#9-):x&tc{O7R>' );
define( 'NONCE_SALT',        '0Ml2TS0l]LQ<O|sLRk9;B0UT~g}]qiq)u#;Oo;jpEOWG[84*XBt8K=AHCz{wP.%T' );
define( 'WP_CACHE_KEY_SALT', '&@e62:/tsbPMBBn=CDnDX{f=<!Y<l#*]bX`[gk/y&zXbe}0#l XY.=$0%&k/K2<7' );
/**#@-*/
/**
* WordPress database table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'txd_';
/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*
* For information on other constants that can be used for debugging,
* visit the documentation.
*
* @link https://wordpress.org/support/article/debugging-in-wordpress/
*/
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';