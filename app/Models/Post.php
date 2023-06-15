<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title', 'content', 
        'published_at', 'published',
    ];

    protected $casts =[
        'published' => 'boolean',
    ];

    protected $dates = [
        'published_at'
    ];

    public static function getValidateRules (): array {
        return [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
            'published_at' => ['nullable', 'string', 'date'],
            'published' => ['nullable', 'boolean'],
        ];
    }
}
