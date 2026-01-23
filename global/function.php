<?php
// --- 1. THE GLOBAL RENDER FUNCTION ---
// You can put this in a separate file like functions.php
function renderLuxuryCarousel($id, $items) {
    ?>
    <section class="carousel-section" id="<?php echo $id; ?>-section">
        <div class="carousel-container">
            <div class="carousel-track" id="<?php echo $id; ?>Track">
                <?php foreach ($items as $index => $item): ?>
                    <div class="carousel-card">
                        <div class="card-image">
                            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                        </div>
                        <div class="card-content">
                            <h3><?php echo $item['title']; ?></h3>
                            <p><?php echo $item['desc']; ?></p>
                            <a href="<?php echo $item['link']; ?>" class="view-details-btn">View Details</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="carousel-controls">
                <button class="nav-btn" onclick="moveCarousel('<?php echo $id; ?>', -1)">←</button>
                <button class="nav-btn" onclick="moveCarousel('<?php echo $id; ?>', 1)">→</button>
            </div>
        </div>
    </section>
    <?php
}
?>

<style>
    body { font-family: 'Montserrat', sans-serif; background: #fff; overflow-x: hidden; }
    .carousel-section {  overflow: hidden; background: #fff; }
    .carousel-container { position: relative; width: 100%; }
    .carousel-track { 
        display: flex; 
        align-items: stretch; 
        transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1); 
        padding: 40px 0; 
        gap: 30px; 
    }
    .carousel-card {
        min-width: 380px; width: 380px; background: #fdfdfd;
        transition: all 0.6s ease; opacity: 0.3; filter: grayscale(100%);
        transform: scale(0.8); border: 1px solid #f0f0f0;
    }
    .carousel-card.active {
        opacity: 1; filter: grayscale(0%); transform: scale(1.05);
        z-index: 10; box-shadow: 0 20px 60px rgba(0,0,0,0.1);
    }
    .card-image { width: 100%; height: 450px; overflow: hidden; }
    .card-image img { width: 100%; height: 100%; object-fit: cover; }
    .card-content { padding: 40px 35px; background: #f8f8f8; }
    .view-details-btn { 
        display: inline-block; padding: 10px 0; text-decoration: none; 
        color: #2a2a2a; border-bottom: 1px solid #c9a961; font-size: 11px; 
        text-transform: uppercase; letter-spacing: 2px;
    }
    .carousel-controls { 
        position: absolute; top: 40%; width: 100%; 
        display: flex; justify-content: space-between; 
        padding: 0 40px; pointer-events: none; z-index: 20; 
    }
    .nav-btn { 
        width: 55px; height: 55px; border-radius: 50%; border: 1px solid #2a2a2a;
        background: #fff; cursor: pointer; pointer-events: auto; 
    }
    @media (max-width: 900px) { .carousel-card { min-width: 300px; width: 300px; } }
</style>

<script>
const carouselStates = {};

function moveCarousel(id, direction) {
    const track = document.getElementById(id + 'Track');
    if (!track) return;
    const cards = track.children;
    if (carouselStates[id] === undefined) carouselStates[id] = 0;
    
    let newIndex = carouselStates[id] + direction;
    if (newIndex >= 0 && newIndex < cards.length) {
        carouselStates[id] = newIndex;
        updateCarousel(id);
    }
}

function updateCarousel(id) {
    const track = document.getElementById(id + 'Track');
    const cards = Array.from(track.children);
    if (cards.length === 0) return;

    const cardWidth = cards[0].offsetWidth + 30; 
    const containerWidth = track.parentElement.offsetWidth;
    const currentIndex = carouselStates[id];
    
    const offset = (containerWidth / 2) - (cardWidth / 2) - (currentIndex * cardWidth);
    track.style.transform = `translateX(${offset}px)`;

    cards.forEach((card, index) => {
        card.classList.toggle('active', index === currentIndex);
    });
}

function initAll() {
    const allTracks = document.querySelectorAll('[id$="Track"]');
    allTracks.forEach(track => {
        const id = track.id.replace('Track', '');
        const cards = Array.from(track.children);
        
        // --- START FROM MIDDLE LOGIC ---
        // Calculates the middle index. Example: 5 cards = index 2; 4 cards = index 2.
        const middleIndex = Math.floor(cards.length / 2);
        carouselStates[id] = middleIndex;

        // Click a card to center it
        cards.forEach((card, index) => {
            card.addEventListener('click', () => {
                carouselStates[id] = index;
                updateCarousel(id);
            });
        });

        // Initialize the position for this carousel
        updateCarousel(id);
    });
}

window.addEventListener('load', initAll);
window.addEventListener('resize', () => {
    Object.keys(carouselStates).forEach(id => updateCarousel(id));
});
</script>