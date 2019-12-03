<?php
 
$connect = mysqli_connect("localhost", "root", "", "test"); 
session_start();
 if(!isset($_SESSION['ouvert']))  
    {  
       header("location:vide.html");	    
    }  

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Registration of New Bachelors</title>

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/revolution-slider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/jquery.funnyText.css">
     <link rel="stylesheet" href="assets/css/loader.css">
    <script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5697597833139297",
    enable_page_level_ads: true
  });
</script>
    
</head>
<body>
   
        <div id="preloader">
		<div id="loader">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="lading"></div>
		</div>
	</div>
    <header>
        <div class="row topbar hidden-xs">
            <ul class="text-right" >
                <li class="funny"><span ><i class="fa fa-phone"></i> +213(0) 23 23 67</span></li>
                <li class="fun" ><span><i class="fa fa-envelope"></i> sdfpi@mesrs.dz </span></li>
                <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                <li  id="fr" class="translate"> <a href="#"><span > French</span></a></li>
                <li  id="en" class="translate"> <a href="#"><span > English</span></a></li>
                
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
                        <li class="active"><a href="site.php" class="lang" key="home"><i class="fa fa-home"></i>  Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Presentation </a></li>
                        <li><a href="#" class="lang" key="conc">Contest Registration</a></li>
                        
                        <li><a href="#" class="lang" key="dw">Download Documents</a></li>
                        <li><a href="loginHtml.html" class="lang" key="login">LogIn</a></li>
                        <li><a href="Register.html" >Register</a></li>
                    </ul>
                    
                    
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        
    </header>
<section id="rev-slider-1-wrapper" class="rev_slider_wrapper fullwidthbanner-container">
    
        <div id="rev-slider-1" class="rev_slider fullwidthabanner">
            <ul>
            <!-- THE BOXSLIDE EFFECT EXAMPLES  WITH LINK ON THE MAIN SLIDE EXAMPLE -->
                
                
                
                <li data-transition="random-premium" data-masterspeed="700" data-slotamount="7" data-link="#" >
                    <img src="assets/images/destinations/slide-3.jpg">
                    <div class="caption sfb big_white"  data-x="center" data-y="200" data-speed="700" data-start="1700" data-easing="slideup" >Congratulations to all our dear students </div>
                    <div class="caption lfr sub-title-black"  data-x="center" data-y="300" data-speed="1200" data-start="1700" data-easing="slideup">  </div>
                    
                    
                </li>
                
                <li data-transition="random-premium" data-masterspeed="700" data-slotamount="7" data-link="#">
                    <img src="assets/images/destinations/slide-2.jpg">
                    <div class="caption sfb big_white"  data-x="center" data-y="200" data-speed="700" data-start="1700" data-easing="slideup"> Door Opened On University </div>
                    <div class="caption lfr sub-title"  data-x="center" data-y="300" data-speed="1200" data-start="1700" data-easing="slideup"> For the benefit of Candidates at 2018 BAC will be held July 15-25 </div>
                    
                </li>
                
                
                
                <li data-transition="random-premium" data-masterspeed="700" data-slotamount="7" data-link="#">
                    <img src="assets/images/destinations/00.jpg_853x1280">
                    <div class="caption sfb big_white"  data-x="center" data-y="200" data-speed="700" data-start="1700" data-easing="slideup">The delegation with Minister Tahar Hadjar</div>
                    <div class="caption lfr sub-title"  data-x="center" data-y="300" data-speed="1200" data-start="1700" data-easing="slideup"> And on his right the director of the IUT of Cachan</div>
                    
                </li>
                <li data-transition="random-premium" data-masterspeed="700" data-slotamount="7" data-link="#">
                    <img src="assets/images/destinations/04.jpg">
                    <div class="caption sfb big_white"  data-x="center" data-y="200" data-speed="700" data-start="1700" data-easing="slideup">Hadjar on the assassination of Karaoui Sarhane</div>
                    <div class="caption lfr sub-title"  data-x="center" data-y="300" data-speed="1200" data-start="1700" data-easing="slideup"> "The crime was not committed by students"</div>
                    
                </li>
                
                
                <li data-transition="random-premium" data-masterspeed="700" data-slotamount="7" data-link="#">
                    <img src="assets/images/destinations/05.jpg">
                    <div class="caption sfb big_white"  data-x="center" data-y="200" data-speed="700" data-start="1700" data-easing="slideup">Open doors for contest registration</div>
                    <div class="caption lfr sub-title"  data-x="center" data-y="300" data-speed="1200" data-start="1700" data-easing="slideup"> </div>
                    
                </li>
                
                
                <li data-transition="random-premium" data-masterspeed="700" data-slotamount="7" data-link="#">
                    <img src="assets/images/destinations/universit%C3%A9.jpg">
                    <div class="caption sfb big_white"  data-x="center" data-y="200" data-speed="700" data-start="1700" data-easing="slideup">New specialties at university level</div>
                    <div class="caption lfr sub-title"  data-x="center" data-y="300" data-speed="1200" data-start="1700" data-easing="slideup"> </div>
                    
                </li>
                
           
            
                
            </ul>
        </div>
    </section>
    
       <section class="info patern ">
            
            <div class="section-header-dark">
                
            <h2 class="lang" key="about">About Us </h2>
            
            </div>
        
            
             <div class="container">
         
                
            <div class="col-xs-12 col-md-12 about-us">
                <h2 class="lang" key="minister">The Ministry of Higher Education and Scientific Research</h2> 
                <p class="lang" key="par1">Is the ministerial department of the Algerian Government charged with implementing the government policy in the fields of higher education and scientific research.

