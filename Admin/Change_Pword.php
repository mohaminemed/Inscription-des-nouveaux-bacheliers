<?php  
 $connect = mysqli_connect("localhost", "root", "", "test"); 

 session_start();  
 if(!isset($_SESSION["numAdm"]) ||!isset($_SESSION["pwAdm"]))  
 {  
      header("location:LogOnAdmin.html");  
 }
   
     
   if(isset($_POST["register"]))  
    {  
           $num = mysqli_real_escape_string($connect, $_POST["num"]);
           $Opassword = mysqli_real_escape_string($connect, $_POST["Opassword"]);
           $Npassword = mysqli_real_escape_string($connect, $_POST["Npassword"]);
           $passwordConfirmed = mysqli_real_escape_string($connect, $_POST["passwordConfirmed"]); 
            
           if($passwordConfirmed == $Npassword){
            
            $query = "UPDATE administrateur SET pwAdm='$Npassword' Where numAdm='$num'";
          
               if(mysqli_query($connect, $query))  

               {  
               
				header("location:admin.php");  
                   
                
               }  
        
            }
          else 
     
          echo '<script>alert("passwords are not equal")</script>'; 
            
     
	
 }

 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
   <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/specialite.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
</head>

<body  >
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
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li id="fr" class="translate"><a href="#"><i></i>French</a>
                        </li>
                         <li id="en" class="translate"><a href="#"><i></i>English</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Log out </a>
                        </li>
                    </ul>
                   
                </li>
                
            </ul>
            

        </nav>
    
    
           
    
        <div class="wrapper">
	<div class="container">
      <h1 class='lang' key='changeMp' >Change Password </h1>  
       
      <form class="form" method="post">  
                       
                     <input type="text" name="num" placeholder="Admin Code"  required /> 
                      
					 
                     <input type="password" name="Opassword" placeholder="Old Password"  required/>
          
                     <input type="password" name="Npassword" placeholder="New Password"  required/>
                     
					 <input type="password" name="passwordConfirmed" placeholder="Confirmed Password "  required/>
                     
                     <input type="submit" name="register" value="Register" class="registerClass" />  
                      
                      
                </form>  
              
    </div>  
            
            
    
    

                    </div>
      <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/pace.js"></script>
    <script src="assets/js/siminta.js"></script>
     <script src="assets/js/lang.js"></script>

</body>

</html>
