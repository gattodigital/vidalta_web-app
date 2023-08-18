<section class="showcase-gallery">
    <div class="container text-center py-5">
        <h2>Disconnect. Enjoy complete peace of mind.</h2>
        <p class="lead">Our exclusive homes are equipped for a hassle-free vacation experience.</p>
        <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'property',
                    'posts_per_page' => -1
                );

                $properties = new WP_Query($args);

                if ($properties->have_posts()) : 
                    while ($properties->have_posts()) : 
                        $properties->the_post();
            ?>
                <div class="col-sm-6 col-lg-3 my-2">
                    <div class="card product-card truncated">
                        <a class="product-card_link" href="<?php the_field('property_link'); ?>">
                            <div class="row">
                                <div class="product-card_media media-cropped">
                                    <div class="cropped-media-wrapper">
                                        <img class="img-fluid full-width" src="<?php the_field('property_image'); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                </div>
                                <div class="product-card_body">
                                    <div class="product-card_description">
                                        <div class="location">
                                            <h3 class="small text-muted"><?php the_field('property_location'); ?></h3>
                                        </div>
                                        <div class="title">
                                            <h4 class="h6"><?php the_title(); ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php 
                    endwhile; 
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- /.showcase-gallery -->
