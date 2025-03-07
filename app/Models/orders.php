<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = [
        'invoice',
        'customer_id',
        'user_id',
        'total',
    ];
}
