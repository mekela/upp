<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="initial-scale=1"/>
		<title><?php wp_title(); ?></title>
		<?php wp_head();?>
		<!--Favicon-->
			<link rel="icon" type="image/png" href="favicon.ico">
		<!--End Favicon-->
		<!-- CSS -->
			<link href="https://fonts.googleapis.com/css?family=Khand:300,400,500,600,700|Rubik:300,300i,400,400i,500,500i,700,900" rel="stylesheet">
  			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
			<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/styles.min.css" media="screen" >
			<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css" media="screen" >
		<!-- END OF CSS -->
		
		<!--SCRIPT -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="<?php echo bloginfo('template_url'); ?>/js/main.min.js"></script>
		<script src="<?php echo bloginfo('template_url'); ?>/js/common.js"></script>
		<!--[if IE]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- END OF SCRIPT -->
	</head>
<body>
<div class="wrapper" id="top" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/bg.jpg);">
<!--header-->
<header class="header">
  <div class="container">
    <div class="lang">
      <span class="lang__item">français</span>
      <ul class="lang__list">
        <li><a href="#">français</a></li>
        <li><a href="#">english</a></li>
      </ul>
    </div>
    <nav class="menu">
      <span class="menu_trigger"><i class="fa fa-bars" aria-hidden="true"></i></span>
      <ul>
        <li><a href="#acc">accueil</a></li>
        <li><a href="#notre">notre solution</a></li>
        <li><a href="#fonc">fonctionnalités</a></li>
        <li><a href="#avant">avantages</a></li>
        <li><a href="#equipe">équipe</a></li>
        <li><a href="#actual">actualités</a></li>
        <li><a href="#car">carrières</a></li>
        <li><a href="#contact">contact</a></li>
      </ul>
    </nav>
  </div>
</header>
<!--end-header-->