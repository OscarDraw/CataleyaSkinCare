<link rel="stylesheet" href="/frontend/productos/productos.css" />


<?php if (isset($is_inCart)) : ?>
    <div class="product_cart col-md-12 col-sm-12 col-xs-12">
        <div class="images">
            <div>
                <img src="<?php echo $item['product_image'] ?>" alt="test" />
            </div>
        </div>
        <div class="information">
            <h4><?php echo $item['product_name']  ?></h4>
            <a href="/404.php"><?php echo $item['brand_name']  ?></a>
        </div>
        <div class="price_cart">
            <?php
            if ($item['product_discount'] > 0) $discount = $item['product_price'] * ($item['product_discount'] / 100);
            $total += ($item['product_price'] - $discount);
            ?>
            <h5><?php echo '$ ' . number_format($total, 2, ',', '.') ?></h5>
        </div>
        <div class="actions_cart">
            <input type="number" class="form-control" name="number_id" id="number_id" class="number_items" value="0">
            <span class="delete_items"><i class="fas fa-times"></i></span>
        </div>
    </div>
<?php else : ?>

    <?php
    $avisoAgotado = "";
    $agotado = "";
    if ($item['product_stock'] == 0) :
        $agotado = "agotado_aviso agotado";
        $avisoAgotado = "PRODUCTO AGOTADO";
    endif;
    if ($item['product_discount'] > 0) {
        $descuento =  ($item['product_price'] * ($item['product_discount'] / 100));
        $precio = $item['product_price'] - $descuento;
    }
    ?>
    <div class="product_content_desktop col-md-4 col-sm-4 col-xs-6 ">
        <span class="aviso_agotado"><?php echo $avisoAgotado ?></span>
        <div class="<?php echo $agotado; ?>">
            <?php if (isset($descuento)) {
            ?>
                <span class="discount_items" title="Descuento aplicado">- <?php echo $item['product_discount'] . "%" ?></span>
            <?php
            } ?>
            <span class="plus_items" title="Agregar al carrito"><i class="fas fa-plus"></i></span>
            <div class="price"><?php echo '$ ' . number_format($precio, 2, ',', '.')   ?></div>
            <div class="images">
                <a href="/404.php" title="test">
                    <div class="product">
                        <img src="<?php echo $item['product_image'] ?>" alt="test" />
                    </div>
                </a>
            </div>
            <div class="information">
                <h5><?php echo $item['product_name']  ?></h5>
                <a href="/404.php"><?php echo $item['brand_name']  ?></a>
            </div>
        </div>
    </div>
<?php endif; ?>