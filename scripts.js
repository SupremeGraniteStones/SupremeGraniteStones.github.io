var slideIndex = 0;
var slides = document.getElementsByClassName("slide");

// Function to show slides
function showSlides() {
    // Hide all slides
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.opacity = 0;
    }
    // Increment slide index
    slideIndex++;
    // Reset slide index if it exceeds the number of slides
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    // Show the current slide with fade-in effect
    slides[slideIndex].style.opacity = 1;
    // Repeat the function after 5 seconds
    setTimeout(showSlides, 5000);
}

// Initially show the slides
showSlides();