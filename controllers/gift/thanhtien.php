<?php
$admins = $app['database']->selectAll('admin');

$thanhtien = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1028;
});

include 'views/gift/thanhtien.view.php';
?>