<?php
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
define('DB_NAME', 'experia_industries');

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
define('AUTH_KEY',         ' j)G]pN*XcW}.33f=eH~:]1[7ZsENWR<,YD(%k=xR!H?19Wp0i7lDX]Q!^`5{qG<');
define('SECURE_AUTH_KEY',  '<-3do*H,zV?m}N;*H{gSXsx+<i7t7~xk4pJ}GKdY S{Uo@/[k=PUuq8N!q^&8X z');
define('LOGGED_IN_KEY',    '2lCoDQ?rM<^`N7zIp$pK$E4tTz$Ch:St5>]x_%O]K2)aY:)dlmlY*?LZbNy!cDP^');
define('NONCE_KEY',        '*E~nQF*JD@q65aU@ig3GRLtNOVka-x;$[:1-$F>=+ei72H%v)htUP{dL^D%>jrc~');
define('AUTH_SALT',        '|07;4p{XUGfw;m$_Q;~BFvQRw[cb;DL]gtVYi_~lzS/;l`1-jI[(WPi}Yeg$~Nr!');
define('SECURE_AUTH_SALT', 'w,r,2yaZA`VA{q/XRS&Qt0YT2Tr)FiPEbc+gep#?,^cdJ^Lf mWp.+|+o03#apk5');
define('LOGGED_IN_SALT',   'a%bw9%x!kj|=/%;T#&2*k:l%I2AWXlLY3!rm:RDA ?o}`42@K}*_xTU#`C jYw?&');
define('NONCE_SALT',       '13w.E3{2[xG}dpWeA%{R1&e-nb-Ug}!/Gq;rmsEUcJ-uoTCaVT-1~,CRBy~)6.y&');

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
