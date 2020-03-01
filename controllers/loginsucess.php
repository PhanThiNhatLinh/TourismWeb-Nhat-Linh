<?php
$user =  $app['database']->login(
    'login',
    [
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ]
);

if (count($user) > 0) {
    header('Location: /admin');
} else {
    header('Location: /login');
}
