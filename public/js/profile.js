$(document).ready(function() {
  // attach event handlers to each edit-text span
  $('span.edit-text').each(function() {
    var $span = $(this);
    var $img = $span.siblings('img.spin');
    
    // on mouseenter, add the 'spin' class to the image
    $span.mouseenter(function() {
      $img.addClass('spin');
    });
    
    // on mouseleave, remove the 'spin' class from the image
    $span.mouseleave(function() {
      $img.removeClass('spin');
    });
  });
  
  // remove the 'spin' class from all images when the page loads
  $('img.spin').removeClass('spin');
});