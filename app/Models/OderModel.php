<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'name',
        'total_price',
        'payment',
        'order_status',
    ];
}
