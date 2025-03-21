<?php
    //NOW SAVING VALUES IN SESSION
    session_start();
require_once('config.php');
if(!isset($_SESSION['id'])) {


header('Location: login.php');

}
if(isset($_POST['entry_1_sub1']) && isset($_POST['entry_6_sub2']) && isset($_POST['entry_7_sub3'])){

	$sub1ent1 = $_POST['entry_1_sub1'];
	$sub1ent2 = $_POST['entry_2_sub1'];
	$sub1ent3 = $_POST['entry_3_sub1'];
	$sub1ent4 = $_POST['entry_4_sub1'];
	
	$sub2ent1 = $_POST['entry_4_sub2'];
	$sub2ent2 = $_POST['entry_5_sub2'];
	$sub2ent3 = $_POST['entry_6_sub2'];
	$sub2ent4 = $_POST['entry_7_sub2'];
	
	$sub3ent1 = $_POST['entry_7_sub3'];
	$sub3ent2 = $_POST['entry_8_sub3'];
	$sub3ent3 = $_POST['entry_9_sub3'];
	$sub3ent4 = $_POST['entry_10_sub3'];


$data_temp = [
    'sub1ent1' => $sub1ent1,
    'sub1ent2' => $sub1ent2,
    'sub1ent3' => $sub1ent3,
	'sub1ent4' => $sub1ent4,
	
	'sub2ent1' => $sub2ent1,
    'sub2ent2' => $sub2ent2,
    'sub2ent3' => $sub2ent3,
	'sub2ent4' => $sub2ent4,
	
	'sub3ent1' => $sub3ent1,
    'sub3ent2' => $sub3ent2,
    'sub3ent3' => $sub3ent3,
	'sub3ent4' => $sub3ent4,
];

$sql_temp = "INSERT INTO `index` (`sub1ent1`, `sub1ent2`, `sub1ent3`, sub1ent4, `sub2ent1`, `sub2ent2`, `sub2ent3`, sub2ent4, `sub3ent1`, `sub3ent2`, `sub3ent3`, sub3ent4) VALUES (:sub1ent1, :sub1ent2, :sub1ent3, :sub1ent4, :sub2ent1, :sub2ent2, :sub2ent3, :sub2ent4, :sub3ent1, :sub3ent2, :sub3ent3, :sub3ent4)";
$pdo->prepare($sql_temp)->execute($data_temp);

}
    //SECTION FOR SAVING FORM 1 VALUES INTO SESSION
    if(isset($_POST['criteria_1']) && isset($_POST['criteria_2']) && isset($_POST['criteria_3']) && isset($_POST['criteria_4']) && isset($_POST['criteria_5']) && isset($_POST['criteria_6']) && isset($_POST['criteria_7']) && isset($_POST['criteria_8']) && isset($_POST['criteria_9'])){
        $criteria_1 = $_POST['criteria_1'];
        $criteria_2 = $_POST['criteria_2'];
        $criteria_3 = $_POST['criteria_3'];
        $criteria_4 = $_POST['criteria_4'];
        $criteria_5 = $_POST['criteria_5'];
		$criteria_6 = $_POST['criteria_6'];
        $criteria_7 = $_POST['criteria_7'];
        $criteria_8 = $_POST['criteria_8'];
        $criteria_9 = $_POST['criteria_9'];

        if(!empty($criteria_1) && !empty($criteria_2) && !empty($criteria_3) && !empty($criteria_4) && !empty($criteria_5) && !empty($criteria_6) && !empty($criteria_7) && !empty($criteria_8) && !empty($criteria_9)){
            $_SESSION['criteria_1'] = $criteria_1;
            $_SESSION['criteria_2'] = $criteria_2;
            $_SESSION['criteria_3'] = $criteria_3;
            $_SESSION['criteria_4'] = $criteria_4;
            $_SESSION['criteria_5'] = $criteria_5;
			$_SESSION['criteria_6'] = $criteria_6;
            $_SESSION['criteria_7'] = $criteria_7;
            $_SESSION['criteria_8'] = $criteria_8;
            $_SESSION['criteria_9'] = $criteria_9;
			

            //REDIRECTING TO FORM
            header("Location: formData.php");
        }
    }

    //SECTION FOR SAVING FORM 2 VALUES INTO SESSION
    if(isset($_POST['criteria_10']) && isset($_POST['criteria_11']) && isset($_POST['criteria_12']) && isset($_POST['criteria_13']) && isset($_POST['criteria_14']) && isset($_POST['criteria_15']) && isset($_POST['criteria_16']) && isset($_POST['criteria_17']) && isset($_POST['criteria_18']) && isset($_POST['criteria_19'])){

        $criteria_10 =$_POST['criteria_10'];
		$criteria_11 =$_POST['criteria_11'];
		$criteria_12 =$_POST['criteria_12'];
		$criteria_13 =$_POST['criteria_13'];
		$criteria_14 =$_POST['criteria_14'];
		$criteria_15 =$_POST['criteria_15'];
		$criteria_16 =$_POST['criteria_16'];
		$criteria_17 =$_POST['criteria_17'];
		$criteria_18 =$_POST['criteria_18'];
		$criteria_19 =$_POST['criteria_19'];

        if(!empty($criteria_10) && !empty($criteria_11) && !empty($criteria_12) && !empty($criteria_13) && !empty($criteria_14) && !empty($criteria_15) && !empty($criteria_16) && !empty($criteria_17) && !empty($criteria_18) && !empty($criteria_19)){
            $_SESSION['criteria_10'] = $criteria_10;
			$_SESSION['criteria_11'] = $criteria_11;
			$_SESSION['criteria_12'] = $criteria_12;
			$_SESSION['criteria_13'] = $criteria_13;
			$_SESSION['criteria_14'] = $criteria_14;
			$_SESSION['criteria_15'] = $criteria_15;
			$_SESSION['criteria_16'] = $criteria_16;
			$_SESSION['criteria_17'] = $criteria_17;
			$_SESSION['criteria_18'] = $criteria_18;
			$_SESSION['criteria_19'] = $criteria_19;
			

            //REDIRECTING TO FORM
            header("Location: formData.php");
        }
    }

    //SECTION FOR SAVING FORM 2 VALUES INTO SESSION
    if(isset($_POST['criteria_20']) && isset($_POST['criteria_21']) && isset($_POST['criteria_22']) && isset($_POST['criteria_23'])){
        $criteria_20 = $_POST['criteria_20'];
        $criteria_21 = $_POST['criteria_21'];
        $criteria_22 = $_POST['criteria_22'];
        $criteria_23 = $_POST['criteria_23'];
     

        if(!empty($criteria_20) && !empty($criteria_21) && !empty($criteria_22) && !empty($criteria_23)){
            $_SESSION['criteria_20'] = $criteria_20;
            $_SESSION['criteria_21'] = $criteria_21;
            $_SESSION['criteria_22'] = $criteria_22;
            $_SESSION['criteria_23'] = $criteria_23;

            //REDIRECTING TO FORM
            header("Location: formData.php");
        }
    }
