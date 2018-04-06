
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<?php

require "dbconn.php";
include("fusioncharts.php");
 $arrData = array(
            "chart" => array(
              "caption" => "users ",
              "paletteColors" => "#0075c2",
              "bgColor" => "#ffffff",
              "borderAlpha"=> "20",
              "canvasBorderAlpha"=> "0",
              "usePlotGradientColor"=> "0",
              "plotBorderAlpha"=> "10",
              "showXAxisLine"=> "1",
              "xAxisLineColor" => "#999999",
              "showValues" => "0",
              "divlineColor" => "#999999",
              "divLineIsDashed" => "1",
              "showAlternateHGridColor" => "0"
            )
        );

        $arrData["data"] = array();
        
$sql = "SELECT DISTINCT date_created FROM users";
$result =mysqli_query($connect,$sql);
while ($row = mysqli_fetch_assoc($result)) {
	$date = $row['date_created'];


	$sql2 = "SELECT count(user_id) as users,date_created  FROM users WHERE date_created ='$date' ";
	$result2 =mysqli_query($connect,$sql2);

	if ($result2) {
    
		
	
        while ($row2 = mysqli_fetch_assoc($result2)) {
      //   	$d = 	$row['date_created'];
		    // $user = $row['users']; 
        	 array_push($arrData["data"], array(
            "label" => $row2['date_created'],
            "value" => $row2['users']
            )
        );



			
	  // 		// $lname = $row['lname'];
	  // 		// $fname = $row['fname']; 
	  // 		 echo "<tr> 	

			                    
			//                     <td>$date</td>
			//                     <td>$user</td>
			//                     </tr>";


}


// echo $d;
// echo $user;

}

  
 

}
  

$jsonEncodedData = json_encode($arrData);

     $columnChart = new FusionCharts("column2D", "USER_Y_Graph" , 600, 400, "chart-1", "json", $jsonEncodedData);

        // Render the chart
        $columnChart->render();



?>

<div id="chart-1"> </div>
