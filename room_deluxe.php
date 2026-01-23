<?php
include 'global/static_header.php';
?>

<link href="https://fonts.googleapis.com/css2?family=Baskervvillie&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    :root {
        --accent: #c9a961;
        --dark: #1a1a1a;
        --border: #e0e0e0;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #fff;
        color: var(--dark);
        line-height: 1.6;
    }

    /* --- 1. HERO BANNER --- */
    .hero-banner {
        position: relative;
        width: 100%;
        height: 100vh;
    }

    .hero-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 120px 5%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
        color: #fff;
        text-align: center;
    }

    .hero-overlay h1 {
        font-family: 'Baskervvillie', serif;
        font-size: clamp(2.2rem, 5vw, 4rem);
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 4px;
    }

    /* --- 2. INTRO --- */
    .intro-block {
        padding: 100px 5%;
        text-align: center;
        background: #000;
        color: #fff;
    }

    .intro-content p {
        font-family: 'Baskervvillie', serif;
        font-size: 1.3rem;
        max-width: 850px;
        margin: 0 auto 40px;
        line-height: 1.8;
    }

    .btn-check-rates {
        display: inline-block;
        padding: 16px 50px;
        background: #fff;
        color: #000;
        text-decoration: none;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    /* --- 3. THE SLIDER (NOW FUNCTIONAL) --- */
    .gallery-section {
        padding: 100px 0;
        background: #fff;
        position: relative;
    }

    .gallery-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .gallery-header h2 {
        font-size: 11px;
        letter-spacing: 5px;
        text-transform: uppercase;
        color: #999;
    }

    .slider-container {
        position: relative;
        padding: 0 5%;
        display: flex;
        align-items: center;
    }

    .slider-track {
        display: flex;
        gap: 25px;
        overflow-x: hidden;
        /* JavaScript handles the scroll */
        scroll-behavior: smooth;
        width: 100%;
    }

    .slider-item {
        flex: 0 0 calc(75% - 25px);
        height: 65vh;
    }

    .slider-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Navigation Arrows */
    .slider-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        left: 0;
        display: flex;
        justify-content: space-between;
        padding: 0 2%;
        pointer-events: none;
        transform: translateY(-50%);
        z-index: 10;
    }

    .slide-arrow {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.9);
        border: none;
        cursor: pointer;
        pointer-events: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .slide-arrow:hover {
        background: #000;
        color: #fff;
    }

    /* --- 4. DETAILS GRID --- */
    .details-grid {
        max-width: 1200px;
        margin: 0 auto;
        padding: 80px 5%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 60px 40px;
    }

    .detail-item {
        border-top: 1px solid var(--border);
        padding-top: 25px;
    }

    .detail-item h4 {
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 15px;
        color: #000;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .detail-item p,
    .detail-item li {
        font-size: 0.9rem;
        color: #666;
        list-style: none;
    }

    .detail-item ul li {
        margin-bottom: 8px;
        padding-left: 15px;
        position: relative;
    }

    .detail-item ul li::before {
        content: "—";
        position: absolute;
        left: 0;
        color: #ccc;
    }

    /* --- 5. RELATED --- */
    .related {
        padding: 100px 5%;
        background: #fcfcfc;
        text-align: center;
    }

    .related-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        max-width: 1200px;
        margin: 40px auto 0;
    }

    .room-card {
        text-decoration: none;
        color: inherit;
    }

    .room-card img {
        width: 100%;
        aspect-ratio: 16/9;
        object-fit: cover;
    }

    .room-card h5 {
        font-family: 'Baskervvillie', serif;
        font-size: 1.4rem;
        margin-top: 15px;
        font-weight: 400;
    }

    @media (max-width: 900px) {

        .details-grid,
        .related-grid {
            grid-template-columns: 1fr;
        }

        .slider-item {
            flex: 0 0 90%;
        }
    }
</style>

<section class="hero-banner">
    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1920" alt="Villa">
    <div class="hero-overlay">
        <h1>Five-Bedroom Beachfront Villa</h1>
    </div>
</section>

<section class="intro-block">
    <div class="intro-content">
        <p>Lounge by your private pool or cook today's fresh catch on your grill, steps from Barnes Bay Beach. This indoor-outdoor space provides the perfect setting for reunions and gatherings.</p>
        <a href="#" class="btn-check-rates">Check Rates</a>
    </div>
</section>

<section class="gallery-section">
    <div class="gallery-header">
        <h2>Gallery</h2>
    </div>
    <div class="slider-container">
        <div class="slider-nav">
            <button class="slide-arrow" onclick="scrollGallery(-1)"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="slide-arrow" onclick="scrollGallery(1)"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="slider-track" id="gallery-track">
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1200" alt="1"></div>
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=1200" alt="2"></div>
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1200" alt="3"></div>
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?auto=format&fit=crop&w=1200" alt="4"></div>
        </div>
    </div>
</section>

<section class="details-grid">
    <div class="detail-item">
        <h4><i class="fa-solid fa-bed"></i> Beds</h4>
        <p>Four king beds and two queen beds. Crib available upon request.</p>
    </div>
    <div class="detail-item">
        <h4><i class="fa-solid fa-users"></i> Occupancy</h4>
        <p>Maximum 12 guests (up to 5 children).</p>
    </div>
    <div class="detail-item">
        <h4><i class="fa-solid fa-maximize"></i> Size</h4>
        <p>8,804 sq. ft. (818 m2). Two-floor layout.</p>
    </div>
    <div class="detail-item">
        <h4><i class="fa-solid fa-bath"></i> Bathroom</h4>
        <p>5.5 marble baths, soaking tub, and two outdoor showers.</p>
    </div>
    <div class="detail-item">
        <h4><i class="fa-solid fa-mountain-sun"></i> Views</h4>
        <p>Direct Beachfront / Ocean.</p>
    </div>
    <div class="detail-item">
        <h4><i class="fa-solid fa-star"></i> Features</h4>
        <ul>
            <li>Private plunge pool</li>
            <li>Full gourmet kitchen</li>
            <li>Direct beach access</li>
        </ul>
    </div>
</section>

<section class="related">
    <h2 style="font-size: 11px; letter-spacing: 5px; text-transform: uppercase; color: #999;">Explore More</h2>
    <div class="related-grid">
        <a href="#" class="room-card">
            <img src="https://images.unsplash.com/photo-1591088398332-8a7791972843?auto=format&fit=crop&w=1000" alt="P">
            <h5>Presidential Ocean Sanctum</h5>
        </a>
        <a href="#" class="room-card">
            <img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?auto=format&fit=crop&w=1000" alt="S">
            <h5>Three-Bedroom Rooftop Suite</h5>
        </a>
    </div>
</section>

<script>
    function scrollGallery(direction) {
        const track = document.getElementById('gallery-track');
        const scrollAmount = track.offsetWidth * 0.75; // Matches the width of one item
        track.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
</script>
<?php include 'global/footer.html'; ?>