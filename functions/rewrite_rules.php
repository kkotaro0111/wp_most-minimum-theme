<?php
/**
 * Created by PhpStorm.
 * User: kawashimakoutarou
 * Date: 2017/12/05
 * Time: 16:51
 */

/**
 * 画像ディレクトリのパスを返すショートコード
 * imgのsrc属性内でしか使えない
 * usage: <img src="[image_path]fuga.jpg">
 * @return string
 */
function image_path( ){
  return get_template_directory_uri() . '/common/images/';
}
add_shortcode( 'image_path', 'image_path' );

/**
 * URLリライトルールを追加する
 */
add_filter('rewrite_rules_array','wp_insertMyRewriteRules', 10);
add_filter('query_vars','wp_insertMyRewriteQueryVars');
add_filter('init','flushRules');
// ルールを追加するときはflush_rules()を忘れないように
function flushRules(){
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
// 新しいルールを追加
function wp_insertMyRewriteRules($rules)
{
  $newrules = array();
  return $newrules + $rules;
}

// 変数idを追加して、WordPressが認識できるようにする
function wp_insertMyRewriteQueryVars($vars)
{
  array_push($vars, 'id');
  return $vars;
}

