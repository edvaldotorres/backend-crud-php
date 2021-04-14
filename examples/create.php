<?php 

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Edjane";
$user->last_name = "Torres";
$user->genre = "F";
$user->save();

// $addr = new Address();
// $addr->add($user, "Nome da rua faker!", "100");
// $addr->save();

var_dump($addr);