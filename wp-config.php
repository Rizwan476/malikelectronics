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
define('DB_NAME', 'jani');

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
define('AUTH_KEY',         'H%<(&(zk@,MyE?j4n}0AfH-o~U%8]8V1n}c]j6wsIEP2ZtKFr>@Z:NB!2Z:f^&y&');
define('SECURE_AUTH_KEY',  '880&aT,M@Nh!Ty1V3.`QB)iaK%{B/C_%CSp,{{vrACLI0FU[n9U&nSoQP{!*JQG2');
define('LOGGED_IN_KEY',    'k{g6EA*5-kYCOcJ{iV$*W=YO.x^Z?~rB #jc0Tcsji~bxCRC~1`GHP_Tdc6ny{fa');
define('NONCE_KEY',        'nCH%;FRI4mt:7%jdw@VMk,Wq`FZ;{,:Uf?HSa7CaT-tLjwC~PX?;zh7HL|F i:ag');
define('AUTH_SALT',        'iOp/0P0[zxQe1IO=HT &>XH$V}5HJk?Qf-^.g<ohI5@ETW1QY#/PyanP!IGvZ}7 ');
define('SECURE_AUTH_SALT', '%H$Nvk4yJ<qmJg`RFZD4wZ1(v#&Sa?0wRu*I)* (g0%89qhanYtw5Or9 @[Wj{9|');
define('LOGGED_IN_SALT',   'zaX-C}s;FfH07Uxi6}RRHms)6MLOH#)z4 m77d|~fZIu8VuzysyAc8tCXHj4.oaB');
define('NONCE_SALT',       'Urc8Ql*g%lyMZTuv5oJ%C%h[Ag`r8: Pyn;]c/@K]:KNZbSUD?h3oJ4dXe.GgXlu');

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
