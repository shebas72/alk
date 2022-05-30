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
define( 'DB_NAME', 'alk' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '=/S_X5$dH5m,}DrqaEreY[Bk<S*@4*GUHMXr/(%:.p=w^T]|AGuXUo@9OfOeY=L,' );
define( 'SECURE_AUTH_KEY',  'V8kV&tdclOn[Icq2&`66585%-@0H[QI_>9|Ti|*-(vo[S$njRdHHG79_2n|rOkLi' );
define( 'LOGGED_IN_KEY',    '1Pyiw/fC9Ls8mKg7;~,G1?+*Y:::Q=tIT(<{,!3$Scgu>S$a.Lod}Y@mfF-{,%#I' );
define( 'NONCE_KEY',        'c{P0HJQGZ&o3trj>6X*eaq7+Y%ZxB$BV3JBFq]km^CE{X^=]JCc>nIRnAzF[X7lL' );
define( 'AUTH_SALT',        '3OJ$Hp$Y V@pf-3&0?U<v& vVO_/fBE+,=ik6)$*Rd9<f`&#G?3Ncnsp}}8:Lk;H' );
define( 'SECURE_AUTH_SALT', '<M4~(zV]tpR_NG}B^&)<abX.eX*+zy-14(Zn_GQJ8D?p*m,CID3pcYeMo7aD?g~s' );
define( 'LOGGED_IN_SALT',   'Na-122D2GR~Z)5R-F^|ET^*i#lit++QEZ$-ObW>@,GzKlnNQU[5OdZZ6DIn;r;rK' );
define( 'NONCE_SALT',       'p6}ir06;5|)jg(]YZ_vg-WFQIMu{r[,:FdP#n*f{Sjx%S`N]_Eb/I=$(qq&g&mjW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'alk_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
