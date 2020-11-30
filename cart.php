<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets\img\favicon.ico" sizes="64x64">
    <title>Cataleya</title>
    <link rel="stylesheet" href="assets/main.css" />
    <link rel="stylesheet" href="frontend/views_css/cart.css" />
</head>

<body>
    <?php include('routing.php'); ?>
    <?php include(_frontend_path . 'header-nav/header-nav.php'); ?>
    <?php include(_frontend_path . 'navbar/navbar.php'); ?>
    <div class="cart_section">
        <div class="cart_tittle">
            <h1>Carrito de compras</h1>
        </div>

        <div class="container-fluid  ">
            <div class="row">
                <div class=" content_products_cart-fluid  ">
                    <?php
                    require('backend\model\Cart_model.php');
                    $db = new Cart_model();

                    $products = $db->get_products_information();

                    $is_inCart = 1;
                    $total = 0;
                    $discount = 0;
                    foreach ($products as $item) {
                        include(_frontend_path . 'productos/productos.php');

                        if ($item['product_discount'] > 0) $discount = $item['product_price'] * ($item['product_discount'] / 100);
                        $total += ($item['product_price'] - $discount);
                    }
                    ?>
                    <div class="total_cart"><?php echo '$ ' . number_format($total, 2, ',', '.') ?></div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include(_frontend_path . 'footer/footer.php'); ?>

</html>