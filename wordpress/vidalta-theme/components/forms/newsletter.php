<form id="newsletterSignup" action="">
  <div class="input-group">
    <input type="text" class="form-control form-control-lg" aria-label="Recipient's email" aria-describedby="newsletterSignup" placeholder="Enter your e-mail for updates">
    <button type="button" id="newsletterSignup" class="btn btn-lg btn-primary px-4">
      Sign up
    </button>
  </div>
  <!-- /.input-group -->
  <?php wp_nonce_field('newsletter_signup_nonce', '_nonce'); ?>
</form>
<!-- /#newsletterSignup -->