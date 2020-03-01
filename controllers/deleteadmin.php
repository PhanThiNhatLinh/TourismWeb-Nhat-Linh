<?php

// die(var_dump($_GET['articleCode']));

$app['database']->delete('admin', $_GET['articleCode']);

header('Location: /admin');
