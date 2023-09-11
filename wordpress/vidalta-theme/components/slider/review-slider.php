<div id="reviewSlider" class="carousel slide carousel-slider_text" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        $reviews = get_field('product_reviews'); 
        if($reviews) {
          foreach($reviews as $post) {
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
        }
        else {
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
