<!doctype html>
{{-- <html lang="{{ app()->getLocale() }}"> --}}

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.44.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.44.0/mapbox-gl.css' rel='stylesheet' />
<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
        <title>Map</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
mapboxgl.accessToken = '{!!config('services.mapbox.key')!!}';
var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
    center: [-75.25, 40], // starting position [lng, lat]
    zoom: 13 // starting zoom




});

var featureLayer = L.mapbox.featureLayer()
    .loadURL('https://www.rideindego.com/stations/json/')
    .addTo(map);
</script>