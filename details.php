<?php 
include("database.php");
 if(isset($_POST['submit'])) 
 {
	 $customer_name = $_POST['user_name']; 
	 $mob_no = $_POST['user_mob']; 
	 $email = $_POST['user_email']; 
	 $query = "INSERT INTO details (Name, Mobile_num, Email) VALUES ('$customer_name', '$mob_no', '$email')";
	 if(mysqli_query($dbh, $query)) 
	 { 
 
	 header("Location: welcome.html"); exit();
	 } 
	 else
	{
			 echo "Error inserting data: " . mysqli_error($dbh); }
	 } 
	 
?>