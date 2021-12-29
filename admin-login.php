
<?php

include 'conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- To pervent back button to login page without logout --> 
    <script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- link to fontawesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="CSS/admin-style.css"> 

    <style>

        .cont{
            /*border-style: solid;*/
            /*background-color: black;*/
            width: 25%;
        }
        .cent{
            text-align: center;
        }

    </style>

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
            <a href="admin-login.php" class="navbar-brand">Empolyee Management System</a>
          </div>
          <div class="collapse navbar-collapse" id="mynavBar">
            <ul class="nav navbar-nav navbar-right">
              <!--<li><a href="display.php"><span class="glyphicon glyphicon-user"></span> Empolyee</a></li>-->
            </ul>
          </div>
        </div>
    </nav>

			<div class="container cont">
                <form action="validate.php" method="post">
                    <div class="head">
                        <h3><b>ADMIN Login</b></h3>
                    </div>
                    <br>
                    <div class="cent"><img src="img/admin.png" height="25%" width="25%"></div>
                    <br>
                    <br>
                    <div>
                        <label>User name</label>
                        <input type="text" name="username" value="" id="username" placeholder="Enter Username" autocomplete="off">
                    </div>
                    <br>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="" id="password" placeholder="Enter Password">
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
                   <br>
                </form>
		</div>
		
		

    
</body>
</html>