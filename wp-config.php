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
define( 'DB_NAME', 'site-summer1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '^x@d^iJ=AZ23U}0r/$Y/]qAAfY8.Hj,L>if@0390(AxUx.*L;`KMF^,-|T++>S-c' );
define( 'SECURE_AUTH_KEY',  'SpudF,sdtUok$vVS:um9GuvB~su}HD.1_+VzZc:M< IV`}kqaC^A,gOJEFS(st0h' );
define( 'LOGGED_IN_KEY',    'uFVz/E&&gf^OdMkPI$~*tj*&y49-Vm{[s+i[F?zHFa%FZ;djBqjSC_[irqp$W;{J' );
define( 'NONCE_KEY',        '<$LVTy!BW O.f1`po6_ytDb).]Ey?&;+WN@>8Yps0-3EI5x>L8S7hBUarBfG4|jU' );
define( 'AUTH_SALT',        '+@:E3FK!jK~K,Jjk.|.R),.}V$%t_?0ZSx8g(_=[4iJpR2~+x#[M)_Su.k1z LUD' );
define( 'SECURE_AUTH_SALT', 'M8k@hI*r2$n.K@N]jNJ4?f-08@MbRu].d:mz);?;MVkuCN@>p1R-EC0)qtCpN3,C' );
define( 'LOGGED_IN_SALT',   '$2A3Y~1>8)ZHT(+]YX1o|)KGEiP>/5Q-u}V%YQ!-/G~VQQ;BRV/lhKc(V6&}IGg&' );
define( 'NONCE_SALT',       'L&vE<#2~ tl7i-V$Rgv}fbcE(3mT~rv5]gsMt}#RE*Uf{KOkH;OG@;Z~#O1ozscd' );

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
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';