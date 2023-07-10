<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupertodPrice extends Model
{
    use HasFactory;

    protected $table = 'super3679897product';

    protected $fillable = [
        'product_id',
        'model',
        'price',
        // 'price_value',
    ];

}
