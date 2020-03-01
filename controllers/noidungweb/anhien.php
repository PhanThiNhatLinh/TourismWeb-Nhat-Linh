<?php
$admins = $app['database']->selectAll('admin');

$anhien = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1019;
});

include 'views/viewweb/anhien.view.php';
?>