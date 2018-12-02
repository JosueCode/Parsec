<?php
  $nameErr = $emailErr = $name_value = $email_value = $name = $email = $password = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = md5($_POST['pass']);
    if (empty($_POST["name"])){
      $nameErr = "* O nome de usuário é requerido.";
    }else{
      $name = test_input($_POST["name"]);
      $name_value = $name;
      $nameErr = check_user($name);
    }

    if (empty($_POST["email"])){
      $emailErr = "* O endereço de email é requerido.";
    }else{
      $email = test_input($_POST["email"]);
      $email_value = $email;
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "* Formato de email inválido.";
      }else{
        $emailErr = check_email($email);
      }
    }

    if ($nameErr == "" && $emailErr == "") {
      $connect = mysqli_connect('localhost','root','','parsec_db');
      $insert = mysqli_query($connect,"INSERT INTO users (user,email,password) VALUES ('$name','$email','$password')");
      if($insert){
        echo "<script>alert('Cadastro concluído com sucesso! Entre já!');window.location.href='homepage.php';</script>";
      }else{
        echo "<script>alert('Ocorreu um erro. Por favor, volte a tentar mais tarde.');</script>";
      }
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  function check_user($name) {
    $connect = mysqli_connect('localhost','root','','parsec_db');
    $select = mysqli_query($connect,"SELECT user FROM users WHERE user = '$name'");
    $array = mysqli_fetch_array($select);
    $logarray = $array['user'];
    if ($logarray == $name) {
      $error = "* Esse nome de usuário já está em uso.";
      return $error;
    }else{
      $error = "";
      return $error;
    }
  }
  function check_email($email) {
    $connect = mysqli_connect('localhost','root','','parsec_db');
    $select = mysqli_query($connect,"SELECT email FROM users WHERE email = '$email'");
    $array = mysqli_fetch_array($select);
    $logarray = $array['email'];
    if ($logarray == $email) {
      $error = "* Esse endereço de email já está em uso.";
      return $error;
    }else{
      $error = "";
      return $error;
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style-cadastrar.css">
    <title>Login</title>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="shadow">
          <img src="img/logo.png" width="150px">
        </div>
        <div class="cadastrobox">
          <h1>Cadastre-se</h1>
          <form class="cadastro" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
            <input type="text" name="name" placeholder="Nome de Usuário" value="<?php echo $name_value; ?>">
            <span style="font-size: 11px; color: red; margin-top: -18px; margin-right: 5px; float: right;"><?php echo $nameErr; ?></span>
            <input type="email" name="email" placeholder="Email..." value="<?php echo $email_value; ?>">
            <span style="font-size: 11px; color: red; margin-top: -18px; margin-right: 5px; float: right;"><?php echo $emailErr; ?></span>
            <input type="password" name="pass" placeholder="Senha...">
            <input type="submit" name="submit" value="Criar Conta">
          </form>
          <a href="index.php">Já tem uma conta?</a>
        </div>
      </div>
    </section>
  </body>
</html>
