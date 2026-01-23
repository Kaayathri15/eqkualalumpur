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

    /* Carousel Layout */
    .carousel-section {
        padding: 60px 0 100px;
        display: none;
        overflow: hidden;
        background: #fff;
    }

    .carousel-section.active {
        display: block;
    }

    .carousel-container {
        position: relative;
        width: 100%;
        margin: 0 auto;
    }

    .carousel-track {
        display: flex;
        align-items: stretch;
        transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        padding: 40px 0;
        gap: 30px;
    }

    /* Card Design - Matching your screenshot */
    .carousel-card {
        min-width: 380px;
        width: 380px;
        background: #fdfdfd;
        transition: all 0.6s ease;
        opacity: 0.4;
        filter: grayscale(100%);
        transform: scale(0.85);
        display: flex;
        flex-direction: column;
        border: 1px solid #f0f0f0;
    }

    .carousel-card.active {
        opacity: 1;
        filter: grayscale(0%);
        transform: scale(1.05);
        z-index: 10;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    }

    .card-image {
        width: 100%;
        height: 450px;
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-content {
        padding: 40px 35px;
        text-align: left;
        /* Left aligned like screenshot */
        background: #f8f8f8;
        flex-grow: 1;
    }

    .card-content h3 {
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
        margin-bottom: 20px;
        font-weight: 400;
    }

    .card-content p {
        font-size: 0.95rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 30px;
        font-weight: 300;
    }

    .view-details-btn {
        display: inline-block;
        padding: 12px 0;
        text-decoration: none;
        color: #2a2a2a;
        font-size: 11px;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 500;
        border-bottom: 1px solid #c9a961;
        transition: 0.3s;
    }

    .view-details-btn:hover {
        color: #c9a961;
    }

    /* Navigation Arrows */
    .carousel-controls {
        position: absolute;
        top: 40%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 40px;
        pointer-events: none;
        z-index: 20;
    }

    .nav-btn {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        border: 1px solid #2a2a2a;
        background: #fff;
        cursor: pointer;
        pointer-events: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        transition: 0.3s;
    }

    .nav-btn:hover {
        background: #2a2a2a;
        color: #fff;
    }

    /* Info Sections (Guest Services & Policies) */
    .info-section {
        padding: 100px 5%;
        background: #fdfdfd;
        border-top: 1px solid #f0f0f0;
    }

    .info-grid {
        max-width: 1400px;
        margin: auto;
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 80px;
    }

    .info-header h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2.2rem;
        letter-spacing: 3px;
        text-transform: uppercase;
        font-weight: 300;
    }

    .info-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .info-content p {
        font-size: 1rem;
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
        padding-left: 20px;
        border-left: 2px solid #c9a961;
        font-weight: 300;
    }

    @media (max-width: 900px) {

        .info-grid,
        .info-content {
            grid-template-columns: 1fr;
        }

        .carousel-card {
            min-width: 300px;
            width: 300px;
        }

        .video-content h1 {
            font-size: 3rem;
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
                <h1>Accommodations</h1>
            </div>
        </div>
    </section>

    <section class="intro-section">
        <h2>Refined Luxury</h2>
        <p class="intro-description">Experience the pinnacle of hospitality in our thoughtfully curated selection of rooms and suites.</p>
    </section>

    <nav class="tab-navigation">
        <button class="tab-btn active" onclick="switchTab('rooms')">Rooms</button>
        <button class="tab-btn" onclick="switchTab('suites')">Suites</button>
    </nav>

    <section class="carousel-section active" id="rooms-section">
        <div class="carousel-container">
            <div class="carousel-track" id="roomsTrack">
                <div class="carousel-card">
                    <div class="card-image"><img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800"></div>
                    <div class="card-content">
                        <h3>Deluxe Room</h3>
                        <p>Elegant design and essential luxury for the discerning traveler.</p><a href="room_deluxe.php" class="view-details-btn">View Details</a>
                    </div>
                </div>
                <div class="carousel-card">
                    <div class="card-image"><img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=800"></div>
                    <div class="card-content">
                        <h3>Club Room</h3>
                        <p>Access to the Equator Club with personalized concierge services.</p><a href="#" class="view-details-btn">View Details</a>
                    </div>
                </div>
                <div class="carousel-card active">
                    <div class="card-image"><img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800"></div>
                    <div class="card-content">
                        <h3>Premier King</h3>
                        <p>Spacious layout featuring panoramic views and a master king bed.</p><a href="#" class="view-details-btn">View Details</a>
                    </div>
                </div>
                <div class="carousel-card">
                    <div class="card-image"><img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=800"></div>
                    <div class="card-content">
                        <h3>Corner Studio</h3>
                        <p>Wraparound floor-to-ceiling windows with stunning cityscapes.</p><a href="#" class="view-details-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="carousel-controls">
                <button class="nav-btn" onclick="moveCarousel('rooms', -1)">←</button>
                <button class="nav-btn" onclick="moveCarousel('rooms', 1)">→</button>
            </div>
        </div>
    </section>

    <section class="carousel-section" id="suites-section">
        <div class="carousel-container">
            <div class="carousel-track" id="suitesTrack">
                <div class="carousel-card">
                    <div class="card-image"><img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?w=800"></div>
                    <div class="card-content">
                        <h3>Executive Suite</h3>
                        <p>Separate living and working areas designed for productivity and relaxation.</p><a href="#" class="view-details-btn">View Details</a>
                    </div>
                </div>
                <div class="carousel-card active">
                    <div class="card-image"><img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=800"></div>
                    <div class="card-content">
                        <h3>Presidential Suite</h3>
                        <p>Our most prestigious accommodation with world-class amenities.</p><a href="#" class="view-details-btn">View Details</a>
                    </div>
                </div>
                <div class="carousel-card">
                    <div class="card-image"><img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?w=800"></div>
                    <div class="card-content">
                        <h3>Royal Suite</h3>
                        <p>Unrivaled opulence featuring bespoke artwork and a private bar.</p><a href="#" class="view-details-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="carousel-controls">
                <button class="nav-btn" onclick="moveCarousel('suites', -1)">←</button>
                <button class="nav-btn" onclick="moveCarousel('suites', 1)">→</button>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="info-grid">
            <div class="info-header">
                <h2>Guest Services</h2>
            </div>
            <div class="info-content">
                <div>
                    <p>Limousine and VIP airport fast-track services.</p>
                    <p>Dedicated guest service team assisting throughout your stay.</p>
                </div>
                <div>
                    <p>Complimentary minibar snacks and beverages.</p>
                    <p>24-hour fitness centre and luxury spa access.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="info-section" style="background: #fff;">
        <div class="info-grid">
            <div class="info-header">
                <h2>Room Policies</h2>
            </div>
            <div class="info-content">
                <div>
                    <p>Pet Policy: One dog up to 10kg permitted per room.</p>
                    <p>Rooms are for accommodation only.</p>
                </div>
                <div>
                    <p>Children aged 0-11 stay free with existing bedding.</p>
                    <p>Check-in: 3:00 PM | Check-out: 12:00 PM.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
    const state = {
        rooms: 2,
        suites: 1
    };

    function switchTab(tab) {
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.carousel-section').forEach(sec => sec.classList.remove('active'));

        event.currentTarget.classList.add('active');
        document.getElementById(tab + '-section').classList.add('active');
        updateCarousel(tab);
    }

    function moveCarousel(type, direction) {
        const track = document.getElementById(type + 'Track');
        const cards = track.children;

        let newIndex = state[type] + direction;
        // Boundary check
        if (newIndex >= 0 && newIndex < cards.length) {
            state[type] = newIndex;
            updateCarousel(type);
        }
    }

    function updateCarousel(type) {
        const track = document.getElementById(type + 'Track');
        if (!track) return;

        const cards = Array.from(track.children);
        const cardWidth = cards[0].offsetWidth + 30; // width + gap
        const containerWidth = track.parentElement.offsetWidth;

        const currentIndex = state[type];
        const offset = (containerWidth / 2) - (cardWidth / 2) - (currentIndex * cardWidth);

        track.style.transform = `translateX(${offset}px)`;

        cards.forEach((card, index) => {
            card.classList.toggle('active', index === currentIndex);
        });
    }

    // Function to attach Click and Wheel listeners
    function initInteractions() {
        ['rooms', 'suites'].forEach(type => {
            const track = document.getElementById(type + 'Track');
            const container = track.parentElement;
            const cards = Array.from(track.children);

            // 1. CLICK TO SELECT
            cards.forEach((card, index) => {
                card.style.cursor = 'pointer'; // Make it look clickable
                card.addEventListener('click', () => {
                    state[type] = index;
                    updateCarousel(type);
                });
            });

            // 2. MOUSE WHEEL SCROLL
            let scrollTimeout;
            container.addEventListener('wheel', (e) => {
                // Prevent the whole page from scrolling while interacting with carousel
                e.preventDefault();

                // Debounce logic so it doesn't skip 5 cards at once
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    if (e.deltaY > 0 || e.deltaX > 0) {
                        moveCarousel(type, 1);
                    } else {
                        moveCarousel(type, -1);
                    }
                }, 50); 
            }, { passive: false });
        });
    }

    window.onload = () => {
        updateCarousel('rooms');
        updateCarousel('suites');
        initInteractions();
    };

    window.onresize = () => {
        updateCarousel('rooms');
        updateCarousel('suites');
    };
    </script>

    <?php include 'global/footer.html'; ?>
</body>

</html>