<?php

namespace Xweb;

class Setup{

    public function __construct()
    {
        // actions
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('after_setup_theme', array($this, 'add_theme_supports'), 2);
        add_action('after_setup_theme', array($this, 'remove_theme_supports'), 2);
        add_action('after_setup_theme', array($this, 'register_menu_locations'), 2);
        add_action('after_setup_theme', array($this, 'set_thumbnail_sizes'), 2);
        add_action('wp_head', array($this, 'show_favicon'));


        // filters
        add_filter('intermediate_image_sizes', array($this, 'remove_useless_image_sizes'));
        add_filter('use_block_editor_for_post_type', array($this, 'disable_gutenberg_for_post_types'), 10, 2);

    }


    /**
     * Enqueue scripts and styles.
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function enqueue_scripts() {
        $version = wp_get_theme()->get('Version');

        wp_enqueue_style( 'Xweb',  get_stylesheet_directory_uri() . '/dist/styles.css' ,null, $version);
        wp_enqueue_script('Xweb', get_stylesheet_directory_uri() .'dist/scripts.js' , null , $version, true );


        wp_localize_script('spd', 'SpdJs', array(
            'ajaxurl' => admin_url('admin-ajax.php')
        ));

    }

    public function add_theme_supports(){
        // Make theme available for translation. Translations can be filed in the /languages/ directory.
        load_theme_textdomain( 'spd', get_template_directory() . '/lang' );

        // Theme supports
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'align-full' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
    }

    public function remove_theme_supports(){
        //remove_theme_support( 'widgets-block-editor' );
    }

    public function register_menu_locations(){
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'spd' ),
            'mobile'    => __( 'Mobile', 'spd' ),
            'socials'   => __( 'Social Menu', 'spd' ),
            'footer'    => __( 'Footer Menu', 'spd' ),
        ) );
    }

    public function set_thumbnail_sizes() {
        add_image_size( 'spd-thumb', 220, 220 , true );
        add_image_size( 'spd-cover', 650, 500 , true );
    }

    /**
     * @return void
     *
     * @todo the options
     */
    public function show_favicon(){
        echo "<link rel='shortcut icon' href='" . get_stylesheet_directory_uri() . 'assets/img/favicon.png' . "' />" . "\n";
    }

    /**
     * @param $sizes
     * @return array
     *
     * @todo theme options
     */
    public function remove_useless_image_sizes($sizes)
    {
        return array_diff( $sizes, array(
            '2048x2048',
            '1536x1536',
            'large',
            'medium_large',
            'medium' ,
            'thumbnail',
        ) );
    }

    /**
     * @param $is_enabled
     * @param $post_type
     * @return false|mixed
     *
     * @todo theme options
     */
    public function disable_gutenberg_for_post_types($is_enabled, $post_type){
        $exclude_post_types = array('product', 'post', 'page');
        if (in_array($post_type, $exclude_post_types)) return false;

        return $is_enabled;
    }
}