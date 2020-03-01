<?php
$admins = $app['database']->selectAll('admin');

$thienan = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1013;
});

include 'views/viewweb/thienan.view.php';
?>