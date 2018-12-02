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
          <form class="login" action="homepage.php" method="post">
            <input type="text" name="email" placeholder="Email...">
            <input type="password" name="pass" placeholder="Senha...">
            <input type="submit" name="submit" value="Entrar">
          </form>
          <a href="#">Esqueçeu a senha</a>
          <a href="cadastrar.php">Cria conta grátis.</a>
        </div>
      </div>
    </section>

  </body>
</html>
