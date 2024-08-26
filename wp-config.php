<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'realEstate' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '4IJ6@Dq-az*=g~:j|ng+uaZ_|$@XM][,4/fxg<1t]%Uf)jS[k9l|+n(m);h)U-e8' );
define( 'SECURE_AUTH_KEY',  'U;l>hcXe1iQ3rCHL]DV)#DrcwcAP`W2FHt~E<8eA5hl@`FO1ClS*lnC9o +!K;ze' );
define( 'LOGGED_IN_KEY',    '8vHxQ=QY:ph4wk}I^p%PxbGFZ2$-f*A0$C|N)wHLX_*.W,6H-)7r}_ul<j>L1q >' );
define( 'NONCE_KEY',        'FoKE5LX&Qq=>`[+U+$ac8. )%[(xQm`G:KD(842c$@Q`1O;ong#Z4$]y[b5L-,2z' );
define( 'AUTH_SALT',        'u/-tiTW>YU@h?kpUZ;jmO;LM|-EXF{>QE^*W#e7$q)(x??RCboTGgxCU>CY]Nu*5' );
define( 'SECURE_AUTH_SALT', 'U^ypccA90e-BFZxB#:Lh5Z4$YZS`C(f?kl/[M+*u({/bm|Y;S@m|ES<,@;Lmq R-' );
define( 'LOGGED_IN_SALT',   '4GIcg4hp5aLouaKR7-J7+J4m>7V^FLMf=oY+j|)d}hEH0oV&G(PEj$FrZDCq<BBR' );
define( 'NONCE_SALT',       'NB[b@AtB6jH<U2>111A5EvE2(Ai@]U+~E3-5o#-H4qCAiaXAHQmOAAT}_l}^0(E=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
