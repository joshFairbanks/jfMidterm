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
define('DB_NAME', 'midtermDB');

/** MySQL database username */
define('DB_USER', 'jfairbanksNew');

/** MySQL database password */
define('DB_PASSWORD', 'Wde472gh');

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
define('AUTH_KEY',         '-#puxE43Q}[&F8ER};vp$8N rmq*?ZJ^MDe4x-Gi1)s}jJ-+`M{R0y@ru4ZXO==h');
define('SECURE_AUTH_KEY',  'zq*FFZ,d}z<,2Et*|1NVJ5lzO!tppnldqYj]uvY>UddnS;+DS^@7!a|eOCM{fHx3');
define('LOGGED_IN_KEY',    'F3)A):2B>YCrvf43N]][NdY20;B!78b7z0:!tly&@,y4=sY>wC,Zc|+H}# !9E<.');
define('NONCE_KEY',        'jlKs ZLoe+I;{jIyF;G$N|-,>XE3tESLz9VnU.38oDTE-?nn=h$.rqY$IFCw6!t%');
define('AUTH_SALT',        '6},Xfe7[kHUNv=X!?{Mg7H)QngLzN(};HK$OO8L3-/#x4vI[8K`sP0|O8>%[xnay');
define('SECURE_AUTH_SALT', 'Ls9j!3!Cq?PcF;Q+/g6YcAA?V^o.8Xhz!Z{BzE1;,~;:}r=(p.ADfqs.thwJ&~=z');
define('LOGGED_IN_SALT',   '6l} ]pJyRY}|:}X>1W?V[.67F;O<@rKU)$P}S>~}%)|-|2lJ-bY#O,dlaRpm8B%|');
define('NONCE_SALT',       '[w/>%k3fX>WLQwI)[f#w3pG6Fk,=##va@6,g=B>c>s.qn{6;V,htq@/$R$<1y~RO');

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
