<?php
/**
 * Plugin Name:     Release Profiles
 * Plugin URI:      https://github.com/mykedean/release-profiles.git
 * Description:     A Wordpress custom post type to represent releases by a record label
 * Author:          Michael Dean
 * Author URI:      https://github.com/mykedean
 * Text Domain:     release-profiles
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Release_Profiles
 */

    
    /**
     * Include all the neccessary files. 
     * 
     * This theme uses the Koumbit 'kposts' library for creating custom post types.
     */
     
    use KP\Post\KP_Custom_Post_Type;
    use KP\Post\KP_Metabox;
    require_once( __DIR__ . '/vendor/autoload.php' );
    
    /**
     * ====================================================
     * Set up the custom post type to be used by the widget
     * ====================================================
     */
    
    //Define post type for customizing RSS feeds
    $release_post_type = new KP_Custom_Post_Type( 'Releases' );
    $release_post_type->set_slug( 'releases' );
    
    /**
     * ====================================================
     * Set up metaboxes.
     * ====================================================
     */
    
    /**
     * ------------------------------------------------------
     */
    $release_details = new KP_Metabox( "Release details" );
    
    $release_details->add_field( "Artist" );
    $release_post_type->add_metabox( $release_details, "advanced", "high" );