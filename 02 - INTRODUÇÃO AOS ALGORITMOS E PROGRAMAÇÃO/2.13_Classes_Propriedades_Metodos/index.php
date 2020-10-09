<?php

declare(strict_types=1);

require __DIR__ . '/../framework/config.php';
PHPClassName('2.13 - Classes, propriedades e objetos');

PHPClassSession('Classes e Objetos', __LINE__);

require_once __DIR__ . "/classes/User.php";

$user1 = new User();
$user2 = new User();
$user3 = new User();

var_dump($user1, $user2, $user3);

PHPClassSession('Propriedades', __LINE__);

$user1->setFirstName("Wânder");
$user1->setLastName("Santos");
$user1->email = "wander";

var_dump($user1, $user1->getFirstName());

PHPClassSession('Métodos', __LINE__);

$email = "wander.asafadf";
if (!$user1->setEmail($email)) {
    echo "<p class='trigger error'> O e-mail '{$email}' é inválido! </p>";
}

var_dump($user1);