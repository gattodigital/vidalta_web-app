<?php get_header(); ?>

<main class="app-content">

<?php
if (is_front_page()) {
    get_template_part('pages/home');
} elseif (is_page('about-us')) {
    get_template_part('pages/about');
} elseif (is_page('our-properties')) {
    get_template_part('pages/product-listing');
} elseif (is_page('property-details')) {
    get_template_part('pages/product-detail');
} elseif (is_page('contact')) {
    get_template_part('pages/contact');
} else {
    // Fallback for any other case
    get_template_part('pages/default');
}
?>



</main>
<!-- /.app-content -->

<?php get_footer(); ?>
