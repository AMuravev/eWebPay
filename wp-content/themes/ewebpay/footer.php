<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eWebPay
 */

?>


  <div class="container">
    <div class="row footer-top">
      <div class="col-md-4">
        <div class="d-flex"><div class="logo-top">eWebPay</div></div>
        <p class="mt-4 mb-4">
          <?php
          $description = carbon_get_theme_option( 'crb_footer_description' );
          echo $description
          ?>
        </p>
      </div>
      <div class="col-md">
        <div class="row">
          <div class="col-sm-4 col-6">
            <h3>Services</h3>
            <?php wp_nav_menu( ([
                'theme-location' => 'menuFooter',
                'menu' => 'Footer Menu Service',
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto',
            ]))?>
          </div>
          <div class="col-sm-4 mt-sm-0 mt-4 col-12 order-last order-sm-0">
            <h3>Contact us</h3>
            <p class="mt-4 mb-4">
              <?php
              $contact_us = carbon_get_theme_option( 'crb_footer_contact_us' );
              echo wpautop($contact_us);
              ?>
            </p>
          </div>
          <div class="col-sm-4 col-6">
            <h3>Useful</h3>
            <?php wp_nav_menu( ([
                'theme-location' => 'menuFooter',
                'menu' => 'Footer Menu Useful',
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto',
            ]))?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row mt-3 pb-3 footer-bottom">
      <div class="col-md-6">Copyright 2018 © ewebpay.com | All Rights Reserved.</div>
      <div class="col-md-6 text-md-right">
        <a href="" class="go-on-top mr-3">Go on top</a>

        <?php
        $socials = carbon_get_theme_option( 'crb_footer_soc_block' );

        foreach ($socials as $social) {

        ?>
          <a href="<?php echo $social['link']?>" class="social text-center mr-2"><i class="<?php echo $social['icon']?>"></i></a>
        <?php
        }
        ?>

      </div>
    </div>
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>
