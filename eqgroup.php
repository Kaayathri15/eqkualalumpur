<?php
include 'global/eq_header.php';
?>
<style>
  /* Animation Base Styles */
  .reveal {
    opacity: 0;
    transform: translateY(50px);
    transition: all 1.0s cubic-bezier(0.22, 1, 0.36, 1);
    transition-delay: 0.2s;
  }

  .reveal.active {
    opacity: 1;
    transform: translateY(0);
  }

  .commonH2 {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 300;
    color: var(--text-dark);
    margin: 15px 0;
  }

  .commonH2italic {
    font-style: italic;
  }

  .commonP {
    max-width: 600px;
    margin: 0 auto;
    font-size: 1.05rem;
    font-family: 'Baskervillie';
    color: var(--text-gray);
    line-height: 1.8;
  }

  .subtitleTitle {
    font-family: 'Montserrat', sans-serif;
    font-size: 11px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: var(--clay);
    display: block;
    margin-bottom: 10px;
  }

  /* Specific Staggering for Content */
  .content-wrapper>* {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.8s ease-out;
  }

  .active .content-wrapper>* {
    opacity: 1;
    transform: translateY(0);
  }

  /* Stagger delay for children elements */
  .active .content-wrapper .eyebrow {
    transition-delay: 0.3s;
  }

  .active .content-wrapper .main-title {
    transition-delay: 0.5s;
  }

  .active .content-wrapper .subtitle {
    transition-delay: 0.7s;
  }

  .active .content-wrapper .cta-wrapper {
    transition-delay: 0.9s;
  }

  /* Image slide-in effect */
  .image-section img {
    clip-path: inset(0 0 100% 0);
    transition: clip-path 1.2s cubic-bezier(0.77, 0, 0.175, 1);
  }

  .active .image-section img {
    clip-path: inset(0 0 0% 0);
  }

  /* FIRST SECTION */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    overflow-x: hidden;
  }

  /* Main Hero Container */
  .hero-container {
    position: relative;
    height: 100vh;
    overflow: hidden;
    opacity: 0;
    animation: reveal 1s ease-out forwards;
  }

  @keyframes reveal {
    to {
      opacity: 1;
    }
  }

  /* Background Image with Overlay */
  .hero-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg,
        rgba(0, 0, 0, 0.7) 0%,
        rgba(0, 0, 0, 0.5) 50%,
        rgba(0, 0, 0, 0.6) 100%);
    z-index: 1;
  }

  .image-section {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: slowZoom 20s ease-in-out infinite alternate;
  }

  @keyframes slowZoom {
    from {
      transform: scale(1);
    }

    to {
      transform: scale(1.1);
    }
  }

  /* Content Section */
  .content-section {
    position: relative;
    z-index: 2;
    padding: 120px 80px;
    max-width: 700px;
    animation: fadeInUp 1s ease-out 0.3s both;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(40px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .content-wrapper {
    color: #fff;
  }

  .eyebrow {
    font-size: 13px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #DAC2B6;
    opacity: 0.95;
    margin-bottom: 24px;
    display: inline-block;
    font-weight: 600;
    border-bottom: 2px solid #DAC2B6;
    padding-bottom: 8px;
  }

  .main-title {
    font-size: clamp(42px, 5vw, 72px);
    font-weight: 300;
    line-height: 1.1;
    margin-bottom: 32px;
    letter-spacing: -1px;
    color: #fff;
    text-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
  }

  .subtitle {
    font-size: 18px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 48px;
    max-width: 500px;
    font-weight: 300;
    text-shadow: 0 1px 10px rgba(0, 0, 0, 0.2);
  }

  .cta-wrapper {
    display: flex;
    gap: 20px;
    align-items: center;
  }

  .btn-outline {
    display: inline-block;
    background: #DAC2B6;
    color: #712D3D;
    padding: 18px 48px;
    text-decoration: none;
    font-size: 14px;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 700;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    border: none;
    box-shadow: 0 10px 40px rgba(113, 45, 61, 0.3);
  }

  .btn-outline::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s;
  }

  .btn-outline:hover::before {
    left: 100%;
  }

  .btn-outline:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 50px rgba(113, 45, 61, 0.4);
    background: #996A57;
    color: #fff;
  }

  /* Award Badge */
  .award-badge {
    position: absolute;
    bottom: 80px;
    right: 80px;
    width: 250px;
    height: 250px;
    /* background: rgba(219, 194, 182, 0.98); */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    /* box-shadow: 0 30px 80px rgba(113, 45, 61, 0.5); */
    animation: slideInScale 1s ease-out 0.8s both;
    padding: 20px;
    z-index: 3;
    /* border: 3px solid rgba(154, 107, 88, 0.5); */
  }

  @keyframes slideInScale {
    from {
      transform: scale(0) rotate(-180deg);
      opacity: 0;
    }

    to {
      transform: scale(1) rotate(0);
      opacity: 1;
    }
  }

  .award-badge:hover {
    animation: float 3s ease-in-out infinite;
  }

  @keyframes float {

    0%,
    100% {
      transform: translateY(0) rotate(0deg);
    }

    50% {
      transform: translateY(-15px) rotate(5deg);
    }
  }

  .award-logo {
    width: 100%;
    height: 100%;
    object-fit: contain;
    filter: drop-shadow(0 2px 8px rgba(113, 45, 61, 0.3));
  }

  /* Decorative Elements */
  .decorative-line {
    position: absolute;
    bottom: 0;
    left: 80px;
    width: 100px;
    height: 3px;
    background: linear-gradient(90deg, #DAC2B6, transparent);
    z-index: 2;
    animation: expandWidth 1.5s ease-out 0.5s both;
  }

  @keyframes expandWidth {
    from {
      width: 0;
    }

    to {
      width: 100px;
    }
  }

  /* Responsive Design */
  @media (max-width: 1024px) {
    .content-section {
      padding: 80px 40px;
    }

    .award-badge {
      bottom: 40px;
      right: 40px;
      width: 140px;
      height: 140px;
    }

    .decorative-line {
      left: 40px;
    }
  }

  @media (max-width: 640px) {
    .content-section {
      padding: 60px 24px;
    }

    .main-title {
      font-size: 36px;
    }

    .subtitle {
      font-size: 16px;
    }

    .award-badge {
      width: 120px;
      height: 120px;
      bottom: 30px;
      right: 24px;
    }

    .btn-outline {
      padding: 16px 36px;
      font-size: 13px;
    }

    .decorative-line {
      left: 24px;
      width: 60px;
    }
  }

  /* Additional Visual Enhancement */
  @keyframes shimmer {
    0% {
      background-position: -100% 0;
    }

    100% {
      background-position: 200% 0;
    }
  }

  .content-wrapper::before {
    content: '';
    position: absolute;
    top: -20px;
    left: -20px;
    right: -20px;
    bottom: -20px;
    background: linear-gradient(120deg,
        transparent 0%,
        transparent 40%,
        rgba(219, 194, 182, 0.1) 50%,
        transparent 60%,
        transparent 100%);
    background-size: 200% 100%;
    animation: shimmer 8s ease-in-out infinite;
    pointer-events: none;
    border-radius: 20px;
  }

  /* END OF FIRST SECTION */


  /* SECOND SECTION - DISCOVER HAVENS */
  /* --- SECTION: OUR HAVENS (EDITORIAL WHITE THEME) --- */
  /* --- SECTION: OUR HAVENS (WHITE THEME) --- */


  :root {
    --bg: #ffffff;
    --clay: #996A57;
    --text-dark: #1a1a1a;
    --text-gray: #666;
    --border-light: #eee;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Playfair Display', serif;
    background: var(--bg);
    overflow-x: hidden;
  }

  /* --- SECTION: OUR HAVENS --- */
  .havens-spotlight {
    background: var(--bg);
    padding: 100px 0;
    position: relative;
    overflow: hidden;
  }

  .section-intro {
    text-align: center;
    margin-bottom: 80px;
    padding: 0 20px;
  }

  .section-intro span {
    font-family: 'Montserrat', sans-serif;
    font-size: 11px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: var(--clay);
    display: block;
    margin-bottom: 10px;
  }

  .section-intro h2 {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 300;
    color: var(--text-dark);
    margin: 15px 0;
  }

  .section-intro h2 i {
    font-style: italic;
  }

  .section-intro p {
    max-width: 600px;
    margin: 0 auto;
    font-size: 1.05rem;
    font-family: 'Baskervillie';
    color: var(--text-gray);
    line-height: 1.8;
  }

  .spotlight-viewport {
    width: 100%;
    overflow: hidden;
    position: relative;
    padding: 0 20px;
  }

  .spotlight-track {
    display: flex;
    align-items: flex-start;
    gap: 40px;
    transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    padding: 60px 0;
  }

  .spotlight-card {
    position: relative;
    flex: 0 0 250px;
    cursor: pointer;
    transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    user-select: none;
  }

  /* Card Visual Part */
  .card-visual-wrapper {
    width: 100%;
    height: 450px;
    overflow: hidden;
    position: relative;
    border: 1px solid var(--border-light);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
  }

  .card-visual-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(100%);
    transition: all 1s ease;
    opacity: 0.7;
  }

  /* Card Content (Overlapping on Card) */
  .card-content-below {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(240, 240, 240, 0.95);
    padding: 30px;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.5s ease;
    pointer-events: none;
  }

  .card-content-below h3 {
    font-size: 1.8rem;
    font-weight: 400;
    color: var(--text-dark);
    margin-bottom: 10px;
  }

  .card-description {
    opacity: 1;
  }

  .card-description p {
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    color: #555;
    line-height: 1.6;
  }

  /* ACTIVE STATE */
  .spotlight-card.active {
    flex: 0 0 300px;
  }

  /* Default (inactive cards) */
  .spotlight-card .card-visual-wrapper {
    height: 320px;
    transition: height 0.8s cubic-bezier(0.23, 1, 0.32, 1);
  }

  /* Active card becomes taller */
  .spotlight-card.active .card-visual-wrapper {
    height: 520px;
  }

  /* Optional: lift active card slightly for drama */
  .spotlight-card.active {
    transform: translateY(-100px);
  }

  .spotlight-card.active .card-visual-wrapper img {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.05);
  }

  .spotlight-card.active .card-content-below {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
  }

  /* Controls */
  .spotlight-controls {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 40px;
    pointer-events: none;
    z-index: 10;
  }

  .nav-arrow {
    background: white;
    border: 1px solid var(--text-dark);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: auto;
  }

  .nav-arrow:hover {
    background: var(--text-dark);
    color: white;
    transform: scale(1.1);
  }

  .nav-arrow:disabled {
    opacity: 0.3;
    cursor: not-allowed;
  }

  .nav-arrow:disabled:hover {
    background: white;
    color: var(--text-dark);
    transform: scale(1);
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .havens-spotlight {
      padding: 60px 0;
    }

    .section-intro {
      margin-bottom: 50px;
    }

    .spotlight-card {
      flex: 0 0 250px;
    }

    .spotlight-card.active {
      flex: 0 0 280px;
    }

    .card-visual-wrapper {
      height: 350px;
    }

    .spotlight-track {
      gap: 20px;
    }

    .spotlight-controls {
      padding: 0 20px;
    }

    .nav-arrow {
      width: 40px;
      height: 40px;
      font-size: 16px;
    }

    .card-content-below {
      padding: 20px;
    }

    .card-content-below h3 {
      font-size: 1.4rem;
    }
  }

  /* END OF SECTION */

  /** Curates */
  :root {
    --gold: #c9a961;
    --dark: #0f0f0f;
    --white: #ffffff;
    --text-muted: #6b6b6b;
  }

  .eq-curates-section {
    padding: 100px 0;
    background: var(--white);
    font-family: 'Playfair Display', serif;
  }

  /* Scroll Animation Base */
  .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .reveal.active {
    opacity: 1;
    transform: translateY(0);
  }

  .section-header {
    text-align: center;
    margin-bottom: 50px;
  }

  .curates-main-title {
    font-size: 2.5rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 10px;
  }

  .curates-slider-wrapper {
    position: relative;
    max-width: 1500px;
    margin: 0 auto;
    /* Use vh instead of px */
    height: 80vh;
    min-height: 400px;
    /* Prevents it from getting too small on mobile */
    max-height: 800px;
    /* Prevents it from getting too huge on 4k monitors */
    overflow: hidden;
  }

  .curates-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    visibility: hidden;
    transition: all 0.8s ease-in-out;
    display: flex;
    align-items: center;
  }

  .curates-slide.active {
    opacity: 1;
    visibility: visible;
  }

  .curates-slide-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* White Box Overlay */
  .curates-content-box {
    position: absolute;
    left: 60px;
    background: var(--white);
    padding: 50px;
    width: 420px;
    z-index: 10;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
    transform: translateX(-30px);
    opacity: 0;
    transition: all 1s ease-out 0.3s;
  }

  .curates-slide.active .curates-content-box {
    transform: translateX(0);
    opacity: 1;
  }

  .box-eyebrow {
    font-family: 'Montserrat', sans-serif;
    font-size: 11px;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--gold);
    display: block;
    margin-bottom: 15px;
  }

  .box-title {
    font-size: 2rem;
    margin-bottom: 15px;
    font-weight: 400;
  }

  .box-divider {
    width: 40px;
    height: 2px;
    background: var(--gold);
    margin-bottom: 20px;
  }

  .box-description {
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    line-height: 1.8;
    color: var(--text-muted);
    margin-bottom: 25px;
  }

  .box-cta {
    font-family: 'Montserrat', sans-serif;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--gold);
    text-decoration: none;
    font-weight: 600;
  }

  /* Navigation & Status */
  .curates-controls {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
    z-index: 15;
    pointer-events: none;
  }

  .curates-nav-btn {
    width: 50px;
    height: 50px;
    background: var(--white);
    border: none;
    cursor: pointer;
    pointer-events: auto;
    font-size: 24px;
    transition: 0.3s;
  }

  .curates-nav-btn:hover {
    background: var(--dark);
    color: white;
  }

  .curates-status {
    position: absolute;
    bottom: 20px;
    right: 40px;
    background: white;
    padding: 8px 15px;
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    letter-spacing: 2px;
    z-index: 15;
  }

  /* View All Button */
  .curates-view-all-container {
    text-align: center;
    margin-top: 60px;
  }

  .btn-view-all {
    display: inline-block;
    padding: 16px 45px;
    border: 1px solid var(--dark);
    color: var(--dark);
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    font-size: 11px;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 600;
    transition: 0.4s;
  }

  .btn-view-all:hover {
    background: var(--dark);
    color: white;
  }

  /* Mobile Styling */
  @media (max-width: 968px) {
    .curates-slider-wrapper {
      height: auto;
    }

    .curates-slide {
      position: relative;
      flex-direction: column;
      display: none;
      opacity: 1;
      visibility: visible;
    }

    .curates-slide.active {
      display: flex;
    }

    .curates-content-box {
      position: relative;
      left: 0;
      width: 100%;
      padding: 40px 20px;
      box-shadow: none;
      transform: none;
      opacity: 1;
    }

    .curates-slide-image {
      height: 350px;
    }
  }
