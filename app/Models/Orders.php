<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = ['code','is_complete'];
    function reservation(){
        return $this->hasMany(Reservation::class, 'orders_id', 'id');
    }
}
