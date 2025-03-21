<?php
    //NOW SAVING VALUES IN SESSION
    session_start();
if(!isset($_SESSION['id'])) {
header('Location: login.php');
}

   
        $_SESSION['sum1i'] = 'sum1i';
        $_SESSION['sum1e'] = 'sum1e';
        $_SESSION['sum2i'] = 'sum2i';
        $_SESSION['sum2e'] = 'sum2e';
		$_SESSION['sum3i'] = 'sum3i';
        $_SESSION['sum3e'] = 'sum3e';
		$_SESSION['sum4i'] = 'sum4i';
        $_SESSION['sum4e'] = 'sum4e';
		$_SESSION['sum5i'] = 'sum5i';
        $_SESSION['sum5e'] = 'sum5e';
    
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
                width: 90%;
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
                width:90%;
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
	<script type="text/javascript">
		sum1i = 0;
		sum1e = 0;
		sum2i = 0;
		sum2e = 0;
		sum3i = 0;
		sum3e = 0;
		sum4i = 0;
		sum4e = 0;
		sum5i = 0;
		sum5e = 0;
		function Total(form) {
			sum1i += (risks.risk1_iagent1.value+risks.risk1_iagent2.value+risks.risk1_iagent3.value+risks.risk1_iagent4.value+risks.risk1_ivul1.value+risks.risk1_ivul2.value+risks.risk1_ivul3.value+risks.risk1_ivul4.value)/8;
			sum1e += (risks.risk1_eagent1.value+risks.risk1_eagent2.value+risks.risk1_eagent3.value+risks.risk1_eagent4.value+risks.risk1_evul1.value+risks.risk1_evul2.value+risks.risk1_evul3.value+risks.risk1_evul4.value)/8;
			sum2i += (risks.risk2_iagent1.value+risks.risk2_iagent2.value+risks.risk2_iagent3.value+risks.risk2_iagent4.value+risks.risk2_ivul1.value+risks.risk2_ivul2.value+risks.risk2_ivul3.value+risks.risk2_ivul4.value)/8;
			sum2e += (risks.risk2_eagent1.value+risks.risk2_eagent2.value+risks.risk2_eagent3.value+risks.risk2_eagent4.value+risks.risk2_evul1.value+risks.risk2_evul2.value+risks.risk2_evul3.value+risks.risk2_evul4.value)/8;
			sum3i += (risks.risk3_iagent1.value+risks.risk3_iagent2.value+risks.risk3_iagent3.value+risks.risk3_iagent4.value+risks.risk3_ivul1.value+risks.risk3_ivul2.value+risks.risk3_ivul3.value+risks.risk3_ivul4.value)/8;
			sum3e += (risks.risk3_eagent1.value+risks.risk3_eagent2.value+risks.risk3_eagent3.value+risks.risk3_eagent4.value+risks.risk3_evul1.value+risks.risk3_evul2.value+risks.risk3_evul3.value+risks.risk3_evul4.value)/8;
			sum4i += (risks.risk4_iagent1.value+risks.risk4_iagent2.value+risks.risk4_iagent3.value+risks.risk4_iagent4.value+risks.risk4_ivul1.value+risks.risk4_ivul2.value+risks.risk4_ivul3.value+risks.risk4_ivul4.value)/8;
			sum4e += (risks.risk4_eagent1.value+risks.risk4_eagent2.value+risks.risk4_eagent3.value+risks.risk4_eagent4.value+risks.risk4_evul1.value+risks.risk4_evul2.value+risks.risk4_evul3.value+risks.risk4_evul4.value)/8;
			sum5i += (risks.risk5_iagent1.value+risks.risk5_iagent2.value+risks.risk5_iagent3.value+risks.risk5_iagent4.value+risks.risk5_ivul1.value+risks.risk5_ivul2.value+risks.risk5_ivul3.value+risks.risk5_ivul4.value)/8;
			sum5e += (risks.risk5_eagent1.value+risks.risk5_eagent2.value+risks.risk5_eagent3.value+risks.risk5_eagent4.value+risks.risk5_evul1.value+risks.risk5_evul2.value+risks.risk5_evul3.value+risks.risk5_evul4.value)/8;

			}
	</script>
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
                <p>At this stage of the assessment, we kindly ask you to specify for each privacy risk the likelihood of a successful attack and its exploitability by a group of threat agents: </p>
            </div>
			
			

            <form id="risks" action="chart1.php?chart=1" method="post">
			 <div class="row">
			 <div class="column">
                        <fieldset>
                            <h2><b>Risk: Excessive Collection of Data</b></h2>
                            
                            <p>
                                <label class="title" for="risk1">This risk corresponds to the collection of additional data than the required for the defined purpose</label>
								<div class="row">&nbsp;</div>
								<h4>Internal Access Threat</h4>
								<div class="row">&nbsp;</div>		
								<label class="title"><b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk1_iagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk1_iagent1" id="risk1_iagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk1_iagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk1_iagent2" id="risk1_iagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk1_iagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk1_iagent3" id="risk1_iagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk1_iagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk1_iagent4" id="risk1_iagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>

								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk1_ivul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk1_ivul1" id="risk1_ivul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk1_ivul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk1_ivul2" id="risk1_ivul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk1_ivul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk1_ivul3" id="risk1_ivul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk1_ivul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk1_ivul4" id="risk1_ivul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<h4>External Access Threat</h4>
								<div class="row">&nbsp;</div>
								<label class="title"> <b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk1_eagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk1_eagent1" id="risk1_eagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk1_eagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk1_eagent2" id="risk1_eagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk1_eagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk1_eagent3" id="risk1_eagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk1_eagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk1_eagent4" id="risk1_eagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk1_evul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk1_evul1" id="risk1_evul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk1_evul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk1_evul2" id="risk1_evul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk1_evul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk1_evul3" id="risk1_evul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk1_evul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk1_evul4" id="risk1_evul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>												
                            </p>
                        </fieldset>
                    </div>
                </div>
    
					
                <div class="row">
				<div class="column">
                        <fieldset>
                            <h2><b>Risk: Repurposing</b></h2>
                            
                            <p>
                                <label class="title" for="risk2">This risk corresponds to the collection of data for other purposes than the defined for this project</label>
                                <div class="row">&nbsp;</div>
								<h4>Internal Agent</h4>
								<div class="row">&nbsp;</div>		
								<label class="title"><b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk2_iagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk2_iagent1" id="risk2_iagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk2_iagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk2_iagent2" id="risk2_iagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk2_iagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk2_iagent3" id="risk2_iagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk2_iagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk2_iagent4" id="risk2_iagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>

								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk2_ivul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk2_ivul1" id="risk2_ivul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk2_ivul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk2_ivul2" id="risk2_ivul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk2_ivul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk2_ivul3" id="risk2_ivul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk2_ivul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk2_ivul4" id="risk2_ivul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<h4>External Agent</h4>
								<div class="row">&nbsp;</div>
								<label class="title"> <b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk2_eagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk2_eagent1" id="risk2_eagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk2_eagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk2_eagent2" id="risk2_eagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk2_eagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk2_eagent3" id="risk2_eagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk2_eagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk2_eagent4" id="risk2_eagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk2_evul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk2_evul1" id="risk2_evul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk2_evul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk2_evul2" id="risk2_evul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk2_evul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk2_evul3" id="risk2_evul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk2_evul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk2_evul4" id="risk2_evul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>												
                            </p>
                        </fieldset>
                    </div>
				</div>
					
					<div class="row">
					<div class="column">
                        <fieldset>
                            <h2><b>Risk: Sharing with Third Parties</b></h2>
                            
                            <p>
                                <label class="title" for="risk3">This risk corresponds to unathorized  data sharing with other parties that are specified as project stakeholders</label>
                                <div class="row">&nbsp;</div>
								<h4>Internal Agent</h4>
								<div class="row">&nbsp;</div>		
								<label class="title"><b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk3_iagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk3_iagent1" id="risk3_iagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk3_iagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk3_iagent2" id="risk3_iagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk3_iagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk3_iagent3" id="risk3_iagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk3_iagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk3_iagent4" id="risk3_iagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>

								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk3_ivul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk3_ivul1" id="risk3_ivul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk3_ivul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk3_ivul2" id="risk3_ivul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk3_ivul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk3_ivul3" id="risk3_ivul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk3_ivul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk3_ivul4" id="risk3_ivul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<h4>External Agent</h4>
								<div class="row">&nbsp;</div>
								<label class="title"> <b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk3_eagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk3_eagent1" id="risk3_eagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk3_eagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk3_eagent2" id="risk3_eagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk3_eagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk3_eagent3" id="risk3_eagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk3_eagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk3_eagent4" id="risk3_eagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk3_evul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk3_evul1" id="risk3_evul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk3_evul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk3_evul2" id="risk3_evul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk3_evul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk3_evul3" id="risk3_evul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk3_evul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk3_evul4" id="risk3_evul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>												
                            </p>
                        </fieldset>
                    </div>
					</div>
					
					<div class="row">
					<div class="column">
                        <fieldset>
                            <h2><b>Risk: Unauthorized Access</b></h2>
                            
                            <p>
                                <label class="title" for="risk4">This risk corresponds to the unauthorized access to data by employer or other employees</label>
                               <div class="row">&nbsp;</div>
								<h4>Internal Agent</h4>
								<div class="row">&nbsp;</div>		
								<label class="title"><b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk4_iagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk4_iagent1" id="risk4_iagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk4_iagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk4_iagent2" id="risk4_iagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk4_iagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk4_iagent3" id="risk4_iagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk4_iagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk4_iagent4" id="risk4_iagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>

								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk4_ivul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk4_ivul1" id="risk4_ivul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk4_ivul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk4_ivul2" id="risk4_ivul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk4_ivul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk4_ivul3" id="risk4_ivul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk4_ivul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk4_ivul4" id="risk4_ivul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<h4>External Agent</h4>
								<div class="row">&nbsp;</div>
								<label class="title"> <b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk4_eagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk4_eagent1" id="risk4_eagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk4_eagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk4_eagent2" id="risk4_eagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk4_eagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk4_eagent3" id="risk4_eagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk4_eagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk4_eagent4" id="risk4_eagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk4_evul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk4_evul1" id="risk4_evul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk4_evul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk4_evul2" id="risk4_evul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk4_evul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk4_evul3" id="risk4_evul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk4_evul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk4_evul4" id="risk4_evul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>												
                            </p>
                        </fieldset>
                    </div>
					</div>
					
					<div class="row">
					<div class="column">
                        <fieldset>
                            <h2><b>Risk: Data Manipulation</b></h2>
                            
                            <p>
                                <label class="title" for="risk5">This risk corresponds to the manipulation of data by third party for malicious intentions at source (collection) or while processing.</label>
                                <div class="row">&nbsp;</div>
								<h4>Internal Agent</h4>
								<div class="row">&nbsp;</div>		
								<label class="title"><b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk5_iagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk5_iagent1" id="risk5_iagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk5_iagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk5_iagent2" id="risk5_iagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk5_iagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk5_iagent3" id="risk5_iagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk5_iagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk5_iagent4" id="risk5_iagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>

								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk5_ivul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk5_ivul1" id="risk5_ivul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk5_ivul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk5_ivul2" id="risk5_ivul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk5_ivul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk5_ivul3" id="risk5_ivul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk5_ivul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk5_ivul4" id="risk5_ivul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<h4>External Agent</h4>
								<div class="row">&nbsp;</div>
								<label class="title"> <b>Agent Factors</b>: For this risk, please specify the likelihood of a successful attack by this group of threat agents:</label> 

								<div class="row">&nbsp;</div>
								<label for="risk5_eagent1"> Skill Level: How technically skilled is this group of threat agents?</label> 
								<select name="risk5_eagent1" id="risk5_eagent1" class="select">
                                    <option value=1> No technical skills</option>
									<option value=3> Some technical skills</option>
									<option value=5> Advanced computer user</option>
									<option value=6> Network and programming skills</option>
									<option value=9> Security penetration skills</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk5_eagent2"> Motive: How motivated is this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk5_eagent2" id="risk5_eagent2" class="select">
                                    <option value=1> Low or no reward</option>
									<option value=4> Possible reward</option>
									<option value=9> High reward</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk5_eagent3"> Opportunity: What resources and opportunities are required for this group of threat agents to find and exploit this vulnerability?</label> 
								<select name="risk5_eagent3" id="risk5_eagent3" class="select">
                                    <option value=0> Full access or expensive resources required </option>
									<option value=4> Special access or resources required</option>
									<option value=7> Some access or resources required</option>
									<option value=9> No access or resources required</option>
                                </select>
								<div class="row">&nbsp;</div>
								<label for="risk5_eagent4"> Size: How large is this group of threat agents?</label> 
								<select name="risk5_eagent4" id="risk5_eagent4" class="select">
                                    <option value=1> Developers</option>
									<option value=2> System administrators</option>
									<option value=4> Intranet users</option>
									<option value=5> Partners</option>
									<option value=6> Authenticated users </option>
									<option value=9> Anonymous Internet users</option>
                                </select>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<label class="title"><b>Vulnerability Factors</b>: For this risk, please specify the likelihood of the particular vulnerability involved being discovered and exploited by the threat agent:</label> 
								<div class="row">&nbsp;</div>
								<label for="risk5_evul1"> Ease of Discovery: How easy is it for this group of threat agents to discover this vulnerability?</label> 
								<select name="risk5_evul1" id="risk5_evul1" class="select">
                                    <option value=1> Impossible</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available </option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk5_evul2"> Ease of Exploit: How easy is it for this group of threat agents to actually exploit this vulnerability?</label> 
								<select name="risk5_evul2" id="risk5_evul2" class="select">
                                    <option value=1> Theoretical</option>
									<option value=3> Difficult</option>
									<option value=7> Easy</option>
									<option value=9> Automated tools available</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk5_evul3"> Awareness: How well known is this vulnerability to this group of threat agents?</label> 
								<select name="risk5_evul3" id="risk5_evul3" class="select">
                                    <option value=1> Unkown</option>
									<option value=4> Hidden</option>
									<option value=6> Obvious</option>
									<option value=9> Public knowledge</option>
                                </select>	
								<div class="row">&nbsp;</div>
								<label for="risk5_evul4"> Intrusion Detection: How likely is an exploit to be detected?</label> 
								<select name="risk5_evul4" id="risk5_evul4" class="select">
                                    <option value=1> Active detection in application</option>
									<option value=3> Logged and reviewed</option>
									<option value=8> Logged without review</option>
									<option value=9> Not logged</option>
                                </select>												
                            </p>
                        </fieldset>
                    </div>
                </div>

					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="column"><div class="submit"><input type="submit" onClick="Total(this.form);" value="Next" /></div>
					<div class="row">&nbsp;</div>
                </div>
            </form>
        </div>

</html>