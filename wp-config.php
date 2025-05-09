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
define( 'DB_NAME', 'personalblog' );

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
define( 'AUTH_KEY',         '|J7?^&ln]lwr<TNL^X@e(&nsq~(vThPWsq}krP=)l |9baHeCj&{VDo @T*}z]HT' );
define( 'SECURE_AUTH_KEY',  'M|;/V_h]Nv:}v@1{PNXdc2HvpY_Vco)&2~}2=84xJnw).5v^L kx38KB,AV}Fzfb' );
define( 'LOGGED_IN_KEY',    '(,%u@1y2t8t_PJ]U0{llb%O3.*;)u+{Y_eky;Rj1R%S]nqV(y9:-G^|E0iMpKc N' );
define( 'NONCE_KEY',        '{6?~~1}2,!bL6>;l7.+McPsIsE10fktzOi>sS0z=2`tx=vbFTe88+F;B7~;O)oP@' );
define( 'AUTH_SALT',        '_x4(Q]Sfkj#z7j.t.<e[&Om;UO5aN|JSb!5<_)P;]k^Sqgy}F_Nsb5BFD9#{1bAL' );
define( 'SECURE_AUTH_SALT', '984>L2nPm s(v4Qv$1F}s4<sm|V#F+~e~Vi# ,sJgh,7&/(F Jw9gEp|;8v2v;gQ' );
define( 'LOGGED_IN_SALT',   'G2Xd@%.}u1YotF-Q4+tz,Yt7eFb$)u0ng#jfs?{Di-ZKhuyh&(&olTY?gyBjp%^ ' );
define( 'NONCE_SALT',       'J4qpIq%5-8:oobx~>oeyawSQ;dkx1@g&}JHPG;O<K#+aaQgYV8[Ap[^SviM$Frn,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
