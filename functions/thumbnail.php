<?php
/**
 * Created by PhpStorm.
 * User: kawashimakoutarou
 * Date: 2017/12/05
 * Time: 16:54
 */

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
function get_thumbnail_url($size = 'thumbnail', $post = null){
  $thumb_id = get_post_thumbnail_id( $post );
  $eye_img = wp_get_attachment_image_src($thumb_id, $size);
  //var_dump($thumb_id);
  //var_dump($eye_img);
  return $eye_img[0];
}
