<?php
if(isset($_GET['property_id'])) {
  $post_id = intval($_GET['property_id']);
} else {
  $post_id = get_the_ID();
}

$property_rooms = get_field('vh_property_rooms', $post_id);

if($property_rooms): ?>
  <section class="product-description_rooms pb-4 mb-4 border-bottom">
    <h3>Bedrooms</h3>
    <div class="row">
      <?php foreach($property_rooms as $room): 
        $room_img = $room['room_img'];
        $room_type = $room['room_type'];

        // Check if room_type and room_img are not empty, if either is empty, skip this iteration
        if(empty($room_type) || empty($room_img)) {
            continue;
        }

        $beds = [
          'King size bed' => $room['room_kgbeds'],
          'Queen size bed' => $room['room_qnbeds'],
          'Double bed' => $room['room_dbbeds'],
          'Twin bed' => $room['room_twbeds'],
          'Sofa bed' => $room['room_sfbeds']
        ];
        ?>
        <div class="col-6 col-md-4">
          <div class="product-card product-card_grid">
            <div class="row g-0">
              <div class="card-image cropped-img">
                <div class="img-wrapper">
                  <?php if($room_img): ?>
                    <img src="<?php echo esc_url($room_img['url']); ?>" class="img-object" alt="<?php echo esc_attr($room_type); ?>">
                  <?php endif; ?>
                </div>
              </div>
              <div class="card-data">
                <div class="card-data_body">
                  <?php if($room_type): ?>
                    <div class="card-title h5"><?php echo esc_html($room_type); ?></div>
                  <?php endif; ?>
                  <ul class="card-text">
                    <?php foreach($beds as $bed_type => $bed_count):
                      if($bed_count): ?>
                        <li>(<?php echo intval($bed_count); ?>) <?php echo esc_html($bed_type); ?></li>
                      <?php endif;
                    endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
<?php else: 
  echo 'No rooms found';
endif; ?>
