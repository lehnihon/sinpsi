<?php
function the_breadcrumb() {
    echo '<ol class="breadcrumb">';
    echo '<li class="breadcrumb-title">Você está aqui: </li>';
  if (!is_home()) {
    echo '<li class="breadcrumb-item"><a href="';
    echo get_option('home');
    echo '">';
    echo 'Home';
    echo "</a></li>";
    if (is_category() || is_single()) {
      echo '<li class="breadcrumb-item">';
      the_category(' </li><li class="breadcrumb-item"> ');
      if (is_single()) {
        echo '</li><li class="breadcrumb-item">';
        the_title();
        echo '</li>';
      }
    } elseif (is_page()) {
      echo '<li class="breadcrumb-item active">';
      echo the_title();
      echo '</li>';
    }
  }
  echo '</ul>';
}

function get_menu_by_location( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return $menu_obj;
}

function the_excerpt_shortcode(){
  $excerpt = get_the_content();
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $the_str = substr($excerpt, 0, 120)." ...";
  echo $the_str;
}

function the_excerpt_shortcode_single(){
  $excerpt = get_the_content();
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $the_str = substr($excerpt, 0, 60)." ...";
  echo $the_str;
}

function custom_category_list($list){
  if(array_key_exists(0,$list)){
    echo $list[0]->name;
  }
  if(array_key_exists(1,$list)){
    echo ", ".$list[1]->name;
  }
}