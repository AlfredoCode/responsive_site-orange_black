<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Responsive Site</title>
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
                        
                            <a href="./" class="is-active">Home</a>
                            <a href="#">About</a>
                            <a href="#">Projects</a>
                            <a href="#">Contacts</a>
                        </div>
                        <div id ="user-logo">
                            <a href=""><img src="img/user.png"></a>
                        </div>
                        
                        <button class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    
                        
                    </div>
                </nav>
            </header>
            
            <div class="leftNav">
                <div class="leftMenu">
                    <ul>
                        <li class="is-active"><a href="./">Home</a></li><br><br>
                        <li><a href="#">About</a></li><br><br>
                        <li><a href="#">Projects</a></li><br><br>
                        <li><a href="#">Contacts</a></li><br><br>
                    </ul>
                    
                    
                    
                    
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <center>
                        <h1>Hello tag</h1>
                    </center>
                    <br>
                    <br>



                    <form action="scriptFiles/add_site.php" method="POST">
                        Header: <input type="text" name="header_add"><br>
                        Text: <input type="text" name="text_add"><br>
                        Site name: <input type="text" name="site_add"><br>
                        <input type="submit">
                    </form>




                </div>
            </div>
            

            <script src="scriptFiles/script.js"></script>
                

           
        </div>
       
    
    </body>
</html>


