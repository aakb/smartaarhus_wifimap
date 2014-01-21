/*
 *
 * Scripts
 *
*/


// Cookies
// Cookie is used for redirecting the user to the last used login

// Cookie check and redirect
function cookieRedirect() {
  // Make sure there is a cookie set
  if ($.cookie('cookie_redirect') != undefined) {
    console.log('Do redirect.');
    window.location.replace($.cookie('cookie_redirect'));
  } else {
    console.log('No cookie.');
  }
}

// Set cookie
function setCookie() {
  $.cookie('cookie_redirect', window.location.pathname);

  console.log('Cookie saved:' + $.cookie('cookie_redirect'));
}

// Unset cookie
function unsetCookie() {
  // If the user is going back to the front page delete the cookie
  if (document.referrer) {
    $.removeCookie('cookie_redirect');

    console.log('Cookie deleted:' + $.cookie('cookie_redirect'));
  }
}


// Function for show/hide password in input fields
function showHidePassword() {
  // Attach toggle password function.
  // URL: https://github.com/cloudfour/hideShowPassword

  var togglePassword = $('.js-form-toggle-password');
  var togglePasswordText = $('.js-form-toggle-text', togglePassword);
  var passwordInput = $('#' + togglePassword.attr('data-toggle-password'));

  togglePassword.click(function() {
    // Get element from data attribute and attach togglePassword function.

    passwordInput.togglePassword();
  });

  // Change text.
  $(passwordInput).on('passwordShown', function () {
    togglePasswordText.text('Skjul');

  }).on('passwordHidden', function () {
    togglePasswordText.text('Vis');
  });
}


$(document).ready(function() {
  // Show/hide password
  showHidePassword();
});
