<?php
include 'function.php';
?><!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EQ | A Legacy of Luxury</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="style.css" />

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
    
    <script>
        Weglot.initialize({
            api_key: 'wg_f9bba43040e5e98486123e51419904ca4'
        });
    </script>
    <style>
header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 60px; /* Reduced padding for a modern look */
    display: flex;
    flex-direction: column;
    z-index: 1000;
    
    /* Solid Background - No Transparency */
    background: #0F0E0E; 
    border-bottom: 1px solid rgba(218, 194, 182, 0.1);
    
    /* Ensure it is visible immediately */
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    transition: padding 0.3s ease;
}

/* Optional: Slight shadow or padding change when scrolling */
header.scrolled {
    padding: 15px 60px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
}
        /* Line 1: Logo Left, Tilde Center, Book Right */
        .header-line-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .header-left,
        .header-right {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .header-right {
            justify-content: flex-end;
        }

        .header-center {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .logo {
            width: 50px;
            height: auto;
            transition: 0.5s;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            font-family: 'Montserrat', sans-serif;
            font-size: 11px;
            letter-spacing: 3px;
            text-transform: uppercase;
            /* Ensure no shadow or border exists in default state */
            border: none !important;
            box-shadow: none !important;
        }

        /* FIX: Prevents blue/purple browser default text */
        .nav-links a {
            color: var(--bone) !important;
            text-decoration: none !important;
            position: relative;
            transition: opacity 0.3s;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 0%;
            height: 1px;
            background: var(--eq-sand);
            transition: width 0.4s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .tilde-icon {
            width: 30px;
            height: auto;
            opacity: 0.8;
        }

        .btn-reserve {
            background: transparent;
            color: var(--bone);
            padding: 12px 30px;
            border: 1px solid var(--eq-sand);
            text-decoration: none;
            font-family: 'Montserrat';
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: 0.4s;
        }

        .btn-reserve:hover {
            background: var(--eq-sand);
            color: var(--charcoal);
        }

        /* Line 2: Utility (Appears on Scroll) */
        .header-line-bottom {
            width: 100%;
            display: flex;
            justify-content: center;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: var(--transition);
        }

        header.scrolled .header-line-bottom {
            max-height: 60px;
            opacity: 1;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid rgba(218, 194, 182, 0.1);
        }

        /* --- MOBILE HAMBURGER & X BUTTON --- */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 6px;
            cursor: pointer;
            z-index: 2100;
            position: relative;
        }

        .hamburger span {
            width: 28px;
            height: 1px;
            background: var(--eq-sand);
            transition: all 0.4s ease;
        }

        /* Transform to X */
        header.menu-open .hamburger span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }

        header.menu-open .hamburger span:nth-child(2) {
            opacity: 0;
        }

        header.menu-open .hamburger span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }

        /* Mobile Menu Overlay */
        .mobile-menu-overlay {
            position: fixed;
            inset: 0;
            background: var(--charcoal);
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: 0.6s ease;
        }

        /* Secondary Close Button (The 'X' inside the menu) */
        .mobile-close-btn {
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 40px;
            color: var(--eq-sand);
            cursor: pointer;
            display: none;
            /* Only show on mobile */
        }

        .mobile-menu-overlay.active {
            opacity: 1;
            pointer-events: auto;
        }

        .mobile-nav-links {
            display: flex;
            flex-direction: column;
            gap: 35px;
            text-align: center;
        }

        .mobile-nav-links a {
            font-size: 2.2rem;
            color: var(--bone);
            text-decoration: none;
            font-family: 'Cormorant Garamond';
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        @media (max-width: 1024px) {

            .header-center,
            .header-line-bottom,
            .btn-reserve {
                display: none;
            }

            .hamburger,
            .mobile-close-btn {
                display: flex;
            }

            header {
                padding: 20px 30px;
            }
        }

        .btn-reserve {
            background: transparent;
            color: var(--bone);
            padding: 12px 30px;
            border: 1px solid var(--eq-sand);
            text-decoration: none;
            font-family: 'Montserrat';
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: 0.4s;
        }

        .btn-reserve:hover {
            background: var(--eq-sand);
            color: var(--charcoal);
        }

        /* --- BOOKING PANEL DESIGN --- */
        /* --- VERTICAL BOOKING PANEL FIX --- */
        .booking-panel {
            position: fixed;
            top: 0;
            /* Start from the very top of the screen */
            right: 0;
            width: px;
            height: 100vh;
            /* Full vertical height */
            background: #0F0E0E;
            /* Solid black for luxury depth */
            z-index: 9999;
            /* Highest priority to stay above all headers */
            transform: translateX(100%);
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
            padding: 100px 50px;
            display: flex;
            flex-direction: column;
        }

        .booking-panel.is-open {
            transform: translateX(0);
        }

        /* The new internal Close Button */
        .panel-close-btn {
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 40px;
            color: var(--eq-sand);
            cursor: pointer;
            line-height: 1;
            transition: 0.3s;
        }

        .panel-close-btn:hover {
            color: var(--bone);
        }

        /* Open State */
        .booking-panel.is-open {
            transform: translateX(0);
        }


        .booking-inner {
            display: flex;
            flex-direction: column;
            /* Stack fields vertically */
            gap: 40px;
            height: auto;
            padding: 0;
        }

        .booking-field {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .booking-field label {
            font-family: 'Montserrat';
            font-size: 9px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--eq-clay);
        }

        .booking-field input,
        .booking-field select {
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(218, 194, 182, 0.3);
            color: var(--bone);
            font-family: 'Cormorant Garamond';
            font-size: 16px;
            padding: 5px 0;
            outline: none;
            cursor: pointer;
        }

        .booking-submit {
            background: var(--eq-clay);
            color: white;
            border: none;
            padding: 12px 35px;
            font-family: 'Montserrat';
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            cursor: pointer;
            transition: 0.3s;
        }

        .booking-submit:hover {
            background: var(--eq-brown);
        }
        
        
        /* --- Destination Panel Styles --- */
        /* Destination Panel Layout */
        /* Styling for Destination Items inside the Panel */
        .dest-vertical-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .dest-panel-item {
            text-decoration: none;
            color: var(--bone);
            padding: 20px 0;
            border-bottom: 1px solid rgba(218, 194, 182, 0.1);
            transition: 0.3s ease;
            display: block;
        }

        .dest-panel-item:hover {
            padding-left: 10px;
            border-bottom-color: var(--eq-sand);
        }

        .dest-tag {
            font-size: 9px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--eq-sand);
            display: block;
            margin-bottom: 8px;
        }

        .dest-panel-item h3 {
            font-family: 'Baskerville', serif;
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 5px;
        }

        .dest-panel-item p {
            font-size: 13px;
            color: #888;
            margin: 0;
        }

        /* Ensure the panel width is comfortable for both content types */
        .booking-panel {
            width: 450px;
            /* Adjust as needed */
        }

        @media (max-width: 480px) {
            .booking-panel {
                width: 100%;
            }
        }
        </style>
