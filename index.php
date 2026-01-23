<?php
include 'global/header.php';
?>
<style>
/* Sentence at the bottom */
.award-subtitle {
    position: absolute;
    bottom: 120px; /* Anchored to bottom */
    left: 50%;
    transform: translateX(-50%);
    font-family: 'Baskerville', serif;
    font-size: 16px;
    letter-spacing: 6px;
    text-transform: uppercase;
    color: var(--eq-sand);
    opacity: 0;
    visibility: hidden;
    z-index: 10;
    transition: opacity 1.5s ease;
}

/* Container */
.scroll-down {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    z-index: 2000; /* Increased to stay above all overlays */
    cursor: pointer;
    text-decoration: none;
    /* Ensure opacity is managed by JS, but starts at 0 */
}

.scroll-text {
    font-family: 'Montserrat', sans-serif;
    font-size: 10px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #ffffff; /* Pure white for visibility */
    text-shadow: 0px 2px 4px rgba(0,0,0,0.5); /* Helps against light backgrounds */
}

/* The Arrow */
.scroll-arrow {
    color: #ffffff; /* Changed to white */
    font-size: 18px; /* Slightly larger */
    filter: drop-shadow(0px 2px 4px rgba(0,0,0,0.5));
    animation: arrow-bounce 2s infinite;
}

@keyframes arrow-bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(10px); }
    60% { transform: translateY(5px); }
}
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

  /* Main Section Wrapper */
  .city-heartbeat-section {
    padding: 80px 0;
    overflow: hidden;
  }

  .heartbeat-flex-wrapper {
    display: flex;
    align-items: center;
    gap: 50px;
    max-width: 100%;
    padding-left: 8%;
    /* Adjust based on your site's margin */
  }

  /* Left Side: Content */
  .heartbeat-sidebar {
    flex: 0 0 350px;
    /* Width of the text area */
    z-index: 10;
    background: white;
    /* Ensures text stays readable if images overlap */
  }

  .subtitleTitle {
    display: block;
    font-size: 14px;
    color: var(--clay);

    letter-spacing: 5px;
    margin-bottom: 15px;
    text-transform: uppercase;
  }

  .commonH2 {
    font-size: 52px;
    font-weight: 300;
    line-height: 1.1;
    margin: 0 0 25px 0;
    color: var(--dark);
  }

  .commonH2italic {
    font-style: italic;
    font-family: serif;
  }

  .sidebar-description {
    font-size: 16px;
    line-height: 1.7;
    color: var(--text-gray);
    margin-bottom: 40px;
  }

  .btn-view-all {
    display: inline-block;
    padding: 16px 45px;
    background: var(--dark);
    color: white;
    text-decoration: none;
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    border: 1px solid var(--dark);
    transition: all 0.4s ease;
  }

  .btn-view-all:hover {
    background: transparent;
    color: var(--dark);
  }

  /* Right Side: Moving Cards */
  .scroll-container {
    flex: 1;
    position: relative;
    height: 450px;
    overflow: hidden;
    /* Creates a soft fade so images appear to emerge from the left */
    mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
  }

  .scroll-track {
    display: flex;
    gap: 25px;
    animation: scrollLeft 40s linear infinite;
    width: max-content;
  }

  .scroll-track:hover {
    animation-play-state: paused;
  }

  @keyframes scrollLeft {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-50%);
    }

    /* Halfway because of the duplicate set */
  }

  .moment-card {
    width: 380px;
    height: 450px;
    position: relative;
    overflow: hidden;
  }

  .moment-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s ease;
  }

  .moment-card:hover img {
    transform: scale(1.1);
  }

  .card-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 40px 30px;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.85), transparent);
    color: white;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.5s ease;
  }

  .moment-card:hover .card-overlay {
    opacity: 1;
    transform: translateY(0);
  }

  .card-overlay h3 {
    color: var(--gold);
    font-size: 22px;
    margin-bottom: 10px;
    font-weight: 300;
  }

  .card-overlay p {
    font-size: 14px;
    line-height: 1.5;
    opacity: 0.9;
  }

  /* Tablet & Mobile Adjustments */
  @media (max-width: 1024px) {
    .heartbeat-flex-wrapper {
      flex-direction: column;
      padding: 0 20px;
      text-align: center;
    }

    .heartbeat-sidebar {
      flex: none;
      width: 100%;
    }

    .scroll-container {
      width: 100vw;
      mask-image: none;
      -webkit-mask-image: none;
    }
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
    <img src="images/logo_eq.png" alt="EQ Logo" />
  </div>

  <div class="intro-awards-center" id="centerAward">
    <img src="images/TL-WORLD_PM.png" alt="Travel + Leisure Award" />
  </div>

<div id="awardSentence" class="award-subtitle">
    The World’s Finest Leisure
</div>


<div id="scrollIndicator" class="scroll-down">
    <span class="scroll-text">Discover More</span>
    <i class="fa-solid fa-chevron-down scroll-arrow"></i>
</div>
</section>
<!-- END OF SECTION -->


<!-- FIRST SECTION-INTRO -->
<main  id="first-section" class="hero-container reveal">
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
        'title' => 'Accommodation', 
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 
        'img' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800', 
        'link' => 'accommodation.php'
    ],
    [
        'title' => 'Dining', 
        'desc' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 
        'img' => 'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=800', 
        'link' => 'dining.php'
    ],
    [
        'title' => 'Meetings & Events', 
        'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.', 
        'img' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?w=800', 
        'link' => 'meeting.php'
    ],
    [
        'title' => 'Wellness', 
        'desc' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.', 
        'img' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=800', 
        'link' => 'wellness.php'
    ],
    [
        'title' => 'Weddings', 
        'desc' => 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.', 
        'img' => 'https://images.unsplash.com/photo-1519741497674-611481863552?w=800', 
        'link' => 'weddings.php'
    ],
    [
        'title' => 'E-Shop', 
        'desc' => 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias.', 
        'img' => 'https://images.unsplash.com/photo-1595433707802-6806f3fc52b0?w=800', 
        'link' => 'shop.php'
    ],
    [
        'title' => 'Offers', 
        'desc' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.', 
        'img' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=800', 
        'link' => 'offers.php'
    ]
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


