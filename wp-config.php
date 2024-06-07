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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '?>!:IQ=yu5?hBDifM9)XrEEoF{pfZ8/:ckFsN<ryE,_L=v{uN{8n<<_ >~;p/2`!' );
define( 'SECURE_AUTH_KEY',   '^U;(vP6;fUzG!@N2b93ckYVxZ_iDZf-[dU9?1.JD1%,=<=EZRp:t0}W$`kN(`>;P' );
define( 'LOGGED_IN_KEY',     '_Uef|)?0,b%OlyQIMzSiFoV`q&Rw?kqb<fTo-&QEi<` YtU%H;)p`M0yo*tZ&`JL' );
define( 'NONCE_KEY',         'H9]+23meE+In} ?j4i{(`jDf(Q}W=*l*?18$&RAJ|m9$W }{B|dlxj]}E#[GQCy$' );
define( 'AUTH_SALT',         'NWRI8)97<`K/e-*[cM|7@U/D5- DXmsS~p~x^@3eyPZt?=.oD+,4U7%>hMpYFAxU' );
define( 'SECURE_AUTH_SALT',  '#ws+Z}/wbwo`vD3sy;?`f9F4*( {o1Rj56PIA.|p75!w%>D1)TVIa#(s+V%-VGHX' );
define( 'LOGGED_IN_SALT',    '= XtR:k??zx.G+h848t/3v!Lt(CK%=@6lnM(z5l*eKFoDC,}VDc<?q[QWh]|e-Ji' );
define( 'NONCE_SALT',        'sqp+#z;20!~C}L9S4JF_zX=joQV61Z3spD8J(BYjk8q8>Ip`+~r7H(T(8ekZzL<n' );
define( 'WP_CACHE_KEY_SALT', '!y/^u1(za/T<3k{Ea(:9qnE< OK7_ 54o~SWiD*S|nMVnTB$CG$w_(rR=l4T2QRZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
