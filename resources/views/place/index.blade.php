<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Places</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 40px 0;
            font-size: 36px;
            color: #3e4b5b;
            font-weight: bold;
        }

        .places-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            padding: 0 20px;
            justify-items: center;
        }

        .place-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .place-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .place-card a {
            text-decoration: none;
            color: inherit;
            display: block;
            padding: 20px;
        }

        .place-card h2 {
            font-size: 22px;
            color: #3e4b5b;
            margin: 0 0 10px;
        }

        .place-card p {
            font-size: 14px;
            color: #6b7c93;
            margin: 5px 0;
        }

        .place-card p.amenity {
            font-weight: bold;
            color: #5c6bc0;
        }

        .place-card p.location {
            font-style: italic;
        }

        .place-card .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #5c6bc0;
            color: #fff;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease;
        }

        .place-card .btn:hover {
            background-color: #3949ab;
        }
    </style>
</head>
<body>

    <h1>Public Places in Southern Province</h1>

    <div class="places-container">
        @foreach ($places as $place)
            <div class="place-card">
                <a href="https://www.google.com/maps?q={{ $place->latitude }},{{ $place->longitude }}" target="_blank">
                    <h2>{{ $place->name ?: 'Unnamed Place' }}</h2>
                    <p class="amenity">Type: {{ $place->amenity }}</p>
                    <p class="location">Location: {{ $place->latitude }}, {{ $place->longitude }}</p>
                    <span class="btn">View on Map</span>
                </a>
            </div>
        @endforeach
    </div>

</body>
</html>
