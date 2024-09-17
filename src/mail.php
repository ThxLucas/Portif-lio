<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <!--  Boxicons  
    https://boxicons.com/
    para não esquecer o site onde pegou os icones -->
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

      <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
      <title>The Xelas</title>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <img src="imagens/favicon.ico" class="logo_name"><div class="logo_name">The Xelas</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>


<ul class="nav_list">
    <li>
      <a href="#">
         <i class='bx bx-search' ></i>
         <input type="text" placeholder="Pesquisa">
      </a>
    </li>
    <li>
      <a href="index.html">
        <i class='bx bx-detail'></i>
        <span class="links_name">Index</span>
      </a>
    </li>

    <li>
      <a href="https://steamcommunity.com/groups/thexelas" target="_blank">
        <i class='bx bxl-steam'></i>
        <span class="links_name">Steam</span>
      </a>
    </li>
    <li>
      <a href="https://www.youtube.com/channel/UCwnoH6bZu6lqsowWeNES2qw" target="_blank">
        <i class='bx bxl-youtube'></i>
        <span class="links_name">Canal</span>
      </a>
    </li>
    <li>
      <a href="https://discord.gg/pdaTKJeYC8" target="_blank">
        <i class='bx bxl-discord-alt' ></i>
        <span class="links_name">Discord</span>
    </li>
    <li>
      <a href="chat.html">
        <i class='bx bx-conversation'></i>
        <span class="links_name">Mensagens</span>
      </a>
    </li>
    <li>
      <a href="jogo.html">
        <i class='bx bxs-invader'></i>
        <span class="links_name">jogo</span>
      </a>
    </li>
    <li>
      <a href="portifolio.html">
        <i class='bx bxs-component'></i>
        <span class="links_name">Portfólio</span>
      </a>
    </li>
    <li>
      <a href="info.html">
        <i class='bx bx-info-circle'></i>
        <span class="links_name">Informações</span>
      </a>
    </li>
    <li>
      <a href="contato.html">
        <i class='bx bxs-contact' ></i>
        <span class="links_name">Contato</span>
      </a>
    </li>
  </ul>
  </div>
  <!-- ================================== -->
  <div>
    <section>
      <link rel="stylesheet" type="text/css" href="css/style.css">
<div class="color"></div>
<div class="color"></div>
<div class="color"></div>
<div class="box">
  <div class="container">
    <div class="form">
      <h2>Login</h2>
      <form method="POST" enctype="multipart/form-data">
        <div class="inputBox">
        <input type="text" placeholder="Username" name="usuario"  value=
        <?php 
            if (isset($_COOKIE['usuario'])){ 
              echo $_COOKIE['usuario'];} 
          ?>>
        </div>

        <div class="inputBox">
        <input type="password" name="senha" placeholder="Password">
        </div>

        <div class="inputBox">
        <input type="submit" name="acessar" value="Login">
        </div>

        <p class="forget">Não possui conta? <a href="cadastro.html">Cadastre-se</a></p>

      </form>
    </div>
  </div>
</div>
</section>
  </div>


<script type="text/javascript" src="javascript/jasc.js"></script>
</body>
</html>

<?php
    require "conexao.php";
    session_start();

    if (isset($_POST['acessar'])) {
        if ((!$_POST['usuario'] == "") and (!$_POST['senha'] == "")) {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $validar = $conexao->prepare("select * from usuarios where usuario = :u");
            $validar->bindValue(":u", $usuario);
            $validar->execute();
            if ($validar->rowCount() <> 0) {
                $us = $validar->fetchAll(PDO::FETCH_OBJ);
                foreach ($us as $usuarios) {
                    $senha_bd = $usuarios->senha;
                    $id = $usuarios->id;
                    $usuario = $usuarios->usuario;
                    $foto = $usuarios->foto;
                }
                if (password_verify($senha, $senha_bd)) {
                    $_SESSION['logado'] = true;
                    $edit = $conexao->prepare("update usuarios set status = 1 where id = $id");
                    $edit->execute();
                    $_SESSION['id'] = $id;
                    $_SESSION['usuarios'] = $usuario;
                    $_SESSION['foto'] = $foto;

                    setcookie("usuario", $usuario, time() + (86400 * 30));
                    header("location:chat.php");
                } else {
                    echo "<h1>ERRO - usuario ou senha incorretos</h1>";
                    echo "<a href='login.php'> << Voltar </a>";
                }
            } else {
                echo "<h1>ERRO - Usuario não Cadastrado</h1>";
                echo "<a href='login.php'> << Voltar </a>";
                }
        } else {
            echo "<h1> Usuário ou senha não informados </h1>";
            echo "<h3> <a href='login.php'> Voltar </a> </h3>";
        }
        
    } else {
        echo "<h1> Acesso negado </h1>";
        echo "<h3> <a href='login.php'> Voltar </a> </h3>";
    }

?>

