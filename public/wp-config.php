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
define('AUTH_KEY',         'A/yjAlXkHQ+sZALrygEZJyJhvMGtuhyyUjX3Ejy5LozNGCwIBzwEvkQoFShIqnkIHAL3wwGM+xdNMFvmDqXLKA==');
define('SECURE_AUTH_KEY',  '7jEL6HmfsGhDpCOpHlOpwipL/465m58yuV/MPHQRJ6/vkUys5Q2lFI2nogSJKkbaGFApTl58cI5H1BFMFmzByA==');
define('LOGGED_IN_KEY',    'vApIJwiBj9I53SLnUg+BzCmti36HpQkrWCk1v4PVl0nNzPB2hDUE9wEPqhOIsd7Zx21UaPkCSHMeFRGaFx/lbA==');
define('NONCE_KEY',        'Owh+R7/hQDejf+llKfCpUxKWwMKULv6PolMqJaPQk/6u2Zdq6FgDED/uPT+U6K9tac1d64aSw7pwISoaaBu7jQ==');
define('AUTH_SALT',        'FUrtiB/mnAoqVOuwc1he09tuOKMRD996WeDxn2dLr9Rv5UuinkkSTzwP/SdS4FePxwK82/Xz70gE8uGH1h0DVA==');
define('SECURE_AUTH_SALT', 'dNesAaKN0M/XfturID56M/rmvhhyiSxf1/zgvpmtyUp6a+/RIwg+8RsayLRIZ+hOB4ltnV7ihg8hVHCyYdA0Iw==');
define('LOGGED_IN_SALT',   'sUeFg/kE4dg4ukrGUk99oN1+4rXOP1jzTaWAQcTb/M+nLPzFypjx668vJfEkaKAsAl/vhu9aA7X1S4BNmLvgjQ==');
define('NONCE_SALT',       'mGop9XPIqp4alSRJBOfg2YSkgvMZV0AmgIBbfRAz+mEWHhNZFhOws+SDkqjAkOjH5vcEWg3+yS0xA5jRsS+BvA==');

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
