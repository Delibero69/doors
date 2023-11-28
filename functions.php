<?php
    add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );
    // add_action( 'after_setup_theme', 'add_features' );
    add_action( 'after_setup_theme', 'add_menu' );

    add_theme_support( 'custom-logo' );
        function add_scripts_and_styles() {
            // wp_deregister_script( 'jquery' );
            // wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', false, null, true );
            // wp_enqueue_script( 'jquery' );
            wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array (''), null, true);


            wp_enqueue_style( 'baguetteBox', get_template_directory_uri() . '/assets/css/baguetteBox.min.css' );
            wp_enqueue_style('style', get_stylesheet_uri() );
            }

        // function add_features(){
        //     add_theme_support( 'custom-logo', [
        //         'height'      => 50,
        //         'width'       => 100,
        //         'flex-width'  => false,
        //         'flex-height' => false,
        //         'header-text' => '',
        //         'unlink-homepage-logo' => false, // WP 5.5
        //     ] );
        // }

        function add_menu(){
            register_nav_menu( 'top', 'Главное меню сайта' );
            register_nav_menu( 'bottom', 'Политика конфиденциальности' );
        }
?>