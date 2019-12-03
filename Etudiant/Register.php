<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
   
 if(isset($_POST["register"]))  
 {  
           
           $nom = mysqli_real_escape_string($connect, $_POST["nom"]);  
           $prenom = mysqli_real_escape_string($connect, $_POST["prenom"]);
            $user = mysqli_real_escape_string($connect, $_POST["user"]);
           $address = mysqli_real_escape_string($connect, $_POST["address"]);  
		   $email = mysqli_real_escape_string($connect, $_POST["email"]); 
           $password = mysqli_real_escape_string($connect, $_POST["password"]);
           $passwordConfirmed = mysqli_real_escape_string($connect, $_POST["passwordConfirmed"]); 
           $Date = mysqli_real_escape_string($connect, $_POST["Date"]); 
		    $quer = "SELECT*FROM candidat where (username= '$user')";
	               $result = mysqli_query($connect, $quer)
                   or die("echec".mysqli_error($connect));
           if(mysqli_num_rows($result)==0)
		   {
            
             if($passwordConfirmed == $password)
			 {

              $query = "INSERT INTO candidat(username ,nom,prenom,address,email,password,Date) VALUES
               ('$user','$nom ','$prenom','$address','$email','$password' ,'$Date')";
                 if(mysqli_query($connect, $query))   
           
                     header("location:etudiant.php");
                
             }
		   
             else 
     
               echo '<script>alert("passwords are not equal")</script>'; 
		   }
		   else
		   {    
	            echo '<script>alert("username invalide")</script>'; 
			    header('location : Register.html');
		   }
            
     
     
 }
 ?>