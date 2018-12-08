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
define('DB_NAME', 'gogocode_blog12');

/** MySQL database username */
define('DB_USER', 'gogocode_blog12');

/** MySQL database password */
define('DB_PASSWORD', 'N7]z4S(W8p');

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
define('AUTH_KEY',         'mjmsb3wvckvlj6svh5rnufknfiwlsngztfkabggcw9gudvut2gley4lbk1t6mdnu');
define('SECURE_AUTH_KEY',  'yqjh6wigtpkuunmcbxr1goxvvgw7iud8ip7cnyr9adwidh0zqb5qtxewezo8vvhp');
define('LOGGED_IN_KEY',    'bpenuss7l4knjcywhdkigtiaxbz6euyp1g6ognncwiey9dkfvwbhjpnfbfiygchn');
define('NONCE_KEY',        'bgr0jkwrb9mhesvqfnymuzhwpcmezes4cnq24blyflbtfg5kaokfsw8xp5or9yn9');
define('AUTH_SALT',        'jiddyfvh8nisfjaxrl1namf4la54r8wnmpobqkzmhf23ckwwa3wmivswrdmil5oa');
define('SECURE_AUTH_SALT', 'nj52uueqtfqahrlrzdm8d2sqtg3pak5xxoueyshv1debeveyruvon0cjqpocj1bu');
define('LOGGED_IN_SALT',   '9hpkqt4v1twjfbiaan7gz68wpyvjrcymklpebw7ma8wnttaguz6ciulpijr79qbc');
define('NONCE_SALT',       'kmkgw5wmpipstgsz5rmrdnszuoc4s3lm0takuzptwkkr0kxxrmrcw3m2hapuey1c');

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
