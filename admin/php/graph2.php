<?php

require "dbconn.php";
include("fusioncharts.php");
?>

    <html>

    <head>
        <title>Foodlust</title>
        <script src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
        <script src="http://static.fusioncharts.com/code/latest/fusioncharts.charts.js"></script>
        <script src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.zune.js"></script>
    </head>

    <body>

        <?php

  // $strQuery = "SELECT DISTINCT category, value1, value2, value3 FROM mscombi2ddata; ";
  // $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");


$categoryArray=array();
          $dataseries1=array();
          $dataseries2=array();
          $dataseries3=array();


$sql = "SELECT * FROM users ";
$res = mysqli_query($connect, $sql);
while ($row1 = mysqli_fetch_assoc($res)) {
  $lname = $row1['lname'];
  $fname = $row1['fname'];
  $id = $row1['user_id'];
  $name = $lname ." ". $fname;


  array_push($categoryArray, array(
            "label" => $name
          )
        );

  

$sql2 = "SELECT COUNT(prod_id) as prod FROM product_post WHERE user_seller_id = '$id'";
$result2 =mysqli_query($connect,$sql2);

while ($row2 = mysqli_fetch_assoc($result2)) {
$prod =$row2['prod'];
// $user_r = $row2['user_reason'];

   array_push($dataseries2, array(
          "value" => $prod
          )
        );
  }

$sql1 = "SELECT COUNT(id) as viewed FROM activity_log WHERE name ='$name' AND action = 'Logged In' ";
$result1 =mysqli_query($connect,$sql1);

while ($row3 = mysqli_fetch_assoc($result1)) {
//     $id = $row['user_id']; 
        $viewed = $row3['viewed'];


   array_push($dataseries1, array(
          "value" => $viewed
          )
        );

}
}
  $arrData = array(
        "chart" => array(
            "caption"=> "Foodlust",
            "subCaption"=> "Active users",
            "xAxisname"=> "users",
            "yAxisName"=> "visits site",
            "numberPrefix"=> "",
            "legendItemFontColor"=> "#666666",
            "theme"=> "zune"
            )
          );
          // creating array for categories object

          


     

     
        // array_push($dataseries3, array(
        //   "value" => $row["value3"]
        //   )
        // );

     
  



      $arrData["categories"]=array(array("category"=>$categoryArray));
      // creating dataset object
      $arrData["dataset"] = array(array("seriesName"=> "visits site", "data"=>$dataseries1), array("seriesName"=> "Products posted",  "renderAs"=>"line", "data"=>$dataseries2));


      /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */
      $jsonEncodedData = json_encode($arrData);

      // chart object
      $msChart = new FusionCharts("mscombi2d", "chart1" , "600", "350", "chart-container", "json", $jsonEncodedData);

      // Render the chart
      $msChart->render();

 


  // if ($result) {

  // $arrData = array(
  //       "chart" => array(
  //           "caption"=> "Foodlust",
  //           "subCaption"=> "Active users",
  //           "xAxisname"=> "users",
  //           "yAxisName"=> "visits site",
  //           "numberPrefix"=> "$",
  //           "legendItemFontColor"=> "#666666",
  //           "theme"=> "zune"
  //           )
  //         );
  //         // creating array for categories object

  //         $categoryArray=array();
  //         $dataseries1=array();
  //         $dataseries2=array();
  //         $dataseries3=array();

  //         // pushing category array values
  //         while($row = mysqli_fetch_array($result)) {
  //           array_push($categoryArray, array(
  //           "label" => $row["category"]
  //         )
  //       );
  //       array_push($dataseries1, array(
  //         "value" => $row["value1"]
  //         )
  //       );

  //       array_push($dataseries2, array(
  //         "value" => $row["value2"]
  //         )
  //       );
  //       array_push($dataseries3, array(
  //         "value" => $row["value3"]
  //         )
  //       );

  //     }

  //     $arrData["categories"]=array(array("category"=>$categoryArray));
  //     // creating dataset object
  //     $arrData["dataset"] = array(array("seriesName"=> "Actual Revenue", "data"=>$dataseries1), array("seriesName"=> "Projected Revenue",  "renderAs"=>"line", "data"=>$dataseries2),array("seriesName"=> "Profit",  "renderAs"=>"area", "data"=>$dataseries3));


  //     /*JSON Encode the data to retrieve the string containing the JSON representation of the data in the array. */
  //     $jsonEncodedData = json_encode($arrData);

  //     // chart object
  //     $msChart = new FusionCharts("mscombi2d", "chart1" , "600", "350", "chart-container", "json", $jsonEncodedData);

  //     // Render the chart
  //     $msChart->render();

  //     // closing db connection
  //     $dbhandle->close();

  //  }

?>

            <center>
                <div id="chart-container">Chart will render here!</div>
            </center>
    </body>

    </html>