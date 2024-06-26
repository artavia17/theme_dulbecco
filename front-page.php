<?php 
    echo get_header();

    // Mods Front pages
    $video = get_theme_mod('home-asset-settings');
    $year = get_theme_mod('home-year-setting');
    $profesion = get_theme_mod('home-profesion-setting');
    $pais = get_theme_mod('home-pais-setting');
    $video_extension = '';
    $video_all_extensions = array('mp4', 'webm', 'ogg');
    if($video){
        $video_path_info = pathinfo($video);
        $video_extension = $video_path_info['extension'];
    }

    // Posteos del slider, solo se obtienen los ultimos 7 post

    $args_post = array(
        'post_type'      => 'post',
        'posts_per_page' => 7,
    );
    $query_post = new WP_Query( $args_post );

    // Obtenemos el about
    $about = get_theme_mod('home-about-my-work-setting');

    // Education
    $education = get_theme_mod('home-education-setting');

    // Juournal articles
    $juournal = get_theme_mod('home-juournal-setting');

    // Book Chapters
    $book = get_theme_mod('home-book-setting');

    // Group exhibitions
    $group = get_theme_mod('home-group-setting');


?>

<header class="home">
    <section class="background">
        <?php
            if(in_array($video_extension, $video_all_extensions)){
            ?>  
                <div class="blur">
                    <video autoplay loop muted playsinline>
                        <source src="<?= $video ?>" type="video/<?= $video_extension ?>"/>
                    </video>
                </div>
            <?php
            }
        ?>
    </section>
    <section class="content">
        <section class="logo">
            <span>Archive by</span>
            <section id="svg_header" json="<?php echo get_template_directory_uri(); ?>/lottie/json/data.json"></section>
        </section>
        <ul class="responsive-box">
            <?php
                if($year){
                ?>
                    <li><p class="barra"><?= $year ?></p></li>
                <?php
                }
            ?>
            <?php
                if($profesion){
                ?>
                    <li><p class="llaves"><?= $profesion ?></p></li>
                <?php
                }
            ?>
            <?php
                if($pais){
                ?>
                    <li><p class="barra"><?= $pais ?></p></li>
                <?php
                }
            ?>
        </ul>
    </section>
</header>
<main>
    <?php
        if ( $query_post->have_posts() ) {
            include(get_stylesheet_directory() . '/components/home/recent-post.php');
        }

        if($about){
            include(get_stylesheet_directory() . '/components/home/about.php');
        }

        if($education){
            include(get_stylesheet_directory() . '/components/home/education.php');
        }

        if($juournal){
            include(get_stylesheet_directory() . '/components/home/juournal.php');
        }

        if($book){
            include(get_stylesheet_directory() . '/components/home/book.php');
        }

        if($group){
            include(get_stylesheet_directory() . '/components/home/group.php');
        }

    ?>
</main>

<?= get_footer() ?>

