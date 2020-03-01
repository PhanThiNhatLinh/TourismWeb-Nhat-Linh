<?php 
$admins = $app['database']->selectAll('admin');

$trucchi = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1027;
});
$xq = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1025;
});
$aodai = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1026;
});
$thanhtien = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1028;
});
include 'views/gift.view.php';
?>