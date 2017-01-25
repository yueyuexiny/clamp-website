<!DOCTYPE html>
<html lang="en">
    <head>    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php $clampVersion = "CLAMP-CA"?>
        <title><?php echo isset($pageTitle) ? $pageTitle . " | " : "" ?><?php echo $clampVersion?> | Natural Language Processing (NLP) Software</title>
        <meta name="description" content="CLAMP, Clinical Natural Language Processing Software For Medical and Healthcare Annotation. Text mining and machine learning for clinical notes. NLP system with advanced machine learning tools. <?php echo isset($pageDescription) ? $pageDescription . " | " : "" ?>">
        <meta name="keywords" content="clinical natural language processing software,
              clinical natural language processing tool,
              clinical natural language processing,
              clinical nlp tool,
              clinical nlp software,
              clinical nlp,
              clinical annotation,
              clinical text nlp,
              clinical text annotation,
              clinical text mining,
              clinical text algorithms,
              clinical text meaning,
              clinical documentation nlp,
              clinical documentation semantics,
              clinical report nlp,
              clinical note annotation,
              clinical note processing,
              clinical note management,
              clinical informatics,
              clinical data management,
              clinical information extraction,
              clinical free text,
              clinical deep learning,
              understand clinical language,
              understanding clinical facts,
              medical natural language processing software,
              medical natural language processing tool,
              medical natural language processing,
              medical nlp tool,
              medical nlp software,
              medical nlp,
              medical annotation,
              medical text nlp,
              medical text annotation,
              medical text mining,
              medical text algorithms,
              medical text meaning,
              medical documentation nlp,
              medical documentation semantics,
              medical report nlp,
              medical note annotation,
              medical note processing,
              medical note management,
              medical informatics,
              medical data management,
              medical information extraction,
              medical free text,
              medical deep learning,
              medical healthcare language,
              medical healthcare facts,
              healthcare note nlp,
              health note nlp,
              medical note nlp,
              biomedical note nlp,
              patient note nlp,
              research note nlp,
              electronic medical record note nlp,
              EMR note nlp,
              electronic health record note nlp,
              EHR note nlp,
              text annotation,
              pathology report nlp,
              radiodiagnostics language processing,
              clinical research nlp,">
        <meta name="author" content="CLAMP Development Team.">

        <meta name="robots" content="index, follow">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        
        <meta property="og:title" content="<?php echo $clampVersion?> | Natural Language Processing (NLP) Software">

        <link rel="shortcut icon" href="./img/clamp_icon/16.png">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/owl.css">
        <link rel="stylesheet" href="css/jquery.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/styles-2016-11-22.css">
        <link rel="stylesheet" href="css/manual.css">
        <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.min.css">

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/manual.js"></script>
        <!-- added for the manual-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <!-- Google Analytics -->
        <script type="text/javascript">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments);
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m);
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-76452433-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>

    <body>

        <header id="home" class="header">
            <div id="main-nav" class="navbar bs-docs-nav fixed bg_menu" role="banner">
                <div class="container">
                    <div class="clearfix">
                        <div class="pull-left">
                            <img class="logo" src="img/logo.png" width="50" alt="CLAMP Logo">
                        </div>
                        <div class="pull-left">
                            <h3 class="logo hidden-xs"><?php echo $clampVersion?></h3>
                            <h2 class="logo visible-xs"><?php echo $clampVersion?></h2>
                            <p class="logo hidden-xs">Clinical Language Annotation, Modeling, and Processing Toolkit</p>
                        </div>
                    </div>
                </div>
                <div class="navbar-header responsive-logo visible-xs">
                    <button aria-expanded="true" class="navbar-toggle" type="button" data-toggle="collapse"
                            data-target="#bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="bg_menu_se">
                    <div class="container">
                        <nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse">
                            <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                                <li class="active navitem"><a href="index.php">Home</a></li>
                                <li class="navitem"><a href="publications.php">Publications</a></li>
                                <li class="navitem"><a href="get-clamp.php">Download</a></li>
                                <li class="navitem"><a href="tutorial.php">Tutorial</a></li>
                                <li class="navitem"><a href="faq.php">Faq</a></li>
                                <li class="dropdown">
                                    <a href="#" class="navitem" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="true" id="dropdownMenu1">Manual <span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a class=submenu href="documentation.php">Download PDF</a></li>
                                        <li><a class=submenu href="manual.php">GUI version</a></li>
                                    </ul>
                                </li>
                                <li class="navitem"><a href="http://uthealth-ccb.github.io/clamp-support/" target="_blank" target="_blank">Support</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
