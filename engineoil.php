<?php include('include.php');?>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
      
        <title>Woodland Automobiles.oil</title>
      
        <link href="bootstrap.css" rel="stylesheet">
      
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
      
       
        <link href="woodland.css" rel="stylesheet">
      

    </head>
    <body>
            <h1 class="site-heading text-center text-white d-none d-lg-block">
                    <span class="site-heading-upper text-primary mb-3">Best Automobile Store in Sabaragamuwa province</span>
                    <span class="site-heading-lower"><b>WOODLAND AUTOMOBILES</b></span>
                  </h1>
                  <?php include_once('header.php') ?>
                  <script>
                      function openNav() {
                        document.getElementById("mySidenav").style.width = "250px";
                      }
                      
                      function closeNav() {
                        document.getElementById("mySidenav").style.width = "0";
                      }
                      </script>
                      
                 
        <table border=1 align="center" cellspacing="10">
            <?php show_data('o');
            ?>

        </table>
        <footer class="footer text-faded text-center py-5">
            <div class="container">
              <p class="m-0 small">Copyright &copy; Woodland Automobiles Official</p>
            </div>
          </footer>
    </body>
</html>