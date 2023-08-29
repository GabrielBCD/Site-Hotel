<?php

function cadastrar(String $nome, String $cpf, String $email, String $hsenha){
    require_once("conexao.php");
    if(isset($_POST['nome'])){
        try {
    var_dump($conexao);
    $banco = conectar();
            $lista = $banco->prepare("insert into usuario (nome, cpf, email, senha) values(:a, :b, :c, :d)");
            $lista->bindValue(':a', $nome);
            $lista->bindValue(':b', $cpf);
            $lista->bindValue(':c', $email);
            $lista->bindValue(':d', $hsenha);
            $lista->execute();
            
            $_SESSION["user"]=$nome;
			$status = "ativo";
			$_SESSION["status"]=$status;
            header("location:./index.php");
        } catch (Exception $e) {
            header("location:index.php?erro=erro");
    
        }
    }

}

?>