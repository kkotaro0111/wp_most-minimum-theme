<?php
/**
 * Created by PhpStorm.
 * User: kawashimakoutarou
 * Date: 2017/12/05
 * Time: 17:31
 */

/**
 * WordPress の投稿スラッグを自動的に生成する
 * related: http://kc-technology.info/2015/01/wordpress-permalink-ja-not-setting/
 * @param $slug
 * @param $post_ID
 * @param $post_status
 * @param $post_type
 * @return string
 */
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
  if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
    $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
  }
  return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );

