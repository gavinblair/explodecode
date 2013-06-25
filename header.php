<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/explodecode.min.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="container" id="page">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="navbar-content">
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="hidden-phone" id="logo"></a>
                            <ul class="nav pull-right">
                                <?php wp_nav_menu( array(
                                    'container'       => '',
                                    'items_wrap'      => '%3$s',
                                ) ); ?> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>