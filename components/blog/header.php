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

    <nav class="galery <?= $menuBig ? 'big' : '' ?>  <?= $navFixed ? 'fixed' : '' ?>">
        <section class="<?= $menuBig ? 'responsive-box-big' : 'responsive-box' ?> ">
            <section class="logo">
                <a href="<?= home_url() ?>">
                    <h1><?= $title ?></h1>
                </a>
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
        </section>
    </nav>
    
