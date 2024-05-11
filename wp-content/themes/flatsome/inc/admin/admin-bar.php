<?php


// Option links
function flatsome_admin_bar_helper(){


global $wp_admin_bar;

$panel_url = get_admin_url().'admin.php?page=flatsome-panel';
$advanced_url = get_admin_url().'admin.php?page=optionsframework&tab=';
$permalink = get_permalink();
if(is_admin()) $permalink = get_home_url();

if(function_exists('is_shop') && is_shop()) {
  $permalink = get_permalink( wc_get_page_id( 'shop' ) );
}

$optionUrl_panel = get_admin_url().'customize.php?url='.$permalink.'&autofocus%5Bpanel%5D=';
$optionUrl_section = get_admin_url().'customize.php?url='.$permalink.'&autofocus%5Bsection%5D=';
$icon_style = 'font: normal 20px/1 \'dashicons\';-webkit-font-smoothing: antialiased;padding-right: 4px;margin-top:3px;';
$flatsome_icon = '<svg style="width:20px; margin-top:-4px; height:20px;vertical-align:middle;" width="184px" height="186px" viewBox="0 0 184 186" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <!-- Generator: Sketch 3.8.1 (29687) - http://www.bohemiancoding.com/sketch --> <title>Logo-white</title> <desc>Created with Sketch.</desc> <defs></defs> <g id="Logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Logo-white" fill="#FFFFFF"> <g id="Group"> <path d="M92.6963305,153.35517 L69.6726254,130.331465 L92.6963305,107.30776 L92.6963305,66.7055226 L49.3715069,110.030346 L32.472925,93.1317642 L92.6963305,32.9083587 L92.6963305,0.803652143 L0.106126393,93.3938562 L92.6963305,185.98406 L92.6963305,153.35517 Z" id="Combined-Shape"></path> </g> <g id="Group" opacity="0.502623601" transform="translate(136.800003, 93.000000) scale(-1, 1) translate(-136.800003, -93.000000) translate(90.300003, 0.000000)"> <path d="M92.6963305,153.35517 L69.6726254,130.331465 L92.6963305,107.30776 L92.6963305,66.7055226 L49.3715069,110.030346 L32.472925,93.1317642 L92.6963305,32.9083587 L92.6963305,0.803652143 L0.106126393,93.3938562 L92.6963305,185.98406 L92.6963305,153.35517 Z" opacity="0.387068563"></path> </g> </g> </g> </svg>';

$wp_admin_bar->add_menu( array(
 'id' => 'flatsome_panel',
 'title' => $flatsome_icon.' ایران فلتسام',
 'href' => $panel_url
));

$wp_admin_bar->add_menu( array(
 'id' => 'theme_options',
 'parent' => 'flatsome_panel',
 'title' => '<span class="dashicons dashicons-admin-generic" style="'.$icon_style.'"></span> سفارشی سازی',
 'href' => $optionUrl_panel
));

$wp_admin_bar->add_menu( array(
 'parent' => 'flatsome_panel',
 'id' => 'options_advanced',
 'title' => '<span class="dashicons dashicons-admin-tools" style="'.$icon_style.'"></span> تنظیمات',
 'href' =>  $advanced_url.''
));

$wp_admin_bar->add_menu( array(
 'parent' => 'flatsome_panel',
 'id' => 'flatsome_panel_license',
 'title' => 'لایسنس قالب',
 'href' => $panel_url
));

$wp_admin_bar->add_menu( array(
 'parent' => 'flatsome_panel',
 'id' => 'flatsome_panel_support',
 'title' => 'راهنمایی',
 'href' => $panel_url.'-support'
));

	$wp_admin_bar->add_menu( array(
		'parent' => 'flatsome_panel',
		'id'     => 'flatsome_panel_status',
		'title'  => 'وضعیت',
		'href'   => $panel_url . '-status',
	) );

$wp_admin_bar->add_menu( array(
 'parent' => 'flatsome_panel',
 'id' => 'flatsome_panel_changelog',
 'title' => 'تغییرات',
 'href' => $panel_url.'-changelog'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'flatsome_panel',
 'id' => 'flatsome_panel_setup_wizard',
 'title' => 'نصب خودکار',
 'href' => admin_url().'admin.php?page=flatsome-setup'
));

if(!flatsome_is_theme_enabled()){
  $wp_admin_bar->add_menu( array(
   'id' => 'flatsome-activate',
   'title' => '<span class="dashicons dashicons-unlock" style="'.$icon_style.'"></span>فعالسازی قالب',
   'href' => admin_url() . 'admin.php?page=flatsome-panel',
  ));
}

$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_header',
 'title' => '<span class="dashicons dashicons-arrow-up-alt dashicons-header" style="'.$icon_style.'"></span> سربرگ',
 'href' =>  $optionUrl_panel.'header'
));


