<?php
// Getting the ACF fields directly
$vh_property_title = get_field('vh_property_title');
$vh_property_location = get_field('vh_property_location');
$vh_property_link = get_field('vh_property_link');
$vh_property_img = get_field('vh_property_img');
$vh_property_img_url = get_field('vh_property_img');
$vh_property_summary = get_field('vh_property_summary');
$vh_property_guests = get_field('vh_property_guests');
$vh_property_beds = get_field('vh_property_beds');
$vh_property_bathrooms = get_field('vh_property_bathrooms');
$vh_property_price = get_field('vh_property_price');

// Debug line to see what's being retrieved:
// var_dump(get_fields());
?>

<style>
  .product-card_list:last-of-type {
    margin-bottom: 0 !important;
  }
</style>
<div class="product-card product-card_list mb-4">
  <div class="row g-0">
    <div class="card-image cropped-img">
      <div class="img-wrapper">
        <img src="<?php echo esc_url($vh_property_img_url); ?>" alt="<?php echo esc_attr($vh_property_title); ?>" />
      </div>
    </div>
    <!-- /.card-image -->
    <div class="card-data">
      <div class="card-data_body">
        <a href="<?php echo home_url('/property-details?property_id=') . get_the_ID(); ?>" class="product-card_link stretched-link">
          <h3 class="product-title"><?php echo esc_html($vh_property_title); ?></h3>
        </a>


        <div class="product-location">
          <div class="icon-note icon-note_sm">
            <i class="material-symbols-outlined">location_on</i>
            <?php echo esc_html($vh_property_location); ?>
          </div>
        </div>
        <!-- /.product-location -->
        <div class="product-description">
          <?php echo esc_html($vh_property_summary); ?>
        </div>
        <!-- /.product-description -->
        <div class="product-details">
          <div class="icon-note icon-note_sm">
            <i class="material-symbols-outlined">people_alt</i>
            <span><?php echo esc_html($vh_property_guests); ?> guests </span>
          </div>
          <div class="icon-note icon-note_sm">
            <i class="material-symbols-outlined">bed</i>
            <span><?php echo esc_html($vh_property_beds); ?> beds</span>
          </div>
          <div class="icon-note icon-note_sm">
            <i class="material-symbols-outlined">bathtub</i>
            <span><?php echo esc_html($vh_property_bathrooms); ?> baths</span>
          </div>
        </div>
        <!-- /.product-details -->
      </div>
      <!-- /.card-data_body -->
      <div class="card-data_action">
        <div class="product-rating">
          <div class="rating-stars">
            <i class="material-symbols-outlined">grade</i>
            <i class="material-symbols-outlined">grade</i>
            <i class="material-symbols-outlined">grade</i>
            <i class="material-symbols-outlined">grade</i>
            <i class="material-symbols-outlined">grade</i>
          </div>
        </div>
        <!-- /.product-rating -->
        <div class="product-price">
          <span class="currency">$</span><?php echo esc_html($vh_property_price); ?>
          <span class="support-text">night</span>
        </div>
        <!-- /.product-price -->
        <div class="product-cta">
        <a href="<?php echo home_url('/property-details?property_id=') . get_the_ID(); ?>" class="btn btn-primary w-100 product-card_link stretched-link">Book Now</a>
        </div>
        <!-- /.product-cta -->
      </div>
      <!-- /.card-data_action -->
    </div>
    <!-- /.card-data -->
  </div>
  <!-- /.row.g-0 -->
</div>
<!-- /.product-card_list -->