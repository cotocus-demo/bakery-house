<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Acme&family=Baloo+Chettan+2&display=swap" rel="stylesheet">
	<style>
		body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,4)),  url('../img/b.jpg');
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	height: 100vh;
	font-size: 20px;
    overflow-x: hidden;
	color: white;
	font-family: 'Acme', sans-serif;
}
	</style>
</head>
<body>
	<div>
		<?php 
		   if (isset($_POST['create'])) {
		        	$firstname   = $_POST['firstname'];
		   			$lastname    = $_POST['lastname'];
		         	$email       = $_POST['email'];
		            $phonenumber = $_POST['phonenumber'];
		            $password    = $_POST['password'];
               $sql= "INSERT INTO customer(firstname,lastname,email,phonenumber,password) VALUES (?,?,?,?,?)";
               $stmtinsert = $db->prepare($sql);
	           $result= $stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
               if($result){
		       echo 'Successfully saved.';
	           }else{
		       echo 'There were errors while saving the data';
	          }
		   }
		 ?>
	</div>
    <div>
    	<form action="registration/" method="post">
    		<div class="container">
    			<div class="row">
    				<div class="col-sm-3">
    			     <h1>Resgistration</h1>
    			     <p>Fill up the form with correct values.</p>
    			     <hr class="mb-3">
    			     <label for="firstname"><b>First Name</b></label>
    			     <input class="form-control" type="text" name="firstname" required>

    			     <label for="lastname"><b>Last Name</b></label>
    			     <input class="form-control" type="text" name="lastname" required>

    			     <label for="email"><b>Email</b></label>
    			     <input class="form-control" type="email" name="email" required>

    			     <label for="phonenumber"><b>Phone No.</b></label>
    			     <input class="form-control" type="text" name="phonenumber" required>

    			     <label for="password"><b>Password</b></label>
    			     <input class="form-control" type="password" name="password" required>
                     <hr class="mb-3">
    			     <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
    			     </div>
    		    </div>
    		</div>
    	</form>
    </div>
</body>
</html>