This ministry has existed since 1970. It has sometimes been separated into two sectors or demoted to a delegated ministry.

The current Minister of Foreign Affairs is Mohamed Mebarki, in office since September 11, 2013 since the Government Abdelmalek Sellal (2).</p> 
                <h2 class="lang" key="hist">Historical</h2>
                <p class="lang" key="par2">Higher Education was managed by a central directorate at the level of the Ministry of National Education between 1962 and 1971. Scientific Research was initially endowed with a higher council within the same ministry from 1965.

The Ministry of Higher Education and Scientific Research was created in the Boumedienne III Government in 1970, it existed until 1983, then again in 1992 and since 1994.

Scientific Research will be attached to the Office of the Prime Minister between 1984 and 1990 before knowing a delegation gathering research, technology and the environment between 1990 and 1992.</p>
                    
            </div>
            
                      
                 
      <div class="col-xs-2 col-md-2 pfs">
                <div class="col-xs-12 text-center">
                    <div class="col-xs-12 pf">
                        
                        <i class="fa fa-money"></i>
                        <h3 class="lang" key="bourse">Foreign Exchange</h3>
                        </div>
                    </div>
          
          
                 </div>
                 
                 
                 
                 <div class="col-xs-2 col-md-2 pfs">
                <div class="col-xs-12 text-center">
                    <div class="col-xs-12 pf">
                        
                        <i class=" fa fa-graduation-cap"></i>
                        <h3 class="lang" key="result">Competition results</h3>
                        </div>
                    </div>
          
          
                 </div>
                 
                 
                 <div class="col-xs-2 col-md-2 pfs">
                <div class="col-xs-12 text-center">
                    <div class="col-xs-12 pf">
                        
                        <i class="fa fa-home"></i>
                        <h3>Location</h3>
                        </div>
                    </div>
          
          
                 </div>
                 
                 
                 <div class="col-xs-2 col-md-2 pfs">
                <div class="col-xs-12 text-center">
                    <div class="col-xs-12 pf">
                        
                        <i class="fa fa-envelope-o"></i>
                        <h3>Conntact</h3>
                        </div>
                    </div>
          
          
                 </div>
                 
                 
                 
                 <div class="col-xs-2 col-md-2 pfs">
                <div class="col-xs-12 text-center">
                    <div class="col-xs-12 pf">
                        
                        <i class="fa fa-calendar-o"></i>
                        <h3 class="lang" key="despo">Availability</h3>
                        </div>
                    </div>
          
          
                 </div>
                 
                 <div class="col-xs-2 col-md-2 pfs">
                <div class="col-xs-12 text-center">
                    <div class="col-xs-12 pf">
                        
                        <i class="fa fa-building"></i>
                        <h3>Service</h3>
                        </div>
                    </div>
          
          
                 </div>
        
            
        </section> 
    
   <!-- Start section Contact us -->
    <section class="contact-us text-center">
    <div class="fields">
        <div class="container">
            <div class="row">
        <i class="fa fa-headphones fa-5x"></i>
        <h1 class="lang" key="tell">Tell us what you feel</h1>
        <p class="lead lang" key="time">Do not hesitate to contact us at any time
 </p>
        <form role="form">
            <div class="col-md-6">
            <div class="form-group">
            <input type ="text" class="form-control input-lg" placeholder="UserName">
                </div>
            <div class="form-group">
            <input type ="text" class="form-control input-lg" placeholder="Email">
                </div>
            <div class="form-group">
            <input type ="text" class="form-control input-lg" placeholder="Telephone Number" >
                </div>
                </div>
            <div class="col-md-6">
            <div class ="form-group">
                <textarea class="form-control input-lg" placeholder="Votre Message">
                    
                    </textarea>
                </div>
            <button type="button" class="btn btn-success btn-lg btn-block lang" key="cnt">Contact Us </button>
            </div>
        </form>
                </div>
            </div>
    </div>
    
    </section>
    
   <!-- End section Contact us -->
    
    <section class="footer">
        <div class="container">
             <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <h3 class="fu">Sitemap</h3>
                      <ul class="list-unstyled three">
                      <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6393.940280886692!2d3.0106809324698895!3d36.74728779655759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb1fc305542b3%3A0x7e41c962efe77173!2sMinist%C3%A8re+de+l&#39;Enseignement+Sup%C3%A9rieur+et+de+la+Recherche+Scientifique!5e0!3m2!1sfr!2sdz!4v1522687139176" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></li>
                      </ul>
                      <ul class="list-unstyled social">
                          <li><img src="assets/images/social/if_3_social_2609563.png"></li>
                          <li><img src="assets/images/social/fb.png"></li>
                          <li><img src="assets/images/social/twitter.png"></li>
                          <li><img src="assets/images/social/if_21_939740.png"></li>
                          <li><img src="assets/images/social/if_google_plus_322690.png"></li>
                      </ul>
                 </div>
                 
                 <div class="col-lg-4 col-md-6">
                      <h3 class="fu1 lang" key="article" >Last article</h3>
                     <div class="media">
                     
                     <a class="pull-left" href="#">
                         <img class="media-object" src="assets/images/article/if_Article_news_newspaper_paper_rss_1886317.png" alt=""/></a>
                         <div class="media-body"></div>
                         <h4 class="media-heading lang" key="pgm">
                        Erasmus program
                         
                         </h4>
                     </div>
                     
                     
                     <div class="media">
                     
                     <a class="pull-left" href="#">
                         <img class="media-object" src="assets/images/article/if_Blogger_2745021.png" alt=""/></a>
                         <div class="media-body"></div>
                         <h4 class="media-heading lang" key="str">
                         Other University Structures
                         
                         </h4>
                     </div>
                     
                     <div class="media">
                     
                     <a class="pull-left" href="#">
                         <img class="media-object" src="assets/images/article/if_feedly_382792.png" alt=""/></a>
                         <div class="media-body"></div>
                         <h4 class="media-heading lang" key="repo">
                       National Portal for Thesis Reporting
                         
                         </h4>
                     </div>
                     
                 </div>
                 
                 <div class="col-lg-4">
                      <h3 class="fu2 lang" key="ofc">The Offices </h3>
                     <li class="lang" key="work">University Work</li>
                          <li class="lang" key="pub">University Publications</li>
                 </div>
            </div>
        </div>
       
        
        <div id="scroll-top">
        <i class="fa fa-chevron-up fa-3x"></i> 
    </div>
    </section>
     <div class="copyright">
        
        Copyright &copy; 2018<span>ORIENTINI</span>.Inc
        </div>
    
    

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/aos.js"></script>
 
<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/fonct.js"></script>
<script src="assets/js/testJQ.js"></script>
           <script src="assets/js/lng.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>




</body>
</html>