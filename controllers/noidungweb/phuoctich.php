<?php
$admins = $app['database']->selectAll('admin');

$phuoctich = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1020;
});
include 'views/viewweb/phuoctich.view.php';
?>