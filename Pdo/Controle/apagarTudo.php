<?php
	session_start();

	foreach ($_SESSION['Pdo'] as $key => $value) {
        $id = (int)$value;
    }

    require_once("Controle.php");
    $controle = new ControleUsuario();
    if($controle->deletarTudo($id)){
        header("Location: ../Pdo_aqui.php");
    }else{
        die();
    }
?>