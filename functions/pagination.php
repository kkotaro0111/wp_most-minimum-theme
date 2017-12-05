<?php
/**
 * Created by PhpStorm.
 * User: kawashimakoutarou
 * Date: 2017/12/05
 * Time: 17:29
 */


/**
 * ページネーション作る
 * @param $args paginate_linksにそのまま投げるので、それ
 * @related https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/paginate_links
 */
function get_pagination($args){
  $big = 99999999999;
  $paginate = paginate_links(array_merge($args, array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'type' => 'array'
  )));
  if( $paginate ) {
    foreach ($paginate as $list) {
      #$list = preg_replace('/page-numbers/', 'pagination_item', $list);
      echo $list;
    }
  }
}
