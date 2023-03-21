<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php include 'style.php';
?>
</head>

<body>

<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $Email_search="select * from users where Email='$Email'";
 
    $query=mysqli_query($con,$Email_search);

    $Email_count=mysqli_num_rows($query);

    if($Email_count){

        $Email_Pass=mysqli_fetch_assoc($query);

       $db_Pass= $Email_Pass['Password'];

      /*  $Pass_decode=password_verify($Password,$db_Pass); */

       if($db_Pass){
        echo"login successful";
         header('location:home.php');
		 }
		 
    else{
        echo"password incorrect";
       }
    }
       else{
        echo"invalid email";
       }
         
}

?>



<div class="wrapper">
    <h1>Login Now</h1>

<form action=""  method="post">
    <input type="email" name="Email" placeholder="Eamil" required>
    <input type="password" name="Password" placeholder="Password" required>
    
    
    <button type="submit" name="submit">Login</button>
</form>    


<div class="member">
    Not Have an Account? <a href="signup.php">SignUp Here</a>
</div>






</body>
</html>







<!-- <div class="terms">
    <input type="checkbox" id="checkbox">
    <label for="checkbox"> I argee to these term and condition</label>
  
</div> -->
