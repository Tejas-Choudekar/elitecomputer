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
define( 'DB_NAME', 'elitecomputer_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!(U+JEDN3s[8*ez<`%@l>E%]AoSCtuR{=sa n[JYT9m&PIUEIFAiZ~MIf{>DH/76' );
define( 'SECURE_AUTH_KEY',  'S Ej,5cQ_;#;%pI!z8gaL?|A|J,cu/5XDJ.8VL`!j(%D$$eL@n7!.lxHJNRNt~:+' );
define( 'LOGGED_IN_KEY',    '38Vu6_hS`b3N8@bLX<Ex*;bc?{mjH5[E-?/*c;lSIP&MB*CV2k^n!HSl%yac>!(&' );
define( 'NONCE_KEY',        'e3j#RwLMn[f_YmRORVv1+sC7$+.L{_.,t=gI%JmKEd%5zf?Jb7v`0sC[q+;2`=(G' );
define( 'AUTH_SALT',        'fA)vab]%a$gDBeU_j}jS)J/|IjLI!+6f-;@H ]!&dv52t;I((zy{-GTyz#]NyHH?' );
define( 'SECURE_AUTH_SALT', 'S]jejlkFo#B*;<uoU=Mu`qm{]Rm4209fHS1s$3Us+B`udzP!Rm9wR@Cjp)gTeP,O' );
define( 'LOGGED_IN_SALT',   '}tb#I8VK:s1Q,e{C^3`vjN7;T/#z0QfSr]A=nB(F1+`V=|UR~;=PA}?lPJDOBQRd' );
define( 'NONCE_SALT',       'H3lgaf#> M!%r{jjiuhf0>_V(UDWM&2U$a#59 BfwKCb@8n<BzV<b4IA[pAK<QAK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
