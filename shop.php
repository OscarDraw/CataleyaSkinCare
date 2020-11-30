<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Cataleya</title>
    <link rel="icon" type="image/png" href="assets\img\favicon.ico" sizes="64x64">
    <link rel="stylesheet" href="assets/main.css" />
    <link rel="stylesheet" href="frontend/views_css/shop.css" />
</head>

<body>
    <?php

    include('routing.php'); ?>
    <?php include(_frontend_path . 'header-nav/header-nav.php'); ?>
    <?php include(_frontend_path . 'navbar/navbar.php'); ?>
    <div class="shop_section ">
        <div class="shop_tittle">
            <h1>TIENDA <small style="color:Red;font-size:15px !important; "> Descuentos ya aplicados </small></h1>
        </div>

        <div class="container-fluid content_pages">
            <div class="row">
                <?php
                require('backend\model\Shop_model.php');
                $db = new Shop_model();

                $products = $db->get_products_information();

                foreach ($products as $item) {
                    include(_frontend_path . 'productos/productos.php');
                }
                ?>

            </div>
        </div>
    </div>

</body>
<?php include(_frontend_path . 'footer/footer.php'); ?>

</html>