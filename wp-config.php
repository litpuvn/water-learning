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
define('DB_NAME', 'project2');

/** MySQL database username */
define('DB_USER', 'tagcadedev');

/** MySQL database password */
define('DB_PASSWORD', 'tagcadedev');

/** MySQL hostname */
define('DB_HOST', 'tagcade.dev');

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
define('AUTH_KEY',         'fRpyz6xHDoP#`,h$G8MsV`P`t((=CRr-o+bF!N[m]uQ$]}<GJ>0n%$O?XC^L5o-[');
define('SECURE_AUTH_KEY',  '~FW956WV?D_^ssGp113mzbK?^/7^IM&(DPAa#*W@v];Y7SU^QqP.>#uE84wbpB3I');
define('LOGGED_IN_KEY',    'X{JGR!X-(U$yoas.eT?.{P4LNJIfmn/0}$3n4O)BwN@kY{,t-ht?/|nCVy82fI|3');
define('NONCE_KEY',        '@g@`>zxrjkJDRO,W-@9)#bk6NY]&~%4P0EJIoKup29`/9mS*de:*l,?f:r DNoTN');
define('AUTH_SALT',        'FNFR$u* Xb9a9Oz[FG!G XiYs2r 6i)6Swr>lXu~b.+yO4m-o uF0uhM5uTjIV6k');
define('SECURE_AUTH_SALT', 'G,%dFE>2K$/1@eTJV<]8plUUqPFB0=RHd4*4bz`j2lV?(VZ}0dmO0WuMQhOjeb9P');
define('LOGGED_IN_SALT',   '4)[.;EvcB;g!LsB$,`sa6A9Ysoqs62pA`5LbBQaTKbxN9rYU}_{u}oo+cux9@ao4');
define('NONCE_SALT',       '#xB(*>N*a)$4<g%f7YTS{]x{UJR5ESe$|f$Lu$W#NH3u-s[ifz6&W9Al&|[ _zr,');
define('FS_METHOD', 'direct');

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

