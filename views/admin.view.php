<?php require 'partials/header.php'; ?>
<h1 style="color:blueviolet; text-align:center">Thông Tin Bài Viết</h1>
<div class="container-fluid">
    <a href="/showAddActiveForm" class="btn btn-primary">Thêm Mới</a>
    <table class="table table-bordered table-hover table-striped table-responsive">
        <thead style="color:blue; text-align:center">
            <th>Mã Bài Viết</th>
            <th>Tên Bài Viết</th>
            <th>Địa điểm</th>
            <th>Mã Người Viết</th>
            <th>Chuyên Mục</th>
            <th>Nội Dung</th>
            <th>Số Kí Tự</th>
            <th>Hình ảnh</th>
            <th>Ngày đăng bài</th>
            <th>Hạn kết thúc</th>
            <th>Thao tác</th>
        </thead>
        <tbody>
            <?php foreach ($admins as $admin) : ?>
                <tr>
                    <td><?= $admin->articleCode ?></td>
                    <td><?= $admin->articleName ?></td>
                    <td><?= $admin->placeName ?></td>
                    <td><?= $admin->writerCode ?></td>
                    <td><?= $admin->categoryArticle ?></td>
                    <td><?= $admin->content ?></td>
                    <td><?= $admin->quantitychars ?></td>
                    <td><?= $admin->image ?></td>
                    <td><?= $admin->uploadDate ?></td>
                    <td><?= $admin->deadline ?></td>
                    <td>
                        <a href="/editadmin?articleCode=<?= $admin->articleCode ?> " title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
                        <a href="/deleteadmin?articleCode=<?= $admin->articleCode ?>" title="Xóa hàng"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?php require 'partials/footer.php'; ?>