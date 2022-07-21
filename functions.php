<?php

// logique du thème

// support d'un logo custom
add_theme_support('custom-logo');

// support de thumbnails
add_theme_support('post-thumbnails');

// support de widgets
add_theme_support('widgets');

// Définir les emplacements de menu

function register_menu()
{
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'text_domain'),
        'footer_menu'  => __('Footer Menu', 'text_domain'),
    ));
}
add_action('after_setup_theme', 'register_menu', 0);


// Incorporer la feuille de style principale
function esgi_add_theme_css_and_js(){
	wp_enqueue_style('main', get_stylesheet_uri());
	wp_enqueue_script('main-js', get_template_directory_uri() .'/assets/js/main.js');
  wp_enqueue_script('main-js2', get_template_directory_uri() .'/src/js/main.js'); 

	// Injection d'une variable dans le js
	$variables = [
		'ajaxURL' => admin_url('admin-ajax.php')
	];
	wp_localize_script('main-js', 'esgi', $variables);

}
add_action('wp_enqueue_scripts', 'esgi_add_theme_css_and_js', 0);


function getIcon($name)
{

    $twitter = '<svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18 1.6875C17.325 2.025 16.65 2.1375 15.8625 2.25C16.65 1.8 17.2125 1.125 17.4375 0.225C16.7625 0.675 15.975 0.9 15.075 1.125C14.4 0.45 13.3875 0 12.375 0C10.4625 0 8.775 1.6875 8.775 3.7125C8.775 4.05 8.775 4.275 8.8875 4.5C5.85 4.3875 3.0375 2.925 1.2375 0.675C0.9 1.2375 0.7875 1.8 0.7875 2.5875C0.7875 3.825 1.4625 4.95 2.475 5.625C1.9125 5.625 1.35 5.4 0.7875 5.175C0.7875 6.975 2.025 8.4375 3.7125 8.775C3.375 8.8875 3.0375 8.8875 2.7 8.8875C2.475 8.8875 2.25 8.8875 2.025 8.775C2.475 10.2375 3.825 11.3625 5.5125 11.3625C4.275 12.375 2.7 12.9375 0.9 12.9375C0.5625 12.9375 0.3375 12.9375 0 12.9375C1.6875 13.95 3.6 14.625 5.625 14.625C12.375 14.625 16.0875 9 16.0875 4.1625C16.0875 4.05 16.0875 3.825 16.0875 3.7125C16.875 3.15 17.55 2.475 18 1.6875Z" fill="#fff"/>
</svg>';

    $facebook = '<svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.4008 18L3.375 10.125H0V6.75H3.375V4.5C3.375 1.4634 5.25545 0 7.9643 0C9.26187 0 10.3771 0.0966038 10.7021 0.139781V3.3132L8.82333 3.31406C7.35011 3.31406 7.06485 4.01411 7.06485 5.04139V6.75H11.25L10.125 10.125H7.06484V18H3.4008Z" fill="#fff"/>
</svg>';

    $google = '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.12143 7.71429V10.8H14.3929C14.1357 12.0857 12.85 14.6571 9.25 14.6571C6.16429 14.6571 3.72143 12.0857 3.72143 9C3.72143 5.91429 6.29286 3.34286 9.25 3.34286C11.05 3.34286 12.2071 4.11429 12.85 4.75714L15.2929 2.44286C13.75 0.9 11.6929 0 9.25 0C4.23571 0 0.25 3.98571 0.25 9C0.25 14.0143 4.23571 18 9.25 18C14.3929 18 17.8643 14.4 17.8643 9.25714C17.8643 8.61429 17.8643 8.22857 17.7357 7.71429H9.12143Z" fill="#fff"/>
</svg>';

    $linkedin = '<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.9698 0H1.64687C1.19966 0 0.864258 0.335404 0.864258 0.782609V17.2174C0.864258 17.5528 1.19966 17.8882 1.64687 17.8882H18.0816C18.5289 17.8882 18.8643 17.5528 18.8643 17.1056V0.782609C18.7525 0.335404 18.4171 0 17.9698 0ZM3.54749 15.205V6.70807H6.23072V15.205H3.54749ZM4.8891 5.59006C3.99469 5.59006 3.32389 4.80745 3.32389 4.02484C3.32389 3.13043 3.99469 2.45963 4.8891 2.45963C5.78351 2.45963 6.45432 3.13043 6.45432 4.02484C6.34252 4.80745 5.67171 5.59006 4.8891 5.59006ZM16.0692 15.205H13.386V11.0683C13.386 10.0621 13.386 8.8323 12.0444 8.8323C10.7028 8.8323 10.4792 9.95031 10.4792 11.0683V15.3168H7.79593V6.70807H10.3674V7.82609C10.7028 7.15528 11.5972 6.48447 12.827 6.48447C15.5102 6.48447 15.9574 8.27329 15.9574 10.5093V15.205H16.0692Z" fill="#fff"/>
</svg>';

    $search = '<svg id="search-icon" class="search-icon" viewBox="0 0 24 24">
    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg>';

    return $$name;
}

