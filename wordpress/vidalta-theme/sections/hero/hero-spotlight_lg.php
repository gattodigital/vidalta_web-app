<?php
// Get field values
$hero_image = get_field('hero_image');
$hero_text_h1 = get_field('hero_text_h1');
$hero_text_support = get_field('hero_text_support'); 

// Get hero image URL and alt text
$hero_image_url = $hero_image ? $hero_image['url'] : 'assets/img/hero/pexels-photo-12902831.jpeg';
$hero_image_alt = $hero_image ? $hero_image['alt'] : 'Default Image Description';
?>

<section class="hero-spotlight hero-spotlight_lg">
  <div class="hero-image cropped-img">
    <div class="img-wrapper">
      <img src="<?php echo esc_url($hero_image_url); ?>" class="img-object" alt="<?php echo esc_attr($hero_image_alt); ?>">
    </div>
  </div>
  <!-- /.hero-image -->
  <div class="hero-overlay">
    <div class="container-lg">
      <div class="hero-text">
        <?php if ($hero_text_h1): ?>
          <h1 class="mb-3"><?php echo esc_html($hero_text_h1); ?></h1>
        <?php endif; ?>
        
        <?php if (is_page('about-us') && $hero_text_support): ?>
          <p class="header-support">
            <?php echo esc_html($hero_text_support); ?>
          </p>
        <?php endif; ?>
      </div>
      <!-- /.hero-text -->

      <?php if (is_page('home')): ?>
        <div class="hero-cta hero-cta_newsletter">
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
        </div>
        <!-- /.hero-cta_newsletter -->
      <?php endif; ?>

    </div>
    <!-- /.container-lg -->
  </div>
  <!-- /.hero-overlay -->
</section>
