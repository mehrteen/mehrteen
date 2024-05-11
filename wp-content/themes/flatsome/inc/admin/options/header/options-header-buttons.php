<?php

Flatsome_Option::add_section( 'header_buttons',
	array(
		'title' => __( 'دکمه ها', 'flatsome-admin' ),
		'panel' => 'header',
	)
);

Flatsome_Option::add_field( '',
	array(
		'type'     => 'custom',
		'settings' => 'custom_title_button_1',
		'label'    => '',
		'section'  => 'header_buttons',
		'default'  => '<div class="options-title-divider">دکمه 1</div>',
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_button_1',
		'transport' => $transport,
		'default'   => 'Button 1',
		'label'     => __( 'متن', 'flatsome-admin' ),
		'section'   => 'header_buttons',
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'        => 'text',
		'settings'    => 'header_button_1_link',
		'transport'   => $transport,
		'default'     => '',
		'label'       => __( 'لینک', 'flatsome-admin' ),
		'section'     => 'header_buttons',
		'description' => $smart_links,
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'select',
		'settings'  => 'header_button_1_link_target',
		'transport' => $transport,
		'label'     => __( 'مقصد', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'default'   => '_self',
		'choices'   => array(
			'_self'  => __( 'پنجره فعلی', 'flatsome-admin' ),
			'_blank' => __( 'پنجره جدید', 'flatsome-admin' ),
		),
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'        => 'text',
		'settings'    => 'header_button_1_link_rel',
		'transport'   => $transport,
		'default'     => '',
		'label'       => __( 'Rel', 'flatsome-admin' ),
		'section'     => 'header_buttons',
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_button_1_radius',
		'transport' => $transport,
		'default'   => '99px',
		'label'     => __( 'شعاع', 'flatsome-admin' ),
		'section'   => 'header_buttons',
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_1_color',
		'transport' => $transport,
		'label'     => __( 'رنگ', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'default'   => 'primary',
		'choices'   => array(
			'plain'     => __( 'ساده', 'flatsome-admin' ),
			'primary'   => __( 'اولیه', 'flatsome-admin' ),
			'secondary' => __( 'ثانویه', 'flatsome-admin' ),
			'success'   => __( 'موفقیت', 'flatsome-admin' ),
			'alert'     => __( 'هشدار', 'flatsome-admin' ),
		),
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_1_style',
		'transport' => $transport,
		'label'     => __( 'استایل', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'choices'   => $button_styles,
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_1_size',
		'transport' => $transport,
		'label'     => __( 'اندازه', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'choices'   => $nav_sizes,
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'slider',
		'settings'  => 'header_button_1_depth',
		'label'     => __( 'عمق', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'default'   => 0,
		'choices'   => array(
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		),
		'transport' => $transport,
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'slider',
		'settings'  => 'header_button_1_depth_hover',
		'label'     => __( 'عمق : هاور', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'default'   => 0,
		'choices'   => array(
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		),
		'transport' => $transport,
	)
);

Flatsome_Option::add_field( '',
	array(
		'type'     => 'custom',
		'settings' => 'custom_title_button_2',
		'label'    => '',
		'section'  => 'header_buttons',
		'default'  => '<div class="options-title-divider">دکمه 2</div>',
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_button_2',
		'transport' => $transport,
		'default'   => 'Button 2',
		'label'     => __( 'متن', 'flatsome-admin' ),
		'section'   => 'header_buttons',
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'        => 'text',
		'settings'    => 'header_button_2_link',
		'transport'   => $transport,
		'default'     => '',
		'label'       => __( 'لینک', 'flatsome-admin' ),
		'section'     => 'header_buttons',
		'description' => $smart_links,
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'select',
		'settings'  => 'header_button_2_link_target',
		'transport' => $transport,
		'label'     => __( 'مقصد', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'default'   => '_self',
		'choices'   => array(
			'_self'  => __( 'پنجره فعلی', 'flatsome-admin' ),
			'_blank' => __( 'پنجره جدید', 'flatsome-admin' ),
		),
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'        => 'text',
		'settings'    => 'header_button_2_link_rel',
		'transport'   => $transport,
		'default'     => '',
		'label'       => __( 'Rel', 'flatsome-admin' ),
		'section'     => 'header_buttons',
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'text',
		'settings'  => 'header_button_2_radius',
		'transport' => $transport,
		'default'   => '99px',
		'label'     => __( 'شعاع', 'flatsome-admin' ),
		'section'   => 'header_buttons',
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_2_color',
		'transport' => $transport,
		'label'     => __( 'رنگ', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'default'   => 'secondary',
		'choices'   => array(
			'plain'     => __( 'ساده', 'flatsome-admin' ),
			'primary'   => __( 'اولیه', 'flatsome-admin' ),
			'secondary' => __( 'ثانویه', 'flatsome-admin' ),
			'success'   => __( 'موفقیت', 'flatsome-admin' ),
			'alert'     => __( 'هشدار', 'flatsome-admin' ),
		),
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_2_style',
		'transport' => $transport,
		'label'     => __( 'استایل', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'default'   => 'outline',
		'choices'   => $button_styles,
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'radio-buttonset',
		'settings'  => 'header_button_2_size',
		'transport' => $transport,
		'label'     => __( 'اندازه', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'choices'   => $nav_sizes,
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'slider',
		'settings'  => 'header_button_2_depth',
		'label'     => __( 'عمق', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'default'   => 0,
		'choices'   => array(
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		),
		'transport' => $transport,
	)
);

Flatsome_Option::add_field( 'option',
	array(
		'type'      => 'slider',
		'settings'  => 'header_button_2_depth_hover',
		'label'     => __( 'عمق : هاور', 'flatsome-admin' ),
		'section'   => 'header_buttons',
		'default'   => 0,
		'choices'   => array(
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		),
		'transport' => $transport,
	)
);

function flatsome_refresh_header_buttons_partials( WP_Customize_Manager $wp_customize ) {
	// Abort if selective refresh is not available.
	if ( ! isset( $wp_customize->selective_refresh ) ) {
		return;
	}

	$wp_customize->selective_refresh->add_partial( 'header-button-2',
		array(
			'selector'            => '.header-button-2',
			'container_inclusive' => true,
			'settings'            => array(
				'header_button_2',
				'header_button_2_radius',
				'header_button_2_link',
				'header_button_2_style',
				'header_button_2_color',
				'header_button_2_size',
				'header_button_2_depth',
				'header_button_2_depth_hover',
			),
			'render_callback'     => function () {
				get_template_part( 'template-parts/header/partials/element', 'button-2' );
			},
		)
	);

	$wp_customize->selective_refresh->add_partial( 'header-button-1',
		array(
			'selector'            => '.header-button-1',
			'container_inclusive' => true,
			'settings'            => array(
				'header_button_1',
				'header_button_1_radius',
				'header_button_1_link',
				'header_button_1_style',
				'header_button_1_color',
				'header_button_1_size',
				'header_button_1_depth',
				'header_button_1_depth_hover',
			),
			'render_callback'     => function () {
				get_template_part( 'template-parts/header/partials/element', 'button-1' );
			},
		)
	);

}

add_action( 'customize_register', 'flatsome_refresh_header_buttons_partials' );
