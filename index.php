
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet"  type="text/css"  href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Let`s Connect</title>
  </head>
  <body class="container">
	  
<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname="first_one";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully....Please go ahead and sign in";
?>

 <?php
	 if(isset($_POST['take_user']))
	 {
	 	 $userEmail=$_POST['user_email'];
         $userPassword=$_POST['user_password'];
	    $sql_insert_data="INSERT INTO   take_user(user_email,user_password) VALUES('$userEmail','$userPassword')";
	    $conn->query($sql_insert_data);
	}
	?>
	  <form action="#"method="post">
	  <div class="main center">
		  <div class="box center">
			<div class="icon center">  
	  <i class="far fa-user fa-2x"></i>
			  </div>
	  <h1>Login</h1>
		  <div>
			  
			  <p>Enter Email:</p>
			  <input type="email"   id="user_email" name="user_email" placeholder="Enter Email"/>
			   </div>
	  <div>
			  
			  <p>Enter Password:</p>
			  <input type="password" name="user_password"  id="user_password" placeholder="Enter Password"/>
			  </div>
			  <button type="submit" name="take_user" id="take_user" class="btn">Submit</button>
<!--			  <button class="btn" name="take_user"> Submit</button>-->
		  </div>
	  </div>
	  </form>
<!--
	  
	  user_topic,user_instruction,user_no.of words
	  '$user_Topic','$user_Instruction','$user_no.of words'
-->
	  
<!--
   <form action="#"method="post">
  <div class="form-group">
    <label for="user_email">Email address</label>
    <input type="email" class="form-control" id="user_email" name="user_email">
    
  </div>
-->
<!--
  <div class="form-group">
    <label for="user_password">Password</label>
    <input type="password" class="form-control" id="user_password"  name="user_password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="save_user" class="btn btn-primary">Submit</button>
</form>
-->
	      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>  
<!--
	   
<!DOCTYPE html>
<html lang="en">
  <head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    
  </head>

<-->
