<?php

namespace App\Migrations;

use App;

class create_purchases_items_table extends Migration{

    protected $name = 'create_purchases_items_table';
    public function up()
    {
        $this->exec(
            "CREATE TABLE IF NOT EXISTS purchase_items (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            purchase_id INTEGER NOT NULL,
            product_id INTEGER NOT NULL,
            quantity INTEGER NOT NULL,
            FOREIGN KEY (purchase_id) REFERENCES purchases(id),
            FOREIGN KEY (product_id) REFERENCES products(id))"
        );
    }

    public function down()
    {
        $this->exec("DROP TABLE IF EXISTS purchase_items;");
    }
}