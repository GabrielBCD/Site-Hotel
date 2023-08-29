<?php
session_start();
if(!isset($_POST['submit'])){
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Cadastro</title>
</head>
<body>
<div class="container">
    <div class="login">
        <form method="POST">
            <div class="mb-3">
                <h1><label for="inputusuario" class="form-label">Criar cadastro</label></h1>
            </div>
            <div class="mb-3">
                <label for="inputusuario" class="form-label">Nome</label>
                <input type="text" id="inputusuario" name="nome">
            </div>
            <div class="mb-3">
                <label for="inputcpf" class="form-label">CPF</label>
                <input type="text" id="inputusuario" name="cpf">
            </div>
            <div class="mb-3">
                <label for="inputemail" class="form-label">Email</label>
                <input type="text" id="inputusuario" name="email">
            </div>
            <div class="mb-3">
                <label for="inputsenha" class="form-label">Senha</label>
                <input type="text" id="inputusuario" name="password1">
            </div>
            <div class="mb-3">
                <label for="inputsenha" class="form-label">Repita a senha</label>
                <input type="password" id="inputsenha" name="password2">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="submit">Cadastrar</button>
            </div>
            <p>Possui um cadastro? <a href="login.php">Clique aqui!</a></p>
        </form>
    </div>
</div>
<p><a href="index.php">Voltar</a></p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
}else{

    require_once ("app/src/add_usuario.php");
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

        if ($password1 == $password2) {
            $name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $cpf= filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $hsenha = md5($password1);
            cadastrar($name, $cpf, $email, $hsenha);
        }else{
            header("Location: cadastro.php?erro=banco");
        }

}
?>