<?php
    // Query
    $args = array(
        'post_type' => 'highlight_values',
        'posts_per_page' => 5,
    );
    $values = new WP_Query($args);
?>
<section class="highlight-values bg-light">
    <div class="container text-center py-5">
        <h2>Why book with <span class="brand-name"><?php echo get_option('brand_name', 'Vidalta'); ?></span>?</h2>
        <p class="lead"><span class="brand-name"><?php echo get_option('brand_name', 'Vidalta'); ?></span> represents a higher standard of living. We believe in providing exceptional service and memorable experiences.</p>
        <div class="row justify-content-center">
            <?php 
                if($values->have_posts()) : 
                    while($values->have_posts()) : 
                        $values->the_post(); 
            ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-note xl">
                        <i class="txt-accent material-symbols-outlined"><?php the_field('highlight_icon'); ?></i>
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
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
<!-- /.highlight-values -->
