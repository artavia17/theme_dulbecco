<?php
        if( have_rows('caracteristicas') ){

            $index = 1;

            while (have_rows('caracteristicas') ) : the_row();
            
                if( get_row_layout() == 'galeria' ){

                    $title = get_sub_field('title');
                    $image = get_sub_field('imagen');
                    $descripcion = get_sub_field('descripcion');
                    $sinopsis = get_sub_field('sinopsis');
                    $qr = get_sub_field('qr');
                    $youtube_item = get_sub_field('youtube_item');
                    $title_video = get_sub_field('title_video');

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
                                <section class="image" data-aos="fade-up">
                                    <span>
                                        <img src="<?= get_theme_file_uri('/assets/image/logo_dulbeco.png') ?>" alt="Dulbecco Logo">
                                    </span>
                                    <?php
                                        if(!$image && $youtube_item){
                                            parse_str(parse_url($youtube_item, PHP_URL_QUERY), $queryParamsYoutuve);
                                            $videoId = $queryParamsYoutuve['v'];

                                    ?>
                                        <iframe 
                                            src="https://www.youtube.com/embed/<?= $videoId ?>" 
                                            title="YouTube video player" 
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                            referrerpolicy="strict-origin-when-cross-origin" 
                                            allowfullscreen></iframe>
                                        
                                    <?php
                                        }else{
                                    ?>
                                            <img class="ilustracion" src="<?= $image ?>" alt="Ilustracion dulbecco">
                                    <?php
                                        }
                                    ?>

                                    <?php
                                        if(!$youtube_item){
                                    ?>
                                            <button>
                                                Upscale
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707m0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707m-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707"/>
                                                </svg>
                                            </button>    
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if($qr){
                                    ?>
                                        <div class="qr">
                                            <img src='<?= $qr ?>' alt='QR de Intagram'>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                </section>
                                <section class="content responsive-box <?= (!$sinopsis || !$descripcion) && ($image && !$youtube_item) ? 'full' : '' ?>" data-aos="fade-up">
                                    <section class="description">
                                        <?= $descripcion ?>
                                            <?php
                                                if($image && $youtube_item){
                                                    parse_str(parse_url($youtube_item, PHP_URL_QUERY), $queryParamsYoutuve);
                                                    $videoId = $queryParamsYoutuve['v'];
                                            ?> 
                                                <div class="video_small">
                                                    <h5 class="<?= $descripcion ? 'margin' : '' ?>"><?= $title_video ? $title_video : '' ?></h5>
                                                    <iframe 
                                                        src="https://www.youtube.com/embed/<?= $videoId ?>" 
                                                        title="YouTube video player" 
                                                        frameborder="0" 
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                                        referrerpolicy="strict-origin-when-cross-origin" 
                                                        allowfullscreen></iframe>
                                                </div>
                                            <?php
                                                }
                                            ?>
                                    </section>
                                    <section class="sinopsis">
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