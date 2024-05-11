<?php
/**
 * Registers the Lottie animation element in UX Builder.
 *
 * @package Flatsome
 */

add_ux_builder_shortcode( 'ux_lottie', array(
	'name'      => __( 'لاتی', 'flatsome' ),
	'category'  => __( 'Content', 'flatsome' ),
	'thumbnail' => flatsome_ux_builder_thumbnail( 'ux_lottie' ),
	'template'  => flatsome_ux_builder_template( 'ux_lottie.html' ),
	'wrap'      => false,
	'options'   => array(
		'path'             => array(
			'type'        => 'file',
			'heading'     => __( 'لینک انیمیشن لاتی', 'flatsome' ),
			'placeholder' => __( 'لینک فایل لاتی را اینجا وارد کنید', 'flatsome' ),
			'full_width'  => true,
			'mime_types'  => array( 'application/json', 'text/plain' ),
			'default'     => '',
		),
		'settings_options' => array(
			'type'    => 'group',
			'heading' => __( 'تنظیمات', 'flatsome' ),
			'options' => array(
				'loop'             => array(
					'type'    => 'checkbox',
					'heading' => __( 'لوپ', 'flatsome' ),
					'default' => 'true',
				),
				'autoplay'         => array(
					'type'    => 'checkbox',
					'heading' => __( 'نمایش خودکار', 'flatsome' ),
					'default' => 'true',
				),
				'trigger'          => array(
					'type'       => 'select',
					'heading'    => __( 'تریگر', 'flatsome' ),
					'conditions' => 'autoplay != "true"',
					'default'    => '',
					'options'    => array(
						''       => 'هیچکدام',
						'hover'  => 'با هاور',
						'click'  => 'با کلیک',
						'scroll' => 'با اسکرول',
					),
				),
				'mouseout'         => array(
					'type'       => 'select',
					'heading'    => __( 'بیرون اوردن ماوس', 'flatsome' ),
					'conditions' => 'autoplay != "true" && trigger == "hover"',
					'default'    => '',
					'options'    => array(
						''        => 'استپ خوردن',
						'reverse' => 'برعکس',
					),
				),
				'speed'              => array(
					'type'       => 'slider',
					'heading'    => __( 'سرعت', 'flatsome' ),
					'conditions' => 'autoplay == "true" || trigger == "hover" || trigger == "click"',
					'default'    => '1',
					'min'        => '0',
					'max'        => '5',
					'step'       => '0.1',
				),
				'reverse'            => array(
					'type'       => 'checkbox',
					'heading'    => __( 'برعکس شدن', 'flatsome' ),
					'conditions' => 'autoplay == "true" || trigger == "hover" || trigger == "click"',
					'default'    => 'false',
				),
				'scroll_action_type' => array(
					'type'       => 'radio-buttons',
					'heading'    => __( 'نوع عمل پیمایش', 'flatsome' ),
					'full_width' => true,
					'conditions' => 'autoplay != "true" && trigger == "scroll"',
					'default'    => 'seek',
					'options'    => array(
						'seek'     => array( 'title' => 'گردش' ),
						'play'     => array( 'title' => 'پلی کردن' ),
						'playOnce' => array( 'title' => 'یک بار پلی کردن' ),
					),
				),
				'visibility_start'   => array(
					'type'        => 'slider',
					'heading'     => __( 'زمان دیده شدن', 'flatsome' ),
					'full_width'  => true,
					'description' => 'Start in relation to the viewport',
					'conditions'  => 'autoplay != "true" && trigger == "scroll"',
					'default'     => '0',
					'min'         => '0',
					'max'         => '100',
					'step'        => '1',
					'unit'        => '%',
				),
				'visibility_end'     => array(
					'type'        => 'slider',
					'heading'     => __( 'Visibility end', 'flatsome' ),
					'full_width'  => true,
					'description' => 'Finish in relation to the viewport',
					'conditions'  => 'autoplay != "true" && trigger == "scroll"',
					'default'     => '100',
					'min'         => '0',
					'max'         => '100',
					'step'        => '1',
					'unit'        => '%',
				),
				'start'              => array(
					'type'       => 'slider',
					'heading'    => __( 'Frame start', 'flatsome' ),
					'full_width' => true,
					'default'    => '0',
					'min'        => '0',
					'max'        => '100',
					'step'       => '1',
					'unit'       => '%',
				),
				'end'                => array(
					'type'       => 'slider',
					'heading'    => __( 'Frame end', 'flatsome' ),
					'full_width' => true,
					'default'    => '100',
					'min'        => '0',
					'max'        => '100',
					'step'       => '1',
					'unit'       => '%',
				),
				'controls'           => array(
					'type'    => 'checkbox',
					'heading' => __( 'کنترل ها', 'flatsome' ),
					'default' => 'false',
				),
			),
		),
		'layout_options'   => array(
			'type'    => 'group',
			'heading' => __( 'طرح', 'flatsome' ),
			'options' => array(
				'width'   => array(
					'type'       => 'scrubfield',
					'heading'    => __( 'عرض', 'flatsome' ),
					'responsive' => true,
					'default'    => '100%',
					'min'        => '0',
				),
				'height'  => array(
					'type'       => 'scrubfield',
					'heading'    => __( 'ارتفاع', 'flatsome' ),
					'responsive' => true,
					'default'    => '300px',
					'min'        => '0',
				),
				'padding' => array(
					'type'       => 'margins',
					'heading'    => __( 'پدینگ', 'flatsome' ),
					'full_width' => true,
					'responsive' => true,
					'min'        => 0,
					'step'       => 1,
				),
				'margin'  => array(
					'type'       => 'margins',
					'heading'    => __( 'مارجین', 'flatsome' ),
					'full_width' => true,
					'responsive' => true,
					'step'       => 1,
				),
			),
		),
		'link_options'     => require __DIR__ . '/commons/links.php',
		'advanced_options' => require __DIR__ . '/commons/advanced.php',
	),
) );