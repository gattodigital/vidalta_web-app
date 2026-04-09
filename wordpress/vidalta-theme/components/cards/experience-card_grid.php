<?php
// Getting the ACF fields for this experience
$exp_title    = get_field('exp_title');
$exp_location = get_field('exp_location');
$exp_img      = get_field('exp_img');
$exp_duration = get_field('exp_duration');
$exp_price    = get_field('exp_price');
$exp_category = get_field('exp_category');
$exp_link     = home_url('/experience-details?experience_id=') . get_the_ID();
?>

<div class="product-card product-card_grid experience-card">
    <div class="row g-0">
        <div class="card-image cropped-img">
            <div class="img-wrapper">
                <a href="<?php echo esc_url($exp_link); ?>">
                    <img src="<?php echo esc_url($exp_img); ?>" class="img-object" alt="<?php echo esc_attr($exp_title); ?>">
                </a>
            </div>
            <?php if ($exp_category) : ?>
                <span class="product-badge badge-experience"><?php echo esc_html($exp_category); ?></span>
            <?php endif; ?>
        </div>
        <!-- /.card-image -->
        <div class="card-data">
            <div class="card-data_body">
                <a href="<?php echo esc_url($exp_link); ?>" class="product-card_link stretched-link">
                    <h3 class="product-title"><?php echo esc_html($exp_title); ?></h3>
                </a>
                <div class="product-location">
                    <div class="icon-note icon-note_sm">
                        <i class="material-symbols-outlined">location_on</i>
                        <?php echo esc_html($exp_location); ?>
                    </div>
                </div>
                <!-- /.product-location -->
                <?php if ($exp_duration) : ?>
                    <div class="product-duration">
                        <div class="icon-note icon-note_sm">
                            <i class="material-symbols-outlined">schedule</i>
                            <?php echo esc_html($exp_duration); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- /.product-duration -->
            </div>
            <!-- /.card-data_body -->
            <?php if ($exp_price) : ?>
                <div class="card-data_action">
                    <div class="product-price">
                        <span class="support-text">From </span><span class="currency">$</span><?php echo esc_html($exp_price); ?>
                        <span class="support-text">/ person</span>
                    </div>
                </div>
            <?php endif; ?>
            <!-- /.card-data_action -->
        </div>
        <!-- /.card-data -->
    </div>
    <!-- /.row.g-0 -->
</div>
