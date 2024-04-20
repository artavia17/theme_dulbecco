

<?php
    $title = 'Galery';
    $menuBig = true;

    include(get_stylesheet_directory() . '/components/blog/header.php');

    $args = array(
        'posts_per_page' => -1,
    );
    
    $query = new WP_Query( $args );

?>


<div id="primary" class="content-area responsive-box-big">

    <main id="main" class="<?= $query->have_posts() ? 'galery_content' : 'not-found' ?>">
        
        <?php
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) :
                $query->the_post();

                // Aquí puedes personalizar cómo se muestra cada entrada
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <a href="<?= esc_url( get_permalink() ) ?>" rel="bookmark">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= the_title() ?>">
                        <?php
                        if ( is_singular() ) {
                            the_title( '<h2 class="entry-title">', '</h2>' );
                        } else {
                            the_title( '<h2 class="entry-title">','</h2>' );
                        }
                        ?>
                    </a>
                </article>
                <?php
            endwhile;

            // Agrega navegación de entradas
            // the_posts_navigation();

        else :
            // Si no hay contenido para mostrar, puedes agregar un mensaje aquí
            ?>
            <h2><?php esc_html_e( 'No items in gallery.', '' ); ?></h2>
            <?php
        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
