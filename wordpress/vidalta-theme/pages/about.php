<?php
/*
Template Name: About Us
*/

// Fetch the ACF fields values
$storyboards = [
	[
		'header' => get_field('storyboard_header_1'),
		'content' => get_field('storyboard_content_1'),
		'media' => get_field('storyboard_media_1'),
	],
	[
		'header' => get_field('storyboard_header_2'),
		'content' => get_field('storyboard_content_2'),
		'media' => get_field('storyboard_media_2'),
	],
	[
		'header' => get_field('storyboard_header_3'),
		'content' => get_field('storyboard_content_3'),
		'media' => get_field('storyboard_media_3'),
	],
];

get_template_part('sections/hero-spotlight');

?>

<div class="container py-5">
	<?php
	$layouts = ['left', 'right', 'left'];

	for ($i = 0; $i < count($storyboards); $i++) {
		set_query_var('storyboard_data', $storyboards[$i]);
		get_template_part('components/storyboard/storyboard_media-' . $layouts[$i]);
	}
	?>
</div>

<?php
	get_template_part('sections/highlight-values');
	get_template_part('sections/feature-section_callout');
?>

