<?php
 
$connect = mysqli_connect("localhost", "root", "", "test"); 
session_name('admin');
session_start();
 if(!isset($_SESSION["numAdm"]) ||!isset($_SESSION["pwAdm"]))  
    {  
      header("location:LogOnHtml.html");  
    }  
 else
	session_start();
	 if(isset($_SESSION["ouvert"]))
                { 
			      session_unset();

                  setcookie(); 

                  session_destroy();

                  header("location:admin.php");
				  
				}
	 else
	            {
		
                  $_SESSION['ouvert']=true;
                  
                  header("location: site\Etudiant\site.php");

                }

          	 
		  
	
?> 


