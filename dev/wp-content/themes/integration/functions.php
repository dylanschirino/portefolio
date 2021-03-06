<?php

add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb-lastproject', 377,269, true );
add_image_size( 'thumb-tv', 420,300, true );
add_image_size( 'thumb-bigimage', 890,422, true );
add_image_size( 'thumb-screen', 404,226, true );
add_image_size( 'thumb-canvas', 400,600, true );
/*
*  Register nav menus
*/
register_nav_menu('main-nav',__('Menu principale utilisé dans le header.','p'));

function b_get_menu_id($location){
  $locations = get_nav_menu_locations();

  if(isset($locations[$location])){
    return $locations[$location];
  }
    return false;
}

function get_the_link($string, $replace = '%s')
{
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}

function b_get_menu_items( $location )
{
  $navItems = [];
  foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
    // Si vous avoir un contrôle sur les liens affichés, c'est ici. (Par exemple: mettre $item->isCurrent à true|false)
    $item = new stdClass();
    $item->url = $obj->url;
    $item->isCurrent=true;
    $item->label = $obj->title;
    $item->icon = $obj->classes[0];
    array_push($navItems, $item);
  }
  return $navItems;
}
