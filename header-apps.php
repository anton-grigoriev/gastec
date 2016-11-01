<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="ЛабДепо">
        
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

        <title>
            <?php 
                bloginfo('name');                  
                wp_title('/'); 
            ?>
        </title>

        <?php wp_head(); ?>  
             
    </head>
    
    <body id="home">
        <header><!-- HEADER -->
            <div class="container">
                <nav class="navbar navbar-fixed-top my-nav-container">
                    <div class="container">
                        <div class="navbar-header">
                        <!-- 
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#gstc-navbar0" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                         </button>
                         -->
                            <a href="/">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/gastec-logo.png" class="img-responsive header-logo">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="gstc-navbar">
                            <ul class="nav my-nav navbar-right">
                                <li><a id="href-tubes" href="#tubes">Индикаторные трубки</a></li>
                                <li><a id="href-apps" href="#apps">Применение</a></li>
                                <li><a id="href-contacts" href="#contacts">Контакты</a></li>
                            </ul> 
                        </div>
                    </div>
                </nav>
            </div>
        </header><!-- HEADER -->
