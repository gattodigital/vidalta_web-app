<?php
/**
 * Experience detail hero section.
 * Renders a 5-image gallery grid identical to the property hero gallery.
 */

if (isset($_GET['experience_id'])) {
  $post_id = intval($_GET['experience_id']);
} else {
  $post_id = get_the_ID();
}

$exp_hero_01 = get_field('exp_hero_img_01', $post_id);
$exp_hero_02 = get_field('exp_hero_img_02', $post_id);
$exp_hero_03 = get_field('exp_hero_img_03', $post_id);
$exp_hero_04 = get_field('exp_hero_img_04', $post_id);
$exp_hero_05 = get_field('exp_hero_img_05', $post_id);

$default_image = get_stylesheet_directory_uri() . '/assets/img/default-hero.jpg';

function get_exp_image_url($field, $default_image) {
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
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#experienceImageGallery_modal">
                <img src="<?php echo esc_url(get_exp_image_url($exp_hero_01, $default_image)); ?>" class="img-object" alt="Experience photo 1">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="hero-image cropped-img">
            <div class="img-wrapper h-50">
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#experienceImageGallery_modal">
                <img src="<?php echo esc_url(get_exp_image_url($exp_hero_02, $default_image)); ?>" class="img-object" alt="Experience photo 2">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.col-md-3 -->
    <div class="col-12 col-md-6 mb-md-2">
      <div class="hero-image cropped-img">
        <div class="img-wrapper h-100">
          <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#experienceImageGallery_modal">
            <img src="<?php echo esc_url(get_exp_image_url($exp_hero_03, $default_image)); ?>" class="img-object" alt="Experience photo 3">
          </a>
        </div>
      </div>
    </div>
    <!-- /.col-12 col-md-6 -->
    <div class="col-12 col-md-3">
      <div class="row g-2 h-100">
        <div class="col-6 col-md-12">
          <div class="hero-image cropped-img">
            <div class="img-wrapper h-50">
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#experienceImageGallery_modal">
                <img src="<?php echo esc_url(get_exp_image_url($exp_hero_04, $default_image)); ?>" class="img-object" alt="Experience photo 4">
              </a>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-12">
          <div class="hero-image cropped-img">
            <div class="img-wrapper h-50">
              <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#experienceImageGallery_modal">
                <img src="<?php echo esc_url(get_exp_image_url($exp_hero_05, $default_image)); ?>" class="img-object" alt="Experience photo 5">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.col-12 col-md-3 -->
  </div>
  <!-- /.row g-2 -->
  <div class="hero-cta hero-cta_gallery">
    <div class="container-lg">
      <a class="btn btn-sm btn-secondary_outline px-4 opacity-75" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#experienceImageGallery_modal">See all photos</a>
    </div>
  </div>
</section>
