<?php
    //NOW SAVING VALUES IN SESSION
    session_start();
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
                <p>For conducting the privacy impact assessment we kindly request to submit the relevant information in the forms below and in the following pages.
				<br>In the first step, we require information about the project, purpose and stakeholders.</p>
            </div>
			
			

            <form action="formData.php" method="post">
                <div class="row">
                    
                    <div class="column">
                        <fieldset>
                            <legend><b>Project Details</b></legend>
                            
                            <p>
                                <label class="title" for="entry_1">Project Status</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Planned</option>
									<option value=2> On-going</option>
                             
                                </select>
                            </p>

                            <p>
                                <label class="title" for="entry_1">Employees affected</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> All</option>
									<option value=2> Specific Department</option>
									<option value=3> Specific Group</option>
                                </select>
                            </p>
                        </fieldset>
                    </div>
                    <div class="column">&nbsp;</div>
                </div>
				
    
					
                <div class="row">
                    <div class="column">
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
                                <label class="title" for="entry_1">What is the purpose of the IoT project?</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select" onchange='checkvalue(this.value)'>
                                    <option value=1> Health Monitoring</option>
									<option value=2> Safety</option>
									<option value=3> Environmental Monitoring</option>
									<option value=4> Other</option>			
                                </select>
								<div id="entry_4_sub1" style="display: none;">
								<label for="other">Please specify:</label> <input type="text" name="entry_4_sub1" id="entry_4_sub1"/>
								    </div>
                            </p>

                            <p>
                                <label class="title" for="entry_2">Have you clearly identified the purpose of the project and shared it with users?</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="entry_3">Is the purpose of the project consistent with community values of privacy? </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_4">May you use the personal data for a purpose other than what you have speciﬁed? </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_5">Will the data collected within the project be used for any other purposes, including research and statistical purposes? </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_6">Will the data be used for profiling? </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							
                        </fieldset>
                    </div>
					 


                    <div class="column">
                        <fieldset>
                            <legend><b>Stakeholders</b></legend>
                            
                            <p>
                                <label class="title" for="entry_7">Are the roles and responsibilities for processing the data collected clearly defined to the users? </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="entry_8">Will all or part of the data processing be executed by a third party processor? </label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>

                            <p>
                                <label class="title" for="entry_9">Will all or part of the data be transferred to third party organisations?</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_10">Will third party providers be used for Data Collection?</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							
							<p>
                                <label class="title" for="entry_11">Will third party providers be used for Data Storage?</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p>
							<p>
                                <label class="title" for="entry_12">Will third party providers be used for Data Processing/ Analytics?</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> Yes</option>
									<option value=2> No</option>
                                </select>
                            </p><p>
                                <label class="title" for="entry_13">Please specify the scope for data sharing:</label>
                                <select name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="select">
                                    <option value=1> EU Only</option>
									<option value=2> USA</option>
									<option value=3> Other (e.g., China, Australia, etc.)</option>
                                </select>
                            </p>
                        </fieldset>
                    </div>


                </div>
					<div class="column">&nbsp;</div>
                    <div class="column"><div class="submit"><input type="submit" value="Next" /></div></div>
					<div class="row">&nbsp;</div>
                </div>
            </form>
        </div>
    </body>
</html>