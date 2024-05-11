<?php


Flatsome_Option::add_section( 'payment-icons', array(
	'title'       => __( 'آیکون های پرداخت', 'flatsome-admin' ),
	'description' => 'Note: This is not where you select payment methods. These are graphical icons that show which payment methods your shop supports. You can add these anywhere by using the shortcode [ux_payment_icons]',
	'panel'       => 'woocommerce',
) );

Flatsome_Option::add_field( 'option', array(
	'type'      => 'sortable',
	'settings'  => 'payment_icons',
	'label'     => __( 'آیکون های پرداخت', 'flatsome-admin' ),
	'section'   => 'payment-icons',
	'transport' => $transport,
	'multiple'  => 99,
	'default'   => array( 'visa', 'paypal', 'stripe', 'mastercard', 'cashondelivery' ),
	'choices'   => flatsome_get_payment_icons_list(),
) );

Flatsome_Option::add_field( 'option', array(
	'type'      => 'image',
	'settings'  => 'payment_icons_custom',
	'label'     => __( 'آیکون های سفارشی (جایگزین)', 'flatsome-admin' ),
	'section'   => 'payment-icons',
	'default'   => '',
	'transport' => $transport,
) );

Flatsome_Option::add_field( 'option', array(
	'type'        => 'multicheck',
	'settings'    => 'payment_icons_placement',
	'label'       => __( 'جایگاه', 'flatsome-admin' ),
	'description' => __( 'مشخص کنید که تمایل دارید این آیکون ها در کدام قسمت نمایش داده شوند.', 'flatsome-admin' ),
	'section'     => 'payment-icons',
	'default'     => '',
	'choices'     => array(
		'footer' => __( 'فوتر', 'flatsome-admin' ),
		'cart'   => __( 'سایدبار سبدخرید', 'flatsome-admin' ),
	),
) );
