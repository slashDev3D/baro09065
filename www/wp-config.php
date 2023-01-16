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
define( 'DB_NAME', 'baro09065' );

/** MySQL database username */
define( 'DB_USER', 'baro09065' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qkfh48951@' );

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
define( 'AUTH_KEY',         '_Wj,rx$fbn$l<9K/g>SI4Hp/D#BlE>;uLe[<gyJ#&~Z_UbPoSf^+M9UxM-0mN<.>' );
define( 'SECURE_AUTH_KEY',  'bI_h3iqn> V`ah]ddaG%v A{Bz9kPX(_a.b~k7J#aV0`yzzb(G@`B2TW^@P$7vp-' );
define( 'LOGGED_IN_KEY',    'kvmfQF]a9Noz++o7i^/!3DYM@Eks3&xL?v1~)i:Q}CR#?b#Ls:]sRP/V(U_s+_]Z' );
define( 'NONCE_KEY',        'I^6+(P<}/#5zz;$^;rvDEX%ln-BRq0oQ_p_nXCRNJ]OLRCjm+7>Z5@mL4y(5{x$T' );
define( 'AUTH_SALT',        '{CA5pozu8r$4(cR/@N}NX)T thT1Md#0stT(vPNc{lv[XBTUjS,J]gUhnA>N+y!=' );
define( 'SECURE_AUTH_SALT', 'zZlUtidN0Yu%;%xr$403Q@rDn#fXy>Nc.$-wV_cuJP== JbT|+&Zpw$M4I+~^K20' );
define( 'LOGGED_IN_SALT',   '#;zPo1pG=la=R);K#XCXtT<%}.n0tfOr=:%%/K8/55|zVdEn<TVhb0d@+mf; dV*' );
define( 'NONCE_SALT',       '0ju[Qn;B[0!tat^Lx*Ya^&~m9c,PyWRV{eiee7_MFq:M)r)APHRo- x7vXW|8$z3' );

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
