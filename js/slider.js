var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("Slides");
    slide_length = slides.length
	for (i = 0; i < slide_length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slide_length) {
        slideIndex = 1
    }    
  
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000);
}