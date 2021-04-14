<?php 

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(5);
$user->first_name = "Ednaldo";
$user->last_name = "Torres de Souza";
$user->save();

var_dump($user);
