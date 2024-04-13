<?php

if(isset($_POST["registerbtn"]))
{
   $connect = mysqli_connect("localhost","root","","project3");

   $un = $_POST["username"];
   $pwd = $_POST["password"];
   $mob = $_POST["mobile"];



   $qry = "INSERT INTO `register`( `id`,`username`, `password`,`mobile`) VALUES (NULL,'$un','$pwd','$mob')";

   $result = mysqli_query($connect, $qry);

   if($result)
   {
     ?> <script> alert("Registration successful"); </script> <?php
   }
   else
   {
    ?> <script> alert("Registration Failed"); </script> <?php
   }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

    .container{
        padding-top: 100px;
    }
    .card{
        border: 3px solid black;
    }

</style>

</head>
<body>
<div class="container">
  	<div class="row">
    	<div class="col-md-5 mx-auto">
            <div class="card">
      		<div class="card-header">
          		<h3>Registration Form</h3>
      		</div>
      		<div class="card-body">
        	<form method="post">
          		    <div class=form-group>
            		<label >Username</label>
            		<input type="text" name="username" placeholder="username" class="form-control">
          		    </div>
          			<div class="form-group">
            			<label>Password</label>
            			<input type="password" name="password" placeholder="password" class="form-control">
          			</div>
                      <div class=form-group>
            		<label >Mobile</label>
            		<input type="tel" name="mobile" placeholder="Mobile" class="form-control">
          		    </div>
		  			<div class=form-group>
			 			<button type="submit" class="btn btn-primary" name="registerbtn" >Register</button>
		  			</div>
            	</form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>