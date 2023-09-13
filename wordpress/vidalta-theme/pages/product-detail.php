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

     <!-- Gallery Modal -->
     <?php get_template_part('sections/modal-gallery'); ?>

  </div>
  <!-- /.app-content_layout row -->



<section class="product-listing_grid bg-light">
    <div class="container py-5">
      <div class="section-header">
        <h2>Try these amazing experiences in {Location}!</h2>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
          <div class="product-card product-card_grid">
            <div class="row g-0">
              <div class="card-image cropped-img">
                <div class="img-wrapper">
                  <a href="#product-detail">
                    <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-720x480/0e/59/85/2c.jpg" class="img-object" alt="{Product Name}" />
                  </a>
                </div>
              </div>
              <!-- /.card-image -->
              <div class="card-data">
                <div class="card-data_body">
                  <a href="#product-detail" class="product-card_link">
                    <h3 class="product-title">
                      Horseback Riding and ATVs Tour
                    </h3>
                  </a>
                  <div class="product-location">
                    <div class="icon-note icon-note_sm">
                      <i class="material-symbols-outlined">location_on</i>
                      Rionegro, Antioquia
                    </div>
                  </div>
                  <!-- /.product-location -->
                  <div class="product-description">
                    Visit the places where a notorious figure lived and
                    died on a Pablo Escobar tour of Medellin that goes
                    from the colorful streets of Comuna 13 to Pablo
                    Escobar’s grave. Visiting each place with a private
                    guide unlocks the real stories behind Pablo Escobar’s
                    legend; unlike most group Pablo Escobar tours, you’ll
                    have the option to visit the ruins of ‘La Catedral,’ a
                    luxurious prison that Escobar built—and escaped.
                  </div>
                  <!-- /.product-description -->
                </div>
                <!-- /.card-data_body -->
                <div class="card-data_action">
                  <div class="product-price">
                    <span class="currency">$</span>190.00
                    <span class="support-text">person</span>
                  </div>
                  <!-- /.product-price -->
                  <div class="product-cta">
                    <a href="#product-detail" class="btn btn-primary w-100 stretched-link">Add to Booking</a>
                  </div>
                  <!-- /.product-cta -->
                </div>
                <!-- /.card-data_action -->
              </div>
              <!-- /.card-data -->
            </div>
            <!-- /.row.g-0 -->
          </div>
          <!-- /.product-card_grid -->
        </div>
        <!-- /.col-12 col-sm-6 col-lg-3 mb-4 -->
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
          <div class="product-card product-card_grid">
            <div class="row g-0">
              <div class="card-image cropped-img">
                <div class="img-wrapper">
                  <a href="#product-detail">
                    <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/0f/76/db/df.jpg" class="img-object" alt="{Product Name}" />
                  </a>
                </div>
              </div>
              <!-- /.card-image -->
              <div class="card-data">
                <div class="card-data_body">
                  <a href="#product-detail" class="product-card_link">
                    <h3 class="product-title">
                      Private tour to Guatapé and Helicopter ride
                    </h3>
                  </a>
                  <div class="product-location">
                    <div class="icon-note icon-note_sm">
                      <i class="material-symbols-outlined">location_on</i>
                      Rionegro, Antioquia
                    </div>
                  </div>
                  <!-- /.product-location -->
                  <div class="product-description">
                    Capture the most incredible views of Guatapé and the
                    magnificent El Peńol rock formation on a day trip from
                    Medellin with a difference. Not only will you climb
                    over 700 steps to the top of the rock, you’ll fly over
                    it in a helicopter and enjoy a boat ride on the
                    lake—for unbeatable vistas of the lush green region.
                  </div>
                </div>
                <!-- /.card-data_body -->
                <div class="card-data_action">
                  <div class="product-price">
                    <span class="currency">$</span>330.00
                    <span class="support-text">person</span>
                  </div>
                  <!-- /.product-price -->
                  <div class="product-cta">
                    <a href="#product-detail" class="btn btn-primary w-100 stretched-link">Add to Booking</a>
                  </div>
                  <!-- /.product-cta -->
                </div>
                <!-- /.card-data_action -->
              </div>
              <!-- /.card-data -->
            </div>
            <!-- /.row.g-0 -->
          </div>
          <!-- /.product-card_grid -->
        </div>
        <!-- /.col-12 col-sm-6 col-lg-3 mb-4 -->
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
          <div class="product-card product-card_grid">
            <div class="row g-0">
              <div class="card-image cropped-img">
                <div class="img-wrapper">
                  <a href="#product-detail">
                    <img class="img-object" src="https://media.tacdn.com/media/attractions-splice-spp-674x446/09/c6/48/10.jpg" alt="{Product Name}" />
                  </a>
                </div>
              </div>
              <!-- /.card-image -->
              <div class="card-data">
                <div class="card-data_body">
                  <a href="#product-detail" class="product-card_link">
                    <h3 class="product-title">
                      Paragliding over giant waterfalls private tour
                    </h3>
                  </a>
                  <div class="product-location">
                    <div class="icon-note icon-note_sm">
                      <i class="material-symbols-outlined">location_on</i>
                      Rionegro, Antioquia
                    </div>
                  </div>
                  <!-- /.product-location -->
                  <div class="product-description">
                    Sit back and relax as a driver-guide shuttles you from
                    your Medellín or Ríonegro hotel to Cocorna, where
                    you’ll accompany a professional pilot on a 25-minute
                    paragliding flight. Experience bird’s-eye views over
                    crashing waterfalls and vast canyons, while literally
                    gaining a new perspective— one that most travelers
                    won’t—on this beautiful part of Colombia. Afterwards,
                    enjoy an optional lunch in the mountains (own expense)
                    and marvel over more panoramic vistas.
                  </div>
                </div>
                <!-- /.card-data_body -->
                <div class="card-data_action">
                  <div class="product-price">
                    <span class="currency">$</span>156.00
                    <span class="support-text">person</span>
                  </div>
                  <!-- /.product-price -->
                  <div class="product-cta">
                    <a href="#product-detail" class="btn btn-primary w-100 stretched-link">Add to Booking</a>
                  </div>
                  <!-- /.product-cta -->
                </div>
                <!-- /.card-data_action -->
              </div>
              <!-- /.card-data -->
            </div>
            <!-- /.row.g-0 -->
          </div>
          <!-- /.product-card_grid -->
        </div>
        <!-- /.col-12 col-sm-6 col-lg-3 mb-4 -->
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
          <div class="product-card product-card_grid">
            <div class="row g-0">
              <div class="card-image cropped-img">
                <div class="img-wrapper">
                  <a href="#product-detail">
                    <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/07/81/82/38.jpg" class="img-object" alt="{Product Name}" />
                  </a>
                </div>
              </div>
              <!-- /.card-image -->
              <div class="card-data">
                <div class="card-data_body">
                  <a href="#product-detail" class="product-card_link">
                    <h3 class="product-title">
                      Comuna 13 Graffiti Tour and Street Food
                    </h3>
                  </a>
                  <div class="product-location">
                    <div class="icon-note icon-note_sm">
                      <i class="material-symbols-outlined">location_on</i>
                      Rionegro, Antioquia
                    </div>
                  </div>
                  <!-- /.product-location -->
                  <div class="product-description">
                    Comuna 13 is currently the most visited site in all of
                    Medellin and our company has the title of those
                    qualified to make this tour.
                  </div>
                </div>
                <!-- /.card-data_body -->
                <div class="card-data_action">
                  <div class="product-price">
                    <span class="currency">$</span>19.49
                    <span class="support-text">person</span>
                  </div>
                  <!-- /.product-price -->
                  <div class="product-cta">
                    <a href="#product-detail" class="btn btn-primary w-100 stretched-link">Add to Booking</a>
                  </div>
                  <!-- /.product-cta -->
                </div>
                <!-- /.card-data_action -->
              </div>
              <!-- /.card-data -->
            </div>
            <!-- /.row.g-0 -->
          </div>
          <!-- /.product-card_grid -->
        </div>
        <!-- /.col-12 col-sm-6 col-lg-3 mb-4 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container py-5 -->
  </section>
  <!-- /.product-listing_grid -->