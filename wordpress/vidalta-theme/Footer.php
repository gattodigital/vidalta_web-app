<footer class="app-footer bg-dark">
  <div class="footer-content container-xxl py-5">
    <div class="row justify-content-between align-items-center">
      <div class="col-12 mb-3">

        <!-- Footer icon -->
        <div class="footer-brand text-center">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="img-fluid w-100" src="<?php echo get_template_directory_uri(); ?>/assets/brand/vidalta-logo_white.png" alt="<?php bloginfo('name'); ?> Logo, color" />
          </a>
          <div class="color-primary mt-2">
            <i>Vacation homes redifined. Experience the higher standard</i>
          </div>
        </div>
        <!-- /.footer-brand -->
      </div>
      <!-- /.col-12 mb-3 -->

      <div class="col-12">
        <!-- Footer links -->
        <ul class="footer-links nav justify-content-between border-top border-bottom border-secondary py-2">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'footer-menu',
            'container'       => '',
            'items_wrap'      => '%3$s',
            'menu_class'      => '',
            'fallback_cb'     => false,
            'depth'           => 1,
          ));
          ?>
        </ul>
        <!-- /.footer-links nav -->
      </div>
      <!-- /.col-12 -->

      <div class="col-auto mt-3">
        <!-- Newsletter subscription form -->
        <div class="footer-newsletter">
          <form id="newsletterSignup">
            <h5>Newsletter</h5>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter your e-mail" aria-label="Recipient's email" aria-describedby="newsletterSignup" />
              <button class="btn btn-primary" type="button" id="newsletterSignup">
                Sign up
              </button>
            </div>
          </form>
        </div>
        <!-- /.footer-newsletter -->
      </div>
      <!-- /.col-auto mt-3 -->

      <div class="col-auto mt-3">

        <!-- Social Links -->
        <div class="footer-social">
          <h5>Social</h5>
          <ul class="nav">
            <li class="icon-link social">
              <a class="facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="icon-link social">
              <a class="instagram" href="" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="icon-link social">
              <a class="linkedin" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>
        <!-- /.footer-social -->
      </div>
      <!-- /.col-auto mt-3 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.footer-content -->

  <!-- Footer copyright -->
  <div class="footer-copyright bg-black">
    <div class="container text-center small py-4">
      <p class="mb-0">
        © Copyright Vidalta 2023. All Rights Reserved.
        <span class="mx-2">|</span><a class="link-light" href="#sitemap">Sitemap</a>
        <span class="mx-2">|</span>
        <a class="link-light" href="#privacy-policy">Privacy</a>
        <span class="mx-2">|</span>
        <a class="link-light" href="#terms-and-conditions">Terms</a>
      </p>
    </div>
  </div>
  <!-- /.footer-copyright -->
</footer>
<!-- /.app-footer -->

</div>
<!-- /.web-app -->

<!-- 3rd Party scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>

<!-- Theme scripts -->
<script src="functions/utilities.js"></script>

<!-- WP Footer Hook -->
<?php wp_footer(); ?>
</body>

</html>