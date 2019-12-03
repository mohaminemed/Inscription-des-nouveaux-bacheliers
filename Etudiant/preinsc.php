 <?php  
 $connect = mysqli_connect("localhost", "root", "", "test");

 session_start(); 
 if(!isset($_SESSION["numinsc"])&&!isset($_SESSION["password"]))
 {
      header("location:LoginHtml.html");  
 }  
 if(isset($_POST["register"]))  
 {  
             
           $numinsc = $_SESSION["numinsc"];  
           $numbac = mysqli_real_escape_string($connect, $_POST["numbac"]);   
           $moybac = mysqli_real_escape_string($connect, $_POST["moybac"]);  
           $query= "INSERT INTO bacheliers(numinsc,numbac,moybac) VALUES('$numinsc','$numbac','$moybac')";
           if(mysqli_query($connect, $query))  
            {    
			     header("location:fiche_voeux.php");
				   
            }
 }  
 ?>