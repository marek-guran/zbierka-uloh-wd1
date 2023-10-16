const carousel = document.getElementById('imageCarousel');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const images = carousel.getElementsByTagName('img');
const imageWidth = images[0].clientWidth;
let currentIndex = 0;

// Set initial position of carousel
carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;

// Move to next image
function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
}

// Move to previous image
function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    carousel.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
}

// Add event listeners to buttons
nextBtn.addEventListener('click', nextImage);
prevBtn.addEventListener('click', prevImage);