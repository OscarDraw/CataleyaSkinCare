<link rel="stylesheet" href="/frontend/header-nav/header-nav.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<header>
    <meta charset="UTF-8">
    <div class="header-top">
        <?php include('backend\sesion.php'); ?>
        <?php
        $jsonLogo = '{"height":80, "tipo":"isotipo"}';
        include(_frontend_path . 'logo/logo.php');
        ?>
        <div class="search-content">
            <div class="userEspace" style="display:inline-block">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (!isset($_SESSION['login_user_sys'])) : ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php else : ?>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['login_user_sys'] ?></a></li>
                        <li><a href="backend\sesion.php?logout=1"><span class=" glyphicon glyphicon-log-in"></span> Cerrar sesion</a></li>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"> Carrito</span></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                </div>
                <button type="submit" class="btn btn-default"><i class="fa fa-search" style="padding-right:0 !important"></i></button>
            </form>
        </div>
    </div>
</header>