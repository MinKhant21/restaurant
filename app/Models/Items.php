<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $fillable = ['categories_id','name', 'img', 'price', 'active'];

    public function categories(){
        return $this->belongsTo(Categories::class, 'categories_id','id');
    }
    function reservation(){
        return $this->hasMany(Reservation::class, 'items_id', 'id');
    }
}