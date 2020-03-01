<?php
$admins = $app['database']->selectAll('admin');

$banhnam1 = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1010;
});

include 'views/viewfood/banhnam1.view.php';
?>