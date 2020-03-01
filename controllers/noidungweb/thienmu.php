<?php
$admins = $app['database']->selectAll('admin');

$thienmu = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1004;
});

include 'views/viewweb/thienmu.view.php';
?>