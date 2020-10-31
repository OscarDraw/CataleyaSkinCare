<?php $obj = json_decode($jsonLogo);?>
<div class="logo-content">  
    <a href="/"><img height="<?php echo $obj->height; ?>" src="assets/img/<?php echo $obj->tipo; ?>.png" /></a>
</div> 