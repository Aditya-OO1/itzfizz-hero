<?php

if ( ! defined( 'ABSPATH' ) ) exit;


function itzfizz_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption' ] );
    add_theme_support( 'align-wide' );
    register_nav_menus( [ 'primary' => __( 'Primary Navigation', 'itzfizz-hero' ) ] );
}
add_action( 'after_setup_theme', 'itzfizz_setup' );


function itzfizz_enqueue() {
 
    wp_enqueue_style( 'itzfizz-fonts',
        'https://fonts.googleapis.com/css2?family=Anton&family=Syne:wght@400;600;700;800&family=JetBrains+Mono:wght@300;400;500&display=swap',
        [], null );

   
    wp_enqueue_style( 'bootstrap',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css',
        [], '5.3.3' );


    wp_enqueue_style( 'itzfizz-style',
        get_template_directory_uri() . '/assets/css/hero.css',
        [ 'bootstrap', 'itzfizz-fonts' ], '2.0.0' );


    wp_enqueue_script( 'bootstrap-js',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js',
        [], '5.3.3', true );

 
    wp_enqueue_script( 'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        [], '3.12.5', true );

    wp_enqueue_script( 'gsap-st',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        [ 'gsap' ], '3.12.5', true );

  
    wp_enqueue_script( 'itzfizz-js',
        get_template_directory_uri() . '/assets/js/hero.js',
        [ 'gsap', 'gsap-st' ], '2.0.0', true );

 
    wp_localize_script( 'itzfizz-js', 'itzfizzConfig', [
        'headline' => get_theme_mod( 'itzfizz_headline', 'W E L C O M E' ),
        'brand'    => get_theme_mod( 'itzfizz_brand',    'I T Z F I Z Z' ),
        'tagline'  => get_theme_mod( 'itzfizz_tagline',  'Performance · Digital · Motion' ),
        'stats'    => itzfizz_get_stats(),
    ] );
}
add_action( 'wp_enqueue_scripts', 'itzfizz_enqueue' );


function itzfizz_get_stats() {
    return [
        [ 'num' => get_theme_mod( 'itzfizz_stat1_num',   '58%' ), 'label' => get_theme_mod( 'itzfizz_stat1_label', 'Increase in pick-up point use'  ) ],
        [ 'num' => get_theme_mod( 'itzfizz_stat2_num',   '23%' ), 'label' => get_theme_mod( 'itzfizz_stat2_label', 'Decrease in customer calls'     ) ],
        [ 'num' => get_theme_mod( 'itzfizz_stat3_num',   '27%' ), 'label' => get_theme_mod( 'itzfizz_stat3_label', 'Growth in repeat orders'        ) ],
        [ 'num' => get_theme_mod( 'itzfizz_stat4_num',   '40%' ), 'label' => get_theme_mod( 'itzfizz_stat4_label', 'Faster delivery turnaround'     ) ],
    ];
}

function itzfizz_customizer( $wp_customize ) {
    $wp_customize->add_section( 'itzfizz_hero', [
        'title'    => __( 'Hero Section', 'itzfizz-hero' ),
        'priority' => 30,
    ] );

    $fields = [
        'itzfizz_headline'    => [ 'Headline Text',         'W E L C O M E'              ],
        'itzfizz_brand'       => [ 'Brand Name',            'I T Z F I Z Z'              ],
        'itzfizz_tagline'     => [ 'Tagline',               'Performance · Digital · Motion' ],
        'itzfizz_stat1_num'   => [ 'Stat 1 — Number',       '58%'                        ],
        'itzfizz_stat1_label' => [ 'Stat 1 — Label',        'Increase in pick-up point use'  ],
        'itzfizz_stat2_num'   => [ 'Stat 2 — Number',       '23%'                        ],
        'itzfizz_stat2_label' => [ 'Stat 2 — Label',        'Decrease in customer calls' ],
        'itzfizz_stat3_num'   => [ 'Stat 3 — Number',       '27%'                        ],
        'itzfizz_stat3_label' => [ 'Stat 3 — Label',        'Growth in repeat orders'    ],
        'itzfizz_stat4_num'   => [ 'Stat 4 — Number',       '40%'                        ],
        'itzfizz_stat4_label' => [ 'Stat 4 — Label',        'Faster delivery turnaround' ],
        'itzfizz_below_text'  => [ 'Below Fold Body Text',  'ITZFIZZ transforms how people move — blending performance engineering with digital-first thinking.' ],
    ];

    foreach ( $fields as $key => [ $label, $default ] ) {
        $wp_customize->add_setting( $key, [
            'default'           => $default,
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ] );
        $wp_customize->add_control( $key, [
            'label'   => $label,
            'section' => 'itzfizz_hero',
            'type'    => 'text',
        ] );
    }
}
add_action( 'customize_register', 'itzfizz_customizer' );
