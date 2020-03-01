<?php 

$writeCodes = $app['database']->selectAll('writer_information');

include 'views/add-active.view.php';
