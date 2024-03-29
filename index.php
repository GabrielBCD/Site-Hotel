<?php 
session_start();
if (isset($_GET['erro'])) { 
    if ($_GET['erro'] == "usererrado") { 
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Usuário ou senha incorreta</strong> insira os dados novamente
        </div>"; 
    }
    if ($_GET['erro'] == "nada") { 
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Campos em branco</strong> insira os dados novamente de forma correta!
        </div>"; 
    }
    if ($_GET['erro'] == "banco") { 
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Problemas no banco</strong> aguarde um instante e insira os dados novamente
        </div>"; 
    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/sec-inicio.css">
    <link rel="stylesheet" href="assets/css/sec-acomod.css">
    <link rel="stylesheet" href="assets/css/sec-servicos.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/nav.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/imagem/icone.ico" type="image/x-icon">

    <title>Hotel do Gabes</title>
</head>

<body>
    <!-- Inicio da NavBar -->
    <header>
        <div class="logo">Hotel do Gabe</div>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <nav class="nav-bar">
            <ul>
                <li><a href="#sec-inicio" class="nav-link">Início</a></li>
                <li><a href="#sec-acomod" class="nav-link">Acomodações</a></li>
                <li><a href="#sec-servicos" class="nav-link">Serviços</a></li>
                <?php 
                if(!isset($_SESSION["status"])){
                    echo "<li><a href='login.php' class='nav-link'>Reserve Aqui</a></li>";
                }else{
                    echo " <li><a href='perfil.php' class='nav-link'>"; echo$_SESSION["user"];echo "</a></li>";
                }
                
                ?>
                
            </ul>
        </nav>
    </header>
    <!-- Fim da NavBar -->
    <!-- Inicio da section INICIO -->
    <section id="sec-inicio">
        <div class="section sec-inicio">
            <div class="text-box-inicio">
                <h3>Welcome To</h3>
                <h1>Hotel do Gabe</h1>
                <h2>Resort & Hotel Spa</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex delectus aut impedit, inventore
                    temporibus enim quod, officia natus dolor incidunt. Corrupti fugit eaque, odio quisquam culpa quia
                    totam inventore?</p>
            </div>
            <div class="img-inicio"></div>
        </div>
    </section>
    <!-- Fim do section INICIO -->

    <!-- Inicio do section Acomodações -->
    <section id="sec-acomod">
        <div class="section sec-acomod">
            <h2 class="titulo-sec-acomod">Acomodações</h2>
            <p class="text-sec-acomod">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus itaque,
                quibusdam cupiditate facere
                corrupti magni dolores harum aspernatur excepturi doloribus blanditiis accusantium, velit
                perspiciatis in placeat asperiores non reiciendis? Assumenda!</p>
            <div class="div-acomodacoes">
                <div>
                    <div class="div-card">
                        <img src="assets/imagem/quarto.jpg" alt="" class="img-card">
                        <div class="div-card-box">
                            <h3>Acomodação</h3>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere amet nemo fugit error!
                                Perspiciatis libero ex voluptate obcaecati voluptatum iste dolores quas quis qui
                                molestias? Distinctio doloribus saepe praesentium officia.</p>
                        </div>
                        <div class="div-card-botao">
                            <a href="reserva.php" class="div-card-botao-a">Reserve</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="div-card">
                        <img src="assets/imagem/quarto.jpg" alt="" class="img-card">
                        <div class="div-card-box">
                            <h3>Acomodação</h3>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere amet nemo fugit error!
                                Perspiciatis libero ex voluptate obcaecati voluptatum iste dolores quas quis qui
                                molestias? Distinctio doloribus saepe praesentium officia.</p>
                        </div>
                        <div class="div-card-botao">
                            <a href="reserva.php" class="div-card-botao-a">Reserve</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="div-card">
                        <img src="assets/imagem/quarto.jpg" alt="" class="img-card">
                        <div class="div-card-box">
                            <h3>Acomodação</h3>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere amet nemo fugit error!
                                Perspiciatis libero ex voluptate obcaecati voluptatum iste dolores quas quis qui
                                molestias? Distinctio doloribus saepe praesentium officia.</p>
                        </div>
                        <div class="div-card-botao">
                            <a href="reserva.php" class="div-card-botao-a">Reserve</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim do section Acomodações -->

    <!-- Inicio do section Serviços -->
    <section id="sec-servicos">
        <div class="section sec-servicos">
            <div class="div-img-servicos">
                <div class="img-box item1">
                    <p>Restaurante</p>
                </div>
                <div class="img-box item2">
                    <p>Futebol</p>
                </div>
                <div class="img-box item3">
                    <p>Piscina</p>
                </div>
                <div class="img-box item4" >
                    <p>Spa</p>
                </div>
            </div>
            <div class="sec-servicos-text">
                <h2>Serviços</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quam ea voluptates, consequatur
                    fugit dicta quae, natus quas accusamus expedita autem ut, excepturi enim eaque repellendus eum unde
                    aperiam asperiores?</p>
            </div>
        </div>

        <div class="section sec-servicos-tablet">
            <div class="sec-servicos-text">
                <h2>Serviços</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quam ea voluptates, consequatur
                    fugit dicta quae, natus quas accusamus expedita autem ut, excepturi enim eaque repellendus eum unde
                    aperiam asperiores?</p>
            </div>
            <div class="box-tablet bk-white column-reverse">
                <div class="img-box-tablet item1"></div>
                <div class="box-tablet-text color">
                    <h3>Restaurante</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quisquam quod doloribus
                        inventore fugiat omnis repellendus cumque ratione. Suscipit sunt itaque, voluptatibus corrupti
                        numquam alias et reprehenderit? Officiis, similique voluptate!</p>
                </div>
            </div>
            <div class="box-tablet">
                <div class="box-tablet-text">
                    <h3 class="align-rigth">Futebol</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit recusandae quos
                        dignissimos molestias dolorum! Nihil pariatur et dolores veniam, suscipit sint officiis,
                        nesciunt molestiae error porro perspiciatis quibusdam quae.</p>
                </div>
                <div class="img-box-tablet item2"></div>
            </div>
            <div class="box-tablet bk-white column-reverse">
                <div class="img-box-tablet item3"></div>
                <div class="box-tablet-text color">
                    <h3>Piscina</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolorum accusantium quos
                        dolorem impedit libero soluta. Deserunt, veritatis eveniet? Aliquid beatae nisi atque, iure
                        molestias quae asperiores eveniet incidunt nesciunt.</p>
                </div>
            </div>
            <div class="box-tablet">
                <div class="box-tablet-text">
                    <h3 class="align-rigth">Spa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, necessitatibus modi blanditiis
                        libero, asperiores consequatur aut eligendi quas esse illum voluptatum voluptas nesciunt minima
                        repellat vel beatae culpa atque! Totam?</p>
                </div>
                <div class="img-box-tablet item4"></div>
            </div>
        </div>
    </section>
    <!-- Fim do section Serviços -->

    <!-- Inicio do Footer -->
    <footer>
        <div class="div1-footer">
            <div>
                <h3 class="h3-footer">About</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis eos consectetur
                    corrupti dolore. Atque, saepe quaerat quas excepturi soluta nam vero impedit sunt, delectus, totam
                    tenetur provident hic repellendus.</p>
            </div>
            <div>
                <h3 class="h3-footer">Service</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis eos consectetur
                    corrupti dolore. Atque, saepe quaerat quas excepturi soluta nam vero impedit sunt, delectus, totam
                    tenetur provident hic repellendus.</p>
            </div>
            <div>
                <h3 class="h3-footer">FAQ</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis eos consectetur
                    corrupti dolore. Atque, saepe quaerat quas excepturi soluta nam vero impedit sunt, delectus, totam
                    tenetur provident hic repellendus.</p>
            </div>
        </div>
        <div class="div2-footer">
            <hr>
            <h3 class="copy">© Copyright 2023 Gabriel Moreira</h3>
            <ul class="links-footer">
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Whatsapp</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </footer>
    <!-- Fim do Footer -->

    <!-- Responsividade da Navbar -->
    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function() {
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>
</body>

</html>