<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hocvien
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Học viện ANND</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/resources/images/logo.png" type="image/gif" sizes="16x16">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/resources/fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/resources/css/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/resources/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/resources/css/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php wp_body_open(); ?>
<div class="site-wrap">

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
	<div class="site-mobile-menu-close mt-3">
	  <span class="icon-close2 js-menu-toggle"></span>
	</div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>
<!-- begin header top  -->
<div class="header-top">
  <div class="container-fluid image-header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/resources/images/968b.jpg);">
  </div>
  <div class="container-fluid menu-box">
	<div class="row align-items-center">
	  <div class="col-12 col-lg-6 d-flex">
		<a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
			class="icon-menu h3"></span></a>
	  </div>
	</div>
  </div>
  <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
  <div class="container">
	<div class="d-flex align-items-center">
	  <div class="mr-auto">
		<nav class="site-navigation position-relative text-right" role="navigation">
		  <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
			<li class="active">
			  <a href="index.html" class="nav-link text-left">Trang Chủ</a>
			</li>
			<li><a href="#" class="nav-link text-left">Liên Hệ</a></li>
		  </ul>                                                                                                                                                                                                                                                                                         
		</nav>
	  </div>
	</div>
  </div>
</div>
</div>
<!-- end header top  -->
</div>
<div class="image-box">
<div class="container">
<div class="row">
</div>
</div>
</div>
