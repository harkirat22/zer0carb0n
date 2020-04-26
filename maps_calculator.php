
<?php
if (isset($_POST["carbon_emission"]))
{

                $carbon_footprint = $_POST['driving_distance']*.184;
               
                echo "<script>alert('Carbon emitted will be-' + $carbon_footprint);</script>";

}


?>



<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>google maps directions api example </title>
    <style>
		   
      #map {
        height: 80%;
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
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      #right-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }
      #map {
        margin-right: 400px;
      }
      #floating-panel {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }
      @media print {
        #map {
          height: 500px;
          margin: 0;
        }
        #right-panel {
          float: none;
          width: auto;
        }
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
      <strong>Source:</strong> 
                <input type="text" id="start" value="" style="width: 200px" /> 
      <strong>Destination:</strong>
          <input type="text" id="end" value="" style="width: 200px" />  		  
    </div>
    <div id="right-panel">  </div>

    <div id="map"></div>

    <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;


        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat:-37.808163434 , lng:144.957829502} //Monash university,caulfield lat lng by default set
        });
        var input1 = (document.getElementById('start'));  // first input  id name 
        var input2 = (document.getElementById('end'));    // Second input id name
 
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var control = document.getElementById('floating-panel');
        // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        var autocomplete = new google.maps.places.Autocomplete(input1);
        var autocomplete = new google.maps.places.Autocomplete(input2);
        autocomplete.bindTo('bounds', map);
          autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(true); 
         

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
        });
      
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var end = document.getElementById('end').value;
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            console.log('Directions request failed due to ' + status);
           // window.alert('Directions request failed due to ' + status);
          }
        });
				
      }
	  


    </script>
	  	      
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV294Q2rIUMSbA7qpBXafFMi-G02Tk1d0&libraries=places&callback=initMap"
        async defer></script>
	
	<table >
		<tbody>
			<tr>
				<td style="text-align: left; padding: 25px; width: 300px;"></td>
				
				<td style="text-align: left; padding: 0px; width: 500px;font-size: 28px;">
				<form method="post">
    	
          		<strong>Input the calculated Distance:</strong> 
                    <input type="number" step="any" required name="driving_distance" id="driving_distance" value="" style="width: 350px; height:25px;" />
    				<input type="submit"  name="carbon_emission" id="carbon_emission" value="Calculate CO2" style="width: 350px; margin-top: 10px; height:25px; background-color: rgb(13,157,61);font-size: 18px;height: 40px; padding: 4px;" /> 
				</form>

  	                		<h3><a href="https://zer0carb0n.me">Return to Home</a></h3>

</td>
				
				<td style="text-align: left; padding: 8px"></td>
			</tr>
			
		</tbody>
	</table>
  
  </body>
</html>