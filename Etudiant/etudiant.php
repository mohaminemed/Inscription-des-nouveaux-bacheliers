<?php
$connect = mysqli_connect("localhost", "root", "", "test"); 
session_name('user');
session_start();
if(!isset($_SESSION["numinsc"])&&!isset($_SESSION["password"]))
 {
      header("location:LoginHtml.html");  
 }
$v =$_SESSION['username'];
$quer ="select nom ,prenom from candidat where  username ='$v'";
$result = mysqli_query($connect, $quer)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inscription des Nouveaux Bacheliers</title>

    <link href="https://fonts.googleapis.com/css?family=Quicksand|Montserrat" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Muli:600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/revolution-slider.css">
    <link rel="stylesheet" href="assets/css/etdstyle.css">
    <link rel="stylesheet" href="assets/css/jquery.funnyText.css">
    <script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5697597833139297",
    enable_page_level_ads: true
  });
</script>
    </head>
    <body>
        <header>
        <div class="row topbar hidden-xs">
            <ul class="text-right">
                <li class="funny"><span ><i class="fa fa-phone"></i> +213(0) 23 23 67</span></li>
                <li class="fun" ><span><i class="fa fa-envelope"></i> sdfpi@mesrs.dz </span></li>
                <li  id="fr" class="translate"> <a href="#"><span > French</span></a></li>
                <li  id="en" class="translate"> <a href="#"><span > English</span></a></li>
                <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                <li><a href="#" class="name"><?php
                  
     while($data = mysqli_fetch_row($result))  

    echo $data[0]." ".$data[1];

    

                
                
               ?> </a></li>
                
            </ul>
        </div>
        <div class="row">
            <div class="logo">
                <img src="assets/images/logo.png" alt="">
            </div>
            <nav class="navbar navbar-default ">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse text-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="site.php" class="lang" key="home"><i class="fa fa-home"></i>Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#" class="lang" key="conc">Contest Registration</a></li>
                        
                        <li><a href="#" class="lang" key="dw">Download Documents</a></li>
                        
                        <li><a href="logout.php" class="lang" key="logout">LogOut</a></li>
                        
                    </ul>
                    
                    
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        
    </header>
        <section class="choix">
        <div class="section-header">
            
            <div class="header-underline"></div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="destination-card"> 
                <div class="image-wrapper">
                    <img src="assets/images/carousel/03.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="overlay-details"></div>
                    <div class="overlay-title"></div>                    
                    <h3 class="lang" key="pre">Preregistration</h3>
                    <div class="action">
                        <a href="preinscription.html" class="btnAccentReverse lang" key="btn1">inscribe</a>
                    </div>
                </div>
            </div>
            <div class="destination-card"> 
                <div class="image-wrapper">
                    <img src="assets/images/carousel/04.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="overlay-details"></div>
                    <div class="overlay-title"></div>                    
                    <h3 class="lang" key="concult">Consultation of the orientation</h3>
                    <div class="action">
                        <a href="Consultation.php" class="btnAccentReverse lang" key="btn2">To consult</a>
                    </div>
                </div>
            </div>
            
            
            
        </div>

         <br>
   
    </section>
    <div class="copyright">
        
        Copyright &copy; 2018<span>ORIRNTINI</span>.Inc
        </div>
    
    
    <script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/aos.js"></script>

<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/fonct.js"></script>
        <script src="assets/js/lng.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
    </body>
</html>