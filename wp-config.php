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
define( 'DB_NAME', 'florecilla2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3305' );

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
define( 'AUTH_KEY',         'Y^,<}eB/fHYHhV7?g`r: x>?*ID5Oh!/ZW;pgrKNM%-[}DZpzrd8$v5*3w>M4E8I' );
define( 'SECURE_AUTH_KEY',  't!R9Covld2>Vj+zsEA`@mv?V)B_/evpqQ=U/;|K$,)xvTU5qAv@ G_+&F?l~[mV]' );
define( 'LOGGED_IN_KEY',    'z_.>KPsPmh-Bf%Pm{S96xYkDt_BBDKRTeYbHa5{FDhAd%L?8:7-iPM:J36K%nm_(' );
define( 'NONCE_KEY',        '3?i.[Y(:zp$G.QZx*Dl9p:n(VJ`AOj?QY:KUP+.@{FmpW0iw<8eXd!_izjeZud0Y' );
define( 'AUTH_SALT',        'lby[?!%5iw{[_-DGY@;8##A6rC(CD3P[fQlmT96Lu7jyciHQa4#%ZJL%I|w)6t-y' );
define( 'SECURE_AUTH_SALT', 'SUQr,TyVbm9g8:u6;_$-eP KZ~ 0kUJ`n.wyQ}8@NU5Z$shOhqYd2)zL5Yq_OjhG' );
define( 'LOGGED_IN_SALT',   'YBuEu53ZHi+!P.4D0Tqs=?0FwIp[ffc7~5cNk/$pV&8AbT68>X2y&&:~NNca_d<J' );
define( 'NONCE_SALT',       '_{qa[qK;8I<;tOMi}!t9JR(YhsqxHv:A5<B-P~LE`z&E4L[iP8q&nah,Ujf%2Vfj' );

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
