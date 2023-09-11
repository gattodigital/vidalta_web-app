<?php
if(isset($_GET['property_id'])) {
  $post_id = intval($_GET['property_id']);
} else {
  $post_id = get_the_ID();
}

$vh_property_imghero_01 = get_field('vh_property_imghero_01', $post_id);
$vh_property_imghero_02 = get_field('vh_property_imghero_02', $post_id);
$vh_property_imghero_03 = get_field('vh_property_imghero_03', $post_id);
$vh_property_imghero_04 = get_field('vh_property_imghero_04', $post_id);
$vh_property_imghero_05 = get_field('vh_property_imghero_05', $post_id);




$default_image = get_stylesheet_directory_uri() . '/assets/img/default-hero.jpg';

function get_image_url($field, $default_image) {
    return $field ? $field['url'] : $default_image;
}

?>


<section class="hero-spotlight hero-spotlight_gallery p-2">
  <div class="row g-2">
    <div class="col-md-3 d-none d-md-block">
      <div class="row g-2 g-md-0 h-100">
        <div class="col-md-12">
          <div class="hero-image cropped-img">
            <div class="img-wrapper h-50">
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#productImageGallery_modal">
              <img src="<?php echo esc_url(get_image_url($vh_property_imghero_01, $default_image)); ?>" class="img-object" alt="Image 1">
              </a>
            </div>
          </div>
          <!-- /.hero-image -->
        </div>
        <!-- /.col-md-12 -->
        <div class="col-md-12">
          <div class="hero-image cropped-img">
            <div class="img-wrapper h-50">
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#productImageGallery_modal">
              <img src="<?php echo esc_url(get_image_url($vh_property_imghero_02, $default_image)); ?>" class="img-object" alt="Image 2">
              </a>
            </div>
          </div>
          <!-- /.hero-image -->
        </div>
        <!-- /.col-md-12 -->
      </div>
      <!-- /.row g-2 g-md-0 -->
    </div>
    <!-- /.col-md-3 d-none d-md-block -->
    <div class="col-12 col-md-6 mb-md-2">
      <div class="hero-image cropped-img">
        <div class="img-wrapper h-100">
          <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#productImageGallery_modal">
          <img src="<?php echo esc_url(get_image_url($vh_property_imghero_03, $default_image)); ?>" class="img-object" alt="Image 3">
          </a>
        </div>
      </div>
    </div>
    <!-- /.col-12 col-md-6 mb-md-2 -->
    <div class="col-12 col-md-3">
      <div class="row g-2 h-100">
        <div class="col-6 col-md-12">
          <div class="hero-image cropped-img">
            <div class="img-wrapper h-50">
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#productImageGallery_modal">
              <img src="<?php echo esc_url(get_image_url($vh_property_imghero_04, $default_image)); ?>" class="img-object" alt="Image 4">
              </a>
            </div>
          </div>
          <!-- /.hero-image -->
        </div>
        <div class="col-6 col-md-12">
          <div class="hero-image cropped-img">
            <div class="img-wrapper h-50">
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#productImageGallery_modal">
              <img src="<?php echo esc_url(get_image_url($vh_property_imghero_05, $default_image)); ?>" class="img-object" alt="Image 5">
              </a>
            </div>
          </div>
          <!-- /.hero-image -->
        </div>
        <!-- /.col-6 col-md-12 -->
      </div>
      <!-- /.row g-2 -->
    </div>
    <!-- /.col-12 col-md-3 -->
  </div>
  <!-- /.row g-2 -->
  <div class="hero-cta hero-cta_gallery">
    <div class="container-lg">
      <a class="btn btn-sm btn-secondary_outline px-4 opacity-75" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#productImageGallery_modal">See all photos</a>
    </div>
    <!-- /.container-lg -->
  </div>
  <!-- /.hero-cta_gallery -->
</section>
