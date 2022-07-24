<?php
	header('Content-type: text/html; charset=iso-8859-1');

	session_start();

    $_SESSION['Cnt'] = 0;

    if(!isset($_SESSION['Pdo'])){
        header("Location: Login.php");
    }
	
	require_once("Navbar.php");
	require_once("Controle/Controle.php");

	$ctrl = new ControleUsuario;

	$id = $_GET['id'];

	$a = $ctrl->localLivro($id);
	
	$b = implode('', $a);
	
	$c = $ctrl->descLivro($id);

	$d = implode('', $c);


	echo "<link rel='stylesheet' type='text/css' href='Pdo.css'>";

	echo "
	<div class='box'>
		<div class='uly'>
			<div class='col col-2'><img src={$b}></div>
			<div class='col col-2'><p>{$d}</p></div>
		</div>
	</div>
	";
	require_once("footer.php");
?>