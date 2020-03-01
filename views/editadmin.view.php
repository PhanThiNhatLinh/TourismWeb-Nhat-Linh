<?php require 'partials/header.php'; ?>
<div class="container">
    <h2>Chỉnh sửa</h2>
    <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>
    <form action="/posteditadmin" class="was-validated" method="post">

        <?php foreach ($admins as $admin) : ?>
            <input type="hidden" name="articleCode" value="<?= $admin->articleCode ?>">
            <div class="form-group">
                <label for="artical-name">Article Name:</label>
                <textarea type="text" class="form-control" name="articleName"><?= $admin->articleName ?></textarea>

            </div>
            <div class="form-group">
                <label for="place">placeName:</label>
                <textarea type="text" class="form-control" name="placeName"><?= $admin->placeName ?></textarea>
            </div>
            <div class="form-group">
                <label for="category">categoryArticle:</label>
                <textarea type="text" class="form-control" name="categoryArticle"><?= $admin->categoryArticle ?></textarea>

            </div>
            <div class="form-group">
                <label for="content">content:</label>
                <textarea type="text" class="form-control" name="content"><?= $admin->content ?></textarea>
            </div>
            <div class="form-group">
                <label for="quantitychars">quantitychars:</label>
                <input type="text" class="form-control" name="quantitychars" value="<?= $admin->quantitychars ?>">

            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" class="form-control" name="image" value="<?= $admin->image ?>">

            </div>
            <div class="form-group">
                <label for="uploadDate">uploadDate:</label>
                <input type="text" class="form-control" name="uploadDate" value="<?= $admin->uploadDate ?>">

            </div>
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="text" class="form-control" name="deadline" value="<?= $admin->deadline ?>">

            </div>
            
        <?php endforeach; ?>

        <div class="form-group">
            <label for="writerCode">Write Code:</label>
            <select id="writerCode" name="writerCode">
                <?php foreach ($writeCodes as $writer) : ?>
                    <?php if ($admin->writerCode == $writer->writerCode) : ?>
                        <option value="<?= $writer->writerCode ?>" selected><?= $writer->writerName ?></option>
                    <?php else : ?>
                        <option value="<?= $writer->writerCode ?>"><?= $writer->writerName ?></option>
                    <?php endif; ?>


                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


        <?php require 'partials/footer.php'; ?>