<!DOCTYPE html>
 <html>
 <head>
 	<title>Request</title>
 	<script type='text/javascript' src='jquery-3.4.1.min.js'></script>
 	<meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
	
	.form02{
	position:relative;
	top:0;
	left:0;
	
	width:300px;
	height:300px;
	background:rgba(250, 250, 250, 0.9);
	box-sizing:border-box;
	
	padding:0px;
	}
	
      #map {
        height: 400px;
        width: 400px;
		top:50%;
		left:50%;
	transform:translate(-70%,-160%);
      }
       html, body {
        height: 100%;
		background-image:url("dis.jpg");
	-webkit-background-size:cover;
	background-size:cover;
	font-family:tahoma,sans_ferif;
        margin: 0;
        padding: 0;
      }
    </style>

 </head>
 <body>
  <div class="form02">
 	 <?php 
      //Variavles to use in html
 	    session_start(); 	
 		$fname = $_SESSION['fname'];
  		$lname = $_SESSION['lname'];
  		$gender = $_SESSION['gender'];
  		$request = $_SESSION['request'];
  		$lat = $_SESSION['lat'];
  		$lng = $_SESSION['lng'];
		echo "<p style= 'color:red; font-size:25px;'>Name:$fname</p>";
		echo "<p style= 'color:red; font-size:25px;'>Gender:$gender</p>";
		echo "<p style= 'color:red; font-size:25px;'>Request:$request</p>";
		echo "<p style= 'color:red; font-size:25px;'>Lat:$lat</p>";
		echo "<p style= 'color:red; font-size:25px;'>Lng:$lng</p>";
  	
	?>
	</div>

  <!-------------MAP------------>
	<div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $lat ?>, lng: <?php echo $lng?>},
          zoom: 17
        });
        var marker = new google.maps.Marker({
        	position: {lat: <?php echo $lat ?>, lng: <?php echo $lng?>}, 
        	map: map
        });

      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3UjNHkxFsJ-lmCOIDINFpHkXfthClJkA&callback=initMap"
    async defer></script>
	</div>
 </body>
 </html>