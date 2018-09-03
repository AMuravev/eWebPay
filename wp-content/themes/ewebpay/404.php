<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eWebPay
 */

get_header();
?>

<?php
/** @var WP_Post $post */
$class_body = '';
$class_footer = '';
if (isset($post)) {
    $class_body = carbon_get_post_meta($post->ID, 'body_class');
}
?>

<body <?php body_class($class_body); ?>>

<div class="container">
  <div class="row mt-5">
    <div class="col-lg-2 mb-md-3 col-md-12 d-flex justify-content-center logo-top-container"><div class="logo-top mr-lg-auto"><a href="<?php echo home_url('/')?>">eWebPay</a></div></div>
    <div class="col-lg-10 col-md-12">
      <nav class="navbar navbar-light bg-faded rounded navbar-expand-sm">
        <div class="navbar-collapse">
            <?php wp_nav_menu( ([
                'theme-location' => 'menuHeader',
                'menu' => 'Header Menu',
                'container' => false,
                'menu_class' => 'navbar-nav ml-lg-auto',
            ]))?>
        </div>
      </nav>
    </div>
  </div>

  <p class="text-light display-2"><?php esc_html_e( 'It looks like nothing was found at this location.', 'ewebpay' ); ?></p>

</div>

<?php
if (isset($post)) {
    $class_footer = carbon_get_post_meta($post->ID, 'footer_class');
}
?>

<footer class="<?php echo $class_footer ?>">

<?php
get_footer();

