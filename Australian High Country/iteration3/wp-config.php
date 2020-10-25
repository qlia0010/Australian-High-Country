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
define( 'DB_NAME', 'dbbggypj84pq35' );

/** MySQL database username */
define( 'DB_USER', 'ubjkyr2w4ch2w' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ya2bk8u2enm4' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '..2&@N$RlikkCk- 4}5F]7HZx-`,Hm,m.8GPh]e:b1sco))YmtMYK;5=:_A^n8X<' );
define( 'SECURE_AUTH_KEY',   '?}FQ{[ZeP6y*X<,Xw:?@Z^]q[2WrD1PpfiSo`ziCOi feC4_k)dvMZXkTTt0uy2~' );
define( 'LOGGED_IN_KEY',     'wdxpNU =W$2fTqyjc/C:Av@v&9uZbGzw@uV2?RFL (:Pe$s.n1A*~|u;en;gw1*(' );
define( 'NONCE_KEY',         'BQtmCfo~EQ `D^C``V3A}7j;CK!N?V/N|F9*dIk{m.nmsx<udm}Fh@y;5naX5M;O' );
define( 'AUTH_SALT',         'vmv.R8dJMUyQj0G_mJ&*5UoDNt@`Hfw94vKj+zN SE=>IUz.#}YBCwzw8e[~/[s/' );
define( 'SECURE_AUTH_SALT',  '_T+kD 2c$;x^01w6eqq|P%)]qV Nb0z(_f%O=N;j/n5T|pPW+hn(,]d*6 Imi}cG' );
define( 'LOGGED_IN_SALT',    '$>T,R$atZ}0G/J2p}>CG7)nEgaLt,~sAPC~%hQ-A}nYa3Qs:4TF!Q*=XO[.?5wt0' );
define( 'NONCE_SALT',        '|sFGe#&6,OI0T,fn*L$Q$9bkSoRsYyr_F>OeDFPy>oQOni3+ @z8td4KQ95*aZDa' );
define( 'WP_CACHE_KEY_SALT', '8b-_D1aXL/#@VZ_z>C3Aq1xU7$.ZQj[JoO@H7DZF~.(]~CUL;/?3C[sESF.[F8qk' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jdv_';






/*define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'florecuva.online' );
define('PATH_CURRENT_SITE', '/florecuva/');
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );*/

/*define('WP_HOME','http://www.florecuva.tk/florecuva'); 
define('WP_SITEURL','http://www.florecuva.tk/florecuva');*/
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
