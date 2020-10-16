<?php

declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
<<<<<<< HEAD
PHPClassName('2.14 - Namespace');
=======
PHPClassName('2.14 Namespace');
>>>>>>> master


PHPClassSession('Namespace', __LINE__);

<<<<<<< HEAD

=======
>>>>>>> master
require_once __DIR__ . "/classes/App/Template.php";
require_once __DIR__ . "/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump($appTemplate, $webTemplate);