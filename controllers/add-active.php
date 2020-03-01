<?php
$app['database']->insert('admin', [
    'articleName' => $_POST['articleName'],
    'placeName' => $_POST['placeName'],
    'writerCode' => $_POST['writerCode'],
    'categoryArticle' => $_POST['categoryArticle'],
    'content' => $_POST['content'],
    'quantitychars' => $_POST['quantitychars'],
    'image' => $_POST['image'],
    'uploadDate' => $_POST['uploadDate'],
    'deadline' => $_POST['deadline'],
]);

header('Location: /admin');
