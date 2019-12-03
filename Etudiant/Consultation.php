<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CONSULT THE ORIENTATION</title>
  
    
    
    <link rel="stylesheet" href="assets/css/consulterStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Muli:600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="assets/css/jquery.funnyText.css">
    

  
</head>

<body>
    
     <header>
        <div class="row topbar hidden-xs">
            <ul class="text-right" >
                <li class="funny"><span ><i class="fa fa-phone"></i> +213(0) 23 23 67</span></li>
                <li class="fun" ><span><i class="fa fa-envelope"></i> sdfpi@mesrs.dz </span></li>
                <li  id="fr" class="translate"> <a href="#"><span > French</span></a></li>
                <li  id="en" class="translate"> <a href="#"><span > English</span></a></li>
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
                        <li class="active" ><a href="site.php" class="lang" key="home" ><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a></li>
                       
                        <li><a href="etudiant.php">Profil </a></li>
                        <li><a href="logout.php" class="lang" key="logout">LogOut </a></li>
                        
                        
                    </ul>
                    
                    
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        
    </header>
  <div class="wrapper">
	<div class="container">
		<h1 class="lang" key="concult">Consult the orientation</h1>
                 <img src="assets/images/if_graduation-cap_1608377.png" alt="">
		
	<br><br>	
<p class="resultat">  
<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");

 session_start(); 
  if(!isset($_SESSION["numinsc"])&&!isset($_SESSION["password"]))
 {
      header("location:LoginHtml.html");  
 }
else
{	
           $numinsc =$_SESSION["numinsc"] ;   
		   $quer = "SELECT*FROM ficheorientation where (numFO=$numinsc)";
		   $result = mysqli_query($connect, $quer)
           or die("echec".mysqli_error($connect));	
             
		   while($data = mysqli_fetch_row($result))
		   { 
	          $quer1 = "SELECT*FROM specialite where (codeSpec ='$data[1]')";
			  $result1 = mysqli_query($connect, $quer1)
              or die("echec".mysqli_error($connect));
			   while($data1 = mysqli_fetch_row($result1))
			   {
				    echo " Your specialty is : ".$data1[0]." ".$data1[1]." ".$data1[2]."<br/> ";
		       }
		   }
	  
}
 ?> 
 </p>
        
         
        <form class="form" method="post">
			<div class="col-md-12">
            <div class ="form-group">
            <button  name="register" class="btn registerClass "><a href="Confirmation.php " class="lang" key="confirm"> Confirm </a></button>
                  </div>
                
                </div>   
            
            <div class="col-md-12">
              <div class ="form-group">  
            <button name="register" class="btn registerClass "><a href="recours.php" class="lang" key="apeal"> To appeal </a></button>
               </div>  
                </div> 
                 
               
                
                
                
                
                
              
                
		</form>
                
        
	
	
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
    <div class="copyright">
        
        Copyright &copy; 2018<span>OrienTinii</span>.Inc
        </div>
    
  <script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/lng.js"></script>
    <script src="assets/js/login.js"></script>

</body>
     
</html>
