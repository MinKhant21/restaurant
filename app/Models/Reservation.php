<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservation';
    protected $fillable = ['tables_id', 'items_id', 'orders_id', 'quantity'];
    function tables(){
        return $this->belongsTo(Tables::class, 'tables_id', 'id');
    }

    function items(){
        return $this->belongsTo(Items::class, 'items_id', 'id');
    }

    function orders(){
        return $this->belongsTo(Orders::class, 'orders_id', 'id');
    }
}
