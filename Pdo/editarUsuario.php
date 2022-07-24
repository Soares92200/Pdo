<?php
	session_start();

    $_SESSION['Cnt'] = 0;

    if(!isset($_SESSION['Pdo'])){
        header("Location: Login.php");
    }

    require_once("Controle/Controle.php");
    $controle = new ControleUsuario();
    $id = intval($_GET['id']);

    $_SESSION['idUsuario'] = (int)$id;
    
    $itens = $controle->selecionarPid($id);

    $_SESSION['usuario'] = $itens[0]['usuario'];

    require_once("Navbar.php");

    echo "<link rel='stylesheet' type='text/css' href='Pdo.css'>";

	echo "
	<body id='blk'>
	<div class='cadastro'>
		<form action='Controle/edit.php' method='post' id='atualizar'>
			<label>Nome</label>
			<input type='text' name='nome' value='{$itens[0]['nome']}' id='nome' />
	        <label>Usuário</label>
	        <input type='text' name='usuario' value='{$itens[0]['usuario']}' id='usuario' required/> 
	        <label>E-mail</label>
	        <input type='text' name='email' value='{$itens[0]['email']}' id='email' />
	        <label>Telefone</label>
	        <input type='text' name='telefone' value='{$itens[0]['telefone']}' id='telefone' />
	        <label>Senha Antiga</label>
	        <input type='password' name='senhaAnt' id='senhaAnt' required />
	        <label>Nova Senha</label>
	        <input type='password' name='nvsenha' id='nvsenha' required />
	        <label>Confirm</label>
	        <input type='password' name='confirm' id='confirm' required />
	        <input type='submit' name='submit' id='Atualizar' value='Atualizar' />
	    </form>
	</div>
	</body>
	";

require_once("footer.php");
?>









