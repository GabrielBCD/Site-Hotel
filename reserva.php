<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/template/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/css/reserva.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Reserva</title>
</head>
<body>
<header class="position-static">
    <div class="logo">Hotel do Gabe</div>
</header>
<div class="container">
    <div class="box-img">
        <div class="w3-content" style="max-width:1200px">
            <img class="mySlides" src="assets/imagem/restaurante.jpg" style="width:100%;display:none">
            <img class="mySlides" src="assets/imagem/restaurante.jpg" style="width:100%">
            <img class="mySlides" src="assets/imagem/restaurante.jpg" style="width:100%;display:none">

            <div class="w3-row-padding w3-section">
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="assets/imagem/restaurante.jpg"
                         style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                </div>
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="assets/imagem/restaurante.jpg"
                         style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                </div>
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="assets/imagem/restaurante.jpg"
                         style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                </div>
            </div>
        </div>

        <script>
            function currentDiv(n) {
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                }
                x[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " w3-opacity-off";
            }
        </script>
    </div>
    <hr>
    <div class="row justify-content-around">
        <div class="col-md-6">
            <div class="">
                <h2 class="acomodacao-sub">Outro Nome</h2>
                <p class="acomodacao-qrt">5 quarto(s) * 5 cama(s) * 2 banheiro(s)</p>
                <hr>
                <div class="text-desc mb-4">
                    <p>Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                        animi, aperiam
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.
                        nostrum quibusdam ratione rerum saepe ut velit.
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.

                    </p>
                </div>

                <p data-bs-target="#exampleModal" data-bs-toggle="modal" class="mostrar-mais">Mostrar mais</p>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sobre essa merda</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-modal">
                                Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                                animi, aperiam
                                asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                                necessitatibus
                                nostrum quibusdam ratione rerum saepe ut velit.
                                asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                                necessitatibus
                                nostrum quibusdam ratione rerum saepe ut velit.
                                nostrum quibusdam ratione rerum saepe ut velit.
                                asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                                necessitatibus
                                nostrum quibusdam ratione rerum saepe ut velit.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="">
                <p>O que este lugar oferece</p>
                <div>
                    <div class="row">
                        <div class="col">
                            <div class="ico-wifi"></div>
                            <p class="txt-wifi">WI-FI</p>
                            <div class="ico-estacionamento"></div>
                            <p class="txt-estacionamento">Estacionamento</p>
                            <div class="ico-camera"></div>
                            <p class="txt-camera">Câmeras de Segurança</p>
                            <div class="ico-cozinha"></div>
                            <p class="txt-cozinha">Acesso à Cozinha</p>
                        </div>
                        <div class="col">
                            <div class="ico-lazer"></div>
                            <p class="txt-lazer">Área de Lazer</p>
                            <div class="ico-jardim"></div>
                            <p class="txt-jardim">Visita ao Jardim</p>
                            <div class="ico-piscina"></div>
                            <p class="txt-piscina">Acesso à piscina</p>
                            <div class="ico-paisagem"></div>
                            <p class="txt-paisagem">Visita a Bela Paisagem Natural</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="">
                <h5>Recursos</h5>
                <h6>Gastronomia Excepcional:</h6>
                <p>Explore os sabores refinados no nosso restaurante exclusivo, onde chefs talentosos preparam pratos
                deliciosos que agradam aos paladares mais exigentes. Desfrute de uma experiência gastronômica única
                sem sair do conforto do hotel.</p>

                <h6>Instalações para Eventos:</h6>
                <p>Se você está planejando um evento corporativo ou uma celebração especial, nossas instalações para
                eventos são ideais para reuniões, conferências, casamentos e muito mais. Oferecemos espaços
                versáteis e serviços personalizados para garantir o sucesso do seu evento.</p>

                <h6>Centro de Bem-Estar:</h6>
                <p>Relaxe e recarregue suas energias no nosso centro de bem-estar, equipado com instalações modernas,
                incluindo academia, spa e piscina. Cuide de si mesmo e aproveite momentos de tranquilidade durante a
                sua estadia.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card-reserva">
                <div class="card-body">
                    <h5 class="card-title">R$ 750 noite</h5>
                    <p class="card-text">Conforto e hospitalidade que cabem no seu orçamento. Sua experiência conosco é
                        tão especial quanto nosso preço.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="input-group date d-flex flex-column">
                            <label for="checkin">Check-In</label>
                            <input id="checkin" type="date" class="form-control w-100">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="input-group date d-flex flex-column">
                            <label for="checkout">Checkout</label>
                            <input id="checkout" type="date" class="form-control w-100">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="card-body">
                    <div class="d-grid gap-2 col-6 w-100">
                        <button class="btn btn-outline-success btn-sm w-100" name="btn_reservar" type="button">Reservar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="mt-5">
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
</body>
</html>