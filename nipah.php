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
        --soft-bg: #fdfdfd;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

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
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
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

    /* --- 2. INTRO & RESERVATION CTA --- */
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

    .btn-action {
        display: inline-block;
        padding: 16px 50px;
        background: #fff;
        color: #000;
        text-decoration: none;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 3px;
        text-transform: uppercase;
        transition: 0.3s ease;
    }

    .btn-action:hover {
        background: var(--accent);
        color: #fff;
    }

    /* --- 3. THE SLIDER --- */
    .gallery-section {
        padding: 100px 0;
        background: #fff;
        position: relative;
    }

    .gallery-header { text-align: center; margin-bottom: 50px; }
    .gallery-header h2 { font-size: 11px; letter-spacing: 5px; text-transform: uppercase; color: #999; }

    .slider-container { position: relative; padding: 0 5%; display: flex; align-items: center; }
    .slider-track { display: flex; gap: 25px; overflow-x: hidden; scroll-behavior: smooth; width: 100%; }
    .slider-item { flex: 0 0 calc(75% - 25px); height: 65vh; }
    .slider-item img { width: 100%; height: 100%; object-fit: cover; }

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
        width: 50px; height: 50px; background: rgba(255,255,255,0.9);
        border: none; cursor: pointer; pointer-events: auto;
        display: flex; align-items: center; justify-content: center;
        transition: 0.3s;
    }
    .slide-arrow:hover { background: #000; color: #fff; }

    /* --- 4. CHEF & BRAND HIGHLIGHT (Narrative Style) --- */
    .highlight-section {
        padding: 120px 5%;
        background: var(--soft-bg);
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: center;
    }

    .highlight-image img { width: 100%; height: auto; box-shadow: 20px 20px 0px var(--border); }

    .highlight-text h2 {
        font-family: 'Baskervvillie', serif;
        font-size: 2.5rem;
        font-weight: 400;
        margin-bottom: 30px;
        color: var(--dark);
    }

    .highlight-text p {
        font-size: 1.05rem;
        color: #555;
        margin-bottom: 25px;
        line-height: 1.9;
    }

    /* --- 5. ESSENTIAL DETAILS GRID --- */
    .details-grid {
        max-width: 1200px;
        margin: 0 auto;
        padding: 100px 5%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 60px 40px;
    }

    .detail-item { border-top: 1px solid var(--border); padding-top: 25px; }
    .detail-item h4 { font-size: 11px; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 20px; color: #000; }
    
    .detail-list { list-style: none; }
    .detail-list li {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 12px;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    .detail-list li i { color: var(--accent); margin-top: 4px; font-size: 0.8rem; }

    .menu-link {
        font-weight: 600;
        color: var(--dark);
        text-decoration: none;
        border-bottom: 1px solid var(--accent);
        padding-bottom: 2px;
        transition: 0.3s;
    }
    .menu-link:hover { color: var(--accent); }

    /* --- 6. FINAL CTA --- */
    .final-cta {
        padding: 100px 5%;
        text-align: center;
        border-top: 1px solid var(--border);
    }

    @media (max-width: 900px) {
        .details-grid, .highlight-section { grid-template-columns: 1fr; }
        .slider-item { flex: 0 0 90%; }
    }
</style>

<section class="hero-banner">
    <img src="https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/2020-01-13_eq_nipah_main-dining-1024x555.jpg" alt="Nipah Restaurant Ambience">
    <div class="hero-overlay">
        <h1>Nipah</h1>
    </div>
</section>

<section class="intro-block">
    <div class="intro-content">
        <p>A celebration of local heritage and pan-Asian flavors, Nipah offers a vibrant culinary journey where traditional recipes are reimagined through modern precision.</p>
        <a href="#reserve" class="btn-action">Make a Reservation</a>
    </div>
</section>

<section class="gallery-section">
    <div class="gallery-header"><h2>The Experience</h2></div>
    <div class="slider-container">
        <div class="slider-nav">
            <button class="slide-arrow" onclick="scrollGallery(-1)"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="slide-arrow" onclick="scrollGallery(1)"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="slider-track" id="gallery-track">
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=1200" alt="Interior"></div>
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?auto=format&fit=crop&w=1200" alt="Cocktails"></div>
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1551881192-02436ce0b746?auto=format&fit=crop&w=1200" alt="Signature Dish"></div>
        </div>
    </div>
</section>

<section class="highlight-section">
    <div class="highlight-image">
        <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=800" alt="Executive Chef">
    </div>
    <div class="highlight-text">
        <h2>The Art of the Craft</h2>
        <p>At the heart of Nipah lies a commitment to the "Farm-to-Table" philosophy, led by our Executive Chef whose culinary lineage spans three decades of Malaysian mastery. Every dish tells a story of local provenance, utilizing ingredients sourced directly from indigenous growers.</p>
        <p>The brand is defined by its architectural elegance—a space where warm timber meets contemporary glass, creating an atmosphere that is both intimate for couples and grand for celebrations.</p>
    </div>
</section>

<section class="details-grid">
    <div class="detail-item">
        <h4>Opening Hours</h4>
        <ul class="detail-list">
            <li><i class="fa-regular fa-clock"></i> Breakfast: 6:30 AM – 10:30 AM</li>
            <li><i class="fa-regular fa-clock"></i> Lunch: 12:00 PM – 2:30 PM</li>
            <li><i class="fa-regular fa-clock"></i> Dinner: 6:30 PM – 10:30 PM</li>
        </ul>
    </div>

    <div class="detail-item">
        <h4>The Essentials</h4>
        <ul class="detail-list">
            <li><i class="fa-solid fa-shirt"></i> <strong>Dress Code:</strong> Smart Casual (No flip-flops or gym wear)</li>
            <li><i class="fa-solid fa-file-pdf"></i> <strong>Menu:</strong> <a href="/menu.pdf" class="menu-link" target="_blank">View PDF Menu</a></li>
        </ul>
    </div>

    <div class="detail-item">
        <h4>Awards & Recognition</h4>
        <ul class="detail-list">
            <li><i class="fa-solid fa-trophy"></i> Best Local Cuisine — Luxe Dining Awards 2024</li>
            <li><i class="fa-solid fa-award"></i> Michelin Selected 2025</li>
            <li><i class="fa-solid fa-star"></i> Forbes Travel Guide — Recommended Dining</li>
        </ul>
    </div>
</section>

<section class="final-cta">
    <h2 style="font-family: 'Baskervvillie', serif; font-size: 2rem; font-weight: 400; margin-bottom: 30px;">Join Us at the Table</h2>
    <a href="#reserve" class="btn-action">Secure Your Table</a>
</section>

<script>
    function scrollGallery(direction) {
        const track = document.getElementById('gallery-track');
        const scrollAmount = track.offsetWidth * 0.75;
        track.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
</script>
<?php include 'global/footer.html'; ?>