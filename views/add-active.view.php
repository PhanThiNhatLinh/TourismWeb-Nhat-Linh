<?php require 'partials/header.php'; ?>
<div style="padding-top:70px" class="container">
    <h2 style="text-align:center">Thêm Bài Viết</h2>
    <form action="/showAddActiveForm" class="was-validated" method="post">
        <div class="form-group">
            <label for="artical-name">Tên Bài Viết</label>
            <input type="text" class="form-control" id="artical-name" placeholder="Enter artical-name" name="articleName" required>
            <div class="valid-feedback">Hoàn thành</div>
            <div class="invalid-feedback">Làm ơn không để trống nội dung</div>
        </div>
        <div class="form-group">
            <label for="place">Tên Địa Điểm:</label>
            <input type="text" class="form-control" id="placeName" placeholder="Enter place" name="placeName" required>
            <div class="valid-feedback">Hoàn thành</div>
            <div class="invalid-feedback">Làm ơn không để trống nội dung</div>
        </div>
        <div class="form-group">
            <label for="category">Chuyên Mục:</label>
            <input type="text" class="form-control" id="category" placeholder="Enter category" name="categoryArticle" required>
            <div class="valid-feedback">Hoàn thành</div>
            <div class="invalid-feedback">Làm ơn không để trống nội dung</div>
        </div>
        <div class="form-group">
            <label for="content">Nội Dung:</label>
            <input type="text" class="form-control" id="content" placeholder="Enter content" name="content" required>
            <div class="valid-feedback">Hoàn thành</div>
            <div class="invalid-feedback">Làm ơn không để trống nội dung</div>
        </div>
        <div class="form-group">
            <label for="quantitychars">Số lượng từ trong bài:</label>
            <input type="text" class="form-control" id="quantitychars" placeholder="Enter quantitychars" name="quantitychars" required>
            <div class="valid-feedback">Hoàn thành</div>
            <div class="invalid-feedback">Làm ơn không để trống nội dung</div>
        </div>
        <div class="form-group">
            <label for="image">Hình Ảnh:</label>
            <input type="text" class="form-control" id="image" placeholder="Enter image" name="image" required>
            <div class="valid-feedback">Hoàn thành</div>
            <div class="invalid-feedback">Làm ơn không để trống nội dung</div>
        </div>
        
        <div class="form-group">
            <label for="uploadDate">Ngày đăng bài:</label>
            <input type="text" class="form-control" id="uploadDate" placeholder="Enter uploadDate" name="uploadDate" required>
            <div class="valid-feedback">Hoàn thành</div>
            <div class="invalid-feedback">Làm ơn không để trống nội dung</div>
        </div>
        <div class="form-group">
            <label for="deadline">Hạn cuối:</label>
            <input type="text" class="form-control" id="deadline" placeholder="Enter deadline" name="deadline" required>
            <div class="valid-feedback">Hoàn thành</div>
            <div class="invalid-feedback">Làm ơn không để trống nội dung</div>
        </div>
        
        <div class="form-group">
            <label for="writerCode">Người Viết:</label>
            <select id="writerCode" name="writerCode">
                <?php foreach ($writeCodes as $admin) : ?>
                    <option value="<?= $admin->writerCode ?>"><?= $admin->writerName ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>