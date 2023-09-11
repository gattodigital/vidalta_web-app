<?php get_template_part('components/product/product-header'); ?>

<div class="product-description mb-5">
  <h2>Property Description</h2>
  <?php
  get_template_part('components/product/product-description');
  get_template_part('components/product/product-highlights');
  get_template_part('components/product/product-amenities');
  get_template_part('components/product/product-rooms');
  get_template_part('components/product/product-guidelines');
  ?>
</div>
<!-- /.product-description -->