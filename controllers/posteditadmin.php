<?php

// $app['database']->update('admin', $_GET['articleCode'],$_GET['articleName'],
// $_GET['placeName'],$_GET['writerCode'],$_GET['categoryArticle'],$_GET['content']
// ,$_GET['quantitychars'],$_GET['uploadDate'],$_GET['deadline']  );


$app['database']->update('admin', [
    'articleName' => $_POST['articleName'],
    'placeName' => $_POST['placeName'],
    'categoryArticle' => $_POST['categoryArticle'],
    'content' => $_POST['content'],
    'quantitychars' => $_POST['quantitychars'],
    'image' => $_POST['image'],
    'uploadDate' => $_POST['uploadDate'],
    'deadline' => $_POST['deadline'],
    'writerCode' => $_POST['writerCode'],
    'articleCode' => $_POST['articleCode']
]);
header('Location: /admin');
