<?php 
function jollibee_register_blocks() {
    if ( function_exists( 'acf_register_block' ) ) {
        
       acf_register_block( array(
            'name'          => 'two-colums',
            'title'         => __( 'Two Culomns'),
            'render_template'   => 'blocks/two-cols.php',
            'category'      => 'jollibee',
            'icon'          => 'format-image',
            'mode'          => 'edit',
            'keywords'      => array( 'grid', 'columns')
      ));
      acf_register_block( array(
        'name'          => 'menu-slider',
        'title'         => __( 'Menu slider'),
        'render_template'   => 'blocks/menu-slider.php',
        'category'      => 'jollibe-blocks',
        'icon'          => 'dashicons-slides',
        'mode'          => 'edit',
        'keywords'      => array( 'slider', 'menu')
  ));

    } 
} 

add_action('acf/init', 'jollibee_register_blocks' );