.awards-section {
    padding: 120px 5%;
    background-color: #fff;
}

.awards-container {
    max-width: 1200px;
    margin: 0 auto;
}

.awards-header {
    text-align: center;
    margin-bottom: 80px;
}

.awards-header .eyebrow {
    font-family: 'Montserrat', sans-serif;
    font-size: 10px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #c9a961;
    display: block;
    margin-bottom: 15px;
}

.awards-header h2 {
    font-family: 'Baskerville', serif;
    font-size: 2.5rem;
    font-weight: 400;
    color: #1a1a1a;
}

/* Awards Grid */
.awards-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0; /* Using borders for separation */
    margin-bottom: 60px;
}

.award-item {
    padding: 40px 25px;
    text-align: center;
    border-right: 1px solid #eee;
    transition: background 0.4s ease;
}

.award-item:last-child {
    border-right: none;
}

.award-item:hover {
    background: #fdfdfd;
}

.award-year {
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    color: #999;
    display: block;
    margin-bottom: 20px;
}

.award-item h4 {
    font-family: 'Baskerville', serif;
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1.4;
}

.award-item p {
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    color: #666;
    line-height: 1.6;
    letter-spacing: 0.5px;
}

/* View All Button */
.awards-footer {
    text-align: center;
    margin-top: 40px;
}

