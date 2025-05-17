<?php

require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/handlers/pageData.handler.php';

    function head(){
        global $navilist;
        ?>
       <!DOCTYPE html>
       <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Movie schedule</title>
            <link rel = "stylesheet" href="/assets/css/style.css">
            <link href ="https://fonts.googleapis.com/css2?family=Montserrat:wght$400;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
        </head>
        <body>
            <header class="header">
                <h1 class ="title">Movie Schedule</h1>
                <?php NavHead($navilist); ?>
            </header>

        
            <?php
    }
?>