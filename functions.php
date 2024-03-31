<?php

    /**
     * Cargamos los scripts de tipo modulo
     * 
     * Este script carga el el module del javascript
     */

    wp_register_script('theme-script', get_theme_file_uri('/scripts/javascript/app.js'), '1.0', true);
    wp_enqueue_script('theme-script');
    add_filter("script_loader_tag", "theme_scripts_module", 10, 3);
 
    function theme_scripts_module($tag, $handle, $src){
        if ("theme-script" === $handle) {
             $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
        }
        return $tag;
    }

    /**
     * Ajuntos el css, el css esta compilado en el scss
     */

    function theme_scripts(){
        wp_enqueue_style( 'style_theme', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'theme_scripts'); 

    /**
     * Agregamos el lottie
     */

    function lottieScript(){
        wp_enqueue_script("lottie_js", get_template_directory_uri()."/lottie/javascript/lottie.min.js");
        wp_enqueue_script("lottie_config", get_template_directory_uri()."/lottie/javascript/lottie.menu.js");
    }
        
    add_action('wp_enqueue_scripts', 'lottieScript');

    /**
     * Style Swiper
     */

     function swiper_scripts() {
        wp_enqueue_style( 'style_swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        wp_enqueue_script("swiper_import", 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js', array(), null, true);
    }
    
    add_action('wp_enqueue_scripts', 'swiper_scripts');

    /**
     * Habilitamos el menu en el tema
     */

    add_action( 'after_setup_theme', 'register_menus' );

    function register_menus() {
        register_nav_menu( 'menu-nav', __('Menú principal'));
    }


    /**
     * Custom Register
     */
    function customRegister(WP_Customize_Manager $wp_customize){

        // Front Page
        include(get_stylesheet_directory() . '/custom-registers/front-page.php');
        
    }

    add_action('customize_register', 'customRegister');

    /**
     * Habilitamos la imagen destada de los post
     */

     add_theme_support( 'post-thumbnails' );