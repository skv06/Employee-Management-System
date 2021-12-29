<?php

include 'conn.php';

$db = mysqli_select_db($con, 'crud_database');

if(isset($_POST['done'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = " select * from  admin_table where username='$username' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['username'] = $username;
			header('location:admin.php');
		}else{
			echo "login failed";
			header('location:failed.php');
		}

}


?>