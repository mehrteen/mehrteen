<?php

add_ux_builder_shortcode( 'logo',
	array(
		'name'              => __( 'لوگو' ),
		'category'          => __( 'Content' ),
		'toolbar_thumbnail' => 'img',
		'thumbnail'         => flatsome_ux_builder_thumbnail( 'logo' ),
		'inline'            => true,
		'wrap'              => false,
		'presets'           => array(
			array(
				'name'    => __( 'پیشفرض' ),
				'content' => '[logo]',
			),
			array(
				'name'    => __( 'ردیف ساده' ),
				'content' => '[row] [col span__sm="12" align="center"] [logo] [logo] [logo] [logo] [logo] [logo] [/col] [/row]',
			),
			array(
				'name'    => __( 'گرید نقطه چین' ),
				'content' => '[row col_style="dashed" v_align="middle"] [col span="4" span__sm="12" align="center"] [logo img="9176" hover="overlay-add"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo hover="color"] [/col] [col span="4" span__sm="12" align="center"] [logo  hover="color"] [/col] [/row]',
			),
			array(
				'name'    => __( 'اسلایدر لوگو' ),
				'content' => '[row] [col span__sm="12"] [ux_slider freescroll="true" hide_nav="true" nav_pos="outside" nav_style="simple" nav_color="dark" bullets="false"] [logo hover="color"] [logo  hover="color"] [logo  hover="color"] [logo  hover="color"][logo  hover="color"][logo  hover="color"] [logo  hover="color"] [logo  hover="color"] [logo  hover="color"] [logo  hover="color"] [/ux_slider] [/col] [/row]',
			),
		),
		'options'           => array(
			'img'    => array(
				'type'    => 'image',
				'heading' => 'تصویر',
				'default' => '',
			),
			'image_size' => array(
				'type'       => 'select',
				'heading'    => 'اندازه تصویر',
				'param_name' => 'image_size',
				'default'    => 'original',
				'options'    => flatsome_ux_builder_image_sizes(),
			),
			'title'  => array(
				'type'    => 'textfield',
				'heading' => __( 'عنوان' ),
				'default' => '',
			),
			'hover'  => array(
				'type'      => 'select',
				'heading'   => __('هاور'),
				'default'   => '',
				'options'   => array(
					''          => 'هیچکدام',
					'zoom'      => 'زوم',
					'fade-in'   => 'ظاهر شدن',
					'glow'      => 'درخشش',
					'color'     => 'اضافه کردن رنگ',
					'grayscale' => 'خاکستری',
				),
				'on_change' => array(
					'selector' => '.ux-logo-link',
					'class'    => 'image-{{ value }}',
				),
			),
			'height' => array(
				'type'    => 'scrubfield',
				'heading' => 'ارتفاع',
				'default' => '50px',
				'max'     => 300,
				'min'     => 0,
			),
			'link_options' => require( __DIR__ . '/commons/links.php' ),
			'advanced_options' => require( __DIR__ . '/commons/advanced.php'),
		),
	)
);
