<?php

if (!isset($_GET["mensagem"])) {
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
<title>Thx Lucas</title>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2888368994974228"
     crossorigin="anonymous"></script>
      <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css\style.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
      <link rel="icon" type="imagem/png" href="imagens/favicon.ico" />
      <!--  Boxicons  
      https://boxicons.com/
      para não esquecer o site onde pegou os icones -->
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<style>
body,h1,h2,h3,h4,h5,h6 {
  font-family: "Lato", sans-serif;


}
h5{
  text-align: justify;
}
.thx-bar,h1,button {
  font-family: "Montserrat", sans-serif;
}
.fa-anchor,.fa-coffee {
  font-size:200px
}
@media only screen and (max-width: 480px){
  img{
  width:100%;
}
}
</style>

</head>
<body>

<!-- Navbar -->
<div class="thx-top">
  <div class="thx-bar thx-blue
   thx-card thx-left-align thx-large" style="position:fixed;">
    <a class="thx-bar-item thx-button thx-hide-medium thx-hide-large thx-right thx-padding-large thx-hover-white thx-large thx-blue
    " href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>


    <a href="index.html" class="thx-bar-item thx-button thx-padding-large thx-white">
      <i class='bx bx-detail'></i>
    </a>
    <a href="info.html" class="thx-bar-item thx-button thx-padding-large thx-white">
      <i class='bx bx-info-circle'></i>
    </a>
    <a href="contato.html" class="thx-bar-item thx-button thx-padding-large thx-white">
      <i class='bx bxs-contact' ></i>
    </a>
    <a href="https://steamcommunity.com/groups/thexelas" class="thx-bar-item thx-button thx-padding-large thx-white">
      <i class='bx bxl-steam'></i>
      <!--<span class="links_name">Steam</span>-->
    </a>

    <a href="https://www.youtube.com/channel/UCwnoH6bZu6lqsowWeNES2qw" class="thx-bar-item thx-button thx-padding-large thx-white">
      <!-- <span class="links_name">canal</span> -->
      <i class='bx bxl-youtube'></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  
</div>


<!-- Header -->
<header class="thx-container thx-blue thx-center" style="padding:128px 16px">
  <img src="imagens/the_xelas.png"  style="">
  <h1 class="thx-margin thx-jumbo">Portifólio</h1>
  <p class="thx-xlarge"></p>

</header>

<!-- First Grid -->
<div class="thx-row-padding thx-padding-64 thx-container">
  <div class="thx-content">
    <div class="thx-twothird">
      <h1>Sobre</h1>
      <h5 class="thx-padding-32" style="text-decoration: justify">Me chamo Lucas atuo atualmente voltado para o desenvolvimento e manutenção em geral nos diversos tipos de sistemas; no momento a programação para a web tem se tornado meu maior contato com o mercado de desenvolvimento, onde atendo uma gama muito maior de pessoas, não só da minha região, como também diversos clientes remotamente. Meus trabalhos realizados estão apresentados neste site e no GitHub para facilitar a demonstração do mesmo</h5>

      <h5 class="thx-padding-32">Possuo diversas habilidades voltadas para a área da informação, desenvolvo muito meus designs e tenho todo o cuidado em minhas tomadas de decisões, mantendo o devido contato e informando sempre sobre o desenvolvimento dos projetos, busco manter um padrão de qualidade sempre bem elevado e visando que todas as minhas qualidades possam ser demonstradas e as dúvidas esclarecidas ao fim desse portifólio.</h5>
      
    </div>

    <div class="thx-third thx-center">
      <i class="fa fa-anchor thx-padding-64 thx-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="thx-row-padding thx-light-grey thx-padding-64 thx-container">
  <div class="thx-content">

    <div class="thx-twothird">
      <h1>Mensagem</h1>
      <h5 class="thx-text-grey">Deixe sua mensagem:</h5>

      <p class="thx-text-grey"><textarea  rows="4" cols="50" id="message-b381" name="mensagem" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required=""></textarea></p>
      <button class="thx-button thx-black" name=""><a href="mail.php">Enviar</a></button>
    </div>
  </div>
</div>
<!-- Footer -->
<div class="thx-container thx-black thx-center thx-row-padding thx-opacity thx-padding-64">

<p>Feito por</a></p>
 <address>
         <strong>Thx, Lucas</strong><br /> Niquelândia - GO, Brasil<br />lucasnalve3000@gmail.com<br /> 
      </address>
</div>

</body>
</html>
<?php 

}
