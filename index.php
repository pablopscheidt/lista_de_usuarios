<?php

require_once 'vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();

$users = [];

for ($i = 0; $i < 10; $i++) {
    $users[] = [
        'nome' => $faker->name,
        'email' => $faker->email,
        'telefone' => $faker->phoneNumber,
        'endereco' => [
            'rua' => $faker->streetAddress,
            'cidade' => $faker->city,
            'estado' => $faker->state,
            'cep' => $faker->postcode,
            'país' => $faker->country,
        ]
    ];
}

foreach ($users as $user) {
    echo "Nome: {$user['nome']}\n";
    echo "Email: {$user['email']}\n";
    echo "Telefone: {$user['telefone']}\n";
    echo "Endereço: {$user['endereco']['rua']}, {$user['endereco']['cidade']}, {$user['endereco']['estado']}, {$user['endereco']['cep']}, {$user['endereco']['país']}\n";
    echo "\n";
}