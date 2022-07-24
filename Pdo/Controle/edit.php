<?php
session_start();

$idUser = (int)$_SESSION['idUsuario'];

require_once("Controle.php");
require_once("../Modelo/Usuario.php");
try{
    $usuario = new Usuario();
    $usuario->setNome($_POST['nome']);
    $usuario->setUsuario($_SESSION['usuario']);
    $usuario->setEmail($_POST['email']);
    $usuario->setTelefone($_POST['telefone']);
    $usuario->setSenha($_POST['senhaAnt']);
    $control = new ControleUsuario();
    if($_POST['confirm'] == $_POST['nvsenha']){
        if ($control->verificar($usuario)) {
            $usuario->setSenha($_POST['nvsenha']);
            $usuario->setUsuario($_POST['usuario']);
            if($control->atualizar($idUser,$usuario)){
                header("Location: ../Pdo_aqui.php");
                $_SESSION['login'] = $_POST['usuario'];
            }else{
                echo "<script>alert('Erro ao atualizar!'); history.back();</script>";
            }
        }else{
            echo "<script>alert('Você não está no banco!'); history.back();</script>";
        }
    }else{
        $_SESSION['Cnt']=$_SESSION['Cnt']+1;
        if($_SESSION['Cnt'] < 4){
            echo "<script>alert('Senha e confirmação divergem!'); history.back();</script>";
        }else{
            echo "<script>alert('Acabou suas chances!');</script>";
            session_destroy();
            header("Location: ../index.php");
        }
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
