<?php
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

/**
 * その固定ページに、アイキャッチ（feature image）が設定されているかどうか
 * @return bool アイキャッチの有無
 */
function is_exist_thumbnail($size = 'original'){
  $thumb_id = get_post_thumbnail_id();
  $eye_img = wp_get_attachment_image_src($thumb_id, $size);
  return (boolean) $eye_img;
}

/**
 * 設定されているアイキャッチ（feature image）のURLを取得
 * @param string $size
 * @return mixed
 */
function get_thumbnail_url($size = 'thumbnail'){
  $thumb_id = get_post_thumbnail_id();
  $eye_img = wp_get_attachment_image_src($thumb_id, $size);
  //var_dump($thumb_id);
  //var_dump($eye_img);
  return $eye_img[0];
}


/**
 * Register our sidebars and widgetized areas.
 * https://wpdocs.osdn.jp/%E3%83%86%E3%83%BC%E3%83%9E%E3%81%AE%E3%82%A6%E3%82%A3%E3%82%B8%E3%82%A7%E3%83%83%E3%83%88%E5%AF%BE%E5%BF%9C
 */
/*
function widgets_initialize() {
  register_sidebar(
     array(
      'name' => 'Widget_1',
      'id' => 'widget_1',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="rounded">',
      'after_title' => '</h2>',
    )
  );
}
add_action( 'widgets_init', 'widgets_initialize' );
*/

