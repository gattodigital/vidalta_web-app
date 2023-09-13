<?php
// Get field values
$hero_image = get_field('hero_image');
$hero_text_h1 = get_field('hero_text_h1');
$hero_text_support = get_field('hero_text_support');

// Get hero image URL and alt text
$hero_image_url = $hero_image ? $hero_image['url'] : 'assets/img/hero/pexels-photo-12902831.jpeg';
$hero_image_alt = $hero_image ? $hero_image['alt'] : 'Default Image Description';
?>

<section class="hero-spotlight <?php
                                if (is_front_page() || is_page('about-us')) {
                                  echo 'hero-spotlight_lg';
                                } elseif (is_page('our-properties')) {
                                  echo 'hero-spotlight_sm';
                                }
                                ?>">

  <div class="hero-image cropped-img">
    <div class="img-wrapper">
      <img src="<?php echo esc_url($hero_image_url); ?>" class="img-object" alt="<?php echo esc_attr($hero_image_alt); ?>">
    </div>
  </div>
  <!-- /.hero-image -->
  <div class="hero-overlay">
    <div class="container-lg">
      <div class="hero-text">
        <?php if ($hero_text_h1) : ?>
          <h1 class="mb-3"><?php echo esc_html($hero_text_h1); ?></h1>
        <?php endif; ?>

        <?php if (is_page('about-us')) : ?>
          <p class="header-support">
            <?php echo esc_html($hero_text_support); ?>
          </p>
        <?php endif; ?>
      </div>
      <!-- /.hero-text -->

      <?php if (is_front_page()) : ?>
        <div class="hero-cta hero-cta_newsletter">
          <?php get_template_part('components/forms/newsletter'); ?>
        </div>
        <!-- /.hero-cta_newsletter -->
      <?php endif; ?>

      <?php if (is_page('our-properties')) : ?>
        <div class="hero-cta hero-cta_searchbar">
          <?php get_template_part('components/forms/searchbar'); ?>
        </div>
      <?php endif; ?>



    </div>
    <!-- /.container-lg -->
  </div>
  <!-- /.hero-overlay -->
</section>