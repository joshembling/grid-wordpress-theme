<?php

function theme_support()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_support');

function load_stylesheets()
{
  wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), '4.0.0', 'all');

  wp_enqueue_style('lightbox-css', "https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css", array(), '5.3.0', 'all');

  wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css", array(), '5.15.2', 'all');

  wp_enqueue_style('aos-css', "https://unpkg.com/aos@next/dist/aos.css", array(), '1.0', 'all');

  wp_enqueue_style('bootstrap-custom', get_template_directory_uri() . "/styles/scss/bootstrap.css", array(), '1.0', 'all');

  wp_enqueue_style('custom-styles', get_template_directory_uri() . "/styles/style.css", array(), '1.0', 'all');

  wp_enqueue_style('hamburger', get_template_directory_uri() . "/styles/hamburgers.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_scripts()
{

  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);

  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.12.9', true);

  wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true);

  wp_enqueue_script('lightbox-js', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js', array(), '4.0.0', true);

  wp_enqueue_script('aos-js', 'https://unpkg.com/aos@next/dist/aos.js', array(), '1.0', true);

  wp_enqueue_script('counter', get_template_directory_uri() . "/js/counter.js", array(), '1.0', true);

  wp_enqueue_script('nav', get_template_directory_uri() . "/js/nav.js", array(), '1.0', true);

  wp_enqueue_script('custom-jquery', get_template_directory_uri() . "/js/custom-jq.js", array(), '1.0', true);

  wp_enqueue_script('custom-javascript', get_template_directory_uri() . "/js/custom-js.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'load_scripts');
