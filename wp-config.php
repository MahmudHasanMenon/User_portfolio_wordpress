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
define( 'DB_NAME', 'users_portfolio' );

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
define( 'AUTH_KEY',         'I;/0;]S_a3p_kqqIp+Pn<a#fX|$qFxm0,i#`0K!:BbgSAG1}89[mS:ebcJ!mIA7<' );
define( 'SECURE_AUTH_KEY',  '6B:R<[I]:1:? Xd%Ao5d7rN,GaK14cv}=!,-=6X4-H`*6JvdT5[][XrL7@Qy/;^:' );
define( 'LOGGED_IN_KEY',    '^(*H_1*8?+*J!obdtUM.wu?dgsrnCG=dJ0$3sHb[r%;Aj:L4X09{}Pb0u;.j3{Uk' );
define( 'NONCE_KEY',        'UG fn-G}i<mU3+S?<<Q?]#k(%e_Bc!(+rNg_?N/B$AWA0&)=  ROdm6/[tf|d~-(' );
define( 'AUTH_SALT',        'Rz4l!y]=%7cH:J7D4pxt__bTN |UaOo}8Z YOT0yB$y;:]J19G(U+6u&Mvy%YS8q' );
define( 'SECURE_AUTH_SALT', '$8@/{kBoMI3<yv/t*w5b<gOqE$6Xp?$sAiyx79o6WgWg!0Y)L&H$S68*&#CR5q!m' );
define( 'LOGGED_IN_SALT',   'd4`Q>[oX[&i5qH}]l7nt|8a&exq<4XO{7Of8Y/ANHcV~@#hI|tGr0HP$K;97,(I_' );
define( 'NONCE_SALT',       'G?3/ySx2_Yi6/xB,mH}QQ<l)/g{]Jb~_S`|OGIdk}5,#[>|8Vp3Lw.C|9w9V%,Aa' );

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
