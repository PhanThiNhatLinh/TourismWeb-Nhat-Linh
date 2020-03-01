<?php
$admins = $app['database']->selectAll('admin');

$tuduc2 = array_filter($admins, function ($admin) {
    return $admin->articleCode == 1016;
});

include 'views/viewweb/tuduc2.view.php';
?>