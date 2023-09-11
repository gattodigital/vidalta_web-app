<?php
/*
Template Name: Product Detail
*/
get_template_part('sections/hero-gallery');

?>

<?php
/* Template Name: Product Detail */
global $wp_query;
$property_id = get_query_var('property_id');
?>

<div class="container py-4">
  <div class="app-content_layout row">

    <div class="app-content_main col-lg-8">

      <!-- Product Description -->
      <?php get_template_part('sections/product-detail_description'); ?>

    </div>
    <!-- /.app-content_main col-lg-8 -->

    <div class="app-content_sidebar col-lg-4">

      <!-- Product Sidebar -->
      <?php get_template_part('sections/product-detail_sidebar'); ?>

    </div>
    <!-- /.app-content_sidebar col-lg-4 -->

  </div>
  <!-- /.app-content_layout row -->

  <section class="product-detail_extras pt-5 border-top">
    <h3>Local Travel Guide</h3>
    <div class="row">
      <h4>Things to do &amp; Restaurants in Rionegro</h4>
      <div class="col-6 col-md-3 mb-4">
        <div class="product-card product-card_grid">
          <div class="row g-0">
            <div class="card-image cropped-img">
              <div class="img-wrapper">
                <img class="img-object" src="assets/img/product/cabin-in-mountains_rionegro.jpeg" alt="{Product Name}">
              </div>
            </div>
            <!-- /.card-image -->
            <div class="card-data">
              <div class="card-data_body">
                <a href="#product-detail" class="product-card_link stretched-link">
                  <h5 class="product-title">Beautiful Cabin in Mountains</h5>
                </a>
              </div>
              <!-- /.card-data_body -->
            </div>
            <!-- /.card-data -->
          </div>
          <!-- /.row.g-0 -->
        </div>
        <!-- /.product-card_grid -->
      </div>
      <!-- /.col-6 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="product-card product-card_grid">
          <div class="row g-0">
            <div class="card-image cropped-img">
              <div class="img-wrapper">
                <img class="img-object" src="assets/img/product/key-west-in-orlando_home.jpeg" alt="{Product Name}">
              </div>
            </div>
            <!-- /.card-image -->
            <div class="card-data">
              <div class="card-data_body">
                <a href="#product-detail" class="product-card_link stretched-link">
                  <h5 class="product-title">Key West House in Orlando</h5>
                </a>
              </div>
              <!-- /.card-data_body -->
            </div>
            <!-- /.card-data -->
          </div>
          <!-- /.row.g-0 -->
        </div>
        <!-- /.product-card_grid -->
      </div>
      <!-- /.col-6 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="product-card product-card_grid">
          <div class="row g-0">
            <div class="card-image cropped-img">
              <div class="img-wrapper">
                <img class="img-object" src="assets/img/product/oasis-in-st-pete_boat.jpeg" alt="{Product Name}">
              </div>
            </div>
            <!-- /.card-image -->
            <div class="card-data">
              <div class="card-data_body">
                <a href="#product-detail" class="product-card_link stretched-link">
                  <h5 class="product-title">Oasis Catamaran in St. Pete</h5>
                </a>
              </div>
              <!-- /.card-data_body -->
            </div>
            <!-- /.card-data -->
          </div>
          <!-- /.row.g-0 -->
        </div>
        <!-- /.product-card_spotlight -->
      </div>
      <!-- /.col-6 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="product-card product-card_spotlight">
          <div class="row g-0">
            <div class="card-image cropped-img">
              <div class="img-wrapper">
                <img class="img-object" src="assets/img/product/finca_rionegro.jpeg" alt="{Product Name}">
              </div>
            </div>
            <!-- /.card-image -->
            <div class="card-data">
              <div class="card-data_body">
                <a href="#product-detail" class="product-card_link stretched-link">
                  <h5 class="product-title">Family Home on the Hills</h5>
                </a>
              </div>
              <!-- /.card-data_body -->
            </div>
            <!-- /.card-data -->
          </div>
          <!-- /.row.g-0 -->
        </div>
        <!-- /.product-card_spotlight -->
      </div>
      <!-- /.col-6 -->
    </div>
  </section>
  <!-- /.product-detail_extras -->
</div>