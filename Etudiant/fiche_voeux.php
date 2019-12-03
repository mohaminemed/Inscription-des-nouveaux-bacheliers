 <?php  
 $connect = mysqli_connect("localhost", "root", "", "test"); 

 session_start();  
 if(!isset($_SESSION["numinsc"]) and !isset($_SESSION["password"]) )  
 {  
      header("location:LoginHtml.html");  
 }
else
{	
     $numinsc =$_SESSION["numinsc"]; 
	 $quer1 = "SELECT*FROM bacheliers where (numinsc='$numinsc') ";
     $result1 = mysqli_query($connect, $quer1)
     or die("echec".mysqli_error($connect));	
     $data1 = mysqli_fetch_row($result1);
	 $quer2 = "SELECT*FROM specialite where (moySpec<= '$data1[2]')";
     $result=mysqli_query($connect, $quer2);
	 $result2 =mysqli_query($connect, $quer2);
	 $result3 =mysqli_query($connect, $quer2);
	 $result4 =mysqli_query($connect, $quer2);
	 $result5=mysqli_query($connect, $quer2);
	 $result6 =mysqli_query($connect, $quer2);
	 $result7 =mysqli_query($connect, $quer2);
	 $result8=mysqli_query($connect, $quer2);
	 $result9 =mysqli_query($connect, $quer2);
	 $result10=mysqli_query($connect, $quer2);
	 
 if(isset($_POST["register"]))  
   {     
      
     $numinsc =$_SESSION["numinsc"]; 
     $prem = mysqli_real_escape_string($connect, $_POST["prem"]); 
	 $deux = mysqli_real_escape_string($connect, $_POST["deux"]); 
	 $trois = mysqli_real_escape_string($connect, $_POST["trois"]); 
	 $quatre= mysqli_real_escape_string($connect, $_POST["quatre"]); 
	 $cinq = mysqli_real_escape_string($connect, $_POST["cinq"]); 
	 $six = mysqli_real_escape_string($connect, $_POST["six"]); 
	 $sept = mysqli_real_escape_string($connect, $_POST["sept"]); 
	 $huit = mysqli_real_escape_string($connect, $_POST["huit"]);
	 $neuf = mysqli_real_escape_string($connect, $_POST["neuf"]); 
	 $dix = mysqli_real_escape_string($connect, $_POST["dix"]);
 
	 $query = "INSERT INTO fichevoeux (numFV,prem,deux,trois,quatre,cinq,six,sept,huit,neuf,dix) 
	 VALUES ('$numinsc','$prem','$deux','$trois','$quatre','$cinq','$six','$sept','$huit','$neuf','$dix')";
           if(mysqli_query($connect, $query))  
		   {			   
			header("location:etudiant.php");
		   }
   }
     
}  
?>
 <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Fiche de Voeux</title>
  
  
  
       <link rel="stylesheet" href="assets/css/consulterStyle.css">
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Muli:600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    
  
</head>

    <header>
        <div class="row topbar hidden-xs">
            <ul class="text-right" >
                <li class="funny"><span ><i class="fa fa-phone"></i> +213(0) 23 23 67</span></li>
                <li class="fun" ><span><i class="fa fa-envelope"></i> sdfpi@mesrs.dz </span></li>
                <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                
            </ul>
        </div>
        <div class="row">
            <div class="logo">
                <img src="assets/images/logo.png" alt="">
            </div>
            <nav class="navbar navbar-default ">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse text-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="site.php"><i class="fa fa-home"></i>  Home <span class="sr-only">(current)</span></a></li>
                       
                        <li><a href="etudiant.php">Profil </a></li>
                       
                        
                        <li><a href="logout.php">LogOut</a></li>
                        
                    </ul>
                    
                    
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        
    </header>
<body>
  <div class="wrapper">
	<div class="container">

		<h1>Fill out your greeting card</h1>
		         <img src="assets/images/if_Certificate-24_103833.png" alt="">
<form class="form" method="post" >
			
<p>
<select name="prem" >
<option value="" selected="selected">1st Choice</option>
   <?php  while($data2 = mysqli_fetch_row($result)){
	echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p>


<p>
<select  name="deux" >
<option value="" selected="selected">2nd Choice</option>
   <?php  while($data2 = mysqli_fetch_row($result2)){
	echo '<option value="'.$data2[0].'">'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p>


 <p>
<select name="trois" >
<option value="" selected="selected">3rd Choice</option>
   <?php  while($data2 = mysqli_fetch_row($result3)){
	echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p>


<p>
<select name="quatre" >
<option value="" selected="selected">4th Choice</option>
    <?php  while($data2 = mysqli_fetch_row($result4)){
	echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p>


<p>
<select name="cinq" >
<option value="" selected="selected">5th Choice</option>
    <?php  while($data2 = mysqli_fetch_row($result5)){
	echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p>


<p>
<select name="six" >
<option value="" selected="selected">6th Choice</option>
   <?php  while($data2 = mysqli_fetch_row($result6)){
   echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p> 


<p>
<select name="sept" >
<option value="" selected="selected">7th Choice</option>
   <?php  while($data2 = mysqli_fetch_row($result7)){
	echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p> 


<p>
<select name="huit" >
<option value="" selected="selected">8th Choice</option>
   <?php  while($data2 = mysqli_fetch_row($result8)){
	echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p>

<p>
<select name="neuf" >
<option value="" selected="selected">9th Choice</option>
   <?php  while($data2 = mysqli_fetch_row($result9)){
	echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p>

<p>
<select name="dix" >
<option value="" selected="selected">10th Choice</option>
   <?php  while($data2 = mysqli_fetch_row($result10)){
	echo '<option value="'.$data2[0].'" >'.$data2[0]." ".$data2[1]." ".$data2[2].'</option>';}?>
</select>
</p>


   <input type="submit" name="register" value="Validate" class="registerClass" />  					 
                    				 
</form>	
</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src="assets/js/jquery-3.2.1.min.js"></script>

    <script src="assets/js/login.js"></script>

</body>
</html>
