<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_41317754_wp165' );

/** Database username */
define( 'DB_USER', '41317754_1' );

/** Database password */
define( 'DB_PASSWORD', '!O]5P34pvS' );

/** Database hostname */
define( 'DB_HOST', 'sql204.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'byqbzi3ldncqtbknrmbxttqy6d8qtngnfj0nqul46t1aiuqleehoikxfwxstwwcl' );
define( 'SECURE_AUTH_KEY',  'nmty3inuaiox2wclyeglnufnmh1jc0dy3ugaytipmnu93zrldr3ds2qe3gjihupx' );
define( 'LOGGED_IN_KEY',    'lcmc39sgnjmmrwipx04ogqn0vyngnqyownpia41rq7scshd2nwu6d0yj58wyo21b' );
define( 'NONCE_KEY',        '9k1585tmaukgdwq9xbiiomeis6pksgesk9nmn2aqvoh2omxmiedwmxjren5i1fkr' );
define( 'AUTH_SALT',        '3uhjhq5pxvhv28qxumriqysiutrgk0elprolopvhoyq8q6ph9ekirbrfgtkc9fnn' );
define( 'SECURE_AUTH_SALT', 'vh5wjf2lt7ozjxgpwz5brjhuzq47juocpgjuukhn7cfzefeyvq9l9n9s93xt1vst' );
define( 'LOGGED_IN_SALT',   'yqohay6tclv4q1axizplawzrcakh2w2gly39pmymx3bieubll7bgbw2r5odoxi6h' );
define( 'NONCE_SALT',       'elri35pjxzlupojqexig6gjak3bwmlfelzys1vamfws9oth9emxoqohwibtteckd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpge_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
