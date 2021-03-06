<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets\img\favicon.ico" sizes="64x64">
    <title>Cataleya</title>
    <link rel="stylesheet" href="assets/main.css" />
</head>

<body>
    <?php include('routing.php'); ?>
    <?php include(_frontend_path . 'header-nav/header-nav.php'); ?>
    <?php include(_frontend_path . 'navbar/navbar.php'); ?>
    <div class="content-80">
        <img src="/assets/img/aboutus.jpg" alt="" width="100%">
    </div>
    <div class="content-80">
        <div class="contend-inline-50"> <img src="assets/img/aboutus2.jpg" alt="" class="img_aboutus" /></div>
        <div class="contend-inline-50">
            <p>
                <br> <br>
                <h3>NOSOTROS</h3>
                <br> <br>
                Somos una tienda multimarca que te ofrece productos para el cuidado de tu piel. Nuestro nombre está inspirado en el género de orquídeas Cataleya, dentro de dicho grupo se encuentra la la especie Cattleya trianae, flor nacional de Colombia, caracterizada por su extraña belleza y hermosos colores.
                <br> <br>
                Inspirados en esta hermosa flor, buscamos ofrecer productos nacionales, con excelente calidad y que permitan conservar la salud de tu rostro, además de que te hagan lucir hermosa, con una piel radiante.
                <br> <br> Sumado a los productos que puedes encontrar en nuestra tienda, te ofrecemos información sobre el cuidado de la piel, dinámicas y diversas actividades que te permitirán aprender a cómo cuidar tu piel y a armar rutinas adecuadas.
            </p>
        </div>
    </div>
</body>
<?php include(_frontend_path . 'footer/footer.php'); ?>

</html>