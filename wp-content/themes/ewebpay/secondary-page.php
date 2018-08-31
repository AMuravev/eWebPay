<?php
/*
Template Name: Secondary page
*/
?>

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

<body <?php body_class(); ?>>

    <div class="container">
        <div class="row mt-5">
            <div class="col d-flex logo-top-container"><div class="logo-top"><a href="/">eWebPay</a></div></div>
            <div class="col text-right">
                <nav class="navbar navbar-light bg-faded rounded navbar-expand-sm">
                    <div class="navbar-collapse">
                        <?php wp_nav_menu( ([
                            'theme-location' => 'menuHeader',
                            'menu' => 'Header Menu',
                            'container' => false,
                            'menu_class' => 'navbar-nav mr-auto',
                        ]))?>
                    </div>
                </nav>
            </div>
        </div>



        <?php
        while ( have_posts() ) :
            the_post();

            the_content();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </div>

    <footer class="footer sub-footer">

<?php
get_footer();

