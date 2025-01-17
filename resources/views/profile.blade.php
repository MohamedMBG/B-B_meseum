<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Museum Artists Gallery</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Work Sans', sans-serif;
            background-color: #fafafa;
            color: #2c2c2c;
            line-height: 1.6;
        }

        .header {
            background-color: #fff;
            padding: 3rem 2rem;
            text-align: center;
            border-bottom: 1px solid #eaeaea;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #1a1a1a;
            margin-bottom: 1rem;
        }

        .subtitle {
            font-weight: 300;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .card {
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .image-container {
            position: relative;
            padding-top: 100%;
            background-color: #f5f5f5;
            overflow: hidden;
        }

        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card:hover .image-container img {
            transform: scale(1.05);
        }

        .artist-infos {
            padding: 1.5rem;
        }

        .artist-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: #1a1a1a;
            margin-bottom: 1rem;
        }

        .buttons {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .button {
            flex: 1;
            padding: 0.8rem;
            text-align: center;
            text-decoration: none;
            font-weight: 500;
            border-radius: 6px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .button.call {
            background-color: #e9ecef;
            color: #495057;
        }

        .button.profile {
            background-color: #212529;
            color: #fff;
        }

        .button.call:hover {
            background-color: #dee2e6;
        }

        .button.profile:hover {
            background-color: #343a40;
        }

        /* Icons */
        .icon {
            width: 18px;
            height: 18px;
        }

        @media (max-width: 768px) {
            .header {
                padding: 2rem 1rem;
            }

            h1 {
                font-size: 2rem;
            }

            .container {
                padding: 2rem 1rem;
                gap: 1.5rem;
            }

            .card {
                border-radius: 8px;
            }
        }
    </style>

</head>

<body>
    <!-- Inclusion de la barre de navigation -->
    @include('components.nav')

    <header class="header">
        <h1>Featured Artists</h1>
        <p class="subtitle">Discover the talented artists whose works grace our museum's collection</p>
    </header>

    <!-- Conteneur principal pour la liste des artistes -->
    <div class="container">

        <!-- Boucle pour afficher chaque artiste  Pour chaque artiste dans la collection, le code à l'intérieur de la boucle est exécuté. -->
        @foreach($artists as $artist)
        <div class="card">

            <div class="image-container">
                <!-- 
                    src="{{ asset('storage/' . $artist->profile_image) }}" : 
                    - `asset()` est une fonction helper Laravel qui génère une URL absolue pour un fichier dans le dossier `public`.
                    - `storage/` est le dossier où les fichiers uploadés sont stockés.
                    - `$artist->profile_image` est le chemin de l'image de profil de l'artiste.
                -->
                <img src="{{ asset('storage/' . $artist->profile_image) }}" alt="{{ $artist->nom }} {{ $artist->prenom }}" width="100">
            </div>

            <div class="artist-infos">
                <h2 class="artist-name">{{ $artist->nom }} {{ $artist->prenom }}</h2>
                <!-- 
                    {{ $artist->nom }} {{ $artist->prenom }} : 
                    - Affiche le nom et le prénom de l'artiste.
                -->
                <div class="buttons">
                    <a href="tel:{{ $artist->phone }}" class="button call">
                        Contact
                        <!-- 
                        href="tel:{{ $artist->phone }}" : 
                        - Crée un lien pour appeler le numéro de téléphone de l'artiste.
                        - `tel:` est un protocole pour les liens de numéros de téléphone.
                        -->
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>