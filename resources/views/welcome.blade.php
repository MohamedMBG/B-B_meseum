<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B&B Museum of Art</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


    <!-- ******************************************************** THIS IS A CSS BLOC OF CODE ******************************************************** -->

    <style>
        /* Slider styles */
        .slider-container {
            position: relative;
            max-width: 100%;
            height: 600px;
            overflow: hidden;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
        }

        .slide {
            min-width: 100%;
            height: 100%;
            position: relative;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-caption {
            position: absolute;
            bottom: 2rem;
            left: 2rem;
            color: white;
            font-size: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.7);
            border: none;
            padding: 1rem;
            cursor: pointer;
            font-size: 1.5rem;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .slider-btn:hover {
            background: rgba(255, 255, 255, 0.9);
        }

        .prev-btn {
            left: 1rem;
        }

        .next-btn {
            right: 1rem;
        }

        /* Mobile styles */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                background: #1a1a1a;
            }

            .nav-links.active {
                display: flex;
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                z-index: 1000;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            .logo {
                font-size: 1.4rem;
            }

            .search-container {
                display: none;
            }

            .nav-icons {
                gap: 1rem;
            }

            .upper-nav {
                padding: 1rem;
            }

            .slider-container {
                height: 400px;
            }

            .slide-caption {
                font-size: 1.5rem;
            }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 40px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;

            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .section .text {
            flex: 1;
            padding: 20px;
        }

        .section .text h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .section .text p {
            font-size: 16px;
            margin-bottom: 20px;
            color: #555;
        }

        .section .text .btn {
            display: inline-block;
            background-color: #0073e6;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 16px;
        }

        .section .image {
            flex: 1;
        }

        .section .image img {
            width: 100%;
            max-width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
            /* Ensures there are no inline space issues */
        }

        .holidays {
            flex-direction: row-reverse;
        }

        .join-us {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .about-section {
            padding: 80px 0;
            /* background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); */
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .about-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .about-title {
            font-size: 2.8rem;
            color: #1a1a1a;
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
        }

        .about-title-underline {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #0073e6;
            margin: 15px auto 0;
        }

        .about-content-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            align-items: center;
        }

        .about-text {
            padding: 20px;
        }

        .about-intro {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 25px;
            font-weight: 300;
        }

        .about-description {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 30px;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .stat-box {
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 1.8rem;
            color: #0073e6;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #666;
        }

        .about-image-container {
            position: relative;
            padding: 20px;
        }

        .about-image-wrapper {
            position: relative;
            padding-bottom: 75%;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .about-image {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .about-content-grid {
                grid-template-columns: 1fr;
            }

            .about-title {
                font-size: 2.2rem;
            }

            .about-intro {
                font-size: 1.1rem;
            }

            .about-description {
                font-size: 1rem;
            }
        }
        .comments-section {
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        margin: 20px 0;
    }

    .comment-form {
        margin-bottom: 20px;
    }

    .comment-textarea {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        font-size: 16px;
        resize: vertical;
    }

    .submit-btn {
        background-color: #0073e6;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }

    .submit-btn:hover {
        background-color: #005bb5;
    }

    .comments-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .comments-table th,
    .comments-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .comments-table th {
        background-color: #0073e6;
        color: #fff;
    }

    .comments-table tr:hover {
        background-color: #f1f1f1;
    }

    @media (max-width: 768px) {
        .comments-table th,
        .comments-table td {
            padding: 8px;
        }

        .comment-textarea {
            font-size: 14px;
        }

        .submit-btn {
            font-size: 14px;
            padding: 8px 16px;
        }
    }
    </style>

    <!-- ************************************************************* END OF CSS **************************************************************** -->


</head>

<body>
    @include('components.nav')
    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="https://i.pinimg.com/736x/3b/2b/4a/3b2b4a67557f2f4613c24eacc4a066d5.jpg" alt="European Paintings">
                <div class="slide-caption">Dancing Fairies</div>
            </div>
            <div class="slide">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/source/9110f8210700535.671640fbb8632.jpg" alt="Modern & Contemporary Art">
                <div class="slide-caption">Modern & Contemporary Art</div>
            </div>
            <div class="slide">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/source/121484208212727.66eae14b4d247.jpg" alt="Asian Art">
                <div class="slide-caption">Asian Art</div>
            </div>
        </div>
        <button class="slider-btn prev-btn">←</button>
        <button class="slider-btn next-btn">→</button>
    </div>


    <section id="about-us" class="about-section">
        <div class="about-container">
            <!-- Header -->
            <div class="about-header">
                <h2 class="about-title">
                    About Us
                    <span class="about-title-underline"></span>
                </h2>
            </div>

            <!-- Content Grid -->
            <div class="about-content-grid">
                <!-- Text Content -->
                <div class="about-text">
                    <p class="about-intro">
                        Welcome to The B&B Museum of Art, where history meets art in a collection that celebrates creativity, culture, and craftsmanship.
                    </p>
                    <p class="about-description">
                        Our mission is to bring the timeless beauty of art to your everyday life through carefully curated exhibitions and educational programs that inspire, educate, and enrich our community.
                    </p>
                    <div class="about-stats">
                        <div class="stat-box">
                            <h3 class="stat-number">50K+</h3>
                            <p class="stat-label">Annual Visitors</p>
                        </div>
                        <div class="stat-box">
                            <h3 class="stat-number">1000+</h3>
                            <p class="stat-label">Artworks</p>
                        </div>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="about-image-container">
                    <div class="about-image-wrapper">
                        <img src="https://cdn.dribbble.com/userupload/17612644/file/original-aea19a5d78aa761e0fdec1cce81a44b0.jpg?resize=752x&vertical=center" alt="Museum Gallery" class="about-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="join-us" id="join-us">


        <div class="container">
            <div class="about-header">
                <h2 class="about-title">
                    Join Us
                    <span class="about-title-underline"></span>
                </h2>
            </div>

            <div class="section member">
                <div class="text">
                    <h2>Become a Member</h2>
                    <p>Discover more of The Met as a Member. Join today to enjoy free admission, Preview Days for new exhibitions, special events, and much more.</p>
                    <a href="#" class="btn">Join now</a>
                </div>
                <div class="image">
                    <img src="https://i.pinimg.com/736x/4a/9c/fd/4a9cfdec861d304d61a40b06a402fe7f.jpg" alt="Person looking upwards">
                </div>
            </div>

            <div class="section holidays">
                <div class="text">
                    <h2>Holidays at The Met Store</h2>
                    <p>Discover 150 new arrivals along with dozens of seasonal must-haves, all inspired by The Met collection.</p>
                    <a href="#" class="btn">Shop now</a>
                </div>
                <div class="image">
                    <img src="https://cdn.dribbble.com/userupload/18117835/file/original-23a708f19a30a4b67e65771bb46712f4.png?resize=752x&vertical=center" alt="Holiday wreath with ornaments">
                </div>
            </div>
        </div>

    </section>

    <section class="comments-section">
        <form action="/Home" method="POST" class="comment-form">
            @csrf
            <textarea
                placeholder="Type your comment here..."
                name="comment"
                rows="4"
                cols="50"
                maxlength="200"
                class="comment-textarea"></textarea>
            <button type="submit" class="submit-btn">Submit</button>
        </form>

        <table class="comments-table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Comment</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Comments as $Comment)
                <tr>
                    <td>{{ $Comment['user']}}</td>
                    <td>{{ $Comment['content']}}</td>
                    <td>il y'a {{(int)(($temps - $Comment['created_at'])/60)}}min</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <footer style="background: #1a1a1a; color: #fff; padding: 20px 0; font-size: 0.9rem;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: start; gap: 20px;">

            <!-- About Section -->
            <div class="footer-about" style="flex: 1; min-width: 200px;">
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: #fff;">About B&B Museum</h3>
                <p style="color: rgba(255, 255, 255, 0.8);">B&B Museum of Art offers a journey through the wonders of artistic history and contemporary creativity. Join us to explore the beauty of art.</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-links" style="flex: 1; min-width: 200px;">
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: #fff;">Quick Links</h3>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="color: rgba(255, 255, 255, 0.8); text-decoration: none; margin-bottom: 8px; display: block;">Visit</a></li>
                    <li><a href="#" style="color: rgba(255, 255, 255, 0.8); text-decoration: none; margin-bottom: 8px; display: block;">Exhibitions</a></li>
                    <li><a href="#" style="color: rgba(255, 255, 255, 0.8); text-decoration: none; margin-bottom: 8px; display: block;">Membership</a></li>
                    <li><a href="#" style="color: rgba(255, 255, 255, 0.8); text-decoration: none; margin-bottom: 8px; display: block;">Shop</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="footer-contact" style="flex: 1; min-width: 200px;">
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: #fff;">Contact Us</h3>
                <p style="color: rgba(255, 255, 255, 0.8);">123 Museum Lane, Art City, World</p>
                <p style="color: rgba(255, 255, 255, 0.8);">Email: info@bbmuseum.com</p>
                <p style="color: rgba(255, 255, 255, 0.8);">phone: +123-456-7890</p>
            </div>

            <!-- Social Media -->
            <div class="footer-social" style="flex: 1; min-width: 200px;">
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: #fff;">Follow Us</h3>
                <div style="display: flex; gap: 10px;">
                    <a href="#" style="color: #fff; font-size: 1.5rem;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="color: #fff; font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: #fff; font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
                    <a href="#" style="color: #fff; font-size: 1.5rem;"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 10px;">
            <p style="color: rgba(255, 255, 255, 0.8);">© 2025 B&B Museum of Art. All rights reserved.</p>
        </div>
    </footer>


    <!-- ******************************************************** THIS IS A JAVASCRIPT BLOC OF CODE ******************************************************** -->

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        let currentSlide = 0;
        const slideCount = slides.length;

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slideCount;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slideCount) % slideCount;
            updateSlider();
        }

        setInterval(nextSlide, 5000);

        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);
    </script>

    <!-- ************************************************************* END OF JAVASCRIPT **************************************************************** -->

</body>

</html>