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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '^?-7 D01yg 8S?Ng<pg5k*e3&:0AIfIoNeW7b-)Yw/*+LItGKUy4q6et-=vIV~oN');
define('SECURE_AUTH_KEY',  '+X<tCmRFz2eY6$Jq|VVK(wU!-U2Q?+BXD8-oKf&-5MPw*5!;O0U0wnP(9jI@o=Ol');
define('LOGGED_IN_KEY',    'jEe0+c>l pMu^+8I#b*deBg!h,!80^Y,bznU|WzU>r{e+=(=B:CKs!F|e>N3#oVk');
define('NONCE_KEY',        'CBJ6-8=SS[QNSAJIU}!-8JuD.cr:gfT2EG&caar=J,YIyo}|;CJ-o_Q#}XV/|AM2');
define('AUTH_SALT',        '~HK9@w@D/W}n>El;n*HD)mMIhdXD[Otb).~dpQvy>JCKz7DUx0SA2n@P-s`.5y; ');
define('SECURE_AUTH_SALT', 'zf&L|-g]VVMM]O5an)^(>iAJ-Tr%)xY.l)1F#Ye+N!iw>xOrKYVQM(gq^DY9Ck]g');
define('LOGGED_IN_SALT',   '`4UP6*tUc$5n&ML15}a+%QLl{mX5f_.RdvNlIvR=xT;YjqEY<H.NiZ5Y(jI.mb+|');
define('NONCE_SALT',       'D,7zomN:&7$zpvC|0(2ovA5sIoVEr~YL-}9E9d% wD3E7RE<Db#Zh-SET-O#%7I+');

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
