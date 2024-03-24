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
        // Mostrar la barra de wordpress para el administrador 
        if(is_user_logged_in()){
            wp_admin_bar_render();
        }
    ?>
    
