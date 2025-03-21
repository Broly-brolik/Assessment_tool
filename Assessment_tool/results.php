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
                <select id="select_id">
                    <option selected="true" disabled="disabled">Select data</option> 
                </select>
                <div class="row">
                    
                    <div class="column" id="details">
                        <fieldset>
                            <legend><b>Details</b></legend>
                            
                            <p>
                                <label class="title" for="entry_0">Status</label>  
                                <input name="entry_<?= $i=0; ?>" id="entry_<?= ($i++); ?>" class="input">
                                </input>
                            </p>

                            <p>
                                <label class="title" for="entry_1">Affected</label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">
                                </input>
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
                                <label class="title" for="entry_1">Question1</label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">
                                </input>
								<input type="text" name="entry_2_sub1" id="entry_2_sub1" file>
                                </input>
                            </p>

                            <p>
                                <label class="title" for="entry_2">Question2</label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">
                                </input>
                            </p>

                            <p>
                                <label class="title" for="entry_3">Question3 </label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">
                                </input>
                            </p>
							
							<p>
                                <label class="title" for="entry_4">Question4 </label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">

                                </input>
                            </p>
							
							<p>
                                <label class="title" for="entry_5">Question5 </label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">

                                </input>
                            </p>
							
							<p>
                                <label class="title" for="entry_6">Question6 </label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">

                                </input>
                            </p>
							
                        </fieldset>
                    </div>
					 


                    <div class="column" id="stakeholders">
                        <fieldset>
                            <legend><b>Stakeholders</b></legend>
                            
                            <p>
                                <label class="title" for="entry_7">Question1 </label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">

                                </input>
                            </p>

                            <p>
                                <label class="title" for="entry_8">Quesion2 </label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">

                                </input>
                            </p>

                            <p>
                                <label class="title" for="entry_9">Question3</label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">

                                </input>
                            </p>
							
							<p>
                                <label class="title" for="entry_10">Question4</label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">

                                </input>
                            </p>
							
							<p>
                                <label class="title" for="entry_11">Question5</label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">
                                </input>
                            </p>
							<p>
                                <label class="title" for="entry_12">Question6</label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">
                                </input>
                            </p><p>
                                <label class="title" for="entry_13">Question7</label>
                                <input name="entry_<?= $i; ?>" id="entry_<?= ($i++); ?>" class="input">
                        </input>
                            </p>
                        </fieldset>
                    </div>
                    <script>

// A $( document ).ready() block.
$(document).ready(function() {
    $("#entry_2_sub1").hide();
    $.get('load.php', function(response){
        let res = JSON.parse(response);
        localStorage.setItem("resultat", JSON.stringify(res));
        for (let i = 0; i < res.length; i++) {
            var option = '<option value='+res[i][0]+'>'+res[i][0]+'</option>'
            $("#select_id").append(option);
        }
    });
    $("#select_id").on("change", function(){
        let selected_id = $(this).val();
        var tri = JSON.parse(localStorage.getItem("resultat"));
        var a = 0;
        for (let i = 0; i < tri.length; i++) {
            if (tri[i][0]==selected_id){
                a=i;
            }
        }
        var k = 1;
        $("#details input").each(function(){
            $(this).val(tri[a][k]);
            k++;
        });

        $("#purpose input").each(function(){
            if(tri[a][4]==""){
                $("#entry_2_sub1").hide();
            } else{
                $("#entry_2_sub1").show();
            }
            $(this).val(tri[a][k]);
            k++;
        });

        $("#stakeholders input").each(function(){
            $(this).val(tri[a][k]);
            k++;
        });

    });
});
        // redirection result.php + get with php code (in mydatabase) + display with javascript
        //une page html avec details, purpose, stakholders
</script>

            </div>


                </div>
					<div class="column">&nbsp;</div>
					<div class="row">&nbsp;</div>
                </div>
</div>
        </div>
    </body>
</html>