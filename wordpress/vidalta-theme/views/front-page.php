

<?php get_template_part('components/app_header'); ?>

<main class="app-content">

    <?php
        // Hero
        get_template_part('components/hero_media', 'single');

        get_template_part('components/showcase_gallery');

        get_template_part('components/highlight_values');

        get_template_part('components/highlight_cta', 'static');
    ?>

</main>
<!-- /.app-content -->

 <?php get_template_part('components/app_footer'); ?>

