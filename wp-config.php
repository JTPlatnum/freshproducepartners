<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'freshproducepartners');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'wpuser');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '$dRb$V<7DO5,PczN3+|ra}bLc%D%+i)R98.U:+~-;)4k:2twoE&:-Q>_rb!XcUzF');
define('SECURE_AUTH_KEY',  'O1(]n/f||+^C3zihWCu4_n/1ACLrQ|7~fnZqSo2}b]?-M+WtN-t6vTImG&A11VyL');
define('LOGGED_IN_KEY',    '$%^B+Cl>icz5`OcZzr~k@mFk*Vd]VeSDD!&|LzzW+m+l0n^qn(3Y+REAe;6O}23j');
define('NONCE_KEY',        'Cc8-/OFkRkrAcLzt8.R-;+S0,dxmI?`*[<N>a-+lHEl5tg:Ut-4&Q7Z1pu8@q}+n');
define('AUTH_SALT',        '6B1:@n@AAVC-H~kQF^?s2[y}8GM^nx.?ReaZOv$p3ZMm3$k6:=j$S*3oSq!4|]i3');
define('SECURE_AUTH_SALT', 'WF~WRBNihox>6V#XrNpE`oc+3XQgcdA-pjtAas~;7a[cM]AJu+ b~W6<j_II(NrC');
define('LOGGED_IN_SALT',   '~F]R`adir+kUTf&BYT1uScXMy>~^C(UkuL,;iGNk~Q`/FE]}1i00#+xFE/++L7Jr');
define('NONCE_SALT',       '$pBF <4br3cJZ|[OJ^|S@H7,p7HU}mKNfmsF]$Y.FtJI$0rCP|b|n{j!#ibg+aix');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
