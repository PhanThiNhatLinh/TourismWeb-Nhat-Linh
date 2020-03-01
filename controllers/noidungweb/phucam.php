<?php
$admins = $app['database']->selectAll('admin');

$phucam = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1022;
});
include 'views/viewweb/phucam.view.php';
?>