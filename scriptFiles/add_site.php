<?php
    $site_name = $_POST["site_add"];
    $header = $_POST["header_add"];
    $text = $_POST["text_add"];

    $myfile = fopen("../".$site_name.".php", "w") or die("Unable to open file!");

    $txt = '<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            
            <title>'.$header.'</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            <meta name="theme-color" content="#e69100" />
            <link rel="stylesheet" type="text/css"href="css/navStyle.css">
            <link rel="stylesheet" type="text/css"href="css/contentStyle.css">
            
    
    
    
            <!--<script type="text/javascript">
                $(window).load(function() {
                  $("body").removeClass("preload");
                });
              
            </script>-->
    
            
    
    
    
        </head>
        <body class="preload">
            
            
    
            <div id="wrapper">            
                <header class="h2">
                    <nav class="navi">
                        <div class="container">
                            <img src="" class="logo">  
    
                            <div class="menu">
                                <a href="index.php" class="is-active">Home</a>
                                <a href="#">About</a>
                                <a href="#">Projects</a>
                                <a href="#">Contacts</a>
                            </div>
                            <button class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        
                            
                        </div>
                    </nav>
                </header>
                <div class="content">
                    <div class="text">
                        <center>
                            <h1>'.$header.'</h1>
                        </center>
                        <br>
                        <br>
    
                        <p>'.$text.'</p>

    
    
    
    
                    </div>
                </div>
                
    
                <script src="scriptFiles/script.js"></script>
                    
    
               
            </div>
           
        
        </body>
    </html>
    
    
    ';

    fwrite($myfile, $txt);
    fclose($myfile);
    header('Location:../'.$site_name.'.php');
?>
