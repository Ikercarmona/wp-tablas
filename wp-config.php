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
define( 'DB_NAME', 'wordpress_tablas' );

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
define( 'AUTH_KEY',         '4yzQR7<,U<$L{;FWvp=gqM*d Ovm[;laxJo0=!#GRlJG/,xfk2hEii`}.p:tdVcF' );
define( 'SECURE_AUTH_KEY',  'I{Yf88Sqz!V|7xddo/J1Go*a:`<j#&GSD%JlTwD7_kF;3EL5ki[)@uvw=!Jh60oW' );
define( 'LOGGED_IN_KEY',    '8#edjYZSi4zA?IRpQUhTc9 z3)xhvo7k1S=3?E%&6r4[Mbkb.|TKY!`6vnB%S9=&' );
define( 'NONCE_KEY',        '2sB), O9&2*o%>@C|O|B(Q8u& ^$;2M^.#k^0vLsWf`+c=[y`NF;C;g.JMCB?GOa' );
define( 'AUTH_SALT',        '<Xhj,NJ;dwsxzk++W?rNuC)*nJn/ZC;bBqP7&3]Z5G#M(>nuUXP4W7R|UD9Qr+~w' );
define( 'SECURE_AUTH_SALT', ']|B3RB3ba.b*70L+r1%Mbxb&46:DDX~#oKC2}UZSP8+4l$lqr~j4t3eD%b*,J!Ie' );
define( 'LOGGED_IN_SALT',   'ZOj,.{~%=ixZXfqxkybOskhRL.p{m~)NfXJUflbGwAEbDcT,yI9/J3s4w:~O~G(I' );
define( 'NONCE_SALT',       'IuJ?boU6D.80u7t&_oL!XVoLqvMOx7jS&zcg2(^G{i3ps5l{.)|= kSMrh=h&*j*' );

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
