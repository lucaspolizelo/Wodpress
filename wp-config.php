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
define( 'DB_NAME', 'polizelo' );

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
define( 'AUTH_KEY',         'X}tEa]Y`ZR^gL*bdm9H*mGcSi&8NP*M/!d@c1+HPMJ00yOP1-_k@YgP}5(Sb?Y4q' );
define( 'SECURE_AUTH_KEY',  'PpdczdN;No_gWEBre6Xq4jyTQb.?~ngPk=^&Z##p}qimID;qLh&:HtQ__|)ole?x' );
define( 'LOGGED_IN_KEY',    '(Nw/0/jTr:w6av<?^na]. V9K7}3P/ln]tuG<o#){O# azKS7yw2WZjZ.1#[qt4v' );
define( 'NONCE_KEY',        'JF]aWFi4Y}Lp|>tIZLnF2:,[|k99?9@)d$TFSB1s|1Rj74(bZrN,y~?X+IURq4 s' );
define( 'AUTH_SALT',        'kWbHq2JQ4P[F~(3Rz*ixHrVH(AXdbSwt_o3wKJcAuy[R[B:a`-XeGy9yfwE-J#ZK' );
define( 'SECURE_AUTH_SALT', 'T._,+:3+0w/C}|Q2SIQkHok;Y?u[i%)8,X8tCpYP+X@@KUva?c<)T&ge}@>Hma$.' );
define( 'LOGGED_IN_SALT',   'l9%S.SuQ(0Hbu-ml>q#nn*Irqg-(@mRDc5W!97[M]v{h]}V_-hW =JXirM$rZ!#l' );
define( 'NONCE_SALT',       'p@Go,vT;YZbE(pp.)QF<[nwS.3mb6]Kdx_QJb*^JATrwr?iDRC[mj|eo5z4cA/na' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'po_';

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
