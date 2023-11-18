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
define( 'AUTH_KEY',          '`VhDPapb$#sNIEyRS[5eAoHSd^rudGKiQ,S_P{HxXhe[,o_ >b8H0b!i=@ZtMWB|' );
define( 'SECURE_AUTH_KEY',   's8:Qp={7<#rYmdtTO--9*O8I]`,`=&lP8)W&o~6r#O3S}0!*62)1l[j+h3y@}9.2' );
define( 'LOGGED_IN_KEY',     '{s>sGC1N nOyRjt#XR`DC+JYU2%271Q8:`CiJP!!3fuO0me5R`~`kYPGhWm`>V{r' );
define( 'NONCE_KEY',         'r2oV_K3j]nFs7bf0Epkfav_:g<Qv&)OX-Q -PeXWP!j2@(Pvktlj^dpZs2%WD&6o' );
define( 'AUTH_SALT',         '!RP DtgtOz}o{;jML-^&GuE+TG.`-qtw`#%OLb&1T/HX*ZPhQC!~ap1ef;0w{/}#' );
define( 'SECURE_AUTH_SALT',  '_=-0JSw9hp^U;-N{]W4^o6! pTH>[hWP)bem*?sb*x_6TN(Ao2C)?d2t1-}TaNe#' );
define( 'LOGGED_IN_SALT',    '|}+#6gIe7YR/+!Q!j5I=W0U85@@y5&e6;~~mz4odwqzLKSrz{Mq*]m=|oni<Knt>' );
define( 'NONCE_SALT',        '=5?U.*!1eqdi#;W`#M)r#zD:YPjMU}kuN(iXp;PQy}:QMuq1LS.l$8iJ4n!0ko*a' );
define( 'WP_CACHE_KEY_SALT', '~?ZdtIcP0E|159]I`ZE=`NQC!AyudJ<]/&sl0?epwT1l]Imm,dVGrvL?BM0/p^PD' );


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
