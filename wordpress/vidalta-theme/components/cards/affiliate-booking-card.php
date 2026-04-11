<?php
/**
 * Affiliate Booking Card
 *
 * Renders booking links for external affiliate partners.
 * Supports vacation-homes (Airbnb, VRBO, Booking.com) and
 * experiences (Viator, GetYourGuide).
 *
 * Pass $args['post_type'] = 'vacation-homes' | 'experiences'
 * and  $args['post_id']   = post ID
 */

$post_type = isset($args['post_type']) ? $args['post_type'] : 'vacation-homes';

if (isset($_GET['property_id'])) {
  $post_id = intval($_GET['property_id']);
} elseif (isset($_GET['experience_id'])) {
  $post_id = intval($_GET['experience_id']);
} else {
  $post_id = get_the_ID();
}

if ($post_type === 'experiences') {
  $price          = get_field('exp_price', $post_id);
  $price_label    = '/ person';
  $viator_url     = get_field('exp_affiliate_viator_url', $post_id);
  $gyg_url        = get_field('exp_affiliate_gyg_url', $post_id);
  $providers      = array();
  if ($viator_url) {
    $providers[] = array('name' => 'viator',       'url' => $viator_url,  'icon' => 'travel_explore', 'label' => 'Book on Viator');
  }
  if ($gyg_url) {
    $providers[] = array('name' => 'getyourguide', 'url' => $gyg_url,     'icon' => 'travel_explore', 'label' => 'Book on GetYourGuide');
  }
} else {
  $price          = get_field('vh_property_price', $post_id);
  $price_label    = '/ night';
  $airbnb_url     = get_field('vh_affiliate_airbnb_url', $post_id);
  $vrbo_url       = get_field('vh_affiliate_vrbo_url', $post_id);
  $booking_url    = get_field('vh_affiliate_booking_url', $post_id);
  $providers      = array();
  if ($airbnb_url) {
    $providers[] = array('name' => 'airbnb',   'url' => $airbnb_url,  'icon' => 'home',             'label' => 'Check on Airbnb');
  }
  if ($vrbo_url) {
    $providers[] = array('name' => 'vrbo',     'url' => $vrbo_url,    'icon' => 'villa',            'label' => 'Check on VRBO');
  }
  if ($booking_url) {
    $providers[] = array('name' => 'booking',  'url' => $booking_url, 'icon' => 'hotel',            'label' => 'Check on Booking.com');
  }
}
?>

<div class="card affiliate-booking-card text-center mb-4">
  <div class="card-header bg-light py-3">
    <h3 class="mb-0">
      <?php echo $post_type === 'experiences' ? 'Book this Experience' : 'Reserve your stay'; ?>
    </h3>
  </div>
  <div class="card-body">
    <?php if ($price) : ?>
      <h4 class="mb-4">
        <span class="fw-light">From</span> $<?php echo esc_html($price); ?><span class="support-text"><?php echo esc_html($price_label); ?></span>
      </h4>
    <?php endif; ?>

    <?php if (!empty($providers)) : ?>
      <p class="small color-neutral mb-3">Choose your preferred booking platform:</p>
      <div class="affiliate-providers d-grid gap-2">
        <?php foreach ($providers as $provider) :
          $tracked_url = vidalta_affiliate_url($provider['url'], $provider['name']);
        ?>
          <a href="<?php echo $tracked_url; ?>"
             class="btn btn-secondary_outline affiliate-btn"
             target="_blank"
             rel="noopener noreferrer sponsored">
            <i class="material-symbols-outlined me-1"><?php echo esc_attr($provider['icon']); ?></i>
            <?php echo esc_html($provider['label']); ?>
            <i class="fa-solid fa-arrow-up-right-from-square ms-1 small"></i>
          </a>
        <?php endforeach; ?>
      </div>
    <?php else : ?>
      <p class="small color-neutral mb-3">Contact us to check availability:</p>
      <a href="<?php echo home_url('/contact'); ?>" class="btn btn-lg btn-primary w-100">Check Availability</a>
    <?php endif; ?>

    <p class="affiliate-disclosure small color-neutral mt-3 mb-0">
      <i class="fa-solid fa-circle-info me-1"></i>
      <em>Links above may be affiliate links. We may earn a commission at no extra cost to you.</em>
    </p>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.affiliate-booking-card -->
