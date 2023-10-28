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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codeblog' );

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
define( 'AUTH_KEY',         ' 5@+gIkMNkEV<-Y3[Hfm*iiIo=ujg{/@Se_;^$3m626N!c#dPHWEEg~2q|5%5M+h' );
define( 'SECURE_AUTH_KEY',  '|PVJrNX96$4V}6laAi=X1ulK.PI=!vG`V^)z&A#g*R7Z-Y@~)c|5wd#~n&[8f[f.' );
define( 'LOGGED_IN_KEY',    'r+Cy.s&y;>FS;h8y4eyVYSEAh.l3:)mM#Zq95Fj[_N!VN,UG!^h18r$RQHuA.ZUw' );
define( 'NONCE_KEY',        '(Ln-4q}S6 l|q|Va-p?I9wJ~GnhWced5%PTAvM->7U8/cDmk<}(^j,`Ehj:%{)Kc' );
define( 'AUTH_SALT',        'f;EdSJOLn04yI$r+>rG!(!2{8Tw%c&2wqYK&|mp %~`1qd$;qEsm&?(P*%8,F2 ?' );
define( 'SECURE_AUTH_SALT', 'kw%BbP*EUJ,3id$Jw-6s`H+ri!(SP{[]S[RZ;n]1tA.J0WB;b9OGWBfz-/ ZvG!I' );
define( 'LOGGED_IN_SALT',   ')i*kqc0}:QnZ)h<tf^;9|`51yPE8wh@N+a@e.*~z[EplBPY3)ZPAo fJ&ax?K[fv' );
define( 'NONCE_SALT',       '//E:0/>Dnmf&kCQP$<1}W2zU7g_pASr-V:(E|uzXh:0Y0Bu0a6_8>NMrzOuRm_^4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
