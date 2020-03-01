<?php
$admins = $app['database']->selectAll('admin');

$dainoi2 = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1015;
});
include 'views/viewweb/dainoi2.view.php';
?>