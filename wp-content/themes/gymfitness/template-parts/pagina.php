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

  the_content();
endwhile;