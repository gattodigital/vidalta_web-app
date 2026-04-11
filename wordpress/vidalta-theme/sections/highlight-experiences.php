<section class="feature-section highlight-experiences">
	<div class="container text-center py-5">
		<div class="section-header">
			<h2><?php the_field('highlight_experiences_header'); ?></h2>
			<p class="header-support color-neutral">
				<?php the_field('highlight_experiences_subheader'); ?>
			</p>
		</div>
		<!-- /.section-header -->

		<?php
		$highlight_experiences = get_field('highlight_experiences');
		if ($highlight_experiences) : ?>
			<div class="row justify-content-center">
				<?php foreach ($highlight_experiences as $highlight_exp) : ?>
					<div class="col-12 col-sm-6 col-lg-3 mb-4">
						<?php
						global $post;
						$post = $highlight_exp;
						setup_postdata($post);

						get_template_part('components/cards/experience-card_grid');
						?>
					</div>
					<!-- /.col-12 col-sm-6 col-lg-3 mb-4 -->
				<?php endforeach;
				wp_reset_postdata();
				?>
			</div>
			<!-- /.row -->
		<?php else : ?>
			<p class="color-neutral">No featured experiences available at the moment.</p>
		<?php endif; ?>

		<div class="row justify-content-center mt-3">
			<div class="col-auto">
				<a class="btn btn-lg btn-secondary px-4" href="<?php echo home_url('/experiences'); ?>">Explore all experiences</a>
			</div>
		</div>
	</div>
	<!-- /.container text-center py-5 -->
</section>
