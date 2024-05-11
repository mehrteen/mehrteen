<?php

$title_link_options            = require __DIR__ . '/commons/links.php';
$title_link_options['options'] = array_merge(
	array(
		'link_text' => array(
			'type'    => 'textfield',
			'heading' => 'Text',
			'default' => '',
		),
	),
	$title_link_options['options']
);

add_ux_builder_shortcode( 'title', array(
	'name'      => __( 'تیتر', 'ux-builder' ),
	'category'  => __( 'Content' ),
	'thumbnail' => flatsome_ux_builder_thumbnail( 'title' ),
	'template'  => flatsome_ux_builder_template( 'title.html' ),
	'info'      => '{{ text }}',
	'wrap'      => false,
	'options' => array(
		'style'            => array(
			'type'    => 'select',
			'heading' => 'استایل',
			'default' => 'normal',
			'options' => array(
				'normal'      => 'نرمال',
				'center'      => 'مرکز',
				'bold'        => 'برجسته چپ',
				'bold-center' => 'برجسته مرکز',
			),
		),
		'text'             => array(
			'type'       => 'textfield',
			'heading'    => 'عنوان',
			'default'    => 'لورم ایپسوم متن ساختگی...',
			'auto_focus' => true,
		),
		'tag_name'         => array(
			'type'    => 'select',
			'heading' => 'برچسب',
			'default' => 'h3',
			'options' => array(
				'h1' => 'H1',
				'h2' => 'H2',
				'h3' => 'H3',
				'h4' => 'H4',
			),
		),
		'color'            => array(
			'type'     => 'colorpicker',
			'heading'  => __( 'رنگ' ),
			'alpha'    => true,
			'format'   => 'rgb',
			'position' => 'bottom right',
		),
		'icon'             => array(
			'type'    => 'select',
			'heading' => 'Icon',
			'options' => require __DIR__ . '/values/icons.php',
		),
		'width'            => array(
			'type'    => 'scrubfield',
			'heading' => __( 'پهنا' ),
			'default' => '',
			'min'     => 0,
			'max'     => 1200,
			'step'    => 5,
		),
		'margin_top'       => array(
			'type'        => 'scrubfield',
			'heading'     => __( 'فاصله از بالا' ),
			'default'     => '',
			'placeholder' => __( '0px' ),
			'min'         => - 100,
			'max'         => 300,
			'step'        => 1,
		),
		'margin_bottom'    => array(
			'type'        => 'scrubfield',
			'heading'     => __( 'فاصله از پایین' ),
			'default'     => '',
			'placeholder' => __( '0px' ),
			'min'         => - 100,
			'max'         => 300,
			'step'        => 1,
		),
		'size'             => array(
			'type'    => 'slider',
			'heading' => __( 'اندازه' ),
			'default' => 100,
			'unit'    => '%',
			'min'     => 20,
			'max'     => 300,
			'step'    => 1,
		),
		'link_options'     => $title_link_options,
		'advanced_options' => require __DIR__ . '/commons/advanced.php',
	),
) );
