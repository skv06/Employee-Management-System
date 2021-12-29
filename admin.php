
<?php

//session_start();
include 'conn.php';

if(!isset($_SESSION['username'])){
	header('location:admin-login.php');
}

if(isset($_POST['done'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $q = "INSERT INTO `data_table`(`username`, `email_id`, `password`, `phone`) VALUES ('$username','$email','$password','$phone')";
   
    $query = mysqli_query($con,$q);
   }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Home</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- link to fontawesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="CSS/admin-style.css"> 


</head>
<body>
    <nav class="nav navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="admin.php" class="navbar-brand">Empolyee Management System</a>
          </div>
          <div class="collapse navbar-collapse" id="mynavBar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="display.php"><span class="glyphicon glyphicon-user"></span> Empolyee</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </div>
    </nav>

			<div class="container cont">
                <form method="post">
                    <div class="head">
                        <h3><b>Add Empolyee Details</b></h3>
                    </div>
                    <div style="padding-top: 35px;">
                        <label>Full Name*</label><label class="validation-error hide" id="fullNameValidationError">This field is required.</label>
                        <input type="text" name="username" id="fullName" placeholder="Enter Name">
                    </div>
                    <div>
                        <label>Email Id</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password">
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="number" name="phone" id="phone" placeholder="Enter Phone Number">
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
                   <br>
                </form>
		</div>
		
		

    
</body>
</html>