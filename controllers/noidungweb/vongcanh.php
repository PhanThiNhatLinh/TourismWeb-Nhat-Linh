<?php
$admins = $app['database']->selectAll('admin');

$vongcanh = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1006;
});

include 'views/viewweb/vongcanh.view.php';
?>