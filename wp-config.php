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
define( 'DB_NAME', 'kltn' );

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
define( 'AUTH_KEY',         'hd=hKEI+BA E<?Z~8:UJVqS)9&%6/UEjjRFWX2apdR@@tM*Q/HOtRj##;?#0;`!3' );
define( 'SECURE_AUTH_KEY',  '_W)TnQUM-A4x9eQPOM=;8{Dzp-ydkwfngqwdmY?(f?Ah!+s5Fikqi4u89El>gsl!' );
define( 'LOGGED_IN_KEY',    '38:.-?x$hp ~q+[n|2RKj L,d5-s+lU@1ET1g<o:I7}Z/^,-ic4zz,EvCJ-.I!eC' );
define( 'NONCE_KEY',        ',L2B(g0EfISu5a=_4$W)nc/GnAj39Tu.D$z_sQ3]W}Hrf[!=IZFKa:^apwX[;~xy' );
define( 'AUTH_SALT',        'gW@@ej<<WSaa0rE*nk.M#$3/K^zzKuOpuJPBMNXDa(p 1dchY[:2sdk%Ty_$W<59' );
define( 'SECURE_AUTH_SALT', '*B`}1](#B;d |[E6y`a$KKx,g8jI~N%sbB.sc;hJpia>1W]FGcW=]75pxv-U=A/h' );
define( 'LOGGED_IN_SALT',   'U/L&?w^t>D@@<`F4[`zcgggn^(8ph,ejHX!/!dnC (oe*:HKMt)d]+4C|m)>@>o$' );
define( 'NONCE_SALT',       'a/~PLwD;|z-=]ly]6z4IMt9x0{uu]DzW:t2#x/X>[:=W2@Pz>XX$*V4Mmn)VO9QF' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
