<?php
if(isset($_GET['property_id'])) {
  $post_id = intval($_GET['property_id']);
} else {
  $post_id = get_the_ID();
}

$vh_property_imggallery = get_field('vh_property_imggallery', $post_id);

?>

<!-- Modal -->
<div class="modal fade" id="productImageGallery_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="productImageGallery_modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="productImageGallery_modalLabel">Beautiful Cabin in Mountains of Rionegro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body thumbnail-gallery">
        <div class="row g-2">
          <?php
          if ($vh_property_imggallery) {
            // Use regular expression to extract image tags from the content
            preg_match_all('/<img[^>]+src=["\']([^"\']+)["\'][^>]+alt=["\']([^"\']+)["\']/i', $vh_property_imggallery, $matches, PREG_SET_ORDER);

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
                <!-- /.col-6.col-sm-4.col-md-3 -->
                <?php
              }
            } else {
              echo 'No images found';
            }
          } else {
            echo 'No images found';
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
<!-- /#productImageGallery_modal -->
<!-- Lightbox Overlay -->
<div class="lightbox-overlay" id="lightbox">
  <img src="" alt="lightbox image" id="lightbox-img" />
  <span class="close cursor" onclick="closeLightbox()">&times;</span>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
