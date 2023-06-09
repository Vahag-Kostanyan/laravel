<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $table = 'currency';

    protected $fillable = [
        'id', 'name', 'price',
        'is_active', 'sort', 'secret'
    ];

    // protected $guarded = [] //for the database filed that you don't wont to use in model 

    protected $hidden = [
        // 'is_active'
    ];

    protected $casts = [
        'price' => 'float'
    ];
}