<section class="city-heartbeat-section">
  <div class="heartbeat-flex-wrapper">

    <div class="heartbeat-sidebar">
      <span class="subtitleTitle">EQ CURATES</span>
      <h2 class="commonH2">City's <br><i class="commonH2italic">Heartbeat</i></h2>
      <p class="sidebar-description">
        Experience the vibrant pulse of the city through our curated collection of moments, from golden sunsets to modern luxury.
      </p>
      <div class="curates-view-all-container">
        <a href="experience.php" class="btn-view-all">Explore More</a>
      </div>
    </div>

    <div class="scroll-container">
      <div class="scroll-track">
        <div class="moment-card">
          <img src="https://images.pexels.com/photos/1395967/pexels-photo-1395967.jpeg" alt="Dining">
          <div class="card-overlay">
            <h3>Intimate Gatherings</h3>
            <p>A table adorned with delectable dishes and family warmth.</p>
          </div>
        </div>

        <div class="moment-card">
          <img src="https://images.pexels.com/photos/1210622/pexels-photo-1210622.jpeg" alt="Sunset">
          <div class="card-overlay">
            <h3>Golden Hour</h3>
            <p>Panoramic views providing the backdrop for unforgettable moments.</p>
          </div>
        </div>

        <div class="moment-card">
          <img src="https://images.pexels.com/photos/261101/pexels-photo-261101.jpeg" alt="Villa">
          <div class="card-overlay">
            <h3>Private Retreats</h3>
            <p>Sun-soaked villas crafted in warmth and joy.</p>
          </div>
        </div>

        <div class="moment-card">
          <img src="https://images.pexels.com/photos/3201761/pexels-photo-3201761.jpeg" alt="Luxury">
          <div class="card-overlay">
            <h3>Modern Elegance</h3>
            <p>Where sophistication meets timeless luxury.</p>
          </div>
        </div>

        <div class="moment-card">
          <img src="https://images.pexels.com/photos/1395967/pexels-photo-1395967.jpeg" alt="Dining">
          <div class="card-overlay">
            <h3>Intimate Gatherings</h3>
            <p>A table adorned with delectable dishes and family warmth.</p>
          </div>
        </div>

        <div class="moment-card">
          <img src="https://images.pexels.com/photos/1210622/pexels-photo-1210622.jpeg" alt="Sunset">
          <div class="card-overlay">
            <h3>Golden Hour</h3>
            <p>Panoramic views providing the backdrop for unforgettable moments.</p>
          </div>
        </div>

        <div class="moment-card">
          <img src="https://images.pexels.com/photos/261101/pexels-photo-261101.jpeg" alt="Villa">
          <div class="card-overlay">
            <h3>Private Retreats</h3>
            <p>Sun-soaked villas crafted in warmth and joy.</p>
          </div>
        </div>

        <div class="moment-card">
          <img src="https://images.pexels.com/photos/3201761/pexels-photo-3201761.jpeg" alt="Luxury">
          <div class="card-overlay">
            <h3>Modern Elegance</h3>
            <p>Where sophistication meets timeless luxury.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'global/footer.html'; ?>