// AJOUT DE PARAMETRES AU THEME

function esgi_customize_register($wp_customize)
{

    $wp_customize->add_section('esgi_custom', [
        'title' => 'Personnalisation du thème',
        'priority' => 1
    ]);

    $wp_customize->add_setting('main_color', [
        'type' => 'theme_mod',
        'transport' => 'refresh',
        'capability' => 'edit_theme_options',
        'default' => '#3F51B5',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'main_color',
            [
                'label'      => __('Couleur principale', 'ESGI'),
                'section'    => 'esgi_custom',
                'settings'   => 'main_color',
            ]
        )
    );

    $wp_customize->add_setting('has_sidebar', [
        'type' => 'theme_mod',
        'transport' => 'refresh',
        'capability' => 'edit_theme_options',
        'default' => false,
        'sanitize_callback' => 'esgi_sanitize_checkbox',
    ]);

    $wp_customize->add_control('has_sidebar', [
        'type' => 'checkbox',
        'section' => 'esgi_custom', // Add a default or your own section
        'label' => __('Afficher la sidebar'),
        'description' => __('Affiche la barre latérale sur les pages d\'article.'),
    ]);

    $wp_customize->add_setting('is_dark', [
        'type' => 'theme_mod',
        'transport' => 'refresh',
        'capability' => 'edit_theme_options',
        'default' => false,
        'sanitize_callback' => 'esgi_sanitize_checkbox',
    ]);

    $wp_customize->add_control('is_dark', [
        'type' => 'checkbox',
        'section' => 'esgi_custom', // Add a default or your own section
        'label' => __('Thème sombre'),
        'description' => __('Activer la version sombre du thème.'),
    ]);
}
add_action('customize_register', 'esgi_customize_register');

function esgi_sanitize_checkbox($checked)
{
    // Boolean check.
    return ((isset($checked) && true == $checked) ? true : false);
}


function css_output()
{
    $main_color = get_theme_mod('main_color', '#3F51B5');
    echo "<style>
	html{--main-color: $main_color; }
	</style>";
}
add_action('wp_head', 'css_output');


add_filter('body_class', 'esgi_body_class');
function esgi_body_class($classes)
{
    if (get_theme_mod('is_dark', 0)) {
        $classes[] = 'dark';
    }
    return $classes;
}


// WIDGETS
function esgi_widgets_init()
{
    if (function_exists('register_sidebar'))
        register_sidebar(
            [
                'id' => 'zone-1',
                'name' => 'Zone des widgets',
                'before_widget' => '<div class = "widget-zone">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
            ]
        );
}
add_action('widgets_init', 'esgi_widgets_init');




// AJOUT D'UN FILTRE
// add_filter('paginate_links', 'esgi_paginate_links');

// function esgi_paginate_links($args){
// 	$args = str_replace('/', '-', $args);
// 	return $args;
// }



// ROUTES AJAX (hooks wp_ajax_XXX, wp_ajax_nopriv_XXX)

add_action('wp_ajax_load_posts', 'esgi_ajax_load_posts');
add_action('wp_ajax_nopriv_load_posts', 'esgi_ajax_load_posts');


function esgi_ajax_load_posts()
{
    $paged = $_POST['page'];
    $args = [
        'post_type' => 'post',
        'posts_per_page' => get_option('posts_per_page'),
        'post_status' => 'publish',
        'paged' => $paged,
    ];
    $the_query = new WP_Query($args);
    // Mise en buffer
    ob_start();
    include('template-parts/post-list.php');
    echo '<script>ajaxizePageLinks()</script>';
    // Récupération du contenu du buffer
    echo ob_get_clean();
    wp_die();
}


