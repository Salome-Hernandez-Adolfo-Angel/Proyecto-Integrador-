<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../bootstrap-5/dist/css/bootstrap.min.css">
    <script src="../bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../css/principal.css">
</head>


<body>
    <?php
    include("./views/navbar.php")
    ?>
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <div class="dropdown open">
                    <h1 style="text-align: center; font-family: 'Courier New', Courier, monospace;font-size: 50px;"><strong>Productos</strong></h1>
                    <a class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categoría.
                    </a>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#frituras">Frituras</a>
                        <a class="dropdown-item" href="#lacteos">Lácteos</a>
                        <a class="dropdown-item" href="#bebidas">Bebidas</a>
                        <a class="dropdown-item" href="#verduras">Verdura</a>
                        <a class="dropdown-item" href="#carnes">Carnes</a>
                        <a class="dropdown-item" href="#limpieza">Limpieza</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h6 style="margin-top: 5%;margin-left: 1%; font-size: 30px;" id="frituras">Frituras</h6>
    <div class="container-fluid card-group" id="separacionSeccion">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/fritos.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$11.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/sabritasmoradas.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$13.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/takis_fuego.png" class="card-img-top" alt="..." style="height:390px;">
            <div class="card-body">
                <h5 class="card-title precio">$14.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    <div class="container-fluid card-group">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/Sabritones.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$11.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/Churrumais.png"  class="card-img-top" alt="..." style="height: 390px;">
            <div class="card-body">
                <h5 class="card-title precio">$13.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/Rufles.png" class="card-img-top" alt="..." style="height:390px;">
            <div class="card-body">
                <h5 class="card-title precio">$14.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    <h6 style="margin-top: 5%;margin-left: 1%; font-size: 30px;" id="lacteos">Lácteos</h6>
    <div class="container-fluid card-group" id="separacionSeccion">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/lechaalpura.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$18.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/lechalala.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$21.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/quesopanela.png" class="card-img-top" alt="..." style="height:390px;">
            <div class="card-body">
                <h5 class="card-title precio">$17.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    <div class="container-fluid card-group">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/yogurtalpura.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$10.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/mantequilla.png"  class="card-img-top" alt="..." style="height: 390px;">
            <div class="card-body">
                <h5 class="card-title precio">$15.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/quesocrema.png" class="card-img-top" alt="..." style="height:390px;">
            <div class="card-body">
                <h5 class="card-title precio">$25.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    <h6 style="margin-top: 5%;margin-left: 1%; font-size: 30px;" id="bebidas">Bebidas</h6>
    <div class="container-fluid card-group" id="separacionSeccion">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/coca600.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$13.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/cocalata.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$14.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/corona.png" class="card-img-top" alt="..." style="height:390px;">
            <div class="card-body">
                <h5 class="card-title precio">$150.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    <div class="container-fluid card-group">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/caguama.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$35.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/bonafont.png"  class="card-img-top" alt="..." style="height: 390px;">
            <div class="card-body">
                <h5 class="card-title precio">$16.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/jarritos.png" class="card-img-top" alt="..." style="height:390px;">
            <div class="card-body">
                <h5 class="card-title precio">$12.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    
    <h6 style="margin-top: 5%;margin-left: 1%; font-size: 30px;" id="verduras">Verduras</h6>
    <div class="container-fluid card-group" id="separacionSeccion">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/chile.png"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title precio">$20.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/jitomate.png"  class="card-img-top" alt="..." style="height:390px;">
            <div class="card-body">
                <h5 class="card-title precio">$18.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/cilantro.png" class="card-img-top" alt="..." style="height:390px;">
            <div class="card-body">
                <h5 class="card-title precio">$5.00 100g</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    <div class="container-fluid card-group">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/zanahoria.png"  class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$24.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/pimiento.png"  class="card-img-top" alt="..." style="height: 350px;">
            <div class="card-body">
                <h5 class="card-title precio">$30.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/brocoli.png" class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$18.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    <h6 style="margin-top: 5%;margin-left: 1%; font-size: 30px;" id="carnes">Carnes</h6>
    <div class="container-fluid card-group" id="separacionSeccion">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/longaniza.png"  class="card-img-top" alt="..." style="height: 350px;">
            <div class="card-body">
                <h5 class="card-title precio">$80.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/jamon.png"  class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$40.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/salchica.png" class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$4.00 100g</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    <div class="container-fluid card-group">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/Tocino.png"  class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$50.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/pollo.png"  class="card-img-top" alt="..." style="height: 350px;">
            <div class="card-body">
                <h5 class="card-title precio">$58.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/chuleta.png" class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$90.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    
    <h6 style="margin-top: 5%;margin-left: 1%; font-size: 30px;" id="limpieza">Limpieza</h6>
    <div class="container-fluid card-group" id="separacionSeccion">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/ace.png"  class="card-img-top" alt="..." style="height: 350px;">
            <div class="card-body">
                <h5 class="card-title precio">$50.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/ariel.png"  class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$40.00 Kg</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/persil.png" class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$34.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>

    <div class="container-fluid card-group">
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/roma.png"  class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$24.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/axion.png"  class="card-img-top" alt="..." style="height: 350px;">
            <div class="card-body">
                <h5 class="card-title precio">$25.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary">Agregar</a>
            </div>
        </div>
        <div class="card shadow p-3 mb-5 bg-body rounded" style="width:20rem;" id="separacion">
            <img src="../img/productos/suavitel.png" class="card-img-top" alt="..." style="height:350px;">
            <div class="card-body">
                <h5 class="card-title precio">$21.00</h5>
                <h6>Selecciona la cantidad</h6>
                <input type="number" name="cantidad" id="" style="align-content: center;" class="form-control"> <br>
                <a href="#" class="btn btn-primary" >Agregar</a>
            </div>
        </div>
    </div>
    <?php
    include("./views/footer.php")
    ?>
</body>

</html>