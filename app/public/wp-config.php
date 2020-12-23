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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pXZmS4qFHQ3qc2IOXEsa5IyxOR50RaWfl62GzT2gt4WXjsyyJNwuiggL8sJ7Z96//UQc3RNsASIjK/jr1nX9fg==');
define('SECURE_AUTH_KEY',  'SONuiplCcRk6Vs3s2+MewRRonj4U3h8MeS1+CqFVTZ2sWhh8gBmBm/W5I+3wXMYLVwkYs5vYQN6lSoWGNo2sOQ==');
define('LOGGED_IN_KEY',    'x/v2oW3OIHCzH945sXJjnib2iUZcpQMftYXnSSavOGMSdNe4My1y6fhQka0lrR66PyPZR8jCbdaubBaeEGILtQ==');
define('NONCE_KEY',        'CkKh8CT6htAh2yZZLr9CwHDoYLgJVRyQ4FKZEspVPNZFXIitsH7Bf56ZNh/KU1o15ec0mkeOSFIJB5xVwUVHRg==');
define('AUTH_SALT',        'AoMB9hOjVaSivW6UBXPGKxsnb6Kdgzqnn0dfts0UdQjYl1NN+SOj6aAU4xSlKsu7DGa49RaPYrFxqJbfSqciqA==');
define('SECURE_AUTH_SALT', 'Hu19yc/61Ho5vlIsmMypzpjToUwcJ3Y+IXP1cKxxDJtLzivPQPafA0BLcUFPU81QLSsr5+4JxXdtxSlwkooY9A==');
define('LOGGED_IN_SALT',   'RFrQQyGH2g9Xg3fc60ylazcBRjvzMK3KGeMs6ot5h7+1xtjvM3Km5a7fpR0yxThVQ7dEAZRRdQrumoMDFmOrag==');
define('NONCE_SALT',       '9NRGEJMOqaMQWutprL736hcmqQt+g5gSW31yWbQtyYt55QqeKTplamf9BpuAwVAZMy29qebvcgujc9Vw2IHv6A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
