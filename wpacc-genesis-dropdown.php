<?php
/**
 * Plugin Name: Accessibility fix for Genesis (NYU Specific)
 * Plugin URI: https://github.com/KonainM/accessible-menus-genesis-2.2-.git
 * Description: The plugin fixes accessibility issues with Genesis Framework and some of its child themes
 * Version: 1.2
 * Author: Konain Mukadam
 * Author URI: https://github.com/KonainM/
*/


add_action( 'wp_enqueue_scripts', 'wpacc_genesis_dropdown_scripts' );
function wpacc_genesis_dropdown_scripts()
{
	$my_theme = wp_get_theme();
	if ($my_theme->get( 'Template' ) === "genesis")
	{
		wp_enqueue_script( 'wpacc-genesis-dropdown',   plugins_url( '/wpacc-genesis-dropdown.js' , __FILE__ ), array( 'jquery' ), false, true );
		wp_register_style( 'wpacc-genesis-dropdown-css', plugins_url( '/wpacc-genesis-dropdown.css' , __FILE__ ) );
		wp_enqueue_style('wpacc-genesis-dropdown-css');
	}
}
function register_css()
{
	$theme_name = wp_get_theme();
	if ($theme_name->get( 'TextDomain' ) === "agency-pro")
	{
		wp_register_style( 'agency-pro-fix', plugins_url( '/CSS/agency-pro-km.css' , __FILE__ ) );
	}
	elseif ($theme_name->get( 'Description' ) === "This is the Brunch Pro child theme created for the Genesis Framework.")
	{
		wp_register_style( 'brunch-pro-fix', plugins_url( '/CSS/brunch-pro-km.css' , __FILE__ ) );
	}
	elseif ($theme_name->get( 'ThemeURI' ) === "http://my.studiopress.com/themes/eleven40/")
	{
		wp_register_style( 'eleven40-pro-fix', plugins_url( '/CSS/eleven40pro-km.css' , __FILE__ ) );
  }
	elseif ($theme_name->get( 'TextDomain' ) === "executive-pro")
	{
		wp_register_style( 'executive-pro-fix', plugins_url( '/CSS/executive-pro-km.css' , __FILE__ ) );
	}
	elseif ($theme_name->get( 'TextDomain' ) === "modern-portfolio-pro")
	{
		wp_register_style( 'modern-portfolio-pro-fix', plugins_url( '/CSS/modern-portfolio-pro-km.css' , __FILE__ ) );
	}
	elseif ($theme_name->get( 'TextDomain' ) === "news-pro")
	{
		wp_register_style( 'news-pro-fix', plugins_url( '/CSS/news-pro-km.css' , __FILE__ ) );
  }
	elseif ($theme_name->get( 'Description' ) === "Simply is a very modern theme following the design trends set by the top bloggers.")
	{
		wp_register_style( 'simply-pro-fix', plugins_url( '/CSS/simply-pro-km.css' , __FILE__ ) );
	}
}
add_action( 'init', 'register_css' );
function enque_css()
{
	$theme_name2 = wp_get_theme();
	if ($theme_name2->get( 'TextDomain' ) === "agency-pro")
	{
		wp_enqueue_style( 'agency-pro-fix' );
	}
	elseif ($theme_name2->get( 'Description' ) === "This is the Brunch Pro child theme created for the Genesis Framework.")
	{
		wp_enqueue_style( 'brunch-pro-fix' );
	}
	elseif ($theme_name2->get( 'ThemeURI' ) === "http://my.studiopress.com/themes/eleven40/")
	{
		wp_enqueue_style( 'eleven40-pro-fix' );
  }
	elseif ($theme_name2->get( 'TextDomain' ) === "executive-pro")
	{
		wp_enqueue_style( 'executive-pro-fix' );
	}
	elseif ($theme_name2->get( 'TextDomain' ) === "modern-portfolio-pro")
	{
		wp_enqueue_style( 'modern-portfolio-pro-fix' );
	}
	elseif ($theme_name2->get( 'TextDomain' ) === "news-pro")
	{
		wp_enqueue_style( 'news-pro-fix' );
  }
	elseif ($theme_name2->get( 'Description' ) === "Simply is a very modern theme following the design trends set by the top bloggers.")
	{
		wp_enqueue_style( 'simply-pro-fix' );
	}
}
add_action( 'wp_enqueue_scripts', 'enque_css' );

?>
