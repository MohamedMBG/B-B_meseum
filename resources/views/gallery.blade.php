<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }
        .gallery-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
        }
        .gallery-item:hover {
            transform: scale(1.05);
        }
        .gallery-item img {
            width: 100%;
            height: auto;
        }
        .gallery-item .info {
            padding: 15px;
            text-align: center;
        }
        .gallery-item .info h2 {
            margin: 10px 0;
            font-size: 1.5em;
            color: #333;
        }
        .gallery-item .info p {
            color: #666;
        }
    </style>
</head>
<body>
    <!-- inclure le code de la barre de navigation avec son styling (on a importer le fichier complet) -->
    @include('components.nav')

    <div class="container">
        <h1>Gallery</h1>
        <div class="gallery">
            <!-- une loop pour qu'on puisse afficher tous les "artworks" depuis la base de donnees -->
            @foreach($artworks as $artwork)
            <div class="gallery-item">
                <img src="{{ asset('storage/' . $artwork->image_path) }}" >

                <div class="info">
                    <h2>{{ $artwork->title }}</h2>
                    <p>{{ $artwork->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>