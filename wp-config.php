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
define( 'DB_NAME', 'testwordpress_db2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-{WPUf)[tia-$bYH_l3~.4?E[d`u.P;~.<Q^d6NEMP|9ce?FUKa^-Yp]S%y|Ovi`' );
define( 'SECURE_AUTH_KEY',  'F_#C-f~g(b~s8,ruvHp+x+P*~XV{&F_:!&g*/Yyh3!R:L~)=)<}W>ckv@cPsJ:,;' );
define( 'LOGGED_IN_KEY',    'w:d1l0&(!B[|%lYOje[rP@,Vg!TX(7TUz<fva|^`|t2Wc`g0A*v@ H _aQ/Cq}Cb' );
define( 'NONCE_KEY',        'z1]Gce&{poY`?vKofa1A?ox FzYx`X9/6`et4xh!R+Z<V:OfzMdJP9zV}|%70>lP' );
define( 'AUTH_SALT',        'eqE$gO=qMZIoNMvOpWLJZk^uCPg!T7/9!^J7-=?WL!(gLmWekpH<Q#j<2$!2LjC)' );
define( 'SECURE_AUTH_SALT', 'v4r>Fhd8+pf4{id.IUC9 p,FmN}IFUj0VoD9^:|7Og;Zo8H@tpo1NMz.KfjRT>)S' );
define( 'LOGGED_IN_SALT',   'wnDT1QDhU49P%rvem(3E0vfP-WV7Mvs[o[*t^Cd`UA$2sVGt8+].z2el(-{A(>[0' );
define( 'NONCE_SALT',       'ZFVrwVLt?U7={CMo!0)DvT^5n[UQt_UzA6pqC4I[F#@e!6v57%6R|C@t:gWbaML)' );

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
