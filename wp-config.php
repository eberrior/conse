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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'conse' );

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
define( 'AUTH_KEY',         'CRzgq/l~1DZIYPX~Wb)VDQusP7ql/VrNMV;pqB`Tp v%^)7*5eYOZ>u^n5r$eE{X' );
define( 'SECURE_AUTH_KEY',  'yU6zCGR`s9PDsR~oU&H[Fgj[XN%3Mr;q|p0IuXrtB|SQ3r&<(>usyR.`O1F+hm(+' );
define( 'LOGGED_IN_KEY',    '}AZDox-GE&G`WdTzhB#2.I@X./dyO8l( Ob78IR-tK:s.dihnR}Hp_Q](QYER)k.' );
define( 'NONCE_KEY',        'eD55IHV_#*Zmoq|q+/!} 4W7QLHJD9sXDe;Hn2>Tx8sG1Q*j#%K^g%!/QG7/cZ]J' );
define( 'AUTH_SALT',        'X?9%$vB7K|$APkbRc!`GvU[gBe-**V*oigQ)[{*Em}>*)=yfV+/WI,~J<)RXo.E&' );
define( 'SECURE_AUTH_SALT', '6>cx@gmrMHmD?+E>;dF?!e9U{q[.cLO,4(%qF(RX?V#Oso[0F>42p_@$ZuZpL(8h' );
define( 'LOGGED_IN_SALT',   '5d,`bZ!`8f$zFast!9l)]Dt`&i|xs3[@5j!}bT7nT,y 6%xSO[|JZS[R6A]?$:[d' );
define( 'NONCE_SALT',       ',fRDvO~D,)Pb,~#JXh;kb{,R vPEO0hrEbNt<}{YF+7j9>Ci@>z1$,;K?8W+Mau<' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
