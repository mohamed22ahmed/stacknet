

// Send Additional Message Btn
$('.msg-btn').click(function(){
  $('.msg').fadeIn(300)
})
$('.evaluaion-btn').click(function(){
  $('.evaluaion-msg').fadeIn(300)
})
$(window).on("scroll",function(){
    if($(window).scrollTop()>=300)
    {
        $('#goUPButton').slideDown(700);
    }
    else
    {
        $('#goUPButton').slideUp(700); 
    }
}) ;
function goUP(){
    window.scrollTo(0,0); 
};


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1200, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
    
    
});


// Directly Customer Support And Specialization ( Input Appear )
$('.selcect-request').change(function(){
  if($(this).val() === 'Case-Investigation' || $(this).val() === 'Directly-Support' ) {
    $('.case-investigation-appear').fadeIn(300)
  }
  else {
    $('.case-investigation-appear').fadeOut(300)
  }
  if($(this).val() === 'coding-item') {
    $('.coding-item-appear').fadeIn(300)
  }
  else {
    $('.coding-item-appear').fadeOut(300)
  }
  if($(this).val() === 'Contract') {
    $('.contract-appear').fadeIn(300)
  }
  else {
    $('.contract-appear').fadeOut(300)
  }
  if($(this).val() === 'Deployment') {
    $('.deploy-appear').fadeIn(300)
  }
  else {
    $('.deploy-appear').fadeOut(300)
  }
  if($(this).val() === 'Presentation') {
    $('.presentation-appear').fadeIn(300)
  }
  else {
    $('.presentation-appear').fadeOut(300)
  }

})

$('.specialization').change(function(){
  if($(this).val() === 'pharmacy') {
    $('.pharmacy-item-appear').fadeIn(300)
  }
  else {
    $('.pharmacy-item-appear').fadeOut(300)
  }
  if($(this).val() === 'hospital' || $(this).val() === 'clinic') {
    $('.hospital-item-appear').fadeIn(300)
  }
  else {
    $('.hospital-item-appear').fadeOut(300)
  }
})

$('.special-select').change(function(){
  if($(this).val() === 'Other') {
    $('.other-appear').fadeIn(300)
  }
  else {
    $('.other-appear').fadeOut(300)
  }
  if($(this).val() === 'Others') {
    $('.other-appears').fadeIn(300)
  }
  else {
    $('.other-appears').fadeOut(300)
  }
})


