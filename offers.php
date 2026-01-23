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
</style>
</head>

<body>
    <section class="video-hero">
        <video autoplay muted loop playsinline>
            <source src="https://cdn.coverr.co/videos/coverr-elegant-hotel-lobby-9142/1080p.mp4" type="video/mp4">
        </video>
        <div class="video-overlay">
            <div class="video-content">
                <h1>Offers</h1>
            </div>
        </div>
    </section>

  <section class="intro-section">
        <h2>Refined Luxury</h2>
        <p class="intro-description">Experience the pinnacle of hospitality in our thoughtfully curated selection of event spaces, designed for moments that matter.</p>
    </section>

            <nav class="offers-filter">
            <a href="#" class="filter-btn active-filter" data-filter="all">ALL OFFERS</a>
            <a href="#" class="filter-btn" data-filter="lunar">LUNAR NEW YEAR</a>
            <a href="#" class="filter-btn" data-filter="stay">STAY</a>
            <a href="#" class="filter-btn" data-filter="dining">DINING</a>
            <a href="#" class="filter-btn" data-filter="wedding">WEDDING</a>
            <a href="#" class="filter-btn" data-filter="wellness">WELLNESS</a>
        </nav>

        <section class="offers-grid">
            <div class="offer-card" data-category="stay">
                <div class="offer-image">
                    <img src="images/DSC_5204.jpg" alt="Weekday Getaway" />
                </div>
                <div class="offer-content">
                    <h3>PROSPERITY RETREAT AT EQ</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Welcome the season of new beginnings with a Lunar New Year stay
                        designed for meaningful moments in the heart of Kuala Lumpur.
                    </p>
                    <a href="lunarcny.php" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>
            <div class="offer-card" data-category="stay">
                <div class="offer-image">
                    <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2023/07/2025-12-09-EQ-Room-SaturdatewithKampachi-thumbnail.jpg"
                        alt="Weekday Getaway" />
                </div>
                <div class="offer-content">
                    <h3>SATURDATE WITH KAMPACHI</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Book yourself a weekend escape bookended by fabulous culinary experiences when you take
                        advantage of our Saturdate room promotion.
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>
            <div class="offer-card" data-category="stay">
                <div class="offer-image">
                    <img src="images/WebThumbnail_EV-Charging.webp" alt="Weekday Getaway" />
                </div>
                <div class="offer-content">
                    <h3>RECHARGE & RELAX</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Book your stay and enjoy our unrivalled hospitality as well as the convenience of complimentary
                        EV charging at
                        Kuala Lumpur’s Number 1 city hotel.
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>
            <div class="offer-card" data-category="lunar">
                <div class="offer-image">
                    <img src="images/CNY-Lion-Dance-v2.jpg" alt="One Night Only" />
                </div>
                <div class="offer-content">
                    <h3>THE LIONS ARE COMING!</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        A highlight of the Lunar New Year calendar, lion dances symbolise
                        the ushering in of prosperity, health and new beginnings.
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>
            <div class="offer-card" data-category="lunar">
                <div class="offer-image">
                    <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2025/12/2025-12-16-EQ-Kampachi-Festive-Reunion-Delights-thumbnail.jpg"
                        alt="One Night Only" />
                </div>
                <div class="offer-content">
                    <h3>FESTIVE REUNION DELIGHTS</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Savour these traditional flavours and let each bite be a blessing for a prosperous and joyful
                        year ahead.
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>
            <div class="offer-card" data-category="lunar">
                <div class="offer-image">
                    <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2025/12/2028-12-16-EQ-Kampachi-Festive-Matsubagani-thumbnail.jpg"
                        alt="One Night Only" />
                </div>
                <div class="offer-content">
                    <h3>FESTIVE MATSUBAGANI</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Expertly prepared by Chef Ishigami, trained at the esteemed Nishimuraya Ryokan, each crab is
                        cooked to perfection, highlighting its delicate, natural flavours
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>


            <div class="offer-card" data-category="wedding">
                <div class="offer-image">
                    <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/05/2019-05-28_malay-wedding_splash.jpg"
                        alt="Weekday Getaway" />
                </div>
                <div class="offer-content">
                    <h3>MALAY FLAIR
                    </h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        At EQ, experience the perfect blend of luxury and tradition in Kuala Lumpur’s heart.
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>
            <div class="offer-card" data-category="wedding">
                <div class="offer-image">
                    <img src="images/Bride at Spiral staircase Ad 02.jpg" alt="Weekday Getaway" />
                </div>
                <div class="offer-content">
                    <h3>WESTERN ELEGANCE</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Discover the pinnacle of romance and elegance with a Western-themed wedding at Kuala Lumpur’s
                        premier venue, EQ.
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>

            <div class="offer-card" data-category="wedding">
                <div class="offer-image">
                    <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/05/2019-05-28_chinese-wedding_splash-1024x768.jpg"
                        alt="Weekday Getaway" />
                </div>
                <div class="offer-content">
                    <h3>CHINESE ROMANCE</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Begin your ‘happily ever after’ with a traditional Chinese wedding at EQ, Kuala Lumpur’s premier
                        ballroom.
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>

            <div class="offer-card" data-category="wellness">
                <div class="offer-image">
                    <img src="images/2021-08-31-Sanctum-Merdeka-Sales-2021-Website-Banner-1024x683.jpg"
                        alt="Weekday Getaway" />
                </div>
                <div class="offer-content">
                    <h3>FESTIVE SPA GIFTING PACKAGE</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Voted one of Malaysia’s top three BEST SPAS, Sanctum is the place to unwind, heal and maintain
                        perfect mind-body balance and harmony.
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>
            <div class="offer-card" data-category="wellness">
                <div class="offer-image">
                    <img
                        src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/2019-12-10_eq_sanctum-fitness-studio1-1024x506.jpg" />
                </div>
                <div class="offer-content">
                    <h3>FITNESS MEMBERSHIP</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Take your fitness journey to a whole new level at Sanctum Fitness.
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>
            <div class="offer-card" data-category="wellness">
                <div class="offer-image">
                    <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/10/2019-10-09_eq_swimming-pool-sunset-1-1024x683.jpg"
                        alt="Weekday Getaway" />
                </div>
                <div class="offer-content">
                    <h3>DAY PASS</h3>
                    <p class="promo-tag">
                    </p>
                    <p class="offer-desc">
                        Ultimate way to unwind and soak up the sun? Get ready for an unforgettable day at our sparkling
                        Asia Pacific #1 Hotel Pool, voted by Travel + Leisure Luxury Awards
                    </p>
                    <a href="#" class="discover-link">DISCOVER MORE</a>
                </div>
            </div>
        </section>
        <div class="load-more-container">
            <button class="load-more-btn">LOAD MORE</button>
        </div>
        <br>
        <style>
            :root {
    --gold: #b08d57;
    --dark: #1a1a1a;
    --light-grey: #f9f9f9;
    --text-grey: #555;
    --white: #ffffff;
}

