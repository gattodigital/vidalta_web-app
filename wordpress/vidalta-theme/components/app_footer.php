

<footer class="app-footer bg-dark txt-light">
  <div class="container py-5">
    <div class="row justify-content-between align-items-center">
      <div class="col-12 mb-3">
        <div class="footer-brand text-center">
          <img class="img-fluid w-100" src="<?php the_field('footer_logo'); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" >
          <div class="txt-brand mt-2"><i><?php the_field('footer_slogan'); ?></i></div>
        </div>
        <!-- /.footer-brand -->
      </div>
      <div class="col-12">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => false,
            'menu_class' => 'footer-links nav justify-content-between border-top border-bottom border-secondary py-2',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker' => new Walker_Nav_Menu,
            'fallback_cb' => false,
            'add_li_class'    => 'nav-item', // Add class to <li> tags
            'add_link_class'  => 'nav-link link-light' // Add class to <a> tags
        ));
        ?>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.footer-wrapper -->
  <div class="footer-copyright bg-black">
    <div class="container text-center small py-4">
      <p class="mb-0">© Copyright <?php bloginfo( 'name' ); ?> <?php echo date("Y"); ?>. All Rights Reserved. <span class="mx-2">|</span><a class="link-light" href="">Sitemap</a> <span class="mx-2">|</span> <a class="link-light" href="">Privacy</a> <span class="mx-2">|</span> <a class="link-light" href="">Terms</a></p>
    </div>
  </div>
  <!-- /.footer-copyright -->
</footer>
<!-- /.app-footer -->
<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

