<?php require 'partials/header.php'; ?>
<div class="container-fluide">
   <div class="row">
      <div class="col-sm-2">
         <nav class="navbar navbar-expand-sm">
            <ul class="nav nav-pills">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle btn btn-success" href="#" id="navbardrop" data-toggle="dropdown">
                   Bài Viết Trong Chuyên Mục
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#truchi">Tranh Trúc Chỉ</a>
                     <a class="dropdown-item" href="#xq">Tranh Thêu XQ</a>
                     <a class="dropdown-item" href="#aodai">Áo Dài Huế</a>
                     <a class="dropdown-item" href="#thanhtien">Hoa Giấy Thanh Tiên</a>
                  </div>
               </li>
            </ul>
         </nav>
      </div>
      <div class="col-sm-10">
         <h1 id="trucchi"></h1>
         <div class="row">
            <?php foreach ($trucchi as $admin) : ?>
                  <img style="width: 100%; height:500px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                  <a href="/gift/trucchi">
                     <h6><strong><?= $admin->articleName ?></strong></h6>
                  </a>
               </div>
            <?php endforeach; ?>
            <h1 id="xq"></h1>
            <div class="row">
            <?php foreach ($xq as $admin) : ?>
                  <img style="width: 100%; height:500px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                  <a href="/gift/xq">
                     <h6><strong><?= $admin->articleName ?></strong></h6>
                  </a>
               </div>
            <?php endforeach; ?>
            <h1 id="aodai"></h1>
            <div class="row">
            <?php foreach ($aodai as $admin) : ?>
                  <img style="width: 100%; height:500px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                  <a href="/gift/aodai">
                     <h6><strong><?= $admin->articleName ?></strong></h6>
                  </a>
               </div>
            <?php endforeach; ?>
            <h1 id="thanhtien"></h1>
            <div class="row">
            <?php foreach ($thanhtien as $admin) : ?>
                  <img style="width: 100%; height:500px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                  <a href="/gift/thanhtien">
                     <h6><strong><?= $admin->articleName ?></strong></h6>
                  </a>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </div>
</div>
</div>
<?php require 'partials/footer.php'; ?>