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

  $nameErr = $emailErr = $passErr = $userNameErr = $name = $userName = $email = $password = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = md5($_POST['pass']);
    
    if (empty($_POST["name"])){
      $nameErr = "* O nome é requerido.";
    }else{
      $name = test_input($_POST["name"]);
      $name_value = $name;
      //$nameErr = check_user($name);
    }

    if (empty($_POST['uname'])){
      $userNameErr = "* O nome de usuário é requerido.";
    }else{
      $userNameErr = check_user($_POST["uname"]);
      $userName = $_POST["uname"];
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

    if (empty($_POST["pass"])){
      $passErr = "* Senha obrigatória.";
    }

    if ($nameErr == "" && $emailErr == "" && $passErr == "" && $userNameErr == "") {
      $connect = mysqli_connect('localhost','root','','parsec_db');
      $insert = mysqli_query($connect,"INSERT INTO users (email,password,name,user_name) VALUES ('$email','$password','$name','$userName')");
      if($insert){
        //echo "<script>alert('Cadastro concluído com sucesso! Entre já!');window.location.href='index.php';</script>";
        session_start();
        $_SESSION['uname'] = $userName;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location:homepage.php?name=".$_SESSION['uname']);
      }else{
        echo "<script>alert('Ocorreu um erro. Por favor, tente novamente mais tarde.');</script>";
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
    $select = mysqli_query($connect,"SELECT user_name FROM users WHERE user_name = '$name'");
    $array = mysqli_fetch_array($select);
    $logarray = $array['user_name'];
    if ($logarray == $name) {
      $error = "* Esse nome de usuário já está em uso.";
      return $error;
    }else{
      if ( preg_match('/\s/',$name) ){
        $error = "O nome de usuário não deve conter espaçamentos.";
        return $error;
      }else{
        $error = "";
        return $error;
      }
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
            <input type="text" name="name" placeholder="Nome completo" value="<?php echo $name; ?>">
            <span style="font-size: 11px; color: red; margin-top: -15px; margin-right: 5px; float: right;"><?php echo $nameErr; ?></span>
            <input type="text" name="uname" placeholder="Nome de usuário" value="<?php echo $userName; ?>">
            <span style="font-size: 11px; color: red; margin-top: -15px; margin-right: 5px; float: right;"><?php echo $userNameErr; ?></span>
            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <span style="font-size: 11px; color: red; margin-top: -15px; margin-right: 5px; float: right;"><?php echo $emailErr; ?></span>
            <input type="password" name="pass" placeholder="Senha">
            <span style="font-size: 11px; color: red; margin-top: -15px; margin-right: 5px; float: right;"><?php echo $passErr; ?></span>
            <input type="submit" name="submit" value="Criar Conta">
          </form>
          <a href="index.php">Já tem uma conta?</a>
        </div>
      </div>
    </section>
  </body>
</html>
