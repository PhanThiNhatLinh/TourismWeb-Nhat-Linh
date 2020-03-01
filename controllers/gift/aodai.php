<?php
$admins = $app['database']->selectAll('admin');

$aodai = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1026;
});

include 'views/gift/aodai.view.php';
?>