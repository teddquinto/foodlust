<?php

require "dbconn.php";


session_start();

@$user_id = $_SESSION['user_id'];

// $name2 = @$_SESSION['name'];

if(!isset($user_id)){ header('location:../index.php'); } else {  

@$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE user_id = '$id' ";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result)){



$address = $row['address'];

}


          
            $prepAddr = str_replace(' ','+',$address);

            $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');

            $output= json_decode($geocode);

             $lat = $output->results[0]->geometry->location->lat;
             $long = $output->results[0]->geometry->location->lng;

             // echo $address.'<br>Lat: '.$lat.'<br>Long: '.$long;

    ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Geocoding service</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
    <input id="lat" type="hidden" value="<?php echo $lat; ?>">
    <input id="long" type="hidden" value="<?php echo $long; ?>">
      <input id="address" type="textbox" value="<?php echo $address; ?>">
      <input id="submit" type="button" value="find">
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var latt = document.getElementById('lat');
        var long = document.getElementById('long');

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 14.4129931 , lng: 120.9736786 }
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTw1uflyiCystk2FC5pIUlo8s_zBNwq_U&callback=initMap">
    </script>
  </body>
</html>
<?php } ?>