// Back to Top
$(document).ready(function() {
   // Show or hide the sticky footer button
   $(window).scroll(function() {
      if ($(this).scrollTop() > 300) {
         $('.back-to-top').fadeIn(200);
      } else {
         $('.back-to-top').fadeOut(200);
      }
   });
   
   // Animate the scroll to top
   $('.back-to-top').click(function(event) {
      event.preventDefault();
      
      $('html, body').animate({scrollTop: 0}, 300);
   })
});


// Home Page Slide Fade 
$(document).ready(function(){
   $("#slideshow > div:gt(0)").hide();
 
   setInterval(function() {
     $('#slideshow > div:first')
       .fadeOut(1000)
       .next()
       .fadeIn(1000)
       .end()
       .appendTo('#slideshow');
   }, 6000); // How Long the Slide is on Screen
 });