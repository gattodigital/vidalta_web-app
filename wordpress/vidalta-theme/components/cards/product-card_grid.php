<?php
// Getting the ACF fields directly
$vh_property_title = get_field('vh_property_title');
$vh_property_location = get_field('vh_property_location');
$vh_property_img = get_field('vh_property_img');
$vh_property_link = home_url('/property-details?property_id=') . get_the_ID();
?>

<div class="product-card product-card_grid">
    <div class="row g-0">
        <div class="card-image cropped-img">
            <div class="img-wrapper">
                <img src="<?php echo esc_url($vh_property_img); ?>" class="img-object" alt="<?php echo esc_attr($vh_property_title); ?>">
            </div>
        </div>
        <!-- /.card-image -->
        <div class="card-data">
            <div class="card-data_body">
                <a href="<?php echo esc_url($vh_property_link); ?>" class="product-card_link stretched-link">
                    <h3 class="product-title"><?php echo esc_html($vh_property_title); ?></h3>
                </a>
                <div class="product-location">
                    <div class="icon-note icon-note_sm">
                        <i class="material-symbols-outlined">location_on</i>
                        <?php echo esc_html($vh_property_location); ?>
                    </div>
                </div>
                <!-- /.product-location -->
            </div>
            <!-- /.card-data_body -->
        </div>
        <!-- /.card-data -->
    </div>
    <!-- /.row.g-0 -->
</div>
