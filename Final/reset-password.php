<?php
session_start();
require_once('config.php');
if(isset($_SESSION['id'])) {


header('Location: index.php');

}
$error = "";
$success = "";
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
   $result = $pdo->prepare("SELECT * FROM `password_reset_temp` WHERE `key`=:key and `email`=:email;");
   $result->bindValue(':email', $email);
   $result->bindValue(':key', $key);
   
   $result->execute();
   $resulte = $result -> fetch();
    $RowCount = $result->rowCount();
  
  
   if ( $RowCount == 0 ){
  $error .= 'The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.';
	}else{
 
  $expDate = $resulte['expDate'];
  if ($expDate >= $curDate){
  ?>

<?php
}else{
$error .= "The link is expired. You are trying to use the expired link which 
was valid only for 24 hours (1 days after request).";
            }
      }
		
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
	 
	 
$password = trim($_POST['pass']);
$options = array("cost"=>4);
$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);


$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");

  if($error!=""){

}else{



 $stmt = $pdo->prepare("UPDATE members SET password = :pass WHERE email= :email");
 $stmt->execute([':pass' => $hashPassword, ':email'=> $email]);

 $stmt_del = $pdo->prepare("DELETE FROM password_reset_temp WHERE email= :email");
 $stmt_del->execute([':email'=> $email]);

$success .= 'Congratulations! Your password has been updated successfully.
<p><a href="login.php">
Click here</a> to Login.</p>';
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

<div class="container h-100"><h1 class="text-center mt-50"> User Password Recovery </h1>
	<div class="row h-100 mt-5 justify-content-center align-items-center">
	<div class="col-md-7">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consectetur sodales est, tincidunt tincidunt magna viverra eu. Praesent ultricies pellentesque ante, eu efficitur felis mattis sed. Proin at risus et magna accumsan venenatis eu non elit. Aliquam sagittis, sapien sed suscipit volutpat, urna mauris pretium mauris, id elementum turpis tortor vel arcu. Phasellus nec sagittis felis. Cras sodales suscipit placerat. Pellentesque tristique mauris arcu, vel rutrum magna laoreet non.
	</p>
	</div>
		<div class="col-md-5 mt-5 pt-2 pb-5 align-self-center border-reg">
			<h4 class="mx-auto text-center" style="text-transform: uppercase;font-weight: bold;">User Password Recovery</h4>
	<?php 
			if($error!=""){
						echo '<div class="alert alert-danger">'.$error.'</div>';
						
			}
			
			if($success!=""){
						echo '<div class="alert alert-success">'.$success.'</div>';
						
			}
						if (isset($_GET["key"])){
						
						?>
			<form method="post" action="" name="update">
  <input type="hidden" name="action" value="update" />
  
				<div class="form-group">
					<label for="email">Enter New Password:</label>
					<input type="password" name="pass" placeholder="Enter New Password" class="form-control">
				</div>
<input type="hidden" name="email" value="<?php echo $email;?>"/>
<div class="row">
<div class="col-md-12"><button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Reset Password</button></div>
</div>
				
				
				
			</form>
			
						<?php }else{
						header('Location: recovery.php');
						}							
						?>
		</div>
	</div>
</div>
</body>
</html>
