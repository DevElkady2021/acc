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
define( 'DB_NAME', 'account' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'B/;eHJ)d;O2lTZacp!E<qCO_p1.tM)A,PO^(A!=H=@_l$~lDm%tt)PP([J<J?|vs' );
define( 'SECURE_AUTH_KEY',  'VP;&u{_* +JZ]&o:SdK5Ds3xUjy+P6 LT,Dg^rY6CVUw?):]%rR{1/*EV0g<xaR,' );
define( 'LOGGED_IN_KEY',    '96U{Q9j[oc0k(hq!~y?EP2bMZv7hlj8P)F>1jbk#YTA7U)WSNQ@*|=Aj[dA9K `r' );
define( 'NONCE_KEY',        'IR%u%AuHH|1Z`K+|9k;q&ZT1yZlmeLRx@^=F[G|~+=17-lHZ1j4g@GZl$ET16m%{' );
define( 'AUTH_SALT',        'p:f/:<1>yL:h61lk=d[PMro4DS#5s[YtJt7?BCIjhqK yB`dCrAQ5wc3**4eDGeQ' );
define( 'SECURE_AUTH_SALT', '=xajPkKD>u#/MaKpTkluLp]@|`skDhmq5 bA^Y0ZS[&r,Xjr6Tg,I0GS(aD)*DgY' );
define( 'LOGGED_IN_SALT',   '.K_D ~>QBEt*DQA>4>;#wHfH%>hg&qA-Uu$iW_M*e-`ivZ9;SVaq*]m>eH~8tIBe' );
define( 'NONCE_SALT',       'n/0xBHJM%!u7G#~]bTuOH!PYgibDNU;>S-6@UNMjncMQ[A.spbtjN.B%__uovo[F' );

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
