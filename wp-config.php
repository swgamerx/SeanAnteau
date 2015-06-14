<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'swgamerx_wpmain');

/** MySQL database username */
define('DB_USER', 'swgamerx_admin');

/** MySQL database password */
define('DB_PASSWORD', 'XAeRYAgxCNKLJr8XFNQRLJZfDKzoA3rt');

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
define('AUTH_KEY',         '_hyC@ 5c|?O-x1WOYGU16+`$8/Gt[-k(^4=C!n)`jc8IhR/$o$eyfssA-|<~kw]P');
define('SECURE_AUTH_KEY',  '_K]|aE^-|hl|6pvw9dJO]RV]UB=x}pXv #Us[mR*0A~CY-Qz5I5R=/ib-?+Nm{=^');
define('LOGGED_IN_KEY',    '6^9oW0HkYp9>(cMpc-rN;XR:Z*(|U.{3 `po}Ay%C.F#02IwnR6hWuCos1Af!_v6');
define('NONCE_KEY',        'D]@j9>XV+8?[>LH+rUnm:Kd0o}pT-3>S):6Fs3^-Amx8J+y|wwvhX~wJ-:|_kY2R');
define('AUTH_SALT',        'kTX{AX[DL>mbr%T_$Ao5l+rm<YceC]b{+YJ-%s)KU~hgJK+SqrQp=oeQ2+l/AK5J');
define('SECURE_AUTH_SALT', 'E`eCg@}qAcBtiV3[<kd7V+?2*<:8q%@;w/d1SBbs/K?QrDi}>5Xnvy9{d33N(E*f');
define('LOGGED_IN_SALT',   'k0Rui~Pp!7l&2![WAA5Ybv8fjdXOj,Vp<U|OkP$[2!0#QQMZ- TS!|]Q0Z>|tV3}');
define('NONCE_SALT',       'Wcox*5T[BUXc%>0msz0l&U0r>6|)JtiR<GuO[hMF$$z^YuvTg/.hL*-;2+>jitm.');

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
