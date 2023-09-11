<?php
/*
Template Name: Product Listing
*/
get_template_part('sections/hero-spotlight');

$count_posts = wp_count_posts('vacation-homes');
$published_posts = $count_posts->publish;

?>

<div class="container py-5">
  <div class="section-header text-left">
    <h2>(<?php echo $published_posts; ?>) Vidalta Homes curated just for you:</h2>
  </div>
  <div class="product-listing_fullwidth">
    <?php
    $args = array(
      'post_type' => 'vacation-homes',
      'posts_per_page' => -1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
        get_template_part('components/cards/product-card_list');
      endwhile;
    else :
      echo 'No properties found';
    endif;
    wp_reset_postdata(); // Resetting the post data after the loop
    ?>
  </div>
  <!-- /.product-listing_fullwidth -->
</div>
<!-- /.container py-5 -->