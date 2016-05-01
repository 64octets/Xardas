<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title(''); ?>
        <?php if (!(is_404()) && (is_single()) || (is_page()) || (is_archive())) {
    ?> -
        <?php

} ?>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="description" content="Gothic 3 Neu erleben - Eine verbesserte, durch Kapitel gegliederte Story - Aufgewertete und interessante Charaktere - noch mehr spannende Quests">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/fav.png" type="image/png">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/font-awesome/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>


    <?php wp_head(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <script>
        (function() { // Redistats, track version 1.0
            var global_id = 292; // Global ID, don't change this.
            var property_id = 0; // Property ID
            var url = encodeURIComponent(window.location.href.split('#')[0]);
            var referrer = encodeURIComponent(document.referrer);
            var x = document.createElement('script'),
                s = document.getElementsByTagName('script')[0];
            x.src = '//redistats.com/track.js?gid=' + global_id + '&pid=' + property_id + '&url=' + url + '&referrer=' + referrer;
            s.parentNode.insertBefore(x, s);
        })();
    </script>
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//g3csp.betelgeuse.uberspace.de/piwik/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//g3csp.betelgeuse.uberspace.de/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->
</head>

<body>
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" id="navbar-button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <table height="100%">
                    <tr>
                        <td>
                            <a href="<?php bloginfo('url'); ?>">
                                <img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" />
                            </a>
                        </td>
                        <td valign="center">
                            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">&nbsp;CSP</a>

                        </td>
                    </tr>
                </table>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php navi_link('') ?>" class="page-scroll nav-text"><?php _e('Home', 'xardas')?></a></li>
                    <li><a href="<?php navi_link(__('faq', 'xardas')) ?>" class="page-scroll nav-text"><?php _e('FAQ', 'xardas')?></a></li>
                    <li><a href="<?php navi_link(__('archive', 'xardas')) ?>" class="page-scroll nav-text"><?php _e('Archive', 'xardas')?></a></li>
                    <li><a href="<?php navi_link(__('gallery', 'xardas')) ?>" class="page-scroll nav-text"><?php _e('Gallery', 'xardas')?></a></li>
                        <li><a href="http://forum.worldofplayers.de/forum/threads/1452859-Gothic-3-Community-Story-Project-35" target="_blank" class="page-scroll nav-text"><?php _e('WoG', 'xardas')?></a></li>
                    <li>
                        <a href="https://www.youtube.com/user/Gothic3CSP"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/g3csp"><i class="fa fa-facebook"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
