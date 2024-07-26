<?php

require_once __DIR__ . '/../../../vendor/autoload.php'; // Ajuste o caminho conforme necessário

// Conecte-se ao banco de dados
$pdo = new PDO('sqlite:' . __DIR__ . '/../../../database/sqlite.db'); // Ajuste o caminho conforme necessário

// Verifica se a classe e o método foram passados como argumentos
if ($argc < 3) {
    echo "Uso: php runner.php <Classe> <Método>\n";
    exit(1);
}

$className = $argv[1];
$methodName = $argv[2];

// Verifica se a classe existe
if (!class_exists('App\\Migrations\\' . $className)) {
    echo "Classe 'App\Migrations\\{$className}' não encontrada.\n";
    exit(1);
}

// Cria uma instância da classe
$classInstance = new ("App\\Migrations\\" . $className)($pdo);

// Verifica se o método existe na classe
if (!method_exists($classInstance, $methodName)) {
    echo "Método '{$methodName}' não encontrado na classe '{$className}'.\n";
    exit(1);
}

// Executa o método
try {
    $classInstance->$methodName();
} catch (Exception $e) {
    echo "Erro ao executar o método: " . $e->getMessage() . "\n";
}
