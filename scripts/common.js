/**
 * Cookies
 *
 * Cookie is used for redirecting the user to the last used login
 */

// Cookie check and redirect
function cookieRedirect() {
  // Make sure there is a cookie set
  if ($.cookie('cookie_redirect') != undefined) {
    window.location.replace($.cookie('cookie_redirect'));

    // If the user is redirected show a message explaining it
  }
}

// Set cookie
function setCookie() {
  $.cookie('cookie_redirect', window.location.pathname);
}

// Unset cookie
function unsetCookie() {
  // If the user is going back to the front page delete the cookie
  if (document.referrer && $.cookie('cookie_redirect') != undefined) {
    $.removeCookie('cookie_redirect');
  }
}


/**
 * Function for show/hide password in input fields
 */

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


/**
 * Start the magic
 */
$(document).ready(function() {
  // Show/hide password
  showHidePassword();
});
