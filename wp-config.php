<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plan_per_2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         's&}D 76W_ZE8yj{z!h (;?(tu;i+q|a:wqW@~3)@cO:^|*@I;$*qWonlcn(IB_i?' );
define( 'SECURE_AUTH_KEY',  '!7^/A79qqj(zkdC$eHZ7S~u,Ij55.qpPoi1oAzsMJEO1Q6W4 @t@#+cB38 IKV_U' );
define( 'LOGGED_IN_KEY',    't)]{-fCr5vYF7p|R@QP-_ndhDx[{jx(/Kz+FC^dHj5OY?aV1RH{xmc[EZe4$Ql%v' );
define( 'NONCE_KEY',        'ol{j|ebWINLB-Zi5^k|gg X&VF>sc0O9=0zl@p .b!7l}(N:5P4RU<dO#_C^HL4+' );
define( 'AUTH_SALT',        'a2yNGlo*Vm3^b-YC?1nCG1$7+*ZC,W}9z7a@ee2cCLwA[^Pc~FDqwAY3Cnk0#m!T' );
define( 'SECURE_AUTH_SALT', '3  fohpgUp$Uwj}/xGIk#SB PWVoozC8KH5bq9N1A>rE0gpMxKWjM2bN77yHhdT}' );
define( 'LOGGED_IN_SALT',   'PP4,&~#I.`s|h^M,chb0ty0@jhw;bmpNlxo]*5CwFP>-n)?=e?CTlPQZa4DZLn%g' );
define( 'NONCE_SALT',       '<B}D#F,C872[;YaRCtf!G! RG5>oo1^h)LjE6lX#G!JD,IR6;*ehzvUD&AMc_L#~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

