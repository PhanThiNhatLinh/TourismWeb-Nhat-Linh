<?php
$admins = $app['database']->selectAll('admin');

$dainoi = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1001;
});

include 'views/viewweb/dainoi.view.php';
?>