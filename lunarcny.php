<?php include 'global/static_header.php'; ?>

<link href="https://fonts.googleapis.com/css2?family=Baskervvillie&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    :root {
        --accent: #c9a961;
        --dark: #1a1a1a;
        --border: #e0e0e0;
        --soft-bg: #f9f9f9;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #fff;
        color: var(--dark);
        line-height: 1.8;
    }

    /* --- 1. CINEMATIC VIDEO HERO --- */
    .hero-banner {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        background: #000;
    }

    .hero-banner video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.8;
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

    .hero-overlay span {
        font-size: 11px;
        letter-spacing: 5px;
        text-transform: uppercase;
        display: block;
        margin-bottom: 20px;
    }

    .hero-overlay h1 {
        font-family: 'Baskervvillie', serif;
        font-size: clamp(2.2rem, 5vw, 4rem);
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 4px;
        max-width: 900px;
        margin: 0 auto;
    }

    /* --- 2. INTRO & BOOKING CTA --- */
    .intro-block {
        padding: 100px 5%;
        text-align: center;
        background: #000;
        color: #fff;
    }

    .intro-content p {
        font-family: 'Baskervvillie', serif;
        font-size: 1.4rem;
        max-width: 900px;
        margin: 0 auto 40px;
        line-height: 1.8;
    }

    .btn-gold {
        display: inline-block;
        padding: 18px 55px;
        background: var(--accent);
        color: #fff;
        text-decoration: none;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 3px;
        text-transform: uppercase;
        transition: 0.3s;
    }

    .btn-gold:hover { background: #fff; color: #000; }

    /* --- 3. KEY DATES & DETAILS --- */
    .details-grid {
        max-width: 1200px;
        margin: 0 auto;
        padding: 100px 5%;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 80px;
    }

    .detail-item h4 {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 25px;
        color: #888;
        border-bottom: 1px solid var(--border);
        padding-bottom: 10px;
    }

    .detail-item p {
        font-size: 1.1rem;
        color: var(--dark);
    }

    .inclusion-list {
        list-style: none;
        padding: 0;
    }

    .inclusion-list li {
        font-family: 'Baskervvillie', serif;
        font-size: 1.3rem;
        margin-bottom: 15px;
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .inclusion-list li i {
        color: var(--accent);
        margin-top: 8px;
        font-size: 1rem;
    }

    /* --- 4. GALLERY --- */
    .gallery-section { padding-bottom: 100px; background: #fff; position: relative; }
    .slider-container { position: relative; padding: 0 5%; display: flex; align-items: center; }
    .slider-track { display: flex; gap: 25px; overflow-x: hidden; scroll-behavior: smooth; width: 100%; }
    .slider-item { flex: 0 0 calc(75% - 25px); height: 65vh; }
    .slider-item img { width: 100%; height: 100%; object-fit: cover; }
    .slider-nav {
        position: absolute; top: 50%; width: 100%; left: 0; display: flex;
        justify-content: space-between; padding: 0 2%; pointer-events: none;
        transform: translateY(-50%); z-index: 10;
    }
    .slide-arrow {
        width: 50px; height: 50px; background: rgba(255,255,255,0.9);
        border: none; cursor: pointer; pointer-events: auto; display: flex;
        align-items: center; justify-content: center; transition: 0.3s;
    }

    /* --- 5. TERMS --- */
    .terms-section {
        background: var(--soft-bg);
        padding: 80px 5%;
    }

    .terms-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .terms-container h5 {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 30px;
        text-align: center;
    }

    .terms-container ul {
        list-style: none;
    }

    .terms-container li {
        font-size: 0.85rem;
        color: #777;
        margin-bottom: 12px;
        padding-left: 20px;
        position: relative;
    }

    .terms-container li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: var(--accent);
    }

    /* --- 6. FINAL CTA --- */
    .final-cta {
        padding: 120px 5%;
        text-align: center;
    }

    @media (max-width: 900px) {
        .details-grid { grid-template-columns: 1fr; gap: 40px; }
        .slider-item { flex: 0 0 90%; }
    }
</style>

<section class="hero-banner">
    <video autoplay muted loop playsinline poster="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1920">
        <source src="https://player.vimeo.com/external/370331493.sd.mp4?s=34ca7b69324734893708557343c1624b4249a5e4&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
    </video>
    <div class="hero-overlay">
        <span>Exclusive Offers</span>
        <h1>Lunar Prosperity Retreat</h1>
    </div>
</section>

<section class="intro-block">
    <div class="intro-content">
        <p>Welcome the season of new beginnings with a Lunar New Year stay designed for meaningful moments in the heart of Kuala Lumpur. Enjoy a festive retreat where comfort, thoughtful details and warm hospitality come together — ideal for celebrating with loved ones or unwinding between gatherings.</p>
        <a href="#" class="btn-gold">Reserve Your Retreat</a>
    </div>
</section>

<section class="details-grid">
    <div class="detail-item">
        <h4>Validity</h4>
        <p><strong>Booking Period:</strong><br>12 January – 3 March 2026</p>
        <br>
        <p><strong>Stay Period:</strong><br>27 January – 3 March 2026</p>
    </div>
    <div class="detail-item">
        <h4>The Experience Includes</h4>
        <ul class="inclusion-list">
            <li><i class="fa-solid fa-mug-saucer"></i> Daily buffet breakfast for two at Nipah</li>
            <li><i class="fa-solid fa-utensils"></i> RM200 F&B credit per room per night, redeemable at Golden Phoenix pop-up restaurant</li>
            <li><i class="fa-solid fa-sparkles"></i> Exclusive access to our Lunar New Year festive programming</li>
        </ul>
    </div>
</section>

<section class="gallery-section">
    <div class="slider-container">
        <div class="slider-nav">
            <button class="slide-arrow" onclick="scrollGallery(-1)"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="slide-arrow" onclick="scrollGallery(1)"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="slider-track" id="gallery-track">
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=1200" alt="Suite"></div>
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=1200" alt="Dining"></div>
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1200" alt="View"></div>
        </div>
    </div>
</section>

<section class="terms-section">
    <div class="terms-container">
        <h5>Terms & Conditions</h5>
        <ul>
            <li>A minimum stay of two nights is required to enjoy this offer.</li>
            <li>Full prepayment is required upon booking and is strictly non-refundable.</li>
            <li>Blackout dates apply and offer is subject to room availability.</li>
            <li>RM200 dining credit is redeemable exclusively at Golden Phoenix pop-up restaurant during the stay.</li>
            <li>Under the Tourism Tax Act 2017, a charge of RM10 per room per night will be levied on tourists and non-resident guests. Malaysian citizens and Permanent Residents are exempt upon presenting valid identification.</li>
        </ul>
    </div>
</section>

<section class="final-cta">
    <h2 style="font-family: 'Baskervvillie', serif; font-size: 2rem; font-weight: 400; margin-bottom: 30px;">Savour the Lunar New Year</h2>
    <a href="#" class="btn-gold">Book This Offer</a>
</section>

<script>
    function scrollGallery(direction) {
        const track = document.getElementById('gallery-track');
        track.scrollBy({ left: track.offsetWidth * 0.75 * direction, behavior: 'smooth' });
    }
</script>

<?php include 'global/footer.html'; ?>