<?php /* Template Name: Pagina Normale */ ?>

<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="container">
    <div class="row">
      <div class="col-lg">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

<?php endwhile; else: ?>
<p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>
<?php endif; ?>

<?php get_footer() ?>
