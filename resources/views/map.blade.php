<!DOCTYPE html>
<html>
<head>
    <title>Public Places in Southern Province</title>
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
    <h1>Public Places in Southern Province, Sri Lanka</h1>
    <div id="map"></div>

    <script>

        var map = L.map('map').setView([6.25, 80.5], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        fetch('/fetch-public-places')
            .then(response => response.json())
            .then(data => {
                data.elements.forEach(place => {
                    if (place.lat && place.lon) {
                        const name = place.tags.name || 'Unnamed Place';
                        const type = place.tags.amenity || 'Unknown';
                        L.marker([place.lat, place.lon])
                            .addTo(map)
                            .bindPopup(`<b>${name}</b><br>Type: ${type}`);
                    }
                });
            })
            .catch(error => console.error('Error fetching public places:', error));
    </script>
</body>
</html>
