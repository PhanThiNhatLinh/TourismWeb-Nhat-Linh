<?php
$admins = $app['database']->selectAll('admin');

$trucchi = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1027;
});

include 'views/gift/trucchi.view.php';
?>