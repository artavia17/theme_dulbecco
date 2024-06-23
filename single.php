

<?php
    $title = get_the_title();
    $menuBig = false;
    $navFixed = true;
    include(get_stylesheet_directory() . '/components/blog/header.php');

    $args = array(
        'posts_per_page' => -1,
    );
    
    $query = new WP_Query( $args );
?>


<div id="primary" class="content-area individual-galery">
    <header>
        <?= get_the_post_thumbnail(); ?>
    </header>
    <main id="main">
        <section class="content responsive-box">
            <?= the_content() ?>
        </section>
        <?php
            $youtube_url = get_field('youtube');
            if($youtube_url){
                parse_str(parse_url($youtube_url, PHP_URL_QUERY), $queryParams);
                // Obtener el valor del parámetro 'v'
                $videoId = $queryParams['v'];
        ?>
            <section class="video responsive-box">
                <iframe 
                    src="https://www.youtube.com/embed/<?= $videoId ?>" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen></iframe>
            </section>
        <?php
            }
        ?>  
        <section class="list">
            <?php include(get_stylesheet_directory() . '/components/blog/ilustraciones.php');?>
            <?php include(get_stylesheet_directory() . '/components/blog/caracteristicas.php');?>
        </section>
    </main>
</div>

<?php
get_footer();
