<?php
$admins = $app['database']->selectAll('admin');

$thienmu2 = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1017;
});

include 'views/viewweb/thienmu2.view.php';
?>