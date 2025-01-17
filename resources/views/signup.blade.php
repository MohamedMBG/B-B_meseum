<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #1E1E2F;
            /* Darker background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #E0E0E0;
        }

        .container {
            background-color: #2A2A3D;
            /* Darker container */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 400px;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #FF6F61;
            /* Accent color */
            margin-bottom: 24px;
            font-size: 28px;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center form items horizontally */
        }

        label {
            text-align: left;
            margin-bottom: 8px;
            font-size: 14px;
            color: #B0B0B0;
            width: 100%;
            max-width: 300px;
            /* Limit width for better alignment */
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="password"],
        input[type="file"] {
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #555;
            border-radius: 6px;
            font-size: 16px;
            width: 100%;
            max-width: 300px;
            /* Limit width for better alignment */
            background-color: #3A3A4D;
            /* Dark input background */
            color: #E0E0E0;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="file"]:focus {
            border-color: #FF6F61;
            box-shadow: 0 0 8px rgba(255, 111, 97, 0.4);
            outline: none;
        }

        input[type="file"] {
            padding: 10px;
            background-color: #444;
            cursor: pointer;
        }

        button[type="submit"] {
            padding: 14px;
            background-color: #FF6F61;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%;
            max-width: 300px;
            /* Match input width */
        }

        button[type="submit"]:hover {
            background-color: #E84C3D;
            transform: scale(1.02);
        }

        button[type="submit"]:active {
            transform: scale(0.98);
        }

        a {
            color: #FF6F61;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #E84C3D;
            text-decoration: underline;
        }

        .error-message {
            color: #FF4A4A;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
            text-align: left;
            width: 100%;
            max-width: 300px;
            /* Match input width */
        }

        .login-link {
            margin-top: 16px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Sign Up</h1>
        <!-- Formulaire d'inscription -->
        <!-- 
                action="{{ route('signup.submit') }}" : 
                L'attribut `action` spécifie l'URL où les données du formulaire seront envoyées.
                `{{ route('signup.submit') }}` est une directive Blade (Laravel) qui génère l'URL correspondant à la route nommée `signup.submit`. 
        -->
        <form action="{{ route('signup.submit') }}" method="post" enctype="multipart/form-data">
        
            @csrf
            <!-- 
                qui génère un jeton CSRF (Cross-Site Request Forgery).
                Ce jeton est un champ caché ajouté au formulaire pour protéger contre les attaques CSRF.
            -->
            <div>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" value="{{ old('nom') }}" required>
                @error('nom')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" value="{{ old('prenom') }}" required>
                @error('prenom')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" value="{{ old('phone') }}" required>
                @error('phone')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Champ pour l'image de profil -->
            <div>
                <label for="profile_image">Profile Image:</label>
                <input type="file" name="profile_image" accept="image/*">
                @error('profile_image')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Sign Up</button>
        </form>

        <div class="login-link">
            <a href="{{ route('login') }}">Deja vous avez un compte? Login</a>
        </div>
    </div>
</body>

</html>