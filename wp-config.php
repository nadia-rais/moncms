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
define('DB_NAME', 'sabri-said_mon_cms');

/** MySQL database username */
define('DB_USER',       'moncms');

/** MySQL database password */
define('DB_PASSWORD',       'moncms12345');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',       'z#WY(RLYJHv)PasO3ELfvpE2(MX2aipN&bq0FX8@vs4(v^Qk@4MJF&Q7v%^hCRso');
define('SECURE_AUTH_KEY',       'C)!v7^yDamD#50F!G@Y(tKrz&7f0&JAcVfGFaJOKr5VfPuPCcn6Hmm!I04#McqZc');
define('LOGGED_IN_KEY',       '0SpTQ!ht32&r)DDXAF@PUbPj2IqOq@#5KzDfl(t0DA85nd6mdG!5l^#*A#SYu#@V');
define('NONCE_KEY',       '94Ql!@PIY^!%UVLGf538o^xgD3&WMEEbhLekAOK(YgLChRYuGKTYD*6W3&jjTHmc');
define('AUTH_SALT',       'jKzdDA!350sVc0tky#r#0%HEuIFUZcREd^7r%mlkTY0ZmFh@rpoaaQY6ro&Vw8YG');
define('SECURE_AUTH_SALT',       '1eqzivxB1PO7iG@E@Aadwmxzj0nPOuKBH&2O3*Q(y70tiQzJ@p!&iycR@v2vEHlF');
define('LOGGED_IN_SALT',       'H#VZe5BVkz^NWq86)P8KL!Fn&M8H8%vz6cg6ufebjxxNP8jg5T(dawKjN@N1jisk');
define('NONCE_SALT',       'Fm(w(HcqrKrej0smXq7BsWiyDHbG0QFii&EKLRLVJ%zPOm3JzNX*REg4#EqkYmoh');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');