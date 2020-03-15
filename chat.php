    <?php
     
    $dataPoints = array( 
    	
    	array("y" => 28,"label" => "Term 3" ),
    	array("y" => 18,"label" => "Term 2" ),
    	array("y" => 20,"label" => "Term 1" )
    );
     
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
    <script>
    window.onload = function() {
     
    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	title:{
    		text: "Performance Chart"
    	},
    	axisY: {
    		title: "Total Points",
    		
    	},
    	data: [{
    		type: "bar",
    		yValueFormatString: "$#,##0K",
    		indexLabel: "{y}",
    		indexLabelPlacement: "inside",
    		indexLabelFontWeight: "bolder",
    		indexLabelFontColor: "white",
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();
     
    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>                              