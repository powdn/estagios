<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Convenio;
use Faker\Generator as Faker;

$factory->define(Convenio::class, function (Faker $faker) {
    return [
      'nome_representante' => $faker->name,
      'cargo_representante' => $faker->jobTitle ,
      'email_representante' => $faker->email,
      'rg_representante' => $faker->rg(false),
      'cpf_representante' => $faker->cpf(false),
      'nome_representante2' => $faker->name,
      'cargo_representante2' => $faker->jobTitle,
      'email_representante2' => $faker->email,
      'rg_representante2' => $faker->rg(false),
      'cpf_representante2' => $faker->cpf(false),
      'descricao' => $faker->text,
      'atividade' => $faker->text,
      'nome_contato' => $faker->name,
      'tel_contato' => $faker->cellphoneNumber,
      'email_contato' => $faker->email,
      'cnpj' => factory(App\Empresa::class)->create()->cnpj,
    ];
});
