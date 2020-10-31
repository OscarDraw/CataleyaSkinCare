<link rel="stylesheet" href="header-nav/header-nav.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
<header> 
    <div class="header-top">
        <?php 
        $jsonLogo = '{"height":80, "tipo":"isotipo"}'; 
        include('logo/logo.php');
        ?>
            <div class="search-content">
                <form action="" method="POST">
                    <label><span style="font-size: 25px; color: #222;"><i class="fas fa-shopping-cart"></i></span></label>
                    <input class="search" type="text" placeholder="Buscar..." width="200px"/>
                </form>
            </div> 
    </div> 
</header> 

