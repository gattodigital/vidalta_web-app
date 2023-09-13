<?php 
    if(isset($_GET['property_id'])) {
      $post_id = intval($_GET['property_id']);
    } else {
      $post_id = get_the_ID(); // this will get the ID of the current post
    }
    
    $price_per_night = get_field('vh_property_price', $post_id);
?>
<div class="card booking-card text-center mb-4">
  <div class="card-header bg-light py-3">
    <h3 class="mb-0">Reserve your stay</h3>
  </div>
  <div class="card-body">
  <h4><span class="fw-light">From</span> $<?php echo $price_per_night; ?>/night</h4>
    <div class="booking-card_field mb-3">
      <div>Select dates to check availability:</div>
      <div class="select-daterange input-group">
        <input type="text" id="dateRange" class="form-control" placeholder="Check-in | Check-out" autocomplete="off">
        <button class="input-group-text">
          <i class="material-symbols-outlined">
            calendar_month
          </i>
        </button>
      </div>
      <!-- /.select-daterange -->
    </div>
    <!-- /.booking-card_field -->
    <div class="booking-card_field mb-3">
    <div class="select-guests dropdown">
  <button type="button" id="selectGuests" class="form-control dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Guests
  </button>
  <ul class="dropdown-menu">
    <?php 
    if(isset($_GET['property_id'])) {
      $post_id = intval($_GET['property_id']);
    } else {
      $post_id = get_the_ID(); // this will get the ID of the current post
    }
    
    $max_guests = get_field('vh_property_max_guests', $post_id);
    for($i=1; $i<=$max_guests; $i++): ?>
      <li>
        <a class="dropdown-item" href="#"><?php echo $i; ?> <?php echo $i > 1 ? 'Adults' : 'Adult'; ?></a>
      </li>
    <?php endfor; ?>
  </ul>
</div>

    </div>
    <!-- /.booking-card_field -->
    <div class="booking-card_cta">
      <a href="#" class="btn btn-lg btn-primary w-100">Check Availability</a>
    </div>
    <!-- .booking-card_cta -->
  </div>
  <!-- /.card-body -->
</div>
<!-- /.booking-card -->