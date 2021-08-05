<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión y registrarse</title>
    <link rel="stylesheet" href="../bootstrap-5/dist/css/bootstrap.min.css">
    <script src="../bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="../img/login//1628113672379.png" alt=""></div>
                <div class="formBx">
                    <form>
                        <h2 class="text-warning">Inicia sesión.</h2>
                        <input type="text" placeholder="Username" class="form-control">
                        <input type="password" placeholder="Password" class="form-control">
                        <a href="#" class="btn btn-primary">LogIn</a>
                        <p class="signup">No tienes una cuenta?<a href="#" onclick="toggleForm()">Registrate.</a></p>
                    </form>
                </div>
            </div>
            <div class="user signupBx">
                <div class="imgBx"><img src="../img/login/1628113672379.png" alt=""></div>
                <div class="formBx">
                    <form>
                        <h2 class="text-success">Crear una cuenta</h2>
                        <input type="text" placeholder="Username" class="form-control">
                        <input type="text" placeholder="Apellido paterno" class="form-control">
                        <input type="text" placeholder="Apellido materno" class="form-control">
                        <input type="text" placeholder="Nombres" class="form-control">
                        <input type="text" placeholder="E-mail" class="form-control">
                        <input type="password" placeholder="Create Password" class="form-control">
                        <input type="password" placeholder="Confirm Password" class="form-control">
                        <a href="#" class="btn btn-secondary">Sign Up</a>
                        <p class="signup">Ya tienes una cuenta?<a href="#" onclick="toggleForm()">Inicia sesión.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        function toggleForm() {
            section = document.querySelector('section');
            container = document.querySelector('.container');
            container.classList.toggle('active');
            section.classList.toggle('active');
        }
    </script>
</body>

</html>