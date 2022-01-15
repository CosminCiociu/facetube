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
define( 'DB_NAME', 'facetube' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'G63SPx3U4bxwmkcz' );

/** MySQL hostname */
define( 'DB_HOST', 'devkinsta_db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '|GMc]ZSjuw}~e0wH^JK!(;&0c~<B9$972(b)ekmXG}@tQ43:<FtzByE-I1~q%p4F' );
define( 'SECURE_AUTH_KEY',   '&@^nQ*xCEXbOagP:_z,UdE)g53pCg,,|#E<~8o12OqWk=hZVTXJ-E274b55P{_.q' );
define( 'LOGGED_IN_KEY',     '0KXVG2;-wk^GYk@]Jt3-sxj$wN<+uH7S3iE_`eO;de?CO+$r07@`?)YddGK@Sf:.' );
define( 'NONCE_KEY',         'Y*3VhlZMkN@p3H@DL(/%;!4VWGMRr1KR;U&-K3twFwhQH!G,M c#@2Sl]SDd7S{n' );
define( 'AUTH_SALT',         '!^]px(N}Q<eu*S~7*6XK)EVf]3+vYDH5$N%0paV*~[SiHYyFngei:qA<;1FupWM:' );
define( 'SECURE_AUTH_SALT',  'z/RW1Zuxx@ a,Os[Ma6+5y[,>=Zty88r:-kk(pg`Q4(;vfy8!R.s0)P-t{o|Ox)}' );
define( 'LOGGED_IN_SALT',    '8^HAH.E`; VM*-kygwG6%[WD)Q(j*O1Y2^oLg3~oP60j|U7;6?l( 0u5?hE&HLCh' );
define( 'NONCE_SALT',        '9o)=v`8kZfedXW tgPI-A9}swek.X,+d7{j_aHB9`A93_vVJO P@c0VozCks[VLl' );
define( 'WP_CACHE_KEY_SALT', 'X@6k7$JiSX-aSMPc1fu!ppGkefCf4tR%MFszmqdc/f,-_4_8Qw 5b}W&zhxK+XEm' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
