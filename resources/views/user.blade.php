<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Reset */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212; /* Dark background */
            color: #ffffff; /* White text */
        }

        /* Profile Container */
        .profile-container {
            max-width: 450px;
            width: 100%;
            background: #1e1e2f; /* Dark blue background */
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            margin: 100px auto 40px; /* Adjusted margin for navbar */
        }

        /* Profile Header */
        .profile-header {
            text-align: center;
            background: linear-gradient(135deg, #1a73e8, #0d47a1); /* Dark blue gradient */
            color: white;
            padding: 40px 20px 80px; /* Increased padding at the bottom to make room for the image */
            position: relative;
        }

        .profile-header h1 {
            margin: 0;
            font-size: 26px;
            font-weight: 600;
            z-index: 0; /* Ensure the header text doesn't overlap the image */
            position: relative;
        }

        /* Profile Image */
        .profile-image {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -60px; /* Adjusted negative margin */
            z-index: 1; /* Ensure the image appears above the header */
            position: relative;
        }

        .profile-image img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #1e1e2f; /* Dark blue border */
            object-fit: cover;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-image img:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.7);
        }

        /* Profile Info */
        .profile-info {
            padding: 30px 20px;
            text-align: center;
        }

        .profile-info h2 {
            margin: 10px 0 5px;
            font-size: 24px;
            font-weight: 600;
            color: #ffffff; /* White text */
        }

        .profile-info p {
            color: #aaa; /* Light gray text */
            margin: 5px 0;
            font-size: 16px;
        }

        .profile-info .user-phone {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 10px;
        }

        .profile-info .user-phone i {
            color: #1a73e8; /* Blue color for icon */
            font-size: 18px;
        }

        /* Additional Info Section */
        .additional-info {
            padding: 20px;
            background: #2a2a3d; /* Darker blue background */
            border-top: 1px solid #444;
        }

        .additional-info h3 {
            font-size: 20px;
            font-weight: 500;
            color: #ffffff; /* White text */
            margin-bottom: 15px;
        }

        .additional-info p {
            color: #aaa; /* Light gray text */
            font-size: 14px;
            line-height: 1.6;
        }

        /* Edit Profile Button */
        .edit-profile-button {
            display: block;
            width: 100%;
            background: linear-gradient(135deg, #1a73e8, #0d47a1); /* Dark blue gradient */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
        }

        .edit-profile-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(26, 115, 232, 0.5); /* Blue shadow */
        }

        .edit-profile-button:active {
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .profile-container {
                margin: 80px 10px 20px; /* Adjusted margin for mobile */
            }

            .profile-header h1 {
                font-size: 22px;
            }

            .profile-image img {
                width: 100px;
                height: 100px;
            }

            .profile-info h2 {
                font-size: 22px;
            }

            .profile-info p {
                font-size: 14px;
            }

            .additional-info h3 {
                font-size: 18px;
            }

            .additional-info p {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <!-- Top Navigation Bar -->
    @include('components.nav')

    <!-- Profile Container -->
    <div class="profile-container">
        <!-- Profile Header -->
        <div class="profile-header">
            <h1>User Profile</h1>
        </div>

        <!-- Profile Image -->
        <div class="profile-image">
            <img src="{{ asset('storage/' . $user->profile_image) }}" alt="User Image">
        </div>

        <!-- Profile Info -->
        <div class="profile-info">
            <h2>{{ $user->nom }} {{ $user->prenom }}</h2>
            <div class="user-phone">
                <i class="fas fa-phone"></i>
                <p>{{ $user->phone }}</p>
            </div>
        </div>

        <!-- Additional Info Section -->
        <div class="additional-info">
            <h3>About Me</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <!-- Edit Profile Button -->
        <a href="#" class="edit-profile-button">
            <i class="fas fa-edit"></i> Edit Profile
        </a>
    </div>
</body>

</html>
