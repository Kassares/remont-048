<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package remont.048
 */

?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>Remont.048</title>
	<meta name="yandex-verification" content="0d91fb00e9a686f4" />
	<meta name="description" content="Ремонт квартир в Одессе, выгодные цены, лучшее качество работ">
	<meta name="keywords" content="ремонт одесса цены ремонт капитальный косметический ремонт натяжные потолки демонтаж плитка" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
	<link type='text/css' href='<?php bloginfo('template_url'); ?>/css/basic.css' rel='stylesheet' media='screen' />
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/scrollup.js'></script>

</head>

<body>
 <div class="preloader">
      <div class="status"></div>
    </div>
<div class="body-opacity">
	<div class="container">
		<div class="top">
			<div class="row">
				<div class="logo col-md-5 col-sm-5 col-xs-3">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="https://rem048.od.ua">
						<h1>REMONT.048</h1></a>
						</div>
					<div class="col-md-6 col-sm-6 col-xs-6"><a href="https://rem048.od.ua/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" height="37" width="37" alt=""></a></div>

				</div>
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="number col-md-8">
					<i class="fa fa-mobile swing" aria-hidden="true"></i>
					<h3>+38 (098) 048-048-0</h3>
					<h3>+38 (093) 977-837-2</h3>
				</div>
				<div class="callus col-md-4">
					<button href="https://remont048-kassares.c9users.io/contact/"> <a href="https://rem048.od.ua/contact/">Напишите нам </a></button>
				</div>
				</div>

			</div>
		</div>
		<div class="top-menu">
			<!--<div class="row">-->

				<nav class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar" class="navbar-toggle">
          	<span class="sr-only">Toggle navigation</span>
          	<span class="icon-bar"></span><span class="icon-bar"></span>
          	<span class="icon-bar">   </span></button>
          	<!--<a href="#" class="navbar-brand"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" height="57" alt="logotype"></a>-->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <?php wp_nav_menu( array('menu_class' => 'nav navbar navbar-right')); ?>


          </ul>
        </div>
      </div>
    </nav>
    </div>