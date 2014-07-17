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
define('DB_NAME', 'eatkaleDBd8h3v');

/** MySQL database username */
define('DB_USER', 'eatkaleDBd8h3v');

/** MySQL database password */
define('DB_PASSWORD', 'qFWQOoOgU');

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
define('AUTH_KEY',         'T_~xH92tpia5_+B3{>jcI,$vrMF7yfX3{<^bUB$unfME6qjQ{.^yUME$umiE6<');
define('SECURE_AUTH_KEY',  '5a:~tK9-pd1|dO#wl.yM6qb.fTI*uI6{iX6<+TH+qe2<ma;.xPAxma@nF0,cQ,zn');
define('LOGGED_IN_KEY',    'P+P6te2.B0^YN,vkB0vfU}^UJ7vjI3>fU}^rI7$qb3<fQE$r:~sK8shV:~dR|-oC0');
define('NONCE_KEY',        '3YIlZK_wK9:lW4[@VG~sh8:od0|zRC-od8}kZN!vNC}PD+pa2#eTD_xO9;la;_xSH');
define('AUTH_SALT',        'xA+ma2#aPD+m>$rJ3rgU}^cQF$nF3>gQ,yQE$nb3>jXM.uMAnb@od4[dRG~sNC0');
define('SECURE_AUTH_SALT', 'd|wOC@sg4[hVK!sRF4sg4[@VGiWL*tLA;iX5]eSH*tH6teS]~SH5tiD1#dO#-OD1T');
define('LOGGED_IN_SALT',   '_,uM7vjY{^fQ<$qI7rfU2<bPE$qE3<mbP.yPE2qb@rF4>gVJ@sRF4nc4>cRF,vNB');
define('NONCE_SALT',       'CoZ:!cR>@oF4sgV0,cRF@oF4>nY0,zQFznc~tH5]hW]~tSC-pd5#shV:_wVNC-oG4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
