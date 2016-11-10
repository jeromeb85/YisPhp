<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>TEST</title>
        <meta name="x-font-awesome-stylesheet-fallback-test" class="fa">
        <!-- STYLE -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="./libs/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="./css/main.css" /> 
        <!-- SCRIPT -->
        <script src="./libs/modernizr/modernizr.js"></script>
    </head>
    <body>
        <?php include("navbar.php");  ?>
        <div class="container body-content">      
            <?php include("body.php");   ?>
            <hr />
            <footer>
                <p>Footer</p>
            </footer>
        </div>            
        
        <script  src="./libs/jquery/jquery.js"></script>
        <script src="./libs/jquery-validation/jquery.validate.js"></script>
<!--        <script asp-append-version="true" src="~/libs/jquery-validation-unobtrusive/jquery.validate.unobtrusive.js"></script>-->
        <script src="./libs/jquery-ui/jquery-ui.js"></script>
        <script src="./libs/bootstrap/js/bootstrap.js"></script>
        <script src="./js/main.js" ></script>
    </body>
</html>
