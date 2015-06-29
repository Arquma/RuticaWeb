
//-- Variables
var map;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

//-- show the map in the application
function showMap() {

  directionsDisplay = new google.maps.DirectionsRenderer();

  var mapOptions = { 
  	zoom: 7,
    center: new google.maps.LatLng(9.6301892, -84.2541843),//-- Costa Rica location
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById('main-map'),
      mapOptions);

  directionsDisplay.setMap(map);

}

function generateRoute(){
  
  var start = document.getElementById('inicio').value;
  var end = document.getElementById('final').value;
  var routeSites = [];//-- all the middle sites betwen the start and final point
  var allSites = document.getElementById('sitios');
  var validRouteSites = true;

  if (start != end) {//-- validate the start and the end of the route

    for (var i = 0; i < allSites.length; i++) {
      if (allSites.options[i].selected == true) {
        if ((allSites.options[i].value == start) || (allSites.options[i].value == end)) {
          validRouteSites = false;
        }        
        routeSites.push({
            location:allSites[i].value,
            stopover:true});       
      }
    }//-- end for

    if(validRouteSites){

      var request = {
          origin: start,
          destination: end,
          waypoints: routeSites,
          optimizeWaypoints: true,
          travelMode: google.maps.TravelMode.DRIVING
      };

      directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);      
        }
      });

    }else{
      alert('El punto de inicio y el punto final no deben incluirse en los sitios intermedios');
    }

  }else{
    alert('El punto de inicio y el punto final deben ser diferentes');
  }

}
