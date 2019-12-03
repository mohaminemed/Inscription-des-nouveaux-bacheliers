<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Specialite</title>
  
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/specialite.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5697597833139297",
    enable_page_level_ads: true
  });
</script>

  
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            
            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-2x"></i>
                    </a>
                    
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-2x"></i>
                    </a>
                    
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-2x"></i>
                    </a>
                    
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-2x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="admin.php"><i class="fa fa-user fa-fw"></i>Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Parametres</a>
                        </li>
                         <li id="fr" class="translate"><a href="#"><i></i>French</a>
                        </li>
                         <li id="en" class="translate"><a href="#"><i></i>English</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Deconnexion</a>
                        </li>
                    </ul>
                   
                </li>
                
            </ul>
            

        </nav>
    
  <div class="wrapper">
	<div class="container">
		<h1 class="lang" key="list">Specialiy Liste</h1>
		 <br><br> 
		
<?php
$connect = mysqli_connect("localhost", "root", "", "test");  

 session_start();  
 if(!isset($_SESSION["numAdm"]) ||!isset($_SESSION["pwAdm"]))  
 {  
      header("location:LogOn.html");  
 }
 else
 {
   
		  $quer1 = "SELECT*FROM specialite";
          $result1 = mysqli_query($connect, $quer1)
          or die("echec".mysqli_error($connect));
           echo "<center>";
		   echo "<table border='1'>
		   <tr><th class='lang' key='code' >Code Speciality </th><th class='lang' key='name' >Name Speciality</th><th class='lang' key='univ'>University</th><th class='lang' key='moy'>Average Of the speciality </th><th class='lang' key='numb'>Number of place </th></tr>" ;
		    while($data1 = mysqli_fetch_row($result1))
		    echo "<tr><th>".$data1[0]."</th><th>".$data1[1]."</th><th>".$data1[2]."</th><th>".$data1[3]."</th><th>".$data1[4]."</th></tr>" ;
	       echo "</table>";
     echo "</center>";
 }
	  ?>

		
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/pace.js"></script>
    <script src="assets/js/siminta.js"></script>
    <script src="assets/js/lang.js"></script>
    
</body>
</html>
