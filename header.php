<?php
?>
<!doctype html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php if(!is_front_page()){the_title();} echo ' | '; bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />

  <?php #https://ferret-plus.com/610 ?>
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php the_permalink(); ?>" />
  <meta property="og:image" content="<?php if(!is_archive() && is_exist_thumbnail() ){ echo get_thumbnail_url('original'); }else{bloginfo('stylesheet_directory'); ?>/common/images/ogp.png"<?php } ?> />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />

  <?php if(false){ ?><meta property="fb:app_id" content="App-ID（15文字の半角数字）" /><?php } ?>

  <meta name="twitter:card" content="summary" />
  <?php wp_head() ?>
</head>
<body>

