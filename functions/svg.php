<?php
/**
 * Created by PhpStorm.
 * User: kawashimakoutarou
 * Date: 2017/12/05
 * Time: 17:28
 */

/**
 * svg画像を埋め込む
 */
function get_svg($svg_name){
  $file = file_get_contents( TEMPLATEPATH . '/common/images/svg/' . $svg_name );
  return $file;
}


/**
 * svg画像を埋め込むショートコード
 */
function shortcode_svg($atts){
  extract( shortcode_atts( array(
    'name' => ''
  ), $atts ) );

  return get_svg($name);

}
add_shortcode('svg', 'shortcode_svg');

