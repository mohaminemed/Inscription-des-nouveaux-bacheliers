<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");

session_start();  

 if(!isset($_SESSION["numinsc"]))
 {
      header("location:LoginHtml.html");  
 }
else
{	
     $numinsc =$_SESSION["numinsc"]; 
	 $quer = "SELECT S.* FROM bacheliers B,ficheorientation O,specialite S where (B.numinsc='$numinsc' and 
	 O.numFO=B.numinsc and S.codeSpec!=O.codeSpec and S.moySpec<= B.moybac) ";
     $result = mysqli_query($connect, $quer)
     or die("echec".mysqli_error($connect));	
	 $quer1 = "SELECT etat FROM ficheorientation where (numFO = '$numinsc')";
	 $result1 = mysqli_query($connect, $quer1)
     or die("echec".mysqli_error($connect));
	 $data= mysqli_fetch_row($result1);
     if($data[0]==1)
		 echo '<script>alert("vous avez deja confirmer votre orientation!!")</script>';  
     else		
	 
         if(isset($_POST["register"]))  
            {  
      
           $numRec = $_SESSION["numinsc"];   
           $codeSpec = mysqli_real_escape_string($connect, $_POST["prem"]);
          	$etat=0;	   
             
           $quer = "INSERT INTO recours VALUES( '$numRec ','$codeSpec','$etat')";
           if(mysqli_query($connect, $quer))  
             
                echo '<script>alert("Recourse Done")</script>';  
				         
            }
 
		 header("location:etudiant.php");			
} 
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Recours</title>
  
     <link rel="stylesheet" href="assets/css/consulterStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Muli:600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
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
            <ul class="text-right" >
                <li class="funny"><span ><i class="fa fa-phone"></i> +213(0) 23 23 67</span></li>
                <li class="fun" ><span><i class="fa fa-envelope"></i> sdfpi@mesrs.dz </span></li>
                <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                
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
                        <li class="active"><a href="site.php"><i class="fa fa-home"></i>  Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="etudiant.php">Profil </a></li>
                        
                        <li><a href="Consultation.php">Consultation </a></li>
                        
                        
                      
                        <li><a href="logout.php">LogOut </a></li>
                        
                    </ul>
                    
                    
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        
   
 </header>
            
  <div class="wrapper">
	<div class="container">
		<h1>To appeal</h1>
         <img src="assets/images/01.png" alt="">
		
<form class="form" method="post" >
			
<br>		 
<p>
<select name="prem" >
<option value="" selected="selected">Specialty</option>
   <?php  while($data2 = mysqli_fetch_row($result)){
	echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p>
<br>


             <input type="submit" name="register" value="Valider"  class="registerClass" />  
                       
		</form>
		
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
  <script src="assets/js/jquery-3.2.1.min.js"></script>

    <script src="assets/js/login.js"></script>

</body>
</html>
