<?php
/**
 * Experience detail – main description area (left column).
 */

if (isset($_GET['experience_id'])) {
  $post_id = intval($_GET['experience_id']);
} else {
  $post_id = get_the_ID();
}

$exp_title        = get_field('exp_title', $post_id);
$exp_location     = get_field('exp_location', $post_id);
$exp_duration     = get_field('exp_duration', $post_id);
$exp_group_size   = get_field('exp_group_size', $post_id);
$exp_category     = get_field('exp_category', $post_id);
$exp_rating       = get_field('exp_rating', $post_id);
$exp_review_count = get_field('exp_review_count', $post_id);
$exp_description  = get_field('exp_description', $post_id);
$exp_highlights   = get_field('exp_highlights', $post_id);
$exp_included     = get_field('exp_included', $post_id);
$exp_not_included = get_field('exp_not_included', $post_id);
$exp_itinerary    = get_field('exp_itinerary', $post_id);
?>

<!-- Experience Header -->
<section class="product-header mb-5">
  <h1 class="product-header_title">
    <?php echo $exp_title ? esc_html($exp_title) : 'Experience Details'; ?>
  </h1>
  <div class="product-header_specs">
    <div class="d-flex flex-wrap">
      <?php if ($exp_location) : ?>
        <div class="icon-note product-location">
          <i class="material-symbols-outlined">location_on</i>
          <?php echo esc_html($exp_location); ?>
        </div>
      <?php endif; ?>
      <?php if ($exp_duration) : ?>
        <div class="icon-note product-duration">
          <i class="material-symbols-outlined">schedule</i>
          <?php echo esc_html($exp_duration); ?>
        </div>
      <?php endif; ?>
      <?php if ($exp_group_size) : ?>
        <div class="icon-note product-group">
          <i class="material-symbols-outlined">group</i>
          <span>Up to <?php echo esc_html($exp_group_size); ?> guests</span>
        </div>
      <?php endif; ?>
      <?php if ($exp_category) : ?>
        <div class="icon-note product-category">
          <i class="material-symbols-outlined">category</i>
          <?php echo esc_html($exp_category); ?>
        </div>
      <?php endif; ?>
    </div>
    <?php if ($exp_rating) : ?>
      <div class="d-flex align-items-center mt-2">
        <div class="rating-stars me-2">
          <?php
          $rating = intval($exp_rating);
          for ($i = 1; $i <= 5; $i++) {
            echo '<i class="material-symbols-outlined' . ($i <= $rating ? ' filled' : '') . '">grade</i>';
          }
          ?>
        </div>
        <?php if ($exp_review_count) : ?>
          <span class="support-text"><?php echo esc_html($exp_review_count); ?> reviews</span>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
  <!-- /.product-header_specs -->
</section>
<!-- /.product-header -->

<!-- Experience Description -->
<div class="experience-description mb-5">
  <h2>About This Experience</h2>
  <?php if ($exp_description) : ?>
    <div class="smart-truncate truncate-6-lines">
      <?php echo wp_kses_post($exp_description); ?>
    </div>
  <?php else : ?>
    <p class="color-neutral">Description coming soon.</p>
  <?php endif; ?>
</div>
<!-- /.experience-description -->

<!-- Experience Highlights -->
<?php if ($exp_highlights) : ?>
  <div class="experience-highlights mb-5">
    <h2>Highlights</h2>
    <ul class="list-unstyled">
      <?php foreach ($exp_highlights as $highlight) : ?>
        <li class="icon-note mb-2">
          <i class="material-symbols-outlined" style="color:#a6805a;">check_circle</i>
          <?php echo esc_html($highlight['highlight_item']); ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
<!-- /.experience-highlights -->

<!-- What's Included -->
<?php if ($exp_included || $exp_not_included) : ?>
  <div class="experience-inclusions mb-5">
    <h2>What's Included</h2>
    <div class="row">
      <?php if ($exp_included) : ?>
        <div class="col-md-6">
          <h5 class="color-primary"><i class="material-symbols-outlined me-1">check_circle</i> Included</h5>
          <div><?php echo wp_kses_post($exp_included); ?></div>
        </div>
      <?php endif; ?>
      <?php if ($exp_not_included) : ?>
        <div class="col-md-6">
          <h5 class="color-neutral"><i class="material-symbols-outlined me-1">cancel</i> Not Included</h5>
          <div><?php echo wp_kses_post($exp_not_included); ?></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
<!-- /.experience-inclusions -->

<!-- Itinerary -->
<?php if ($exp_itinerary) : ?>
  <div class="experience-itinerary mb-5">
    <h2>Itinerary</h2>
    <?php echo wp_kses_post($exp_itinerary); ?>
  </div>
<?php endif; ?>
<!-- /.experience-itinerary -->
