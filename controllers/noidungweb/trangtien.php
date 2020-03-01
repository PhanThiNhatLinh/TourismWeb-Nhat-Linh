<?php
$admins = $app['database']->selectAll('admin');

$trangtien = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1014;
});

include 'views/viewweb/trangtien.view.php';
?>