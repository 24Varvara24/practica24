<?php

namespace App\Models;

use App\Dictionaries\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status_id'
    ];


    protected function status(): Attribute //атрибут УЗНАТЬ БОЛЬШЕ!!!!!!!
    {
        return Attribute::make(
            get: fn () => OrderStatus::status($this->status_id),
        );
    }

    public function owner() : BelongsTo //СОЗДАТЕЛЬ ЗАКАЗА и только один
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products(): BelongsToMany //в товарах есть похожая связь  BelongsToMany но наоборот,создается связь многое ко многим с заказами и продуктами
    {
        return $this->belongsToMany(Products::class)->withPivot('amount');
    }
}
