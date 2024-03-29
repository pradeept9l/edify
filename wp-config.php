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
define('DB_NAME', 'edify');

/** MySQL database username */
define('DB_USER', 'phpmyadmin');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'z[m?7`Gg?~e_Z/OzT<Ykm><N1J;v!,[aJ4Y|e7zPw)4pdbx=zB`LiOVMD{J,7zf ');
define('SECURE_AUTH_KEY',  '3A#5O8UFI: jypBilG4Wml~(3ghZLER{7{}=$?v3{/X$|$1&N?@SBEBxLFp%:<sq');
define('LOGGED_IN_KEY',    'He8zvj<!40.oQ/(0x$Ju2u/4$u`CQM)+:dUMX&rDz;t38.Ut*i_;CLu|HkUj;{fS');
define('NONCE_KEY',        '=ZKeHbB<[ncm/8W6oB7^ap%~nV:.>y8[SD7O8lNaSo~z_e:q%+,[f.vA22)25~F2');
define('AUTH_SALT',        'AvNUe1*NGFHzu@x|DAEO@Y>m79V3sljZUc4B7g)#D<;Tcd9)o=>R5xwT%c&e#%ps');
define('SECURE_AUTH_SALT', 'z|PG$]b(cbo_aw?<vD=W#>]6nvG{8D$*-An?@2r@p6Sfe+i5Yd,v-<Z{SKBCv:o~');
define('LOGGED_IN_SALT',   'p`i<;z6=cNghHNK!m,8h:ES.j4`50D@ $RR0HtvvY$h,im<(:pLoHO[HUldPQ/(d');
define('NONCE_SALT',       'VS5=]UY>m=DGVO{YUhc5C$vM_6Q%$jHJNsd=xr./~o}b<wtdw:Pg.-yR<@Y{Sk%E');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
