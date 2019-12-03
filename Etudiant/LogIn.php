 <?php
         $connect = mysqli_connect("localhost", "root", "", "test"); 
		 if(isset($_POST["login"]))  
    { 
                 $username = mysqli_real_escape_string($connect, $_POST["username"]);  
                 $password = mysqli_real_escape_string($connect, $_POST["password"]);   
                  
                 $query = "SELECT * FROM candidat WHERE ((password = '$password') AND (username = '$username'))";
                 $result = mysqli_query($connect, $query); 
				 
               if(mysqli_num_rows($result)==0)
               {
                   echo '<script>alert("Wrong User Details")</script>';
                   
               }
               else
                {
               session_name('user');
                  session_start(); 
                 
                  $_SESSION['username']=$username;
                  $_SESSION['password']=$password;
                  header("location:etudiant.php");

                }
	}
 ?> 