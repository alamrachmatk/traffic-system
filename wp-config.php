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
define( 'DB_NAME', 'traffic_system' );

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
define( 'AUTH_KEY',         'L,B!JG<3MOZw{D7R.>&[mG:*RL|,*J6&&[`V0f2v^*2FII-0g$r}TyunUhpyrY<:' );
define( 'SECURE_AUTH_KEY',  'n!**?P(|Yrv$ib,ELcY=?Ls^uzz@1(N|y+6lFLh*aHKq2q|p9? <jsJ<_=rAs/!N' );
define( 'LOGGED_IN_KEY',    'ep)eF>j#.G12q,3k,tlaf<i~Q~(rmS<-2smpPv,KEhT`*Nm^;}!TGp3W4vMuog%c' );
define( 'NONCE_KEY',        'Jx9ZtDmBBe=<yJox6iSkyT2[X`tEAZ25:V}b4{#S4N;gt #aI/8LSFlx-vd;t*MR' );
define( 'AUTH_SALT',        'F(7/r/SF_#%fhzf{j8%tb+uTG4a()S$P_;V:x&;CUM_+?ULjfFT{eBDvlN4/?D(.' );
define( 'SECURE_AUTH_SALT', '^k/meB@qr{i*YtR5>Gf%>51ouF/kVJLdUC/i&kZQ9l$Xu K.9*P35[,;Gl=AQXC-' );
define( 'LOGGED_IN_SALT',   '+g?e$/=f?[B*-,%95hq->n2?}><JZ03D<#3]nQ#Mej#7wj01~<^K!#^-M7.d4*$2' );
define( 'NONCE_SALT',       'ru>i`fT-nEA|7n3X#!9St879err>;)+u3zo D<K9GI7YYbNU6G/;uf>^}# ba&WW' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
