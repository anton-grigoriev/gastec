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
    
    <body>
        
