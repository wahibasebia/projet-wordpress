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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'sebia' );

/** Database password */
define( 'DB_PASSWORD', 'Najiba88' );

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
define( 'AUTH_KEY',         'F`=Gy|$2()*ySXiLdlD5D2eb(B.I#e6Ple*?L70{S()n>mdTz^k0,4BX:x ^,;S;' );
define( 'SECURE_AUTH_KEY',  '*F..(K1p:kqO(~skbA:`n,o9~N[csb9)r_48*(0o}g>7`Wfa!tX,D>51Ouy;$9m3' );
define( 'LOGGED_IN_KEY',    'vEZtd{nqKU +:l,5xB6Y}cnsl|#ak}P.Fm-&!.Mm{3a~A}a0bvY#Iq8BRcM{+q|d' );
define( 'NONCE_KEY',        '|(#QMop`c6@UDp8$C/k67 f}J&.:>xYqSmH!JD6G|&kCiTN}ntt9yRVLy@*, AQY' );
define( 'AUTH_SALT',        'v5>F^m$^*a:H%nNmeQyC:/ 3eg#gAfM!fn@2{50ih=&<!_nN+)Kh3r*z~hP EU_q' );
define( 'SECURE_AUTH_SALT', '~f}vwq<*F)M3SO%ifN-dlp8Bt;jAky/fSyA[vTp/U+@4 `[e#cHLg);I.43Kja7k' );
define( 'LOGGED_IN_SALT',   'ovs$e)WqZ5?vyHJIN,j[^J|7pq%.v[M$C&83<cU?NI}nb]|{8[a`274j,rs8<56Y' );
define( 'NONCE_SALT',       'Y9r)SE4%NFX;Kvg3^vr(j#jHk:<R&X#n1ln?s.U5U)L1j2UzXZ%sIQ/8#S`{r>5G' );

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
