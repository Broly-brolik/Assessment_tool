<?php
session_start();
require_once('config.php');
if(isset($_SESSION['id'])) {


header('Location: index.php');

}
if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from members where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:index.php');
					exit();
				}
				else
				{
					$errors[] = "Wrong Email or Password";
				}
			}
			else
			{
				$errors[] = "Wrong Email or Password";
			}
			
		}
		else
		{
			$errors[] = "Email address is not valid";	
		}

	}
	else
	{
		$errors[] = "Email and Password are required";	
	}

}
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <style type="text/css">
            body {
                font-family: Arial, Verdana, sans-serif;
                font-size: 90%;
                color: #000;
                background-color: #f8f8f8;
                background-image: url("background.jpg");
            }
			.border-reg{
    border: 1px solid #70ad47!important;
	background-color: #f2f2f2;
			}
.col-form-label{
	margin-bottom: 15px;
}
            .container {
                width: 80%;
                margin: 0px auto;
                padding: 0px;
            }

            .title, .description, form {
                width: 100%;
                clear: both;
                margin-top: 20px;
            }

            .title, .description {
                text-align: center;
            }

            .row {
                width: 100%;
                padding: 0px;
                margin: 0px;
                clear: both;
            }

            .column {
                padding: 0px;
                margin: 0px;
                margin-left: 3.2%;
                float: left;
                width: 30%;
                margin-top: 40px;
            }

            fieldset {
                padding: 0px;
                margin: 0px;
                width: 100%;
                border: 0px;
            }

            .select {
                width: 150px;
            }

            .submit input {
                width: 100px;
                background-color: blue;
                color:  white;
            }
			.mt-50{margin-top:50px;}
			.form-control{
				border-radius: 0px;
				border: 1px solid #70ad47;
			}
			.btn{border-radius: 0px;}
        </style>
</head>
<body>

<div class="container h-100"><h1 class="text-center mt-50"> Privacy Impact Assessment for IoT Projects </h1>
	<div class="row h-100 mt-5 justify-content-center align-items-center">
	<div class="col-md-7">
	<p>This tool aims to assess the privacy risks associated to the implementation of IoT projects in the workplace that involve the processing of employee data. 
				<br><br>In accordance with the Article 35 of the General Data Protection Regulation (GDPR): <br><br>
				“Where a type of processing in particular using new technologies, and taking into account the nature, scope, context and purposes of the processing, is likely to result in a high risk to the rights and freedoms of natural persons, the controller shall, prior to the processing, carry out an assessment of the impact of the envisaged processing operations on the protection of personal data." 
				<br><br> We perform a detailed privacy impact assessment based on the information provided on the IoT project setup and data flow. The results comprise a detailed risk score and benchmark analysis with respect to similar project implementations.</p>
	</div>
		<div class="col-md-5 mt-5 pt-2 pb-5 align-self-center border-reg">
			<h4 class="mx-auto text-center" style="text-transform: uppercase;font-weight: bold;">User Login</h4>
			<?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
				}
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control">
				</div>
				<div class="form-group">
				<label for="email">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control">
					 <div class="row">&nbsp;</div>
					<!---</div><p style="text-align: right;"><a href="recovery.php">Forgot Password?</a></p>/--->
<div class="row">
<div class="col-md-6"><button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Submit</button></div>
<div class="col-md-6"><a href="register.php" class="btn btn-light btn-lg btn-block">Sign up</a></div>
</div>
				
				
				
			</form>
		</div>
	</div>
</div>
</body>
</html>