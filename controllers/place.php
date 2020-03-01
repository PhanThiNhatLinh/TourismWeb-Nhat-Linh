<?php

$admins = $app['database']->selectAll('admin');

$dainoi = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1001;
});

$tuduc= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1003;
});
$thienmu= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1004;
});
$dainoi2= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1015;
});
$tuduc2= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1016;
});
$thienmu2= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1017;
});
$anhien= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1019;
});
$phuoctich= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1020;
});
$phucam= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1022;
});
$vongcanh= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1006;
});
$thienan= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1013;
});
$trangtien= array_filter($admins, function ($admin) {
    return $admin->articleCode == 1014;
});
include 'views/place.view.php';
