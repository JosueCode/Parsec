<?php
  session_start();
  if ( isset($_SESSION['email']) and isset($_SESSION['password']) ) {
    header("location:homepage.php?name=".$_SESSION['uname']);
  }else{
    session_destroy();
    unset($_SESSION['uname']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
  }

  $error = $emailErr = $passErr = $name_value = $email_value = $name = $email = $password = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = md5($_POST['pass']);

    if (empty($_POST["email"])){
      $emailErr = "* O endereço de email é requerido.";
    }else{
      $email = test_input($_POST["email"]);
      $email_value = $email;
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "* Formato de email inválido.";
      }
    }

    if (empty($_POST["pass"])){
      $passErr = "* Senha obrigatória.";
    }

    if ($emailErr == "" && $passErr == "") {
      $password = md5($_POST['pass']);
      $connect = mysqli_connect('localhost','root','','parsec_db');
      $result = mysqli_query($connect, "SELECT email, password, user_name FROM `users` WHERE email='$email' AND password='$password'");
      $array = mysqli_fetch_array($result);
      $logarray = $array['user_name'];
      if (mysqli_num_rows($result) > 0){
      	session_start();
        $_SESSION['uname'] = $logarray;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location:homepage.php?name=".$_SESSION['uname']);
      }else{
      	session_destroy();
        unset($_SESSION['uname']);
      	unset($_SESSION['email']);
      	unset($_SESSION['password']);
      	header('location:index.php');
        //$error = "* Email ou senha incorretos.";
      }
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style-index.css">
    <title>Login</title>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="shadow">
          <img src="img/logo.png" width="150px">
        </div>
        <div class="loginbox">
          <h1>Login</h1>
          <form class="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <span style="font-size: 11px; color: red; margin-top: -18px; margin-right: 5px; float: right;"><?php echo $error; ?></span>
            <input type="text" name="email" placeholder="Email..." value="<?php echo $email_value; ?>">
            <span style="font-size: 11px; color: red; margin-top: -18px; margin-right: 5px; float: right;"><?php echo $emailErr; ?></span>
            <input type="password" name="pass" placeholder="Senha...">
            <span style="font-size: 11px; color: red; margin-top: -18px; margin-right: 5px; float: right;"><?php echo $passErr; ?></span>
            <input type="submit" name="submit" value="Entrar">
          </form>
          <a href="#">Esqueçeu a senha</a>
          <a href="cadastrar.php">Cria conta grátis.</a>
        </div>
      </div>
    </section>

  </body>
</html>
