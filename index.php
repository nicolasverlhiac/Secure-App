<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title>Secure app - v2</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Slim HTML/CSS est un framework responsive, léger, et pret à l'emploi." />
        <meta name="keywords" content="CSS, grid, grid system, Slim, HTML/CSS, fixed, layout, fluid, responsive, adaptive, design" />
        <meta name="viewport" content="initial-scale=1,minimum-scale=1,user-scalable=no,width=device-width">

        <!-- Hiding Safari User Interface Components -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-touch-fullscreen" content="yes">

        <!-- Changing the Status Bar Appearance -->
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

        <!-- Specific Startup Image -->
        <link rel="apple-touch-startup-image" href="images/loading.png">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
        <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
    </head>

    <body>

        <div class="container">
            
            <div class="cols-row">
                <div class="col-50">
                    <div class="info-box-icon width-70" id="notif">
                        <p>En attente des coordonnées ... </p>
                    </div>
                </div>
            </div>
            <div class="cols-row">
                <div class="col-100">
                    <div id="map"></div>
                </div>
            </div>

            <div class="container-pulse" id="pulse">
                <span id="status">
                    <img class="pulse" src="img/shield-wait-icon.png" />    
                </span>
                
            </div>

        </div>
        
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
        <script src="js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>