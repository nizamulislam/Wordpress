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
define('DB_NAME', 'wordblog');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '&SYWc[;YTPm,F@=@aO2}-(n5sqc0z|7:=-o[sHcJQzuUF3+&$tVY>9?B1JI_eR?7');
define('SECURE_AUTH_KEY',  ',tv!~q/pGj!W/0@UC[GnUrEV(^AnGMRD6LW2^yIY*Rg@mIYOew>fW<SvRvO+s7l]');
define('LOGGED_IN_KEY',    '(b&1eRHz8tfVqC[shnHS,tNi0RuKy;`;/tv}.^e`~%<ZeMWWdI4{aYtJM<l<;676');
define('NONCE_KEY',        'pBS9i44E,m| `i:ys,enDdhnAm1Rr)aa(eec9{Cmz?)9UmwFEFFtNF ^%{hx:T@t');
define('AUTH_SALT',        'p5TZ@j0sIdg=`he:J66A*vGt.$<q/Q0t,B~qM;Gr<FAq<T=W=ocst%z<R8UTDX-.');
define('SECURE_AUTH_SALT', '-@R[CoEjP4%mmx7b?O}RSJ#Ak)=HNi]Ab>[^>+gL<SapVVui-ww:=n8oF~A#ttrr');
define('LOGGED_IN_SALT',   '!-Mv;so1Fv!c#d|qk0*{/0y8=[LtY4b|+7nb_Kzixcw3{<[(VXmb/95J6Y(_{@vb');
define('NONCE_SALT',       'R7K-~cx`nL&c&G7P:<vk(T8p4R=59$Zr[;*dubsiY[XQd9]IGX9k1F4a{y@s&z@x');

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
