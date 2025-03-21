<?php
    session_start();
	if(!isset($_SESSION['id'])) {
	header('Location: login.php');
}

     if(isset($_GET['chart']) && $_GET['chart'] == 1){
            $formatted_values = array();
            $formatted_lebels = array();
            
            for($i = 1; $i < 6; $i++){
                $formatted_values[$i-1] = $_SESSION["risk1_criteria".$i];
                $formatted_lebels[$i-1] = "'Value " . $i . "'";
        }
	}
  
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Results </title>
        <style type="text/css">
            body {
                background-image: url("background.jpg");
            }
            
            #myChart {
                margin-right: auto;
                margin-left: auto;
            }
        </style>
        <script src="chart.min.js"></script>
    </head>
	

    <body>
        <div class="container">
            <div class="title">
                <h1>Privacy Impact Assessment for IoT Projects: Results</h1>
            </div>
        <canvas id="myChart" width="400" height="400"></canvas>
        <script>
        var ctx = document.getElementById('myChart').getContext('2d');

        const data = {
          labels: [<?= !empty($formatted_lebels) ? implode(",", $formatted_lebels) : ""; ?>],
          datasets: [{
            label: 'Criteria Values',
            data: [<?= !empty($formatted_values) ? implode(", ", $formatted_values) : ""; ?>],
            fill: true,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgb(54, 162, 235)',
            pointBackgroundColor: 'rgb(54, 162, 235)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(54, 162, 235)'
          }]
        };

        var myChart = new Chart(ctx, {
          type: 'radar',
          data: data,
          options: {
			  elements: {
              line: {
                borderWidth: 3
              }
            }, 
				scale: {
				min: 0,
				max: 5,
				stepSize: 1
			}
          },
        });
        </script>
    </body>
</html>