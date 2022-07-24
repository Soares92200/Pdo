<?php
    require_once("Controle/Controle.php");

    header('Content-type: text/html; charset=iso-8859-1');

    $ctrl = new ControleUsuario();
    $itens = $ctrl->historico($id);

    $cnt = count($itens);

    $login = $_SESSION['login'];

    //var_dump($cnt);

    echo "<table border=1>";
    if($cnt != 0){
        echo "
        <th colspan='5'><h3>Seus Registros, $login</h3></th>
        <tr>
            <th>Nome</th>
            <th>Genero</th>
            <th>Valor</th>
            <th>Pagamento</th>
        </tr>";

        for ($i = 0; $i < $cnt; $i++) { 
            echo "<tr>
                <td align='center'>{$itens[$i]['nome']}</td>
                <td align='center'>{$itens[$i]['genero']}</td>
                <td align='center'>{$itens[$i]['valor']}</td>
                <td align='center'>{$itens[$i]['pag']}</td>
                <td><a href='Controle/apagar.php?id={$itens[$i]['id']}'>Apagar</a></td>
            </tr>";
        }
        
    }else{
        echo "<tr><h4>Sem compras registrada, $login.</h4></tr>";
    }
    echo "</table>
        <br />
    ";
?>