.btn-view-all {
    display: inline-block;
    padding: 15px 45px;
    border: 1px solid #1a1a1a;
    color: #1a1a1a;
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    font-size: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
    transition: all 0.4s ease;
}

.btn-view-all:hover {
    background: #1a1a1a;
    color: #fff;
}

/* Responsive */
@media (max-width: 1024px) {
    .awards-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .award-item:nth-child(2) {
        border-right: none;
    }
    .award-item {
        border-bottom: 1px solid #eee;
    }
}

@media (max-width: 600px) {
    .awards-grid {
        grid-template-columns: 1fr;
    }
    .award-item {
        border-right: none;
    }
}
  /** end of this section */


  :root {
    --gold: #d4af37;
    --dark: #0a0a0a;
    --text-gray: #666;
  }

  body {
    margin: 0;
    font-family: 'Baskervillie', serif;
    background: #fff;
    overflow-x: hidden;
  }

 
      /* Fixed Logo Top-Left */
        .intro-logo {
            position: absolute;
            top: 40px;
            /* Distance from top */
            left: 40px;
            /* Distance from left */
            transform: none;
            /* Remove the centering translate */
            /* Smaller size for corner placement */
            width: 200px;
            z-index: 15;
            opacity: 1;
            transition: opacity 1.5s ease;
        }

  /** END */
