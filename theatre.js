// Get all the small images
var smallImages = document.querySelectorAll('.carousel-small-images img');

// Loop through each small image and add a click event listener
smallImages.forEach(function(smallImage) {
    smallImage.addEventListener('click', function() {
        var imagePath = this.src; // Get the source of the clicked small image
        changeMainImage(imagePath); // Call the function to change the main image
    });
});

function changeMainImage(imagePath) {
    var mainImage = document.getElementById('mainImage');
    mainImage.src = imagePath;
    mainImage.alt = 'Big Image';
}