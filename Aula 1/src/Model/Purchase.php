<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'purchase_date'];
    public $timestamps = false;
}
