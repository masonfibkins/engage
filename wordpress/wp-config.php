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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_engagediversity_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_engagediversity_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_engagediversity_pw' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'dxA$jUv1w{*/cK3</Tq$:16U+F6H?qx0W>K[]u+8IoYVGgH07GtGT{Ax@aQ3];37' );
define( 'SECURE_AUTH_KEY',   '%aov0^45Jz;4JEseY0X3^9x<eG`NS+hSUoUBiyH+ehb)t =&mq~AD88>TL0_%IGL' );
define( 'LOGGED_IN_KEY',     'VW-$w>iae,b<+cWBRNL& Vx-!.b. >)9g>/7+st^4S;%3MLu2wTGS_n|KI)Bq4jK' );
define( 'NONCE_KEY',         ':!HGUeI18BF5w~;Oe$Ii>Ax/m!LP%JZ!THcAO{9Ch;i;J;^,uU*-|.#|po0J6}!T' );
define( 'AUTH_SALT',         'gQk-ZdtxfwFqD+}%XObsypupVasc{h+K.0Z>EIi:scRG?q!fES-8<L)<Qcmm#h>I' );
define( 'SECURE_AUTH_SALT',  '~VG&Q]4,9S.wV2C60etR]i;6UGBv{;U[Dkjeg.wspWG%*^2#?PC~eZg/(dOX-fxr' );
define( 'LOGGED_IN_SALT',    'YYsfOP3(CUEvl7aBMQDDTJj0Ev?t^+-WX(pt]2_mKwjn0H?OBaQ!n#bR%4IF+jB5' );
define( 'NONCE_SALT',        'xfn77+l=F9(7wQO*LsM71j#CKIb<7%=Yqt(+@y{f:Hp.<!Vm_rs!Vz:SET}Rc9_n' );
define( 'WP_CACHE_KEY_SALT', 'WGa1&{RECw69EihTv_-~v!08a]FMUV*dl>N]azsi.2A^CC:PnW:!Qwqc{c-CTp/.' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
