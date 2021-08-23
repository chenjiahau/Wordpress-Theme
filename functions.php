<?php

  function page_files() {
    wp_enqueue_script('FontAwesome', '//use.fontawesome.com/releases/v5.15.3/js/all.js', null, null, null);
    wp_enqueue_script('Bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', null, null, true);
    wp_enqueue_script('main', get_theme_file_uri('/build/js/scripts.js'), null, null, true);

    wp_enqueue_style('CustomGoogleFont1', '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    wp_enqueue_style('CustomGoogleFont2', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style('main', get_theme_file_uri('/build/css/styles.css'));
  }

  add_action('wp_enqueue_scripts', 'page_files');