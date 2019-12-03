<?php
$connect = mysqli_connect("localhost", "root", "", "test");
session_name('admin');
session_start();
  if(!isset($_SESSION["numAdm"])||!isset($_SESSION["pwAdm"]))  
 {  
      header("location:LogOnAdmin.html");  
 }  
$v =$_SESSION['numAdm'];
$quer ="select nomAdm ,prenomAdm from administrateur where  numAdm ='$v'";
$result = mysqli_query($connect, $quer)

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    
    
   </head>
<body>
   
    <div id="wrapper">
      
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Profil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                         <li id="fr" class="translate"><a href="#"><i></i>French</a>
                        </li>
                         <li id="en" class="translate"><a href="#"><i></i>English</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Log Out</a>
                        </li>
                    </ul>
                   
                </li>
                
            </ul>
            

        </nav>
        
        <nav class="navbar-default navbar-static-side" role="navigation">
          
            <div class="sidebar-collapse">
               
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <?php
                  
     while($data = mysqli_fetch_row($result))  

    echo $data[0]." ".$data[1];?> 
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected " >
                        <a href="admin.php" class="lang" key="home">
                             
                            <i class="fa fa-home fa-fw"></i> Home</a>
                    </li>
                    
                    <li>
                            <a href ="#" class="lang" key="docum">
                                
                                
                                <i class="fa fa-file-text-o"> Documentation</i></a>
                            
                            </li>
                     <li>
                        <a href="#" class="lang" key="msg">
                            
                            
                            <i class="fa fa-comments-o fa-fw"></i> Messenger</a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope-o fa-fw"></i> Email</a>
                    </li>
                    
                    
                    <li>
                        <a href="#" class="lang" key="detProf">
                            
                            <i class="fa fa-user-circle-o fa-fw"></i> Profil Details</a>
                        
                        
                    </li>  
                    
                    <li>
                        <a href="#" class="lang" key="setg">
                            
                            
                            <i class="fa fa-gears fa-fw"></i> Settings<span class="fa arrow"></span></a>
                        
                        <ul class="nav nav-second-level">
                            
                             <li>
                        <a href="Change_Pword.php" class="lang" key="changeMp">
                            
                            <i class="fa fa-user-circle-o fa-fw"></i> Change password</a>
                    </li> 
                            </ul>
                    </li>
                    <li>
                        <a href="#" class="lang" key="spec">
                            
                            
                            <i class="fa fa-book fa-fw">
                            </i> grab specialty <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Ajout_Spec.php" class="lang" key="ajt"> Add Speciality</a>
                            </li>
                            
                            
                            <li>
                                <a href="Mod_Spec.php" class="lang" key="modf">Update Speciality</a>
                            </li>
                            <li>
                                <a href="Sup_Spec.php" class="lang" key="sup">Delete Speciality</a>
                            </li>
                              <li>
                        <a href="Details_Spec.php" class="lang" key="detSpec"><i class="fa fa-edit fa-fw"></i>Details Specialty</a>
                    </li> 
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="Orientation.php" class="lang" key="orint"><i class="fa fa-edit fa-fw"></i>Orientation<span class="fa arrow"></span></a>
                        
                        <ul class="nav nav-second-level">
                            
                             
                       <li>
                        <a href="Details_Orientation.php" class="lang" key="orintDet"><i class="fa fa-edit fa-fw"></i>Details Orientation</a>
                    </li>
                            
                            <li>
                        <a href="Details_Etudiant.php" class="lang" key="detEtu"><i class="fa fa-edit fa-fw"></i>Details Student</a>
                    </li>
                            </ul>
                    </li>
                    
                    
                    
                   
                        
                       
                    <li>
                        <a href="TraiterRecour.php" class="lang" key="recr"><i class="fa fa fa-times fa-fw"></i>Treat A remedy</a>
                    </li>
                    
                    
                    <li>
                        <a href="Ouverture.php" class="lang" key="site"><i class="fa fa-edit fa-fw"></i>Opening / closing of site</a>
                    </li>
                    
                    <li>
                        <a href="Ajout_Admin.html" class="lang" key="ajtAd"><i class=" fa fa-sign-out fa-fw"></i>Add a new Admin</a>
                    </li>
                    
                    
                        
                     <li>
                        <a href="logout.php" class="lang" key="dec"><i class=" fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                
          
                    
                </ul>
             
            </div>
           
        </nav>
      
      
        <div id="page-wrapper">

           

        </div>


    </div>

  
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/pace.js"></script>
     <script src="assets/js/lang.js"></script>
    <script src="assets/js/siminta.js"></script>
    
    
   
   

</body>

</html>
