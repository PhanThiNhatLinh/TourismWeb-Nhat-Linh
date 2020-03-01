<?php 
$admins = $app['database']->selectAll('admin');
include 'views/admin.view.php';
?>