</style>


<!-- VIDEO SECTION -->
<section class="intro-video">
  <video id="introVideo" autoplay muted playsinline loop>
    <source src="video/EQ 30 sec Short version.mp4" type="video/mp4" />
  </video>
  <div class="video-overlay"></div>

  <div class="intro-logo" id="mainLogo">
    <img  src="https://www.equatorial.com/wp-content/themes/eqgroup/img/logo.svg" alt="EQ Logo" />
  </div>

  <div class="intro-awards-center" id="centerAward">
    <img src="images/TL-WORLD_PM.png" alt="Travel + Leisure Award" />
  </div>

  <div class="intro-text">
    <div class="line" id="line1">#22 In The World By Travel</div>

  </div>
</section>
<!-- END OF SECTION -->


<!-- FIRST SECTION-INTRO -->
<main class="hero-container reveal">
  <!-- Background Image Section -->
  <div class="image-section">
    <img src="images/EQ_Pool_5395.jpg" alt="Luxury Hotel Experience">
  </div>

  <!-- Content Section -->
  <div class="content-section">
    <div class="content-wrapper">
      <span class="eyebrow">Excellence Defined</span>

      <h1 class="main-title">
        The Best Hotel in Malaysia
      </h1>

      <p class="subtitle">
        Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. Ex sapien vitae pellentesque sem placerat in id. Placerat in id cursus mi pretium tellus duis. Pretium tellus duis convallis tempus leo eu aenean.
      </p>

      <div class="cta-wrapper">
        <a href="#" class="btn-outline">Discover More</a>
      </div>
    </div>

    <!-- Decorative Line -->
    <div class="decorative-line"></div>
  </div>

  <!-- Award Badge Overlapping -->
  <div class="award-badge">
    <img src="images/TL-WORLD_PM.png" alt="Travel + Leisure Award" class="award-logo">
  </div>
