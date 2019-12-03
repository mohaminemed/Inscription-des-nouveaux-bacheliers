   <?php
   $connect = mysqli_connect("localhost", "root", "", "test"); 
	 if(isset($_POST["login"]))  
    {  
      
                 $numAdm = mysqli_real_escape_string($connect, $_POST["numAdm"]);  
                 $pwAdm = mysqli_real_escape_string($connect, $_POST["pwAdm"]);   
                  
                 $query = "SELECT * FROM administrateur WHERE ((pwAdm = '$pwAdm') AND (numAdm = '$numAdm'))";
                 $result = mysqli_query($connect, $query); 
				 
               if(mysqli_num_rows($result)==0)
               
               { echo '<script>alert("Wrong User Details")</script>';
                
                  
               }
            
               else

                {
                  session_name('admin'); 
                   
                  session_start();

                  $_SESSION['numAdm']=$numAdm;

                  $_SESSION['pwAdm']=$pwAdm;

                  header("location:admin.php");


          		 
		  }
	}
?> 