</head>

<body>

  <!-- HEADER -->
 
    <div class="mobile-menu-overlay" id="mobMenu">
        <div class="mobile-close-btn" id="mobMenuClose">&times;</div>
        <nav class="mobile-nav-links">
            <a href="#">Destination</a>
            <a href="#">Experience</a>
            <a href="#">Accommodation</a>
            <a href="#">Dining</a>
            <a href="#">Offers</a>
        </nav>
    </div>

    <header id="nav">
        <div class="header-line-top">
            <div class="header-left">
           
            </div>

            <div class="header-center">
                <nav class="nav-links">
                    <a href="#">Destination</a>
                    <a href="index.php"> <img src="images/tilde.png" class="tilde-icon" alt="~"></a>
                    <a href="experience.php">Experience</a>
                </nav>
            </div>

            <div class="header-right">
                <a href="javascript:void(0)" class="btn-reserve" id="bookTrigger">Book to Stay</a>
                <div class="hamburger" id="mobMenuTrigger">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>

        <div class="header-line-bottom">
            <div class="mobile-close-btn" id="mobMenuClose">&times;</div>
            <nav class="nav-links">
               <a href="accomodation.php">Accommodation</a>
                <a href="dining.php">Dining</a>
                <a href="meeting.php">Meeting & Events</a>
                <a href="offers.php">Offers</a>
                <a href="wellness.php">Wellness</a>
                <a href="wedding.php">Wedding</a>
                <a href="eshop.php">E-Shop</a>
            </nav>
        </div>
    </header>


    <div class="booking-panel" id="bookingPanel">
        <div class="panel-close-btn" id="panelClose">&times;</div>

        <div id="bookingContent" class="panel-content-block">
            <h2 style="font-family: 'Baskerville', serif; color: var(--eq-sand); margin-bottom: 40px; font-weight: 400;">Book Your Stay</h2>
            <div class="booking-inner">
                <div class="booking-field">
                    <label>Check In</label>
                    <input type="text" placeholder="Select Date" onfocus="(this.type='date')">
                </div>
                <div class="booking-field">
                    <label>Check Out</label>
                    <input type="text" placeholder="Select Date" onfocus="(this.type='date')">
                </div>
                <div class="booking-field">
                    <label>Guests</label>
                    <select>
                        <option>1 Adult, 0 Children</option>
                        <option selected>2 Adults, 0 Children</option>
                    </select>
                </div>
                <button class="booking-submit">Check Availability</button>
            </div>
        </div>

        <div id="destinationContent" class="panel-content-block" style="display: none;">
            <h2 style="font-family: 'Baskerville', serif; color: var(--eq-sand); margin-bottom: 40px; font-weight: 400;">Our Destinations</h2>
            <div class="dest-vertical-list">
                <a href="index.php" class="dest-panel-item">
                    <span class="dest-tag">Malaysia</span>
                    <h3>Hotel EQ</h3>
                    <p>Kuala Lumpur</p>
                </a>
                <a href="hotel-hcm.php" class="dest-panel-item">
                    <span class="dest-tag">Vietnam</span>
                    <h3>Hotel HCM</h3>
                    <p>Ho Chi Minh City</p>
                </a>
                <a href="hotel-penang.php" class="dest-panel-item">
                    <span class="dest-tag">Malaysia</span>
                    <h3>Hotel Penang</h3>
                    <p>George Town</p>
                </a>
            </div>
        </div>
    </div>
   <!-- END OF HEADER -->



   <script>
    window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    // Change 50 to the number of pixels you want to scroll before header appears
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
       const nav = document.getElementById('nav');
    const mobTrigger = document.getElementById('mobMenuTrigger');
    const mobMenu = document.getElementById('mobMenu');
    const mobClose = document.getElementById('mobMenuClose');

    // Function to Toggle Menu
    function toggleMobileMenu() {
        mobMenu.classList.toggle('active');
        nav.classList.toggle('menu-open');

        // Prevent scrolling when menu is open
        if (mobMenu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    }

    // 1. Click Hamburger to Open/Close
    mobTrigger.addEventListener('click', toggleMobileMenu);

    // 2. Click the 'X' inside the menu to Close
    mobClose.addEventListener('click', toggleMobileMenu);

    // 3. Scroll Logic
    window.addEventListener('scroll', () => {
        if (window.scrollY > 80) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });

    // 4. Close menu if a link is clicked
    const mobLinks = document.querySelectorAll('.mobile-nav-links a');
    mobLinks.forEach(link => {
        link.addEventListener('click', toggleMobileMenu);
    });
    // Scroll Logic for Header Expansion
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('nav');
        if (window.scrollY > 80) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });
    const observerOptions = {
    threshold: 0.2
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, observerOptions);

    document.addEventListener('DOMContentLoaded', () => {
    const bookTrigger = document.getElementById('bookTrigger');
    const panelClose = document.getElementById('panelClose');
    const bookingPanel = document.getElementById('bookingPanel');
    bookTrigger.addEventListener('click', (e) => {
        e.preventDefault();
        bookingPanel.classList.add('is-open');
        console.log('test')

    });

    panelClose.addEventListener('click', () => {
        bookingPanel.classList.remove('is-open');
        console.log('test')

    });
});        document.addEventListener('DOMContentLoaded', () => {
            const bookTrigger = document.getElementById('bookTrigger');
            const destTrigger = document.getElementById('dest-trigger');
            const panelClose = document.getElementById('panelClose');
            const bookingPanel = document.getElementById('bookingPanel');

            const bookingContent = document.getElementById('bookingContent');
            const destinationContent = document.getElementById('destinationContent');

            // Handle "Book to Stay" Click
            bookTrigger.addEventListener('click', (e) => {
                e.preventDefault();
                bookingContent.style.display = 'block';
                destinationContent.style.display = 'none';
                bookingPanel.classList.add('is-open');
            });

            // Handle "Destination" Click
            destTrigger.addEventListener('click', (e) => {
                e.preventDefault();
                bookingContent.style.display = 'none';
                destinationContent.style.display = 'block';
                bookingPanel.classList.add('is-open');
            });

            // Close Panel
            panelClose.addEventListener('click', () => {
                bookingPanel.classList.remove('is-open');
            });

            // Close if clicking outside the panel (optional but recommended)
            document.addEventListener('mousedown', (e) => {
                if (bookingPanel.classList.contains('is-open') &&
                    !bookingPanel.contains(e.target) &&
                    !bookTrigger.contains(e.target) &&
                    !destTrigger.contains(e.target)) {
                    bookingPanel.classList.remove('is-open');
                }
            });
        });
  
   </script>