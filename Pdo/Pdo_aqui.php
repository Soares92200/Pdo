<?php
    session_start();

    $_SESSION['Cnt'] = 0;

    if(!isset($_SESSION['Pdo'])){
        header("Location: Login.php");
    }

    foreach ($_SESSION['Pdo'] as $key => $value) {
        $id = (int)$value;
    }

    require_once("Navbar.php");

	echo "<link rel='stylesheet' type='text/css' href='Pdo.css'>";

	echo "
    <input type='checkbox' id='men'>
    <label for='men'><img src='img/l.png' id='ic'></label>

    <nav class='men'>
        <ul>
            <li><a href='Controle/sair.php'>Sair</a></li>
            <li><a href='editarUsuario.php?id={$id}'>Atualizar Conta</a></li>
            <li><a href='Controle/apagarTudo.php'>Apagar Registros</a></li>
        </ul>
    </nav>";

    echo "<div class='tabela'>";
        require_once("Tabela.php"); 
    echo "</div>";

    require_once("footer.php");
?>