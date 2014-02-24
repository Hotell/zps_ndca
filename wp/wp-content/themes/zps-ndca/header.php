<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage ZPS-NDCA
 * @since ZPS-NDCA 1.0
 */
?><!doctype html>
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <!--<link rel="shortcut icon" href="favicon.png">-->


    <!-- Bootstrap core CSS -->
    <!--<link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">-->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/font-awesome/css/font-awesome.css"
          rel="stylesheet">
    <!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->


<header id="masthead" class="site-header" role="banner">
    <!-- navbar -->
    <nav id="primary-navigation" class="navbar navbar-default navbar-static-top theme-navbar" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <a class="sr-only" href="#content"><?php _e('Skip to content', 'twentyfourteen'); ?></a>
                <button type="button" class="navbar-toggle theme-navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Navigácia</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand theme-navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"
                   title="<?php bloginfo('description'); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/zps-ndca-logo.png" alt=""/>
                </a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right theme-navbar-menu">
                    <li class="">
                        <a href="/">
                            <span class="sr-only">Úvod</span><span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li><a href="o-zariadeni">O zariadení</a></li>
                    <li class=""><a href="sluzby">Služby</a></li>
                    <li><a href="galeria">Galéria</a></li>
                    <li class="active"><a href="prijimanie">Prijímanie</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="dokumenty" data-toggle="dropdown" id="dokumentyMenu">
                            Dokumenty <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dokumentyMenu" role="menu">
                            <li><a href="faktury">Faktúry</a></li>
                            <li><a href="">Zmluvy</a></li>
                            <li><a href="">Objednavky</a></li>
                            <li class="divider"></li>
                            <li><a href="">Tlaciva</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="kontakt">Kontakt</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container -->
    </nav>
    <!-- /.navbar -->
</header>

<main id="main" class="site-main">