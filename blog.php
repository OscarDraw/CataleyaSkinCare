<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets\img\favicon.ico" sizes="64x64">
    <title>Cataleya</title>
    <link rel="stylesheet" href="assets/main.css" />
    <link rel="stylesheet" href="frontend/views_css/blog.css" />
</head>

<body>
    <?php include('routing.php'); ?>
    <?php include(_frontend_path . 'header-nav/header-nav.php'); ?>
    <?php include(_frontend_path . 'navbar/navbar.php'); ?>
    <div class="blog_section">
        <div class="blog_tittle">
            <h1>BLOG</h1>
        </div>

        <div class="container-fluid content_pages ">
            <div class="row">
                <?php //require('../backend/Shop_model.php'); 
                ?>
                <?php //$db = new Shop_model();

                //$products = $db->get_products_information(); 
                ?>
                <?php // foreach ($products as $item) { 
                ?>

                <?php
                $content = "Somos una tienda multimarca que te ofrece productos para el cuidado de tu piel. Nuestro nombre está inspirado en el género de orquídeas Cataleya, dentro de dicho grupo se encuentra la la especie Cattleya trianae, flor nacional de Colombia, caracterizada por su extraña belleza y hermosos colores.                Inspirados en esta hermosa flor, buscamos ofrecer productos nacionales, con excelente calidad y que permitan conservar la salud de tu rostro, además de que te hagan lucir hermosa, con una piel radiante.                Sumado a los productos que puedes encontrar en nuestra tienda, te ofrecemos información sobre el cuidado de la piel, dinámicas y diversas actividades que te permitirán aprender a cómo cuidar tu piel y a armar rutinas adecuadas.";
                $jsonPost = '{"content":"' . $content . '", "title":"En que nos basamos?", "date":"29-11-2020", "autor":"Oscar Pulido", "img":"assets/img/aboutus2.jpg"}';
                ?>
                <?php include(_frontend_path . 'post/post.php'); ?>
                <?php include(_frontend_path . 'post/post2.php'); ?>
                <?php include(_frontend_path . 'post/post3.php'); ?>

                <?php // } 
                ?>
            </div>
        </div>

</body>
<?php include(_frontend_path . 'footer/footer.php'); ?>

</html>