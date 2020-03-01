<?php
$admins = $app['database']->selectAll('admin');

$banhep= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1034;
});

include 'views/viewfood/banhep.view.php';
?>