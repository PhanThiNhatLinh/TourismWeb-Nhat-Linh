<?php
$admins = $app['database']->selectAll('admin');

$bunbo = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1032;
});

include 'views/viewfood/bunbo.view.php';
?>