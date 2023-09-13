<?php
if(isset($_GET['property_id'])) {
  $post_id = intval($_GET['property_id']);
} else {
  $post_id = get_the_ID();
}

// Retrieve field values
$check_in = get_field('vh_property_check_in', $post_id);
$check_out = get_field('vh_property_check_out', $post_id);
$quiet_hours = get_field('vh_property_quiet_hours', $post_id);
$max_guests = get_field('vh_property_max_guests', $post_id);
$pets = get_field('vh_property_pets', $post_id);
$parties = get_field('vh_property_parties', $post_id);
$payment = get_field('vh_property_payment', $post_id);
$cancellations = get_field('vh_property_cancellations', $post_id);
?>

<section class="product-description_guidelines pb-4 mb-4">
  <h3>Rental guidelines</h3>
  <div class="row">
    <div class="col-12 col-sm-6">
      <h4>House rules</h4>
      <ul>
        <?php if($check_in): ?>
          <li>Check-in: <?php echo esc_html($check_in); ?></li>
        <?php endif; ?>
        <?php if($check_out): ?>
          <li>Check out: <?php echo esc_html($check_out); ?></li>
        <?php endif; ?>
        <?php if($quiet_hours): ?>
          <li>Quiet hours: <?php echo esc_html($quiet_hours); ?></li>
        <?php endif; ?>
        <?php if($max_guests): ?>
          <li>Maximum guests: <?php echo esc_html($max_guests); ?></li>
        <?php endif; ?>
        <?php if($pets): ?>
          <li>Pets: <?php echo esc_html($pets); ?></li>
        <?php endif; ?>
        <?php if($parties): ?>
          <li>Parties: <?php echo esc_html($parties); ?></li>
        <?php endif; ?>
      </ul>
    </div>

    <div class="col-12 col-sm-6">
      <h4>Payments &amp; Cancellation</h4>
      <ul>
        <?php if($payment): ?>
          <li><?php echo esc_html($payment); ?></li>
        <?php endif; ?>
        <?php if($cancellations): ?>
          <li><?php echo esc_html(implode(', ', $cancellations)); ?></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>
<!-- /.product-detail_guidelines -->
