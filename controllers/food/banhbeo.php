<?php
$admins = $app['database']->selectAll('admin');

$banhbeo = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1009;
});

include 'views/viewfood/banhbeo.view.php';
?>