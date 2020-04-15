      <!DOCTYPE html>
      <html>
      <head>
       
            <title>Main</title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" type="text/css" href="css/style1.css">
            <!-- icon haru -->
            <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/font-awesome.min.css">
            
      </head>
      <body>
            <div class="wrapper">
                <div id="header">
                  <?php include('include/iconbar.php');?>                           

                             <div class="menu">
                                    <ul>
                                       
                                          <li> <a class="active" href="main.php"><i class="fa fa-fw fa-home"></i> Home</a> </li>
        <li><a href="products.php"><i class="fab fa-product-hunt"></i> Products</a> </li>
        <li><a href="beforelogin.php"><i class="fab fa-hotjar"></i> Book Online</a> </li>
        
       <li> <a href="#"><i class="fas fa-building"></i>Nearby Dealerships</a></li>
       <li> <a href="aboutus.php"><i class="fas fa-address-card"></i></i>About Us</a></li>
        <li><a href="contactus.php"><i class="fas fa-user-ninja"></i>Contact Us</a> </li> 
        <li><a href="loginpage.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>
                                    </ul>
                              </div>
                       </div>
                 </div>
<?php include('card.php');?>


           <?php include('include/foot.php');?>
         

      </body>
      </html>
