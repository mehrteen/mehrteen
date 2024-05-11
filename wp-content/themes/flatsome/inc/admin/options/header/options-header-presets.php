<?php 

$preset_url = get_template_directory_uri().'/inc/admin/options/header/img/';

Flatsome_Option::add_section( 'header-presets', array(
    'title' => __( 'پریست ها', 'flatsome-admin' ),
    'panel' => 'header',
    'priority' => '1',
    'description' => __( 'پریست های آماده را امتحان کرده و گزینه مورد نظرتان را جایگزین کنید.', 'flatsome-admin' ),
) );

Flatsome_Option::add_field( 'option', array(
    'type'        => 'preset',
    'settings'    => 'preset_demo',
    'label'       => __( 'پریست', 'kirki' ),
    'section'     => 'header-presets',
    'transport' => 'postMessage',
    'choices'     => get_flatsome_header_presets()
) );

Flatsome_Option::add_field( 'option', array(
    'type'        => 'custom',
    'settings' => 'select_preset',
    'section'     => 'header-presets',
    'default'     => '
    <div class="preset-click one-col">
    <h3 class="preset-title">پریست های آماده هدر</h3>
        <img data-preset="header-flatsomeeir" title="کپی رایت ایران فلتسام" src="'.$preset_url.'flatsomeeir.png"/>
	    <img data-preset="header-default" title="Header Default" src="'.$preset_url.'header-default.svg"/>
	    <img data-preset="header-default-center" title="Header Default Center" src="'.$preset_url.'header-default-center.svg"/>
        <img data-preset="header-default-dark" title="Header Default Dark" src="'.$preset_url.'header-default-dark.svg"/>
        <img data-preset="header-wide-nav-dark" title="Header Wide Nav Dark" src="'.$preset_url.'header-wide-nav-dark.svg"/>
        <img data-preset="header-wide-nav" title="Header Wide Nav" src="'.$preset_url.'header-wide-nav.svg"/>
        <img data-preset="header-simple" title="Header Simple" src="'.$preset_url.'header-simple.svg"/>
        <img data-preset="header-simple-center" title="Header Simple" src="'.$preset_url.'header-simple-center.svg"/>
        <img data-preset="header-simple-signup" title="Header Simple Signup" src="'.$preset_url.'header-simple-signup.svg"/>
        <img data-preset="header-simple-right-buttons" title="Header Simple Right Buttons" src="'.$preset_url.'header-simple-right-buttons.svg"/>
        <img data-preset="header-cart-top" title="Header Cart Top" src="'.$preset_url.'header-cart-top.svg"/>
    </div>
    ',
) );