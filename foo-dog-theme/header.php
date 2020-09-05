<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>FooDog: A Wordpress blog for dogs</title>
  <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
  <!--link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet"-->
  <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body>
  <div class="header">
    <div class="mainTitle">
      <h1><a class="blog-title" href="<?php echo get_bloginfo( 'wpurl' );?>">
        <?php echo get_bloginfo( 'name' ); ?></a></h1>
    </div>
    <div class="leftEmpty"></div>
    <nav class="mainNav" id="mainNav" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
    </nav>
    <!--div class="social">
      <p>
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fa fa-search"></i>
      </p>
    </div-->
  </div>
  <div class="container">
  <!-- closed in the footer-->
