/*
 *
 * Scripts
 *
*/


$(document).ready(function() {
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
});
