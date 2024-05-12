<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orders extends Model
{
    use HasFactory;
    public $fillable=[ 'number','products','user_id'];
    //НА БУДУЩЕЕ
//    public function User(): BelongsTo
//    {
//        return $this->belongsTo(User::class);
//    }

}
