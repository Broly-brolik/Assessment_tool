<?php
    //NOW SAVING VALUES IN SESSION
    session_start();
	require_once('config.php');
if(!isset($_SESSION['id'])) {
header('Location: login.php');
}
    //FORM PAGES
    $i = 1;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Assessment Tool</title>
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
        <div class="container">
		
		<?php 
		if(isset($_SESSION['id'])) {
		
		?>
		<h4>Welcome <?php echo ucfirst($_SESSION['first_name']); ?> / <a href="logout.php?logout=true">Logout</a></h4>

		<?php 
		}else{ 
		?>
		<h4><a href="register.php">Sign up</a> / <a href="login.php">Login</a></h4>
		<?php
		}
		?>
		
            <div class="title">
                <h1>Title here</h1>
            </div>

            <div class="title">
                <p>Description here</p>
            </div>
<h1> Subtitle 1 </h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Entry 1</th>
      <th scope="col">Entry 2</th>
      <th scope="col">Entry 3</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $query = $pdo->prepare('SELECT * FROM index');
    $query->execute();

    $result = $query -> fetchAll();

foreach( $result as $row ) {
	echo "<tr>";
    echo "<td>".$row['sub1ent1']."</td>";
    echo "<td>".$row['sub1ent2']."</td>";
	if ($row['sub1ent3'] == '5'){
	echo "<td>".$row['sub1ent4']."</td>";
	}else{
	echo "<td>".$row['sub1ent3']."</td>";
	}
	echo "</tr>";
}
	?>
  

  </tbody>
</table>


<h1> Subtitle 2 </h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Entry 1</th>
      <th scope="col">Entry 2</th>
      <th scope="col">Entry 3</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $query = $pdo->prepare('SELECT * FROM index');
    $query->execute();

    $result = $query -> fetchAll();

foreach( $result as $row ) {
	echo "<tr>";
    echo "<td>".$row['sub2ent1']."</td>";
    echo "<td>".$row['sub2ent2']."</td>";
	if ($row['sub1ent3'] == '5'){
	echo "<td>".$row['sub2ent4']."</td>";
	}else{
	echo "<td>".$row['sub2ent3']."</td>";
	}
	echo "</tr>";
}
	?>
  

  </tbody>
</table>


<h1> Subtitle 3 </h1>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Entry 1</th>
      <th scope="col">Entry 2</th>
      <th scope="col">Entry 3</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $query = $pdo->prepare('SELECT * FROM index');
    $query->execute();

    $result = $query -> fetchAll();

foreach( $result as $row ) {
	echo "<tr>";
    echo "<td>".$row['sub3ent1']."</td>";
    echo "<td>".$row['sub3ent2']."</td>";
	if ($row['sub3ent3'] == '5'){
	echo "<td>".$row['sub3ent4']."</td>";
	}else{
	echo "<td>".$row['sub3ent3']."</td>";
	}
	echo "</tr>";
}
	?>
  

  </tbody>
</table>
        </div>
    </body>
</html>