<?php

namespace App\Migrations;

use App;

class create_product_table extends Migration{

    protected $name = 'create_product_table';
    public function up()
    {
        $this->exec("
        CREATE TABLE IF NOT EXISTS products (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name TEXT NOT NULL,
            price NUMBER NOT NULL UNIQUE,
            is_active BOOLEAN NOT NULL DEFAULT TRUE
        );
        ");
    }

    public function down()
    {
        $this->exec("DROP TABLE IF EXISTS products;");
    }
}