/* Navigation Filter */
.offers-filter {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 40px;
    flex-wrap: wrap;
}

.filter-btn {
    text-decoration: none;
    color: var(--dark);
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 1px;
    padding: 10px 5px;
    border-bottom: 2px solid transparent;
    transition: all 0.3s ease;
}

.filter-btn:hover, .active-filter {
    color: var(--gold);
    border-bottom: 2px solid var(--gold);
}

/* Offers Grid */
.offers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.offer-card {
    background: var(--white);
    border: 1px solid #eee;
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
}

.offer-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}

.offer-image {
    width: 100%;
    height: 250px;
    overflow: hidden;
}

.offer-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.offer-card:hover .offer-image img {
    transform: scale(1.05);
}

.offer-content {
    padding: 25px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.offer-content h3 {
    font-size: 1.2rem;
    letter-spacing: 1px;
    margin: 0 0 15px 0;
    text-transform: uppercase;
}

.offer-desc {
    color: var(--text-grey);
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}

.discover-link {
    color: var(--gold);
    text-decoration: none;
    font-size: 0.8rem;
    font-weight: bold;
    letter-spacing: 1.5px;
    border-bottom: 1px solid var(--gold);
    align-self: flex-start;
    padding-bottom: 2px;
}

/* Load More Button */
.load-more-container {
    text-align: center;
    margin-top: 50px;
}

.load-more-btn {
    background: var(--dark);
    color: white;
    border: none;
    padding: 15px 40px;
    letter-spacing: 2px;
    cursor: pointer;
    transition: background 0.3s;
}

.load-more-btn:hover {
    background: var(--gold);
}

/* Hidden state for filtering */
.offer-card.hidden {
    display: none;
}
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const offerCards = document.querySelectorAll('.offer-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            
            // Toggle active class
            filterButtons.forEach(btn => btn.classList.remove('active-filter'));
            button.classList.add('active-filter');

            const filterValue = button.getAttribute('data-filter');

            offerCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
});
        </script>
            <?php include 'global/footer.html'; ?>
