<?php
/**
 * Experience detail page template.
 */
get_template_part('sections/experience-hero');

global $wp_query;
$experience_id = get_query_var('experience_id');
?>

<div class="container py-4">
  <div class="app-content_layout row">

    <div class="app-content_main col-lg-8">

      <!-- Experience Description -->
      <?php get_template_part('sections/experience-detail_description'); ?>

    </div>
    <!-- /.app-content_main col-lg-8 -->

    <div class="app-content_sidebar col-lg-4">

      <!-- Experience Sidebar -->
      <?php get_template_part('sections/experience-detail_sidebar'); ?>

    </div>
    <!-- /.app-content_sidebar col-lg-4 -->

    <!-- Gallery Modal for experience images -->
    <?php
    if (isset($_GET['experience_id'])) {
      $exp_post_id = intval($_GET['experience_id']);
    } else {
      $exp_post_id = get_the_ID();
    }
    $exp_gallery = get_field('exp_gallery', $exp_post_id);
    $exp_title   = get_field('exp_title', $exp_post_id);
    ?>
    <div class="modal fade" id="experienceImageGallery_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="experienceGallery_modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="experienceGallery_modalLabel"><?php echo esc_html($exp_title); ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body thumbnail-gallery">
            <div class="row g-2">
              <?php
              if ($exp_gallery) {
                preg_match_all('/<img[^>]+src=["\']([^"\']+)["\'][^>]+alt=["\']([^"\']+)["\']/i', $exp_gallery, $matches, PREG_SET_ORDER);
                if (!empty($matches)) {
                  foreach ($matches as $match) {
                    $image_url = esc_url($match[1]);
                    $image_alt = esc_attr($match[2]);
                    ?>
                    <div class="col-6 col-sm-4 col-md-3">
                      <div class="cropped-img">
                        <div class="img-wrapper">
                          <img class="img-object" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" onclick="openLightbox(this)" />
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                } else {
                  echo '<p class="p-3 color-neutral">No gallery images found.</p>';
                }
              } else {
                echo '<p class="p-3 color-neutral">No gallery images found.</p>';
              }
              ?>
            </div>
            <!-- /.row g-2 -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary_outline" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /#experienceImageGallery_modal -->

    <!-- Lightbox Overlay (reused from property detail) -->
    <div class="lightbox-overlay" id="lightbox">
      <img src="" alt="lightbox image" id="lightbox-img" />
      <span class="close cursor" onclick="closeLightbox()">&times;</span>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

  </div>
  <!-- /.app-content_layout row -->
</div>
<!-- /.container py-4 -->
