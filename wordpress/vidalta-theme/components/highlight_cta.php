<?php
// Get the latest highlight_values post


$cta_args = array(
    'post_type' => 'highlight_cta',
    'posts_per_page' => 1,
);
$cta = new WP_Query($cta_args);

if ($cta->have_posts()) :
    while ($cta->have_posts()) :
        $cta->the_post();
?>
<div class="highlight-cta bg-neutral text-center py-5">
    <div class="container">
        <p><?php the_field('cta_text'); ?></p>
        <div class="h2"><?php the_field('cta_focus'); ?></div>
        <a class="btn btn-lg btn btn-primary px-4" href="<?php the_field('cta_link'); ?>"><?php the_field('cta_button_label'); ?></a>
    </div>
</div>
<!-- /.highlight-cta -->
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>