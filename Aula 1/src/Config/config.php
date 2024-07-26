<?php
use Illuminate\Database\Capsule\Manager as Capsule;

// Configuração do banco de dados
$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => __DIR__ . '/../../database/sqlite.db',
]);

// Inicialize o Eloquent ORM
$capsule->setAsGlobal();
$capsule->bootEloquent();
