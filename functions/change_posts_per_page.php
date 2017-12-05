<?php
/**
 * Created by PhpStorm.
 * User: kawashimakoutarou
 * Date: 2017/12/05
 * Time: 16:53
 */

/**
 * 投稿タイプごとに異なる表示件数を設定する
 * @param $query
 */
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
    return;

  // ポストアーカイブの時に表示件数を30件にセット
  if ( $query->is_post_type_archive() && $query->query_vars['post_type'] == 'news') {
    $query->set( 'posts_per_page', '10' );
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