$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_layout',
 'title' => '<span class="dashicons dashicons-editor-table" style="'.$icon_style.'"></span> چیدمان',
 'href' =>  $optionUrl_section.'layout'
));


$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_static_front_page',
 'title' => '<span class="dashicons dashicons-admin-home" style="'.$icon_style.'"></span> صفحه اصلی',
 'href' =>  $optionUrl_section.'static_front_page'
));


$wp_admin_bar->add_menu( array(
 'parent' => 'options_header',
 'id' => 'options_header_presets',
 'title' => 'از پیش آماده',
 'href' =>  $optionUrl_section.'header-presets'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_header',
 'id' => 'options_header_logo',
 'title' => 'لوگو و هویت سایت',
 'href' =>  $optionUrl_section.'title_tagline'
));


$wp_admin_bar->add_menu( array(
 'parent' => 'options_header',
 'id' => 'options_header_top',
 'title' => 'منوی بالا',
 'href' =>  $optionUrl_section.'top_bar'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_header',
 'id' => 'options_header_main',
 'title' => 'سربرگ اصلی',
 'href' =>  $optionUrl_section.'main_bar'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_header',
 'id' => 'options_header_bottom',
 'title' => ' پایین سربرگ',
 'href' =>  $optionUrl_section.'bottom_bar'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_header',
 'id' => 'options_header_mobile',
 'title' => ' سربرگ موبایل',
 'href' =>  $optionUrl_section.'header_mobile'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_header',
 'id' => 'options_header_sticky',
 'title' => ' سربرگ چسبنده',
 'href' =>  $optionUrl_section.'header_sticky'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_header',
 'id' => 'options_header_dropdown',
 'title' => 'سبک زیر منو',
 'href' =>  $optionUrl_section.'header_dropdown'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_style',
 'title' => '<span class="dashicons dashicons-admin-appearance" style="'.$icon_style.'"></span> سبک',
 'href' =>  $optionUrl_panel.'style'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_style',
 'id' => 'options_style_colors',
 'title' => 'رنگ',
 'href' =>  $optionUrl_section.'colors'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_style',
 'id' => 'options_style_global',
 'title' => 'سبک گلوبال',
 'href' =>  $optionUrl_section.'global-styles'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_style',
 'id' => 'options_style_type',
 'title' => 'تایپوگرافی',
 'href' =>  $optionUrl_section.'type'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_style',
 'id' => 'options_style_css',
 'title' => 'CSS سفارشی',
 'href' =>  $optionUrl_section.'custom-css'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_style',
 'id' => 'options_style_lightbox',
 'title' => 'لایت باکس تصویر',
 'href' =>  $optionUrl_section.'lightbox'
));

if(is_woocommerce_activated()) {

  $wp_admin_bar->add_menu( array(
   'parent' => 'theme_options',
   'id' => 'options_shop',
   'title' => '<span class="dashicons dashicons-cart" style="'.$icon_style.'"></span>&nbsp; فروشگاه (ووکامرس)',
   'href' =>  $optionUrl_panel.'woocommerce'
  ));

    $wp_admin_bar->add_menu( array(
     'parent' => 'options_shop',
     'id' => 'options_shop_store_notice',
     'title' => __( 'اعلان فروشگاه', 'woocommerce' ),
     'href' =>  $optionUrl_section.'woocommerce_store_notice'
    ));

  $wp_admin_bar->add_menu( array(
   'parent' => 'options_shop',
   'id' => 'options_shop_category_page',
   'title' => __( 'کاتالوگ محصول', 'woocommerce' ),
   'href' =>  $optionUrl_section.'woocommerce_product_catalog'
  ));

  $wp_admin_bar->add_menu( array(
   'parent' => 'options_shop',
   'id' => 'options_shop_product_page',
   'title' => 'صفحه مصحول',
   'href' =>  $optionUrl_section.'product-page'
  ));

  $wp_admin_bar->add_menu( array(
   'parent' => 'options_shop',
   'id' => 'options_shop_my_account',
   'title' => 'حساب کاربری',
   'href' =>  $optionUrl_section.'fl-my-account'
  ));

  $wp_admin_bar->add_menu( array(
   'parent' => 'options_shop',
   'id' => 'options_shop_payment_icons',
   'title' => 'آیکون های پرداخت',
   'href' =>  $optionUrl_section.'payment-icons'
  ));

    $wp_admin_bar->add_menu( array(
       'parent' => 'options_shop',
       'id' => 'options_shop_product_images',
       'title' => __( 'تصویر محصول', 'woocommerce' ),
       'href' =>  $optionUrl_section.'woocommerce_product_images'
      ));

  $wp_admin_bar->add_menu( array(
   'parent' => 'options_shop',
   'id' => 'options_shop_checkout',
   'title' => 'صورتحساب',
   'href' =>  $optionUrl_section.'woocommerce_checkout'
  ));

  $wp_admin_bar->add_menu( array(
   'parent' => 'options_shop',
   'id' => 'options_shop_cart',
   'title' => 'سبد خرید',
   'href' =>  $optionUrl_section.'cart-checkout'
  ));

  $wp_admin_bar->add_menu( array(
   'parent' => 'options_shop',
   'id' => 'options_advanced_woocommerce_2',
   'title' => 'پیشرفته',
   'href' =>  $advanced_url.'of-option-woocommerce'
  ));

}


$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_layout',
 'title' => '<span class="dashicons dashicons-editor-table" style="'.$icon_style.'"></span> طرح',
 'href' =>  $optionUrl_section.'layout'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_pages',
 'title' => '<span class="dashicons dashicons-admin-page" style="'.$icon_style.'"></span> صفحات',
 'href' =>  $optionUrl_section.'pages'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_blog',
 'title' => '<span class="dashicons dashicons-edit" style="'.$icon_style.'"></span> بلاگ',
 'href' =>  $optionUrl_panel.'blog'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_portfolio',
 'title' => '<span class="dashicons dashicons-portfolio" style="'.$icon_style.'"></span> نمونه کارها',
 'href' =>  $optionUrl_section.'fl-portfolio'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_footer',
 'title' => '<span class="dashicons dashicons-arrow-down-alt" style="'.$icon_style.'"></span> فوتر',
 'href' =>  $optionUrl_section.'footer'
));


$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_menus',
 'title' => '<span class="dashicons dashicons-menu " style="'.$icon_style.'"></span> فهرست',
 'href' =>  $optionUrl_panel.'nav_menus'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_menus',
 'id' => 'options_menus_backend',
 'title' => 'ویرایشگر بک اند',
 'href' =>  admin_url().'nav-menus.php'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_widgets',
 'title' => '<span class="dashicons dashicons-welcome-widgets-menus" style="'.$icon_style.'"></span> ابزارک ها',
 'href' =>  $optionUrl_panel.'widgets'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_widgets',
 'id' => 'options_widgets_backend',
 'title' => 'ویرایشگر بک اند',
 'href' =>  admin_url().'widgets.php'
));


$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_share',
 'title' => '<span class="dashicons dashicons-share" style="'.$icon_style.'"></span> اشتراک گذاری',
 'href' =>  $optionUrl_section.'share'
));

	$wp_admin_bar->add_menu( array(
		'parent' => 'theme_options',
		'id'     => 'options_notifications',
		'title'  => '<span class="dashicons dashicons-testimonial" style="' . $icon_style . '"></span> اعلانات',
		'href'   => $optionUrl_section . 'notifications',
	) );


$wp_admin_bar->add_menu( array(
 'parent' => 'theme_options',
 'id' => 'options_reset',
 'title' => '<span class="dashicons dashicons-admin-generic" style="'.$icon_style.'"></span> ریست',
 'href' =>  $optionUrl_section.'advanced'
));


$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_custom_scripts',
 'title' => 'تنظیمات عمومی',
 'href' =>  $advanced_url.'of-option-globalsettings'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_custom_css',
 'title' => 'کد css سفارشی',
 'href' =>  $advanced_url.'of-option-customcss'
));


