<section class="feature-section highlight-slider bg-secondary">
  <div class="container text-center py-5">
    <p class="header-support mb-4">What our guests are saying:</p>
    <div id="reviewSlider" class="carousel slide carousel-slider_text" data-bs-ride="carousel">
      <div class="carousel-inner">

        <?php
        $reviews = get_field('product_reviews');
        if ($reviews) {
          foreach ($reviews as $post) {
            setup_postdata($post);
        ?>
            <div class="carousel-item <?php if ($reviews[0] == $post) echo 'active'; ?>">
              <div class="h2 text-white">
                "<?php the_content(); ?>"
              </div>
            </div>
        <?php
          }
          wp_reset_postdata();
        } else {
          echo '<div class="carousel-item active"><div class="h2 text-white">No reviews available at the moment.</div></div>';
        }
        ?>

      </div>
      <div class="d-flex justify-content-between mb-3 mb-sm-0">
        <button type="button" class="carousel-control-prev position-relative" data-bs-target="#reviewSlider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button type="button" class="carousel-control-next position-relative" data-bs-target="#reviewSlider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <?php
    $cta_button_text = get_field('section_cta_text'); // replace with your ACF field name for the button text
    $cta_button_link = get_field('section_cta_link'); // replace with your ACF field name for the button link
    if ($cta_button_text && $cta_button_link) {
      echo '<a href="' . $cta_button_link . '" class="btn btn-lg btn-primary px-4">' . $cta_button_text . '</a>';
    } else {
      echo '<a href="#about-us" class="btn btn-lg btn-primary px-4">Learn more</a>'; // Default CTA if none set
    }
    ?>

  </div>
</section>