</main>
<!-- END OF SECTION -->


<!-- SECOND SECTION - DISCOVER OUR HAVENS -->
<section class="havens-spotlight reveal">
  <div class="section-intro">
    <span>The Experience</span>
    <h2>Discover Our <i>Havens</i></h2>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. Ex sapien vitae pellentesque sem placerat in id. Placerat in id cursus mi pretium tellus duis. Pretium tellus duis convallis tempus leo eu aenean.</p>
  </div>

  <div class="spotlight-viewport">
    <div class="spotlight-track" id="spotlightTrack">

<?php
$pageData = [
    [
        'title' => 'Hotel Equatorial', 
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 
        'img' => 'https://lh3.googleusercontent.com/p/AF1QipOWIl-SMcJ5b3wp5RA-laTssfnKCQ5oJpBh3wjr=s680-w680-h510-rw', 
        'link' => 'accommodation.php'
    ],
    [
        'title' => 'Hotel Hoh Chin Minh', 
        'desc' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 
        'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/2e/0e/db/4d/hotel-facade-2024.jpg', 
        'link' => 'dining.php'
    ],
    [
        'title' => 'Hotel Penang', 
        'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.', 
        'img' => 'https://theedgemalaysia.com/_next/image?url=https%3A%2F%2Fassets.theedgemarkets.com%2FP14-Hotel-Equatorial-Penang-TEM1484_20230809142209_facebook.jpg&w=1080&q=75', 
        'link' => 'meeting.php'
    ],
   
];

