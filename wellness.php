<?php include 'global/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellness | Sanctum</title>
    <link href="https://fonts.googleapis.com/css2?family=Baskervvillie&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: #fff;
            color: #2a2a2a;
            overflow-x: hidden;
        }

        /* --- Video Hero Section --- */
        .video-hero {
            position: relative;
            width: 100%;
            height: 85vh;
            overflow: hidden;
        }

        .video-hero video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.7);
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .video-content h1 {
            font-family: 'Baskervvillie', serif;
            font-size: clamp(3rem, 10vw, 6rem);
            letter-spacing: 12px;
            text-transform: uppercase;
            font-weight: 300;
        }

        /* --- Intro Section --- */
        .intro-section {
            padding: 100px 10% 60px;
            text-align: center;
        }

        .wellness-label {
            font-size: 11px;
            letter-spacing: 5px;
            text-transform: uppercase;
            color: #c9a961;
            margin-bottom: 20px;
            display: block;
            font-weight: 600;
        }

        .intro-section h2 {
            font-family: 'Baskervvillie', serif;
            font-size: 3.5rem;
            margin-bottom: 25px;
            font-weight: 300;
        }

        .intro-description {
            max-width: 800px;
            margin: 0 auto;
            line-height: 2;
            color: #666;
            font-weight: 300;
        }

        /* --- Redesigned Wellness Sections --- */
        .wellness-container {
            width: 100%;
            padding-bottom: 100px;
        }

        .wellness-row {
            padding: 100px 8%;
            display: flex;
            align-items: center;
            gap: 80px;
        }

        .wellness-row.reverse {
            flex-direction: row-reverse;
            background-color: #fcfcfc;
        }

        .wellness-content {
            flex: 1;
        }

        .wellness-content h3 {
            font-family: 'Baskervvillie', serif;
            font-size: 3.2rem;
            line-height: 1.1;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .wellness-content p {
            font-size: 1.05rem;
            line-height: 1.9;
            color: #555;
            margin-bottom: 40px;
            font-weight: 300;
        }

        /* Gallery Grid Layout */
        .wellness-gallery {
            flex: 1.3;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-template-rows: repeat(4, 100px);
            gap: 20px;
        }

        .wellness-gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .wellness-gallery img:hover {
            transform: scale(1.02);
            filter: brightness(1.1);
        }

        /* Grid Assignments */
        .img-main { grid-column: span 4; grid-row: span 4; }
        .img-top { grid-column: span 2; grid-row: span 2; }
        .img-bottom { grid-column: span 2; grid-row: span 2; }

        /* Links & CTA */
        .cta-group {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .wellness-link {
            text-decoration: none;
            color: #000;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            border-bottom: 1px solid #c9a961;
            padding-bottom: 4px;
            transition: 0.3s ease;
        }

        .wellness-link:hover {
            color: #c9a961;
            border-bottom-color: #000;
        }

        /* Responsive */
        @media (max-width: 1100px) {
            .wellness-row, .wellness-row.reverse {
                flex-direction: column;
                gap: 50px;
                padding: 80px 5%;
            }
            .wellness-gallery {
                width: 100%;
                grid-template-rows: repeat(4, 80px);
            }
        }

        @media (max-width: 768px) {
            .intro-section h2 { font-size: 2.5rem; }
            .wellness-content h3 { font-size: 2.5rem; }
            .video-hero { height: 60vh; }
        }
    </style>
</head>
<body>

    <section class="video-hero">
        <video autoplay muted loop playsinline>
            <source src="https://cdn.coverr.co/videos/coverr-elegant-hotel-lobby-9142/1080p.mp4" type="video/mp4">
        </video>
        <div class="video-overlay">
            <div class="video-content">
                <h1>Wellness</h1>
            </div>
        </div>
    </section>

    <section class="intro-section">
        <span class="wellness-label">Balance & Restoration</span>
        <h2>The Sanctuary</h2>
        <p class="intro-description">
            Discover a dedicated space for rejuvenation spanning an entire floor. 
            From state-of-the-art fitness to traditional healing therapies, every detail 
            is designed to restore balance to mind and body.
        </p>
    </section>

    <div class="wellness-container">
        
        <section class="wellness-row">
            <div class="wellness-content">
                <span class="wellness-label">Sanctum Spa</span>
                <h3>Traditional <br>Healing Arts</h3>
                <p>Designed with natural materials and soft lighting, Sanctum provides an immediate sense of detachment from the bustling city. Experience signature therapies that blend ancient Malaysian traditions with modern wellness science.</p>
                <div class="cta-group">
                    <a href="#" class="wellness-link">Book a Treatment</a>
                    <a href="#" class="wellness-link">Wellness Menu</a>
                </div>
            </div>
            <div class="wellness-gallery">
                <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2025/06/2025-06-19-EQ-TL-Web-Banners-2025-Spas.jpg" class="img-main" alt="Spa Suite">
                <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/2020-09-07_sanctum-spa-treatment-room-1024x678.jpg" class="img-top" alt="Treatment Room">
                <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/2019-10-03_eq_sanctum-facial_op.jpg" class="img-bottom" alt="Therapy">
            </div>
        </section>

        <section class="wellness-row reverse">
            <div class="wellness-content">
                <span class="wellness-label">Level 29</span>
                <h3>Skyline <br>Infinity Pool</h3>
                <p>Unparalleled relaxation and unmatched views come together where two pools give guests a spectacular panorama of Kuala Lumpur city. Stunning in the daytime, dramatic sunsets from this vantage point make an evening swim an essential experience.</p>
                <div class="cta-group">
                    <a href="#" class="wellness-link">Explore the Deck</a>
                    <a href="#" class="wellness-link">Special Offers</a>
                </div>
            </div>
            <div class="wellness-gallery">
                <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/EQ_Pool_5395_rev1-681x1024.jpg" class="img-main" alt="Infinity Pool">
                <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/2019-12-10_eq_sanctum-fitness-studio3-1024x528.jpg" class="img-top" alt="Pool View">
                <div class="img-bottom" style="background: #c9a961; display:flex; align-items:center; justify-content:center; color:white; text-align:center; padding:20px; font-size:12px; letter-spacing:2px;">
                    OPEN DAILY <br> 7:00 AM - 10:00 PM
                </div>
            </div>
        </section>

        <section class="wellness-row">
            <div class="wellness-content">
                <span class="wellness-label">Fitness Centre</span>
                <h3>Advanced <br>Conditioning</h3>
                <p>Equipped with the latest Technogym cardio and strength training equipment, our fitness centre offers panoramic views to inspire your workout. Elevate your routine with dedicated personal trainers and a space designed for peak performance.</p>
                <div class="cta-group">
                    <a href="#" class="wellness-link">Personal Training</a>
                    <a href="#" class="wellness-link">Membership</a>
                </div>
            </div>
            <div class="wellness-gallery">
                <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/2019-12-10_eq_sanctum-fitness-studio3-1024x528.jpg" class="img-main" alt="Gym Panorama">
                <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/2020-09-07_sanctum-spa-treatment-room-1024x678.jpg" class="img-top" alt="Equipment">
                <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/2019-10-03_eq_sanctum-facial_op.jpg" class="img-bottom" alt="Gym View">
            </div>
        </section>

    </div>

    <?php include 'global/footer.html'; ?>

</body>
</html>