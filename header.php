<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title(''); ?>
        <?php 
            if(wp_title('', false)){ 
                echo ' - '; 
            } 
        ?>
        <?php bloginfo('name'); ?>
    </title>

    <?= wp_head() ?>
</head>
<body>
    
    <?php 
        // Mostrar la barra de wordpress para el administrador solamente para usuarios logueados
        if(is_user_logged_in()){
            wp_admin_bar_render();
        }
    ?>

    <nav>
        <section class="logo" json="<?php echo get_template_directory_uri(); ?>/lottie/json/data.json">
            <section id="dulbecco_svg"></section>
        </section>
        <input type="checkbox" name="show_menu" id="show_menu">
        <label for="show_menu" class="show_menu_mobile" disabled>
            <hr>
        </label>
        <?php
            wp_nav_menu( 
                array(
                    'theme_location' => 'menu-nav',
                    'menu_class' => 'menu_class' 
                )
            );
        ?>

    </nav>
    <section class="form_contact">
        <section class="content responsive-box">
            <section class="header">
                <h3>For gallery editions and prints, explore collections and inquire to purchase.</h3>
                <button class="close_modal">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </section>
            <section class="form">
                <?= do_shortcode('[contact-form-7 id="0254037" title="Formulario de contacto 1"]') ?>
            </section>
            <section class="contact">
                <h4>Contact: </h4>
                <section>
                    <a href="#">Dulbecco Lab Studio, Residencial Lisboa 2G, Alajuela 20102, Costa Rica </a>
                    <a href="mailto:info@dulbeccobioart.com">info@dulbeccobioart.com</a>
                    <a href="tel:50685150440">+506 85150440</a>
                </section>
            </section>

        </section>
    </section>
    
