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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'm{*+E>58os;K Ip6{Pz3X[n.Q*+hY{ik|},0kXSJ8T !Nymd K.-JE*,Pu%tj?Tt' );
define( 'SECURE_AUTH_KEY',  '1+:A7q`[d,;??x=}hd<;*IyzNCdUV:Ash{g?I|ANX/BsOGt)QsYT9[lR2$nvUe=g' );
define( 'LOGGED_IN_KEY',    'F[W5mhOD?`<{qD`Mdw!v5`]hLG92*R`V{5><DlRHOruC,W5c/Z%%.A9pjPy6&_w^' );
define( 'NONCE_KEY',        '=n]N82mZD%X6*j=e*!08dYP?5tFM?NY-u15?1Cw)P)7Mm1[0hN],1;Le z(s/F9S' );
define( 'AUTH_SALT',        'cER%78$EgApxd7JY9LJm` C~w+]C^i!+zV}1v9pn1}4MduB;~6[9qDPy0cpPUZ=?' );
define( 'SECURE_AUTH_SALT', 'hgzGC_l/[[*kUAqZcGn3/R?kcR.d rX7b)OJ*Q(k0)UsASs`Lt6<j2VH2a}Sk&w|' );
define( 'LOGGED_IN_SALT',   '6|.Fzxl;ynj]2u|53 Vhd^PV; _+2U0-gbN_bviB_1[hjgP$|F~i^=:r2>lKmTG-' );
define( 'NONCE_SALT',       ']=|-|x>[xaav`5]ggV7gR#jiqlEfV<(Q}6%Dbnm yG)kkSjIH1+ZDxzZz{~VgK~}' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
