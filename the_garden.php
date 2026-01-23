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

    /* --- 2. INTRO SECTION --- */
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

    .btn-cta {
        display: inline-block;
        padding: 16px 50px;
        background: #fff;
        color: #000;
        text-decoration: none;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 3px;
        text-transform: uppercase;
        transition: 0.3s;
    }

    .btn-cta:hover { background: var(--accent); color: #fff; }

    /* --- 3. GALLERY --- */
    .gallery-section { padding: 100px 0; background: #fff; position: relative; }
    .gallery-header { text-align: center; margin-bottom: 50px; }
    .gallery-header h2 { font-size: 11px; letter-spacing: 5px; text-transform: uppercase; color: #999; }
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
        width: 50px; height: 50px; background: rgba(255, 255, 255, 0.9);
        border: none; cursor: pointer; pointer-events: auto; display: flex;
        align-items: center; justify-content: center; transition: 0.3s;
    }
    .slide-arrow:hover { background: #000; color: #fff; }

    /* --- 4. DATA & FEATURES GRID --- */
    .details-grid {
        max-width: 1200px; margin: 0 auto; padding: 80px 5%;
        display: grid; grid-template-columns: repeat(3, 1fr); gap: 60px 40px;
    }
    .detail-item { border-top: 1px solid var(--border); padding-top: 25px; }
    .detail-item h4 { font-size: 11px; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 20px; color: #000; }
    .detail-item p, .detail-item li { font-size: 0.9rem; color: #666; margin-bottom: 8px; }
    .detail-item ul { list-style: none; }
    .detail-item ul li::before { content: "— "; color: var(--accent); }

    .pdf-link { color: var(--dark); font-weight: 600; text-decoration: none; border-bottom: 1px solid var(--accent); }

    /* --- 5. FAQ SECTION --- */
    .faq-section { background: var(--soft-bg); padding: 100px 5%; }
    .faq-container { max-width: 800px; margin: 0 auto; }
    .faq-header { text-align: center; margin-bottom: 60px; }
    .faq-header h2 { font-family: 'Baskervvillie', serif; font-size: 2.2rem; font-weight: 400; }
    .faq-item { background: #fff; margin-bottom: 15px; border: 1px solid var(--border); }
    .faq-question { 
        padding: 20px 25px; cursor: pointer; display: flex; 
        justify-content: space-between; align-items: center; font-weight: 600; font-size: 0.9rem;
    }
    .faq-answer { padding: 0 25px 25px; display: none; color: #666; font-size: 0.9rem; line-height: 1.7; }

    /* --- 6. ENQUIRY FORM --- */
    .enquiry-section { padding: 120px 5%; text-align: center; }
    .enquiry-container { max-width: 700px; margin: 0 auto; }
    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; text-align: left; }
    .form-group { margin-bottom: 20px; }
    .form-group.full { grid-column: span 2; }
    .form-group label { display: block; font-size: 10px; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 8px; }
    .form-group input, .form-group textarea {
        width: 100%; padding: 15px; border: 1px solid var(--border); font-family: inherit; font-size: 0.9rem;
    }
    .form-group input:focus { outline: 1px solid var(--accent); }

    @media (max-width: 900px) {
        .details-grid, .form-grid { grid-template-columns: 1fr; }
        .form-group.full { grid-column: span 1; }
        .slider-item { flex: 0 0 90%; }
    }
</style>

<section class="hero-banner">
    <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?auto=format&fit=crop&w=1920" alt="Garden Ballroom">
    <div class="hero-overlay">
        <h1>The Garden</h1>
    </div>
</section>

<section class="intro-block">
    <div class="intro-content">
        <p>A breathtaking fusion of natural beauty and architectural grandeur. With floor-to-ceiling glass walls overlooking our curated estate, the Garden Ballroom offers an ethereal backdrop for life's most significant celebrations.</p>
        <a href="#enquiry" class="btn-cta">Inquire Now</a>
    </div>
</section>

<section class="gallery-section">
    <div class="gallery-header"><h2>Event Perspectives</h2></div>
    <div class="slider-container">
        <div class="slider-nav">
            <button class="slide-arrow" onclick="scrollGallery(-1)"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="slide-arrow" onclick="scrollGallery(1)"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="slider-track" id="gallery-track">
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&w=1200" alt="Banquet Setup"></div>
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=1200" alt="Wedding Detail"></div>
            <div class="slider-item"><img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1200" alt="Outdoor View"></div>
        </div>
    </div>
</section>

<section class="details-grid">
    <div class="detail-item">
        <h4>Capacity</h4>
        <ul>
            <li>Round Table Banquet: 450 Guests</li>
            <li>Theatre Style: 600 Guests</li>
            <li>Cocktail Reception: 700 Guests</li>
        </ul>
    </div>
    <div class="detail-item">
        <h4>Key Features</h4>
        <p>Built-in 4K projection, customizable LED cove lighting, private bridal suite, and climate-controlled terrace access.</p>
    </div>
    <div class="detail-item">
        <h4>Documentation</h4>
        <p>View our technical specifications and spatial layouts.</p>
        <a href="floorplan.pdf" target="_blank" class="pdf-link"><i class="fa-solid fa-file-pdf"></i> Download Floor Plan</a>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <div class="faq-header"><h2>Frequently Asked Questions</h2></div>
        
        <div class="faq-item">
            <div class="faq-question">What is the minimum guest requirement? <i class="fa-solid fa-plus"></i></div>
            <div class="faq-answer">Our weekend banquet packages typically start at a minimum of 250 guests, while weekday events offer more flexibility.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Are external caterers permitted? <i class="fa-solid fa-plus"></i></div>
            <div class="faq-answer">To maintain our high culinary standards, all catering is managed by our award-winning in-house team. Specialty dietary requirements can be accommodated.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Is there on-site parking for guests? <i class="fa-solid fa-plus"></i></div>
            <div class="faq-answer">Yes, we provide complimentary basement parking and professional valet services for all ballroom events.</div>
        </div>
    </div>
</section>

<section class="enquiry-section" id="enquiry">
    <div class="enquiry-container">
        <h2 style="font-family: 'Baskervvillie', serif; font-size: 2.5rem; font-weight: 400; margin-bottom: 20px;">Event Enquiry</h2>
        <p style="color: #666; margin-bottom: 50px;">Allow our dedicated event specialists to bring your vision to life.</p>
        
        <form class="form-grid">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" placeholder="email@example.com">
            </div>
            <div class="form-group">
                <label>Event Date</label>
                <input type="date">
            </div>
            <div class="form-group">
                <label>Expected Guests</label>
                <input type="number" placeholder="0">
            </div>
            <div class="form-group full">
                <label>Tell us about your event</label>
                <textarea rows="5" placeholder="Your requirements..."></textarea>
            </div>
            <div class="form-group full">
                <button type="submit" class="btn-cta" style="width: 100%; cursor: pointer;">Send Enquiry</button>
            </div>
        </form>
    </div>
</section>

<script>
    function scrollGallery(direction) {
        const track = document.getElementById('gallery-track');
        track.scrollBy({ left: track.offsetWidth * 0.75 * direction, behavior: 'smooth' });
    }

    // FAQ Toggle Logic
    document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.nextElementSibling;
            const icon = item.querySelector('i');
            const isOpen = answer.style.display === 'block';
            
            document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');
            document.querySelectorAll('.faq-question i').forEach(i => i.className = 'fa-solid fa-plus');

            if (!isOpen) {
                answer.style.display = 'block';
                icon.className = 'fa-solid fa-minus';
            }
        });
    });
</script>

<?php include 'global/footer.html'; ?>