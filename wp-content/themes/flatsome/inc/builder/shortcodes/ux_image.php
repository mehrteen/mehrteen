<?php

$position_options = require( __DIR__ . '/commons/position.php' );
$position_options['options']['position_x']['on_change'] = array(
  'recompile' => false,
  'class' => 'x{{ value }} md-x{{ value }} lg-x{{ value }}'
);
$position_options['options']['position_y']['on_change'] = array(
  'recompile' => false,
  'class' => 'y{{ value }} md-y{{ value }} lg-y{{ value }}'
);

add_ux_builder_shortcode( 'ux_image', array(
    'name' => __( 'تصویر', 'ux-builder'),
    'category' => __( 'Content' ),
    'toolbar_thumbnail' => 'id',
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'ux_image' ),
    'wrap' => false,

    'presets' => array(
        array(
            'name' => __( 'خالی' ),
            'content' => '[ux_image][/ux_image]',
        ),
    ),

    'options' => array(

        'id' => array(
            'type' => 'image',
            'heading' => __('تصویر'),
            'default' => ''
        ),
        'image_size' => array(
            'type' => 'select',
            'heading' => 'اندازه تصویر',
            'param_name' => 'image_size',
            'default' => 'large',
            'options' => flatsome_ux_builder_image_sizes(),
        ),
        'width' => array(
          'type' => 'slider',
          'heading' => 'عرض',
          'responsive' => true,
          'default' => '100',
          'unit' => '%',
          'max' => '100',
          'min' => '0',
          'on_change' => array(
            'style' => 'width: {{ value }}%'
          ),
        ),
        'height' => array(
              'type' => 'scrubfield',
              'heading' => __('ارتفاع'),
              'default' => '',
              'placeholder' => __('Auto'),
              'min' => 0,
              'max' => 1000,
              'step' => 1,
              'helpers' => require( __DIR__ . '/helpers/image-heights.php' ),
               'on_change' => array(
                    'selector' => '.image-cover',
                    'style' => 'padding-top: {{ value }}'
                )
        ),
        'margin' => array(
          'type' => 'margins',
          'heading' => __( 'فاصله' ),
          'value' => '',
          'full_width' => true,
          'min' => -100,
          'max' => 100,
          'step' => 1,
        ),
        'lightbox' => array(
            'type' => 'radio-buttons',
            'heading' => __('لایتباکس'),
            'default' => '',
            'options' => array(
                ''  => array( 'title' => 'خاموش'),
                'true'  => array( 'title' => 'روشن'),
            ),
        ),

        'lightbox_image_size' => array(
	        'type'       => 'select',
	        'heading'    => __( 'اندازه تصویر لایتباکس' ),
	        'conditions' => 'lightbox == "true"',
	        'default'    => 'large',
	        'options'    => flatsome_ux_builder_image_sizes(),
        ),

        'caption' => array(
            'type' => 'radio-buttons',
            'heading' => __('کپشن'),
            'default' => '',
            'options' => array(
                ''  => array( 'title' => 'خاموش'),
                'true'  => array( 'title' => 'روشن'),
            ),
        ),

		'lightbox_caption'    => array(
			'type'       => 'radio-buttons',
			'heading'    => __( 'کپشن روی لایتباکس' ),
			'conditions' => 'lightbox == "true"',
			'default'    => '',
			'options'    => array(
				''     => array( 'title' => 'خاموش' ),
				'true' => array( 'title' => 'روشن' ),
			),
		),

		'image_title' => array(
			'type'    => 'radio-buttons',
			'heading' => __( 'عنوان' ),
			'default' => '',
			'options' => array(
				''      => array( 'title' => 'خاموش' ),
				'true'  => array( 'title' => 'روشن' ),
			),
		),

        'image_overlay' => array(
            'type' => 'colorpicker',
            'heading' => __( 'روکش تصویر' ),
            'default' => '',
            'alpha' => true,
            'format' => 'rgb',
            'position' => 'bottom right',
            'on_change' => array(
              'selector' => '.overlay',
              'style' => 'background-color: {{ value }}',
            ),
         ),

        'image_hover' => array(
            'type' => 'select',
            'heading' => 'هاور تصویر',
            'default' => '',
            'options' => require( __DIR__ . '/values/image-hover.php' ),
            'on_change' => array(
                'selector' => '.img-inner',
                'class' => 'image-{{ value }}'
            )
        ),

        'image_hover_alt' => array(
            'type' => 'select',
            'heading' => 'هاور الت تصویر',
            'default' => '',
            'options' => require( __DIR__ . '/values/image-hover.php' ),
            'on_change' => array(
                'selector' => '.img-inner',
                'class' => 'image-{{ value }}'
            )
        ),

        'depth' => array(
            'type' => 'slider',
            'heading' => 'عمق',
            'default' => '0',
            'max' => '5',
            'min' => '0',
            'on_change' => array(
                'selector' => '.img-inner',
                'class' => 'box-shadow-{{ value }}'
            )
        ),

        'depth_hover' => array(
            'type' => 'slider',
            'heading' => 'عمق : هاور',
            'default' => '0',
            'max' => '5',
            'min' => '0',
            'on_change' => array(
                'selector' => '.img-inner',
                'class' => 'box-shadow-{{ value }}-hover'
            )
        ),
        'parallax' => array(
            'type' => 'slider',
            'heading' => 'پارالکس',
            'default' => '0',
            'max' => '10',
            'min' => '-10',
        ),
        'animate' => array(
            'type' => 'select',
            'heading' => 'Animate',
            'default' => 'none',
            'options' => require( __DIR__ . '/values/animate.php' ),
        ),
        'link_options' => require( __DIR__ . '/commons/links.php' ),
        'position_options' => $position_options,
        'advanced_options' => require( __DIR__ . '/commons/advanced.php'),
    ),
) );
