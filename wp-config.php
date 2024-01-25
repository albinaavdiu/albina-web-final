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
define( 'DB_NAME', 'new-albina' );

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
define( 'AUTH_KEY',         'pK`-3y$qu2X9/Lq~iwKvV_}!KP;f<c /Tj&iy*gRV_f-GWEaL{V44/I/V3}||MGK' );
define( 'SECURE_AUTH_KEY',  ',g4MX(OIS$n}N>V*d;0=%LjUG6c)>.gc|dPR$pH1F/&cp6%~k1b$[J.(p>/X;U*p' );
define( 'LOGGED_IN_KEY',    '[!{<b*%$3B3skT?(DwHygB+txQ&eX!(eMW3J)&F!@iI~!iOZefT!$qPE+.srp|%g' );
define( 'NONCE_KEY',        '{k@(jJNJV6c.W8ur-!T#jJh+pn aSdVgX-T{$HT^oFj1do=x:Eybl,jrr~.7#.hR' );
define( 'AUTH_SALT',        '<M*7a8al(ID/9C`>?_jXy,B;?x(}l(Ic E/1H~94|c+|RV7HBD-{>k;DSjXFi#g|' );
define( 'SECURE_AUTH_SALT', 'JwqWkVy:Orqz$]OHIuOH?3W!A&Y&~fao,=u3gBT,^Vg-?SC FSj%w,Z0]Q68>c^t' );
define( 'LOGGED_IN_SALT',   'hvUm0vx{R.PGX|^;#u&{<=}J.s54ZQTwqI|;,@5JJtEsZ9jCT!6}(3jrKjCXL;0v' );
define( 'NONCE_SALT',       'Z,zAoRM65=r!YWmg~q~P?VE^FHY$vmX:zs=tJ<@^}>/E}uKk{5@JwdPn+4;0rdmf' );

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
