<?php
  if(isset($_GET['property_id'])) {
    $post_id = intval($_GET['property_id']);
  } else {
    $post_id = get_the_ID();
  }

  $map_embed_code = get_field('vh_map_location', $post_id);
  if($map_embed_code):
?>
    <map class="card map-card text-center mb-4">
      <div class="card-header bg-light py-3">
        <h3 class="mb-0">Property Location</h3>
      </div>
      <div class="card-body">
        <?php echo $map_embed_code; ?>
      </div>
    </map>
    <!-- /.map-card -->
<?php else: ?>
    <p>No map available</p>
<?php endif; ?>
