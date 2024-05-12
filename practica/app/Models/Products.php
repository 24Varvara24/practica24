<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    //поля модели становятся публичными- можно делать записи
    protected $fillable = [
        'name',
        'description',
        'image'
    ];
}
