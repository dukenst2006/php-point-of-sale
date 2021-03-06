<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleItems extends Model
{
    protected $fillable = [
        'sale_id', 'item_id', 'qtty_sold', 'buying_price', 'selling_price'
    ];

    public $table = 'sales_items';
}
