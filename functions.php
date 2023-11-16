<?php 
/**
 * BD certified functions and definations
 */

 if( !function_exists("BDcertified_setup")){
    /**
     * Sets up theme defaults and registers support for various Wordpress Features
     */
    function BDcertified_setup(){
        /**
         * Make theme available for translation
         */
        load_theme_textdomain('BDcertified', get_template_directory( )  . '/languages' );

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');
        add_theme_support('custom-background', apply_filters)('BDcertified_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ));

        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('custom-logo', [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true
        ]);
    }
 }

 add_action('ater_setup_theme', 'BDcertified_setup');