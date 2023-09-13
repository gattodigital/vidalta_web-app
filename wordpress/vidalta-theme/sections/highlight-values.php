<section class="feature-section highlights-values bg-light">
  <div class="container text-center py-5">
    <div class="section-header">
      <h2><?php the_field('highlight_values_header'); ?></h2>
      <p class="header-support color-neutral">
        <?php the_field('highlight_values_subheader'); ?>
      </p>
    </div>
    <!-- /.section-header -->

    <div class="row justify-content-center">

      <?php
      // Get the ID of the current page
      $current_page_id = get_the_ID();

      // Get the selected highlight values from the current page ACF field
      $selected_highlight_values = get_field('highlight_values', $current_page_id);

      // Convert selected highlight values to an array of IDs
      $selected_highlight_value_ids = array();
      if ($selected_highlight_values) {
        foreach ($selected_highlight_values as $value) {
          $selected_highlight_value_ids[] = $value->ID;
        }
      }

      // WP_Query arguments
      $args = array(
        'post_type'      => 'highlight_values',
        'post__in'       => $selected_highlight_value_ids,
        'orderby'        => 'post__in', // Add this line to respect the order of IDs in the post__in array
        'posts_per_page' => 4,
      );

      // The Query
      $highlight_values_query = new WP_Query($args);

      // The Loop
      if ($highlight_values_query->have_posts()) {
        while ($highlight_values_query->have_posts()) {
          $highlight_values_query->the_post();

          // Get ACF fields
          $icon_class = get_field('highlight_icon');
          $title = get_field('highlight_title');
          $description = get_field('highlight_description');
      ?>
          <div class="col-12 col-sm-6 col-lg">
            <div class="icon-note icon-note_xl d-block">
              <i class="material-symbols-outlined"><?php echo esc_attr($icon_class); ?></i>
              <h3><?php echo esc_html($title); ?></h3>
              <p><?php echo esc_html($description); ?></p>
            </div>
            <!-- /.icon-note_xl -->
          </div>
          <!-- /.col-12 col-sm-6 col-lg -->
      <?php
        }
      } else {
        // No posts found
        echo 'No highlight values found';
      }

      // Restore original Post Data
      wp_reset_postdata();
      ?>

    </div>
    <!-- /.row justify-content-center -->
  </div>
  <!-- /.container text-center py-5 -->
</section>