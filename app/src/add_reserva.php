<?php
session_start();
require("conexao.php");
if(isset($_POST['nome'])){


    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $checkin = filter_input(INPUT_POST, 'checkin', FILTER_SANITIZE_SPECIAL_CHARS);
    $checkout = filter_input(INPUT_POST, 'checkout', FILTER_SANITIZE_SPECIAL_CHARS);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
    $quarto = filter_input(INPUT_POST, 'quarto', FILTER_SANITIZE_SPECIAL_CHARS);

    try {

        $lista = $conexao->prepare("insert into reserva (nome, checkin, checkout, valor, quarto) values(:a, :b, :c, :d, :e, :f)");
        $lista->bindValue(':a', $nome);
        $lista->bindValue(':b', $checkin);
        $lista->bindValue(':c', $checkout);
        $lista->bindValue(':d', $valor);
        $lista->bindValue(':e', $quarto);
        $lista->bindValue(':f', $status = 1);
        $lista->execute();

        header("location:./index.php");
    } catch (Exception $e) {
        header("location:index.php?erro=erro");

    }
}
?>