// Call the function once for the entire list
renderLuxuryCarousel('mainGallery', $pageData);
?>
</section>

<!-- END OF THE SECTION -->
<!-- EQ CURATES -->
<section class="eq-curates-section reveal">
  <div class="section-header">
    <span class="subtitleTitle">EQ CURATES</span>
    <h2 class="commonH2">Exclusive <i class="commonH2italic">Offers</i></h2>
  </div>

<div class="curates-slider-wrapper">
  <div class="curates-slide active">
    <video 
      src="https://www.pexels.com/download/video/30325359/" 
      class="curates-slide-image" 
      autoplay 
      muted 
      loop 
      playsinline 
  >
    </video>
    
    <div class="curates-content-box">
      <span class="box-eyebrow">Staycation</span>
      <h2 class="box-title">LUNAR PROSPERITY RETREAT AT EQ
</h2>
      <div class="box-divider"></div>
      <p class="box-description">Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
      <a href="lunarcny.php" class="box-cta">Explore Offer &rsaquo;</a>
    </div>
  </div>
</div>

    <div class="curates-slide">
      <img src="https://images.unsplash.com/photo-1544124499-58912cbddaad?auto=format&fit=crop&w=1600" class="curates-slide-image" alt="Dining Offer">
      <div class="curates-content-box">
        <span class="box-eyebrow">Dining</span>
        <h2 class="box-title">Lorem ipsum dolor sit amet.</h2>
        <div class="box-divider"></div>
        <p class="box-description">Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
        <a href="#" class="box-cta">View Menus &rsaquo;</a>
      </div>
    </div>

    <div class="curates-slide">
      <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1600" class="curates-slide-image" alt="Wellness Offer">
      <div class="curates-content-box">
        <span class="box-eyebrow">Wellness</span>
        <h2 class="box-title">Lorem ipsum dolor sit amet.</h2>
        <div class="box-divider"></div>
        <p class="box-description">Lorem ipsum dolor sit amet consectetur adipiscing elit. Dolor sit amet consectetur adipiscing elit quisque faucibus.</p>
        <a href="#" class="box-cta">Discover Wellness &rsaquo;</a>
      </div>
    </div>

    <div class="curates-controls">
      <button class="curates-nav-btn" onclick="changeCurateSlide(-1)">&#8249;</button>
      <button class="curates-nav-btn" onclick="changeCurateSlide(1)">&#8250;</button>
    </div>

    <div class="curates-status">1 / 3</div>
  </div>

  <div class="curates-view-all-container">
    <a href="offers.php" class="btn-view-all">View All Offers</a>
  </div>
