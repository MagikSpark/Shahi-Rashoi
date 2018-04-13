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
define('DB_NAME', 'shahirasoi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[Xvoy.fp__&H{(M+.rx>A`^sVvB2wvU?5$:_*}= G_Bwq&3iCCyn&,|Sm&Zi.pt?');
define('SECURE_AUTH_KEY',  '$CvKGb_O4|0MN+&GDTk~thkqI&pr:qfSw~1.+`H#*[m{[$]2*M*{ot:u#SD8GPw=');
define('LOGGED_IN_KEY',    'B77~UhzJns_mL;?/arUaClG6/.$7[s|U,VSQ.Iu&##=vpY&Ap8;V@.MD37Z-w|:-');
define('NONCE_KEY',        '#PE}R0cHQWuXROh5crR+eM}#29ARCsYD.- &Ro8.,RInRn@L[V8E>M_/GyC8?St!');
define('AUTH_SALT',        'JIR%[py3]`.1l?<Ny6G:C4hm&@$dl^Zkyyj9Dd@_+iYV$A*^6553_bhO[fMESXCe');
define('SECURE_AUTH_SALT', 'g7F?kZDsyq=YCVzm1fM-0Z_|DLT&eKTuKoNYzBn _^o}h|#`E%(e=o]IkaGdB:DV');
define('LOGGED_IN_SALT',   'Foe,j.K3aS@sI3aXLv9^K@.vl!=F-Y:iSJA5ev`>:PQlKv&I @caGHnHS#fuDh~E');
define('NONCE_SALT',       '.qm[(vEU>&9Wt.jL:n-B+YiFY?j<Ut|>znKNSfW|[_,eve;X^^,*g&u(8E5oamQr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sr_';

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
