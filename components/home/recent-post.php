<section class="recent_proyect">
    <h2 class="responsive-box subtitle" data-aos="fade-up">Projects</h2>


    <swiper-container class="proyect_slider" slides-per-view="1.5" space-between="20" centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
        <?php
            while ( $query_post->have_posts() ) {
                $query_post->the_post();
                $img = get_the_post_thumbnail();
                $title = get_the_title();
                $link = get_the_permalink();
        ?>
                <swiper-slide>
                    <a href="<?= $link ?>" class="proyectItem">
                        <section class="img">
                            <?= $img ?>
                        </section>
                        <section class="content">
                            <h3><?= $title ?></h4>
                            <button href="<?= $link ?>">view project</button>
                        </section>
                    </a>
                </swiper-slide>
        <?php
            }
        ?>
    </swiper-container>

</section>