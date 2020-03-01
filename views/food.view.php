<?php require 'partials/header.php'; ?>
<div class="container-fluide">
   <div class="row">
      <div class="col-sm-2">
         <div style="text-align:center; padding-top: 50px; color:indigo;"> CÁC CHUYÊN MỤC CHÍNH
            <div class="list-group">
               <a style="text-decoration:none" href="#monantruyenthong" class="list-group-item list-group-item-success ">Món Ăn Truyền Thống</a>
               <a style="text-decoration:none" href="#anvat" class="list-group-item list-group-item-danger">Đồ Ăn Vặt</a>
            </div>
         </div>
      </div>
      <div class="col-sm-10">
         <h1 id="monantruyenthong">
            <div style="text-align:center; color: green;">Món Ăn Truyền Thống</div>
         </h1>
         <div class="row">
            <?php foreach ($bunbo as $admin) : ?>
               <div class="col-sm-4" style="background-color: white; ">
                  <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                  <a href="/food/monantruyenthong/bunbo">
                     <h6><strong><?= $admin->articleName ?></strong></h6>
                  </a>
               </div>
            <?php endforeach; ?>
            <?php foreach ($banhbeo as $admin) : ?>
               <div class="col-sm-4" style="background-color: white; ">
                  <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                  <a href="/food/monantruyenthong/banhbeo">
                     <h6><strong><?= $admin->articleName ?></strong></h6>
                  </a>
               </div>
            <?php endforeach; ?>
            <?php foreach ($banhnam as $admin) : ?>
               <div class="col-sm-4" style="background-color: white; ">
                  <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                  <a href="/food/monantruyenthong/banhnam">
                     <h6><strong><?= $admin->articleName ?></strong></h6>
                  </a>
               </div>
            <?php endforeach; ?>
            </div>
            <h1 id="anvat">
               <div style="text-align:center; color: green">Đồ Ăn Vặt</div>
            </h1>
            <div class="row">
               <?php foreach ($banhep as $admin) : ?>
                  <div class="col-sm-4" style="background-color: white; ">
                     <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                     <a href="/food/anvat/banhep">
                        <h6><strong><?= $admin->articleName ?></strong></h6>
                     </a>
                  </div>
               <?php endforeach; ?>
               <?php foreach ($bunhen as $admin) : ?>
                  <div class="col-sm-4" style="background-color: white; ">
                     <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                     <a href="/food/anvat/bunhen">
                        <h6><strong><?= $admin->articleName ?></strong></h6>
                     </a>
                  </div>
               <?php endforeach; ?>
               <?php foreach ($banhnam1 as $admin) : ?>
                  <div class="col-sm-4" style="background-color: white; ">
                     <img style="width: 100%; height:200px" src="../../libs/images/<?php echo $admin->image ?>" alt="đại nội">
                     <a href="/food/anvat/banhnam1">
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