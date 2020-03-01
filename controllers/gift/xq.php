<?php
$admins = $app['database']->selectAll('admin');

$xq = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1025;
});

include 'views/gift/xq.view.php';
?>