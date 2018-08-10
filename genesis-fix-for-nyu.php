<?php
/**
 * Plugin Name: Accessibility fix for Genesis (NYU Specific)
 * Plugin URI: https://github.com/KonainM/genesis-fix-for-nyu.git
 * Description: The plugin fixes accessibility issues with Genesis Framework and some of its child themes
 * Version: 2.0
 * Author: Konain Mukadam
 * Author URI: https://github.com/KonainM/
*/


/* Code Block for Accessible Menus*/
add_action( 'genesis_setup', 'wpacc_genesis_dropdown_scripts', 15 );
function wpacc_genesis_dropdown_scripts()
{
	wp_enqueue_script( 'wpacc-genesis-dropdown',   plugins_url( '/JS/wpacc-genesis-dropdown.js' , __FILE__ ), array( 'jquery' ), false, true );
	wp_register_style( 'wpacc-genesis-dropdown-css', plugins_url( '/CSS/wpacc-genesis-dropdown.css' , __FILE__ ) );
	wp_enqueue_style('wpacc-genesis-dropdown-css');
}

/*Code Block for color contrast fixes*/
add_action( 'genesis_before_header', 'agency_pro_css_fix');
function agency_pro_css_fix()
{
	$theme_name = wp_get_theme();
	if ($theme_name->get( 'TextDomain' ) === "agency-pro")
	{
		wp_register_style( 'agency-pro-fix', plugins_url( '/CSS/agency-pro-km.css' , __FILE__ ) );
		wp_enqueue_style( 'agency-pro-fix' );
	}
}

add_action( 'genesis_before_header', 'eleven40_pro_fix');
function eleven40_pro_fix()
{
	$theme_name = wp_get_theme();
	if ($theme_name->get( 'ThemeURI' ) === "http://my.studiopress.com/themes/eleven40/")
	{
		wp_register_style( 'eleven40-pro-fix', plugins_url( '/CSS/eleven40pro-km.css' , __FILE__ ) );
		wp_enqueue_style( 'eleven40-pro-fix' );
	}
}

add_action( 'genesis_before_header', 'executive_pro_fix');
function executive_pro_fix()
{
	$theme_name = wp_get_theme();
	if ($theme_name->get( 'TextDomain' ) === "executive-pro")
	{
		wp_register_style( 'executive-pro-fix', plugins_url( '/CSS/executive-pro-km.css' , __FILE__ ) );
		wp_enqueue_style( 'executive-pro-fix' );
	}
}

add_action( 'genesis_before_header', 'news_pro_fix');
function news_pro_fix()
{
	$theme_name = wp_get_theme();
	if ($theme_name->get( 'TextDomain' ) === "news-pro")
	{
		wp_register_style( 'news-pro-fix', plugins_url( '/CSS/news-pro-km.css' , __FILE__ ) );
		wp_enqueue_style( 'news-pro-fix' );
	}
}

add_action( 'brunch_pro_inline_styles', 'brunch_pro_css_fix');
function brunch_pro_css_fix()
{
	wp_register_style( 'brunch-pro-fix', plugins_url( '/CSS/brunch-pro-km.css' , __FILE__ ) );
	wp_enqueue_style( 'brunch-pro-fix' );
}

add_action( 'genesis_site_title', 'modern_portfolio_fix');
function modern_portfolio_fix()
{
	$theme_name = wp_get_theme();
	if ($theme_name->get( 'TextDomain' ) === "modern-portfolio-pro")
	{
		wp_register_style( 'modern_portfolio_fix-pro-fix', plugins_url( '/CSS/modern-portfolio-pro-km.css' , __FILE__ ) );
		wp_enqueue_style( 'modern_portfolio_fix-pro-fix' );
  }
}

/*Code Block for Studio Press Accessibility Fixes*/
add_theme_support( 'genesis-accessibility', array(
    '404-page',
    'headings',
    'rems',
    'search-form',
    'skip-links',
) );

//* Remove Skip Links from a template
remove_action ( 'genesis_before_header', 'genesis_skip_links', 5 );
//* Dequeue Skip Links Script
add_action( 'wp_enqueue_scripts','child_dequeue_skip_links' );
function child_dequeue_skip_links() {
	wp_dequeue_script( 'skip-links' );
}

add_action('genesis_setup', 'register_and_enqueue_css_fixes');
function register_and_enqueue_css_fixes()
{
	wp_register_style( 'screen-reader-text', plugins_url( '/CSS/screen-reader-text.css' , __FILE__ ) );
	wp_register_style( 'skip-links', plugins_url( '/CSS/skip-links.css' , __FILE__ ) );
	wp_enqueue_style( 'screen-reader-text' );
	wp_enqueue_style( 'skip-links' );
}

?>
