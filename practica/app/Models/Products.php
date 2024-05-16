<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Products extends Model
{
    use HasFactory;

    //поля модели становятся публичными- можно делать записи
    protected $fillable = [
        'name',
        'description'
        
    ];

    //в одном заказе может быть много товаров
    protected function orders(): BelongsToMany
    {
        return $this->belongsToMany(Orders::class)->withPivot('amount');
    }
}