<script>
 document.addEventListener('DOMContentLoaded', () => {
    /** * 1. VIDEO APPEARANCE LOGIC 
     * Handles immediate display of Logo and Awards on play
     */
const introVideo = document.getElementById('introVideo');
const mainLogo = document.getElementById('mainLogo');
const scrollIndicator = document.getElementById('scrollIndicator');

// Elements that WILL disappear
const centerAward = document.getElementById('centerAward');
const awardSentence = document.getElementById('awardSentence');

introVideo.addEventListener('play', () => {
    // 1. Permanent Elements: Fade in and stay
    [mainLogo, scrollIndicator].forEach(el => {
        if (el) {
            el.style.opacity = "1";
            el.style.visibility = "visible";
            el.style.transition = "opacity 1.5s ease";
        }
    });

    // 2. Temporary Elements: Initial fade in
    [centerAward, awardSentence].forEach(el => {
        if (el) {
            el.style.opacity = "1";
            el.style.visibility = "visible";
            el.style.transition = "opacity 1.5s ease 0.5s";
        }
    });
});

introVideo.addEventListener('timeupdate', () => {
    const time = introVideo.currentTime;

    // Disappear after 10 seconds to clear the video center
    if (time >= 10 && time < 25) {
        if (centerAward) centerAward.style.opacity = "0";
        if (awardSentence) awardSentence.style.opacity = "0";
        // scrollIndicator and mainLogo are untouched here
    } 
    // Reappear if the video loops or is at the start
    else if (time < 10) {
        if (centerAward) centerAward.style.opacity = "1";
        if (awardSentence) awardSentence.style.opacity = "1";
    }
});
    /** * 2. GLOBAL SCROLL REVEAL (Intersection Observer)
     * Consolidated all .reveal triggers into one efficient observer
     */
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: "0px 0px -50px 0px" });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    /** * 3. SPOTLIGHT GALLERY (Discover Our Haven)
     * Centered card navigation
     */
    const track = document.getElementById('spotlightTrack');
    const cards = document.querySelectorAll('.spotlight-card');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 2; 

    function updateGallery(index) {
        if (!track || cards.length === 0) return;
        currentIndex = Math.max(0, Math.min(index, cards.length - 1));

        cards.forEach((card, i) => card.classList.toggle('active', i === currentIndex));
        if(prevBtn) prevBtn.disabled = currentIndex === 0;
        if(nextBtn) nextBtn.disabled = currentIndex === cards.length - 1;

        requestAnimationFrame(() => {
            const activeCard = cards[currentIndex];
            const viewportWidth = track.parentElement.offsetWidth;
            const offset = (viewportWidth / 2) - (activeCard.offsetLeft + activeCard.offsetWidth / 2);
            track.style.transform = `translateX(${offset}px)`;
        });
    }

    if(nextBtn) nextBtn.addEventListener('click', () => updateGallery(currentIndex + 1));
    if(prevBtn) prevBtn.addEventListener('click', () => updateGallery(currentIndex - 1));
    cards.forEach((card, idx) => card.addEventListener('click', () => updateGallery(idx)));

    // Initialize Gallery
    setTimeout(() => updateGallery(currentIndex), 300);

    /** * 4. AWARDS AUTO-SCROLL (Infinite Loop)
     */
    const slider = document.getElementById('slider');
    let isDown = false, startX, scrollLeft, isHovering = false;

    if (slider) {
        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });
        slider.addEventListener('mouseleave', () => isDown = false);
        slider.addEventListener('mouseup', () => isDown = false);
        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            const x = e.pageX - slider.offsetLeft;
            slider.scrollLeft = scrollLeft - (x - startX) * 2;
        });

        function autoScroll() {
            if (!isDown && !isHovering) {
                slider.scrollLeft += 1;
                if (slider.scrollLeft >= (slider.scrollWidth / 2)) slider.scrollLeft = 0;
            }
            requestAnimationFrame(autoScroll);
        }
        slider.addEventListener('mouseenter', () => isHovering = true);
        slider.addEventListener('mouseleave', () => isHovering = false);
        autoScroll();
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const scrollIndicator = document.getElementById('scrollIndicator');
    const firstSection = document.getElementById('first-section');

    if (scrollIndicator && firstSection) {
        scrollIndicator.addEventListener('click', () => {
            // Smoothly scroll to the target section
            firstSection.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'start' 
            });
        });
    }
});
</script>