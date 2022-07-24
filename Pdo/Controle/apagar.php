<?php
	session_start();

	foreach ($_SESSION['Pdo'] as $key => $value) {
        $id = (int)$value;
    }

    $idl = intval($_GET['id']);

    require_once("Controle.php");
    $controle = new ControleUsuario();
    if($controle->deletar($idl)){
        header("Location: ../Pdo_aqui.php");
    }else{
        die();
    }
?>