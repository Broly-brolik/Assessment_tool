<?php
session_start();
require_once('config.php');
if(isset($_SESSION['id'])) {
header('Location: index.php');

}

if(isset($_POST['submit']))
{
    if(isset($_POST['first_name'],$_POST['last_name'],$_POST['company'],$_POST['role'],$_POST['email'],$_POST['password'],$_POST['phone'],) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['company']) && !empty($_POST['role']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phone']))
    {
        $firstName = trim($_POST['first_name']);
        $lastName = trim($_POST['last_name']);
		$company = trim($_POST['company']);
		$role = trim($_POST['role']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
		$phone = trim($_POST['phone']);
        
        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
            $sql = 'select * from members where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0)
            {
                $sql = "insert into members (first_name, last_name, company, role, email, password, phone, created_at) values(:fname,:lname,:company,:role,:email,:pass,:phone,:created_at)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':fname'=>$firstName,
                        ':lname'=>$lastName,
						':company'=>$company,
						':role'=>$role,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
						':phone'=>$phone,
                        ':created_at'=>$date
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'User has been created successfully';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPassword = $password;

                $errors[] = 'Email address already registered';
            }
        }
        else
        {
            $errors[] = "Email address is not valid";
        }
    }
    else
    {
        if(!isset($_POST['first_name']) || empty($_POST['first_name']))
        {
            $errors[] = 'First name is required';
        }
        else
        {
            $valFirstName = $_POST['first_name'];
        }
        if(!isset($_POST['last_name']) || empty($_POST['last_name']))
        {
            $errors[] = 'Last name is required';
        }
        else
        {
            $valLastName = $_POST['last_name'];
        }
		if(!isset($_POST['company']) || empty($_POST['company']))
        {
            $errors[] = 'Company name is required';
        }
        else
        {
            $valCompany = $_POST['company'];
        }
		if(!isset($_POST['role']) || empty($_POST['role']))
        {
            $errors[] = 'Role is required';
        }
        else
        {
            $valRole = $_POST['role'];
        }
        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email is required';
        }
        else
        {
            $valEmail = $_POST['email'];
        }

        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'Password is required';
        }
        else
        {
            $valPassword = $_POST['password'];
        }
		if(!isset($_POST['phone']) || empty($_POST['phone']))
        {
            $errors[] = 'Phone is required';
        }
        else
        {
            $valPhone = $_POST['phone'];
        }
        
    }

}
?>


<!doctype html>
<html>
<head>
<title>User registration</title>
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
	
		<div class="col-md-6 mt-3 pt-2 align-self-center border-reg">
			<h4 class="mx-auto align-self-center text-center" style="text-transform: uppercase;font-weight: bold;">User Registration</h4>
			<?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success))
                {
                    
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">First Name:</label>
					<div class="col-sm-9">
					<input type="text" name="first_name" placeholder="Enter First Name" class="form-control" value="<?php echo ($valFirstName??'')?>">
				</div></div>
                <div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Last Name:</label>
					<div class="col-sm-9">
					<input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" value="<?php echo ($valLastName??'')?>">
				</div></div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Company:</label>
					<div class="col-sm-9">
					<input type="text" name="company" placeholder="Enter Company" class="form-control" value="<?php echo ($valLastCompany??'')?>">
						</div></div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Sector:</label>
					<div class="col-sm-9">
						<input type="text" name="company" placeholder="Enter Company Sector" class="form-control" value="<?php echo ($valLastCompany??'')?>">
				</div></div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Role:</label>
					<div class="col-sm-9">
					<input type="text" name="role" placeholder="Enter Role" class="form-control" value="<?php echo ($valLastRole??'')?>">
				</div></div>
                <div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Email:</label>
					<div class="col-sm-9">
					<input type="text" name="email" placeholder="Enter Email" class="form-control" value="<?php echo ($valEmail??'')?>">
				</div></div>
				<div class="form-group row">
				<label for="email" class="col-sm-3 col-form-label">Password:</label>
				<div class="col-sm-9">
					<input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo ($valPassword??'')?>">
				</div></div>
				
				<div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Phone:</label>
					<div class="col-sm-9">
					<input type="text" name="phone" placeholder="Enter Phone Number" class="form-control" value="<?php echo ($valLastPhone??'')?>">
				</div></div>

				<button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Sign up</button>
				<p class="pt-2 text-center"> Back to <a href="login.php">Login</a></p>
				</div>
			</form>
				<div class="row h-100 mt-5 justify-content-center align-items-center">
		</div>
	</div>
</div>
</body>
</html>