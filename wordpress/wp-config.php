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
define('DB_NAME', 'wp_silverdale');

/** MySQL database username */
define('DB_USER', '');

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
define('AUTH_KEY',         ' -ww!!8n)ru<`1oj@qeQ_,NRVZ+#$@,s=/v@{v69IVhLGpqz9Oy@_|s/l~oXZ vc');
define('SECURE_AUTH_KEY',  ' =y90q.COM0<u$9v%_E2k+vh*~K=niNO< &jh;L%/|<XFy<4ZCiw(]s0e-I3P8.6');
define('LOGGED_IN_KEY',    '09k@43_YPqR/mEDPQsA[bo>@2.ao!c1Ef]!^^]lK55|K=4mlzxgt0DOh ~O! E[4');
define('NONCE_KEY',        '$GzWy0d_<Ny&K;ju$[;u[PpER1<K6-p(/QrW5A>|yueqNE2t_6Rn7Bdum~G*W`[K');
define('AUTH_SALT',        '!;e%PsqFtz#nc;(ddtSO,#L/B9% N]w>$K}%UZ_F4ZL)d{lqGc9dyjW$`mKJMf0B');
define('SECURE_AUTH_SALT', '*&Y(q]O]hw0E{Rb/MSP|j`{jzaI=l$!/Jx-M!@~bJnT?d sokJ7U+YVmfZhZ2k1:');
define('LOGGED_IN_SALT',   'Z8^C/R3+Sv^bX>@?BZ$r:ib5E-hTZk?rF*X!&=l^s]M*j4vs{bQlwPzqRSAFNeBg');
define('NONCE_SALT',       ',?)BNqFa:y0nL/s3}rs#&JEr-xE3LD-S[i7b`c;[Yw.ewxzvEmb+>)YA9~6GaZJ?');

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
