<?php

function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

add_action( 'wp_ajax_increment_count', 'increment_count' );
add_action( 'wp_ajax_nopriv_increment_count', 'increment_count' );
function increment_count() {
  $post_id = $_POST['post_id'];
  $count = get_post_meta( $post_id, 'ranking', true );
  $new_count = $count + 1;
  update_post_meta( $post_id, 'ranking', $new_count );
  echo $new_count;
  wp_die();
}
?>