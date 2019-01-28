<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style-homepage.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/suggestions.css">
    <link rel="stylesheet" type="text/css" href="css/trending.css">
    <link rel="stylesheet" type="text/css" href="css/copyright.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script type="text/javascript" src="js/open-menu.js"></script>
    <title>Home - Parsec</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="homepage.html"><img src="img/logo.png" height="25px"></a>
      </div>
      <div class="search-box">
        <input type="text" name="search" placeholder="Pesquisar...">
      </div>
      <div class="menu-right">
        <nav>
          <ul>
            <li><a href="homepage.html"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fab fa-wpexplorer"></i>Explorar</a></li>
            <li><a href="notificacoes.html"><i class="fas fa-bell"></i>Notificações</a></li>
            <li><a href="mensagens.html"><i class="fas fa-envelope"></i>Mensagens</a></li>
          </ul>
        </nav>

        <div class="dropdown">
          <img onclick="myfunction()" src="img/user-photo.png" class="img-btn" width="28px">
          <div id="submenu" class="submenu-conteudo">
            <a href="profile.html"><i class="fas fa-user"></i> Meu perfil</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
          </div>
        </div>
      </div>
    </header>
