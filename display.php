<?php

include 'conn.php';

if(!isset($_SESSION['username'])){
	header('location:admin-login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>

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
              <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Home</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        </div>
    </nav>

		<br><br>
  
		<div class = "employees-table">
        <table  id="tabledata" class=" table table-striped table-hover table-bordered">
            <tr class="bg-dark text-white text-center">
                <th> Id </th>
                <th> Username </th>
                <th> Email </th>
                <th> Password </th>
                <th> Phone </th>
                <th> Update </th>
                <th> Delete </th>

            </tr >

        <?php

        $q = "select * from data_table ";

        $query = mysqli_query($con,$q);
        
        while($result = mysqli_fetch_array($query, MYSQLI_BOTH)){
        ?>

        <tr class="text-center">
            <td> <?php echo $result['id'];  ?> </td>
            <td> <?php echo $result['username'];  ?> </td>
            <td> <?php echo $result['email_id'];  ?> </td>
            <td> <?php echo $result['password'];  ?> </td>
            <td> <?php echo $result['phone'];  ?> </td>
            <td> <button class="btn-success btn"> <a href="edit.php?id=<?php echo $result['id']; ?>" class="text-white"> Update </a> </button> </td>
            <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $result['id']; ?>" class="text-white"> Delete </a>  </button> </td>

        </tr>
        
        <?php
           }
        ?>
 
    </table>  

</div>
    
</body>
</html>