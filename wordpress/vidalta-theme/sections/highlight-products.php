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
						global $post;
						$post = $highlight_product;  // Set the global $post variable to the current highlighted product
						setup_postdata($post);  // Setup the post data for the current highlighted product

						get_template_part('components/cards/product-card_grid');
						?>
					</div>
					<!-- /.col-12 col-sm-6 col-lg-3 mb-4 -->
				<?php endforeach;
				wp_reset_postdata(); // Resetting the post data after the loop 
				?>
			</div>
			<!-- /.row -->
		<?php else : ?>
			echo 'No highlighted properties found';
		<?php endif; ?>

		<div class="row justify-content-center mt-3">
			<div class="col-auto">
				<a class="btn btn-lg btn-primary px-4" href="<?php echo home_url('/our-properties'); ?>">View all vacation homes</a>
			</div>
		</div>
	</div>
	<!-- /.container text-center py-5 -->
</section>