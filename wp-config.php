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
define( 'DB_NAME', 'imagecanvas' );

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
define( 'AUTH_KEY',         '=uBJ6Td7I}~mv^<ob}2]+tt;PT0Ik$atd5]JBy{_[ogLniM%6Jx^d`/m^)fdOJ p' );
define( 'SECURE_AUTH_KEY',  'WVvp-;/eQJn$xI&<%%VeD6->q!@!jPl*D$Gr&(aN47DeB;X+Z4dQIDN)5Z9E[`,K' );
define( 'LOGGED_IN_KEY',    '7|Z1.vyOhrTX2/t[ghLy(<BBP,3Jj&J)F:#j8}>8=/#/R-%xC)EA8)m=C~,D!Gd*' );
define( 'NONCE_KEY',        '/E; ltJM/|hnOxC%#]3-g$/K;]I!pVHH`5DQ5O+P D;8;KsEu{Sl3AkVYCR||B60' );
define( 'AUTH_SALT',        'ccPdOhe<=Ay|lyb}T45V2Z#zkBi [vvf!}@?rc2i_r9ULJ#;*GI]HzyN037<rxpa' );
define( 'SECURE_AUTH_SALT', '49;hXg(s7$iPd5D2]vC5]uQ$>$n<`KZ03axO.i5`B]XADx47::fAB{=k$$q(Dln>' );
define( 'LOGGED_IN_SALT',   'f]; pn:;y%Ryv/[W-:JW`15EZ9P5-G-w%y-1RsD>7 Y}[^G3GOq92G K|Sx.*{w+' );
define( 'NONCE_SALT',       ',KZ9O<Q);8Cg@zo<S![g}O@|dO B.9QaQ8@i9 `JV#*%IQL_QXeq#~6Jt{=@I;I>' );

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
