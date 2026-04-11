<?php
/**
 * Experience detail – sidebar (right column).
 * Renders the affiliate booking card, a guarantee badge, and a map.
 */
set_query_var('post_type_context', 'experiences');
?>

<?php
// Affiliate booking card for experiences
$args = array('post_type' => 'experiences');
get_template_part('components/cards/affiliate-booking-card', null, $args);
?>

<div class="card guarantee-card text-center mb-4">
  <div class="card-header bg-secondary py-3">
    <h3 class="text-white mb-0">The Vidalta Standard</h3>
  </div>
  <div class="card-body">
    <div class="icon-note icon-note_xl d-block">
      <i class="material-symbols-outlined">verified</i>
      <h4>Curated with care</h4>
      <p>
        Every experience on <span class="color-primary fw-bold">Vidalta</span> is hand-picked by our travel experts to
        deliver extraordinary moments at a higher standard.
      </p>
    </div>
    <!-- /.icon-note_xl -->
  </div>
</div>
<!-- /.guarantee-card -->

<?php get_template_part('components/cards/map-card'); ?>
