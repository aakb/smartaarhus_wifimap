/*
 *
 * Scripts
 *
*/


$(document).ready(function() {
  // Attach toggle password function.
  // URL: https://github.com/cloudfour/hideShowPassword

  $('.js-form-toggle-password').click(function() {

    // Get element from data attribute and attach togglePassword function.
    $('#' + $(this).attr('data-toggle-password'))
    .togglePassword();

  });
});
