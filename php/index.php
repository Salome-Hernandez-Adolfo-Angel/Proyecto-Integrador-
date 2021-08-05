<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5/dist/css/bootstrap.min.css">
    <script src="../bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../css/principal.css">
    <title>Tienda don Gualu</title>
</head>
<body>
    <?php
    include("./views/navbar.php");
    ?>
<!--Inicio código postal-->
<div class="container-md text-center tect-md-left cp shadow-lg p-3 mb-5 bg-white rounded">
        <a href="#" id="codp" data-bs-toggle="modal" data-bs-target="#modelId">Código postal <i
                class="fas fa-arrow-right"></i></a>

        <!--Estructura modal-->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Coloca tu código postal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <input type="text" name="codigopostal" class="form-control" placeholder="52080">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin estructura modal-->
    </div>
    <!--Fin código postal-->
    <!--Ofertas-->
    <!-- CARRUSEL-->
 <div class="container-fluid text-left tect-md-left" style=" font-style: italic;
 font-size: 30px;">
     <strong>Ofertas</strong>
 </div>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="container-sm carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="../img/ofertas/images (4).jpeg" style="height: 500px;"class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/ofertas/images (5).jpeg" style="height: 500px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/ofertas/images (6).jpeg" style="height: 500px;" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  
  <!--TERMINO CARRUSEL -->
    <!--Fin ofertas-->
    <!--Título sección 1-->
    <div class="container-fluid text-left tect-md-left favs">
        <strong>Los favoritos</strong>
    </div>
    <!--Fin título sección 1-->

    <!--Cards favoritos-->
    <div class="container-fluid card-group">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/coca600.png" class="card-img-top" alt="Coca-cola 600ml" title="Coca-cola 600ml">
            <div class="card-body">
                <p class="card-text">Coca-cola de 600 ml, ideal para ti.</p>
                <h5 class="card-title precio">$15.00</h5>
                <a href="#" class="btn btn-primary agregar">Agregar</a>

            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/corona.png" class="card-img-top" alt="Coca-cola 600ml" title="Coca-cola 600ml">
            <div class="card-body">
                <p class="card-text">Para tus reuniones, llevate un six.</p>
                <h5 class="card-title precio">$150.00</h5>
                <a href="#" class="btn btn-primary agregar">Agregar</a>

            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/cocalata.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Coca-cola de lata.</p>
                    <h5 class="card-title precio">$13.00</h5>
                <a href="#" class="btn btn-primary agregar">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/caguama.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Cerveza corona grande.</p>
                    <h5 class="card-title precio">$35.00</h5>
                <a href="#" class="btn btn-primary agregar">Agregar</a>
            </div>
        </div>
    </div>
    <div class="text-center tect-md-left" style=" font-style: italic;
    font-size: 30px;">
        <a href="./productos.php" style="text-decoration: none; color: black;"><strong>Ver más >></strong></a>
    </div>
    <!--Fin cards favoritos-->
    <?php 
    include("./views/footer.php")
    ?>
        <script>
        //Script del modal
        var modelId = document.getElementById('modelId');

        modelId.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            let button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            let recipient = button.getAttribute('data-bs-whatever');

            // Use above variables to manipulate the DOM
        });
        //Fin script del modal
    </script>
</body>
</html>