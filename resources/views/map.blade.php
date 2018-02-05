<!doctype html>
{{-- <html lang="{{ app()->getLocale() }}"> --}}

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.44.0/mapbox-gl.css' rel='stylesheet' />
        <title>Map</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script src='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.css' rel='stylesheet' />

    </head>


<style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
    <body>

        

        <div id='map'></div>
    </body>
</html>

<script>

L.mapbox.accessToken = '{!!config('services.mapbox.key')!!}';
var map = L.mapbox.map('map', 'mapbox.streets')
    .setView([39.95, -75.16], 15);

var featureLayer = L.mapbox.featureLayer()
    .loadURL('https://www.rideindego.com/stations/json/')
    .addTo(map);



    // Generate a GeoJSON line. You could also load GeoJSON via AJAX
// or generate it some other way.
var geojson = { type: 'LineString', coordinates: [
[39.942829, -75.177240],
[39.932810, -75.181467],
[39.932826, -75.1865740],
[39.938190, -75.185330],
[39.938185, -75.180191]

] };
var start = [10, 20];
var momentum = [3, 3];

for (var i = 0; i < 300; i++) {
    start[0] += momentum[0];
    start[1] += momentum[1];
    if (start[1] > 60 || start[1] < -60) momentum[1] *= -1;
    if (start[0] > 170 || start[0] < -170) momentum[0] *= -1;
    geojson.coordinates.push(start.slice());
}

// Add this generated geojson object to the map.
L.geoJson(geojson).addTo(map);

// Create a counter with a value of 0.
var j = 0;

// Create a marker and add it to the map.
var marker = L.marker([0, 0], {
  icon: L.mapbox.marker.icon({
    'marker-color': '#f86767'
  })
}).addTo(map);

tick();
function tick() {
    // Set the marker to be at the same point as one
    // of the segments or the line.
    marker.setLatLng(L.latLng(
        geojson.coordinates[j][1],
        geojson.coordinates[j][0]));

    // Move to the next point of the line
    // until `j` reaches the length of the array.
    if (++j < geojson.coordinates.length) setTimeout(tick, 100);
}
</script>