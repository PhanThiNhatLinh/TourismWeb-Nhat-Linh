<?php
$admins = $app['database']->selectAll('admin');

$banhnam = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1010;
});

include 'views/viewfood/banhnam.view.php';
?>