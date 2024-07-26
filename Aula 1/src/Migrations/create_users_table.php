<?php

namespace App\Migrations;

use App;

class create_users_table extends Migration{

    protected $name = 'create_users_table';
    public function up()
    {
        $this->exec("
        CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            email TEXT NOT NULL UNIQUE,
            cpf TEXT NOT NULL UNIQUE,
            birthdate DATE NOT NULL,
            is_active BOOLEAN NOT NULL DEFAULT TRUE
        );
        ");
    }

    public function down()
    {
        $this->exec("DROP TABLE IF EXISTS users;");
    }
}
