<?php

  function ffm_register_styles() {
    wp_enqueue_style('ffm_style', get_template_directory_uri() . "/assets/css/main.css", array(), '1.0');
  }

  add_action('wp_enqueue_scripts', 'ffm_register_styles');

  register_nav_menus();

?>