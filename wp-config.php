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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'l@urenKing');

/** MySQL database password */
define('DB_PASSWORD', 'acuqW68WEheSxQKB');

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
define('AUTH_KEY',         '#ClOuA]@LBC4oRVd`dYTPfF9v@`:g~8/3JacpU]?BYeh,K}K+f^uVOVRgwtt)Tdi');
define('SECURE_AUTH_KEY',  '!v%ChCDO7Fu{[W-hAm:K%U/rFq&A3%|tr2{P|]x]s=@gKZefP91vkEoLQ&<yMlPZ');
define('LOGGED_IN_KEY',    'umnP%spRw(>8KSKO*sjg3,4Iu%LUPhS,;=;hVs ]ccpz>(zQ6|k4N|r}RnlF{ecE');
define('NONCE_KEY',        'Q1V2|=D2jV3F1,Cso>C0o4Z;j({hhTTO@lU=j~SV?`M,*qH]}kKy7?T !EbeK.T+');
define('AUTH_SALT',        'g0 %v/kJeImN2A|Cs]fxrESwLH<izo%N1AAg4hyR:[ze$Smoo !c|Au!o8Mu N<H');
define('SECURE_AUTH_SALT', ':pzMrs1G4N)!h-h,e&1=8GM|!EdZZP|GGAhVh;V(T9sX*ayLt!(MM^k?w{>T}Mg<');
define('LOGGED_IN_SALT',   '0WA$mEBi5]]IYOO5/-SU0V,ZUB]z}zj_ds0}1/7y.T5u}A~F Q>O 2JQSnF1zlZ@');
define('NONCE_SALT',       '+DNw?3&EhCjbvP%=njD52)w3SjMWl>eU( Dh>B5Im**^0tG~FC51iEM} C%[9mrR');

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
