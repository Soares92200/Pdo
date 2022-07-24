<?php
    session_start();

	require_once('Controle.php');
	require_once('../Modelo/Usuario.php');
	try{
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setUsuario($_POST['usuario']);
        $usuario->setEmail($_POST['email']);
        $usuario->setTelefone($_POST['telefone']);
        $usuario->setSenha($_POST['senha']);
        if($_POST['senha'] == $_POST['confirm']){
            $control = new ControleUsuario();
            if($control->cadastrarPessoa($usuario)){
                $_SESSION['Pdo'] = $control->buscarDados($usuario);
                $_SESSION['login'] = $_POST['usuario'];
                header("Location: ../Pdo_aqui.php");
            }else{
                echo "<script>alert('Usuário já existe!'); history.back();</script>";
            }
        }else{
            echo "<script>alert('Confimação diferente da senha!'); history.back();</script>";
        }
    }catch(Exception $e){
        echo "Erro: $e->getMessage()";
    }
?>