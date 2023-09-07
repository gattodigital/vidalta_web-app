<?php
$storyboard_data = get_query_var('storyboard_data', []);

if(!empty($storyboard_data)): 
?>
<section class="storyboard storyboard_media-right mb-5">
  <div class="row">
    <div class="col-12 col-md-6 order-md-last">
      <div class="cropped-img h-100">
        <div class="img-wrapper">
          <img src="<?php echo esc_url($storyboard_data['media']['url']); ?>" class="img-fluid rounded" alt="Storyboard Image">
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <h2 class="pt-3"><?php echo wp_kses_post($storyboard_data['header']); ?></h2>
      <p><?php echo wp_kses_post($storyboard_data['content']); ?></p>
    </div>
  </div>
</section>
<?php 
endif;
?>