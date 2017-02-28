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
define('DB_NAME', 'akha60b4_blog');

/** MySQL database username */
define('DB_USER', 'akha60b4_blog');

/** MySQL database password */
define('DB_PASSWORD', '-PR;*I9CNAPS');

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
define('AUTH_KEY',         '{c)vTacCWVhj%bY;Q|35Zwp7P&K,4|=Os@Bzpdr@_wRQHx{82sBV#.wS_VP c!fn');
define('SECURE_AUTH_KEY',  '9,EZWzPCuCoDY1)^0])0V!Rx7p&=]Y9a+]~RwpT4=l.<cGtX!J$t[R~GPut-Z|QK');
define('LOGGED_IN_KEY',    'D)!&)cFYP3}`^RV)QO4BkHXCzOz~Mc!2g-_lP+z`QcedC2VBslHw|Npcc&L9_%Pz');
define('NONCE_KEY',        '!q`Jcm@m0ASq9eK4}FFW6re`[0><0_6[o<_g(C53,,5>CHz>k2l~$9ZV0?usPr.*');
define('AUTH_SALT',        '2g` ZVVVCr3eeH|KImM7/{W;RH1Tv0A-gbg-/&f-M~|.YkT)z!oxz]eUMP+6[21n');
define('SECURE_AUTH_SALT', 'nc-jK>[6Fd/_glJr{2q0$5xnv8LRkYF^4pt;{38>eDrE_dicBSk.Pf|0qZ)XDF)_');
define('LOGGED_IN_SALT',   'Z%EOY4+:?JfLERxm9piBoqN&yXFY4&XS6I+Ami&kTr:rv@;fOssysS.IKTr9u+a?');
define('NONCE_SALT',       'V{B,7|7&4Z63F{ a-8$Wb9L4YDM#dD:tSVA0-7iT1}cMOu33lk%;x;/roIkasY-r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ascb_';

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
