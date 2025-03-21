<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();
require_once('config.php');
if(isset($_SESSION['id'])) {


header('Location: index.php');

}
$error = "";
$success = "";
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .= "Invalid email address please type a valid email address!";
   }else{

    $result = $pdo->prepare("SELECT * FROM members WHERE email = :email");
    $result->bindValue(':email', $email);
    $result->execute();
    $RowCount = $result->rowCount();

    if ( $RowCount == 0 )
    { 
        $error .= "No user is registered with this email address!";
    }
  }
   if($error!=""){
   
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*244);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
// Insert Temp Table

$data_temp = [
    'email' => $email,
    'key' => $key,
    'expdate' => $expDate,
];

$sql_temp = "INSERT INTO password_reset_temp (`email`, `key`, `expDate`) VALUES (:email, :key, :expdate)";
$pdo->prepare($sql_temp)->execute($data_temp);




$output ='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="'.$siteurl.'/reset-password.php?
key='.$key.'&email='.$email.'&action=reset" target="_blank">
'.$siteurl.'/reset-password.php
?key='.$key.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$body = $output; 
$subject = "Password Recovery";

$email_to = $email;
$fromserver = $email_site; 


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

$mail->IsHTML(true);
$mail->From = $fromserver;
$mail->FromName = "Password Recovery";
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
$error .= "Mailer Error: " . $mail->ErrorInfo;
}else{
$success .=  "An email has been sent to you with instructions on how to reset your password.</p>";
	}
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
	<p>Please enter your e-mail address to recover your password. <br>
You will receive an e-mail with instructions on how to reset the password. <br>It can take up to few minutes, please be patient.</p>
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
						
						
						?>
			<form method="post" action="" name="reset">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control">
				</div>

<div class="row">
<div class="col-md-12"><button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Submit</button></div>
</div>
				
				
				
			</form>
		</div>
	</div>
</div>
</body>
</html>