</section>

<section class="awards-section">
    <div class="awards-container">
        <div class="awards-header">
                <span class="subtitleTitle">Excellence Recognized</span>
              <h2 class="commonH2">Awards & <i class="commonH2italic">Accolades</i></h2>
        </div>

        <div class="awards-grid">
            <div class="award-item">
                <span class="award-year">2024</span>
                <h4>Travel + Leisure Luxury Awards</h4>
                <p>#1 Best City Hotel in Malaysia</p>
            </div>

            <div class="award-item">
                <span class="award-year">2023</span>
                <h4>Condé Nast Traveler</h4>
                <p>Readers' Choice Award: Top Hotels in Southeast Asia</p>
            </div>

            <div class="award-item">
                <span class="award-year">2023</span>
                <h4>Forbes Travel Guide</h4>
                <p>Five-Star Rating: The Highest Distinction</p>
            </div>

            <div class="award-item">
                <span class="award-year">2022</span>
                <h4>World Travel Awards</h4>
                <p>Malaysia's Leading Luxury Hotel</p>
            </div>
        </div>

        <div class="awards-footer">
            <a href="awards-full.php" class="btn-view-all">View All Accolades</a>
        </div>
    </div>
</section>

<?php include 'global/footer.html'; ?>
<script>
  document.addEventListener('DOMContentLoaded', () => {

    // 1. Intersection Observer Setup
    const revealOptions = {
      threshold: 0.15, // Trigger when 15% of the section is visible
      rootMargin: "0px 0px -50px 0px" // Slightly offset from the bottom
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Add the active class to trigger CSS transitions
          entry.target.classList.add('active');

          // Once it has animated, we can stop observing it
          observer.unobserve(entry.target);
        }
      });
    }, revealOptions);

    // 2. Select all sections with the 'reveal' class and start observing
    const sections = document.querySelectorAll('.reveal');
    sections.forEach(section => {
      revealObserver.observe(section);
    });

    // 3. Special handling for Video Section (Force fade in on load)
    const introVideo = document.querySelector('.intro-video');
    if (introVideo) {
      setTimeout(() => {
        introVideo.style.opacity = '1';
      }, 500);
    }
  });


  //discover our haven
  // DOM Elements
  const track = document.getElementById('spotlightTrack');
  const cards = document.querySelectorAll('.spotlight-card');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  let currentIndex = 2; // Default starting card (Wellness)
  let isInitialized = false;

  function updateGallery(index) {
    if (!track || cards.length === 0) return;

    // Keep index within bounds
    currentIndex = Math.max(0, Math.min(index, cards.length - 1));

    // Update active state
    cards.forEach((card, i) => {
      card.classList.toggle('active', i === currentIndex);
    });

    // Update button states
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex === cards.length - 1;

    // Wait for next frame to ensure dimensions are calculated
    requestAnimationFrame(() => {
      const activeCard = cards[currentIndex];

      // Safety check
      if (!activeCard) return;

      const viewportWidth = track.parentElement.offsetWidth;
      const cardLeft = activeCard.offsetLeft;
      const cardWidth = activeCard.offsetWidth;

      // Center the active card
      const offset = (viewportWidth / 2) - (cardLeft + cardWidth / 2);
      track.style.transform = `translateX(${offset}px)`;
    });
  }

  function initializeGallery() {
    if (isInitialized) return;

    // Wait for images to load and DOM to be fully ready
    const images = track.querySelectorAll('img');
    let loadedImages = 0;

    function checkAllLoaded() {
      loadedImages++;
      if (loadedImages === images.length) {
        // Small delay to ensure all layouts are calculated
        setTimeout(() => {
          updateGallery(currentIndex);
          isInitialized = true;
        }, 100);
      }
    }

    if (images.length === 0) {
      updateGallery(currentIndex);
      isInitialized = true;
      return;
    }

    images.forEach(img => {
      if (img.complete) {
        checkAllLoaded();
      } else {
        img.addEventListener('load', checkAllLoaded);
        img.addEventListener('error', checkAllLoaded); // Handle failed loads too
      }
    });
  }

  // Event Listeners
  nextBtn.addEventListener('click', () => {
    if (currentIndex < cards.length - 1) {
      updateGallery(currentIndex + 1);
    }
  });

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      updateGallery(currentIndex - 1);
    }
  });

  // Click on cards to activate
  cards.forEach((card, index) => {
    card.addEventListener('click', () => {
      updateGallery(index);
    });
  });

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') {
      prevBtn.click();
    } else if (e.key === 'ArrowRight') {
      nextBtn.click();
    }
  });

  // Handle resize with debounce
  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      updateGallery(currentIndex);
    }, 150);
  });

  // Initialize when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeGallery);
  } else {
    initializeGallery();
  }



  // 1. Slider Functionality
  let curateIdx = 0;
  const curateSlides = document.querySelectorAll('.curates-slide');
  const curateCounter = document.querySelector('.curates-status');

  function changeCurateSlide(direction) {
    // Hide current slide
    curateSlides[curateIdx].classList.remove('active');

    // Calculate next index
    curateIdx = (curateIdx + direction + curateSlides.length) % curateSlides.length;

    // Show new slide
    curateSlides[curateIdx].classList.add('active');

    // Update counter
    curateCounter.innerText = `${curateIdx + 1} / ${curateSlides.length}`;
  }

  // 2. Scroll Reveal Observer
  const curateObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        // Stop observing once animated
        curateObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15
  });

  // Start observing the section
  document.querySelectorAll('.reveal').forEach(section => {
    curateObserver.observe(section);
  });


  const introVideo = document.getElementById('introVideo');
  const mainLogo = document.getElementById('mainLogo');
  const centerAward = document.getElementById('centerAward');

  // Ensure video starts playing for the logic to kick in
  introVideo.addEventListener('play', () => {
    // 1. Logo appears immediately after video plays
    mainLogo.style.opacity = "1";
    mainLogo.style.visibility = "visible";
    mainLogo.style.transition = "opacity 1.5s ease";
  });

  // 2. Award timing logic based on video playback
  introVideo.addEventListener('timeupdate', () => {
    const time = introVideo.currentTime;

    // After 10 seconds: Appear
    if (time >= 10 && time < 20) {
      centerAward.style.opacity = "1";
      centerAward.style.visibility = "visible";
      centerAward.style.transition = "opacity 1.2s ease";
    }
    // After staying for 10 seconds (at 20s mark): Disappear
    else if (time >= 20 && time < 30) {
      centerAward.style.opacity = "0";
      centerAward.style.visibility = "hidden";
    }
    // After 30 seconds: Appear again
    else if (time >= 30) {
      centerAward.style.opacity = "1";
      centerAward.style.visibility = "visible";
    }
    // Reset state if video loops back to start
    else if (time < 10) {
      centerAward.style.opacity = "0";
      centerAward.style.visibility = "hidden";
    }
  });

  document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, {
      threshold: 0.1
    });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
  });


  const slider = document.getElementById('slider');
  let isDown = false;
  let startX;
  let scrollLeft;
  let autoScrollSpeed = 1;
  let isHovering = false;

  // 1. Mouse Drag Logic
  slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  });

  slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
  });

  slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
  });

  slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2; // Scroll speed multiplier
    slider.scrollLeft = scrollLeft - walk;
  });

  // 2. Auto-Scroll + Infinite Loop Logic
  function step() {
    if (!isDown && !isHovering) {
      slider.scrollLeft += autoScrollSpeed;

      // Seamless Loop: If we reach the end of the first set, jump back to start
      if (slider.scrollLeft >= (slider.scrollWidth / 2)) {
        slider.scrollLeft = 0;
      }
    }
    requestAnimationFrame(step);
  }

  slider.addEventListener('mouseenter', () => isHovering = true);
  slider.addEventListener('mouseleave', () => isHovering = false);

  requestAnimationFrame(step);
</script>