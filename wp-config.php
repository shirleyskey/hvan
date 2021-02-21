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
define( 'DB_NAME', 'hvan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}H({>`H@h<%]Z+dyRpo(nt1ZYxX?+pU;o(?AXKAWNBwQ)To<*@,}4!,]uVLX1fmu' );
define( 'SECURE_AUTH_KEY',  'KpCBfO6&_A}up2$NY/kLRl:iXQ/d.|Dys#uAy_>%nTR-U%FaR[q`:IK|9Ar?Fe(B' );
define( 'LOGGED_IN_KEY',    'cCz^Zep=H<@@c |553,Ns],?dm>|lR,Asf(6r$X-y=q0z$CbN/+JWjAttL)R2z23' );
define( 'NONCE_KEY',        'i%*Z>Xb74[nuUB`?qCU;-8]fOVS0YkkdE@_!gMi<;-I_NGsCt;{=][SLY+?t$GQ_' );
define( 'AUTH_SALT',        'Z2uaN|d|,g8SAu+9`3@e e[k^ :lk{lzVH2IHpnRr%li.=%nD^0m$Gcv:-^U;%3!' );
define( 'SECURE_AUTH_SALT', 'xP6n/)Na2Rj+Do+-,oJ_A/!RS=(:=-l)b&N!v s}u)86yQOdV|PB0Q+##4+I+aFQ' );
define( 'LOGGED_IN_SALT',   'Kq?fJC$5L>K4%%k%(Qr]D0k^UbwG?y`<f.sf#_cqj4:}uHBWCAVpz6:f9(c`I-Bt' );
define( 'NONCE_SALT',       '}gyv^pF|S:]+H4,d<KXVWT_18_qyrNKoH=!zN#+P<=LtGR.]^mo^m$eV[[jKQ$le' );

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
