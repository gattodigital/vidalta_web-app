<?php
if(isset($_GET['property_id'])) {
  $post_id = intval($_GET['property_id']);
} else {
  $post_id = get_the_ID();
}

$vh_property_title = get_field('vh_property_title', $post_id);
$vh_property_location = get_field('vh_property_location', $post_id);
$vh_property_guests = get_field('vh_property_guests', $post_id);
$vh_property_beds = get_field('vh_property_beds', $post_id);
$vh_property_bathrooms = get_field('vh_property_bathrooms', $post_id);

?>
<section class="product-header mb-5">
  <h1 class="product-header_title">
    <?php echo $vh_property_title ? $vh_property_title : 'Default Title'; ?>
  </h1>
  <div class="product-header_specs">
    <div class="d-flex flex-wrap">
      <div class="icon-note product-location">
        <i class="material-symbols-outlined">location_on</i>
        <?php echo $vh_property_location ? $vh_property_location : 'Default Location'; ?>
      </div>
      <div class="icon-note product-guests">
        <i class="material-symbols-outlined">people_alt</i>
        <span><?php echo $vh_property_guests ? $vh_property_guests . ' guests' : 'Default Guests'; ?> </span>
      </div>
      <div class="icon-note product-beds">
        <i class="material-symbols-outlined">bed</i>
        <span><?php echo $vh_property_beds ? $vh_property_beds . ' beds' : 'Default Beds'; ?></span>
      </div>
      <div class="icon-note product-baths">
        <i class="material-symbols-outlined">bathtub</i>
        <span><?php echo $vh_property_bathrooms ? $vh_property_bathrooms . ' baths' : 'Default Baths'; ?></span>
      </div>
    </div>
  </div>
  <!-- /.product-header_specs -->
</section>
<!-- /.product-header mb-5 -->
