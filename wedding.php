<?php include 'global/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellness & Weddings | Sanctum</title>
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

        /* --- Video Hero Section (Unchanged) --- */
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

        .section-label {
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

        /* --- Global Venue/Wellness Rows --- */
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

        .venue-tag {
            display: inline-block;
            background: #f0f0f0;
            padding: 6px 15px;
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 20px;
            color: #888;
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

        /* --- Gallery Grid Layout --- */
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
            filter: brightness(1.05);
        }

        /* Default Grid Assignments */
        .img-main { grid-column: span 4; grid-row: span 4; }
        .img-top { grid-column: span 2; grid-row: span 2; }
        .img-bottom { grid-column: span 2; grid-row: span 2; }

        /* Alternative Grid for Reversed Rows */
        .grid-alt .img-main { grid-column: 3 / 7; grid-row: span 4; }
        .grid-alt .img-top { grid-column: 1 / 3; grid-row: span 2; }
        .grid-alt .img-bottom { grid-column: 1 / 3; grid-row: span 2; }

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
                flex-direction: column !important;
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
                <h1>Weddings</h1>
            </div>
        </div>
    </section>

    <section class="intro-section">
        <span class="section-label">The Sanctum Experience</span>
        <h2>Sacred Spaces & Grand Celebrations</h2>
        <p class="intro-description">
            Whether you seek a private sanctuary for rejuvenation or a majestic stage for your "I Do," 
            Sanctum provides an unparalleled backdrop for life's most significant moments.
        </p>
    </section>

    <div class="wellness-container">
        
        <section class="wellness-row">
            <div class="wellness-content">
                <span class="venue-tag">Outdoor Ceremony</span>
                <h3>The Enchanted Garden</h3>
                <p>Exchange vows amidst the fragrance of blooming jasmine and the soft rustle of ancient oaks. Our private gardens offer a natural cathedral for those who seek an ethereal, open-air beginning to their journey together.</p>
                <div class="cta-group">
                    <a href="the_garden.php" class="wellness-link">Explore Garden</a>
                    <a href="#" class="wellness-link">View Gallery</a>
                </div>
            </div>
            <div class="wellness-gallery">
                <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=800" class="img-main" alt="Garden Wedding">
                <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?auto=format&fit=crop&w=400" class="img-top" alt="Details">
                <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?auto=format&fit=crop&w=400" class="img-bottom" alt="Setup">
            </div>
        </section>

        <section class="wellness-row reverse">
            <div class="wellness-content">
                <span class="venue-tag">Grand Gala</span>
                <h3>The Diamond Ballroom</h3>
                <p>The pinnacle of architectural splendor. Featuring floor-to-ceiling windows and hand-blown crystal chandeliers, the Diamond Ballroom transforms every wedding into a masterpiece of light and luxury for up to 500 guests.</p>
                <div class="cta-group">
                    <a href="#" class="wellness-link">Floor Plans</a>
                    <a href="#" class="wellness-link">Inquire Now</a>
                </div>
            </div>
            <div class="wellness-gallery grid-alt">
                <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=800" class="img-main" alt="Diamond Ballroom">
                <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=400" class="img-top" alt="Ballroom Decor">
                <img src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?auto=format&fit=crop&w=400" class="img-bottom" alt="Service">
            </div>
        </section>

        <section class="wellness-row">
            <div class="wellness-content">
                <span class="venue-tag">Intimate Luxe</span>
                <h3>The Sapphire Ballroom</h3>
                <p>Designed for intimate sophistication, the Sapphire Ballroom features deep velvet accents and a private lounge. It is the perfect venue for bespoke receptions where the focus remains on the elegance of the evening.</p>
                <div class="cta-group">
                    <a href="#" class="wellness-link">Virtual Tour</a>
                    <a href="#" class="wellness-link">Menus</a>
                </div>
            </div>
            <div class="wellness-gallery">
                <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=800" class="img-main" alt="Sapphire Ballroom">
                <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=400" class="img-top" alt="Decor">
                <img src="https://images.unsplash.com/photo-1510076857177-7470076d4098?auto=format&fit=crop&w=400" class="img-bottom" alt="Cocktail">
            </div>
        </section>

    </div>

    <?php include 'global/footer.html'; ?>

</body>
</html>