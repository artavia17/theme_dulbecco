<?php

    include(get_stylesheet_directory() . '/custom-registers/editor/wp_editor.php');

    /**
     * Configuracion del front page
     */
    $wp_customize->add_section('front-page-section', array(
        'title' => __('Front Page', 'themename'),
        'description' => '',
        'priority' => 120
    ));

    /**
     * Registramos el video del home
     */

    $wp_customize->add_setting('home-asset-settings', array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'background-asset', array(
        'label' => __('Header Background', 'themename'),
        'section' => 'front-page-section',
        'settings' => 'home-asset-settings'
    )));

    /**
     * Registramos los otros items del front page
     */

    
    // Year
    $wp_customize->add_setting('home-year-setting', array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control('home-year-control', array(
        'label' => __('Año'),
        'section' => 'front-page-section',
        'settings' => 'home-year-setting',
        'input_attrs' => array(
            'placeholder' => __('Escriba aquí'),
        ),
    ));


    // Profesion
    $wp_customize->add_setting('home-profesion-setting', array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control('home-profesion-control', array(
        'label' => __('Profesión'),
        'section' => 'front-page-section',
        'settings' => 'home-profesion-setting',
        'input_attrs' => array(
            'placeholder' => __('Escriba aquí'),
        ),
    ));


    // País
    $wp_customize->add_setting('home-pais-setting', array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control('home-pais-control', array(
        'label' => __('País'),
        'section' => 'front-page-section',
        'settings' => 'home-pais-setting',
        'input_attrs' => array(
            'placeholder' => __('Escriba aquí'),
        ),
    ));


    // About my word
    $wp_customize->add_setting('home-about-my-work-setting', array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Teeny_Control($wp_customize, 'home-about-my-work-control', array(
        'label' => __('About my work'),
        'section' => 'front-page-section',
        'settings' => 'home-about-my-work-setting'
    )));

    // Education
    $wp_customize->add_setting('home-education-setting', array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Teeny_Control($wp_customize, 'home-education-control', array(
        'label' => __('Education'),
        'section' => 'front-page-section',
        'settings' => 'home-education-setting'
    )));

    // Juournal articles
    $wp_customize->add_setting('home-juournal-setting', array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Teeny_Control($wp_customize, 'home-juournal-control', array(
        'label' => __('Juournal articles'),
        'section' => 'front-page-section',
        'settings' => 'home-juournal-setting'
    )));


    // Book chapters
    $wp_customize->add_setting('home-book-setting', array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Teeny_Control($wp_customize, 'home-book-control', array(
        'label' => __('Book chapters'),
        'section' => 'front-page-section',
        'settings' => 'home-book-setting'
    )));

    // Group exhibitions
    $wp_customize->add_setting('home-group-setting', array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Teeny_Control($wp_customize, 'home-group-control', array(
        'label' => __('Group exhibitions'),
        'section' => 'front-page-section',
        'settings' => 'home-group-setting'
    )));