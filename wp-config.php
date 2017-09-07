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

//Using environment variables for DB connection information

$connectstr_dbhost = 'localhost';
$connectstr_dbname = 'vardskapet';
$connectstr_dbusername = 'root';
$connectstr_dbpassword = 'root';
$wp_debug = true;


foreach ($_SERVER as $key => $value) {
    //echo $key . ' ' . $value . '<br>';
    if (strpos($key, "MYSQLCONNSTR_") !== 0) {
        continue;
    }
    else {
        $wp_debug = false;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $connectstr_dbname);

/** MySQL database username */
define('DB_USER', $connectstr_dbusername);

/** MySQL database password */
define('DB_PASSWORD', $connectstr_dbpassword);

/** MySQL hostname */
define('DB_HOST', $connectstr_dbhost);

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
define('AUTH_KEY',         ' mE!]qi9Od O<anNN[9!%y0iuGhr =)+e)2k~bpcL2j:H]SNlmzmJ}QjDw3Rk**a');
define('SECURE_AUTH_KEY',  '-^NNZEK[tnZ:;(`.]-wUm.{)K+~OvelAt1/Bny7Sg^gZ~y,TlERq!Q0f/Lzi|bFW');
define('LOGGED_IN_KEY',    '&P*]TN+gDIr*,85!m#JA>k,hjqViDU,4+FM%(gW0w+i@r+jK6H^S`VHXZxw|Zu4w');
define('NONCE_KEY',        '&6Yd }oJy@gaiZ+b Ob?^}!!yUXfAUd2D!w34hQ_q#81Pjga*V+i/fK+T}!rkJ97');
define('AUTH_SALT',        '<64N5DAW7C4P_vz5W$ebu<5<E{Mnf`B1dXPd=<O#/t4-d1xWQ+YxR{b|Pv_-^<9v');
define('SECURE_AUTH_SALT', '9FNEvLYVY^cu b5jrM;8s`is]HKq1A`xKgU9yse[IO7H9ToB<%&*q#%I7,Lk>Ab9');
define('LOGGED_IN_SALT',   '?niC0e8|gWua5oD,Fh.(jE|jTv@MM`b-M,kO@40auUI%V9n-O!G[{`PTo-Fv-<{/');
define('NONCE_SALT',       'dgyq`.bR)Rq(6gve|Om8~^qGcl~0$+/kP<&M_0Znp%;v6I2)EfiL&l?O3Wr<Kpgr');

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
define('WP_DEBUG', $wp_debug);

/* That's all, stop editing! Happy blogging. */

//Relative URLs for swapping across app service deployment slots 
define('WP_HOME', 'http://'. filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING));
define('WP_SITEURL', 'http://'. filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING));
define('WP_CONTENT_URL', '/wp-content');
define('DOMAIN_CURRENT_SITE', filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING));


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
