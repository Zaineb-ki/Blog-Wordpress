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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'WP)9YDI2R_VK5|wfgPaQ6KDhdlJOkW)}Syw7ZpT_~ub!?RS5NOq!N4U9;p-|Gjz-' );
define( 'SECURE_AUTH_KEY',  'VCu(Wu`y[7C?*!|i6z37Oj(e.MtvQ&I2]|/0xq,*fnk+=Hi*?R(F80_=vvIqXJ:l' );
define( 'LOGGED_IN_KEY',    '{2CyK7 f B.h`r@LRe#c2]KkIF<2Y%(fs/QLLS3wN~QgA0rSz?F9[Fg]sghLj*Qd' );
define( 'NONCE_KEY',        '31#u1NXX_l?~)qK&3Vtejo!+eJrn.HwnRFFe(c<h*cL$+d*ae4=wfuYLjj3k>&TP' );
define( 'AUTH_SALT',        'MZ|Z1gD~kkS+mj-S&0JRt0l4~)l iMneYSB`k#6{QN^xv~u<8$CW_##!5L|>]:]=' );
define( 'SECURE_AUTH_SALT', 'DEZDpOizC*</@h9fl9AYtqcP5#2(<Arj [>+h5~f6UNh#F]bKmk#vz!,K5YJNt3%' );
define( 'LOGGED_IN_SALT',   '{,[<VOxkgyvp*u<N{,P1y{,,I+[O:)T^UG3c$<v,cmtHNZamz5T:V Dxtf6TLvQv' );
define( 'NONCE_SALT',       'M-%{w9RJ{C{rMv4qls7v7%iNxNYE!lcb;KD.~5I~kre>U10q.56:LD,0m<q63& g' );

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
