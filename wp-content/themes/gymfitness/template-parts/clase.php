<?php
  // loop de wordpress. todo es tratado como post
  // cada templeate tiene un loop:
  while( have_posts() ): the_post();
    the_title(
      '<h1 class="text-center text-primary">', '</h1>'
    );

    // Compruebo que haya una imagen 
    if(has_post_thumbnail()) {
    // Habilito imagen destacada
      the_post_thumbnail(
        'full', array('class' => 'imagen-destacada')
      );
    }

      $hora_inicio = get_field('hora_inicio');
      $hora_fin = get_field('hora_fin');
?>

      <p class="informacion-clase">
        <?php the_field('dias_clase'); ?> - 
        <?php echo $hora_inicio . " " . $hora_fin; ?>
      </p>
<?php
  the_content();
endwhile;