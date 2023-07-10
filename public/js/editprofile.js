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

  // edit profile validation

  
    const form = document.querySelector('form');
    const mobileNumberInput = document.querySelector('input[type="text"]');
    const emailInput = document.querySelector('input[type="email"]');
    const passwordInput = document.querySelectorAll('input[type="password"]')[0];
    const confirmPasswordInput = document.querySelectorAll('input[type="password"]')[1];

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        // Check mobile number input
        const mobileNumberValue = mobileNumberInput.value;
        const mobileNumberRegex = /^[0-9]+$/;
        if (!mobileNumberRegex.test(mobileNumberValue)) {
            alert('Please enter numbers only for your mobile number.');
            return;
        }

        // Check email input
        const emailValue = emailInput.value;
        if (!emailValue.includes('@') || !emailValue.endsWith('.com')) {
            alert('Please enter a valid email address.');
            return;
        }

        // Check password and confirm password inputs
        const passwordValue = passwordInput.value;
        const confirmPasswordValue = confirmPasswordInput.value;
        if (passwordValue !== confirmPasswordValue) {
            alert('Please make sure your password and confirm password fields match.');
            return;
        }

        // Submit the form if all inputs are valid
        form.submit();
    });