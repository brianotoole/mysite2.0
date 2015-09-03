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
define('DB_NAME', 'brian2015');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         ')I $*wWR&/+:)bfU2P]}seesQ(im$;64QBzzZj`Cen@a-o?@U|tH}uFQS:Uh<BMX');
define('SECURE_AUTH_KEY',  'qQ!0ven&iZuC`~(i}NNQmgXD2{^K-_E-E=F<0hV{#VNJ-qnE(zi2,>]M%td|abcU');
define('LOGGED_IN_KEY',    ':NR-@rNjO].O.uA]!>Lm4?|||*$,r@+N=M0LV:ruU(a~YYY+|F9T{s)O6cI#|++_');
define('NONCE_KEY',        'CREmYH!ph9b! ~-n+g$IG33w6;viY#uXH7)-iBDdsg4|;|Sd1B4cO,nuuaAFS(uz');
define('AUTH_SALT',        '-9z~B$)<Z-uB-:Oc<8|tlF_^}@@q{#I<qaOvTv +:*sO1:pqH<B-TAUO,0K-0maP');
define('SECURE_AUTH_SALT', 'S41Y<,XQk%hw* IdaiFd-N(;/+N_id1t<pi]Y$xq#Gs~+dyf.*+[}ym0|[|dFb.E');
define('LOGGED_IN_SALT',   'rkTejK0G-*h|-`n2!@[0Bz3]jKUTe9Y-9-Mh##ygKiLyy-Mz9S-@%NzMP$xomahF');
define('NONCE_SALT',       'b?7XYdM2n(T/!]*n(sHNE4aLfY>_Ly4m3?Jj(3rj%[i-=U+l#U4TzxHCz2uN1N5y');

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
