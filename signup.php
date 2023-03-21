<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php include 'style.php';?>
</head>
<body>

<?php 

include 'connect.php';

if(isset($_POST['submit']))
{
  $YourName=  $_POST['YourName'];
    $Email= $_POST['Email'];
    $ContactNo= $_POST['ContactNo'];
    $Password= $_POST['Password'];
  $CPassword= $_POST['CPassword'];

   /* $Pass=password_hash($Password,PASSWORD_BCRYPT);
   $Cpass=password_hash($Cpassword,PASSWORD_BCRYPT);
 */
  

  $emailquery="select * from users where Email='$Email'";
  $query=mysqli_query($con,$emailquery);
  $emailcount=mysqli_num_rows($query);
  
  if($emailcount>0){  
  ?>  
   <script>
    alert("email alreay exists");
    </script>   
<?php

}
  else{
    if ($Password === $CPassword) {
      $insertquery="insert into users (YourName,Email,ContactNo,Password,CPassword) values ('$YourName','$Email',
      '$ContactNo','$Password','$CPassword')";
  
    $iquery=mysqli_query($con,$insertquery);
   
   if($iquery){
    ?>  
    <script>
     alert("Inserted Successfully");
     </script>   
 <?php
 header('location:login.php');  
 
}
  else{
    ?>  
    <script>
     alert("NOT Inserted");
     </script>   
 <?php
  
  }
  
  }
      else{
    ?>  
    <script>
     alert("password and confirm password did not match");
     </script>   
 <?php
  }
    }
  }



/*  if(isset($_POST["submit"]))
{
	 $Password= $_POST['Password'];
  $CPassword= $_POST['CPassword'];

}
else{
	if ($Password === $CPassword) {
      $insertquery="insert into users (YourName,Email,ContactNo,Password,CPassword) values ('$Password','$CPassword')";
  
    $iquery=mysqli_query($con,$insertquery);
   
   if($iquery)
	{
		echo"inserted successfully";
		
		header('location:home.php');
	}
	else{
		echo"opos sorry";
	}
} 

}

mysqli_real_escape_string ($con,

 */
?>









<div class="wrapper">
    <h1>SignUp</h1>
<form action=""  method="post">
    <input type="text" name="YourName" placeholder="Yourname" required>
    <input type="email" name="Email" placeholder="Eamil" required>
    <input type="password" name="Password" placeholder="Password" required>
    <input type="password" name="CPassword" placeholder="ConfirmPassword" required>
    <input type="number" name="ContactNo" placeholder="ContactNo" required>
    
    <!-- <div class="terms">
        <input type="checkbox" id="checkbox">
        <label for="checkbox"> I argee to these term and condition</label>
      
    </div> -->
            
    <button type="submit" name="submit">CREATE ACCOUNT</button>

</form>    


<div class="member">
    Already a member? <a href="login.php">Login</a>
</div>


</div>















</body>
</html>