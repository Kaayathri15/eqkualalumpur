<!DOCTYPE html>
<html lang="en">
<head>
  <title>Luxury Dining & Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Open+Sans:400,600,700');

    * { box-sizing: border-box; }
    body { margin: 0; padding: 0; background-color: #f4f4f4; font-family: 'Open Sans', sans-serif; overflow-x: hidden; }

    /* --- 1. VIDEO SECTION --- */
    .hero-video {
      position: relative;
      height: 100vh;
      width: 100%;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero-video video {
      position: absolute;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      transform: translate(-50%, -50%);
      z-index: -1;
      object-fit: cover;
    }

    .video-overlay {
      position: absolute;
      top: 0; left: 0; width: 100%; height: 100%;
      background: rgba(0,0,0,0.4);
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 1;
      text-align: center;
      color: white;
    }

    .hero-content h1 {
      font-family: 'Playfair Display', serif;
      font-size: 80px;
      margin: 0;
      text-transform: uppercase;
      letter-spacing: 10px;
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
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
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

    .active .carousel-item__image { transform: scale(1); }

    .carousel-item__title { font-family: 'Playfair Display', serif; font-size: 40px; margin-bottom: 20px; }
    
    .carousel__nav {
      position: absolute;
      bottom: 20px;
      right: 20px;
      z-index: 10;
      background: #fff;
      display: flex;
    }

    .carousel__arrow { padding: 15px; cursor: pointer; border: 1px solid #eee; }

    /* --- 3. OFFERS SECTION --- */
    .offers-section {
      padding: 100px 10%;
      background: #eaeaea;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
      text-align: center;
    }

    .offer-card {
      background: white;
      padding: 40px;
      transition: 0.3s;
    }

    .offer-card:hover { transform: translateY(-10px); }

    .offer-card h3 { font-family: 'Playfair Display', serif; font-size: 24px; }
    
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
  </style>
</head>
<body>

  <section class="hero-video">
    <div class="video-overlay"></div>
    <video autoplay muted loop playsinline>
      <source src="https://assets.mixkit.co/videos/preview/mixkit-chef-preparing-a-gourmet-dish-34531-large.mp4" type="video/mp4">
    </video>
    <div class="hero-content">
      <h1>Dining</h1>
      <p>EXPERIENCE THE ART OF TASTE</p>
    </div>
  </section>

  <section class="carousel-container">
    <div class="carousel">
      <div class="carousel__nav">
        <span id="moveLeft" class="carousel__arrow"><b>&lt;</b></span>
        <span id="moveRight" class="carousel__arrow"><b>&gt;</b></span>
      </div>

      <div class="carousel-item active">
        <div class="carousel-item__info">
          <h1 class="carousel-item__title">The Terrace</h1>
          <p>Enjoy sunset views with our signature cocktails and seasonal appetizers.</p>
          <a href="#" class="btn-outline">View Menu</a>
        </div>
        <div class="carousel-item__image" style="background-image: url('https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
      </div>

      <div class="carousel-item">
        <div class="carousel-item__info">
          <h1 class="carousel-item__title">Private Dining</h1>
          <p>An intimate space for your most important celebrations and gatherings.</p>
          <a href="#" class="btn-outline">Book Private</a>
        </div>
        <div class="carousel-item__image" style="background-image: url('https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')"></div>
      </div>
    </div>
  </section>

  <section class="offers-section">
    <div class="offer-card">
      <h3>The Chef</h3>
      <p>Meet Chef Julian, bringing 20 years of Michelin-star experience to your plate.</p>
      <a href="#" class="btn-outline">Our Story</a>
    </div>
    <div class="offer-card">
      <h3>Seasonal Offer</h3>
      <p>3-course tasting menu available every Tuesday through Thursday.</p>
      <a href="#" class="btn-outline">Explore Offers</a>
    </div>
    <div class="offer-card">
      <h3>Wine Cellar</h3>
      <p>Explore over 500 labels curated by our resident sommelier.</p>
      <a href="#" class="btn-outline">View List</a>
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
</body>
</html>