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
    <title>Hotel do Gabe - Login</title>
</head>
<body>
<div class="container">
    <div class="login">
        <form method="POST">
            <div class="mb-3">
                <label for="inputusuario" class="form-label">E-mail</label>
                <input type="text" id="inputusuario" name="email">
            </div>
            <div class="mb-3">
                <label for="inputsenha" class="form-label">Senha</label>
                <input type="password" id="inputsenha" name="password">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
            <p>Não possui um cadastro? <a href="cadastro.html">Clique aqui!</a></p>
        </form>
    </div>
</div>
<p><a href="index.html">Voltar</a></p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>
<?php 
require_once ("app/src/login.php");
if(isset($_POST['password'])){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = md5($_POST['password']);
    login($email,$password);
    
}
?>