// Override du filtre paginate_links_output utilisé par paginate_links
add_filter('paginate_links_output', 'esgi_paginate_links');

function esgi_paginate_links($args)
{
    return $args;
}

function home_section_one($wp_customize)
{
    $wp_customize->add_section('home_section_one', array(
        'title' => 'home section one'
    ));


    $wp_customize->add_setting('home_section_one_h1', array(
        'default'=>'Who are we?'
    ));
    $wp_customize->add_setting('home_section_one_p1', array(
        'default'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.'
    ));
    $wp_customize->add_setting('home_section_one_h2', array(
        'default'=>'Our vision'
    ));
    $wp_customize->add_setting('home_section_one_p2', array(
        'default'=>'Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisi et, consequat lectus. Suspendisse commodo magna orci, id luctus risus porta pharetra. Fusce vehicula aliquet urna non ultricies.'
    ));
    $wp_customize->add_setting('home_section_one_h3', array(
        'default'=>'Our mission'
    ));
    $wp_customize->add_setting('home_section_one_p3', array(
        'default'=>'Vivamus et viverra neque, ut pharetra ipsum. Aliquam eget consequat libero, quis cursus tortor. Aliquam suscipit eros sit amet velit malesuada dapibus. Fusce in vehicula tellus. Donec quis lorem ut magna tincidunt egestas. '
    ));

    $wp_customize->add_setting('home_section_one_image');

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'First title',
            [
                'label'      => 'test label',
                'section'    => 'home_section_one',
                'settings'   => 'home_section_one_h1',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'First Paragraph',
            [
                'label'      => 'First Paragraph',
                'section'    => 'home_section_one',
                'settings'   => 'home_section_one_p1',
                'type' => 'textarea'
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'Second title',
            [
                'label'      => 'Second title',
                'section'    => 'home_section_one',
                'settings'   => 'home_section_one_h2',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'Second Paragraph',
            [
                'label'      => 'Second Paragraph',
                'section'    => 'home_section_one',
                'settings'   => 'home_section_one_p2',
                'type' => 'textarea'
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'Third Title',
            [
                'label'      => 'Third Title',
                'section'    => 'home_section_one',
                'settings'   => 'home_section_one_h3',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'Third Paragraph',
            [
                'label'      => 'Third Paragraph',
                'section'    => 'home_section_one',
                'settings'   => 'home_section_one_p3',
                'type' => 'textarea'
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'Image First Section',
            [
                'label'      => 'Image First Section',
                'section'    => 'home_section_one',
                'settings'   => 'home_section_one_image',
                'width' => 750,
                'height' => 500
            ]
        )
    );
}
add_action('customize_register', 'home_section_one');



function home_section_two($wp_customize)
{
    $wp_customize->add_section('home_section_two', array(
        'title' => 'home section two'
    ));

    $wp_customize->add_setting('home_section_two_h1', array(
        'default' => 'text'
    ));
    $wp_customize->add_setting('home_section_two_image_1');
    $wp_customize->add_setting('home_section_two_image_2');
    $wp_customize->add_setting('home_section_two_image_4');
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'Titre',
            [
                'label'      => 'Titre',
                'section'    => 'home_section_two',
                'settings'   => 'home_section_two_h1',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'Image 1',
            [
                'label'      => 'First Image',
                'section'    => 'home_section_two',
                'settings'   => 'home_section_two_image_1',
                'width' => 750,
                'height' => 500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'Image 2',
            [
                'label'      => 'Second Image',
                'section'    => 'home_section_two',
                'settings'   => 'home_section_two_image_2',
                'width' => 750,
                'height' => 500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'Image 4',
            [
                'label'      => 'Fourth Image',
                'section'    => 'home_section_two',
                'settings'   => 'home_section_two_image_4',
                'width' => 750,
                'height' => 500
            ]
        )
    );
}
add_action('customize_register', 'home_section_two');



function home_section_three($wp_customize)
{
    $wp_customize->add_section('home_section_three', array(
        'title' => 'home section three'
    ));
    $wp_customize->add_setting('home_section_three_h1', array(
        'default' => 'text'
    ));
    $wp_customize->add_setting('home_section_three_image_1');
    $wp_customize->add_setting('home_section_three_image_2');
    $wp_customize->add_setting('home_section_three_image_3');
    $wp_customize->add_setting('home_section_three_image_4');
    $wp_customize->add_setting('home_section_three_image_5');
    $wp_customize->add_setting('home_section_three_image_6');

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'Title',
            [
                'label'      => 'Title',
                'section'    => 'home_section_three',
                'settings'   => 'home_section_three_h1',
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'First Image',
            [
                'label'      => 'First Image',
                'section'    => 'home_section_three',
                'settings'   => 'home_section_three_image_1',
                'width' => 750,
                'height' => 500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'Second Image',
            [
                'label'      => 'Second Image',
                'section'    => 'home_section_three',
                'settings'   => 'home_section_three_image_2',
                'width' => 750,
                'height' => 500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'Third Image',
            [
                'label'      => 'Third Image',
                'section'    => 'home_section_three',
                'settings'   => 'home_section_three_image_3',
                'width' => 750,
                'height' => 500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'Fourth Image',
            [
                'label'      => 'Fourth Image',
                'section'    => 'home_section_three',
                'settings'   => 'home_section_three_image_4',
                'width' => 750,
                'height' => 500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'five Image',
            [
                'label'      => 'five Image',
                'section'    => 'home_section_three',
                'settings'   => 'home_section_three_image_5',
                'width' => 750,
                'height' => 500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'six Image',
            [
                'label'      => 'six Image',
                'section'    => 'home_section_three',
                'settings'   => 'home_section_three_image_6',
                'width' => 750,
                'height' => 500
            ]
        )
    );
}

add_action('customize_register','home_section_three');



function teams( $wp_customize){
    $wp_customize->add_section('teams', array(
        'title'=> 'teams'
    ));

    $wp_customize->add_setting('teams_image_1');
    $wp_customize->add_setting('teams_image_2');
    $wp_customize->add_setting('teams_image_3');
    $wp_customize->add_setting('teams_image_4');


    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'teams1 Image',
            [
                'label'      => 'teams Image 1',
                'section'    => 'teams',
                'settings'   => 'teams_image_1',
                'width'=> 750 ,
                'height'=>500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'teams2 Image',
            [
                'label'      => 'Second Image',
                'section'    => 'teams',
                'settings'   => 'teams_image_2',
                'width'=> 750 ,
                'height'=>500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'teams3 Image',
            [
                'label'      => 'Third Image',
                'section'    => 'teams',
                'settings'   => 'teams_image_3',
                'width'=> 750 ,
                'height'=>500
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'teams4 Image',
            [
                'label'      => 'Fourth Image',
                'section'    => 'teams',
                'settings'   => 'teams_image_4',
                'width'=> 750 ,
                'height'=>500
            ]
        )
    );

}
add_action('customize_register','teams');





function footer_section_callout($wp_customize)
{
    $wp_customize->add_section('footer_section_callout', array(
        'title' => 'Footer'
    ));

    $wp_customize->add_setting('text1', array(
        'default' => 'Manager',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text1', array(
        'label' => 'Titre',
        'section' => 'footer_section_callout',
        'settings' => 'text1',
    )));

    $wp_customize->add_setting('text2', array(
        'default' => '+33 1 53 31 25 23',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text2', array(
        'label' => 'Numéro de téléphone',
        'section' => 'footer_section_callout',
        'settings' => 'text2',
    )));

    $wp_customize->add_setting('text3', array(
        'default' => 'info@esgi.com',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text3', array(
        'label' => 'Email',
        'section' => 'footer_section_callout',
        'settings' => 'text3',
    )));


    $wp_customize->add_setting('text4', array(
        'default' => 'CEO',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text4', array(
        'label' => 'Titre',
        'section' => 'footer_section_callout',
        'settings' => 'text4',
    )));

    $wp_customize->add_setting('text5', array(
        'default' => '+33 1 53 31 25 25',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text5', array(
        'label' => 'Numéro de téléphone',
        'section' => 'footer_section_callout',
        'settings' => 'text5',
    )));

    $wp_customize->add_setting('text6', array(
        'default' => 'ceo@company.com',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text6', array(
        'label' => 'Email',
        'section' => 'footer_section_callout',
        'settings' => 'text6',
    )));

    $wp_customize->add_setting('text7', array(
        'default' => '2022 Figma Template by ESGI',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text7', array(
        'label' => 'Texte',
        'section' => 'footer_section_callout',
        'settings' => 'text7',
    )));

    add_action('customize_register', 'home_section_three');

    function footer_section_callout($wp_customize)
    {
        $wp_customize->add_section('footer_section_callout', array(
            'title' => 'Footer'
        ));

        $wp_customize->add_setting('text1', array(
            'default' => 'Manager',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text1', array(
            'label' => 'Titre',
            'section' => 'footer_section_callout',
            'settings' => 'text1',
        )));

        $wp_customize->add_setting('text2', array(
            'default' => '+33 1 53 31 25 23',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text2', array(
            'label' => 'Numéro de téléphone',
            'section' => 'footer_section_callout',
            'settings' => 'text2',
        )));

        $wp_customize->add_setting('text3', array(
            'default' => 'info@esgi.com',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text3', array(
            'label' => 'Email',
            'section' => 'footer_section_callout',
            'settings' => 'text3',
        )));


        $wp_customize->add_setting('text4', array(
            'default' => 'CEO',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text4', array(
            'label' => 'Titre',
            'section' => 'footer_section_callout',
            'settings' => 'text4',
        )));

        $wp_customize->add_setting('text5', array(
            'default' => '+33 1 53 31 25 25',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text5', array(
            'label' => 'Numéro de téléphone',
            'section' => 'footer_section_callout',
            'settings' => 'text5',
        )));

        $wp_customize->add_setting('text6', array(
            'default' => 'ceo@company.com',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text6', array(
            'label' => 'Email',
            'section' => 'footer_section_callout',
            'settings' => 'text6',
        )));

        $wp_customize->add_setting('text7', array(
            'default' => '2022 Figma Template by ESGI',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'text7', array(
            'label' => 'Texte',
            'section' => 'footer_section_callout',
            'settings' => 'text7',
        )));
    }

    add_action('customize_register', 'footer_section_callout');

    function contact_esgi($wp_customize)
    {
        $wp_customize->add_section('contact_esgi', array(
            'title' => 'Contact'
        ));

        $wp_customize->add_setting('contact-header', array(
            'default' => 'Contacts.'
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contact-header-control', array(
            'label' => 'Phrase d accroche',
            'section' => 'contact_esgi',
            'settings' => 'contact-header'
        )));

        $wp_customize->add_setting('text1', array(
            'default' => 'Location',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contacttext1', array(
            'label' => 'Titre',
            'section' => 'contact_esgi',
            'settings' => 'contacttext1',
        )));

        $wp_customize->add_setting('contacttext2', array(
            'default' => '242 rue du faubourg saint atoinne',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contacttext2', array(
            'label' => 'Adresse',
            'section' => 'contact_esgi',
            'settings' => 'contacttext2',
        )));

        $wp_customize->add_setting('contacttext3', array(
            'default' => '75012 Paris FRANCE',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contacttext3', array(
            'label' => 'CP/Pays',
            'section' => 'contact_esgi',
            'settings' => 'contacttext3',
        )));

        $wp_customize->add_setting('contacttext4', array(
            'default' => 'Manager',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contacttext4', array(
            'label' => 'Titre',
            'section' => 'contact_esgi',
            'settings' => 'contacttext4',
        )));

        $wp_customize->add_setting('contacttext5', array(
            'default' => '+33 1 53 31 25 25',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contacttext5', array(
            'label' => 'Numéro de téléphone',
            'section' => 'contact_esgi',
            'settings' => 'contacttext5',
        )));

        $wp_customize->add_setting('contacttext6', array(
            'default' => 'info@company.com',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contacttext6', array(
            'label' => 'Email',
            'section' => 'contact_esgi',
            'settings' => 'contacttext6',
        )));

        $wp_customize->add_setting('contacttext7', array(
            'default' => 'CEO',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contacttext7', array(
            'label' => 'Titre',
            'section' => 'contact_esgi',
            'settings' => 'contacttext7',
        )));

        $wp_customize->add_setting('contacttext8', array(
            'default' => '+33 1 53 31 25 25',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contacttext8', array(
            'label' => 'Numéro de téléphone',
            'section' => 'contact_esgi',
            'settings' => 'contacttext8',
        )));

        $wp_customize->add_setting('contacttext9', array(
            'default' => 'ceo@company.com',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'contacttext9', array(
            'label' => 'Email',
            'section' => 'contact_esgi',
            'settings' => 'contacttext9',
        )));
    }

    add_action('customize_register', 'contact_esgi');
}
