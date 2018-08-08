<?php
  if(isset($_SESSION['login'])){
    header("Location: profile/index.php");
  }
  include("_inc/head.php");
  include("_inc/header.php");
?>
<main class="main">
  <div class="content">
    <form role="form" action="_inc/login.php" class="login-form" method="POST">
      <span>
        <img src="http://127.0.0.1/precisao/assets/imgs/logo.png" alt="PRECISÃO SERVIÇOS GERAIS - Login">
      </span>
      <span>
        <label for="login"><i class="fas fa-user"></i></label>
        <input type="text" name="login" placeholder="LOGIN" />
      </span>
      <span>
        <label for="senha"><i class="fas fa-unlock-alt"></i></label>
        <input type="password" name="senha" placeholder="SENHA" />
      </span>
      <span class="g-recaptcha" data-sitekey="6LcBeGgUAAAAAAP5FLtp7o8S6Bl41Lq6kNMyUPf8"></span>
      <span>
        <input class="btn -submit-button -red" type="submit" value="login" name="login" />
      </span>
      <p class="err-msg">
        <?php 
          if(isset($_SESSION['loginErro'])){
              echo $_SESSION['loginErro'];
              unset($_SESSION['loginErro']);
          } else if(isset($_SESSION['logindeslogado'])){
              echo $_SESSION['logindeslogado'];
              unset($_SESSION['logindeslogado']);
          }
        ?>
      </p>
    </form>
  </div>
</main>
<?php include("_inc/footer.php"); ?>