<?php
include 'global/header.php';
?><style>
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

    /* Video Hero Section */
    .video-hero {
        position: relative;
        width: 100%;
        height: 75vh;
        overflow: hidden;
    }

    .video-hero video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.6);
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
        font-family: 'Baskervillie';
        font-size: 5rem;
        letter-spacing: 8px;
        text-transform: uppercase;
        font-weight: 300;
    }


    /* Title & Description */
    .intro-section {
        padding: 80px 5% 40px;
        text-align: center;
    }

    .intro-section h2 {
        font-family: 'Baskervillie';
        font-size: 3rem;
        margin-bottom: 20px;
        font-weight: 300;
        letter-spacing: 2px;
    }

    .intro-description {
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.8;
        color: #666;
        font-weight: 300;
    }

    /* Tab Navigation */
    .tab-navigation {
        display: flex;
        justify-content: center;
        gap: 40px;
        padding: 20px;
        border-bottom: 1px solid #eee;
        position: sticky;
        top: 0;
        z-index: 100;
        background: #fff;
    }

    .tab-btn {
        background: none;
        border: none;
        letter-spacing: 3px;
        text-transform: uppercase;
        cursor: pointer;
        color: #888;
        padding: 10px 20px;
        font-weight: 500;
        font-size: 13px;
        transition: 0.3s;
    }

    .tab-btn.active {
        color: #000;
    }

    .tab-btn.active::after {
        content: '';
        display: block;
        width: 100%;
        height: 2px;
        background: #c9a961;
        margin-top: 5px;
    }

    /* --- 2. CAROUSEL SECTION (Modified) --- */
    .carousel-container {
        padding: 80px 0;
        display: flex;
        justify-content: center;
        background: #fff;
    }

    .carousel {
        width: 100%;
        height: 550px;
        max-width: 1000px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .carousel-item {
        display: flex;
        width: 100%;
        height: 100%;
        position: absolute;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.6s ease-in-out;
        background: white;
    }

    .carousel-item.active {
        opacity: 1;
        visibility: visible;
        z-index: 1;
    }

    .carousel-item__info {
        width: 40%;
        padding: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .carousel-item__image {
        width: 60%;
        background-size: cover;
        background-position: center;
        transition: transform 0.8s ease;
        transform: scale(1.1);
    }

    .active .carousel-item__image {
        transform: scale(1);
    }

    .carousel-item__title {
        font-family: 'Playfair Display', serif;
        font-size: 40px;
        margin-bottom: 20px;
    }

    .carousel__nav {
        position: absolute;
        bottom: 20px;
        right: 20px;
        z-index: 10;
        background: #fff;
        display: flex;
    }

    .carousel__arrow {
        padding: 15px;
        cursor: pointer;
        border: 1px solid #eee;
    }



    .btn-outline {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 25px;
        border: 1px solid #2c2c2c;
        text-decoration: none;
        color: #2c2c2c;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: bold;
    }

    @media (max-width: 900px) {

        .info-grid,
        .info-content {
            grid-template-columns: 1fr;
        }



        .video-content h1 {
            font-size: 3rem;
        }
    }
    /* Signature Highlights Section */
    .highlights-section {
        padding: 100px 5%;
        background-color: #f9f9f9;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-header span {
        text-transform: uppercase;
        letter-spacing: 4px;
        font-size: 12px;
        color: #c9a961;
        display: block;
        margin-bottom: 10px;
    }

    .highlights-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .highlight-card {
        background: #fff;
        transition: transform 0.4s ease;
        border: 1px solid #eee;
    }

    .highlight-card:hover {
        transform: translateY(-10px);
    }

    .card-image {
        height: 250px;
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .highlight-card:hover .card-image img {
        transform: scale(1.1);
    }

    .card-content {
        padding: 30px;
    }

    .card-content h3 {
        font-family: 'Baskervillie', serif;
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #1a1a1a;
    }

    .highlight-list {
        list-style: none;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }

    .highlight-list li {
        font-size: 13px;
        color: #666;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .highlight-list li::before {
        content: "—";
        margin-right: 10px;
        color: #c9a961;
    }

    @media (max-width: 1024px) {
        .highlights-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .highlights-grid {
            grid-template-columns: 1fr;
        }
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
                <h1>Dining</h1>
            </div>
        </div>
    </section>

    <section class="intro-section">
        <h2>Refined Luxury</h2>
        <p class="intro-description">Experience the pinnacle of hospitality in our thoughtfully curated selection of rooms and suites.</p>
    </section>


    <section class="carousel-container">
        <div class="carousel">
            <div class="carousel__nav">
                <span id="moveLeft" class="carousel__arrow"><b>&lt;</b></span>
                <span id="moveRight" class="carousel__arrow"><b>&gt;</b></span>
            </div>

            <div class="carousel-item active">
                <div class="carousel-item__info">
                    <h1 class="carousel-item__title">Nipah</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
                    <a href="nipah.php" class="btn-outline">Discover more</a>
                </div>
                <div class="carousel-item__image" style="background-image: url('https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
            </div>

            <div class="carousel-item">
                <div class="carousel-item__info">
                    <h1 class="carousel-item__title">Sky 51 & Blue</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
                    <a href="#" class="btn-outline">Discover more</a>
                </div>
                <div class="carousel-item__image" style="background-image: url('https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-item__info">
                    <h1 class="carousel-item__title">Sabayon</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
                    <a href="#" class="btn-outline">Discover more</a>
                </div>
                <div class="carousel-item__image" style="background-image: url('https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-item__info">
                    <h1 class="carousel-item__title">Bottega</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
                    <a href="#" class="btn-outline">Discover more</a>
                </div>
                <div class="carousel-item__image" style="background-image: url('https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-item__info">
                    <h1 class="carousel-item__title">Ètoile</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
                    <a href="#" class="btn-outline">Discover more</a>
                </div>
                <div class="carousel-item__image" style="background-image: url('https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-item__info">
                    <h1 class="carousel-item__title">Kampachi</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
                    <a href="#" class="btn-outline">Discover more</a>
                </div>
                <div class="carousel-item__image" style="background-image: url('https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
            </div>

        </div>
    </section>

<section class="highlights-section">
        <div class="section-header">
            <span>The Collection</span>
            <h2>Signature Highlights</h2>
        </div>

        <div class="highlights-grid">
            <div class="highlight-card">
                <div class="card-image">
                    <img src="https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Fine Dining">
                </div>
                <div class="card-content">
                    <h3>Culinary Excellence</h3>
                    <p class="intro-description" style="font-size: 14px;">Masterfully prepared dishes using seasonal, locally-sourced ingredients.</p>
                    <ul class="highlight-list">
                        <li>Award-winning Chef's Table</li>
                        <li>Organic Farm-to-Fork Sourcing</li>
                        <li>Bespoke 7-Course Tasting Menu</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-card">
                <div class="card-image">
                    <img src="https://images.pexels.com/photos/1058277/pexels-photo-1058277.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Atmosphere">
                </div>
                <div class="card-content">
                    <h3>Unrivaled Ambiance</h3>
                    <p class="intro-description" style="font-size: 14px;">From panoramic skyline views to intimate, candlelit corners.</p>
                    <ul class="highlight-list">
                        <li>360° City View Terrace</li>
                        <li>Live Jazz Performances Nightly</li>
                        <li>Private Sound-Proof Lounges</li>
                    </ul>
                </div>
            </div>

            <div class="highlight-card">
                <div class="card-image">
                    <img src="https://images.pexels.com/photos/3184183/pexels-photo-3184183.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Service">
                </div>
                <div class="card-content">
                    <h3>Curated Sommelier</h3>
                    <p class="intro-description" style="font-size: 14px;">An extensive cellar featuring rare vintages and artisan pairings.</p>
                    <ul class="highlight-list">
                        <li>Over 500 Global Labels</li>
                        <li>Expert Wine Pairing Service</li>
                        <li>Vintage Champagne Flight</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <script>
        const slides = document.querySelectorAll('.carousel-item');
        const nextBtn = document.querySelector('#moveRight');
        const prevBtn = document.querySelector('#moveLeft');
        let current = 0;

        function updateCarousel() {
            slides.forEach(slide => slide.classList.remove('active'));
            slides[current].classList.add('active');
        }

        nextBtn.addEventListener('click', () => {
            current = (current === slides.length - 1) ? 0 : current + 1;
            updateCarousel();
        });

        prevBtn.addEventListener('click', () => {
            current = (current === 0) ? slides.length - 1 : current - 1;
            updateCarousel();
        });
    </script>
    <?php include 'global/footer.html'; ?>

</body>

</html>