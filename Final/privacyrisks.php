<?php
    //NOW SAVING VALUES IN SESSION
    session_start();
if(!isset($_SESSION['id'])) {
header('Location: login.php');
}
//SECTION FOR SAVING VALUES INTO SESSION
    if(isset($_POST['risk1_criteria1']) && isset($_POST['risk1_criteria2']) && isset($_POST['risk1_criteria3']) && isset($_POST['risk1_criteria4']) && isset($_POST['risk1_criteria5'])){
        $risk1_criteria1 = (int) $_POST['risk1_criteria1'];
        $risk1_criteria2 = (int) $_POST['risk1_criteria2'];
        $risk1_criteria3 = (int) $_POST['risk1_criteria3'];
        $risk1_criteria4 = (int) $_POST['risk1_criteria4'];
        $risk1_criteria5 = (int) $_POST['risk1_criteria5'];

        if(!empty($risk1_criteria1) && !empty($risk1_criteria2) && !empty($risk1_criteria3) && !empty($risk1_criteria4) && !empty($risk1_criteria5)){
            $_SESSION['risk1_criteria1'] = $risk1_criteria1;
            $_SESSION['risk1_criteria2'] = $risk1_criteria2;
            $_SESSION['risk1_criteria3'] = $risk1_criteria3;
            $_SESSION['risk1_criteria4'] = $risk1_criteria4;
            $_SESSION['risk1_criteria5'] = $risk1_criteria5;
        }
    }
	if(isset($_POST['risk2_criteria1']) && isset($_POST['risk2_criteria2']) && isset($_POST['risk2_criteria3']) && isset($_POST['risk2_criteria4']) && isset($_POST['risk2_criteria5'])){
        $risk2_criteria1 = (int) $_POST['risk2_criteria1'];
        $risk2_criteria2 = (int) $_POST['risk2_criteria2'];
        $risk2_criteria3 = (int) $_POST['risk2_criteria3'];
        $risk2_criteria4 = (int) $_POST['risk2_criteria4'];
        $risk2_criteria5 = (int) $_POST['risk2_criteria5'];

        if(!empty($risk2_criteria1) && !empty($risk2_criteria2) && !empty($risk2_criteria3) && !empty($risk2_criteria4) && !empty($risk2_criteria5)){
            $_SESSION['risk2_criteria1'] = $risk2_criteria1;
            $_SESSION['risk2_criteria2'] = $risk2_criteria2;
            $_SESSION['risk2_criteria3'] = $risk2_criteria3;
            $_SESSION['risk2_criteria4'] = $risk2_criteria4;
            $_SESSION['risk2_criteria5'] = $risk2_criteria5;

        }
    }
	if(isset($_POST['risk4_criteria1']) && isset($_POST['risk4_criteria2']) && isset($_POST['risk4_criteria3']) && isset($_POST['risk4_criteria4']) && isset($_POST['risk4_criteria5'])){
        $risk4_criteria1 = (int) $_POST['risk4_criteria1'];
        $risk4_criteria2 = (int) $_POST['risk4_criteria2'];
        $risk4_criteria3 = (int) $_POST['risk4_criteria3'];
        $risk4_criteria4 = (int) $_POST['risk4_criteria4'];
        $risk4_criteria5 = (int) $_POST['risk4_criteria5'];

        if(!empty($risk4_criteria1) && !empty($risk4_criteria2) && !empty($risk4_criteria3) && !empty($risk4_criteria4) && !empty($risk4_criteria5)){
            $_SESSION['risk4_criteria1'] = $risk4_criteria1;
            $_SESSION['risk4_criteria2'] = $risk4_criteria2;
            $_SESSION['risk4_criteria3'] = $risk4_criteria3;
            $_SESSION['risk4_criteria4'] = $risk4_criteria4;
            $_SESSION['risk4_criteria5'] = $risk4_criteria5;
        }
    }
	if(isset($_POST['risk5_criteria1']) && isset($_POST['risk5_criteria2']) && isset($_POST['risk5_criteria3']) && isset($_POST['risk5_criteria4']) && isset($_POST['risk5_criteria5'])){
        $risk5_criteria1 = (int) $_POST['risk5_criteria1'];
        $risk5_criteria2 = (int) $_POST['risk5_criteria2'];
        $risk5_criteria3 = (int) $_POST['risk5_criteria3'];
        $risk5_criteria4 = (int) $_POST['risk5_criteria4'];
        $risk5_criteria5 = (int) $_POST['risk5_criteria5'];

        if(!empty($risk5_criteria1) && !empty($risk5_criteria2) && !empty($risk5_criteria3) && !empty($risk5_criteria4) && !empty($risk5_criteria5)){
            $_SESSION['risk5_criteria1'] = $risk5_criteria1;
            $_SESSION['risk5_criteria2'] = $risk5_criteria2;
            $_SESSION['risk5_criteria3'] = $risk5_criteria3;
            $_SESSION['risk5_criteria4'] = $risk5_criteria4;
            $_SESSION['risk5_criteria5'] = $risk5_criteria5;

        }
    }
	if(isset($_POST['risk3_criteria1']) && isset($_POST['risk3_criteria2']) && isset($_POST['risk3_criteria3']) && isset($_POST['risk3_criteria4']) && isset($_POST['risk3_criteria5'])){
        $risk3_criteria1 = (int) $_POST['risk3_criteria1'];
        $risk3_criteria2 = (int) $_POST['risk3_criteria2'];
        $risk3_criteria3 = (int) $_POST['risk3_criteria3'];
        $risk3_criteria4 = (int) $_POST['risk3_criteria4'];
        $risk3_criteria5 = (int) $_POST['risk3_criteria5'];

        if(!empty($risk3_criteria1) && !empty($risk3_criteria2) && !empty($risk3_criteria3) && !empty($risk3_criteria4) && !empty($risk3_criteria5)){
            $_SESSION['risk3_criteria1'] = $risk3_criteria1;
            $_SESSION['risk3_criteria2'] = $risk3_criteria2;
            $_SESSION['risk3_criteria3'] = $risk3_criteria3;
            $_SESSION['risk3_criteria4'] = $risk3_criteria4;
            $_SESSION['risk3_criteria5'] = $risk3_criteria5;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Assessment Tool</title>
        <style type="text/css">
            body {
                font-family: Arial, Verdana, sans-serif;
                font-size: 90%;
                color: #666;
                background-color: #f8f8f8;
                background-image: url("background.jpg");
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
                width:75%;
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
                background-color: white;
                color:  black;
            }
        </style>
    </head>

    <body>
        <div class="container">
		<?php 
		if(isset($_SESSION['id'])) {
		
		?>
		<h4>Welcome <a href="index.php"><?php echo ucfirst($_SESSION['first_name']); ?></a> / <a href="logout.php?logout=true">Logout</a></h4>

		<?php 
		}else{ 
		?>
		<h4><a href="register.php">Profile</a> / <a href="login.php">Logout</a></h4>
		<?php
		}
		?>
            <div class="title">
                <h1>Privacy Impact Assessment for IoT Projects</h1>
            </div>
            <div class="title">
                <h2>Privacy Risk Analysis</h2>
				            </div>
            <div class="title">
                <p>At this stage of the assessment, we kindly ask you to specify if the following privacy risks are likely to be faced within your project: </p>
            </div>
			
			

            <form action="likelihood.php" method="post">
			 <div class="row">
			 <div class="column">
                   
                        <fieldset>
                            <legend><b>Excessive Collection of Data</b></legend>
                            
                            <p>
                                <label class="title" for="risk1">This risk corresponds to the collection of additional data than the required for the defined purpose</label>
                                <select name="risk1" id="risk1" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label class="title"> <b>For this risk, please specify the severity of the following perceived harms:</b></label> 
								<div class="row">&nbsp;</div>
								<label for="risk1_criteria1"> Violation of basic rights:</label> 
								<select name="risk1_criteria1" id="risk1_criteria1" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk1_criteria2"> Loss of control over data:</label> 
								<select name="risk1_criteria2" id="risk1_criteria2" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk1_criteria3"> Emotional Harm - Distress:</label> 
								<select name="risk1_criteria3" id="risk1_criteria3" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk1_criteria4"> Financial harm:</label> 
								<select name="risk1_criteria4" id="risk1_criteria4" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk1_criteria5"> Reputational harm:</label> 
								<select name="risk1_criteria5" id="risk1_criteria5" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>															
                            </p>
                        </fieldset>
                    </div>
                </div>
    
					
                <div class="row">
				<div class="column">
                        <fieldset>
                            <legend><b>Repurposing</b></legend>
                            
                            <p>
                                <label class="title" for="risk2">This risk corresponds to the collection of data for other purposes than the defined for this project</label>
                                <select name="risk2" id="risk2" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Important</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label class="title"><b> For this risk, please specify the severity of the following perceived harms:</b></label> 
								<div class="row">&nbsp;</div>
								<label for="risk2_criteria1"> Violation of basic rights:</label> 
								<select name="risk2_criteria1" id="risk2_criteria1" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk2_criteria2"> Loss of control over data:</label> 
								<select name="risk2_criteria2" id="risk2_criteria2" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk2_criteria3"> Emotional Harm - Distress:</label> 
								<select name="risk2_criteria3" id="risk2_criteria3" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk2_criteria4"> Financial harm:</label> 
								<select name="risk2_criteria4" id="risk2_criteria4" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk2_criteria5"> Reputational harm:</label> 
								<select name="risk2_criteria5" id="risk2_criteria5" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>															
                            </p>
                        </fieldset>
                    </div>
				</div>
					
					<div class="row">
					<div class="column">
                        <fieldset>
                            <legend><b>Sharing with Third Parties</b></legend>
                            
                            <p>
                                <label class="title" for="risk3">This risk corresponds to unathorized  data sharing with other parties that are specified as project stakeholders</label>
                                <select name="risk3" id="risk3" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Important</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label class="title"><b> For this risk, please specify the severity of the following perceived harms:</b></label> 
								<div class="row">&nbsp;</div>
								<label for="risk3_criteria1"> Violation of basic rights:</label> 
								<select name="risk3_criteria1" id="risk3_criteria1" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk3_criteria2"> Loss of control over data:</label> 
								<select name="risk3_criteria2" id="risk3_criteria2" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk3_criteria3"> Emotional Harm - Distress:</label> 
								<select name="risk3_criteria3" id="risk3_criteria3" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk3_criteria4"> Financial harm:</label> 
								<select name="risk3_criteria4" id="risk3_criteria4" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk3_criteria5"> Reputational harm:</label> 
								<select name="risk3_criteria5" id="risk3_criteria5" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>												
                            </p>
                        </fieldset>
                    </div>
					</div>
					
					<div class="row">
					<div class="column">
                        <fieldset>
                            <legend><b>Unauthorized Access</b></legend>
                            
                            <p>
                                <label class="title" for="risk4">This risk corresponds to the unauthorized access to data by employer or other employees</label>
                                <select name="risk4" id="risk4" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Important</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label class="title"><b> For this risk, please specify the severity of the following perceived harms:</b></label> 
								<div class="row">&nbsp;</div>
								<label for="risk4_criteria1"> Violation of basic rights:</label> 
								<select name="risk4_criteria1" id="risk4_criteria1" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk4_criteria2"> Loss of control over data:</label> 
								<select name="risk4_criteria2" id="risk4_criteria2" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk4_criteria3"> Emotional Harm - Distress:</label> 
								<select name="risk4_criteria3" id="risk4_criteria3" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk4_criteria4"> Financial harm:</label> 
								<select name="risk4_criteria4" id="risk4_criteria4" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk4_criteria5"> Reputational harm:</label> 
								<select name="risk4_criteria5" id="risk4_criteria5" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>												
                            </p>
                        </fieldset>
                    </div>
					</div>
					
					<div class="row">
					<div class="column">
                        <fieldset>
                            <legend><b>Data Manipulation</b></legend>
                            
                            <p>
                                <label class="title" for="risk5">This risk corresponds to the manipulation of data by third party for malicious intentions at source (collection) or while processing.</label>
                                <select name="risk5" id="risk5" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Important</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label class="title"><b> For this risk, please specify the severity of the following perceived harms:</b></label> 
								<div class="row">&nbsp;</div>
								<label for="risk5_criteria1"> Violation of basic rights:</label> 
								<select name="risk5_criteria1" id="risk5_criteria1" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk5_criteria2"> Loss of control over data:</label> 
								<select name="risk5_criteria2" id="risk5_criteria2" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk5_criteria3"> Emotional Harm - Distress:</label> 
								<select name="risk5_criteria3" id="risk5_criteria3" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk5_criteria4"> Financial harm:</label> 
								<select name="risk5_criteria4" id="risk5_criteria4" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk5_criteria5"> Reputational harm:</label> 
								<select name="risk5_criteria5" id="risk5_criteria5" class="select">
                                    <option value=1> Negligible</option>
									<option value=2> Limited</option>
									<option value=3> Significant</option>
									<option value=4> Maximum</option>
                                </select>												
                            </p>
                        </fieldset>
                    </div>

                </div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="column">&nbsp;</div>
					<div class="submit"><input type="submit" value="Next" /></div>
					<div class="row">&nbsp;</div>
                </div>
            </form>
        </div>
    </body>
</html>