<?php
/**
 * The base configurations of the WordPress.
 */

// Include specific local configuration details.
require 'local-config.php';

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_CACHE_KEY_SALT', md5( DB_NAME . __FILE__ ) );
define( 'WP_POST_REVISIONS', 3 );
define( 'DISALLOW_FILE_MODS', true );
define( 'FS_METHOD', 'direct' );

define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', 'utf8mb4_swedish_ci' );

$table_prefix  = 'wp_';

if ( ! defined( 'ABSPATH' ) )
    define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );

require ABSPATH . 'wp-settings.php';
