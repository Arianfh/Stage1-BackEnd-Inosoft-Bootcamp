<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'item_name',
        'item_type',
        'item_price',
        'item_desc'
    ];
}
