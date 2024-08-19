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

$(document).ready(function() {
    // Function to fetch product data from the backend
    function getProductData(productId) {
        // Make an AJAX request to fetch product data
        $.ajax({
            
            method: 'GET',
            success: function(data) {
                // Populate modal with received data
                $('#modal-product-image').attr('src', data.image);
                $('#modal-product-title').text(data.title);
                $('#modal-product-description').text(data.description);
                // Display the modal
                $('#productModal').css('display', 'block');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching product data:', error);
            }
        });
    }

    // Event listener for clicking on product cards
    $('.card').click(function() {
        // Extract the product ID from the card
        var productId = $(this).data('product-id');
        // Fetch and display product data
        getProductData(productId);
    });

    // Event listener for closing the modal
    $('.close').click(function() {
        $('#productModal').css('display', 'none');
    });
});
