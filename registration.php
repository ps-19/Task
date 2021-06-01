
<?php

     require_once('configuration.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register or Log In</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<style>
	body{
        background-image: url('img4.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>

<body>
	<div>
		<?php

        require_once('task.php');

		?>
	</div>

<div class="container" align="center">

    <div class="row">   <!-- Bootstrap Library-->
    
	    <form action="registration.php" method="post">
		    <div class="col-sm-3">
		    <h1>Registration Form</h1>
		    <p><h4>Fill up the form to get signed in and registered.</h4></p>
		        
		        <div class="mb-3"></div>
			    <label for="firstname"  style="color: #FF6F61"><h5><br>First Name</br></h5></label>
			    <input class="form-control" placeholder="Enter First Name" type="text" name="firstname" required>
		        
		        <label for="middlename" style="color: #FF6F61"><h5><br>Middle Name</br></h5></label>
			    <input class="form-control" placeholder="Enter Middle Name" type="text" name="middlename">
		        
		        <label for="lastname" style="color: #FF6F61"><h5><br>Last Name</br></h5></label>
			    <input class="form-control" placeholder="Enter Last Name" type="text" name="lastname" required>
		        
		        <label for="email" style="color: #FF6F61"><h5><br>Email Address</br></h5></label>
			    <input class="form-control" placeholder="Enter Email" type="email" name="email" required>
		        
		        <label for="phonenumber" style="color: #FF6F61"><h5><br>Phone Number</br></h5></label>
			    <input class="form-control" placeholder="Enter Phone Number" type="text" name="phonenumber" required>
		        
		        <label for="password" style="color: #FF6F61"><h5><br>Password</br></h5></label>
			    <input class="form-control"  placeholder="Enter Password" type="password" name="password" required>
		        
		        <h5><p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p></h5>
		        <div class="mb-3"></div>
		        <input class="btn btn-primary" type="submit" id="SignedUp" name="create" value="Sign Up">

		    </div>
		        <div class="container signin">
		           <h5><p>Already have an account? <a href="#">Sign In</a>.</p></h5>
		        </div>
	    </form>

    </div>
</div>
    
    <!-- Jquery && Sweet Alert CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    	
    	$(function(){
            $('#SignedUp').click(function(){
				 swal({
					title: "You are successfully registered!",
					text: "Thank you for registering!",
					icon: "success",
			      });
            });
    	});

    </script>




</body>

</html>