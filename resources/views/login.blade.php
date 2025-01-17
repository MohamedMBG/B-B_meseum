<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2C2F36; /* Dark background */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #E0E0E0; /* Light text color */
        }

        .container {
            background-color: #3A3F47; /* Darker container */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #FF6F61; /* Accent color for the title */
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            text-align: left;
            margin-bottom: 5px;
            font-size: 14px;
            color: #B0B0B0; /* Lighter text for labels */
        }

        input[type="email"],
        input[type="password"] {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #555;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            background-color: #444; /* Dark input background */
            color: #E0E0E0; /* Light text in inputs */
        }

        button[type="submit"] {
            padding: 12px;
            background-color: #FF6F61; /* Accent color for the button */
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #E84C3D; /* Darker accent on hover */
        }

        a {
            color: #FF6F61; /* Accent color for links */
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }

        .forgot-password {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>
        <form action="{{ route('login.submit') }}" method="post">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                @error('password')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="forgot-password">
            <a href="{{ route('signup') }}">Sign Up</a>
        </div>
    </div>
</body>

</html>