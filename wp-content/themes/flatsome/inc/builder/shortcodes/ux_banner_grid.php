<?php

add_ux_builder_shortcode( 'ux_banner_grid', array(
    'type' => 'container',
    'name' => __( 'گرید' ),
    'image' => '',
    'wrap' => false,
    'category' => __( 'Layout' ),
    'template' => flatsome_ux_builder_template( 'ux_banner_grid.html' ),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grid' ),
    'allow' => array( 'col_grid' ),
    'info' => '{{ label }}',
    'directives' => array( 'ux-banner-grid' ),
    'add_buttons' => array( 'bottom-right' ),
    'addable_spots' => array(),

    'scripts' => array(
        'flatsome-packery' => get_template_directory_uri() . '/assets/libs/packery.pkgd.min.js',
    ),

    // Override children data.
    'children' => array(
        'addable_spots' => array( 'center' ),
    ),

    'presets' => array(
        array(
        'name' => __( 'گرید 1' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-1' ),
        'content' => '[ux_banner_grid] [col_grid span="6"] [/col_grid] [col_grid span="3"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'گرید 2' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-2' ),
        'content' => '[ux_banner_grid] [col_grid height="2-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'گرید 3' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-3' ),
        'content' => '[ux_banner_grid] [col_grid span="6"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'گرید 4' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-4' ),
        'content' => '[ux_banner_grid] [col_grid span="9"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'گرید 5' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-5' ),
        'content' => '[ux_banner_grid] [col_grid span="3"] [/col_grid] [col_grid span="6"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'گرید 6' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-6' ),
        'content' => '[ux_banner_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="8"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'گرید 7' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-7' ),
        'content' => '[ux_banner_grid] [col_grid span="8" height="2-3"] [/col_grid] [col_grid span="4" height="1-3"] [/col_grid] [col_grid span="4" height="2-3"] [/col_grid] [col_grid span="8" height="1-3"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'گرید 8' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-8' ),
        'content' => '[ux_banner_grid] [col_grid span="6" height="2-3"] [/col_grid] [col_grid span="6" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="6" height="1-3"] [/col_grid] [/ux_banner_grid]'
        ),
        array(
        'name' => __( 'گرید 9' ),
        'thumbnail' =>  flatsome_ux_builder_thumbnail( 'grids/grid-9' ),
        'content' => '[ux_banner_grid] [col_grid span="6"] [/col_grid] [col_grid span="6" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [col_grid span="3" height="1-2"] [/col_grid] [/ux_banner_grid]'
        ),
    ),

    'options' => array(
          'label' => array(
            'type' => 'textfield',
            'heading' => 'لیبل آدمین',
            'placeholder' => 'Enter admin label...'
          ),
          'spacing' => array(
            'type' => 'radio-buttons',
            'heading' => 'فاصله',
            'full_width' => true,
            'default' => 'small',
            'options' => array(
                    'xsmall' => array( 'title' => 'XS' ),
                    'small' => array( 'title' => 'S' ),
                    'normal' => array( 'title' => 'نرمال'),
                    'large' => array( 'title' => 'L' ),
                    'collapse' => array( 'title' => 'Collapse' ),
             ),
          ),
         'height' => array(
            'type' => 'slider',
            'responsive' => true,
            'full_width' => true,
            'heading' => __('ارتفاع'),
            'debounce' => 300,
            'description' => __('ارتفاع بلندترین ستون رو انتخاب کنید'),
            'default' => 600,
            'responsive' => true,
            'min' => 0,
            'max' => 1000,
            'step' => 1,
        ),
        'width' => array(
        'type' => 'select',
        'heading' => 'عرض',
        'default' => '',
        'options' => array(
                '' => 'Container',
                'full-width' => 'Full Width',
            )
        ),

        'depth' => array(
            'type' => 'slider',
            'vertical' => true,
            'heading' => 'عمق ستون',
            'default' => 0,
            'max' => 5,
            'min' => 0,
        ),
        'depth_hover' => array(
            'type' => 'slider',
            'vertical' => true,
            'heading' => 'عمق ستون هاور',
            'default' => 0,
            'max' => 5,
            'min' => 0,
        ),
        'advanced_options' => require( __DIR__ . '/commons/advanced.php'),
    ),
) );
