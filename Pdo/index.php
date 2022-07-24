<?php
  require_once("Navbar.php");

  echo "<link rel='stylesheet' type='text/css' href='Pdo.css'>";
  
  echo "
  <body style='background-color: #000;'>
  <div class='l'>
    <h1 id='d' style='font-size: 50px; padding-top: 50px'>PdO</h1>
    <p style='font-size: 20px;'>Ponto das Oportunidades!</p>
  </div>

  <div class='row'>
    <div class='col col-3'>
      <div class='teste'>
        <img src='img/viagem.jpg'>
        <h3 style='margin-block: 5px;'>Viagem ao centro da terra</h3>
        <a href='Desc.php?id=1' style='color: #cc0000; padding-right: 10px'>Descrever</a>
        <a href='Encomenda.php?id=1'style='color: blue;'>Encomendar</a>
      </div>
    </div>
    <div class='col col-3'>
      <div class='teste'>
        <img src='img/tgd.jpg'>
        <h3 style='margin-block: 5px;'>Tragédia de Macbeth</h3>
        <a href='Desc.php?id=2' style='color: #cc0000; padding-right: 10px'>Descrever</a>
        <a href='Encomenda.php?id=2'style='color: blue;'>Encomendar</a>
      </div>
    </div>
    <div class='col col-3'>
      <div class='teste'>
        <img src='img/sat.jpg'>
        <h3 style='margin-block: 5px;'>Sátiras</h3>
        <a href='Desc.php?id=3'style='color: #cc0000; padding-right: 10px'>Descrever</a>
        <a href='Encomenda.php?id=3'style='color: blue;'>Encomendar</a>
      </div>
    </div>
  </div>

  <div class='row'>
    <div class='col col-3'>
      <div class='teste'>
        <img src='img/roma.jpg'>
        <h3 style='margin-block: 5px;'>Delicioso problema</h3>
        <a href='Desc.php?id=4'style='color: #cc0000; padding-right: 10px'>Descrever</a>
        <a href='Encomenda.php?id=4'style='color: blue;'>Encomendar</a>
      </div>
    </div>
    <div class='col col-3'>
      <div class='teste'>
        <img src='img/hor.png'>
        <h3 style='margin-block: 5px;'>O Exorcista</h3>
        <a href='Desc.php?id=5'style='color: #cc0000; padding-right: 10px'>Descrever</a>
        <a href='Encomenda.php?id=5'style='color: blue;'>Encomendar</a>
      </div>
    </div>
    <div class='col col-3'>
      <div class='teste'>
        <img src='img/cron.png'>
        <h3 style='margin-block: 5px;'>Crônicas e Brisas Desnudando a Alma</h3>
        <a href='Desc.php?id=6'style='color: #cc0000; padding-right: 10px'>Descrever</a>
        <a href='Encomenda.php?id=6'style='color: blue;'>Encomendar</a>
      </div>
    </div>
  </div>

  <div class='row'>
    <div class='col col-3'>
      <div class='teste'>
        <img src='img/cont.jpg'>
        <h3 style='margin-block: 5px';>A Bela e a Fera</h3>
        <a href='Desc.php?id=7'style='color: #cc0000; padding-right: 10px'>Descrever</a>
        <a href='Encomenda.php?id=7'style='color: blue;'>Encomendar</a>
      </div>
    </div>
    <div class='col col-3'>
      <div class='teste'>
        <img src='img/avt.png'>
        <h3 style='margin-block: 5px;'>Anjos e Demônios</h3>
        <a href='Desc.php?id=8'style='color: #cc0000; padding-right: 10px'>Descrever</a>
        <a href='Encomenda.php?id=8'style='color: blue;'>Encomendar</a>
      </div>
    </div>
    <div class='col col-3'>
      <div class='teste'>
        <img src='img/aut.png'>
        <h3 style='margin-top: 10px; margin-block: 5px;'>A Autobiografia de Martin Luther King</h3>
        <a href='Desc.php?id=9'style='color: #cc0000; padding-right: 10px'>Descrever</a>
        <a href='Encomenda.php?id=9'style='color: blue;'>Encomendar</a>
      </div>
    </div>
  </div>
  <body>
  ";
  require_once("footer.php");
?>