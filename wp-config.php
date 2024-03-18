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
define( 'DB_NAME', 'krbl_rice' );

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
define( 'AUTH_KEY',         '](RK/aVwf-m0(w=d?{<9UbxhqTC*QNztPQA>{ke1%pGqy4b[zo4frRY$pjoTe2@N' );
define( 'SECURE_AUTH_KEY',  'LzGU:@&LO_]<{f7=7?%Y:dS!nI~onL<Ixy{zRG7M=9NI%i.~`C}#ELIJiGMTov]*' );
define( 'LOGGED_IN_KEY',    'N16FBrAR=BL=fMD%>fPu,UrH:6oBrgbQ+;rNY~coj)T*Hl.>$?@5rO6.ph:^Zp9Z' );
define( 'NONCE_KEY',        ')-f`+Q6U@6bZA680^S=*_j{$B2+MiHq%L>Hc^7p7I(f2LbO>IKf&2mtD04%iHJ@|' );
define( 'AUTH_SALT',        '+gJ%*xLH2|/Sl9VXp2MH9H2E.M0;H<VyDMoD>Y1ce)K~+q@*}J[Pd6L$2pBHd?C=' );
define( 'SECURE_AUTH_SALT', 'j*z{$2@}1A[,4^gEB`Olg;R2q$R.3mHd+w]4F6yZ!%j!~yZ-I3V@sSi?0pz5}qUr' );
define( 'LOGGED_IN_SALT',   'az0lYk2#]97qUAO)O&TpHD)GG.vy]_8P60_5NK+=%!||L|r1 (B;N{dw@8aLIEb1' );
define( 'NONCE_SALT',       '[k*(NA$d).YmM]czLtQT1U$pUk[X3.BBHY3po?h@5P>+88)g4/G.9k`hZ9eCQA<o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'krbl_';

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
