<?php

    function validateImage($url) {
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
        $extension = strtolower(pathinfo($url, PATHINFO_EXTENSION));
        return in_array($extension, $imageExtensions);
    }
    
    if( have_rows('ilustraciones') ){

        $index = 1;

        while (have_rows('ilustraciones') ) : the_row();
        
            if( get_row_layout() == 'ilusctracion' ){

                $title = get_sub_field('titulo');
                $file = get_sub_field('file');

                

                ?>

                    <section class="item galery">
                        <section class="main">
                            <section class="image" data-aos="fade-up">
                                <span>
                                    <img src="<?= get_theme_file_uri('/assets/image/logo_dulbeco.png') ?>" alt="Dulbecco Logo">
                                </span>
                                <?php
                                    if (validateImage($file)) {
                                        echo "<img class='ilustracion' src='$file' alt='Ilustracion dulbecco'>";
                                    }
                                ?>
                                <section class="title_absolute">
                                    <h2><?= $title ?></h2>
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