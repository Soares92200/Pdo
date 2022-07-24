<?php
	header('Content-type: text/html; charset=iso-8859-1');

	session_start();

	if(!isset($_SESSION['Pdo'])){
        header("Location: Login.php");
    }

	require_once("Navbar.php");
	require_once("Controle/Controle.php");

	$ctrl = new ControleUsuario;

	echo "<link rel='stylesheet' type='text/css' href='Pdo.css'>";

	$dd = $_GET['id'];
	$_SESSION['idl']= (int)$_GET['id'];

	$itens = $ctrl->livro($dd);

	$a = $ctrl->localLivro($dd);
	
	$b = implode('', $a);

	echo "<html lang='pt'>";

	echo "
	<body style='background-color: #222;'>
	<div class='boxComp'>
			<div class='compra'>
		";

	    if($itens != NULL){
	        echo "<table border='1'>
	                <tr>";
	            foreach($itens as $key => $atual){
		            echo "<th>$key</th>";
		        }
	            echo "</tr>
	            ";
	        foreach($itens as $key => $atual){
	            echo "<td>$atual</td>";
	        }  

		    echo "
	    		<tr colspan='3'>
	    			<img src={$b}>
	    		</tr>
	    	</table>
	    	<div class='selct'>
		    	<form action='Controle/Confirm.php' method='post'>
		    		<p>Forma de pagamento</p>
		    		<p>
		    			<select name='pag'>
		    				<option value='1'>dinheiro</option>
		    				<option value='2'>catao de credito</option>
		    				<option value='3'>boleto bancario</option>
		    				<option value='4'>cheque</option>
		    				<option value='5'>transferencia bancaria</option>
		    			</select>
		    			<input type='submit' value='Confirme'>
		    		</p>
		    	</form>
		    </div>
	    	";
	    }

    echo "
    	</div>
    	
    </div>
    </body>
    ";
	require_once("footer.php");
?>