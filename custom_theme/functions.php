<?php
    /* registrar menu */
    if(function_exists('register_nav_menus')){
        register_nav_menus(array(
            'menu'=>'Top Menu'
        ));
    }


    /* agregar clase nav-link a etiqueta <a></a> */
    add_filter('nav_menu_link_attributes','add_class_menu',10,3);
    function add_class_menu ($atts,$item,$args) {
        $class = 'nav-link fw-bold text-uppercase py-2 px-4';
        $atts['class'] = $class;
        return $atts;
    }

    /* widgets in sidebar */
    add_action( 'widgets_init', 'sidebar' );
    function sidebar() {
        register_sidebar(
            array(
                'id'            => 'primary',
                'name'          => __( 'Primary Sidebar' ),
                'description'   => __( 'A short description of the sidebar.' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
    
    /* function to add featured images */
    add_theme_support('post-thumbnails');

    /* theme options */
    function themeOptions( $wp_customize ) {
        $wp_customize->add_section( 'theme', array(
            'title'    => __( 'Theme Options', 'mi-tema' ),
            'priority' => 30,
        ) );

        //----------------------//
        $wp_customize->add_setting( 'title', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'title', array(
            'label'    => __( 'Title', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));
        //----------------------//
        $wp_customize->add_setting( 'button', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'button', array(
            'label'    => __( 'Button', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));
        //----------------------//
        $wp_customize->add_setting( 'address', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'address', array(
            'label'    => __( 'Address', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));
        //----------------------//
        $wp_customize->add_setting( 'openingHours', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'openingHours', array(
            'label'    => __( 'Opening Hours', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));
        //----------------------//
        $wp_customize->add_setting( 'phones', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'phones', array(
            'label'    => __( 'Phones', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));
        //----------------------//
        $wp_customize->add_setting( 'emails', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'emails', array(
            'label'    => __( 'Emails', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));

        //----------------------//
        $wp_customize->add_setting( 'whyChooseUsSubtitle', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'whyChooseUsSubtitle', array(
            'label'    => __( 'Section subtitle', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));

        //----------------------//
        $wp_customize->add_setting( 'whyChooseUsTitle', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'whyChooseUsTitle', array(
            'label'    => __( 'Section title', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));

        //----------------------//
        $wp_customize->add_setting( 'whyChooseUsParagraph', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'whyChooseUsParagraph', array(
            'label'    => __( 'Section paragraph', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));

        //----------------------//
        $wp_customize->add_setting( 'newsletterTitle', array(
            'default' => '',
        ) );
        $wp_customize->add_control( 'newsletterTitle', array(
            'label'    => __( 'Newsletter', 'mi-tema' ),
            'section'  => 'theme',
            'type'     => 'text',
            'priority' => 10,
        ));        
    }
    add_action( 'customize_register', 'themeOptions' );
