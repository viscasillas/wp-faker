<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title(); ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/index.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->
    <?php wp_head(); ?>
  </head>
  <body>

    <div class="header container">
      <div class="row logo">
        <center>
          <image xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_directory'); ?>/img/ked-logo.svg" src="<?php bloginfo('template_directory'); ?>/img/ked-logo.png" width="150" height="69"></image>
        </center>
      </div>
      <div class="row nav">
        <ul class="navigation">
          <li><a href="index.php?page_id=home">Home</a></li>
          <li><a href="index.php?page_id=services">Services</a></li>
          <li><a href="index.php?page_id=about">About Katie</a></li>
          <li><a href="index.php?page_id=portfolio">Portfolio</a></li>
          <li><a href="index.php?page_id=blog">Blog</a></li>
          <li><a href="index.php?page_id=contact">Contact</a></li>
        </ul>
      </div>
