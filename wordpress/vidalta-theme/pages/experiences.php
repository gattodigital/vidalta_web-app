<?php
/*
Template Name: Experiences Listing
*/
get_template_part('sections/hero-spotlight');

$count_experiences = wp_count_posts('experiences');
$published_experiences = $count_experiences->publish;
?>

<div class="container py-5">
  <div class="section-header text-left">
    <h2>(<?php echo $published_experiences; ?>) Curated experiences just for you:</h2>
  </div>

  <!-- Destination filter tabs -->
  <?php
  $destinations = get_terms(array('taxonomy' => 'destination', 'hide_empty' => true));
  if ($destinations && !is_wp_error($destinations)) : ?>
    <div class="experience-filters mb-4">
      <ul class="nav nav-pills flex-wrap gap-2">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo home_url('/experiences'); ?>">All Destinations</a>
        </li>
        <?php foreach ($destinations as $destination) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_term_link($destination); ?>"><?php echo esc_html($destination->name); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <div class="experience-listing_fullwidth">
    <?php
    $args = array(
      'post_type'      => 'experiences',
      'posts_per_page' => -1,
    );

    // Filter by destination if a term is in the query
    if (isset($_GET['destination']) && !empty($_GET['destination'])) {
      $args['tax_query'] = array(
        array(
          'taxonomy' => 'destination',
          'field'    => 'slug',
          'terms'    => sanitize_text_field($_GET['destination']),
        ),
      );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
        get_template_part('components/cards/experience-card_list');
      endwhile;
    else :
      echo '<p class="color-neutral">No experiences found. Check back soon!</p>';
    endif;
    wp_reset_postdata();
    ?>
  </div>
  <!-- /.experience-listing_fullwidth -->
</div>
<!-- /.container py-5 -->
