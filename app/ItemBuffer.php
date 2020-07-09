<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemBuffer extends Model
{
    protected $fillable = [
        'Entry_No',
        'Item_No',
        'Item_Description',
        'Serial_No',
        'Lot_No'
    ];
}
