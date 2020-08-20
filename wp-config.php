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
define( 'DB_NAME', 'sustainablemealz' );

/** MySQL database username */
define( 'DB_USER', 'linhng1103' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Covk0594' );

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
define( 'AUTH_KEY',         'mChK=& =1Uk(qgMt}Hhb:&<cE}rH`7cH7@V2*qJ|mSK.<$/OpiSvTl0xBgp:VfCx' );
define( 'SECURE_AUTH_KEY',  'km^_Yqg-D>h&MxyXV*=-DYGOY]Lo`hHe!ls6h!&- NY>jkpfcvK}#YcHN?|;-eIz' );
define( 'LOGGED_IN_KEY',    '3lG4{NaUW<E6nV Y8FK%JXUrOC;Cvj%z+iGR$0y$-2e^A3gsC:xR0_=J^bl)7[y~' );
define( 'NONCE_KEY',        'q,ub|MKKLp>e?Amba)v%[BSC1cBB@YK~W=},2{a/A^M=%!Q-OdR^aMi H+3ovVL8' );
define( 'AUTH_SALT',        '02$<&oq_d-/kp`U>0.hz n#kU`?Cqs`MfA2fe|KQDJ#[mVm?95DMUWI3%vMZ&j!*' );
define( 'SECURE_AUTH_SALT', 'Ngk%&IixbX`leo]_7!KySTwJcD9QZNn*]nsHJ^6a_5N8sl6IW&!JjwCS 1|g.<-u' );
define( 'LOGGED_IN_SALT',   'yS@@,Ewc}&;=;jvE$vq5UdkG![a&qyD}>p8$=:gaKwi:!=6|y7+d{Rs-P(]9~wx3' );
define( 'NONCE_SALT',       'AN)4$Ko1B^u3@[UY#M[2ht(P#j=9<dS5Jds*TG6E!Cuc^+w%N6)KNZy$j!n)xV22' );

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
