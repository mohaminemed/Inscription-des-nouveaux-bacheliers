<?php
$connect = mysqli_connect("localhost", "root", "", "test"); 

 session_start();  
 if(!isset($_SESSION["numAdm"]))  
 {  
      header("location:LogOn.html");  
 }
 
$quer = "SELECT*FROM specialite ";
$result=mysqli_query($connect, $quer);


$v =$_SESSION['numAdm'];
$quer2 ="select nomAdm ,prenomAdm from administrateur where  numAdm ='$v'";
$result2 = mysqli_query($connect, $quer2);
if(isset($_POST["modifier"]))  
   {   
    
    
    
    
     $codeSpec = mysqli_real_escape_string($connect, $_POST["codeSpec"]); 
	 $nomSpec = mysqli_real_escape_string($connect, $_POST["nomSpec"]); 
	 $lieuSpec = mysqli_real_escape_string($connect, $_POST["lieuSpec"]); 
	 $moySpec = mysqli_real_escape_string($connect, $_POST["moySpec"]); 
	 $nbPSpec = mysqli_real_escape_string($connect, $_POST["nbPSpec"]); 
	 $query="UPDATE specialite SET nomSpec='$nomSpec',lieuSpec='$lieuSpec',moySpec='$moySpec',nbPSpec='$nbPSpec' WHERE (codeSpec='$codeSpec')";
      if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Specialite Supprimer")</script>';  
				 header("location:Ajout_Spec.html");
           }  
   }		   
?>
 <!DOCTYPE html>
  <html>
<head>
  <meta charset="UTF-8">
  <title>Modifier une Specialite</title>
  
     
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
                        <li><a href="admin.php"><i class="fa fa-user fa-fw"></i>Profil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Sttings</a>
                        </li>
                        <li id="fr" class="translate"><a href="#"><i></i>French</a>
                        </li>
                         <li id="en" class="translate"><a href="#"><i></i>English</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Log out</a>
                        </li>
                    </ul>
                   
                </li>
                
            </ul>
            

        </nav>
    
	<div class="container">
		<h1 class="lang" key="update">Update A speciality</h1>
		
		<form class="form" method="post"  >
			 
                    <p>
                    <select name="codeSpec" >
                    <option value="" selected="selected">Speciality</option>
                    <?php  while($data = mysqli_fetch_row($result)){
	                echo '<option value="'.$data[0].'" >'.$data[0]." ".$data[1]." ".$data[2].'</option>';}?>
                    </select>
                    </p>
                    <br>  
					
                     <input type="text" name="nomSpec" placeholder="Speciality's name " />  
                        
                     <input type="text" name="lieuSpec" placeholder="Location Specialty" />  
                       
                     <input type="text" name="moySpec" placeholder="Avregae Speciality" />  
					 
					 <input type="text" name="nbPSpec" placeholder="Number of Post" />  
                       
                     <input type="submit" name="modifier" value="Validate" class="registerClass" />  
                     <br /> 
		</form>
		
	</div>
	

  <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/pace.js"></script>
     <script src="assets/js/lang.js"></script>
    <script src="assets/js/siminta.js"></script>
    
</body>
</html>