?>



<?php if(!isset($_GET['form'])) { ?>
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

			
            .title, .description, .links {
                width: 100%;
                clear: both;
                margin-top: 20px;
            }

            .title, .description, a {
                text-align: center;
            }

            a {
                padding: 0px;
                margin: 0px;
                margin-left: 3.2%;
                float: left;
                width: 30%;
                text-decoration: none;
                cursor: pointer;
            }

            img {
                padding: 0px;
                margin: 0px;
                width: 70%;
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
                width: 45%;
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
		
		
            <div class="title">
                <h1>Privacy Impact Assessment for IoT Projects</h1>
            </div>
           <div class="title">
                <h2>Data Flow Analysis</h2>
		</div>
            <div class="title">
                <p>In this second step, your input is required regarding the treatment and managemnet of data along the different steps of the data collection, data storage and data processing</p>
            </div>

            <div class="links">
                <a href="formData.php?form=1">
                    <p><b>Data Collection</b></p>
                    <img src="one.jpg" />
                </a>
                <a href="formData.php?form=2">
                    <p><b>Data Storage</b></p>
                    <img src="two.png" width="40" height="180"/>
                </a>
                <a href="formData.php?form=3">
                    <p><b>Data Processing</b></p>
                    <img src="three.jpg" />
                </a>
            </div>
			 </div>
			 		<form action="privacyrisks.php" method="post">
				 	<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="column">&nbsp;</div>
					<div class="column"><div class="submit"><input type="submit" value="Next" /></div></div>
					</form>
                </div>
    </body>
</html>


<?php } else if(isset($_GET['form']) && $_GET['form'] == 1){ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Collection</title>
        <style type="text/css">
            body {
                font-family: Arial, Verdana, sans-serif;
                font-size: 90%;
                color: #666;
                background-color: #f8f8f8;
                background-image: url("background.jpg");
            }

            form {
                border-radius: 5px;
            }

            fieldset {
                width: 310px;
                margin-top: 20px;
                border: 1px solid #d6d6d6;
                line-height: 1.6em;
                margin-left: auto;
                margin-right: auto;
            }

            legend {
                font-weight: bold;
                color: #666666;
            }

            .select {
                width:  125px;
            }

            input[type="number"]:focus {
                background-color: #d0e2f0;
                border: 1px solid #999;
            }

            input[type="submit"] {
                border: 1px solid #006633;
                background-color: #009966;
                color: #FFFFFF;
                border-radius: 5px;
                padding: 5px;
                margin-top: 10px;
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
                width: 100%;
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
        <form action="" method="post">
             <div class="column">
			 <fieldset>
                <legend>Data Collection</legend>
                
             <p>
								<label class="title" for="criteria_1">Does the project require the collection of sensitive data (such as personally identifiable data, biometric data, location data, etc.)? </label>
								  <select name="criteria_1" id="criteria_1" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="criteria_2">Will the data collected be combined with other data from outside the project?</label>
								 <select name="criteria_2" id="criteria_2" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="criteria_3">Can the data collected become personal due to linkage by third parties (such as phone number, location data, social ID, etc.)?</label>
								 <select name="criteria_3" id="criteria_3" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							   <p>
                                <label class="title" for="criteria_4">What data is actually collected? (multiple selections are possible)</label>
								 <select name="criteria_4" id="criteria_4" class="select" multiple>
                                    <option value=1> Connection data (IP addresses, events logs, etc.) </option>
									<option value=2> Location data (travels, GPS data, GSM data, etc.) </option>
									<option value=3> Biometric data </option>
									<option value=4> Physiolytics (e.g., heart rate, skin temperature, blood oxygenation) </option>
									<option value=5> Body movement and gestures </option>
									<option value=6> Nutrtion </option>
									<option value=8> Speech and voice tones </option>
									<option value=9> Noise </option>
									<option value=10> Occupancy </option>
                                </select>
                            </p>
							   <p>
                                <label class="title" for="criteria_5">What IoT devices are used within the project scope? (multiple selections are possible) </label>
								 <select name="criteria_5" id="criteria_5" class="select" multiple>
                                    <option value=1> Wearables: Fitness band / Activity trackers </option>
									<option value=2> Wearables:	Smart clothing </option>
									<option value=3> Wearables:	Smart glasses </option>
									<option value=4> Smart Office: Sociometric badge </option>
									<option value=5> Smart Office: Smart Chair </option>
									<option value=6> Smart Office: Smart Desk </option>
									<option value=8> Sensors: Motion sensors </option>
									<option value=9> Sensors: Thermal sensors </option>
									<option value=10> Sensors: Smoke sensors </option>
									<option value=10> Sensors: Light sensors </option>
									<option value=10> Sensors: Occupancy sensors </option>
                                </select>
                            </p>
							 <p> <p>
                                <label class="title" for="criteria_6">Do the devices used rely on open source technology ?</label>
								 <select name="criteria_6" id="criteria_6" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p> <p>
                                <label class="title" for="criteria_7">Is the user consent required for the collection of data?</label>
								 <select name="criteria_7" id="criteria_7" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
                                <label class="title" for="criteria_8">What type of consent is available for users ?</label>
								 <select name="criteria_8" id="criteria_8" class="select">
                                    <option value=1> Express consent during activation </option>
									<option value=2>  Consent segmented per data category or processing type </option>
									<option value=3>   Express consent prior to sharing data  </option>
                                </select>
                            </p> <p>
                                <label class="title" for="criteria_9">Are users able to opt out of the collection or sharing of  their information? </label>
								 <select name="criteria_9" id="criteria_9" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
            </fieldset>
            <div class="submit"><input type="submit" value="Save" /></div>
        </form>
    </body>
</html>


<?php } else if(isset($_GET['form']) && $_GET['form'] == 2){ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Storage</title>
                <style type="text/css">
            body {
                font-family: Arial, Verdana, sans-serif;
                font-size: 90%;
                color: #666;
                background-color: #f8f8f8;
                background-image: url("background.jpg");
            }

            form {
                border-radius: 5px;
            }

            fieldset {
                width: 310px;
                margin-top: 20px;
                border: 1px solid #d6d6d6;
                line-height: 1.6em;
                margin-left: auto;
                margin-right: auto;
            }

            legend {
                font-weight: bold;
                color: #666666;
            }

            .select {
                width:  125px;
            }

            input[type="number"]:focus {
                background-color: #d0e2f0;
                border: 1px solid #999;
            }

            input[type="submit"] {
                border: 1px solid #006633;
                background-color: #009966;
                color: #FFFFFF;
                border-radius: 5px;
                padding: 5px;
                margin-top: 10px;
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
                width: 100%;
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
        <form action="" method="post">
		  <div class="column">
            <fieldset>
                <legend>Data Storage</legend>
                
                 <p>
				 <script>
							function checkvalue(val){
								if(val==="2")
							document.getElementById('entry_cloud').style.display='block';
								else
							document.getElementById('entry_cloud').style.display='none'; 
							}
							</script>
								<label class="title" for="criteria_10">Where will the data be stored?</label>
								  <select name="criteria_10" id="criteria_10" class="select" onchange='checkvalue(this.value)'>
                                    <option value=1> Device manufacturer </option>
									<option value=2> Cloud solution </option>
									<option value=3> On-premise</option>
                                </select>								
								<div id="entry_cloud" style="display: none;">
								<label for="cloud"> Is the cloud provider certified and compliant to security standards?</label> <select name="criteria_11" id="criteria_11" class="select" onchange='checkvalue(this.value)'>
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>								
								    </div>

                            </p>

                            <p>
                                <label class="title" for="criteria_12">Does the user have the possibility to access his data?</label>
								 <select name="criteria_12" id="criteria_12" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="criteria_13">Does the user have the possibility of retrieving personal data in order to transfer them to another service? </label>
								 <select name="criteria_13" id="criteria_13" class="select">
                                      <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							   <p>
                                <label class="title" for="criteria_14">Does the user have the right to rectify personal data?</label>
								 <select name="criteria_14" id="criteria_14" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							   <p>
                                <label class="title" for="criteria_15">Does the user have the right to erase personal data?</label>
								 <select name="criteria_15" id="criteria_15" class="select">
                                     <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							
							  <p>
                                <label class="title" for="criteria_16">Has the project taken measures to ensure protection of personal data (by means of encryption and/or access control)? </label>
								 <select name="criteria_16" id="criteria_16" class="select">
                                     <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							
							  <p>
                                <label class="title" for="criteria_17">Have pseudonyms or codes been used to replace any data that could identify the individual? </label>
								 <select name="criteria_17" id="criteria_17" class="select">
                                     <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							
							  <p>
                                <label class="title" for="criteria_18">What is the storage duration (retention period) of the data collected?</label>
								 <select name="criteria_18" id="criteria_18" class="select">
                                     <option value=1> No historical data</option>
									<option value=2> 1 year </option>
									<option value=2> 3 years </option>
									<option value=2> 5 years </option>
                                </select>
                            </p>
							
							  <p>
                                <label class="title" for="criteria_19">Has a system security plan(including data recovery) been completed for the information system(s) supporting the system? </label>
								 <select name="criteria_19" id="criteria_19" class="select">
                                     <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
            </fieldset>
            <div class="submit"><input type="submit" value="Save" /></div>
        </form>
    </body>
</html>


<?php } else if(isset($_GET['form']) && $_GET['form'] == 3){ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Processing</title>
        <style type="text/css">
            body {
                font-family: Arial, Verdana, sans-serif;
                font-size: 90%;
                color: #666;
                background-color: #f8f8f8;
                background-image: url("background.jpg");
            }

            form {
                border-radius: 5px;
            }

            fieldset {
                width: 310px;
                margin-top: 20px;
                border: 1px solid #d6d6d6;
                line-height: 1.6em;
                margin-left: auto;
                margin-right: auto;
            }

            legend {
                font-weight: bold;
                color: #666666;
            }

            .select {
                width:  125px;
            }

            input[type="number"]:focus {
                background-color: #d0e2f0;
                border: 1px solid #999;
            }

            input[type="submit"] {
                border: 1px solid #006633;
                background-color: #009966;
                color: #FFFFFF;
                border-radius: 5px;
                padding: 5px;
                margin-top: 10px;
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
                width: 100%;
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
        <form action="" method="post">
		  <div class="column">
            <fieldset>
                <legend>Data Processing</legend>
							<p>
								<label class="title" for="criteria_20">Is there a possibility that data from different sources could be aggregated or matched in a way that undermines the person’s anonymity?</label>
								  <select name="criteria_20" id="criteria_20" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>								

                            </p>

                            <p>
                                <label class="title" for="criteria_21">Has the project taken measures to ensure data quality?</label>
								 <select name="criteria_21" id="criteria_21" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="criteria_22">Do you have procedures  in place to allow the subject individual to correct inaccurate or erroneous information? </label>
								 <select name="criteria_22" id="criteria_22" class="select">
                                      <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							   <p>
                                <label class="title" for="criteria_23">If data is transferred to third parties, is a detailed presentation of purposes of transimission provided to users?</label>
								 <select name="criteria_23" id="criteria_23" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
            </fieldset>
            <div class="submit"><input type="submit" value="Save" /></div>
        </form>
    </body>
</html>
<?php } ?>