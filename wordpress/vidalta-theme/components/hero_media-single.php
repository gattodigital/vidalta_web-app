<section class="hero-media">
  <div class="media-cropped">
    <div class="cropped-media-wrapper">
      <img class="hero-image" src="<?php the_field('hero_image'); ?>" alt="{Destination Type} in {Destination Name}">
    </div>
  </div>
  <!-- /.media-cropped -->
  <div class="hero-overlay">
    <div class="container-lg">
      <div class="hero-text">
        <h1 class="fw-bold mb-3 h2"><?php the_field('hero_heading'); ?></h1>
      </div>
      <!-- /.hero-text -->
      <div class="hero-cta">
      <?php echo do_shortcode('[newsletters_subscribe form=3]'); ?>

      </div>
      <!-- /.hero-cta -->
    </div>
    <!-- /.container-lg -->
  </div>
  <!-- /.hero-overlay -->
</section>
<!-- /.hero-media-->
