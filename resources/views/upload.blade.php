<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Artwork - Online Museum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Reset */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Container for the Form */
        .container {
            max-width: 800px;
            width: 100%;
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            margin: 100px auto 40px;
            /* Adjusted margin to account for the navbar */
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 32px;
            font-weight: 700;
            position: relative;
        }

        h1::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #4a90e2, #357abd);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #2c3e50;
            font-weight: 500;
            font-size: 16px;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus,
        select:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 8px rgba(74, 144, 226, 0.3);
            outline: none;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        select {
            background-color: white;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%232c3e50%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 12px;
        }

        .file-upload {
            border: 2px dashed #4a90e2;
            padding: 30px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 15px;
            background-color: #f8f9fa;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .file-upload:hover {
            border-color: #357abd;
            background-color: #e9f5ff;
        }

        .file-upload input[type="file"] {
            display: none;
        }

        .file-upload label {
            cursor: pointer;
            color: #4a90e2;
            font-weight: 500;
            font-size: 16px;
        }

        .file-upload label i {
            margin-right: 10px;
            font-size: 20px;
        }

        .file-hint {
            font-size: 14px;
            color: #666;
            margin-top: 8px;
            text-align: center;
        }

        button {
            background: linear-gradient(90deg, #4a90e2, #357abd);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            width: 100%;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.3);
        }

        button:active {
            transform: translateY(0);
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
                margin: 80px 20px 20px;
                /* Adjusted margin for mobile */
            }

            h1 {
                font-size: 26px;
            }

            input[type="text"],
            input[type="number"],
            textarea,
            select {
                padding: 10px;
            }

            .file-upload {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Inclusion de la barre de navigation -->
    <!-- Le composant 'nav' est inclus ici pour afficher la barre de navigation. -->
    @include('components.nav')

    <div class="container">
        <!-- Titre principal de la page -->
        <h1>Upload Artwork</h1>

        <!-- Affichage des messages de succès ou d'erreur -->
        <!-- Si une session contient un message de succès, il sera affiché ici en vert. -->
        @if(session('success'))
        <div style="color: green;">
            {{ session('success') }} <!-- Message de succès envoyé depuis le contrôleur -->
        </div>
        @endif

        <!-- Vérification de la présence d'erreurs de validation -->
        @if($errors->any())
        <div style="color: red;">
            <ul>
                <!-- Affichage de toutes les erreurs sous forme de liste -->
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Formulaire d'upload -->
        <form action="{{ route('upload.submit') }}" method="POST" enctype="multipart/form-data">
            <!-- Jeton CSRF pour sécuriser les requêtes POST -->
            @csrf

            <!-- Champ pour le titre de l'œuvre -->
            <div>
                <label for="title">Title</label> <!-- Étiquette pour le champ du titre -->
                <input type="text" name="title" id="title" required> <!-- Champ de saisie requis -->
            </div>

            <!-- Champ pour la description de l'œuvre -->
            <div>
                <label for="description">Description</label> <!-- Étiquette pour la description -->
                <textarea name="description" id="description" rows="5" required></textarea>
                <!-- Zone de texte avec 5 lignes par défaut -->
            </div>

            <!-- Champ pour l'upload d'image -->
            <div>
                <label for="image">Artwork Image</label> <!-- Étiquette pour l'image -->
                <input type="file" name="image" id="image" required> <!-- Champ de téléchargement d'image requis -->
            </div>

            <!-- Champ pour saisir les dimensions de l'œuvre -->
            <div>
                <label for="dimensions">Dimensions</label>
                <input type="text" name="dimensions" id="dimensions" placeholder="e.g., 500x500 px" required>
                <!-- Champ de saisie avec un exemple sous forme de placeholder -->
            </div>

            <!-- Menu déroulant pour sélectionner une catégorie -->
            <div>
                <label for="category_id">Category</label> <!-- Étiquette pour la catégorie -->
                <select name="category_id" id="category_id" required> <!-- Champ de sélection requis -->
                    <option value="" disabled selected>Select a category</option>
                    <!-- Boucle pour générer les options de catégorie -->
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Bouton pour soumettre le formulaire -->
            <div>
                <button type="submit">Upload Artwork</button>
            </div>
        </form>
    </div>
</body>
</html>