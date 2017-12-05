<?php
/**
 * Created by PhpStorm.
 * User: kawashimakoutarou
 * Date: 2017/12/05
 * Time: 16:52
 */

/**
 * Register our sidebars and widgetized areas.
 * https://wpdocs.osdn.jp/%E3%83%86%E3%83%BC%E3%83%9E%E3%81%AE%E3%82%A6%E3%82%A3%E3%82%B8%E3%82%A7%E3%83%83%E3%83%88%E5%AF%BE%E5%BF%9C
 */
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
