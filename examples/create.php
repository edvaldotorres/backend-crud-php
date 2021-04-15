<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Edjane";
$user->last_name = "Torres";
$user->genre = "F";

var_dump($addr);
$user->save();

// $addr = new Address();
// $addr->add($user, "Nome da rua faker!", "100");

// var_dump($addr);
// $addr->save();
