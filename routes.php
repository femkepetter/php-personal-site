<?php

$router->get('', 'app/Http/Controllers/HomeController.php@index');
$router->get('home', 'app/Http/Controllers/HomeController.php@index');
$router->get('users', 'app/Http/Controllers/UserController.php@index');
$router->get('about', 'app/Http/Controllers/AboutController.php@index');
$router->get('educations', 'app/Http/Controllers/EducationController.php@index');