$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_performance',
 'title' => 'عملکرد',
 'href' =>  $advanced_url.'of-option-performance'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_site_loader',
 'title' => 'لودر سایت',
 'href' =>  $advanced_url.'of-option-siteloader'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_site_search',
 'title' => 'جستجوی سایت',
 'href' =>  $advanced_url.'of-option-sitesearch'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_instagram_api',
 'title' => 'اینستاگرام',
 'href' =>  $advanced_url.'of-option-instagram'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_google_apis',
 'title' => 'api گوگل',
 'href' =>  $advanced_url.'of-option-googleapis'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_maintenance',
 'title' => 'حالت تعمیرات',
 'href' =>  $advanced_url.'of-option-maintenancemode'
));

$wp_admin_bar->add_menu( array(
	'parent' => 'options_advanced',
	'id'     => 'options_advanced_404',
	'title'  => 'صفحه 404',
	'href'   => $advanced_url . 'of-option-404page',
) );

$wp_admin_bar->add_menu( array(
  'parent' => 'options_advanced',
  'id' => 'options_advanced_woocommerce',
  'title' => 'ووکامرس',
  'href' =>  $advanced_url.'of-option-woocommerce'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_catalog_mode',
 'title' => 'حالت کاتالوگ',
 'href' =>  $advanced_url.'of-option-catalogmode'
));

$wp_admin_bar->add_menu( array(
	'parent' => 'options_advanced',
	'id' => 'options_advanced_infinite_scroll',
	'title' => 'اسکرول بی نهایت',
	'href' =>  $advanced_url.'of-option-infinitescroll'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_portfolio',
 'title' => 'نمونه کارها',
 'href' =>  $advanced_url.'of-option-portfolio'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_mobile',
 'title' => 'موبایل',
 'href' =>  $advanced_url.'of-option-mobile'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_integrations',
 'title' => 'ادغام',
 'href' =>  $advanced_url.'of-option-integrations'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_updates',
 'title' => 'بروزرسانی ها',
 'href' =>  $advanced_url.'of-option-updates'
));

$wp_admin_bar->add_menu( array(
 'parent' => 'options_advanced',
 'id' => 'options_advanced_backup',
 'title' => 'بک آپ / درون ریزی',
 'href' =>  $advanced_url.'of-option-backupandimport'
));

// HELPERS


if(is_category() || is_home()){
	$wp_admin_bar->add_menu( array(
	       'parent' => 'customize',
	       'id' => 'admin_bar_helper',
	       'title' => 'طرح وبلاگ',
 		    'href' =>  $optionUrl_panel.'blog'
	));
}

if(is_woocommerce_activated()) {

  if(is_cart() ){
     $wp_admin_bar->add_menu( array(
         'parent' => 'customize',
         'id' => 'admin_bar_helper',
         'title' => 'طرح سبد خرید',
 		 'href' =>  $optionUrl_section.'cart-checkout'
     ));
  }

  if(is_checkout()){
     $wp_admin_bar->add_menu( array(
         'parent' => 'customize',
         'id' => 'admin_bar_helper',
         'title' => 'طرح تسویه حساب',
     'href' =>  $optionUrl_section.'woocommerce_checkout'
     ));
  }

  if(is_product()){
         $wp_admin_bar->add_menu( array(
             'parent' => 'customize',
             'id' => 'admin_bar_helper',
             'title' => __('برگه محصولات','woocommerce'),
 			 'href' =>  $optionUrl_section.'product-page'
         ));
  }


    if(is_account_page()){
         $wp_admin_bar->add_menu( array(
             'parent' => 'customize',
             'id' => 'admin_bar_helper',
             'title' => 'برگه حساب من',
 			 'href' =>  $optionUrl_section.'fl-my-account'
         ));
     }

      if(is_shop() || is_product_category()){
          $wp_admin_bar->add_menu( array(
             'parent' => 'customize',
             'id' => 'admin_bar_helper_flatsome',
             'title' => __('کاتالوگ محصولات','woocommerce'),
 			'href' =>  $optionUrl_section.'woocommerce_product_catalog'
         ));
  	}

}

}
add_action( 'admin_bar_menu', 'flatsome_admin_bar_helper' , 35);
