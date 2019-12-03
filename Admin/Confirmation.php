<?php  
$connect = mysqli_connect("localhost", "root", "", "test");

 session_start(); 
 if(!isset($_SESSION["numinsc"]))   
 {  
      header("location:LoginHtml.html");  
 }
else
{	
           $numinsc =$_SESSION["numinsc"] ; 
           $etat=1;		   
		   $quer = "UPDATE ficheorientation SET etat ='$etat' where numFO='$numinsc' ";
		   if(mysqli_query($connect, $quer))
		   {
			    echo '<script>alert("Confirmed")</script>'; 
                header('location : etudiant.php');
		   }
	  
}
 ?> 