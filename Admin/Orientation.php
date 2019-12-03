<?php
 $connect = mysqli_connect("localhost", "root", "", "test");  

 session_start(); 


$v =$_SESSION['numAdm'];
$q ="select nomAdm ,prenomAdm from administrateur where  numAdm ='$v'";
$r = mysqli_query($connect, $q); 

?>
 <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Orientation</title>
  
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
                    <img src="#" alt="" />
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
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Deconnexion</a>
                        </li>
                    </ul>
                   
                </li>
                
            </ul>
            

        </nav>
    
    
	<div class="container">
		<h1>La liste d'Orientation</h1>
		 <br><br> 
		
<?php
 
 if(!isset($_SESSION["numAdm"]))  
 {  
      header("location:LogOnAdmin.html");  
 }  
           $quer1 = "SELECT*FROM bacheliers order by moybac desc ";
           $result1 = mysqli_query($connect, $quer1)
           or die("echec".mysqli_error($connect));	
		   echo "<table border='1'>
		   <tr><th>Bachelier</th><th>CodeSpec</th><th>NomSpec</th><th>LieuSpec</th></tr>" ;
             
		   while($data1 = mysqli_fetch_row($result1))
		   {   
               $quer2 = "SELECT*FROM fichevoeux where (numFV = '$data1[0]')";
               $result2 = mysqli_query($connect, $quer2)
               or die("echec".mysqli_error($connect));	
			   $Or=false;
			   while($data2 = mysqli_fetch_row($result2))
			   {  
		         for($i=1;$i<11;$i++)
				  {
				   $quer3 = "SELECT*FROM specialite where (codeSpec = '$data2[$i]')";
	               $result3 = mysqli_query($connect, $quer3)
                   or die("echec".mysqli_error($connect));
				   						
                   $data3= mysqli_fetch_row($result3);
				   
					   if($data3[4]>0 && $data1[2]>=$data3[3] )
					   {
						 
					      $query = "INSERT INTO ficheorientation(numFO,codeSpec) VALUES('$data1[0]','$data3[0]')";
						  $quer = "UPDATE specialite SET nbPSpec=nbPSpec-1 WHERE (codeSpec='$data2[1]')";
      
                         if(mysqli_query($connect, $query)&& mysqli_query($connect, $quer) )  
                          {  
					        $Or=true;
						    echo "<tr><th>".$data1[0]."</th><th>".$data3[0]."</th><th>".$data3[1]."</th><th>".$data3[2]."</th></tr>" ;
							break;
						  }
						  
					   }
				  }
                 				 
			   }
			   if(!$Or) 
				 {
				   $quer3 = "SELECT*FROM specialite where (moySpec <= '$data1[2]' and nbPSpec > 0)";
	               $result3 = mysqli_query($connect, $quer3)
                   or die("echec".mysqli_error($connect));					
                   $data3= mysqli_fetch_row($result3);
				   $query = "INSERT INTO ficheorientation(numFO,codeSpec) VALUES('$data1[0]','$data3[0]')";
				   $quer = "UPDATE specialite SET nbPSpec=nbPSpec-1 WHERE (codeSpec='$data2[1]')";	
				    if(mysqli_query($connect, $query)&& mysqli_query($connect, $quer) )  
                          {  
					        $Or=true;
						    echo "<tr><th>".$data1[0]."</th><th>".$data3[0]."</th><th>".$data3[1]."</th><th>".$data3[2]."</th></tr>" ;
							break;
						  }
						  
               				
				 } 				 
		   }
		    echo "</table>";
 ?>

		
	
	
	
</div>
  <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/pace.js"></script>
    <script src="assets/js/siminta.js"></script>

</body>
</html>
