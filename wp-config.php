<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));
 
/** MySQL database username */
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
 
/** MySQL database password */
define('DB_PASSWORD', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST') . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT'));

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
define('AUTH_KEY',         'b]91)/M=u9HNqmy*l|[[VX|@Ob13?9eK6:__YutZwJh6!2iT;%hK+C3D*7}abN][');
define('SECURE_AUTH_KEY',  'jkJX5^!AAxYCIvJNilJD6g,R]*H#JWtW8x6U?6(-22/ixI_qF[(nAK.kQ,b{WGWU');
define('LOGGED_IN_KEY',    'vYU;lbi)&@Cz|9m,EoThojUUkYQ^jDEDs3xgI>Q+ UJB1@yy TpkI||4@(Xv-y^a');
define('NONCE_KEY',        '%RSo-~/`}NrIk1?NUy+BhE%7/+)34S3c-0O=}KB_j+!X%-UG4|Ip@lq.3[YU*kHc');
define('AUTH_SALT',        'Maf0vr$!;0+/(|,es#XZE@N8xx(#gnG1<mE?J12~PVgy?f|~oF]L:a[#lq|kK)0:');
define('SECURE_AUTH_SALT', '$^rOA[j8#_|E+|{+#^H}O7ezx/NY/$6F#u0/h6L$i/^s&VbMRQ2 y/7q-|kuFB5k');
define('LOGGED_IN_SALT',   '/(&.1Njn>+P8T<Z17%@b4hoUgb|:1&*|4_Z:S]!-|O,OaQw9$-0Rc}+HI{?o--lm');
define('NONCE_SALT',       '$RgpQ_B8mYyh/H|~C#WO8BVB;Gm%s@2nXUwQ%CJZ&3$?v+2~+Z}=$i;Yam`pZ9Rk');

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

define('FS_METHOD', 'direct');
