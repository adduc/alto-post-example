<?php

require_once('vendor/autoload.php');

$router = new AltoRouter();

$router->map('GET', '/profile', 'profile', 'profile_route');
$router->map('POST', '/login', 'login', 'login_route');

$match = $router->match();

switch($match['target']) {
    case 'profile':
        include('templates/login.tem.php');
        break;
    case 'login':
        echo "<pre>" . var_export($_POST, true) . "</pre>";
        break;
}
