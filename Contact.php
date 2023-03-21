<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include "styling.php";

?>
</head>

<body>

<?php 

include 'connect.php';

if (isset($_POST['submit']))
{
	if($_POST["Email"] =="" || $_POST["Message"] == "")
	echo"You must enter email and message";
	
	else{
		$insertquery=("insert into feedback Values ('$_POST[Name]','$_POST[Email]','$_POST[Subject]','$_POST[Message]','$_POST[PhoneNo]')");
		
		$mquery=mysqli_query($con,$insertquery);
   
		
		if($mquery)
		{
		 ?>  
    <script>
     alert("Thanks for message!");
     </script>   
 <?php
		}
		else{
    ?>  
    <script>
     alert("Please write some commite");
     </script>   
 <?php
  
  }
	}

}





?>

<form action="" method="post">

<input type="text" name="Name" placeholder="Name"  >

<input type="email"  name="Email"placeholder="Email" >

<input type="number" name="PhoneNo" placeholder="PhoneNo" >

<input type="text" name="Subject" placeholder="Subject" >

<input type="text" name="Message" placeholder="Contact Message" >
<button type="submit" name="submit"> Send me  </button>
</form>


</body>
</html>