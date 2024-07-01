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
     * Agregarmos el aos.js
     */

     function aosScript(){
        wp_enqueue_style( 'aosStyle', 'https://unpkg.com/aos@next/dist/aos.css');
        wp_enqueue_script("aos_js", "https://unpkg.com/aos@next/dist/aos.js");
        wp_enqueue_script("aos_config", get_template_directory_uri()."/anime.js/config.js");
    }
        
    add_action('wp_enqueue_scripts', 'aosScript');

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

    /**
     * Validamos el idioma
     */

    function languajeValidate(){
        if(strpos($_SERVER['REQUEST_URI'], '/es') !== false){
            return true;
        }
        return false;
    }

    function urlRedirect($es){

        $current_url = home_url(add_query_arg(array(), $GLOBALS['wp']->request));
        $home_page = get_home_url();
        $new_url = '';
        $convert_url = '';

        if($es){

            if($home_page == $current_url){

                $convert_url = str_replace("/es", "", $current_url);

                $new_url = [
                    'url' => $convert_url,
                    'text' => 'English'
                ];
            }else{
                $new_url = [
                    'url' => str_replace("/es/", "/", $current_url),
                    'text' => 'English'
                ];
            }
            
        }else{
            $new_url = [
                'url' => str_replace("$home_page", "$home_page/es", $current_url),
                'text' => 'Español'
            ];
        }

        return $new_url;
    }



     function agregar_item_en_posicion($sorted_menu_items, $args) {
        
        $url = urlRedirect(languajeValidate());

        if ($args->theme_location == 'menu-nav') {
            
            error_log('Generated URL: ' . esc_url($url['url']));

            // El traductori agrega de forma automatica la url entonces la removemos con js

            $new_item = (object) array(
                'ID' => 1000,
                'title' => $url['text'],
                'url' => esc_url($url['url']),
                'menu_order' => 5,
                'type' => '',
                'object' => '',
                'object_id' => '',
                'db_id' => 0,
                'menu_item_parent' => 0,
                'classes' => array('menu-item', $url['text'] == 'English' ? 'english' : ''),
                'target' => '',
                'attr_title' => '',
                'description' => '',
                'xfn' => '',
                'current' => false,
                'current_item_ancestor' => false,
                'current_item_parent' => false
            );
    
            array_splice($sorted_menu_items, 4, 0, array($new_item));
        }
        return $sorted_menu_items;
    }
    add_filter('wp_nav_menu_objects', 'agregar_item_en_posicion', 10, 2);
    
    