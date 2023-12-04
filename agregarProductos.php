<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FAN ZONE</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style2.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">゜・。。・FAN ZONE・。。・゜</span>
                <span class="site-heading-lower">Agregá Tus Productos</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">♡Fan Zone♡</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="mainPage.html">Inicio</a></li>

                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="listaProductos.php">Lista de Productos</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contactos.html">Contactos</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>

<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 login-sec mx-auto">
                <h2 class="text-center">Agregá tu producto</h2>
                <form action="envioForm.php" method="POST">
                    <div class="form-group text-center">
                        <label for="exampleInputEmail1" name="nomUsuario" class="text-uppercase">Detalle</label>
                        <input type="text" name="detalle" class="form-control" placeholder="Detalle">
                    </div>

                    <div class="form-group text-center">
                        <label for="exampleInputPassword1" name="pass" class="text-uppercase">Marca</label>
                        <input type="text" name="marca" class="form-control" placeholder="Marca">
                    </div>

                    <div class="form-group text-center">
                        <label for="exampleInputPassword1" name="pass" class="text-uppercase">Precio</label>
                        <input type="number" name="precio" class="form-control" placeholder="Precio">
                    </div>

                    <div class="form-group text-center">
                        <label for="exampleInputPassword1" name="pass" class="text-uppercase">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" placeholder="Cantidad">
                    </div>

                    <button type="submit" name="register" value="register" class="btn btn-login">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- <div class="container m-5">
  <form action="envioform.php" method="POST">
    <input type="text" name="detalle" placeholder="Detalle">
    <input type="text" name="marca" placeholder="Marca">
    <input type="number" name="precio" placeholder="Precio">
    <input type="number" name="cantidad" placeholder="Cantidad">
    <input type="submit" value="Enviar" onclick='productoAgregado()'>
  </form>
</div> -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></script>
<script>
    function productoAgregado() {
      // Mostrar el mensaje de confirmación
      alert("Producto agregado correctamente");
    }
    </script>


</body>
</html>
