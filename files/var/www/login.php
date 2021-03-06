<?php require_once "ulogger/functions.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <?php printHead('Licencia uLogger'); ?>  
</head>
<body>
  <div id="wrap"><div class="container">    
    <!-- START CONTENT -->                
    <div class="form-signin">
      <h2 class="form-signin-heading">Logga in</h2>
      <?php include("ulogger/templates/messages.tpl.php"); ?>
      <input type="text" class="input-block-level" id="user" placeholder="Användarnamn">
      <input type="password" class="input-block-level" id="password" placeholder="Lösenord">
      <label class="checkbox">
        <?php if (isset($_COOKIE['remember_me'])) {
          $checked = 'checked="checked"';
          }
          else {
            $checked =  '';
          }
        ?>          
        <input type="checkbox" value="remember-me" id="remember_me" <?php echo $checked; ?>> Fortsätt vara inloggad          
      </label>
      <button class="btn btn-large btn-primary login-button" id="login">Logga in</button>
    </div>            
    <!-- END CONTENT -->
  </div></div>  
  <?php include("ulogger/templates/scrips.tpl.php"); ?>
</body>
</html>