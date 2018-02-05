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

] };// Add a new line to the map with no points.
var polyline = L.polyline([]).addTo(map);

// Keep a tally of how many points we've added to the map.
var pointsAdded = 0;

// Start drawing the polyline.
add();

function add() {

    // `addLatLng` takes a new latLng coordinate and puts it at the end of the
    // line. You optionally pull points from your data or generate them. Here
    // we make a sine wave with some math.

    geojson.coordinates.forEach((coordinate, index) => {
        polyline.addLatLng(
        L.latLng(coordinate);
    
});

    
}
</script>