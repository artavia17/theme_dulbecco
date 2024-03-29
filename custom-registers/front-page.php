<?php

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