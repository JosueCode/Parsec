<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style-profile.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/suggestions.css">
    <link rel="stylesheet" type="text/css" href="css/trending.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script type="text/javascript" src="js/open-menu.js"></script>
    <title>Perfil - Parsec</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="homepage.php"><img src="img/logo.png" height="25px"></a>
      </div>
      <div class="search-box">
        <input type="text" name="search" placeholder="Pesquisar...">
      </div>
      <div class="menu-right">
        <nav>
          <ul>
            <li><a href="homepage.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fab fa-wpexplorer"></i>Explorar</a></li>
            <li><a href="notificacoes.php"><i class="fas fa-bell"></i>Notificações</a></li>
            <li><a href="mensagens.php"><i class="fas fa-envelope"></i>Mensagens</a></li>
          </ul>
        </nav>

        <div class="dropdown">
          <img onclick="myfunction()" src="img/user-photo.png" class="img-btn" width="28px">
          <div id="submenu" class="submenu-conteudo">
            <a href="profile.php"><i class="fas fa-user"></i> Meu perfil</a>
            <a href="index.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
          </div>
        </div>
      </div>
    </header>

    <section>
      <div class="profile-cover">
      </div>

      <div class="profile-menu-info">
        <div class="menu-profile">
          <span class="profile-photo">
            <img src="img/user-photo.png">
          </span>
          <div>
            <h4>12</h4>
            <h5>Posts</h5>
          </div>
          <div>
            <h4>15 mi</h4>
            <h5>Seguidores</h5>
          </div>
          <div>
            <h4>256</h4>
            <h5>Seguindo</h5>
          </div>
          <div>
            <h4>5 mil</h4>
            <h5>Curtidas</h5>
          </div>
        </div>
      </div>

      <div class="profile-name">
        <div class="profile-info">
          <h3>Elon Musk</h3>
          <h4>@ElonMusk</h4>
        </div>
        <div class="trending"> <!-- Em alta -->
          <div class="trend-header">
              <h3>Em Alta</h3>
              <i class="fas fa-ellipsis-v"></i>
          </div>
          <div class="hashtags-trending"> <!-- Hashtags -->
            <div class="hashtag"> <!-- Hashtag 1 -->
              <a href="#">#MasterChef</a>
              <p>33,1 mil posts</p>
            </div>
            <div class="hashtag"> <!-- Hashtag 2 -->
              <a href="#">#BTS</a>
              <p>22,5 mil posts</p>
            </div>
            <div class="hashtag"> <!-- Hashtag 3 -->
              <a href="#">#Natal</a>
              <p>20 mil posts</p>
            </div>
            <div class="hashtag"> <!-- Hashtag 4 -->
              <a href="#">Ariana Grande</a>
              <p>16,6 mil posts</p>
            </div>
          </div>
          <div class="show-more-hastags"> <!-- Mostrar mais -->
            <a href="#">Ver tudo</a>
          </div>
        </div>
      </div>

      <div class="profile-posts">
        <div class="post"> <!-- Post 1 -->
          <div class="header-post">
            <img src="img/user-photo.png" width="40px">
            <div class="post-info">
              <h4>Elon Musk</h4>
              <p><i class="fas fa-clock" style="font-size: 9px"></i> 4 horas átras</p>
            </div>
          </div>
          <div class="menu-post">
            <i class="fas fa-ellipsis-v"></i>
          </div>
          <div class="content-post">
            <span>Acredito ser muito importante ter um ciclo de feedbacks, onde você está constantemente pensando sobre o que fez e como poderia ter feito melhor.</span>
          </div>
          <div class="analytics-post">
            <div class="inte curtir"><i class="fas fa-heart"></i><span> Gostei 22 mil</span></div>
            <div class="inte repostar"><i class="fas fa-redo-alt"></i><span> Repostar</span></div>
            <div class="inte comentar"><i class="fas fa-comment"></i><span> Comentar 1,1 mil</span></div>
            <div class="inte views"><i class="fas fa-eye"></i><span> Views 1,2 mi</span></div>
          </div>
        </div>
        <div class="post"> <!-- Post 2 -->
          <div class="header-post">
            <img src="img/user-photo.png" width="40px">
            <div class="post-info">
              <h4>Elon Musk</h4>
              <p><i class="fas fa-clock" style="font-size: 9px"></i> 4 horas átras</p>
            </div>
          </div>
          <div class="menu-post">
            <i class="fas fa-ellipsis-v"></i>
          </div>
          <div class="content-post">
            <span>O futuro da humanidade possui duas possibilidades: ou vai se tornar multiplanetário ou vai permanecer confinado em um planeta e eventualmente passar por um evento de extinção.</span>
          </div>
          <div class="analytics-post">
            <div class="inte curtir"><i class="fas fa-heart"></i><span> Gostei 22 mil</span></div>
            <div class="inte repostar"><i class="fas fa-redo-alt"></i><span> Repostar</span></div>
            <div class="inte comentar"><i class="fas fa-comment"></i><span> Comentar 1,1 mil</span></div>
            <div class="inte views"><i class="fas fa-eye"></i><span> Views 1,2 mi</span></div>
          </div>
        </div>
        <div class="show-more-posts"> <!-- Carregar mais posts -->
          <p>Carregar mais <i class="fas fa-arrow-down"></i></p>
        </div>
      </div>

      <div class="right">
        <div class="suggestions"> <!-- Sugestões -->
          <div class="sugg-menu">
              <h3>Sugestões</h3>
              <i class="fas fa-ellipsis-v"></i>
          </div>
          <div class="sugg-user"> <!-- User 1 -->
            <div class="user-name-box">
              <img src="img/chris-evans.png">
              <div>
                <h4>Chris Evans</h4>
                <p>@ChrisEvans</p>
              </div>
            </div>
            <div class="add-user-btn">
              <i class="far fa-plus-square"></i>
            </div>
          </div>
          <div class="sugg-user"> <!-- User 2 -->
            <div class="user-name-box">
              <img src="img/bill-gates.png">
              <div>
                <h4>Bill Gates</h4>
                <p>@BillGates</p>
              </div>
            </div>
            <div class="add-user-btn">
              <i class="far fa-plus-square"></i>
            </div>
          </div>
          <div class="sugg-user"> <!-- User 3 -->
            <div class="user-name-box">
              <img src="img/steve-jobs.png">
              <div>
                <h4>Steve Jobs</h4>
                <p>@stevejobs</p>
              </div>
            </div>
            <div class="add-user-btn">
              <i class="far fa-plus-square"></i>
            </div>
          </div>
          <div class="sugg-user"> <!-- User 3 -->
            <div class="user-name-box">
              <img src="img/mcarlsen.png">
              <div>
                <h4>M. Carlsen</h4>
                <p>@MCarlsen</p>
              </div>
            </div>
            <div class="add-user-btn">
              <i class="far fa-plus-square"></i>
            </div>
          </div>
          <div class="sugg-user"> <!-- User 4 -->
            <div class="user-name-box">
              <img src="img/alok.png">
              <div>
                <h4>Alok</h4>
                <p>@Alok</p>
              </div>
            </div>
            <div class="add-user-btn">
              <i class="far fa-plus-square"></i>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
