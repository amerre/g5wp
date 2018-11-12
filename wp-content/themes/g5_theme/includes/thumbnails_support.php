<?php

/**
 *  Allow the display of articles' thumbnail
 */


function thumbnails_theme_support(){
  add_theme_support('post-thumbnails');
  add_image_size('animal-home-thumb', 702, 702, false);
  add_image_size('home-thumb', 600, 9999, false);
  add_image_size('menu-thumb', 418, 284, true);
}

add_action('after_setup_theme', 'thumbnails_theme_support');
