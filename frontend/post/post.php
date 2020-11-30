<link rel="stylesheet" href="/frontend/post/post.css" />
<?php $objPost = json_decode($jsonPost); ?>
<div class="post_blog col-md-12 col-sm-12 col-xs-12">
    <div class="content-80">
        <div class="contend-inline-40"> <img src="<?php echo $objPost->img ?>" alt="" class="post_image" /></div>
        <div class="contend-inline-60">
            <p>
                <h3><?php echo $objPost->title ?></h3>
                <span class="date-label"><?php echo $objPost->date ?> - <?php echo $objPost->autor ?></span>
                <p class="post-content"><?php echo $objPost->content ?></p>
            </p>
        </div>
    </div>
</div>