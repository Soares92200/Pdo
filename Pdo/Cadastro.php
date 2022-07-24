<?php
require_once("Navbar.php");

echo "<link rel='stylesheet' type='text/css' href='Pdo.css'>";

	echo "
	<body id='blk'>
	<div class='cadastro'>
		<form action='Controle/Inserir.php' method='post' id='cadastro'>
			<label>Nome</label>
			<input type='text' name='nome' id='nome' />
	        <label>Usuário</label>
	        <input type='text' name='usuario' id='usuario' required/> 
	        <label>E-mail</label>
	        <input type='text' name='email' id='email' />
	        <label>Telefone</label>
	        <input type='text' name='telefone' id='telefone' />
	        <label>Senha</label>
	        <input type='password' name='senha' id='senha' required />
	        <label>Confirmação</label>
	        <input type='password' name='confirm' id='confirm' required />
	        <input type='submit' name='submit' id='cadastrar' value='Cadastrar' />
	    </form>
	</div>
	</body>
	";

require_once("footer.php");
?>