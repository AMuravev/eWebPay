<?php
/**
 * eWebPay functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package eWebPay
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ewebpay_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ewebpay' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ewebpay' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ewebpay_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ewebpay_scripts() {

    wp_enqueue_script('jquery');

    wp_enqueue_style('ewebpay-style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_style('ewebpay-custom-style', get_template_directory_uri() . '/css/custom.css');

    wp_enqueue_style('ewebpay-font-style', get_template_directory_uri() . '/font/font.css');

    wp_enqueue_script('ewebpay-scripts', get_template_directory_uri() . '/js/customizer.js', array('jquery'), '20151215', true);


}
add_action( 'wp_enqueue_scripts', 'ewebpay_scripts' );

