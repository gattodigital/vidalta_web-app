<?php

if(isset($_GET['property_id'])) {
  $post_id = intval($_GET['property_id']);
} else {
  $post_id = get_the_ID();
}

$property_highlights = get_field('vh_property_highlights', $post_id);

if($property_highlights) {
  echo '<section class="product-description_highlights pb-4 mb-4 border-bottom">';
  echo '<h3>Highlights</h3>';
  echo '<div class="d-flex flex-wrap justify-content-between">';
  
  foreach($property_highlights as $highlight) {
    // Fetch feature_icon and feature_desc using the ID from the current highlight
    $feature_icon = get_field('feature_icon', $highlight->ID);
    $feature_desc = get_field('feature_desc', $highlight->ID);

    if($feature_icon || $feature_desc) {
      echo '<div class="icon-note icon-note_lg">';
      echo $feature_icon ? '<i class="material-symbols-outlined">'.$feature_icon.'</i>' : '<i class="material-symbols-outlined">No icon found</i>';
      echo $feature_desc ? '<h4 class="mb-0">'.$feature_desc.'</h4>' : '<h4 class="mb-0">No description found</h4>';
      echo '</div>';
    } else {
      echo 'Error fetching fields for post with ID ' . $highlight->ID;
    }
  }
  
  echo '</div>';
  echo '</section>';
} else {
  echo 'No highlights found';
}

?>
