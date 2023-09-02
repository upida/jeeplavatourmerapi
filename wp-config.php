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
define( 'DB_NAME', 'jeeplavatour' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'salmakutercintah' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:13306' );

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
define( 'AUTH_KEY',         'M5k[..$u]}MXPQg8H #lvR#x:=w1/M;b)GTi[,7@Rjs~d1y|`N?xi 2_F,iy2,;W' );
define( 'SECURE_AUTH_KEY',  'M;lkl(pc~{&.vCGfnkLLt,i|Ry^,;&y&Y/>yrD)Yx,T+U/6}~{xzx[H;l=K!54E!' );
define( 'LOGGED_IN_KEY',    'uE! 9r@cYhc;nt^V*5A}C{9lnnF.HW$BI3}qUKIB1y|S0#TNg<QT2(VR-0PPUSr$' );
define( 'NONCE_KEY',        '3jbxg!b7D2;-mt:OJRM{.udMlwp)v1`1Fcj.v}>nKBUz/^:1V%uX}1U~<+,zJrNM' );
define( 'AUTH_SALT',        'o,Iub<0Z|^=Ss`o!rFzk }3+oWZoEuLW6)*D1N,1]sA7QxlDJgXMV,Wr9Q`&xs/%' );
define( 'SECURE_AUTH_SALT', 'Dz[Q@D|.1^t[{>O`+x_xp/$.m+eA7uAq`G6SlND%eg%s==nl+9xL~4K<ZNoIe/!Y' );
define( 'LOGGED_IN_SALT',   'imgM@hn}~gUF4! mm;/Z(vcLq*v>!GTST*FX23DL@A]LG^E_06Fb4Mt4!6KJ&:?*' );
define( 'NONCE_SALT',       'i&PwOo-5H^K~L_]oh K|y*-,<3?A&.5[c#F#%gc4:X@&#)72NjC@*(VTWi.[. (k' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

if ( ! defined( 'FS_METHOD' ) ) define( 'FS_METHOD', 'direct' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
