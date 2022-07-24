<?php
    require_once("Conect.php");
    //require_once("Modelo/Usuario.php");
    class ControleUsuario{

        //Seleciona toda tabela

        function selecionarTodos(){
            try{
                $con = new Conexao();
                $cmd = $con->getConexao()->prepare("SELECT * FROM usuario;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }

        //Seleciona uma pessoa específica

        function selecionarPid($id){
            try{
                $conexao = new Conexao();   
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuario WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }

        //Selecionar Livro

        function localLivro($id){
            try{
                $conexao = new Conexao();   
                $cmd = $conexao->getConexao()->prepare("SELECT local FROM livros WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->execute();
                $resultado = $cmd->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }

        function descLivro($id){
            try{
                $conexao = new Conexao();   
                $cmd = $conexao->getConexao()->prepare("SELECT descricao FROM livros WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->execute();
                $resultado = $cmd->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }

        function livro($id){
            try{
                $conexao = new Conexao();   
                $cmd = $conexao->getConexao()->prepare("SELECT nome,genero,valor FROM livros WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->execute();
                $resultado = $cmd->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }


        //Atualiza a tabela

        function atualizar($id, $usuario){
            try{
                $conexao = new Conexao();
                $nome = $usuario->getNome();
                $user = $usuario->getUsuario();
                $email = $usuario->getEmail();
                $telefone = $usuario->getTelefone();
                $senha = $usuario->getSenha();
                $cmd = $conexao->getConexao()->prepare("UPDATE usuario SET nome = :n, usuario = :u, email = :e, telefone = :t,senha = :s WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->bindParam("n", $nome);
                $cmd->bindParam("u", $user);
                $cmd->bindParam("e", $email);
                $cmd->bindParam("t", $telefone);
                $cmd->bindParam("s", md5($senha));              
                if($cmd->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
	            }
        }

        //Deleta--------------------------------------------------------------

        function deletar($id){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("DELETE FROM historico WHERE id=:id;");
                $cmd->bindParam("id", $id);
                if($cmd->execute()){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "ERRO do (deletar do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (deletar) geral:{$e->getMessage()}";
            }
        }

        function deletarTUdo($id){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("DELETE FROM historico WHERE idUsuario=:id;");
                $cmd->bindParam("id", $id);
                if($cmd->execute()){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "ERRO do (deletar do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (deletar) geral:{$e->getMessage()}";
            }
        }

        //Retorna a tabela em array

        function buscarDados($usuario) {
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT id FROM usuario WHERE usuario=:usuario;");
                $cmd->bindParam(":usuario",$usuario->getUsuario());
                $cmd->execute();
                $res = $cmd->fetch(PDO::FETCH_ASSOC);
                return $res;
                $conexao->fecharConexao();
            }catch(PDOException $e){
                echo "ERRO do (buscarDados do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (buscarDados) geral:{$e->getMessage()}";
            }
        }

        //Verifica se existe na tabela

        function verificar($usuario){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuario WHERE usuario = :usuario && senha = :senha;");
                $cmd->bindParam(":usuario",$usuario->getUsuario());
                $cmd->bindParam(":senha",md5($usuario->getSenha()));
                $cmd->execute();
                if($cmd->rowCount() == 1){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "ERRO do (verificar do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (verificar) geral:{$e->getMessage()}";
            }
        }

        //Cadastra pessoas

        function cadastrarPessoa($usuario){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM  usuario WHERE usuario = :usuario;");
                $cmd->bindParam(":usuario",$usuario->getUsuario());
                $cmd->execute();
                if($cmd->rowCount() >0 ){
                    $conexao->fecharConexao();
                    return false;
                }else{
                    $cmd = $conexao->getConexao()->prepare("INSERT INTO usuario (nome,usuario,email,telefone,senha) VALUES(:n,:u,:e,:t,:s);");
                    $cmd->bindParam("n",$usuario->getNome());
                    $cmd->bindParam("u",$usuario->getUsuario());
                    $cmd->bindParam("e",$usuario->getEmail());
                    $cmd->bindParam("t",$usuario->getTelefone());
                    $cmd->bindParam("s",md5($usuario->getSenha()));
                    if($cmd->execute()){
                            $conexao->fecharConexao();
                            return true;
                    }else{
                            $conexao->fecharConexao();
                            return false;
                    }
                }
            }catch(PDOException $e){
                echo "ERRO do (cadastrarPessoa do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (cadastrarPessoa) geral:{$e->getMessage()}";
            }
        }

        function compra($usuario){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("INSERT INTO historico (idUsuario, idlivro, idPag) VALUES(:iu,:il,:ip);");
                $cmd->bindParam(":iu",$usuario->getIdUsuario());
                $cmd->bindParam(":il",$usuario->getIdlivro());
                $cmd->bindParam(":ip",$usuario->getIdPag());
                if($cmd->execute()){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "ERRO do (compra do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (cadastrarPessoa) geral:{$e->getMessage()}";
            }
        }

        function sair(){
            try{
                session_destroy();
                header("Location: ../Login.php");
            }catch(PDOException $e){
                echo "ERRO do (cadastrarPessoa do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (cadastrarPessoa) geral:{$e->getMessage()}";
            }
        }
        function historico($id){
            try{
                $con = new Conexao();   
                $cmd = $con->getConexao()->prepare("SELECT historico.id,livros.nome,livros.genero,livros.valor, pag.pag FROM usuario join historico on usuario.id=historico.idUsuario join livros on livros.id=historico.idlivro join pag on pag.id=historico.idPag WHERE idUsuario=:id;");
                $cmd->bindParam("id", $id);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }

    }
?>
