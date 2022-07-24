<?php
    session_start();

if(!isset($_SESSION['Pdo'])){
        header("Location: ../Login.php");
}else{

    $a = $_SESSION['idl'];
    $b = $_SESSION['Pdo'];
    $c = (int)$_POST['pag'];

    foreach ($b as $key => $value) {
        $b = (int)$value;
    }

	require_once('Controle.php');
	require_once('../Modelo/historico.php');
	try{
        $historico = new Historico();
        $historico->setIdUsuario($b);
        $historico->setIdlivro($a);
        $historico->setIdPag($c);
        $control = new ControleUsuario();
        if($control->compra($historico)){
            echo "<script>alert('Compra registrada!');</script>";
            header("Location: ../Pdo_aqui.php");
        }else{
            echo "<script>alert('Tivemos problemas técnicos!'); history.back();</script>";
        }
    }catch(Exception $e){
        echo "Erro: $e->getMessage()";
    }
}
?>