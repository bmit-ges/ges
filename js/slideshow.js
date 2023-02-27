$(document).ready(function() {
    var interval = 5000; // Slideshow interval in milliseconds
    var slides = $('.slideshow img');
    var currentIndex = 0;
    var maxIndex = slides.length - 1;
  
    // Set initial active slide
    $(slides[currentIndex]).addClass('active');
  
    // Set interval to cycle through slides
    setInterval(function() {
      // Remove active class from current slide
      $(slides[currentIndex]).removeClass('active');
  
      // Increment current index or reset to 0
      if (currentIndex < maxIndex) {
        currentIndex++;
      } else {
        currentIndex = 0;
      }
  
      // Add active class to next slide
      $(slides[currentIndex]).addClass('active');
    }, interval);
});