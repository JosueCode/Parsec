<?php
  session_start();
  if (!isset($_GET['name']) || empty($_GET['name'])){
    if ( isset($_SESSION['email']) and isset($_SESSION['password']) ) {
      header("location:homepage.php?name=".$_SESSION['uname']);
    }else{
      session_destroy();
      unset($_SESSION['uname']);
      unset($_SESSION['email']);
      unset($_SESSION['password']);
      header("location:index.php");
    }
  }else{
    $user_name = $_GET['name'];
    $connect = mysqli_connect('localhost','root','','parsec_db');
    $result = mysqli_query($connect, "SELECT name, user_name FROM `users` WHERE user_name='$user_name'");
    $array = mysqli_fetch_array($result);
    $name = $array['name'];
  }

  include('includes/header.php');
?>

    <section>
      <div class="left">
        <div class="profile-info-box"> <!-- Informação do perfil -->
          <div id="header-profile-background">
          </div>
          <div class="info-profile">
            <img src="img/user-photo.png" width="80px">
            <h3><?php echo $name; ?></h3>
            <p>@<?php echo $user_name; ?></p>
          </div>
          <div class="seguidores"> <!-- Seguidores -->
            <h4>Seguidores</h4>
            <p>23,5 mi</p>
          </div>
          <div class="seguindo"> <!-- Seguindo -->
            <h4>Seguindo</h4>
            <p>75</p>
          </div>
          <div class="view-profile"> <!-- Visualizar perfil -->
            <a href="profile.html"><span>Ver perfil</span></a>
          </div>
        </div>
        <?php
          include('includes/copyright.php');
        ?>
      </div>

      <div class="middle">
        <div class="write-new-post"> <!-- Escrever novo post -->
          <img src="img/user-photo.png" width="35px">
          <input type="text" name="new-post" placeholder="Escrever uma nova postagem">
        </div>

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
              <div class="inte curtir"><i class="fas fa-heart"></i><span> Gostei 222 mil</span></div>
              <div class="inte repostar"><i class="fas fa-redo-alt"></i><span> Repostar</span></div>
              <div class="inte comentar"><i class="fas fa-comment"></i><span> Comentar 1,1 mil</span></div>
              <div class="inte views"><i class="fas fa-eye"></i><span> Views 1,2 mi</span></div>
          </div>
        </div>
        <div class="post"> <!-- Post 2 -->
          <div class="header-post">
            <img src="img/steve-jobs.png" width="40px">
            <div class="post-info">
              <h4>Steve Jobs</h4>
              <p><i class="fas fa-clock" style="font-size: 9px"></i> 8 anos átras</p>
            </div>
          </div>
          <div class="menu-post">
            <i class="fas fa-ellipsis-v"></i>
          </div>
          <div class="content-post">
            <span>Às vezes, quando se inova, cometemos erros. É melhor admiti-los rapidamente e continuar com outras inovações.</span>
          </div>
          <div class="analytics-post">
              <div class="inte curtir"><i class="fas fa-heart"></i><span> Gostei 350 mil</span></div>
              <div class="inte repostar"><i class="fas fa-redo-alt"></i><span> Repostar</span></div>
              <div class="inte comentar"><i class="fas fa-comment"></i><span> Comentar 10,8 mil</span></div>
              <div class="inte views"><i class="fas fa-eye"></i><span> Views 13 mi</span></div>
          </div>
        </div>
        <div class="post"> <!-- Post 3 -->
          <div class="header-post">
            <img src="img/mcarlsen.png" width="40px">
            <div class="post-info">
              <h4>M. Carlsen</h4>
              <p><i class="fas fa-clock" style="font-size: 9px"></i> 1 dia átras</p>
            </div>
          </div>
          <div class="menu-post">
            <i class="fas fa-ellipsis-v"></i>
          </div>
          <div class="content-post">
            <span>Os computadores são os únicos desafiantes que não têm uma desculpa na ponta da língua quando eu os derroto.</span>
          </div>
          <div class="analytics-post">
              <div class="inte curtir"><i class="fas fa-heart"></i><span> Gostei 10 mil</span></div>
              <div class="inte repostar"><i class="fas fa-redo-alt"></i><span> Repostar</span></div>
              <div class="inte comentar"><i class="fas fa-comment"></i><span> Comentar 2 mil</span></div>
              <div class="inte views"><i class="fas fa-eye"></i><span> Views 200 mil</span></div>
          </div>
        </div>
        <div class="show-more-posts"> <!-- Carregar mais posts -->
          <p>Carregar mais <i class="fas fa-arrow-down"></i></p>
        </div>
      </div>

      <div class="right">
        <?php
          include('includes/suggestions.php');
        ?>
        <?php
          include('includes/trending.php');
        ?>

      </div>
    </section>
<?php
  include('includes/footer.php');
?>