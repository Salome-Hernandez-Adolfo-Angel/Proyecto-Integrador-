<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Más sobre nosotros</title>
    <link rel="stylesheet" href="../bootstrap-5/dist/css/bootstrap.min.css">
    <script src="../bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../css/principal.css">
</head>

<body>
    <?php
    include("./views/navbar.php");
    ?>
    <div class="container-lg mb-4" id="separacionSeccion">
        <div class="accordion accordion-flush" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Misión.
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                    <div class="accordion-body">
                        <strong>Nuestra misión </strong> se basa principalmente en llevar a nuestro clientes los mejores productos y ofrece los precios más competitivos del mercado, ayudano a mejorar la economía de todos, además, queremos ser una fuente de empleo para las personas.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Visión.
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body">
                        <strong>Nuestra visión </strong> es ser lo primero que pienses al pensar en la palabra "calidad" y que nos tengan la confianza de dejar sus pedidos en nuestras manos expertas y capacitadas.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Valores.
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body">
                        <strong>Nuestros valores </strong> son la honestidad, pues al ser un negocio familiar, conocemos la importancia de este valor, por ello, llevamos hasta tu hogas los mejores productos a un precio justo y la cantidad exacta. 
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php
    include("./views/footer.php");
    ?>
</body>

</html>