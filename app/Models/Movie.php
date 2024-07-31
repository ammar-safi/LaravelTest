<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        "name" , 
        "type_id" , 
        "director" , 
        "rating" , 
    ] ;

    public function Type() {
        return $this->belongsTo(Type::class);
    }
}
