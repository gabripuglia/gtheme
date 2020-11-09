<?php get_header();?>

<body>
  <section class="container">
    <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
          the_content();
        endwhile;
      endif;?>
  </section>
</body>

<?php get_footer();?>
