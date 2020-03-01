<?php require 'views/partials/header.php'; ?>
<br>
<div class="container">
<div class="row">
        <?php foreach ($banhbeo as $admin) : ?>
            <a>
                <h1><strong><?= $admin->articleName ?></strong></h1>
            </a>
            <p><img style="width: 100%" src="../../libs/images/<?php echo $admin->image ?>" /></p>
            <img src="" alt="">
            <br>
            <p><?= $admin->content ?></p>
        <?php endforeach; ?>
    </div>
</div>
<?php require 'views/partials/footer.php'; ?>