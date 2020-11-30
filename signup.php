<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets\img\favicon.ico" sizes="64x64">
    <title>Cataleya</title>
    <link rel="stylesheet" href="assets/main.css" />
    <link rel="stylesheet" href="/frontend/views_css/login.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <?php include('routing.php'); ?>
    <?php include(_frontend_path . 'header-nav/header-nav.php'); ?>
    <?php include(_frontend_path . 'navbar/navbar.php'); ?>
    <div class="login-form">
        <form action="/examples/actions/confirmation.php" method="post">
            <h2 class="text-center">Crear cuenta</h2>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Usuario" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </div>
        </form>
        <p class="text-center"><a href="#">Crear cuenta</a></p>
    </div>
</body>
<?php include(_frontend_path . 'footer/footer.php'); ?>

</html>