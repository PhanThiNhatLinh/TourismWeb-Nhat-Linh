<?php
$admins = $app['database']->selectAll('admin');

$bunhen= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1033;
});

include 'views/viewfood/bunhen.view.php';
?>