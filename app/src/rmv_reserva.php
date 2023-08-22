<?php
session_start();
require("conexao.php");
if(isset($_POST['id'])){

    $id = $_GET['id'];

    try {

        $lista = $conexao->prepare("delete from ficha where ficha.id = '$id'");
        $lista->execute();
        $itens = $lista->fetchAll(PDO::FETCH_OBJ);
        header("Location:menu.php");

    } catch (Exception $e) {
        header("location:erro404.php?erro=erro");

    }
}
?>