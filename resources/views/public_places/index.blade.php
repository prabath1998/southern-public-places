<!DOCTYPE html>
<html>
<head>
    <title>OpenStreetMap Example</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>OpenStreetMap with Leaflet</h1>
    <div id="map"></div>
    <script>
        var map = L.map('map').setView([6.2500, 80.5000], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

     
        L.marker([6.2500, 80.5000]).addTo(map)
            .bindPopup('Southern Province')
            .openPopup();
    </script>
</body>
</html>
