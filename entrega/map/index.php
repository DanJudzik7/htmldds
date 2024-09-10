<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS reference -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <style>
            html,body{
                width:100%;
                height:100%;
                padding:0;
                margin:0;
            }
            #map{
                width:100%;
                height:100%;
            }
        </style>
        <title>Map</title>
    </head>
    <body>
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([-34.608630, -58.435381], 13);
            L.tileLayer('https://maptiles.p.rapidapi.com/es/map/v1/{z}/{x}/{y}.png?rapidapi-key=ed1472f8afmshe5d78e94a44889dp1d18f9jsn86371f58991a', {
                attribution: '&copy: <a href="https://www.maptilesapi.com/">MapTiles API</a>, Datos de Mapa &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                maxZoom: 20
            }).addTo(map);
            
            
            var marker = L.marker([-34.608630, -58.435381]).addTo(map);
            marker.bindPopup('<b>Parque Centenario</b>');
            var marker2 = L.marker([-34.659977, -58.468285]).addTo(map);
            marker2.bindPopup('<b>Lugano</b>');
            var marker3 = L.marker([-34.598505, -58.420206]).addTo(map);
            marker3.bindPopup('<b>Medrano</b>');
            var marker4 = L.marker([-34.565021, -58.470887]).addTo(map);
            marker4.bindPopup('<b>Villa Urquiza</b>');
            var marker3 = L.marker([-34.603684, -58.381631]).addTo(map);
            marker3.bindPopup('<b>Obelisco</b>');
            
            /*var marker = L.marker([41.5, -0.09], {icon: myIcon}).addTo(map);
            var myIcon2 = L.icon({
                iconUrl: '/gestion/map/media/marker-icon.png',
                iconSize: [38, 95],
                iconAnchor: [22, 94],
                popupAnchor: [-3, -76],
                shadowUrl: '/gestion/map/media/marker-shadow.png',
                shadowSize: [68, 95],
                shadowAnchor: [22, 94]
            });
            var marker2 = L.marker([-34,-58], {icon: myIcon2}).addTo(map);*/
        </script>
    </body>
</html>