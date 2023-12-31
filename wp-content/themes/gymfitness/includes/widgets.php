<?php

if(!defined('ABSPATH')) die();

class GymFitness_Clases_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'gymfitness_widget',
			esc_html__( 'GymFitness Clases', 'gymfitness' ), 
			array( 'description' => esc_html__( 'Agrega las Clases como Widget', 'gymfitness' ), )
		);
	}

	public function widget( $args, $instance ) {
        
	}

  // Metódo para generar el formulario de mi widget
  public function form( $instance ) {
    $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : esc_html('¿Cuantas clases deseas mostrar');
    ?>
      <p>
        <label for="<?php echo esc_attr($this->get_field_id('cantidad')) ?>">
          <?php esc_attr_e('¿Cuántas clases deseas mostrar') ?>
        </label>

        <input 
          class="widefat"
          id="<?php echo esc_attr($this->get_field_id('cantidad')) ?>"
          name="<?php echo esc_attr($this->get_field_name('cantidad')) ?>"
          type="number"
          value="<?php echo esc_attr($cantidad)?>"
        />
      </p>
    <?php
  }

	public function update( $new_instance, $old_instance ) {

	}
} 

function gymfitness_registrar_widget() {
    register_widget( 'GymFitness_Clases_Widget' );
}
add_action( 'widgets_init', 'gymfitness_registrar_widget' );