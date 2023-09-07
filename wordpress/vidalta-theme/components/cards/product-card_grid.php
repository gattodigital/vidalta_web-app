<?php
/**
 * "product-card_grid component: displays a product in grid format.
 */

$property_title = $args['property_title'] ?? 'N/A';
$property_location = $args['property_location'] ?? 'N/A';
$property_image = $args['property_image'] ?? get_template_directory_uri() . '/assets/img/default.jpg';
$property_link = $args['property_link'] ?? '#';

?>

<div class="product-card product-card_grid">
	<div class="row g-0">
		<div class="card-image cropped-img">
			<div class="img-wrapper">
				<img src="<?php echo esc_url($property_image); ?>" class="img-object" alt="<?php echo esc_attr($property_title); ?>">
			</div>
		</div>
		<!-- /.card-image -->
		<div class="card-data">
			<div class="card-data_body">
				<a href="<?php echo esc_url($property_link); ?>" class="product-card_link stretched-link">
					<h3 class="product-title"><?php echo esc_html($property_title); ?></h3>
				</a>
				<div class="product-location">
					<div class="icon-note icon-note_sm">
						<i class="material-symbols-outlined">location_on</i>
						<?php echo esc_html($property_location); ?>
					</div>
				</div>
				<!-- /.product-location -->
			</div>
			<!-- /.card-data_body -->
		</div>
		<!-- /.card-data -->
	</div>
	<!-- /.row.g-0 -->
</div>