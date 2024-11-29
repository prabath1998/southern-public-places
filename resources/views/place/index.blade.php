<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Places</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        div {
            margin: 20px;
        }

        a {
            text-decoration: none;
            color: #333;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            display: block;
            width: 200px;
            background-color: #f0f0f0;
        }

        a:hover {
            background-color: #ddd;
        }

        h2 {
            margin: 0;
            font-size: 18px;
        }

        p {
            font-size: 14px;
            margin: 5px 0;
        }
    </style>

</head>
<body>
    <h1>Public Places in Southern Province</h1>

    <div>
        @foreach ($places as $place)
            <div style="margin-bottom: 10px;">
                <a href="https://www.google.com/maps?q={{ $place->latitude }},{{ $place->longitude }}" target="_blank">
                    <h2>{{ $place->name ?: 'Unnamed Place' }}</h2>
                    <p>Type: {{ $place->amenity }}</p>
                    <p>Location: {{ $place->latitude }}, {{ $place->longitude }}</p>
                </a>
            </div>
        @endforeach
    </div>
</body>
</html>
