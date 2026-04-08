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
define( 'DB_NAME', 'shopping' );

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
define( 'AUTH_KEY',         'CTfY?0|8n,c)@yV`lzDi+t{ZY_DO?UA?M)(d@|XBUit&Suw$E#F22,WON@YsfZb]' );
define( 'SECURE_AUTH_KEY',  'MC{@%U(#|Ly}nC`zA92_f8_vup+}_vnde2;=9vdFmlj-$>6#:Qali/Fnykc*!^-!' );
define( 'LOGGED_IN_KEY',    'Igew6{}&~y| ~<h(<aeKD=%.`W-ac.X*a$-+sl,g)kr1$+ik[z.g1q<+3D.SNxA%' );
define( 'NONCE_KEY',        '|,`t1)qwHf&OZ5;iF;6?~Uwz4 0 z&>Q -XqYbOjSnp6+?,_]9}Nri%(GXYw.fn3' );
define( 'AUTH_SALT',        'e&n;|l+w=pm)gO.pk:N/K !W`:B!54,Y&: WR-BGn<1$v94=k5wRvL3wMLNVy?-5' );
define( 'SECURE_AUTH_SALT', 'jo.WV5Od,rg~q?!eLscoXu>pY-vHk*-1T2`iM=^;&4JLwZP8{vRB0QD[x2&WeeRC' );
define( 'LOGGED_IN_SALT',   '.&FKk.>zvQ4AoS_G_hy8lyO%c[(xb}R]:3/W$0sd,u@E58>3ExS4yv5-bGGbwwC@' );
define( 'NONCE_SALT',       '^2J3|G-1g&6qc]j8KGb&D#urO0=HHi9sl+gUyv=<Yeo)/XX,_G=tOPSTEjh{)2C#' );

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
$table_prefix = 'sh_';

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
