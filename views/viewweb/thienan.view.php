<?php require 'views/partials/header.php'; ?>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <?php foreach ($thienan as $admin) : ?>
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