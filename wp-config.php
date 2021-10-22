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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itecra' );

/** MySQL database username */
define( 'DB_USER', 'chimpancedigital' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Chimp951#$' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oKgjF^/>>aV #)d|tL;:mvO!0/qaZcld4N!ema{y,p8Kd8yHf*_54{vgvg@1RyUs' );
define( 'SECURE_AUTH_KEY',  'lg]gla@z@ i)MoeIgKt)KWeNQ}1%2!cJzzqQ:(S:L<ul>WOF%~]k;|!>do]m>rU1' );
define( 'LOGGED_IN_KEY',    '4lqk:(Gb5%HhWtO],5V|zy%waMWSY?j.R4E@gM<0(f5$`C4~oOj,mvs!E) [p`nM' );
define( 'NONCE_KEY',        ']!WHEHM1FdTyMHji4sVM}^VP{rO3,~O~$P#gJ#*!!/F]JDW`/0IL<cMHU/yl2tV ' );
define( 'AUTH_SALT',        '=u0EA+kYv&#Ke~_ngV<GQ%iY211IP#$`2%.NR|?29*M,pqyz~?%aS3GB#B*y:{(j' );
define( 'SECURE_AUTH_SALT', 'us?In7^g<Z4g<2y?&D( ~-QB8cAE8rXain3AX01t!:*LBwFZ5g$0Ub_/|qBeSf`]' );
define( 'LOGGED_IN_SALT',   '*]YTam;-)M&))H%TvR(7&Eq$rinHCf`pk^<*h<9iD<ftHl |ik!edv&_|hH?lzml' );
define( 'NONCE_SALT',       'Z`lM#~<T3}p$7?#kars!h11zXD9>=7-Ckgz5B `>Kcvh*JlP}VqYG-_hAVY`1oFS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
