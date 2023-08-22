<?php
    session_start();
    require("conexao.php");
    if(isset($_GET['id'])){
    
        $id = $_GET['id'];
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $checkin = filter_input(INPUT_POST, 'checkin', FILTER_SANITIZE_SPECIAL_CHARS);
        $checkout = filter_input(INPUT_POST, 'checkout', FILTER_SANITIZE_SPECIAL_CHARS);
        $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
        $quarto = filter_input(INPUT_POST, 'quarto', FILTER_SANITIZE_SPECIAL_CHARS);
    
          
        try {

            $lista = $conexao->prepare("update reserva set nome = :a, checkin = :b, checkout = :c, valor = :d, quarto = :e, status = :f where reserva.id = :id");
            $lista->bindValue(':a', $nome);
            $lista->bindValue(':b', $checkin);
            $lista->bindValue(':c', $checkout);
            $lista->bindValue(':d', $valor);
            $lista->bindValue(':e', $quarto);
            $lista->bindValue(':f', $status = 1);
            $lista->bindValue(':id', $id);
            $lista->execute();
    
            header("location:menu.php");
        } catch (Exception $e) {
            header("location:erro404.php?erro=erro");
    
        }
    }
    ?>