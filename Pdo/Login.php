<?php
	session_start();

	if(isset($_SESSION['Pdo'])){
		header("Location: Pdo_aqui.php");
	}

echo "<link rel='stylesheet' type='text/css' href='Pdo.css'>";

require_once("Navbar.php");

echo "
<body id='blk'>
	<div class='box'>
		<form action='Controle/Verificar.php' method='post' id='inbox'>
	        <label for='login' id='login'>Login</label>
	        <input type='text' name='usuario' required /> 
	        <label for='senha'>Senha</label>
	        <input type='password' name='senha' required />
	        <input type='submit' name='submit' value='Verificar' />
	        <a href='Cadastro.php'><h6>Cadastrar-me</h6></a>
	    </form>
	</div>
</body>
	";

require_once("footer.php");
?>