<?php

/*************
 * LOGO
 *************/

function flatsome_logo_name_customizer( $wp_customize ) {
	global $transport;
  $wp_customize->get_setting('blogname')->transport=$transport;
  $wp_customize->get_setting('blogdescription')->transport=$transport;
}
add_action( 'customize_register', 'flatsome_logo_name_customizer' );

Flatsome_Option::add_section( 'title_tagline', array(
	'title'       => __( 'لوگو', 'flatsome-admin' ),
	'panel'       => 'header',
	//'description' => __( 'This is the section description', 'flatsome-admin' ),
) );

Flatsome_Option::add_field( 'option',  array(
	'type'        => 'checkbox',
	'settings'     => 'site_logo_slogan',
	'label'       => __( 'نمایش زیر لوگو', 'flatsome-admin' ),
	'section'     => 'title_tagline',
	'transport' => $transport,
	'default'     => 0,
));

Flatsome_Option::add_field( 'option', array(
	'type'        => 'radio-image',
	'settings'     => 'logo_position',
	'label'       => __( 'موقعیت لوگو', 'flatsome-admin' ),
	'section'     => 'title_tagline',
	'transport' => 'postMessage',
	'default'     => 'left',
	'choices'     => array(
		'left' => $image_url . 'logo-left.svg',
		'center' => $image_url . 'logo-right.svg',
		//'vertical' => $image_url . 'logo-vertical.png'
	),
));

Flatsome_Option::add_field( 'option',  array(
	'type'        => 'image',
	'settings'     => 'site_logo',
	'label'       => __( 'تصویر لوگو', 'flatsome-admin' ),
	'section'     => 'title_tagline',
	'transport' => $transport,
	'default'     => get_template_directory_uri().'/assets/img/logo.png',
	'choices'   => array( 'save_as' => 'id' ),
));

Flatsome_Option::add_field( 'option',  array(
	'type'        => 'image',
	'settings'     => 'site_logo_dark',
	'label'       => __( 'تصویر لوگو - نسخه روشن', 'flatsome-admin' ),
	'description' => __( 'یک لوگو روشن آپلود کنید تا در سربرگ های تیره و یا بی رنگ استفاده شود.', 'flatsome-admin' ),
	'section'     => 'title_tagline',
	'transport' => $transport,
	'choices'   => array( 'save_as' => 'id' ),
));


Flatsome_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'logo_width',
	'label'       => __( 'عرض نگهدارنده لوگو', 'flatsome-admin' ),
	//'description' => __( 'This is the control description', 'flatsome-admin' ),
	//'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'flatsome-admin' ),
	'section'     => 'title_tagline',
	'default'     => 200,
	'choices'     => array(
		'min'  => 30,
		'max'  => 700,
		'step' => 1
	),
	'transport' => 'postMessage',
));

Flatsome_Option::add_field( 'option',  array(
  'type'        => 'text',
  'settings'     => 'logo_max_width',
  'label'       => __( 'بیشترین پهنای لوگو (px)', 'flatsome-admin' ),
  'section'     => 'title_tagline',
  'description' => __( 'حداکثر پهنای لوگو را در پیکسل تنظیم کنید. آن را خالی بگذارید تا به صورت خودکار درون ظرف لوگو جای بگیرد.', 'flatsome-admin' ),
  'transport' => 'postMessage',
));

Flatsome_Option::add_field( 'option',  array(
	'type'        => 'slider',
	'settings'     => 'logo_padding',
	'label'       => __( 'پدینگ لوگو', 'flatsome-admin' ),
	'section'     => 'title_tagline',
	'default'     => 0,
	'choices'     => array(
		'min'  => 0,
		'max'  => 30,
		'step' => 1
	),
	'transport' => 'postMessage',
));

Flatsome_Option::add_field( 'option', array(
	'type'        => 'link',
	'settings'    => 'logo_link',
	'label'       => __( 'لینک لوگو', 'flatsome' ),
	'description' => __( 'لینک سفارشی لوگو - در صورتی که خالی بزارید به صفحه اصلی لینک می شود', 'flatsome' ),
	'section'     => 'title_tagline',
	'default'     => '',
) );
