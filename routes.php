<?php

$router->get('', 'app/Http/Controllers/HomeController.php@index');
$router->get('users', 'app/Http/Controllers/UserController.php@index');
$router->get('about', 'app/Http/Controllers/AboutController.php@index');
$router->get('educations', 'app/Http/Controllers/EducationController.php@index');
$router->get('experience', 'app/Http/Controllers/ExperienceController.php@index');
$router->get('skills', 'app/Http/Controllers/SkillsController.php@index');
$router->get('portfolio', 'app/Http/Controllers/PortfolioController.php@index');
$router->get('contact', 'app/Http/Controllers/ContactController.php@index');
