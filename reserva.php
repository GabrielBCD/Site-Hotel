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
    <link rel="stylesheet" href="assets/css/reserva.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <title>Reserva</title>
</head>
<body>
<header class="position-static">
    <div class="logo">Hotel do Gabe</div>
</header>
<div class="container">
    <h1 class="acomodacao-title">Acomodação</h1>
    <div class="d-flex justify-content-around">
        <div class="box-img">

        </div>
        <div class="box-img">

        </div>
        <div class="box-img">

        </div>
        <div class="box-img">

        </div>
    </div>
    <hr>
    <div class="row">
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

                        Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi, aperiam
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.
                        Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                        animi, aperiam
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.

                        Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi, aperiam
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.
                        Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                        animi, aperiam
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.

                        Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi, aperiam
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.
                        Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi, aperiam
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.
                        Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                        animi, aperiam
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.

                        Descrição - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi, aperiam
                        asperiores corporis culpa cupiditate doloribus ducimus est eveniet ipsam magni minus
                        necessitatibus
                        nostrum quibusdam ratione rerum saepe ut velit.

                    </p>
                </div>
                <div class="mostrar-completo border rounded-4 p-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eaque illum ipsam laborum
                        odit officia possimus quae quam quod tenetur? Delectus molestiae officia ratione! Asperiores
                        eaque praesentium saepe sequi vero?
                    </p>
                </div>
                <p class="mostrar"><strong>Mostrar mais</strong></p>
                <script>
                    mostrar = document.querySelector(".mostrar");
                    mostrar.onclick = function() {
                        desc = document.querySelector(".mostrar-completo");
                        desc.classList.toggle("ativo");
                    }
                </script>
            </div>
            <hr>
            <div class="">
                <p>O que este lugar oferece</p>
            </div>
            <hr>
            <div class="">
                <p>Recursos</p>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
            <div class="border rounded-4 p-4 sticky-xxl-top card-flutuante">
                <div class="border rounded-3">
                    <p>check-in</p>
                    <p>check-out</p>
                    <p>dados</p>
                </div>
                <hr>
                <div>
                    <p>Valores</p>
                    <p>Valores</p>
                    <p>Valores</p>
                    <p>Valor Final</p>
                </div>
                <button>Reservar</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>