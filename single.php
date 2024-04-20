

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
        <section class="list">
            <?php include(get_stylesheet_directory() . '/components/blog/ilustraciones.php');?>
            <?php include(get_stylesheet_directory() . '/components/blog/caracteristicas.php');?>
        </section>
    </main>
</div>

<?php
get_footer();
