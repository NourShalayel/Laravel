<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    public function cars(){
        return $this->hasMany(car::class);
    }
    protected $fillable = [
        'id',
        'name',
        'number',
        'contact',
        'email',
        'address',
        'age',
        'description',
    ];
}
