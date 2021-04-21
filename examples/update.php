<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(1); // ID para atualizar
$user->first_name = "Atualizar para primeiro nome";
$user->last_name = "Atualizar para segundo nome";
$user->save();

var_dump($user);
