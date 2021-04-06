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
define( 'DB_NAME', 'forexdata' );

/** MySQL database username */
define( 'DB_USER', 'forexuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'forexuser78' );

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
define( 'AUTH_KEY',         '#wIClDG}y</<@H%;WjJ.,[mBzC)qz4)6Zf1q&$O~=`vTBbvDaO6k|4f4+}=Y3T%{' );
define( 'SECURE_AUTH_KEY',  '>B*z_-;6,}!x3,;:p7KV*n4/;h^ ZRk8 PaL!IJ7e4q^{Uj 5Qh>G6~}4XBCbBN-' );
define( 'LOGGED_IN_KEY',    'D0/eU_-S#K*E?.yAl.$%W+47v:3yyhZoDz7$s##lW}?u-sGe4/Qd?DEMmVKK>TIP' );
define( 'NONCE_KEY',        '@+a}xc3$2ueB+Utby/23Ky:Vj#V_3WcheKP;!FAlw9(|0w.#+mx*[diAJ>)D^o7I' );
define( 'AUTH_SALT',        ':WLz5.l?o=mtxFrxJ=YX AP_.zx4qw|:D`u 78rf@RBv>#TwXtqkE%(_FxcyDe*j' );
define( 'SECURE_AUTH_SALT', 'vO-Vk?:[<w3.V}<=OihQsz(xB>9^M~}NI8_h/pXw&eoCB>g}73)6|7 yEpDU29X-' );
define( 'LOGGED_IN_SALT',   'jJ^$RCEHcv~a&:>l;FR!LK>~< .b<ml#}*d(;i[0merUgiUiXBsRXLrSww7/c-BE' );
define( 'NONCE_SALT',       '6?7XS>HLmxDX!0M0Tpqs5Hn.MGP:K@c 6>1<lWa6S<c|P1.uk!#wmif(v.bQ%gu_' );

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
