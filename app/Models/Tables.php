<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table = 'tables';

    function reservation(){
        return $this->hasMany(Reservation::class, 'tables_id', 'id');
    }
}
