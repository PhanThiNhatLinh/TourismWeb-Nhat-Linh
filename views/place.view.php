<?php require 'partials/header.php'; ?>
<br>
<div class="container-fluide">
    <img src="/public/images/" alt="">
</div>
<div class="container-fluide">
    <div class="row">
        <div class="col-sm-2">
            <div style="text-align:center; padding-top: 50px; color:indigo;"> CÁC CHUYÊN MỤC CHÍNH
                <div class="list-group">
                    <a style="text-decoration:none" href="#lichsu" class="list-group-item list-group-item-success ">Di tích lịch sử</a>
                    <a style="text-decoration:none" href="#vanhoa" class="list-group-item list-group-item-danger">Di tích văn hóa</a>
                    <a style="text-decoration:none" href="#canhdep" class="list-group-item list-group-item-warning ">Thắng cảnh đẹp</a>
                </div>
            </div>
        </div>
        <div class="col-sm-10 ">
            <h1 id="lichsu"><div style="text-align:center; color: purple ">Di tích lịch sử</div></h1>
            <div class="row">
                <?php foreach ($dainoi as $admin) : ?>
                    <div class="col-sm-4" style="background-color: white; ">
                        <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                        <a href="/place/ditichlichsu/dainoi">
                            <h6><strong><?= $admin->articleName ?></strong></h6>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($tuduc as $admin) : ?>
                    <div class="col-sm-4" style="background-color: white; ">
                        <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                        <a href="/place/ditichlichsu/tuduc">
                            <h6><strong><?= $admin->articleName ?></strong></h6>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($thienmu as $admin) : ?>
                    <div class="col-sm-4" style="background-color: white; ">
                        <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                        <a href="/place/ditichlichsu/thienmu">
                            <h6><strong><?= $admin->articleName ?></strong></h6>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($dainoi2 as $admin) : ?>
                    <div class="col-sm-4" style="background-color: white; ">
                        <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                        <a href="/place/ditichlichsu/dainoi2">
                            <h6><strong><?= $admin->articleName ?></strong></h6>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($tuduc2 as $admin) : ?>
                    <div class="col-sm-4" style="background-color: white; ">
                        <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                        <a href="/place/ditichlichsu/tuduc2">
                            <h6><strong><?= $admin->articleName ?></strong></h6>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($thienmu2 as $admin) : ?>
                    <div class="col-sm-4" style="background-color: white; ">
                        <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                        <a href="/place/ditichlichsu/tuduc2">
                            <h6><strong><?= $admin->articleName ?></strong></h6>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <h1 id="vanhoa"><div style="text-align:center; color: red ">Di tích văn hóa</div></h1>
            <div class="row">
                <?php foreach ($anhien as $admin) : ?>
                    <div class="col-sm-4" style="background-color: white; ">
                        <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                        <a href="/place/ditichlichsu/anhien">
                            <h6><strong><?= $admin->articleName ?></strong></h6>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($phuoctich as $admin) : ?>
                    <div class="col-sm-4" style="background-color: white; ">
                        <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                        <a href="/place/ditichlichsu/phuoctich">
                            <h6><strong><?= $admin->articleName ?></strong></h6>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($phucam as $admin) : ?>
                    <div class="col-sm-4" style="background-color: white; ">
                        <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                        <a href="/place/ditichlichsu/phucam">
                            <h6><strong><?= $admin->articleName ?></strong></h6>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <h1 id="canhdep"><div style="text-align:center; color: green ">Thắng cảnh đẹp</div></h1>
        <div class="row">
            <?php foreach ($vongcanh as $admin) : ?>
                <div class="col-sm-4" style="background-color: white; ">
                    <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                    <a href="/place/ditichlichsu/vongcanh">
                        <h6><strong><?= $admin->articleName ?></strong></h6>
                    </a>
                </div>
            <?php endforeach; ?>
            <?php foreach ($thienan as $admin) : ?>
                <div class="col-sm-4" style="background-color: white; ">
                    <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                    <a href="/place/ditichlichsu/thienan">
                        <h6><strong><?= $admin->articleName ?></strong></h6>
                    </a>
                </div>
            <?php endforeach; ?>
            <?php foreach ($trangtien as $admin) : ?>
                <div class="col-sm-4" style="background-color: white; ">
                    <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                    <a href="/place/ditichlichsu/trangtien">
                        <h6><strong><?= $admin->articleName ?></strong></h6>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require 'partials/footer.php'; ?>