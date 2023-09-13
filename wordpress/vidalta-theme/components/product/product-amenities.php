<?php

if(isset($_GET['property_id'])) {
  $post_id = intval($_GET['property_id']);
} else {
  $post_id = get_the_ID();
}

$property_amenities = get_field('vh_property_amenities', $post_id);

if($property_amenities) {
  echo '<section class="product-description_amenities pb-4 mb-4 border-bottom">';
  echo '<h3>Amenities</h3>';
  echo '<div class="row">';
  
  foreach($property_amenities as $amenity) {
    $spec_icon = get_field('spec_icon', $amenity->ID);
    $spec_text = get_field('spec_text', $amenity->ID);

    if($spec_icon || $spec_text) {
      echo '<div class="col-12 col-sm-6 col-md-4">';
      echo '<div class="icon-note">';
      echo $spec_icon ? '<i class="material-symbols-outlined">'.$spec_icon.'</i>' : '<i class="material-symbols-outlined">No icon found</i>';
      echo $spec_text ? $spec_text : 'No description found';
      echo '</div>';
      echo '</div>';
    } else {
      echo 'Error fetching fields for post with ID ' . $amenity->ID;
    }
  }
  
  echo '</div>';
  echo '</section>';
} else {
  echo 'No amenities found';
}

?>
