<?php

namespace App\Migrations;

use App;

class create_purchases_table extends Migration{

    protected $name = 'create_purchases_table';
    public function up()
    {
        $this->exec(
            "CREATE TABLE IF NOT EXISTS purchases (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL,
            purchase_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id));"
        );
    }

    public function down()
    {
        $this->exec("DROP TABLE IF EXISTS purchases;");
    }
}