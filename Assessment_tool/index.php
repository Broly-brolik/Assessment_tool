<?php
  // session_start();
//if(!isset($_SESSION['id'])) {
//header('Location: login.php');
//}
   // $i = 1;
?>

<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
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
		<?php 
		//if(isset($_SESSION['id'])) {
		
		?>
		<h4>Welcome <a href="index.php"><?php //echo ucfirst($_SESSION['first_name']); ?></a> / <a href="logout.php?logout=true">Logout</a></h4>

		<?php 
		//}else{ 
		?>
		<h4><a href="register.php">Profile</a> / <a href="login.php">Logout</a></h4>
		<?php
		//}
		?>
            <div class="title">
                <h1>Assessment</h1>
            </div>

            <div class="title">
                <p>Please submit the relevant information in the forms below and in the following pages.
				<br>In the first step, we require information the following information.</p>
            </div>
			
			

            <div> 
                <div class="row">
                    
                    <div class="column" id="details">
                        <fieldset>
                            <legend><b>Details</b></legend>
                            
                            <p>
                                <label class="title" for="entry_0">Status</label>  
                                <select name="entry_<?= $i=0; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Planned</option>
									<option value=2>On-going</option>
                             
                                </select>
                            </p>

                            <p>
                                <label class="title" for="entry_1">Affected</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>All</option>
									<option value=2>Specific Department</option>
									<option value=3>Specific Group</option>
                                </select>
                            </p>
                        </fieldset>
                    </div>
                    <div class="column">&nbsp;</div>
                </div>
				
    
					
                <div class="row">
                    <div class="column" id="purpose">
                        <fieldset>
                            <legend><b>Purpose</b></legend>
                            
                            <p>
							<script>
							function checkvalue(val){
								if(val==="4")
							document.getElementById('entry_4_sub1').style.display='block';
								else
							document.getElementById('entry_4_sub1').style.display='none'; 
							}
							</script>
                                <label class="title" for="entry_1">Question1</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select" onchange='checkvalue(this.value)'>
                                    <option value=1>Option1</option>
									<option value=2>Option2</option>
									<option value=3>Option3</option>
									<option value=4>Other</option>			
                                </select>
								<div id="entry_4_sub1" style="display: none;">
								<label for="other">Please specify:</label> <input type="text" name="entry_4_sub1" id="entry_4_sub1"/>
								    </div>
                            </p>

                            <p>
                                <label class="title" for="entry_2">Question2</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="entry_3">Question3 </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_4">Questin4 </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_5">Question5 </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_6">Question6 </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>
							
                        </fieldset>
                    </div>
					 


                    <div class="column" id="stakeholders">
                        <fieldset>
                            <legend><b>Stakeholders</b></legend>
                            
                            <p>
                                <label class="title" for="entry_7">Question1 </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="entry_8">Quesion2 </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="entry_9">Question3</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_10">Question4</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_11">Question5</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p>
							<p>
                                <label class="title" for="entry_12">Question6</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Yes</option>
									<option value=2>No</option>
                                </select>
                            </p><p>
                                <label class="title" for="entry_13">Question7</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1>Option1</option>
									<option value=2>Option2</option>
									<option value=3>Option3</option>
                                </select>
                            </p>
                        </fieldset>
                    </div>

                <div class="column"><div class="submit"><input type="submit" value="Next" onclick="save()"/></div>
            </div>
 <script>
//function ShowResults(value,tab) {
 //   tab.push(value);
//}
function save() {
    var details = new Array();
    var purpose = new Array();
    var stakeholders = new Array();

$("#details select option:selected").each(function() // $ => jQuery for each select it does the fonction tab.push + for each select in details
{
    details.push($(this).text());
});

$("#purpose select option:selected").each(function()
{
    purpose.push($(this).text());
});
purpose.push($("#purpose input").val());
$("#stakeholders select option:selected").each(function()
{
    stakeholders.push($(this).text());
});

    details = JSON.stringify(details);
    purpose = JSON.stringify(purpose);
    stakeholders = JSON.stringify(stakeholders); // to optimize do a matrix, multidimensional table

    // $("#entry_0").val() $call jquery - #getID
    $.post('save.php', {details:details, purpose:purpose, stakeholders:stakeholders}, function(response){ //callback of post function -- cf. pdoexception
        window.location.replace("results.php");
        console.log(response); // print error in console
        
});
}
 
</script>

                </div>
					<div class="column">&nbsp;</div>
					<div class="row">&nbsp;</div>
                </div>
</div>
        </div>
    </body>
</html>