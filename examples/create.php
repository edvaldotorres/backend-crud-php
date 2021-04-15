<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Primeiro nome";
$user->last_name = "Segundo nome";
$user->genre = "M";

$user->save();
var_dump($user);

// $addr = new Address();
// $addr->add($user, "Nome da rua faker!", "100");

// $addr->save();
// var_dump($addr);
