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
define('DB_NAME', 'uvpnlsgr_wp638');

/** MySQL database username */
define('DB_USER', 'uvpnlsgr_wp638');

/** MySQL database password */
define('DB_PASSWORD', 'PD6S0.4rK)');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'mhk7wrojgq9ljpotfo9nv24vff1lz743rpnsf6q19wrlhcxzrlamrfoixjwtgomj');
define('SECURE_AUTH_KEY',  'gqp2f352i5wifstf6huievxlngkis0je2bqxxapab67uv1wiwlprnkoqcfsc92z2');
define('LOGGED_IN_KEY',    'odvj1dv8m73pirbgtxg5gv9ed47tirqc8ctpjuerx2xfvoz0k6tbz2itlqedbopp');
define('NONCE_KEY',        'wzs9nosl1lrvqhgilsoxsh2gffunlbxmjeao28pp7yoesllfii4m5oya9skkpxso');
define('AUTH_SALT',        'qooxt42r4mqcflg57bthmuylp7ypg1vhpiddbv8kbdsqysrkvizg3y1ag4u8yosg');
define('SECURE_AUTH_SALT', 'zlnr1xkdbm3kellj1n4ck6pqf2gv7uyrdxxmzdbml5kw64cnxibgrlczcsiqh9ao');
define('LOGGED_IN_SALT',   'xkmcces1h3wlkhm55r050ovhqjcmjiemkzmu2gi9bkhya7ln6twcmks0moljk1jc');
define('NONCE_SALT',       '3uyupeyzccl7urjjeexwipg2fp32ebsop9g0mp538ktw1qtqzlwtwis2bhljo18r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpj0_';

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

/* Managed Changes to the Content Director */

define('WP_CONTENT_DIR', dirname(__FILE__) . '/_app/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/_app/content');

define('WPMU_PLUGIN_DIR', dirname(__FILE__) . '/_app/content/req');
define('WPMU_PLUGIN_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/_app/content/req');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
