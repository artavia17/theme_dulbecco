

<?php
    $title = get_the_title();
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
            <?php
                if( have_rows('caracteristicas') ){

                    $index = 1;

                    while (have_rows('caracteristicas') ) : the_row();
                    
                        if( get_row_layout() == 'galeria' ){

                            $title = get_sub_field('title');
                            $image = get_sub_field('imagen');
                            $descripcion = get_sub_field('descripcion');
                            $sinopsis = get_sub_field('sinopsis');
                            

                            ?>

                                <section class="item">
                                    <section class="header responsive-box">
                                        <section class="title">
                                            <span>
                                                <?php
                                                    if($index <= 9):
                                                        echo "0$index";
                                                    else:
                                                        echo "$index";
                                                    endif;

                                                ?>
                                            </span>
                                            <?php
                                                if($title):
                                                    echo "<h3>$title</h3>";
                                                endif;
                                            ?>
                                        </section>
                                        <hr>
                                        <section class="subtitle">
                                            <?php
                                                if( have_rows('sub_title') ){
                                                    while (have_rows('sub_title') ) : the_row();

                                                        $subTitle = get_sub_field('sub_titulo');
                                                        echo "<h4>$subTitle</h4>";

                                                    endwhile;
                                                }
                                            ?>
                                        </section>
                                    </section>
                                    <section class="main">
                                        <section class="image">
                                            <span>
                                                <img src="<?= get_theme_file_uri('/assets/image/logo_dulbeco.png') ?>" alt="Dulbecco Logo">
                                            </span>
                                            <img class="ilustracion" src="<?= $image ?>" alt="Ilustracion dulbecco">
                                            <button>Up Scale</button>
                                        </section>
                                        <section class="content">
                                            <section class="description">
                                                <h5>Description: </h5>
                                                <?= $descripcion ?>
                                            </section>
                                            <section class="sinopsis">
                                                <h5>Synopsis: </h5>
                                                <?= $sinopsis ?>
                                            </section>
                                        </section>
                                    </section>
                                </section>

                            <?php

                            $index += 1;

                        }

                    endwhile;
                }
            ?>
        </section>
    </main>
</div>

<?php
get_footer();