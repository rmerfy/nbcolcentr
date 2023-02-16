<?php 
    add_action('wp_enqueue_scripts', 'detailing_styles');
    add_action('wp_enqueue_scripts', 'detailing_scripts');

    function detailing_styles() {
        wp_enqueue_style( 'detailing-style', get_stylesheet_uri() );
        wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/slick-slider/slick.css' );
        wp_enqueue_style( 'fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css' );
    };

    function detailing_scripts() {
        wp_enqueue_script( 'jquery-scripts', get_template_directory_uri() . '/assets/js/jquery-1.9.2.js', array(), null, true );
        wp_enqueue_script( 'inputmask-scripts', get_template_directory_uri() . '/assets/js/inputmask.min.js', array(), null, true );
        wp_enqueue_script( 'slick-scripts', get_template_directory_uri() . '/assets/slick-slider/slick.min.js', array(), null, true );
        wp_enqueue_script( 'smoothscroll-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js', array(), null, true );
        wp_enqueue_script( 'fancybox-scripts', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), null, true );
        wp_enqueue_script( 'jqueryui-scripts', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), null, true );
        wp_enqueue_script( 'detailing-scripts', get_template_directory_uri() . '/assets/js/customScript.js', array(), null, true );
    };
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Информация'),
			'menu-2' => esc_html__( 'Пакеты'),
            'menu-3' => esc_html__( 'Услуги'),
		)
	);
?>