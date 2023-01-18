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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mamun' );

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
define( 'AUTH_KEY',         'b7kCC!Pr{8c6].vo_VOO!/$ 8{ 2L?moi|YrhHneu4m+%9S8l)}I3GwVKCsh( gi' );
define( 'SECURE_AUTH_KEY',  '>FL0sL*8?6@Kx.6@Qy,a2$[c#*Sub_WP,dij$=`fE7&#St03;i( _={C8$LBpHJ}' );
define( 'LOGGED_IN_KEY',    '7H8PofE)/z)|?2(X9}ES)!`j]W]&Ok*jV/%H+!d9B3a?XoFy-Nq_BuxunMH&xh%$' );
define( 'NONCE_KEY',        'Mfwyzv0oc1fWf$[e2iTgBB(}er1+T,WN0N$D4pcQ<G>a+&CivR<3*H8q;FPpMl6o' );
define( 'AUTH_SALT',        '[2fNOB7Xf:s?s@tX[:>HplwZ?o`mf?.H6<pw:D|nR{DR;`U{|z:6)X)_J8@@2sAs' );
define( 'SECURE_AUTH_SALT', '>n3T~H> j7$<^ehK/|$m4Wpa6|J7~p(j5G`3d7jEu /)[fVY6d6RXZDA5_fk;cz}' );
define( 'LOGGED_IN_SALT',   '2TO-3NCb&!QG=7G^*C;:aR/0xWdn9L&yvdW2> :%gcNza0]-Qic8)+IK6e*Yc9cq' );
define( 'NONCE_SALT',       'Z_.2@1C<Mce?N3aVA>uB)>qS*P6FIwEm:MKL&ML!YWJ@@KN*XJ${iPc)@Xe(g*?I' );

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
