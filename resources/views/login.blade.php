<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        }

        label {
            text-align: left;
            margin-bottom: 8px;
            font-size: 14px;
            color: #B0B0B0;
        }

        input[type="email"],
        input[type="password"] {
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #555;
            border-radius: 6px;
            font-size: 16px;
            width: 100%;
            background-color: #3A3A4D;
            /* Dark input background */
            color: #E0E0E0;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #FF6F61;
            box-shadow: 0 0 8px rgba(255, 111, 97, 0.4);
            outline: none;
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

        .forgot-password {
            margin-top: 16px;
            font-size: 14px;
        }

        .error-message {
            color: #FF4A4A;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>
        <!-- 
        Formulaire de connexion 
        L'attribut action spécifie l'URL où les données du formulaire seront envoyées 
        (la route login.submit). La méthode POST est utilisée pour envoyer les données 
        -->
        <form action="{{ route('login.submit') }}" method="post">
            @csrf <!-- Token CSRF pour la sécurité (protection contre les attaques CSRF) -->
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
                <!-- Affichage des erreurs de validation pour l'email -->
                @error('email')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <!-- Affichage des erreurs de validation pour le mot de passe -->
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Login</button>
        </form>

        <!-- Lien pour rediriger vers la page d'inscription -->
        <div class="forgot-password">
            <a href="{{ route('signup') }}">Don't have an account? Sign Up</a>
        </div>
    </div>
</body>

</html>