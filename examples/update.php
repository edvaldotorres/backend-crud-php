<?php 

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(5);
$user->first_name = "Atualizar nome";
$user->last_name = "Atualizar segundo nome";
$user->save();

var_dump($user);
