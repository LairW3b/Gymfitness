<?php
  get_header();
?>

  <main class="contenedor seccion">
    <?php
      while( have_posts() ): the_post();
        the_title();
        the_content();
      endwhile;
    ?>
  </main>

<?php
  get_footer();
?>