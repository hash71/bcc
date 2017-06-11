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
define('DB_NAME', 'bcc');

/** MySQL database username */
define('DB_USER', 'admin29');

/** MySQL database password */
define('DB_PASSWORD', 'Admin_29');

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
define('AUTH_KEY',         'T%-L. Nd2R:`D=aLJGyCEi<=BGrd`-54ggT5 RDDSI/]h9WjGKntf^/fg1>L,q)6');
define('SECURE_AUTH_KEY',  '1ld?9ze[#Ks,}QCWRV]U%W]YP*`yyrKI~<mGMw#^N)X:Lm!IP[}PUBp`$gm[ByCH');
define('LOGGED_IN_KEY',    'YP5yDHjsr9LgEL9FU{`Zo(nY2W3?-np2i:tRF38nR81<7m:lnpeL)d8J9=,7TewE');
define('NONCE_KEY',        '5Cq-Of4Oem#1<2*2S~hr}Fi`JQP]sO>ml8+sf};i9`7#ViO$P3F:ajm<o?,:Vlra');
define('AUTH_SALT',        'iP,p>C7yX> wC/H2H.=~%_B2+mhfZ<TbnEcY`h2!eT)h-f`33KB%&n6md,0<in>m');
define('SECURE_AUTH_SALT', '6hJ1Oo$;=pC8A7VMcVhex8KK*cS0`!2(/p?.s&,%x<x{ VY(?DX}_Jk@GW-Hy&j6');
define('LOGGED_IN_SALT',   'VoiZ4kNZg21-uLL7(f`@;;(KxS Nh4#.+Zf|eO+}5.P7Rpkjm{*TO/ON,~_Q&liX');
define('NONCE_SALT',       'UEH$^76?}T7q:(m_MnINlV(hH6sjgd0,AbH+ *a>o$<hPt  )/GSvIn d :,Z^`n');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
