<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(1); // ID a ser deletado

if ($user) {
    $user->destroy();
} else {
    var_dump($user);
}
