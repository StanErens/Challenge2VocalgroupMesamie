<?php 

echo "<!DOCTYPE html>";
include_once("../includes/navbar.php");
?>

<html>
	<link rel="stylesheet" href="../css/style.css">
    <h1>Contact</h1>

    Repetitie-ruimte Amyerhoof 	 	Secretariaatadres 	 
 	Severenplein 27	 	            Nielsbohrstraat 11	 
 	6225 AZ Maastricht	 	        6227 VT Maastricht	 
 	 	 	 	 
 	vocalgroupmesamie@gmail.com	 	 
	 <div id="map"></div>
	 <script>
      // Initialize and add the map
      function initMap() {
       
        const amby = { lat: 50.864300, lng: 5.731435 };
        // The map, centered 
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: amby,
        });
        // The marker, positioned
        const marker = new google.maps.Marker({
          position: amby,
          map: map,
        });
      }
    </script>
	<script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
      async
    ></script>


</html>