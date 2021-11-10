<?php declare(strict_types = 1);

namespace noxkiwi\core;?><!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Uups!</title>
    <meta name="keywords" content="HTML5,CSS3,Template"/>
    <meta name="description" content=""/>
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]"/>
    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
          rel="stylesheet" type="text/css"/>
    <!-- CORE CSS -->
    <link href="<?= Path::$resourceHost ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- THEME CSS -->
    <link href="<?= Path::$resourceHost ?>/assets/css/essentials.css" rel="stylesheet" type="text/css"/>
    <link href="<?= Path::$resourceHost ?>/assets/css/layout.css" rel="stylesheet" type="text/css"/>
    <!-- PAGE LEVEL SCRIPTS -->
    <link href="<?= Path::$resourceHost ?>/assets/css/header-1.css" rel="stylesheet" type="text/css"/>
    <link href="<?= Path::$resourceHost ?>/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css"
          id="color_scheme"/>
</head>
<!--
    AVAILABLE BODY CLASSES:
    smoothscroll             = create a browser smooth scroll
    enable-animation        = enable WOW animations
    bg-grey                    = grey background
    grain-grey                = grey grain background
    grain-blue                = blue grain background
    grain-green                = green grain background
    grain-blue                = blue grain background
    grain-orange            = orange grain background
    grain-yellow            = yellow grain background
    boxed                     = boxed layout
    pattern1 ... patern11    = pattern background
    menu-vertical-hide        = hidden, open on click
    BACKGROUND IMAGE [together with .boxed class]
    data-background="/assets/images/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation">
<!-- wrapper -->
<div id="wrapper">
    <!-- HEADER -->
    <!-- /HEADER -->
    <section id="slider" class="fullheight" style="height: 845px;">
        <div class="display-table">
            <div class="display-table-cell vertical-align-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Access denied</h2>
                            <p>
                                This page should be hidden from you.
                                <br/>Please log in first.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /wrapper -->
<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>
<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->
<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = '<?=Path::$resourceHost?>/assets/plugins/';</script>
<script type="text/javascript" src="<?= Path::$resourceHost ?>/assets/plugins/jquery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?= Path::$resourceHost ?>/assets/js/scripts.js"></script>
</body>
</html>
