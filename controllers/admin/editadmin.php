<?php
$admins = $app['database']->getId('admin', $_GET['articleCode']);
$writeCodes = $app['database']->selectAll('writer_information');

require_once "views/editadmin.view.php";
