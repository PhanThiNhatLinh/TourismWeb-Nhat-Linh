<?php
$admins = $app['database']->selectAll('admin');

$tuduc = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1003;
});
// $tuduc= array_filter($admins, function ($admin) {
//     return $admin->articleCode == 1003;
// // });
// die(var_dump($tuduc));
include 'views/viewweb/tuduc.view.php';
?>