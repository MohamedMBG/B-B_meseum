<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B&B Museum of Art</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background: #1a1a1a;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1000;
        }

        .announcement-bar {
            background: #2c2c2c;
            color: #fff;
            text-align: center;
            padding: 8px;
            font-size: 0.9rem;
        }

        .upper-nav {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-family: 'Times New Roman', serif;
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1px;
            color: #fff;
            text-transform: uppercase;
        }

        .nav-icons {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-icons i {
            font-size: 1.1rem;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 10px;
            border-radius: 50%;
        }

        .nav-icons i:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .lower-nav {
            background: #1a1a1a;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-links {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            gap: 3rem;
            list-style: none;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem;
            font-size: 0.95rem;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: all 0.3s;
            position: relative;
            opacity: 0.8;
        }

        .nav-links a:hover {
            opacity: 1;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: 0;
            left: 50%;
            background: #fff;
            transition: all 0.3s;
            transform: translateX(-50%);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: #fff;
            font-size: 1.2rem;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: 0.3s;
        }

        .menu-toggle:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .search-container {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 5px 15px;
            margin-right: 20px;
        }

        .search-container input {
            background: none;
            border: none;
            color: #fff;
            padding: 5px 10px;
            outline: none;
            width: 200px;
        }

        .search-container input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .search-container i {
            color: rgba(255, 255, 255, 0.5);
            padding: 5px;
        }
    </style>

</head>

<body>

    <nav>
        <div class="upper-nav">
            <button class="menu-toggle"><i class="fas fa-bars"></i></button>
            <h1 class="logo">B&B Museum of Art</h1>
            <div class="nav-icons">
                <a href="/upload">
                    <i class="fas fa-plus"></i>
                </a>
                <a href="{{ route('user.profile') }}">
                    <i class="fas fa-user"></i>
                </a>
                <a href="{{ route('logout') }}">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </div>
        <div class="lower-nav">
            <ul class="nav-links">
                <li><a href="/Home">Home</a></li>
                <li><a href="/artworks">ArtWorks</a></li>
                <li><a href="/artists">Artists</a></li>
            </ul>
        </div>
    </nav>

</body>

</html>