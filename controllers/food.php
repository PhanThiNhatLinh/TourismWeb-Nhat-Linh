<?php 
$admins = $app['database']->selectAll('admin');

$bunbo = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1032;
});
$banhbeo = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1009;
});
$banhnam = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1010;
});
$banhnam1 = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1010;
});
$bunhen = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1033;
});
$banhep = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1034;
});
include 'views/food.view.php';
?>