<?php
// Getting the ACF fields for this experience
$exp_title        = get_field('exp_title');
$exp_location     = get_field('exp_location');
$exp_img          = get_field('exp_img');
$exp_summary      = get_field('exp_summary');
$exp_duration     = get_field('exp_duration');
$exp_group_size   = get_field('exp_group_size');
$exp_price        = get_field('exp_price');
$exp_category     = get_field('exp_category');
$exp_rating       = get_field('exp_rating');
$exp_review_count = get_field('exp_review_count');
$exp_link         = home_url('/experience-details?experience_id=') . get_the_ID();
?>

<style>
  .experience-card_list:last-of-type {
    margin-bottom: 0 !important;
  }
</style>
<div class="product-card product-card_list experience-card experience-card_list mb-4">
  <div class="row g-0">
    <div class="card-image cropped-img">
      <div class="img-wrapper">
        <img src="<?php echo esc_url($exp_img); ?>" alt="<?php echo esc_attr($exp_title); ?>" />
      </div>
      <?php if ($exp_category) : ?>
        <span class="product-badge badge-experience"><?php echo esc_html($exp_category); ?></span>
      <?php endif; ?>
    </div>
    <!-- /.card-image -->
    <div class="card-data">
      <div class="card-data_body">
        <a href="<?php echo esc_url($exp_link); ?>" class="product-card_link stretched-link">
          <h3 class="product-title"><?php echo esc_html($exp_title); ?></h3>
        </a>

        <div class="product-location">
          <div class="icon-note icon-note_sm">
            <i class="material-symbols-outlined">location_on</i>
            <?php echo esc_html($exp_location); ?>
          </div>
        </div>
        <!-- /.product-location -->
        <div class="product-description">
          <?php echo esc_html($exp_summary); ?>
        </div>
        <!-- /.product-description -->
        <div class="product-details">
          <?php if ($exp_duration) : ?>
            <div class="icon-note icon-note_sm">
              <i class="material-symbols-outlined">schedule</i>
              <span><?php echo esc_html($exp_duration); ?></span>
            </div>
          <?php endif; ?>
          <?php if ($exp_group_size) : ?>
            <div class="icon-note icon-note_sm">
              <i class="material-symbols-outlined">group</i>
              <span>Up to <?php echo esc_html($exp_group_size); ?> guests</span>
            </div>
          <?php endif; ?>
        </div>
        <!-- /.product-details -->
      </div>
      <!-- /.card-data_body -->
      <div class="card-data_action">
        <?php if ($exp_rating) : ?>
          <div class="product-rating">
            <div class="rating-stars">
              <?php
              $rating = intval($exp_rating);
              for ($i = 1; $i <= 5; $i++) {
                echo '<i class="material-symbols-outlined' . ($i <= $rating ? ' filled' : '') . '">grade</i>';
              }
              ?>
            </div>
            <?php if ($exp_review_count) : ?>
              <span class="support-text">(<?php echo esc_html($exp_review_count); ?>)</span>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <!-- /.product-rating -->
        <div class="product-price">
          <span class="support-text">From </span><span class="currency">$</span><?php echo esc_html($exp_price); ?>
          <span class="support-text">/ person</span>
        </div>
        <!-- /.product-price -->
        <div class="product-cta">
          <a href="<?php echo esc_url($exp_link); ?>" class="btn btn-secondary w-100 product-card_link stretched-link">View Experience</a>
        </div>
        <!-- /.product-cta -->
      </div>
      <!-- /.card-data_action -->
    </div>
    <!-- /.card-data -->
  </div>
  <!-- /.row.g-0 -->
</div>
<!-- /.experience-card_list -->
