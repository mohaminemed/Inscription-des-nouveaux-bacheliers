<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
session_name('admin');
 session_start();  
 if(!isset($_SESSION["numAdm"]))  
 {  
      header("location:LogOnAdmin.html");  
 }  
   
           debut:
		   $quer1 = "SELECT * FROM recours R,bacheliers B where (B.numinsc=R.numRec and etatRec=0)order by B.moybac desc ";
           $result1 = mysqli_query($connect, $quer1)
           or die("echec".mysqli_error($connect));	
           
		   while($data1 = mysqli_fetch_row($result1))
		   {    
	           
	           $quer2 = "SELECT*FROM specialite where (codeSpec = '$data1[1]')";
	               $result2 = mysqli_query($connect, $quer2)
                   or die("echec".mysqli_error($connect));
                   while($data2= mysqli_fetch_row($result2))
				   {     
			       
					    if($data2[4]>0 )
						
					    {
						 $quer = "SELECT*FROM ficheorientation where (numFO = '$data1[0]')";
	                     $result = mysqli_query($connect, $quer)
                         or die("echec".mysqli_error($connect));
				         $data= mysqli_fetch_row($result);
						
						  $quer11 = "UPDATE specialite SET nbPSpec=nbPSpec+1 WHERE (codeSpec='$data[1]')";

                          $quer22 = "UPDATE specialite SET nbPSpec=nbPSpec-1 WHERE (codeSpec='$data1[1]')";
						  
						  $quer33 = "UPDATE recours SET etatRec=1 WHERE numRec='$data1[0]'";
						  
						  $quer44 = "UPDATE ficheorientation SET codeSpec ='$data1[1]' where numFO='$data1[0]' ";
						  
                           if(mysqli_query($connect, $quer11)&& mysqli_query($connect, $quer22)&&mysqli_query($connect, $quer33)&&mysqli_query($connect, $quer44 ))  
						   {
						    header('location :admin.php');
							goto debut;
						   }
						
						}
						
				   }
		   }
 
?> 