<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PurchaseItem extends Model
{
    protected $table = 'purchases_items';
    protected $primaryKey = 'id';
    protected $fillable = ['purchase_id', 'product_id', 'quantity'];
    public $timestamps = false;
}
