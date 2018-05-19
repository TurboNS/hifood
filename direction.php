<?php
?>
      <!--https://www.youtube.com/watch?v=keO6egndYrE-->
      <!--map tutorial by Dave Wallace on YouTube-->
      <!-- http://www.w3schools.com/jsref/met_loc_reload.asp -->
      <!-- https://developers.google.com/maps/documentation/javascript/tutorial -->
      <!-- https://developers.google.com/maps/documentation/javascript/tutorial#libraries -->
      <!-- New video https://www.youtube.com/watch?v=pRiQeo17u6c-->
<!DOCTYPE html>
<html>
    <head>
    <title>Find your way</title>
    
    <meta  name="viewport"content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
    <style>
        
        #map-canvas{
            height:100%;
            width: 100%;
        }
        
        html,body{
            height:500px;
            margin:25px;
            padding:80px;
        }
        
         #floating-panel {
        position: absolute;
        top: 10px;
        right: 10%;
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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="toplist.php">HiFood</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="toplist.php">Top List</a></li>
            <li><a href="prepare.php">Prepare Me</a></li>
            <li><a href="order.php">Order</a></li>
            <li class="active"><a href="direction.php">Direction</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="addmenu.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<script>
var map;
var service;
  function initialise(location){
      
      
      
      function handleSearchResults(results, status){
          
          // Direction
   
   
    
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
     directionsDisplay.setMap(map);
     
     
  directionsDisplay.setPanel(document.getElementById('right-panel'));
  var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
  var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
       
       document.getElementById('floating-panel').addEventListener('change', onChangeHandler);
      
      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    
           if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
          var current= new google.maps.LatLng(location.coords.latitude,location.coords.longitude);
       var current1=current.toString();
       
        //console.log( current1);
      console.log(current);
               var option = document.createElement("option");
                option.text = results[i].vicinity;
                option.value = results[i].vicinity;
                var select = document.getElementById("end1");
                select.appendChild(option); 
                
                 console.log("here is " +results);
         directionsService.route({
          origin: current,
          destination:results[i].vicinity,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } 
        });
       
       
    }   
    
             }
        
  
      }
 //end of direction
   
   console.log(results);
   
   
    if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
        
        var marker = new google.maps.Marker({
         position:results[i].geometry.location,
          map: map,
          title: "Thai - "+results[i].vicinity,
        
    
          
        });
     
    }
    }
}
function performSearch(){
    
    
      var request = {
          
    bounds:map.getBounds(),
    name: "Thai - Dublin"
  };
      service.nearbySearch(request, handleSearchResults);
}
      
      
      
  // console.log(location);
      
      var current= new google.maps.LatLng(location.coords.latitude,location.coords.longitude);
      
        var mapOptions =
          {
                      zoom: 12,
                      center:current,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            
            // Create the map, and place it in the map_canvas div
            map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
            
            var marker = new google.maps.Marker({
                      position: current,
                      map: map,
                      title: "Your current location!"
            });
            
            
             service = new google.maps.places.PlacesService(map);
            
            //this ensures we wait until the map bounds are initialies before we perform the search
            google.maps.event.addListenerOnce(map,'bounds_changed',performSearch);
            
          //redo the search when we click on the refresh button
          $('#refresh').click(performSearch);
          
           var cityCircle = new google.maps.Circle({
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#0000FF',
      fillOpacity: 0.35,
      map: map,
      center: current,
      radius: 60
    });
    
    
    //trafic 
var trafficLayer = new google.maps.TrafficLayer();
     
     
    function trafic(){
        
         if(trafficLayer.getMap()){
         
         trafficLayer.setMap(null);
     }
     
     else{
         
          trafficLayer.setMap(map);
     }
  
    
        
    }
    
    $('#toggle_trafic').click(trafic);
    
  


   
  } // end of the main function
  $(document).ready(function(){
      
      navigator.geolocation.getCurrentPosition(initialise);
  });
    
    
</script>

<div id="map-canvas"></div>
<div id="right-panel"></div>


      
  
  <div id="floating-panel">
    <b>Type: </b>
    <select id="start">
      <option value="Thai, il">Thai</option>
      
    </select>

    <b>Search restaurant: </b>
    <select id="end1">

      <option value="6/7 Jervis St, Millennium Walkway, North City, Dublin 1">KOH restaurant</option>
      <option value="19 Essex Street East, Dublin 2">Milano Essex Street</option>
      <option value="UNIT 1, HANOVER QUAY">Milano - Grand Canal</option>
      <option value="62 Ranelagh, Dublin 6">62 Ranelagh, Dublin 6</option>
     
     
      
    </div>

</body>
</html>