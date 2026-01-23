<?php include 'global/static_header.php'; ?>

<link href="https://fonts.googleapis.com/css2?family=Baskervvillie&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    :root {
        --accent: #c9a961;
        --dark: #1a1a1a;
        --soft-bg: #fdfdfd;
        --border: #e0e0e0;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #fff;
        color: var(--dark);
        line-height: 1.7;
    }

    /* --- 1. HERO BANNER --- */
.hero-banner {
    position: relative;
    width: 100%;
    height: 100vh; /* Adjust height as needed */
    overflow: hidden;
    background: #000; /* Fallback color */
}

.hero-video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
    object-fit: cover; /* Ensures video fills the container */
    z-index: 1;
}

.hero-overlay {
    position: relative;
    z-index: 2; /* Ensures text stays above the video */
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.3); /* Optional: darkens video to make text pop */
    color: #fff;
    text-align: center;
}

    .hero-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    .hero-overlay h1 {
        font-family: 'Baskervvillie', serif;
        font-size: clamp(2.5rem, 5vw, 4rem);
        text-transform: uppercase;
        letter-spacing: 4px;
        font-weight: 400;
    }

    /* --- 2. CITY NEWS / EXPERIENCE GRID --- */
    .experience-section {
        max-width: 1300px;
        margin: 0 auto;
        padding: 80px 5%;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-header h2 {
        font-family: 'Baskervvillie', serif;
        font-size: 2.2rem;
        font-weight: 400;
        margin-bottom: 15px;
    }

    .experience-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 40px;
    }

    .exp-card {
        text-decoration: none;
        color: inherit;
        transition: transform 0.3s ease;
        display: none; /* Controlled by JS Pagination */
    }

    .exp-image {
        width: 100%;
        aspect-ratio: 4/5;
        overflow: hidden;
        margin-bottom: 20px;
        background: #eee;
    }

    .exp-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .exp-card:hover .exp-image img {
        transform: scale(1.05);
    }

    .exp-tag {
        font-size: 10px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--accent);
        font-weight: 600;
        margin-bottom: 10px;
        display: block;
    }

    .exp-card h3 {
        font-family: 'Baskervvillie', serif;
        font-size: 1.4rem;
        font-weight: 400;
        line-height: 1.3;
    }

    /* --- 3. PAGINATION --- */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 80px;
        gap: 15px;
    }

    .page-btn {
        width: 40px;
        height: 40px;
        border: 1px solid var(--border);
        background: #fff;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        transition: 0.3s;
    }

    .page-btn.active {
        background: var(--dark);
        color: #fff;
        border-color: var(--dark);
    }

    .page-btn:hover:not(.active) {
        border-color: var(--dark);
    }

    /* --- 4. NEWSLETTER / FOOTER CTA --- */
    .city-guide-cta {
        background: var(--soft-bg);
        padding: 100px 5%;
        text-align: center;
        border-top: 1px solid var(--border);
    }

    @media (max-width: 768px) {
        .experience-grid { grid-template-columns: 1fr; }
    }
</style>

<section class="hero-banner">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="https://www.pexels.com/download/video/35060429/" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-overlay">
        <h1>City Experiences</h1>
    </div>
</section>

<section class="experience-section">
    <div class="section-header">
        <h2>Curated Kuala Lumpur</h2>
        <p style="color: #666; font-weight: 300;">Discover the rhythm of the city through our eyes.</p>
    </div>

    <div class="experience-grid" id="experience-grid">
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Culture</span>
            <h3>Batu Caves: A Divine Ascent</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Architecture</span>
            <h3>Petronas Twin Towers at Twilight</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1599344422204-748956897263?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Gastronomy</span>
            <h3>Street Food Secrets of Jalan Alor</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1626082895617-2c6de3476af7?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Heritage</span>
            <h3>Merdeka Square: Colonial Echoes</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1599344422204-748956897263?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Nature</span>
            <h3>KL Forest Eco Park Canopy Walk</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1563292325-081079bc7953?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Lifestyle</span>
            <h3>High Tea at Bukit Bintang</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1558227691-41ea78d1f631?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Art</span>
            <h3>Islamic Arts Museum Galleries</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Wellness</span>
            <h3>Morning Tai Chi at Perdana Botanical Garden</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1596422846543-75c6fc18a5cf?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Nightlife</span>
            <h3>Rooftop Perspectives from Menara KL</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Shopping</span>
            <h3>The Luxury Boutiques of Pavilion KL</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1599344422204-748956897263?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Culture</span>
            <h3>Thean Hou Temple: Red Lanterns</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1563292325-081079bc7953?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Gastronomy</span>
            <h3>Nasi Lemak Trails in Kampung Baru</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1626082895617-2c6de3476af7?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Heritage</span>
            <h3>Central Market Art Deco Finds</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1558227691-41ea78d1f631?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Family</span>
            <h3>Aquaria KLCC Deep Sea Walk</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Nature</span>
            <h3>Bird Park Sanctuary Stroll</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Lifestyle</span>
            <h3>Chinatown: Petaling Street Vibes</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1599344422204-748956897263?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Architecture</span>
            <h3>National Mosque Geometry</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1596422846543-75c6fc18a5cf?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Art</span>
            <h3>National Visual Arts Gallery</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1563292325-081079bc7953?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Gastronomy</span>
            <h3>Sunday Brunch at Troika Sky Dining</h3>
        </a>
        <a href="#" class="exp-card">
            <div class="exp-image"><img src="https://images.unsplash.com/photo-1558227691-41ea78d1f631?auto=format&fit=crop&w=800" alt=""></div>
            <span class="exp-tag">Culture</span>
            <h3>Brickfields Little India Colors</h3>
        </a>
    </div>

    <div class="pagination" id="pagination">
        </div>
</section>

<section class="city-guide-cta">
    <h2 style="font-family: 'Baskervvillie', serif; font-size: 2rem; font-weight: 400; margin-bottom: 20px;">The Urban Concierge</h2>
    <p style="color: #666; max-width: 600px; margin: 0 auto 40px;">Require a personalized itinerary or private guide? Our concierge is at your service.</p>
    <a href="#" style="text-decoration: none; color: var(--dark); border-bottom: 1px solid var(--accent); font-weight: 600; font-size: 11px; letter-spacing: 2px; text-transform: uppercase;">Contact Concierge</a>
</section>

<script>
    const cardsPerPage = 6;
    const cards = document.querySelectorAll('.exp-card');
    const paginationContainer = document.getElementById('pagination');
    const totalPages = Math.ceil(cards.length / cardsPerPage);

    function showPage(page) {
        const start = (page - 1) * cardsPerPage;
        const end = start + cardsPerPage;

        cards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        updatePaginationUI(page);
        window.scrollTo({ top: document.querySelector('.experience-section').offsetTop - 50, behavior: 'smooth' });
    }

    function updatePaginationUI(currentPage) {
        paginationContainer.innerHTML = '';
        
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.innerText = i;
            btn.className = `page-btn ${i === currentPage ? 'active' : ''}`;
            btn.onclick = () => showPage(i);
            paginationContainer.appendChild(btn);
        }
    }

    // Initial load
    document.addEventListener('DOMContentLoaded', () => showPage(1));
</script>

<?php include 'global/footer.html'; ?>