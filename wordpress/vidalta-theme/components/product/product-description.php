<?php
if(isset($_GET['property_id'])) {
  $post_id = intval($_GET['property_id']);
} else {
  $post_id = get_the_ID();
}

// Fetch field values
$vh_property_overview = get_field('vh_property_overview', $post_id);
$vh_property_interior = get_field('vh_property_interior', $post_id);
$vh_property_neighborhood = get_field('vh_property_neighborhood', $post_id);

// Set default values if fields are empty
$vh_property_overview = $vh_property_overview ?: 'Default Overview Content';
$vh_property_interior = $vh_property_interior ?: 'Default Interior Content';
$vh_property_neighborhood = $vh_property_neighborhood ?: 'Default Neighborhood Content';
?>

<!-- Your HTML section here -->



<section class="product-description_summary position-relative pb-5 mb-4 border-bottom">
  <div class="smart-truncate truncate-3-lines">

    <div class="product-description_overview">
      <p><?php echo $vh_property_overview; ?></p>
    </div>

    <div class="product-description_inside">
      <h3>Inside the Home</h3>
      <p><?php echo $vh_property_interior; ?></p>
    </div>

    <div class="product-description_neighborhood">
      <h3>Surrounding Neighborhood</h3>
      <p><?php echo $vh_property_neighborhood; ?></p>
    </div>
    <span class="smart-truncate_expand">Read More</span>
  </div>
  <!-- /.smart-truncate truncate-3-lines -->
</section>
<!-- /.product-description_summary -->
