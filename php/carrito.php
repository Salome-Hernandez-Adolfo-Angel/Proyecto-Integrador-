<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
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
        <h6 style="text-align: center; font-size: 30px;" class="text-success"> Productos añadidos al carrito.</h6>
    </div>

    <div class="container-sm shadow-lg p-3 mb-5 bg-white rounded">
        <table class="table table-striped-hover table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio c/u</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"><img src="../img/productos/takis_fuego.png" alt="Takis fuego" style="width: 70px;"></td>
                    <td>Takis fuego</td>
                    <td class="text-success">$14.00</td>
                    <td>5</td>
                    <td class="text-info">$70</td>
                </tr>
                <tr>
                    <td scope="row"><img src="../img/productos/Sabritones.png" alt="Sabritones" style="width: 70px;"></td>
                    <td>Sabritones</td>
                    <td class="text-success">$11.00</td>
                    <td>2</td>
                    <td class="text-info">$22.00</td>
                </tr>
                <tr>
                    <td scope="row"><img src="../img/productos/lechaalpura.png" alt="Crema alpura" style="width: 70px;"></td>
                    <td>Crema lala</td>
                    <td class="text-success">$18.00</td>
                    <td>1</td>
                    <td class="text-info">$18.00</td>
                </tr>
                <tr>
                    <td scope="row"><img src="../img/productos/coca600.png" alt="Coca 600ml" style="width: 70px;"></td>
                    <td>Coca cola 600ml</td>
                    <td class="text-success">$13.00</td>
                    <td>2</td>
                    <td class="text-info">$26.00</td>
                </tr>
                <tr>
                    <td scope="row"><img src="../img/productos/cocalata.png" alt="Sabritones" style="width: 70px;"></td>
                    <td>Coca cola de lata</td>
                    <td class="text-success">$14.00</td>
                    <td>2</td>
                    <td class="text-info">$28.00</td>
                </tr>

                <tr>
                    <td scope="row"><img src="../img/productos/chile.png" alt="Sabritones" style="width: 70px;"></td>
                    <td>Chile manzano</td>
                    <td class="text-success">$20.00 Kg</td>
                    <td>2</td>
                    <td class="text-info">$40.00</td>
                </tr>

                <tr>
                    <td scope="row"><img src="../img/productos/jitomate.png" alt="Sabritones" style="width: 70px;"></td>
                    <td>Jitomate</td>
                    <td class="text-success">$18.00 Kg</td>
                    <td>1</td>
                    <td class="text-info">$18.00</td>
                </tr>

                <tr>
                    <td scope="row"><img src="../img/productos/longaniza.png" alt="Sabritones" style="width: 70px;"></td>
                    <td>Longaniza</td>
                    <td class="text-success">$80.00 Kg</td>
                    <td>200g</td>
                    <td class="text-info">$40.00</td>
                </tr>

                <tr>
                    <td scope="row"><img src="../img/productos/jamon.png" alt="Sabritones" style="width: 70px;"></td>
                    <td>Jamón</td>
                    <td class="text-success">$40.00</td>
                    <td>500g</td>
                    <td class="text-info">$8.00</td>
                </tr>

                <tr>
                    <td scope="row"><img src="../img/productos/ace.png" alt="Jabón ACE" style="width: 70px;"></td>
                    <td>Jabón ACE</td>
                    <td class="text-success">$50.00</td>
                    <td>1</td>
                    <td class="text-info">$50.00</td>
                </tr>

                <tr>
                    <td scope="row"><img src="../img/productos/ariel.png" alt="Sabritones" style="width: 70px;"></td>
                    <td>Jamón</td>
                    <td class="text-success">$40.00</td>
                    <td>2</td>
                    <td class="text-info">$80.00</td>
                </tr>

                <tr>
                    <td scope="row">Total</td>
                    <td></td>
                    <td class="text-success"></td>
                    <td></td>
                    <td class="text-info">$400.00</td>
                </tr>

                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td class="text-success"></td>
                    <td><a href="productos.php" class="btn btn-primary">Seguir comprando.</a></td>
                    <td><a href="#" class="btn btn-secondary">Aceptar compra.</a></td>
                </tr>
            </tbody>
        </table>

    </div>
    <?php
    include("./views/footer.php");
    ?>
</body>

</html>