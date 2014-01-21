<!DOCTYPE html>
<head>
  <title>Brug af cookies</title>
  <?php include('inc/meta.inc'); ?>
  <script type="text/javascript">
    $('.js-delete-login-choice').click(function() {
      deleteLoginChoice();
    });
  </script>
</head>

<?php include('inc/header.inc'); ?>
<div class="layout">
  <h1>Brug af cookies</h1>
  <div class="page-content">
    <p>[Cookie tekst]</p>
    <p class="js-cookie-message-not-saved"><a href="#" class="js-delete-login-choice">Slet cookie</a></p>
  </div>
  <?php include('inc/footer.inc'); ?>
</div>
</body>
</html>
