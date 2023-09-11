<section class="feature-section highlight-products">
  <div class="container text-center py-5">
    <div class="section-header">
      <h2><?php the_field('highlight_products_header'); ?></h2>
      <p class="header-support color-neutral">
        <?php the_field('highlight_products_subheader'); ?>
      </p>
    </div>
    <!-- /.section-header -->
    <?php
    $highlight_products = get_field('highlight_products');
    if ($highlight_products) : ?>
      <div class="row justify-content-center">
        <?php foreach ($highlight_products as $highlight_product) : ?>
          <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <?php
            $property_details = [
              'vh_property_title' => get_field('vh_property_title', $highlight_product->ID),
              'vh_property_location' => get_field('vh_property_location', $highlight_product->ID),
              'vh_property_main_img' => get_field('vh_property_main_img', $highlight_product->ID),
              'vh_property_link' => get_permalink($highlight_product->ID) // Modified to use get_permalink to fetch the proper link
            ];

            get_template_part('components/cards/product-card_grid', null, $property_details);
            ?>
          </div>
          <!-- /.col-12 col-sm-6 col-lg-3 mb-4 -->
        <?php endforeach; ?>
      </div>
      <!-- /.row -->
    <?php endif; ?>
    <div class="row justify-content-center mt-3">
      <div class="row justify-content-center mt-3">
        <div class="col-auto">
          <a class="btn btn-lg btn-primary px-4" href="<?php echo home_url('/our-properties'); ?>">View all vacation homes</a>
        </div>
      </div>

    </div>

  </div>
  <!-- /.container text-center py-5 -->
</section>