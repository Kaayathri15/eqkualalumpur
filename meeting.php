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
                <h1>Meeting & Events </h1>
            </div>
        </div>
    </section>

  <section class="intro-section">
        <h2>Refined Luxury</h2>
        <p class="intro-description">Experience the pinnacle of hospitality in our thoughtfully curated selection of event spaces, designed for moments that matter.</p>
    </section>

<?php
$pageData = [
    [
        'title' => 'Diamond Ballroom', 
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.', 
        'img' => 'https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2019/04/021-683x1024.jpg', 
        'link' => ''
    ],
    [
        'title' => 'Sapphire', 
        'desc' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 
        'img' => 'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=800', 
        'link' => ''
    ],
    [
        'title' => 'Conservatory', 
        'desc' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.', 
        'img' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?w=800', 
        'link' => ''
    ],
    [
        'title' => 'Forum & Caucus', 
        'desc' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.', 
        'img' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=800', 
        'link' => ''
    ],
    [
        'title' => 'The Garden', 
        'desc' => 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.', 
        'img' => 'https://www.eqkualalumpur.equatorial.com/wp-content/uploads/sites/10/2022/01/2022-01-17_eq-garden-wedding-2-1024x683.jpg', 
        'link' => 'the_garden.php'
    ],
    [
        'title' => 'Huddle', 
        'desc' => 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias.', 
        'img' => 'https://images.unsplash.com/photo-1595433707802-6806f3fc52b0?w=800', 
        'link' => ''
    ],
    [
        'title' => 'Cluster', 
        'desc' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.', 
        'img' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=800', 
        'link' => ''
    ]
    ,
    [
        'title' => 'Studio', 
        'desc' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.', 
        'img' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=800', 
        'link' => ''
    ]
];

// Call the function once for the entire list
renderLuxuryCarousel('mainGallery', $pageData);
?>
</script>

    <?php include 'global/footer.html'; ?>
