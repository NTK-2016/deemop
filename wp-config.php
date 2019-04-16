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
define('DB_NAME', 'northeastinvestors');

/** MySQL database username */
define('DB_USER', 'northeastinvesto');

/** MySQL database password */
define('DB_PASSWORD', 'LCQ31rNPdSJoQ0pk');

/** MySQL hostname */
define('DB_HOST', 'rvnsrv08.nrvsolutions.local');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c(uCp#03^T+#qR3ehcmlz5=,KBLzgKF#K^yvBue#TK863n{G%=Vg3RA$%7hU9QtS');
define('SECURE_AUTH_KEY',  'VJrp82L6hP:-Z}I[xeL{XNgX;]Hie%Nf:L4d]vX3yr:L[Px1Wi;++(j2 qmi6ywm');
define('LOGGED_IN_KEY',    '*9;+}(L}D@y$tg.[8dQLiZD5!RlUxzZ8E>gK#Mc=4)kv7Je/B&HC*Bye}{/g~Fv7');
define('NONCE_KEY',        'iD)oI|K5|>>skVa&i5eFlp4q#Tk|K67*x4X^YywGU`4M&kcy.Ia8{6TmEr-[VONC');
define('AUTH_SALT',        '0FiW@~C|CyFQ}>H?.{_x8G(%u~7B937fd/00*l/Kz5i@Bs_btp&]x:7 G0lDbT$s');
define('SECURE_AUTH_SALT', '7H,AE#a[N69LL98X#e6flA1TZ$krp!Wa2mx2Y=a*aAK&T(]WLyDo$ 2+0SOn 4A/');
define('LOGGED_IN_SALT',   'o#J(_90dac4!?)-9l4t#+8`@&a;$_oQ@z]Cbvh2AMXuuJV<*2@ggG4Bk.#; kIm[');
define('NONCE_SALT',       '+)bp2Nhx3IN?%II#dN^YR6m+X<Ircg_*IPaTwc>z;PWy2cq$u8cCz#YFHO[(kA0)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//DISALLOW_FILE_EDIT
//define( 'DISALLOW_FILE_EDIT', true );
