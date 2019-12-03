<?php  
 $connect = mysqli_connect("localhost", "root", "", "test"); 

 session_start();  
 if($_SESSION["numAdm"]== "med19" )  
 {  
     
   if(isset($_POST["register"]))  
    {  
           $num = mysqli_real_escape_string($connect, $_POST["num"]);
           $nom = mysqli_real_escape_string($connect, $_POST["nom"]);  
           $prenom = mysqli_real_escape_string($connect, $_POST["prenom"]);
           $address = mysqli_real_escape_string($connect, $_POST["address"]);  
		   $email = mysqli_real_escape_string($connect, $_POST["email"]); 
           $password = mysqli_real_escape_string($connect, $_POST["password"]);
           $passwordConfirmed = mysqli_real_escape_string($connect, $_POST["passwordConfirmed"]); 
            
           if($passwordConfirmed == $password){

            $query = "INSERT INTO administrateur VALUES
                      ('$num ','$nom ','$prenom','$address','$email','$password')";
          
               if(mysqli_query($connect, $query))  
               
               
               {  
                    

                echo '<script>alert("Registration Done")</script>'; 
				               header("location:admin.php");  
                
            
			    
               }  
        
            }
          else 
     
          echo '<script>alert("passwords are not equal")</script>'; 
            
     
	}
 }
 ?>