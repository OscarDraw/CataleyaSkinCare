<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets\img\favicon.ico" sizes="64x64">
    <title>Cataleya</title>
    <link rel="stylesheet" href="assets/main.css" />
    <link rel="stylesheet" href="frontend/views_css/brands.css" />
</head>

<body>
    <?php include('routing.php'); ?>
    <?php include(_frontend_path . 'header-nav/header-nav.php'); ?>
    <?php include(_frontend_path . 'navbar/navbar.php'); ?>
    <div class="container-fluid brands">
        <div class="row">

            <div class="content col-md-12 col-sm-12 col-xs-12">
                <img src="/assets/img/brands/brands.jpg" alt="">
            </div>
            <div class="products">
                <div class="products_images content col-md-6 col-sm-6 col-xs-6">
                    <img src="/assets/img/brands/productos.jpg" alt="">
                </div>

                <div class="content_products col-md-6 col-sm-6 col-xs-6">
                    <h2>PRODUCTOS PARA EL CUIDADO DE LA PIEL</h2>
                    <h3>"Apoyando lo nacional, amando lo natural"</h3>
                </div>
            </div>


        </div>
    </div>
</body>
<?php include(_frontend_path . 'footer/footer.php'); ?>

</html>