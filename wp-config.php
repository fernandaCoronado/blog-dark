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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog-dark' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'af1dc30efee0cb61acd3f2d1a6f6c3a40c5e98559c779b3d' );

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
define( 'AUTH_KEY',         '4lK(}+bw5[fsPzdi}]a_yN<b(<47;C@=|O@+=ECha;_nE&oyg2L&+gV.Y,LB8Wt1' );
define( 'SECURE_AUTH_KEY',  'j?!6]09m#_q9#s^}MGNNe&TDb`WU[J=F*drfwgp9:w@QMZf)+6|,!!~)Fj|5XZgz' );
define( 'LOGGED_IN_KEY',    'iT6Nv3Gk#M,7>?CBO0c,BZbZ8>V&;Hw*aPm`Yc}Af6o4o+2w,MsIbBJ!AD#6/uvX' );
define( 'NONCE_KEY',        'P4oZmMzNwJ^b]r}9M;Bq,s@QXo([?W}],MOo&smy(FwY[CoFYwIWl.F9I?ol(G[i' );
define( 'AUTH_SALT',        'i83S{ABi&(s|}]!;Tx(l~I1A,T%^=&04|UsH^FdtL`0AT6&?.omCe^S(iCRI!1/7' );
define( 'SECURE_AUTH_SALT', 'Bo5WX. aW(w4n`SEbPbaPRuub%+GY:Dk&)z@u$krx~Q!RyE[TUX~j9$nRs&8?uX.' );
define( 'LOGGED_IN_SALT',   'cJ)UF/2JEj>baeoIf{@ba19dd~Q<~g5ZL6438$K|43s B98Y:u}}r!qFLobRgzVO' );
define( 'NONCE_SALT',       '-Wo5%ViLy$7 ) DmUj|^M/z1 _HfdK-2*&*6,ceK*d$H+|8*nUV>xpqhZaH7A=5Z' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
