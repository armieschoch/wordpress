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
define( 'DB_NAME', 'wphschum' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!HM5?1=9e1:8kW3<AONXr4MCDR#gR8_GSg#LlSSlO9L/LyZG&H/Mqr`oE3u1o|}^' );
define( 'SECURE_AUTH_KEY',  '4D6=- bAg)CTh^[5/~eys3$ sy8ePil`rt!Tt0lyoUlyHi Q%3;D=taKde{!COdk' );
define( 'LOGGED_IN_KEY',    'QAfE{Jn?O^;%gJ}`l+)@er3XAJiDTmc}$=sDv}eB5//1RKT;`pE:e4}!YtG206oU' );
define( 'NONCE_KEY',        'z~X$`INIzmqaYNz!K-~DF>R<$V^?Bc:=UHU`W&(c@#+)K5$-/u3guq5#CwAwsRS]' );
define( 'AUTH_SALT',        '|J?hKqHv{])N#gj60a ?u*@m_*o:kKj.y)g`$M`b#dr5zO|)IAwX3<[33:>Y_djx' );
define( 'SECURE_AUTH_SALT', ')v]c9FLutB>&^b]h?t-NL*;Sx!.cT<~_jJ(t]lv{eDso#-VkdAPCz=N3-@XlZJVo' );
define( 'LOGGED_IN_SALT',   'Wfj6n<GCMi8I/n5uG|+O{&!hK8[Cq.84-n+4r,wY6[)7s>4o[1  Cvje84dzISIF' );
define( 'NONCE_SALT',       'Wrde D=eKOJ}m2Nz`=_R]W5~8_$n ]@otk1#(>Us@FY)F:$PS&FUL. w7vwMJMn.' );

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
